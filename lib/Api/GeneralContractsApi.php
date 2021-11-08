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
 * GeneralContractsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralContractsApi extends ApiController
{

    /**
     * Operation getAll
     *
     * GET General/Contracts
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\GeneralContractsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\GeneralContractsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET General/Contracts
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\GeneralContractsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/General/Contracts";
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
                    $responseType = '\Secuconnect\Client\Model\GeneralContractsList'
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
     * Operation getAvailablePaymentMethods
     *
     * POST General/Contracts/{generalContractId}/getAvailablePaymentMethods
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body options
     * @return string[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAvailablePaymentMethods(string $general_contract_id, \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body): array
    {
        return $this->getAvailablePaymentMethodsWithHttpInfo($general_contract_id, $body)[0];
    }

    /**
     * Operation getAvailablePaymentMethodsWithHttpInfo
     *
     * POST General/Contracts/{generalContractId}/getAvailablePaymentMethods
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body options
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAvailablePaymentMethodsWithHttpInfo(string $general_contract_id, \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body): array
    {
        // verify the required parameter 'general_contract_id' is set
        if (empty($general_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailablePaymentMethods'
            );
        }

        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/getAvailablePaymentMethods";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    $responseType = 'string[]'
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
     * GET General/Contracts/{generalContractId}
     *
     * @param string $general_contract_id General contract id (required)
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $general_contract_id): \Secuconnect\Client\Model\GeneralContractsProductModel
    {
        return $this->getOneWithHttpInfo($general_contract_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET General/Contracts/{generalContractId}
     *
     * @param string $general_contract_id General contract id (required)
     * @return array of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $general_contract_id): array
    {
        // verify the required parameter 'general_contract_id' is set
        if (empty($general_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\GeneralContractsProductModel'
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
     * POST General/Contracts/{generalContractId}/revokeAccrual
     *
     * @param string $general_contract_id Contract identifier (required)
     * @return void
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrual(string $general_contract_id): void
    {
        $this->revokeAccrualWithHttpInfo($general_contract_id);
    }

    /**
     * Operation revokeAccrualWithHttpInfo
     *
     * POST General/Contracts/{generalContractId}/revokeAccrual
     *
     * @param string $general_contract_id Contract identifier (required)
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function revokeAccrualWithHttpInfo(string $general_contract_id): array
    {
        // verify the required parameter 'general_contract_id' is set
        if (empty($general_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling revokeAccrual'
            );
        }

        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/revokeAccrual";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
     * POST General/Contracts/{generalContractId}/updateBankAccount
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body options
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBankAccount(string $general_contract_id, \Secuconnect\Client\Model\BankAccountDescriptor $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->updateBankAccountWithHttpInfo($general_contract_id, $body)[0];
    }

    /**
     * Operation updateBankAccountWithHttpInfo
     *
     * POST General/Contracts/{generalContractId}/updateBankAccount
     *
     * @param string $general_contract_id Contract identifier (required)
     * @param \Secuconnect\Client\Model\BankAccountDescriptor $body options
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBankAccountWithHttpInfo(string $general_contract_id, \Secuconnect\Client\Model\BankAccountDescriptor $body): array
    {
        // verify the required parameter 'general_contract_id' is set
        if (empty($general_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling updateBankAccount'
            );
        }

        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/updateBankAccount";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_contract_id),
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
