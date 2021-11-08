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
 * PrepaidContractsProductApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidContractsProductApi extends ApiController
{

    /**
     * Operation mappingZvt
     *
     * POST Prepaid/Contracts/me/mappingZvt
     *
     * @param string $prepaid_contract_id Prepaid contract id (required)
     * @param \Secuconnect\Client\Model\PrepaidZvtDTO $body Prepaid transaction input properties
     * @return \Secuconnect\Client\Model\PrepaidMappingZvt
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function mappingZvt(string $prepaid_contract_id, \Secuconnect\Client\Model\PrepaidZvtDTO $body): \Secuconnect\Client\Model\PrepaidMappingZvt
    {
        return $this->mappingZvtWithHttpInfo($prepaid_contract_id, $body)[0];
    }

    /**
     * Operation mappingZvtWithHttpInfo
     *
     * POST Prepaid/Contracts/me/mappingZvt
     *
     * @param string $prepaid_contract_id Prepaid contract id (required)
     * @param \Secuconnect\Client\Model\PrepaidZvtDTO $body Prepaid transaction input properties
     * @return array of \Secuconnect\Client\Model\PrepaidMappingZvt, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws Exception
     */
    public function mappingZvtWithHttpInfo(string $prepaid_contract_id, \Secuconnect\Client\Model\PrepaidZvtDTO $body): array
    {
        // verify the required parameter 'prepaid_contract_id' is set
        if (empty($prepaid_contract_id)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $prepaid_contract_id when calling mappingZvt'
            );
        }

        // parse inputs
        $resourcePath = "/Prepaid/Contracts/{prepaidContractId}/mappingZvt";
        $queryParams = [];
        $headerParams = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        // path params
        
        $resourcePath = str_replace(
            "{" . "prepaidContractId" . "}",
            $this->apiClient->getSerializer()->toPathValue($prepaid_contract_id),
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
                    $responseType = '\Secuconnect\Client\Model\PrepaidMappingZvt'
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
