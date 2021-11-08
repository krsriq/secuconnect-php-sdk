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
 * PaymentPlansApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentPlansApi extends ApiController
{

    /**
     * Operation paymentPlansGet
     *
     * GET Payment/Plans
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\PaymentPlansList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansGet(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\PaymentPlansList
    {
        return $this->paymentPlansGetWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation paymentPlansGetWithHttpInfo
     *
     * GET Payment/Plans
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\PaymentPlansList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansGetWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Payment/Plans";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentPlansList'
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
     * Operation paymentPlansGetById
     *
     * GET Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @return \Secuconnect\Client\Model\PaymentPlansProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansGetById(string $payment_plan_id): \Secuconnect\Client\Model\PaymentPlansProductModel
    {
        return $this->paymentPlansGetByIdWithHttpInfo($payment_plan_id)[0];
    }

    /**
     * Operation paymentPlansGetByIdWithHttpInfo
     *
     * GET Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @return array of \Secuconnect\Client\Model\PaymentPlansProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansGetByIdWithHttpInfo(string $payment_plan_id): array
    {
        // verify the required parameter 'payment_plan_id' is set
        if (empty($payment_plan_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_plan_id when calling paymentPlansGetById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Plans/{paymentPlanId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentPlanId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_plan_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentPlansProductModel'
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
     * Operation paymentPlansPatch
     *
     * PATCH Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plans properties
     * @return \Secuconnect\Client\Model\PaymentPlansProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPatch(string $payment_plan_id, \Secuconnect\Client\Model\PaymentPlansDTO $body): \Secuconnect\Client\Model\PaymentPlansProductModel
    {
        return $this->paymentPlansPatchWithHttpInfo($payment_plan_id, $body)[0];
    }

    /**
     * Operation paymentPlansPatchWithHttpInfo
     *
     * PATCH Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plans properties
     * @return array of \Secuconnect\Client\Model\PaymentPlansProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPatchWithHttpInfo(string $payment_plan_id, \Secuconnect\Client\Model\PaymentPlansDTO $body): array
    {
        // verify the required parameter 'payment_plan_id' is set
        if (empty($payment_plan_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_plan_id when calling paymentPlansPatch'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Plans/{paymentPlanId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentPlanId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_plan_id),
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
                    'PATCH',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    $responseType = '\Secuconnect\Client\Model\PaymentPlansProductModel'
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
     * Operation paymentPlansPost
     *
     * POST Payment/Plans
     *
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plan properties
     * @return \Secuconnect\Client\Model\PaymentPlansProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPost(\Secuconnect\Client\Model\PaymentPlansDTO $body): \Secuconnect\Client\Model\PaymentPlansProductModel
    {
        return $this->paymentPlansPostWithHttpInfo($body)[0];
    }

    /**
     * Operation paymentPlansPostWithHttpInfo
     *
     * POST Payment/Plans
     *
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plan properties
     * @return array of \Secuconnect\Client\Model\PaymentPlansProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPostWithHttpInfo(\Secuconnect\Client\Model\PaymentPlansDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Plans";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentPlansProductModel'
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
     * Operation paymentPlansPut
     *
     * PUT Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plans properties
     * @return \Secuconnect\Client\Model\PaymentPlansProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPut(string $payment_plan_id, \Secuconnect\Client\Model\PaymentPlansDTO $body): \Secuconnect\Client\Model\PaymentPlansProductModel
    {
        return $this->paymentPlansPutWithHttpInfo($payment_plan_id, $body)[0];
    }

    /**
     * Operation paymentPlansPutWithHttpInfo
     *
     * PUT Payment/Plans/{paymentPlanId}
     *
     * @param string $payment_plan_id Payment plan id (required)
     * @param \Secuconnect\Client\Model\PaymentPlansDTO $body Payment plans properties
     * @return array of \Secuconnect\Client\Model\PaymentPlansProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentPlansPutWithHttpInfo(string $payment_plan_id, \Secuconnect\Client\Model\PaymentPlansDTO $body): array
    {
        // verify the required parameter 'payment_plan_id' is set
        if (empty($payment_plan_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_plan_id when calling paymentPlansPut'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Plans/{paymentPlanId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentPlanId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_plan_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentPlansProductModel'
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
