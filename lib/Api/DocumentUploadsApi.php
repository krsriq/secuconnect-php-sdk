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
 * DocumentUploadsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentUploadsApi extends ApiController
{

    /**
     * Operation documentUploadsMultipartPost
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\FileToUpload $body Input data format
     * @param string|null $multipart multipart
     * @return \Secuconnect\Client\Model\DocumentUploadsProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function documentUploadsMultipartPost(\Secuconnect\Client\Model\FileToUpload $body, ?string $multipart = null): \Secuconnect\Client\Model\DocumentUploadsProductModel
    {
        return $this->documentUploadsMultipartPostWithHttpInfo($body, $multipart)[0];
    }

    /**
     * Operation documentUploadsMultipartPostWithHttpInfo
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\FileToUpload $body Input data format
     * @param string|null $multipart
     * @return array of \Secuconnect\Client\Model\DocumentUploadsProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function documentUploadsMultipartPostWithHttpInfo(\Secuconnect\Client\Model\FileToUpload $body, ?string $multipart = null): array
    {
        // parse inputs
        $resourcePath = "/Document/Uploads?multipart";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // query params
        if ($multipart !== null) {
            $queryParams['multipart'] = $this->apiClient->getSerializer()->toQueryValue($multipart);
        }

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
                    $responseType = '\Secuconnect\Client\Model\DocumentUploadsProductModel'
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
     * Operation documentUploadsPost
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $body Content
     * @return \Secuconnect\Client\Model\DocumentUploadsBaseProductModel
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function documentUploadsPost(\Secuconnect\Client\Model\DocumentUploadsDTOContent $body): \Secuconnect\Client\Model\DocumentUploadsBaseProductModel
    {
        return $this->documentUploadsPostWithHttpInfo($body)[0];
    }

    /**
     * Operation documentUploadsPostWithHttpInfo
     *
     * POST Document/Uploads
     *
     * @param \Secuconnect\Client\Model\DocumentUploadsDTOContent $body Content
     * @return array of \Secuconnect\Client\Model\DocumentUploadsBaseProductModel, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function documentUploadsPostWithHttpInfo(\Secuconnect\Client\Model\DocumentUploadsDTOContent $body): array
    {
        // parse inputs
        $resourcePath = "/Document/Uploads";
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
                    $responseType = '\Secuconnect\Client\Model\DocumentUploadsBaseProductModel'
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
