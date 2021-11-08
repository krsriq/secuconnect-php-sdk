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
 * LoyaltyCardsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardsApi extends ApiController
{

    /**
     * Operation assignUser
     *
     * POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
     *
     * @param string $loyalty_card_id Loyalty card id (required)
     * @param string $general_account_id General account id (required)
     * @param \Secuconnect\Client\Model\CardPin $body Loyalty card pin for the specific card
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignUser(string $loyalty_card_id, string $general_account_id, \Secuconnect\Client\Model\CardPin $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->assignUserWithHttpInfo($loyalty_card_id, $general_account_id, $body)[0];
    }

    /**
     * Operation assignUserWithHttpInfo
     *
     * POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
     *
     * @param string $loyalty_card_id Loyalty card id (required)
     * @param string $general_account_id General account id (required)
     * @param \Secuconnect\Client\Model\CardPin $body Loyalty card pin for the specific card
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignUserWithHttpInfo(string $loyalty_card_id, string $general_account_id, \Secuconnect\Client\Model\CardPin $body): array
    {
        // verify the required parameter 'loyalty_card_id' is set
        if (empty($loyalty_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_id when calling assignUser'
            );
        }

        // verify the required parameter 'general_account_id' is set
        if (empty($general_account_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_account_id when calling assignUser'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalAccountId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_account_id),
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
     * GET Loyalty/Cards
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\LoyaltyCardsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\LoyaltyCardsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/Cards
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\LoyaltyCardsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/Cards";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardsList'
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
     * GET Loyalty/Cards/{loyaltyCardId}
     *
     * @param string $loyalty_card_id Search one loyalty card by provided id (required)
     * @return \Secuconnect\Client\Model\LoyaltyCardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $loyalty_card_id): \Secuconnect\Client\Model\LoyaltyCardsProductModel
    {
        return $this->getOneWithHttpInfo($loyalty_card_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/Cards/{loyaltyCardId}
     *
     * @param string $loyalty_card_id Search one loyalty card by provided id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyCardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $loyalty_card_id): array
    {
        // verify the required parameter 'loyalty_card_id' is set
        if (empty($loyalty_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cards/{loyaltyCardId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyCardsProductModel'
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
     * Operation removeAssignedUser
     *
     * DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
     *
     * @param string $loyalty_card_id Loyalty card id (required)
     * @param string $general_account_id General account id (required)
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeAssignedUser(string $loyalty_card_id, string $general_account_id): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->removeAssignedUserWithHttpInfo($loyalty_card_id, $general_account_id)[0];
    }

    /**
     * Operation removeAssignedUserWithHttpInfo
     *
     * DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
     *
     * @param string $loyalty_card_id Loyalty card id (required)
     * @param string $general_account_id General account id (required)
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function removeAssignedUserWithHttpInfo(string $loyalty_card_id, string $general_account_id): array
    {
        // verify the required parameter 'loyalty_card_id' is set
        if (empty($loyalty_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_id when calling removeAssignedUser'
            );
        }

        // verify the required parameter 'general_account_id' is set
        if (empty($general_account_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_account_id when calling removeAssignedUser'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_card_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "generalAccountId" . "}",
            $this->apiClient->getSerializer()->toPathValue($general_account_id),
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
