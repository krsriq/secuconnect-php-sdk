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
 * PaymentCustomersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCustomersApi extends ApiController
{

    /**
     * Operation paymentCustomersGet
     *
     * GET Payment/Customers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\PaymentCustomersList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersGet(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\PaymentCustomersList
    {
        return $this->paymentCustomersGetWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation paymentCustomersGetWithHttpInfo
     *
     * GET Payment/Customers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\PaymentCustomersList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersGetWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Payment/Customers";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCustomersList'
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
     * Operation paymentCustomersGetById
     *
     * GET Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersGetById(string $payment_customer_id): \Secuconnect\Client\Model\PaymentCustomersProductModel
    {
        return $this->paymentCustomersGetByIdWithHttpInfo($payment_customer_id)[0];
    }

    /**
     * Operation paymentCustomersGetByIdWithHttpInfo
     *
     * GET Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersGetByIdWithHttpInfo(string $payment_customer_id): array
    {
        // verify the required parameter 'payment_customer_id' is set
        if (empty($payment_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersGetById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCustomersProductModel'
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
     * Operation paymentCustomersIdDelete
     *
     * DELETE Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersIdDelete(string $payment_customer_id): array
    {
        return $this->paymentCustomersIdDeleteWithHttpInfo($payment_customer_id)[0];
    }

    /**
     * Operation paymentCustomersIdDeleteWithHttpInfo
     *
     * DELETE Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersIdDeleteWithHttpInfo(string $payment_customer_id): array
    {
        // verify the required parameter 'payment_customer_id' is set
        if (empty($payment_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersIdDelete'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCustomersProductModel[]'
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
     * Operation paymentCustomersIdPut
     *
     * PUT Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersIdPut(string $payment_customer_id, \Secuconnect\Client\Model\PaymentCustomersDTO $body): \Secuconnect\Client\Model\PaymentCustomersProductModel
    {
        return $this->paymentCustomersIdPutWithHttpInfo($payment_customer_id, $body)[0];
    }

    /**
     * Operation paymentCustomersIdPutWithHttpInfo
     *
     * PUT Payment/Customers/{paymentCustomerId}
     *
     * @param string $payment_customer_id Payment customer id (required)
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersIdPutWithHttpInfo(string $payment_customer_id, \Secuconnect\Client\Model\PaymentCustomersDTO $body): array
    {
        // verify the required parameter 'payment_customer_id' is set
        if (empty($payment_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_customer_id when calling paymentCustomersIdPut'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Customers/{paymentCustomerId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_customer_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCustomersProductModel'
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
     * Operation paymentCustomersPost
     *
     * POST Payment/Customers
     *
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersPost(\Secuconnect\Client\Model\PaymentCustomersDTO $body): \Secuconnect\Client\Model\PaymentCustomersProductModel
    {
        return $this->paymentCustomersPostWithHttpInfo($body)[0];
    }

    /**
     * Operation paymentCustomersPostWithHttpInfo
     *
     * POST Payment/Customers
     *
     * @param \Secuconnect\Client\Model\PaymentCustomersDTO $body Payment customer properties
     * @return array of \Secuconnect\Client\Model\PaymentCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentCustomersPostWithHttpInfo(\Secuconnect\Client\Model\PaymentCustomersDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Customers";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCustomersProductModel'
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
