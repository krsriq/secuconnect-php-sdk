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
 * GeneralStoresApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresApi extends ApiController
{

    /**
     * Operation addStore
     *
     * POST General/Stores
     *
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addStore(\Secuconnect\Client\Model\GeneralStoresDTO $body): \Secuconnect\Client\Model\GeneralStoresProductModel
    {
        return $this->addStoreWithHttpInfo($body)[0];
    }

    /**
     * Operation addStoreWithHttpInfo
     *
     * POST General/Stores
     *
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addStoreWithHttpInfo(\Secuconnect\Client\Model\GeneralStoresDTO $body): array
    {
        // parse inputs
        $resourcePath = "/General/Stores";
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
                    $responseType = '\Secuconnect\Client\Model\GeneralStoresProductModel'
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
     * Operation checkIn
     *
     * POST General/Stores/{generalStoreId}/checkin
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOType $body General store properties
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkIn(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTOType $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->checkInWithHttpInfo($general_store_id, $body)[0];
    }

    /**
     * Operation checkInWithHttpInfo
     *
     * POST General/Stores/{generalStoreId}/checkin
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOType $body General store properties
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkInWithHttpInfo(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTOType $body): array
    {
        // verify the required parameter 'general_store_id' is set
        if (empty($general_store_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_store_id when calling checkIn'
            );
        }

        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}/checkin";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalStoreId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    $responseType = '\Secuconnect\Client\Model\ResultBoolean'
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
     * GET General/Stores
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\GeneralStoresList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\GeneralStoresList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET General/Stores
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\GeneralStoresList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/General/Stores";
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
                    $responseType = '\Secuconnect\Client\Model\GeneralStoresList'
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
     * GET General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $general_store_id): \Secuconnect\Client\Model\GeneralStoresProductModel
    {
        return $this->getOneWithHttpInfo($general_store_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $general_store_id): array
    {
        // verify the required parameter 'general_store_id' is set
        if (empty($general_store_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_store_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalStoreId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    $responseType = '\Secuconnect\Client\Model\GeneralStoresProductModel'
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
     * Operation setDefault
     *
     * POST General/Stores/{generalStoreId}/setDefault
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOReason $body Reason
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setDefault(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTOReason $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->setDefaultWithHttpInfo($general_store_id, $body)[0];
    }

    /**
     * Operation setDefaultWithHttpInfo
     *
     * POST General/Stores/{generalStoreId}/setDefault
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTOReason $body Reason
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setDefaultWithHttpInfo(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTOReason $body): array
    {
        // verify the required parameter 'general_store_id' is set
        if (empty($general_store_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_store_id when calling setDefault'
            );
        }

        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}/setDefault";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalStoreId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    $responseType = '\Secuconnect\Client\Model\ResultBoolean'
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
     * Operation updateStore
     *
     * PUT General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateStore(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTO $body): \Secuconnect\Client\Model\GeneralStoresProductModel
    {
        return $this->updateStoreWithHttpInfo($general_store_id, $body)[0];
    }

    /**
     * Operation updateStoreWithHttpInfo
     *
     * PUT General/Stores/{generalStoreId}
     *
     * @param string $general_store_id General store id (required)
     * @param \Secuconnect\Client\Model\GeneralStoresDTO $body General store properties
     * @return array of \Secuconnect\Client\Model\GeneralStoresProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateStoreWithHttpInfo(string $general_store_id, \Secuconnect\Client\Model\GeneralStoresDTO $body): array
    {
        // verify the required parameter 'general_store_id' is set
        if (empty($general_store_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_store_id when calling updateStore'
            );
        }

        // parse inputs
        $resourcePath = "/General/Stores/{generalStoreId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalStoreId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_store_id),
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
                    $responseType = '\Secuconnect\Client\Model\GeneralStoresProductModel'
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
