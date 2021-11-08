<?php

namespace Secuconnect\Client;

use Exception;
use Secuconnect\Client\Authentication\Authenticator;
use Secuconnect\Client\Model\ProductExceptionPayload;

/**
 * Class ApiController
 */
abstract class ApiController
{
    /**
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct(protected ?ApiClient $apiClient = null)
    {
        $this->apiClient ??= new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient|null get the API client
     */
    public function getApiClient(): ?ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     * @return static
     */
    public function setApiClient(ApiClient $apiClient): static
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * @param ApiException $e
     * @param string $responseType
     * @param int $retries
     * @return string
     * @throws ApiException
     * @throws Exception
     */
    protected function checkAndFormatApiException(ApiException $e, string $responseType, int $retries): string
    {
        switch ($e->getCode()) {
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), $responseType, $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                if ($retries < 1) {
                    Authenticator::reauthenticate();
                    return 'retry';
                }
            default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), ProductExceptionPayload::class, $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
        }

        throw $e;
    }
}
