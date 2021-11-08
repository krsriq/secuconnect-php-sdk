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
 * PaymentSecupayPayoutApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSecupayPayoutApi extends ApiController
{

    /**
     * Operation getSecupaypayout
     *
     * GET Payment/Secupaypayout/{paymentPayoutId}
     *
     * @param string $payment_payout_id Payment payout id (required)
     * @return \Secuconnect\Client\Model\SecupayPayoutProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getSecupaypayout(string $payment_payout_id): \Secuconnect\Client\Model\SecupayPayoutProductModel
    {
        return $this->getSecupaypayoutWithHttpInfo($payment_payout_id)[0];
    }

    /**
     * Operation getSecupaypayoutWithHttpInfo
     *
     * GET Payment/Secupaypayout/{paymentPayoutId}
     *
     * @param string $payment_payout_id Payment payout id (required)
     * @return array of \Secuconnect\Client\Model\SecupayPayoutProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function getSecupaypayoutWithHttpInfo(string $payment_payout_id): array
    {
        // verify the required parameter 'payment_payout_id' is set
        if (empty($payment_payout_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment_payout_id when calling getSecupaypayout'
            );
        }

        // parse inputs
        $resourcePath = "/Payment/Secupaypayout/{paymentPayoutId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "paymentPayoutId" . "}",
            $this->apiClient->getSerializer()->toPathValue($payment_payout_id),
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
                    $responseType = '\Secuconnect\Client\Model\SecupayPayoutProductModel'
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
     * Operation paymentSecupaypayoutPost
     *
     * POST Payment/Secupaypayout
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutDTO $body Payout payment transaction input properties
     * @return \Secuconnect\Client\Model\SecupayPayoutProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupaypayoutPost(\Secuconnect\Client\Model\SecupayPayoutDTO $body): \Secuconnect\Client\Model\SecupayPayoutProductModel
    {
        return $this->paymentSecupaypayoutPostWithHttpInfo($body)[0];
    }

    /**
     * Operation paymentSecupaypayoutPostWithHttpInfo
     *
     * POST Payment/Secupaypayout
     *
     * @param \Secuconnect\Client\Model\SecupayPayoutDTO $body Payout payment transaction input properties
     * @return array of \Secuconnect\Client\Model\SecupayPayoutProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function paymentSecupaypayoutPostWithHttpInfo(\Secuconnect\Client\Model\SecupayPayoutDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Payment/Secupaypayout";
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
                    $responseType = '\Secuconnect\Client\Model\SecupayPayoutProductModel'
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
