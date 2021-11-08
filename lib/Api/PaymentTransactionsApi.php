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
 * PaymentTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsApi extends ApiController
{

    /**
     * Operation addTransaction
     *
     * POST Payment/Transactions
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Create payment transaction input properties
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addTransaction(\Secuconnect\Client\Model\SecupayTransactionProductDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->addTransactionWithHttpInfo($body)[0];
    }

    /**
     * Operation addTransactionWithHttpInfo
     *
     * POST Payment/Transactions
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Create payment transaction input properties
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addTransactionWithHttpInfo(\Secuconnect\Client\Model\SecupayTransactionProductDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Transactions";
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
                    $responseType = '\Secuconnect\Client\Model\SecupayTransactionProductModel'
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
     * Operation cancel
     *
     * POST Payment/Transactions/{paymentTransactionId}/cancel
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Cancel payment transaction input properties
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancel(string $payment_transaction_id, \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body): array
    {
        return $this->cancelWithHttpInfo($payment_transaction_id, $body)[0];
    }

    /**
     * Operation cancelWithHttpInfo
     *
     * POST Payment/Transactions/{paymentTransactionId}/cancel
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Cancel payment transaction input properties
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelWithHttpInfo(string $payment_transaction_id, \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body): array
    {
        // verify the required parameter 'payment_transaction_id' is set
        if (empty($payment_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling cancel'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/cancel";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]'
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
     * GET Payment/Transactions
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\PaymentTransactionsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\PaymentTransactionsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Payment/Transactions
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Payment/Transactions";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentTransactionsList'
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
     * GET Payment/Transactions/{paymentTransactionId}
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $payment_transaction_id): \Secuconnect\Client\Model\PaymentTransactionsProductModel
    {
        return $this->getOneWithHttpInfo($payment_transaction_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $payment_transaction_id): array
    {
        // verify the required parameter 'payment_transaction_id' is set
        if (empty($payment_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentTransactionsProductModel'
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
     * Operation getPaymentTransactionsOldFormat
     *
     * GET Payment/Transactions/{paymentTransactionId}/OldFormat
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getPaymentTransactionsOldFormat(string $payment_transaction_id): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->getPaymentTransactionsOldFormatWithHttpInfo($payment_transaction_id)[0];
    }

    /**
     * Operation getPaymentTransactionsOldFormatWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}/OldFormat
     *
     * @param string $payment_transaction_id Payment ID (PCI_...) or hash (required)
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getPaymentTransactionsOldFormatWithHttpInfo(string $payment_transaction_id): array
    {
        // verify the required parameter 'payment_transaction_id' is set
        if (empty($payment_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getPaymentTransactionsOldFormat'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/OldFormat";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\SecupayTransactionProductModel'
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
     * Operation getShippingUrl
     *
     * GET Payment/Transactions/{paymentTransactionId}/shippingUrl
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return \Secuconnect\Client\Model\PaymentTransactionsShippingUrl
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getShippingUrl(string $payment_transaction_id): \Secuconnect\Client\Model\PaymentTransactionsShippingUrl
    {
        return $this->getShippingUrlWithHttpInfo($payment_transaction_id)[0];
    }

    /**
     * Operation getShippingUrlWithHttpInfo
     *
     * GET Payment/Transactions/{paymentTransactionId}/shippingUrl
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsShippingUrl, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getShippingUrlWithHttpInfo(string $payment_transaction_id): array
    {
        // verify the required parameter 'payment_transaction_id' is set
        if (empty($payment_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getShippingUrl'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/shippingUrl";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentTransactionsShippingUrl'
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
     * Operation revokeAccrual
     *
     * POST Payment/Transactions/{paymentTransactionId}/revokeAccrual
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrual(string $payment_transaction_id): \Secuconnect\Client\Model\PaymentTransactionsProductModel
    {
        return $this->revokeAccrualWithHttpInfo($payment_transaction_id)[0];
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * POST Payment/Transactions/{paymentTransactionId}/revokeAccrual
     *
     * @param string $payment_transaction_id Payment transaction id (required)
     * @return array of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrualWithHttpInfo(string $payment_transaction_id): array
    {
        // verify the required parameter 'payment_transaction_id' is set
        if (empty($payment_transaction_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling revokeAccrual'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/revokeAccrual";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentTransactionId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_transaction_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentTransactionsProductModel'
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
