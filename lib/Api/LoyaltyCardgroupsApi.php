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
 * LoyaltyCardgroupsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsApi extends ApiController
{

    /**
     * Operation addCardGroup
     *
     * POST Loyalty/Cardgroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addCardGroup(\Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body): \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
    {
        return $this->addCardGroupWithHttpInfo($body)[0];
    }

    /**
     * Operation addCardGroupWithHttpInfo
     *
     * POST Loyalty/Cardgroups
     *
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addCardGroupWithHttpInfo(\Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel'
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
     * Operation checkPassCodeEnabled
     *
     * POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body Check passcode details
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkPassCodeEnabled(string $loyalty_card_group_id, \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->checkPassCodeEnabledWithHttpInfo($loyalty_card_group_id, $body)[0];
    }

    /**
     * Operation checkPassCodeEnabledWithHttpInfo
     *
     * POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body Check passcode details
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkPassCodeEnabledWithHttpInfo(string $loyalty_card_group_id, \Secuconnect\Client\Model\LoyaltyCardgroupsDTOCheckPasscodeEnabled $body): array
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if (empty($loyalty_card_group_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling checkPassCodeEnabled'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardGroupId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
     * GET Loyalty/Cardgroups
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\LoyaltyCardgroupsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Cardgroups
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardgroupsList'
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
     * Operation getCardgroupsByMerchantId
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getCardgroupsByMerchantId(string $general_merchant_id): array
    {
        return $this->getCardgroupsByMerchantIdWithHttpInfo($general_merchant_id)[0];
    }

    /**
     * Operation getCardgroupsByMerchantIdWithHttpInfo
     *
     * GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
     *
     * @param string $general_merchant_id Search by provided id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getCardgroupsByMerchantIdWithHttpInfo(string $general_merchant_id): array
    {
        // verify the required parameter 'general_merchant_id' is set
        if (empty($general_merchant_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_merchant_id when calling getCardgroupsByMerchantId'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalMerchantId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_merchant_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel[]'
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
     * GET Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Search one by provided id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $loyalty_card_group_id): \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
    {
        return $this->getOneWithHttpInfo($loyalty_card_group_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Search one by provided id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $loyalty_card_group_id): array
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if (empty($loyalty_card_group_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardGroupId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel'
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
     * Operation updateCardGroup
     *
     * PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCardGroup(string $loyalty_card_group_id, \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body): \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
    {
        return $this->updateCardGroupWithHttpInfo($loyalty_card_group_id, $body)[0];
    }

    /**
     * Operation updateCardGroupWithHttpInfo
     *
     * PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
     *
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body Loyalty card group properties
     * @return array of \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCardGroupWithHttpInfo(string $loyalty_card_group_id, \Secuconnect\Client\Model\LoyaltyCardgroupsDTO $body): array
    {
        // verify the required parameter 'loyalty_card_group_id' is set
        if (empty($loyalty_card_group_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling updateCardGroup'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cardgroups/{loyaltyCardGroupId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardGroupId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_group_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel'
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
