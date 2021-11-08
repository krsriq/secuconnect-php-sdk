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
 * ServicesUploadidentsProductApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServicesUploadidentsProductApi extends ApiController
{

    /**
     * Operation addUploadidents
     *
     * POST Services/Uploadidents
     *
     * @param \Secuconnect\Client\Model\UploadidentsProductDTO $body Upload idents input properties
     * @return \Secuconnect\Client\Model\UploadidentsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addUploadidents(\Secuconnect\Client\Model\UploadidentsProductDTO $body): \Secuconnect\Client\Model\UploadidentsProductModel
    {
        return $this->addUploadidentsWithHttpInfo($body)[0];
    }

    /**
     * Operation addUploadidentsWithHttpInfo
     *
     * POST Services/Uploadidents
     *
     * @param \Secuconnect\Client\Model\UploadidentsProductDTO $body Upload idents input properties
     * @return array of \Secuconnect\Client\Model\UploadidentsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function addUploadidentsWithHttpInfo(\Secuconnect\Client\Model\UploadidentsProductDTO $body): array
    {
        // parse inputs
        $resourcePath = "/Services/Uploadidents";
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
                    $responseType = '\Secuconnect\Client\Model\UploadidentsProductModel'
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
