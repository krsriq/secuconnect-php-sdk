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
 * SmartDevicesApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesApi extends ApiController
{

    /**
     * Operation addDevice
     *
     * POST Smart/Devices
     *
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $body Smart device properties
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addDevice(\Secuconnect\Client\Model\SmartDevicesDTO $body): \Secuconnect\Client\Model\SmartDevicesProductModel
    {
        return $this->addDeviceWithHttpInfo($body)[0];
    }

    /**
     * Operation addDeviceWithHttpInfo
     *
     * POST Smart/Devices
     *
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $body Smart device properties
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addDeviceWithHttpInfo(\Secuconnect\Client\Model\SmartDevicesDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Smart/Devices";
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
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesProductModel'
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
     * GET Smart/Devices
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\SmartDevicesList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\SmartDevicesList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Devices
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\SmartDevicesList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Smart/Devices";
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
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesList'
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
     * GET Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $smart_device_id): \Secuconnect\Client\Model\SmartDevicesProductModel
    {
        return $this->getOneWithHttpInfo($smart_device_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $smart_device_id): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

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
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesProductModel'
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
     * Operation getRouting
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param string $type Smart Device Type (required)
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getRouting(string $smart_device_id, string $type): \Secuconnect\Client\Model\SmartDevicesProductModel
    {
        return $this->getRoutingWithHttpInfo($smart_device_id, $type)[0];
    }

    /**
     * Operation getRoutingWithHttpInfo
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param string $type Smart Device Type (required)
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getRoutingWithHttpInfo(string $smart_device_id, string $type): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling getRouting'
            );
        }

        // verify the required parameter 'type' is set
        if (empty($type)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $type when calling getRouting'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/routing/type/{type}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartDeviceId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_device_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "type" . "}",
            $this->apiClient->getSerializer()->toPathValue($type),
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
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesProductModel'
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
     * Operation updateDevice
     *
     * PUT Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $body Smart device properties
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateDevice(string $smart_device_id, \Secuconnect\Client\Model\SmartDevicesDTO $body): \Secuconnect\Client\Model\SmartDevicesProductModel
    {
        return $this->updateDeviceWithHttpInfo($smart_device_id, $body)[0];
    }

    /**
     * Operation updateDeviceWithHttpInfo
     *
     * PUT Smart/Devices/{smartDeviceId}
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDevicesDTO $body Smart device properties
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateDeviceWithHttpInfo(string $smart_device_id, \Secuconnect\Client\Model\SmartDevicesDTO $body): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling updateDevice'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

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
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesProductModel'
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
     * Operation updatePin
     *
     * PUT /Smart/Devices/{smartDeviceId}/pin
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDeviceUserPin $body Smart device properties
     * @return \Secuconnect\Client\Model\SmartDevicesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updatePin(string $smart_device_id, \Secuconnect\Client\Model\SmartDeviceUserPin $body): \Secuconnect\Client\Model\SmartDevicesProductModel
    {
        return $this->updatePinWithHttpInfo($smart_device_id, $body)[0];
    }

    /**
     * Operation updatePinWithHttpInfo
     *
     * PUT /Smart/Devices/{smartDeviceId}/pin
     *
     * @param string $smart_device_id Smart device id (required)
     * @param \Secuconnect\Client\Model\SmartDeviceUserPin $body Smart device properties
     * @return array of \Secuconnect\Client\Model\SmartDevicesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updatePinWithHttpInfo(string $smart_device_id, \Secuconnect\Client\Model\SmartDeviceUserPin $body): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling updatePin'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Devices/{smartDeviceId}/pin";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

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
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartDevicesProductModel'
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
