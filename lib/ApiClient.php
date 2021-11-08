<?php

namespace Secuconnect\Client;

/**
 * ApiClient
 * based on ApiClient from https://github.com/swagger-api/swagger-codegen
 *
 * TODO use PSR-LOG
 */
class ApiClient
{
    // TODO could become an enum (PHP 8.1)
    public static string $PATCH = "PATCH";
    public static string $POST = "POST";
    public static string $GET = "GET";
    public static string $HEAD = "HEAD";
    public static string $OPTIONS = "OPTIONS";
    public static string $PUT = "PUT";
    public static string $DELETE = "DELETE";

    /**
     * @param Configuration|null $config config for this ApiClient
     * @param ObjectSerializer|null $serializer object serializer
     */
    public function __construct(protected ?Configuration $config = null, protected ?ObjectSerializer $serializer = null)
    {
        $this->config ??= Configuration::getDefaultConfiguration();
        $this->serializer ??= new ObjectSerializer();
    }

    public function getAccessToken(): string
    {
        return $this->config->getAccessToken();
    }

    public function getSerializer(): ObjectSerializer
    {
        return $this->serializer;
    }

    /**
     * Make the HTTP call (Sync)
     *
     * @param string $resourcePath path to method endpoint
     * @param string $method method to call
     * @param array $queryParams parameters to be place in query URL
     * @param array|object|string $postData parameters to be placed in POST body
     * @param array $headerParams parameters to be place in request header
     * @param string|null $responseType expected response type of the endpoint
     *
     * @return array
     * @throws ApiException on a non 2xx response
     */
    public function callApi(
        string $resourcePath,
        string $method,
        array $queryParams,
        array|object|string $postData,
        array $headerParams,
        string $responseType = null
    ): array {
        $headers = [];

        // construct the http header
        $headerParams = array_merge(
            $this->config->getDefaultHeaders(),
            $headerParams
        );

        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        if ($postData && in_array('Content-Type: application/x-www-form-urlencoded', $headers, true)) {
            // form data
            $postData = http_build_query($postData);
        } elseif ((is_object($postData) || is_array($postData)) && !in_array('Content-Type: multipart/form-data', $headers, true)) {
            // json model
            $postData = json_encode(ObjectSerializer::sanitizeForSerialization($postData));
        }

        $url = $this->config->getHost() . $resourcePath;

        $curl = curl_init();
        // set timeout, if needed
        if ($this->config->getCurlTimeout() !== 0) {
            curl_setopt($curl, CURLOPT_TIMEOUT, $this->config->getCurlTimeout());
        }
        // set connect timeout, if needed
        if ($this->config->getCurlConnectTimeout() !== 0) {
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->config->getCurlConnectTimeout());
        }

