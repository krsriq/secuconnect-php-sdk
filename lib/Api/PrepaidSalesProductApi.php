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
 * PrepaidSalesProductApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidSalesProductApi extends ApiController
{

    /**
     * Operation addSale
     *
     * POST Prepaid/Sales
     *
     * @param \Secuconnect\Client\Model\PrepaidSalesProductDTO $body Prepaid transaction input properties
     * @return \Secuconnect\Client\Model\PrepaidSalesProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addSale(\Secuconnect\Client\Model\PrepaidSalesProductDTO $body): \Secuconnect\Client\Model\PrepaidSalesProductModel
    {
        return $this->addSaleWithHttpInfo($body)[0];
    }

    /**
     * Operation addSaleWithHttpInfo
     *
     * POST Prepaid/Sales
     *
     * @param \Secuconnect\Client\Model\PrepaidSalesProductDTO $body Prepaid transaction input properties
     * @return array of \Secuconnect\Client\Model\PrepaidSalesProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addSaleWithHttpInfo(\Secuconnect\Client\Model\PrepaidSalesProductDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Prepaid/Sales";
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
                    $responseType = '\Secuconnect\Client\Model\PrepaidSalesProductModel'
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
