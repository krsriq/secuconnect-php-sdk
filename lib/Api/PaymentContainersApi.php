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
 * PaymentContainersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersApi extends ApiController
{

    /**
     * Operation mandate
     *
     * POST Payment/Containers/<id>/mandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\MandateDTO $body Get an B2B mandate form properties
     * @return \Secuconnect\Client\Model\MandateProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function mandate(string $payment_container_id, \Secuconnect\Client\Model\MandateDTO $body): \Secuconnect\Client\Model\MandateProductModel
    {
        return $this->mandateWithHttpInfo($payment_container_id, $body)[0];
    }

    /**
     * Operation mandateWithHttpInfo
     *
     * POST Payment/Containers/<id>/mandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\MandateDTO $body Get an B2B mandate form properties
     * @return array of \Secuconnect\Client\Model\MandateProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function mandateWithHttpInfo(string $payment_container_id, \Secuconnect\Client\Model\MandateDTO $body): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling mandate'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/mandate";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\MandateProductModel'
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
     * Operation paymentContainersGet
     *
     * GET Payment/Containers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return \Secuconnect\Client\Model\PaymentContainersList
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersGet(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): \Secuconnect\Client\Model\PaymentContainersList
    {
        return $this->paymentContainersGetWithHttpInfo($count, $offset, $fields, $q, $sort)[0];
    }

    /**
     * Operation paymentContainersGetWithHttpInfo
     *
     * GET Payment/Containers
     *
     * @param int|null $count The maximum number of items to return
     * @param int|null $offset The position within the whole result set to start returning items (zero-based)
     * @param string|null $fields List of fields to include in the result. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;.
     * @param string|null $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60;
     * @param string|null $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;dsc&#x60; descending.
     * @return array of \Secuconnect\Client\Model\PaymentContainersList, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersGetWithHttpInfo(?int $count = null, ?int $offset = null, ?string $fields = null, ?string $q = null, ?string $sort = null): array
    {
        // parse inputs
        $resourcePath = "/Payment/Containers";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersList'
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
     * Operation paymentContainersGetById
     *
     * GET Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Search one by provided id (required)
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersGetById(string $payment_container_id): \Secuconnect\Client\Model\PaymentContainersProductModel
    {
        return $this->paymentContainersGetByIdWithHttpInfo($payment_container_id)[0];
    }

    /**
     * Operation paymentContainersGetByIdWithHttpInfo
     *
     * GET Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Search one by provided id (required)
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersGetByIdWithHttpInfo(string $payment_container_id): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersGetById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel'
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
     * Operation paymentContainersIdAssignSecondaryIdDelete
     *
     * DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id for which container is currently assigned to (required)
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdAssignSecondaryIdDelete(string $payment_container_id, string $secondary_payment_container_id): array
    {
        return $this->paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo($payment_container_id, $secondary_payment_container_id)[0];
    }

    /**
     * Operation paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo
     *
     * DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id for which container is currently assigned to (required)
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdAssignSecondaryIdDeleteWithHttpInfo(string $payment_container_id, string $secondary_payment_container_id): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete'
            );
        }

        // verify the required parameter 'secondary_payment_container_id' is set
        if (empty($secondary_payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdDelete'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "secondaryPaymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($secondary_payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel[]'
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
     * Operation paymentContainersIdAssignSecondaryIdPost
     *
     * POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id to which container will be assigned (required)
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdAssignSecondaryIdPost(string $payment_container_id, string $secondary_payment_container_id): \Secuconnect\Client\Model\PaymentContainersProductModel
    {
        return $this->paymentContainersIdAssignSecondaryIdPostWithHttpInfo($payment_container_id, $secondary_payment_container_id)[0];
    }

    /**
     * Operation paymentContainersIdAssignSecondaryIdPostWithHttpInfo
     *
     * POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param string $secondary_payment_container_id Id to which container will be assigned (required)
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdAssignSecondaryIdPostWithHttpInfo(string $payment_container_id, string $secondary_payment_container_id): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdAssignSecondaryIdPost'
            );
        }

        // verify the required parameter 'secondary_payment_container_id' is set
        if (empty($secondary_payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $secondary_payment_container_id when calling paymentContainersIdAssignSecondaryIdPost'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "secondaryPaymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($secondary_payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel'
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
     * Operation paymentContainersIdDelete
     *
     * DELETE Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel[]
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdDelete(string $payment_container_id): array
    {
        return $this->paymentContainersIdDeleteWithHttpInfo($payment_container_id)[0];
    }

    /**
     * Operation paymentContainersIdDeleteWithHttpInfo
     *
     * DELETE Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel[], HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdDeleteWithHttpInfo(string $payment_container_id): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdDelete'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel[]'
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
     * Operation paymentContainersIdPut
     *
     * PUT Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdPut(string $payment_container_id, \Secuconnect\Client\Model\PaymentContainersDTO $body): \Secuconnect\Client\Model\PaymentContainersProductModel
    {
        return $this->paymentContainersIdPutWithHttpInfo($payment_container_id, $body)[0];
    }

    /**
     * Operation paymentContainersIdPutWithHttpInfo
     *
     * PUT Payment/Containers/{paymentContainerId}
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersIdPutWithHttpInfo(string $payment_container_id, \Secuconnect\Client\Model\PaymentContainersDTO $body): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersIdPut'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel'
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
     * Operation paymentContainersPost
     *
     * POST Payment/Containers
     *
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersPost(\Secuconnect\Client\Model\PaymentContainersDTO $body): \Secuconnect\Client\Model\PaymentContainersProductModel
    {
        return $this->paymentContainersPostWithHttpInfo($body)[0];
    }

    /**
     * Operation paymentContainersPostWithHttpInfo
     *
     * POST Payment/Containers
     *
     * @param \Secuconnect\Client\Model\PaymentContainersDTO $body Payment container properties
     * @return array of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentContainersPostWithHttpInfo(\Secuconnect\Client\Model\PaymentContainersDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Containers";
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
                    $responseType = '\Secuconnect\Client\Model\PaymentContainersProductModel'
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
     * Operation uploadMandate
     *
     * POST Payment/Containers/<id>/Uploadmandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\UploadMandateDTO $body Signed B2B mandate properties
     * @return \Secuconnect\Client\Model\UploadMandateProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function uploadMandate(string $payment_container_id, \Secuconnect\Client\Model\UploadMandateDTO $body): \Secuconnect\Client\Model\UploadMandateProductModel
    {
        return $this->uploadMandateWithHttpInfo($payment_container_id, $body)[0];
    }

    /**
     * Operation uploadMandateWithHttpInfo
     *
     * POST Payment/Containers/<id>/Uploadmandate
     *
     * @param string $payment_container_id Payment container id (required)
     * @param \Secuconnect\Client\Model\UploadMandateDTO $body Signed B2B mandate properties
     * @return array of \Secuconnect\Client\Model\UploadMandateProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function uploadMandateWithHttpInfo(string $payment_container_id, \Secuconnect\Client\Model\UploadMandateDTO $body): array
    {
        // verify the required parameter 'payment_container_id' is set
        if (empty($payment_container_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling uploadMandate'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}/Uploadmandate";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentContainerId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_container_id),
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
                    $responseType = '\Secuconnect\Client\Model\UploadMandateProductModel'
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
