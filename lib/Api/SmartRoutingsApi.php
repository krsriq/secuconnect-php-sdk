<?php
/**
 * @noinspection PhpUnused
 * @noinspection DuplicatedCode
 * @noinspection PhpUnnecessaryLocalVariableInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @noinspection PhpFullyQualifiedNameUsageInspection
 * @noinspection PhpPureAttributeCanBeAddedInspection
 */

namespace Secuconnect\Client\Api;

use Exception;
use InvalidArgumentException;
use Secuconnect\Client\ApiController;
use Secuconnect\Client\ApiException;

/**
 * SmartRoutingsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartRoutingsApi extends ApiController
{

    /**
     * Operation addRouting
     *
     * POST Smart/Routings
     *
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addRouting(\Secuconnect\Client\Model\SmartRoutingsDTO $body): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->addRoutingWithHttpInfo($body)[0];
    }

    /**
     * Operation addRoutingWithHttpInfo
     *
     * POST Smart/Routings
     *
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addRoutingWithHttpInfo(\Secuconnect\Client\Model\SmartRoutingsDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Smart/Routings";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $httpBody = $body;
        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation assignDeviceToRouting
     *
     * POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingPriority $body Smart routing assignment properties
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignDeviceToRouting(string $smart_routing_id, string $smart_device_id, \Secuconnect\Client\Model\SmartRoutingPriority $body): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->assignDeviceToRoutingWithHttpInfo($smart_routing_id, $smart_device_id, $body)[0];
    }

    /**
     * Operation assignDeviceToRoutingWithHttpInfo
     *
     * POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingPriority $body Smart routing assignment properties
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignDeviceToRoutingWithHttpInfo(string $smart_routing_id, string $smart_device_id, \Secuconnect\Client\Model\SmartRoutingPriority $body): array
    {
        // verify the required parameter 'smart_routing_id' is set
        if (empty($smart_routing_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling assignDeviceToRouting'
            );
        }

        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling assignDeviceToRouting'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartRoutingId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartDeviceId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_device_id),
           $resourcePath
        );

        $httpBody = $body;
        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation getAll
     *
     * GET Smart/Routings
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\SmartRoutingsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\SmartRoutingsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Routings
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\SmartRoutingsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Smart/Routings";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }

        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }

        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }

        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsList'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation getOne
     *
     * GET Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $smart_routing_id): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->getOneWithHttpInfo($smart_routing_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $smart_routing_id): array
    {
        // verify the required parameter 'smart_routing_id' is set
        if (empty($smart_routing_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartRoutingId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
           $resourcePath
        );

        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation removeRouting
     *
     * DELETE Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeRouting(string $smart_routing_id): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->removeRoutingWithHttpInfo($smart_routing_id)[0];
    }

    /**
     * Operation removeRoutingWithHttpInfo
     *
     * DELETE Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeRoutingWithHttpInfo(string $smart_routing_id): array
    {
        // verify the required parameter 'smart_routing_id' is set
        if (empty($smart_routing_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling removeRouting'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartRoutingId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
           $resourcePath
        );

        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'DELETE',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation removeSmartRoutingAssignment
     *
     * DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeSmartRoutingAssignment(string $smart_routing_id, string $smart_device_id): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->removeSmartRoutingAssignmentWithHttpInfo($smart_routing_id, $smart_device_id)[0];
    }

    /**
     * Operation removeSmartRoutingAssignmentWithHttpInfo
     *
     * DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param string $smart_device_id Smart device id (required)
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeSmartRoutingAssignmentWithHttpInfo(string $smart_routing_id, string $smart_device_id): array
    {
        // verify the required parameter 'smart_routing_id' is set
        if (empty($smart_routing_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling removeSmartRoutingAssignment'
            );
        }

        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling removeSmartRoutingAssignment'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartRoutingId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartDeviceId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_device_id),
           $resourcePath
        );

        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'DELETE',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation updateRouting
     *
     * PUT Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties
     * @return \Secuconnect\Client\Model\SmartRoutingsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateRouting(string $smart_routing_id, \Secuconnect\Client\Model\SmartRoutingsDTO $body): \Secuconnect\Client\Model\SmartRoutingsProductModel
    {
        return $this->updateRoutingWithHttpInfo($smart_routing_id, $body)[0];
    }

    /**
     * Operation updateRoutingWithHttpInfo
     *
     * PUT Smart/Routings/{smartRoutingId}
     *
     * @param string $smart_routing_id Smart routing id (required)
     * @param \Secuconnect\Client\Model\SmartRoutingsDTO $body Smart routing properties
     * @return array of \Secuconnect\Client\Model\SmartRoutingsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateRoutingWithHttpInfo(string $smart_routing_id, \Secuconnect\Client\Model\SmartRoutingsDTO $body): array
    {
        // verify the required parameter 'smart_routing_id' is set
        if (empty($smart_routing_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_routing_id when calling updateRouting'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Routings/{smartRoutingId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartRoutingId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_routing_id),
           $resourcePath
        );

        $httpBody = $body;
        for ($retries = 0; ; $retries++) {
            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartRoutingsProductModel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, $responseType, $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }
}
