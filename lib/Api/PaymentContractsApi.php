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
 * PaymentContractsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsApi extends ApiController
{

    /**
     * Operation callClone
     *
     * POST Payment/Contracts/{paymentContractId}/clone
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body Payment contract clone properties
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function callClone(string $payment_contract_id, \Secuconnect\Client\Model\PaymentContractsDTOClone $body): \Secuconnect\Client\Model\PaymentContractsProductModel
    {
        return $this->callCloneWithHttpInfo($payment_contract_id, $body)[0];
    }

    /**
     * Operation callCloneWithHttpInfo
     *
     * POST Payment/Contracts/{paymentContractId}/clone
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTOClone $body Payment contract clone properties
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function callCloneWithHttpInfo(string $payment_contract_id, \Secuconnect\Client\Model\PaymentContractsDTOClone $body): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling callClone'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/clone";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContractsProductModel'
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
     * Operation paymentContractsGet
     *
     * GET Payment/Contracts
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\PaymentContractsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsGet(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\PaymentContractsList
    {
        return $this->paymentContractsGetWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation paymentContractsGetWithHttpInfo
     *
     * GET Payment/Contracts
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\PaymentContractsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsGetWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Payment/Contracts";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContractsList'
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
     * Operation paymentContractsGetById
     *
     * GET Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Search one by provided id (required)
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsGetById(string $payment_contract_id): \Secuconnect\Client\Model\PaymentContractsProductModel
    {
        return $this->paymentContractsGetByIdWithHttpInfo($payment_contract_id)[0];
    }

    /**
     * Operation paymentContractsGetByIdWithHttpInfo
     *
     * GET Payment/Contracts/{paymentContractId}
     *
     * @param string $payment_contract_id Search one by provided id (required)
     * @return array of \Secuconnect\Client\Model\PaymentContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsGetByIdWithHttpInfo(string $payment_contract_id): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsGetById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContractsProductModel'
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
     * Operation paymentContractsIdPaymentMethodsGet
     *
     * GET Payment/Contracts/{paymentContractId}/paymentMethods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @return \Secuconnect\Client\Model\StringList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsIdPaymentMethodsGet(string $payment_contract_id): \Secuconnect\Client\Model\StringList
    {
        return $this->paymentContractsIdPaymentMethodsGetWithHttpInfo($payment_contract_id)[0];
    }

    /**
     * Operation paymentContractsIdPaymentMethodsGetWithHttpInfo
     *
     * GET Payment/Contracts/{paymentContractId}/paymentMethods
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @return array of \Secuconnect\Client\Model\StringList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContractsIdPaymentMethodsGetWithHttpInfo(string $payment_contract_id): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling paymentContractsIdPaymentMethodsGet'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/paymentMethods";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\StringList'
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
     * Operation requestId
     *
     * POST Payment/Contracts/{paymentContractId}/requestId
     *
     * @param string $payment_contract_id Contract identifier of the parent (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTORequestId $body Payment contract request id properties
     * @return \Secuconnect\Client\Model\PaymentContractsRequestIdResult
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function requestId(string $payment_contract_id, \Secuconnect\Client\Model\PaymentContractsDTORequestId $body): \Secuconnect\Client\Model\PaymentContractsRequestIdResult
    {
        return $this->requestIdWithHttpInfo($payment_contract_id, $body)[0];
    }

    /**
     * Operation requestIdWithHttpInfo
     *
     * POST Payment/Contracts/{paymentContractId}/requestId
     *
     * @param string $payment_contract_id Contract identifier of the parent (required)
     * @param \Secuconnect\Client\Model\PaymentContractsDTORequestId $body Payment contract request id properties
     * @return array of \Secuconnect\Client\Model\PaymentContractsRequestIdResult, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function requestIdWithHttpInfo(string $payment_contract_id, \Secuconnect\Client\Model\PaymentContractsDTORequestId $body): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling requestId'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/requestId";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContractsRequestIdResult'
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
     * POST Payment/Contracts/{paymentContractId}/revokeAccrual
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @return void
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrual(string $payment_contract_id): void
    {
        $this->revokeAccrualWithHttpInfo($payment_contract_id);
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * POST Payment/Contracts/{paymentContractId}/revokeAccrual
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrualWithHttpInfo(string $payment_contract_id): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling revokeAccrual'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/revokeAccrual";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
                    $responseType = null
                );

                return [null, $statusCode, $httpHeader];
            } catch (ApiException $e) {
                if ($this->checkAndFormatApiException($e, $responseType, $retries) === 'retry') {
                    continue;
                }
            }
        }
    }

    /**
     * Operation updateBankAccount
     *
     * POST Payment/Contracts/{paymentContractId}/updateBankAccount
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body options
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBankAccount(string $payment_contract_id, \Secuconnect\Client\Model\BankAccountDescriptor $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->updateBankAccountWithHttpInfo($payment_contract_id, $body)[0];
    }

    /**
     * Operation updateBankAccountWithHttpInfo
     *
     * POST Payment/Contracts/{paymentContractId}/updateBankAccount
     *
     * @param string $payment_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body options
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBankAccountWithHttpInfo(string $payment_contract_id, \Secuconnect\Client\Model\BankAccountDescriptor $body): array
    {
        // verify the required parameter 'payment_contract_id' is set
        if (empty($payment_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_contract_id when calling updateBankAccount'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Contracts/{paymentContractId}/updateBankAccount";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_contract_id),
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
}
