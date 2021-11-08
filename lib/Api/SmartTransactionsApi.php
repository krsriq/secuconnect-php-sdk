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
 * SmartTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApi extends ApiController
{

    /**
     * Operation addTransaction
     *
     * POST Smart/Transactions
     *
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $body Smart transaction properties
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addTransaction(\Secuconnect\Client\Model\SmartTransactionsDTO $body): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->addTransactionWithHttpInfo($body)[0];
    }

    /**
     * Operation addTransactionWithHttpInfo
     *
     * POST Smart/Transactions
     *
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $body Smart transaction properties
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addTransactionWithHttpInfo(\Secuconnect\Client\Model\SmartTransactionsDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Smart/Transactions";
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation cancelTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/cancel
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelTransaction(string $smart_transaction_id): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->cancelTransactionWithHttpInfo($smart_transaction_id)[0];
    }

    /**
     * Operation cancelTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/cancel
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelTransactionWithHttpInfo(string $smart_transaction_id): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling cancelTransaction'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/cancel";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation cancelTrx
     *
     * POST Smart/Transactions/{smartTransactionId}/canceltrx
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelTrx(string $smart_transaction_id): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->cancelTrxWithHttpInfo($smart_transaction_id)[0];
    }

    /**
     * Operation cancelTrxWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/canceltrx
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelTrxWithHttpInfo(string $smart_transaction_id): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling cancelTrx'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/canceltrx";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation diagnose
     *
     * POST Smart/Transactions/{smartDeviceId}/diagnosis
     *
     * @param string $smart_device_id Smart device id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function diagnose(string $smart_device_id): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->diagnoseWithHttpInfo($smart_device_id)[0];
    }

    /**
     * Operation diagnoseWithHttpInfo
     *
     * POST Smart/Transactions/{smartDeviceId}/diagnosis
     *
     * @param string $smart_device_id Smart device id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function diagnoseWithHttpInfo(string $smart_device_id): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling diagnose'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartDeviceId}/diagnosis";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * GET Smart/Transactions
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\SmartTransactionsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\SmartTransactionsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Smart/Transactions
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\SmartTransactionsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Smart/Transactions";
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsList'
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
     * GET Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $smart_transaction_id): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->getOneWithHttpInfo($smart_transaction_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $smart_transaction_id): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation preTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/preTransaction
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function preTransaction(string $smart_transaction_id): \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel
    {
        return $this->preTransactionWithHttpInfo($smart_transaction_id)[0];
    }

    /**
     * Operation preTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/preTransaction
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsPreTransactionModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function preTransactionWithHttpInfo(string $smart_transaction_id): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling preTransaction'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/preTransaction";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsPreTransactionModel'
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
     * Operation prepare
     *
     * POST Smart/Transactions/stx_xxx/prepare/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function prepare(string $smart_transaction_id, string $payment_method, \Secuconnect\Client\Model\SmartTransactionsPrepare $body): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->prepareWithHttpInfo($smart_transaction_id, $payment_method, $body)[0];
    }

    /**
     * Operation prepareWithHttpInfo
     *
     * POST Smart/Transactions/stx_xxx/prepare/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function prepareWithHttpInfo(string $smart_transaction_id, string $payment_method, \Secuconnect\Client\Model\SmartTransactionsPrepare $body): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling prepare'
            );
        }

        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling prepare'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/prepare/{paymentMethod}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation setDelivery
     *
     * POST Smart/Transactions/stx_xxx/setDelivery
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsSetDeliveryModel $body Information about the delivery status
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setDelivery(string $smart_transaction_id, \Secuconnect\Client\Model\SmartTransactionsSetDeliveryModel $body): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->setDeliveryWithHttpInfo($smart_transaction_id, $body)[0];
    }

    /**
     * Operation setDeliveryWithHttpInfo
     *
     * POST Smart/Transactions/stx_xxx/setDelivery
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsSetDeliveryModel $body Information about the delivery status
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setDeliveryWithHttpInfo(string $smart_transaction_id, \Secuconnect\Client\Model\SmartTransactionsSetDeliveryModel $body): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling setDelivery'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/setDelivery";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation startEndOfDayReport
     *
     * POST Smart/Transactions/{smartDeviceId}/endOfDay
     *
     * @param string $smart_device_id Smart device id (required)
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function startEndOfDayReport(string $smart_device_id): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->startEndOfDayReportWithHttpInfo($smart_device_id)[0];
    }

    /**
     * Operation startEndOfDayReportWithHttpInfo
     *
     * POST Smart/Transactions/{smartDeviceId}/endOfDay
     *
     * @param string $smart_device_id Smart device id (required)
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function startEndOfDayReportWithHttpInfo(string $smart_device_id): array
    {
        // verify the required parameter 'smart_device_id' is set
        if (empty($smart_device_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_device_id when calling startEndOfDayReport'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartDeviceId}/endOfDay";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation startTransaction
     *
     * POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function startTransaction(string $smart_transaction_id, string $payment_method, \Secuconnect\Client\Model\SmartTransactionsPrepare $body): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->startTransactionWithHttpInfo($smart_transaction_id, $payment_method, $body)[0];
    }

    /**
     * Operation startTransactionWithHttpInfo
     *
     * POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param string $payment_method Payment method (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Information which customer and container will be used to this operation
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function startTransactionWithHttpInfo(string $smart_transaction_id, string $payment_method, \Secuconnect\Client\Model\SmartTransactionsPrepare $body): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling startTransaction'
            );
        }

        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling startTransaction'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/start/{paymentMethod}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
     * Operation updateTransaction
     *
     * PUT Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $body Smart transaction properties
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateTransaction(string $smart_transaction_id, \Secuconnect\Client\Model\SmartTransactionsDTO $body): \Secuconnect\Client\Model\SmartTransactionsProductModel
    {
        return $this->updateTransactionWithHttpInfo($smart_transaction_id, $body)[0];
    }

    /**
     * Operation updateTransactionWithHttpInfo
     *
     * PUT Smart/Transactions/{smartTransactionId}
     *
     * @param string $smart_transaction_id Smart transaction id (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $body Smart transaction properties
     * @return array of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateTransactionWithHttpInfo(string $smart_transaction_id, \Secuconnect\Client\Model\SmartTransactionsDTO $body): array
    {
        // verify the required parameter 'smart_transaction_id' is set
        if (empty($smart_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling updateTransaction'
            );
        }

        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "smartTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($smart_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\SmartTransactionsProductModel'
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