        // return the result on success, rather than just true
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        // disable SSL verification, if needed
        if (!$this->config->getSSLVerification()) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        }

        if ($this->config->getProxy()) {
            if ($this->config->getProxy()->getHost() !== null) {
                curl_setopt(
                    $curl,
                    CURLOPT_PROXY,
                    $this->config->getProxy()->getHost()
                );
            }

            if ($this->config->getProxy()->getPort() !== null) {
                curl_setopt(
                    $curl,
                    CURLOPT_PROXYPORT,
                    $this->config->getProxy()->getPort()
                );
            }

            if ($this->config->getProxy()->getType() !== null) {
                curl_setopt(
                    $curl,
                    CURLOPT_PROXYTYPE,
                    $this->config->getProxy()->getType()
                );
            }

            if ($this->config->getProxy()->getUsername() !== null) {
                curl_setopt(
                    $curl,
                    CURLOPT_PROXYUSERPWD,
                    $this->config->getProxy()->getUsername() . ':' . $this->config->getProxy()->getPassword()
                );
            }
        }

        if (!empty($queryParams)) {
            $url .= '?' . http_build_query($queryParams);
        }

        if ($this->config->getAllowEncoding()) {
            curl_setopt($curl, CURLOPT_ENCODING, '');
        }

        if ($method === self::$POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$HEAD) {
            curl_setopt($curl, CURLOPT_NOBODY, true);
        } elseif ($method === self::$OPTIONS) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "OPTIONS");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PATCH) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PUT) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$DELETE) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method !== self::$GET) {
            throw new ApiException('Method ' . $method . ' is not recognized.');
        }
        curl_setopt($curl, CURLOPT_URL, $url);

        // Set user agent
        curl_setopt($curl, CURLOPT_USERAGENT, $this->config->getUserAgent());

        // debugging for curl
        if ($this->config->getDebug()) {
            error_log("[DEBUG] HTTP Request body  ~BEGIN~" . PHP_EOL . print_r($postData, true) . PHP_EOL . "~END~" . PHP_EOL, 3, $this->config->getDebugFile());

            curl_setopt($curl, CURLOPT_VERBOSE, 1);
            curl_setopt($curl, CURLOPT_STDERR, fopen($this->config->getDebugFile(), 'a'));
        } else {
            curl_setopt($curl, CURLOPT_VERBOSE, 0);
        }

        // obtain the HTTP response headers
        curl_setopt($curl, CURLOPT_HEADER, 1);

        // Make the request
        $response = curl_exec($curl);
        $response_info = curl_getinfo($curl);
        $http_header_size = $response_info['header_size'];
        $http_header = $this->httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);

        // debug HTTP response body
        if ($this->config->getDebug()) {
            error_log("[DEBUG] HTTP Response body ~BEGIN~" . PHP_EOL . print_r($http_body, true) . PHP_EOL . "~END~" . PHP_EOL, 3, $this->config->getDebugFile());
        }

        // Handle the response
        if ($response_info['http_code'] === 0) {
            $curl_error_message = curl_error($curl);

            // curl_exec can sometimes fail but still return a blank message from curl_error().
            if (!empty($curl_error_message)) {
                $error_message = "API call to $url failed: $curl_error_message";
            } else {
                $error_message = "API call to $url failed, but for an unknown reason. " .
                    "This could happen if you are disconnected from the network.";
            }

            $exception = new ApiException($error_message, 0, null, null);
            $exception->setResponseObject($response_info);
            throw $exception;
        } elseif ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
            // return raw body if response is a file
            if ($responseType === '\SplFileObject' || $responseType === 'string') {
                return [$http_body, $response_info['http_code'], $http_header];
            }

            $data = json_decode($http_body);
            if (json_last_error() > 0) { // if response is a string
                $data = $http_body;
            }
        } else {
            $data = json_decode($http_body);
            if (json_last_error() > 0) { // if response is a string
                $data = $http_body;
            }

            throw new ApiException(
                "[" . $response_info['http_code'] . "] Error connecting to the API ($url)",
                $response_info['http_code'],
                $http_header,
                $data
            );
        }
        return [$data, $response_info['http_code'], $http_header];
    }

    /**
     * Return an array of HTTP response headers.
     *
     * @param string $raw_headers A string of raw HTTP response headers
     * @return array Array of HTTP response headers
     */
    protected function httpParseHeaders(string $raw_headers): array
    {
        preg_match_all('/(?P<key>.*): (?P<value>.*(?:\n\s+.*)*)|^(?P<status>.*)$/m', $raw_headers, $matches, PREG_SET_ORDER);

        $headers = [];
        foreach($matches as $item) {
            if (isset($item['status'])) {
                // f.e. "HTTP/1.1 200 OK"
                $headers[0] = trim($item['status']);
                continue;
            }

            // remove unnecessary space characters f.e. the header "Folded: works\r\n    too\r\n" will be become ["Folded": "works too"]
            $value = preg_replace('/(\r?\n\s+)/', ' ', trim($item['value']));

            if (isset($headers[$item['key']])) {
                // handle multiple values for the same key
                if (!is_array($headers[$item['key']])) {
                    // convert to array first
                    $headers[$item['key']] = [$headers[$item['key']]];
                }

                $headers[$item['key']][] = $value;
            } else {
                $headers[$item['key']] = $value;
            }
        }

        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     * @return string|null Accept (e.g. application/json)
     */
    public function selectHeaderAccept(array $accept): ?string
    {
        if (empty($accept) || $accept === ['']) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $content_type Array fo content-type
     * @return string Content-Type (e.g. application/json)
     */
    public function selectHeaderContentType(array $content_type): string
    {
        if (empty($content_type) || $content_type === ['']) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $content_type)) {
            return 'application/json';
        } else {
            return implode(',', $content_type);
        }
    }
}
