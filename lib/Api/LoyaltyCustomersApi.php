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
 * LoyaltyCustomersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersApi extends ApiController
{

    /**
     * Operation addCustomer
     *
     * POST Loyalty/Customers
     *
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addCustomer(\Secuconnect\Client\Model\LoyaltyCustomersDTO $body): \Secuconnect\Client\Model\LoyaltyCustomersProductModel
    {
        return $this->addCustomerWithHttpInfo($body)[0];
    }

    /**
     * Operation addCustomerWithHttpInfo
     *
     * POST Loyalty/Customers
     *
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addCustomerWithHttpInfo(\Secuconnect\Client\Model\LoyaltyCustomersDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersProductModel'
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
     * Operation assignPaymentContainer
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignPaymentContainer(string $loyalty_customer_id, string $loyalty_payment_container_id): \Secuconnect\Client\Model\LoyaltyCustomersProductModel
    {
        return $this->assignPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id)[0];
    }

    /**
     * Operation assignPaymentContainerWithHttpInfo
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignPaymentContainerWithHttpInfo(string $loyalty_customer_id, string $loyalty_payment_container_id): array
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if (empty($loyalty_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling assignPaymentContainer'
            );
        }

        // verify the required parameter 'loyalty_payment_container_id' is set
        if (empty($loyalty_payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_payment_container_id when calling assignPaymentContainer'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyPaymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersProductModel'
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
     * GET Loyalty/Customers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\LoyaltyCustomersList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\LoyaltyCustomersList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Customers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/Customers";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersList'
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
     * GET Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Search one loyalty customer by provided id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $loyalty_customer_id): \Secuconnect\Client\Model\LoyaltyCustomersProductModel
    {
        return $this->getOneWithHttpInfo($loyalty_customer_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id Search one loyalty customer by provided id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $loyalty_customer_id): array
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if (empty($loyalty_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersProductModel'
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
     * Operation removeAssignedPaymentContainer
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeAssignedPaymentContainer(string $loyalty_customer_id, string $loyalty_payment_container_id): \Secuconnect\Client\Model\LoyaltyCustomersProductModel
    {
        return $this->removeAssignedPaymentContainerWithHttpInfo($loyalty_customer_id, $loyalty_payment_container_id)[0];
    }

    /**
     * Operation removeAssignedPaymentContainerWithHttpInfo
     *
     * DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
     *
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @param string $loyalty_payment_container_id LoyaltyPaymentContainer id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeAssignedPaymentContainerWithHttpInfo(string $loyalty_customer_id, string $loyalty_payment_container_id): array
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if (empty($loyalty_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling removeAssignedPaymentContainer'
            );
        }

        // verify the required parameter 'loyalty_payment_container_id' is set
        if (empty($loyalty_payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_payment_container_id when calling removeAssignedPaymentContainer'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyPaymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersProductModel'
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
     * Operation updateCustomer
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id loyalty Customer Id CUS_XXX (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCustomer(string $loyalty_customer_id, \Secuconnect\Client\Model\LoyaltyCustomersDTO $body): \Secuconnect\Client\Model\LoyaltyCustomersProductModel
    {
        return $this->updateCustomerWithHttpInfo($loyalty_customer_id, $body)[0];
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}
     *
     * @param string $loyalty_customer_id loyalty Customer Id CUS_XXX (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body loyalty Customer container properties
     * @return array of \Secuconnect\Client\Model\LoyaltyCustomersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCustomerWithHttpInfo(string $loyalty_customer_id, \Secuconnect\Client\Model\LoyaltyCustomersDTO $body): array
    {
        // verify the required parameter 'loyalty_customer_id' is set
        if (empty($loyalty_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling updateCustomer'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Customers/{loyaltyCustomerId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCustomerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_customer_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCustomersProductModel'
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
