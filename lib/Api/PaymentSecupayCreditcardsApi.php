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
 * PaymentSecupayCreditcardsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSecupayCreditcardsApi extends ApiController
{

    /**
     * Operation assignExternalInvoicePdf
     *
     * POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param string $document_id Document id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body Request body for assigning external invoice pdf
     * @return \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignExternalInvoicePdf(string $payment_method, string $payment_id, string $document_id, \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body): \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf
    {
        return $this->assignExternalInvoicePdfWithHttpInfo($payment_method, $payment_id, $document_id, $body)[0];
    }

    /**
     * Operation assignExternalInvoicePdfWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param string $document_id Document id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body Request body for assigning external invoice pdf
     * @return array of \Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function assignExternalInvoicePdfWithHttpInfo(string $payment_method, string $payment_id, string $document_id, \Secuconnect\Client\Model\SecupayTransactionDTOExternalInvoicePdf $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling assignExternalInvoicePdf'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling assignExternalInvoicePdf'
            );
        }

        // verify the required parameter 'document_id' is set
        if (empty($document_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $document_id when calling assignExternalInvoicePdf'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "documentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($document_id),
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
                    $responseType = '\Secuconnect\Client\Model\SecupayTransactionExternalInvoicePdf'
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
     * Operation cancelPaymentTransactionById
     *
     * POST Payment/{paymentMethod}/{paymentId}/cancel
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body Cancel payment transaction input properties
     * @return \Secuconnect\Client\Model\PaymentCancelResult
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelPaymentTransactionById(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body): \Secuconnect\Client\Model\PaymentCancelResult
    {
        return $this->cancelPaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body)[0];
    }

    /**
     * Operation cancelPaymentTransactionByIdWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/cancel
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body Cancel payment transaction input properties
     * @return array of \Secuconnect\Client\Model\PaymentCancelResult, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function cancelPaymentTransactionByIdWithHttpInfo(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionCancelDTO $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling cancelPaymentTransactionById'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling cancelPaymentTransactionById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/cancel";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
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
                    $responseType = '\Secuconnect\Client\Model\PaymentCancelResult'
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
     * Operation capturePaymentTransactionById
     *
     * POST Payment/{paymentMethod}/{paymentId}/capture
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body Capture payment transaction input properties
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function capturePaymentTransactionById(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->capturePaymentTransactionByIdWithHttpInfo($payment_method, $payment_id, $body)[0];
    }

    /**
     * Operation capturePaymentTransactionByIdWithHttpInfo
     *
     * POST Payment/{paymentMethod}/{paymentId}/capture
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body Capture payment transaction input properties
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function capturePaymentTransactionByIdWithHttpInfo(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionCaptureDTO $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling capturePaymentTransactionById'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling capturePaymentTransactionById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/capture";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
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
     * Operation paymentSecupayCreditcardsGetById
     *
     * GET Payment/Secupaycreditcards/{paymentCreditCardsId}
     *
     * @param string $payment_credit_cards_id Payment credit cards id (required)
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupayCreditcardsGetById(string $payment_credit_cards_id): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->paymentSecupayCreditcardsGetByIdWithHttpInfo($payment_credit_cards_id)[0];
    }

    /**
     * Operation paymentSecupayCreditcardsGetByIdWithHttpInfo
     *
     * GET Payment/Secupaycreditcards/{paymentCreditCardsId}
     *
     * @param string $payment_credit_cards_id Payment credit cards id (required)
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupayCreditcardsGetByIdWithHttpInfo(string $payment_credit_cards_id): array
    {
        // verify the required parameter 'payment_credit_cards_id' is set
        if (empty($payment_credit_cards_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_credit_cards_id when calling paymentSecupayCreditcardsGetById'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Secupaycreditcards/{paymentCreditCardsId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentCreditCardsId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_credit_cards_id),
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
     * Operation paymentSecupaycreditcardsPost
     *
     * POST Payment/Secupaycreditcards
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Credit card payment transaction input properties
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupaycreditcardsPost(\Secuconnect\Client\Model\SecupayTransactionProductDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->paymentSecupaycreditcardsPostWithHttpInfo($body)[0];
    }

    /**
     * Operation paymentSecupaycreditcardsPostWithHttpInfo
     *
     * POST Payment/Secupaycreditcards
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Credit card payment transaction input properties
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupaycreditcardsPostWithHttpInfo(\Secuconnect\Client\Model\SecupayTransactionProductDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Secupaycreditcards";
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
     * Operation reverseAccrualByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/accrual
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body Reverse accrual input properties
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function reverseAccrualByPaymentId(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->reverseAccrualByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)[0];
    }

    /**
     * Operation reverseAccrualByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/accrual
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body Reverse accrual input properties
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function reverseAccrualByPaymentIdWithHttpInfo(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionReverseAccrualDTO $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling reverseAccrualByPaymentId'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling reverseAccrualByPaymentId'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/accrual";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
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
     * Operation setShippingInformationByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information propertie
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setShippingInformationByPaymentId(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->setShippingInformationByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)[0];
    }

    /**
     * Operation setShippingInformationByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information propertie
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function setShippingInformationByPaymentIdWithHttpInfo(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling setShippingInformationByPaymentId'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling setShippingInformationByPaymentId'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/shippingInformation";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
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
     * Operation updateBasketByPaymentId
     *
     * PUT Payment/{paymentMethod}/{paymentId}/basket
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body Update basket input properties
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBasketByPaymentId(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body): \Secuconnect\Client\Model\SecupayTransactionProductModel
    {
        return $this->updateBasketByPaymentIdWithHttpInfo($payment_method, $payment_id, $body)[0];
    }

    /**
     * Operation updateBasketByPaymentIdWithHttpInfo
     *
     * PUT Payment/{paymentMethod}/{paymentId}/basket
     *
     * @param string $payment_method Payment method (secupaydebits, secupayprepays, secupayinvoices, ...) (required)
     * @param string $payment_id Payment id (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body Update basket input properties
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function updateBasketByPaymentIdWithHttpInfo(string $payment_method, string $payment_id, \Secuconnect\Client\Model\SecupayTransactionUpdateBasketDTO $body): array
    {
        // verify the required parameter 'payment_method' is set
        if (empty($payment_method)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_method when calling updateBasketByPaymentId'
            );
        }

        // verify the required parameter 'payment_id' is set
        if (empty($payment_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_id when calling updateBasketByPaymentId'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/{paymentMethod}/{paymentId}/basket";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentMethod" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_method),
           $resourcePath
        );

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_id),
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
}
