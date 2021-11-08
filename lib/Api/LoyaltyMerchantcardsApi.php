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
 * LoyaltyMerchantcardsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsApi extends ApiController
{

    /**
     * Operation cardBalanceReceipt
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body Information about card &amp; current terminal
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cardBalanceReceipt(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt
    {
        return $this->cardBalanceReceiptWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation cardBalanceReceiptWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body Information about card &amp; current terminal
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cardBalanceReceiptWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardBalanceReceipt $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling cardBalanceReceipt'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/getCardBalanceReceipt";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsCardBalanceReceipt'
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
     * Operation checkCsc
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body Information about card
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkCsc(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->checkCscWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation checkCscWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body Information about card
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkCscWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCsc $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling checkCsc'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
     * Operation checkPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body Information about card
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkPassCode(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->checkPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation checkPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body Information about card
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function checkPassCodeWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCheckPasscode $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling checkPassCode'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
     * Operation createMerchantcards
     *
     * POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
     *
     * @param string $general_merchant_id General merchant id (required)
     * @param string $loyalty_cardgroup_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body Cards amount
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function createMerchantcards(string $general_merchant_id, string $loyalty_cardgroup_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body): array
    {
        return $this->createMerchantcardsWithHttpInfo($general_merchant_id, $loyalty_cardgroup_id, $body)[0];
    }

    /**
     * Operation createMerchantcardsWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
     *
     * @param string $general_merchant_id General merchant id (required)
     * @param string $loyalty_cardgroup_id Loyalty card group id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body Cards amount
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function createMerchantcardsWithHttpInfo(string $general_merchant_id, string $loyalty_cardgroup_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOCardsAmount $body): array
    {
        // verify the required parameter 'general_merchant_id' is set
        if (empty($general_merchant_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $general_merchant_id when calling createMerchantcards'
            );
        }

        // verify the required parameter 'loyalty_cardgroup_id' is set
        if (empty($loyalty_cardgroup_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_cardgroup_id when calling createMerchantcards'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}";
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

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyCardgroupId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_cardgroup_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel[]'
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
     * Operation executeTransaction
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body Transaction properties
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function executeTransaction(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel
    {
        return $this->executeTransactionWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation executeTransactionWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body Transaction properties
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function executeTransactionWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOTransaction $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling executeTransaction'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductWithReceiptModel'
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
     * GET Loyalty/MerchantCards
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAll(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\LoyaltyMerchantcardsList
    {
        return $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * GET Loyalty/MerchantCards
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getAllWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards";
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsList'
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
     * Operation getLock
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getLock(string $loyalty_merchant_card_id): \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock
    {
        return $this->getLockWithHttpInfo($loyalty_merchant_card_id)[0];
    }

    /**
     * Operation getLockWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getLockWithHttpInfo(string $loyalty_merchant_card_id): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getLock'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock'
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
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Search one by provided id (required)
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOne(string $loyalty_merchant_card_id): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->getOneWithHttpInfo($loyalty_merchant_card_id)[0];
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Search one by provided id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getOneWithHttpInfo(string $loyalty_merchant_card_id): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getOne'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation getVirtualTerminalData
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
     *
     * @param string $loyalty_merchant_card_id Merchant card id (required)
     * @param string $loyalty_merchant_id Merchant id (required)
     * @return \Secuconnect\Client\Model\VirtualTerminalDataModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getVirtualTerminalData(string $loyalty_merchant_card_id, string $loyalty_merchant_id): \Secuconnect\Client\Model\VirtualTerminalDataModel
    {
        return $this->getVirtualTerminalDataWithHttpInfo($loyalty_merchant_card_id, $loyalty_merchant_id)[0];
    }

    /**
     * Operation getVirtualTerminalDataWithHttpInfo
     *
     * GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
     *
     * @param string $loyalty_merchant_card_id Merchant card id (required)
     * @param string $loyalty_merchant_id Merchant id (required)
     * @return array of \Secuconnect\Client\Model\VirtualTerminalDataModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getVirtualTerminalDataWithHttpInfo(string $loyalty_merchant_card_id, string $loyalty_merchant_id): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling getVirtualTerminalData'
            );
        }

        // verify the required parameter 'loyalty_merchant_id' is set
        if (empty($loyalty_merchant_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_id when calling getVirtualTerminalData'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_id),
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
                    $responseType = '\Secuconnect\Client\Model\VirtualTerminalDataModel'
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
     * Operation lock
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about lock
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function lock(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->lockWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation lockWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about lock
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function lockWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling lock'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation newPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body Information about card
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function newPassCode(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->newPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation newPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body Information about card
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function newPassCodeWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTONewPasscode $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling newPassCode'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
     * Operation registerCustomer
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body Loyalty customer properties
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function registerCustomer(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyCustomersDTO $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->registerCustomerWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation registerCustomerWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyCustomersDTO $body Loyalty customer properties
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function registerCustomerWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyCustomersDTO $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling registerCustomer'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation resetPassCode
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body Information about card
     * @return \Secuconnect\Client\Model\ResultBoolean
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function resetPassCode(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body): \Secuconnect\Client\Model\ResultBoolean
    {
        return $this->resetPassCodeWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation resetPassCodeWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body Information about card
     * @return array of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function resetPassCodeWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOResetPasscode $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling resetPassCode'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
     * Operation setCustomer
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setCustomer(string $loyalty_merchant_card_id, string $loyalty_customer_id): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->setCustomerWithHttpInfo($loyalty_merchant_card_id, $loyalty_customer_id)[0];
    }

    /**
     * Operation setCustomerWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_customer_id Loyalty customer id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setCustomerWithHttpInfo(string $loyalty_merchant_card_id, string $loyalty_customer_id): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling setCustomer'
            );
        }

        // verify the required parameter 'loyalty_customer_id' is set
        if (empty($loyalty_customer_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_customer_id when calling setCustomer'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
           $resourcePath
        );

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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation unlock
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about unlock
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function unlock(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->unlockWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation unlockWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body Information about unlock
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function unlockWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOLock $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling unlock'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation updateCardGroupOfMerchantCard
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCardGroupOfMerchantCard(string $loyalty_merchant_card_id, string $loyalty_card_group_id): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->updateCardGroupOfMerchantCardWithHttpInfo($loyalty_merchant_card_id, $loyalty_card_group_id)[0];
    }

    /**
     * Operation updateCardGroupOfMerchantCardWithHttpInfo
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param string $loyalty_card_group_id Loyalty card group id (required)
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateCardGroupOfMerchantCardWithHttpInfo(string $loyalty_merchant_card_id, string $loyalty_card_group_id): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling updateCardGroupOfMerchantCard'
            );
        }

        // verify the required parameter 'loyalty_card_group_id' is set
        if (empty($loyalty_card_group_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_card_group_id when calling updateCardGroupOfMerchantCard'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
           $resourcePath
        );

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
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation updateMerchantCard
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateMerchantCard(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
    {
        return $this->updateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation updateMerchantCardWithHttpInfo
     *
     * PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body Loyalty merchant card properties
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateMerchantCardWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTO $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling updateMerchantCard'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
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
     * Operation validateMerchantCard
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body Information about card
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function validateMerchantCard(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body): \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard
    {
        return $this->validateMerchantCardWithHttpInfo($loyalty_merchant_card_id, $body)[0];
    }

    /**
     * Operation validateMerchantCardWithHttpInfo
     *
     * POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
     *
     * @param string $loyalty_merchant_card_id Loyalty merchant card id (required)
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body Information about card
     * @return array of \Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function validateMerchantCardWithHttpInfo(string $loyalty_merchant_card_id, \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOValidateMerchantCard $body): array
    {
        // verify the required parameter 'loyalty_merchant_card_id' is set
        if (empty($loyalty_merchant_card_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loyalty_merchant_card_id when calling validateMerchantCard'
            );
        }

        // parse inputs
        $resourcePath = "/Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "loyaltyMerchantCardId" . "}",
            $this->apiClient->getSerializer()->toPathValue($loyalty_merchant_card_id),
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
                    $responseType = '\Secuconnect\Client\Model\LoyaltyMerchantcardsValidateMerchantCard'
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
