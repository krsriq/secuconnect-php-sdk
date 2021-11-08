<?php

namespace Secuconnect\Client;

use InvalidArgumentException;
use Psr\Cache\CacheItemPoolInterface;
use Secuconnect\Client\Cache\FileCache;
use Secuconnect\Client\Printer\ImitationDevicePrinter;
use Secuconnect\Client\Printer\Printer;

/**
 * Class Configuration
 */
class Configuration
{
    const DEFAULT_HOST = 'connect-testing.secupay-ag.de'; // For live use: connect.secucard.com
    const SDK_VERSION = '3.0.0';

    const BASE_URL = 'https://' . self::DEFAULT_HOST . '/';
    const API_URL = self::BASE_URL . 'api/v2';

    /**
     * @var Configuration|null
     */
    protected static ?Configuration $defaultConfiguration;

    /**
     * Proxy settings for curl
     *
     * @var CurlProxyConfiguration|null
     */
    public ?CurlProxyConfiguration $proxy = null;

    /**
     * Printer (f.e. to display the receipt)
     */
    protected Printer $printer;

    /**
     * PSR6 Cache solution
     */
    protected CacheItemPoolInterface $cache;

    /**
     * STOMP destination
     */
    protected string $basicStompDestination = '/exchange/connect.api/';

    /**
     * STOMP queue
     */
    protected string $replyToStomp = '/temp-queue/main';

    /**
     * Access token for OAuth
     */
    protected string $accessToken = '';

    /**
     * The default header(s)
     *
     * @var array
     */
    protected array $defaultHeaders = [];

    /**
     * The host
     */
    protected string $host = self::API_URL;

    /**
     * The authentication host
     */
    protected string $authHost = self::BASE_URL;

    /**
     * The stomp port
     */
    protected string $stompPort = '61614';

    /**
     * The stomp host
     */
    protected string $stompHost = 'ssl://' . self::DEFAULT_HOST;

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     */
    protected string $userAgent = 'Secuconnect-PHP-Client/' . self::SDK_VERSION;

    /**
     * Timeout (second) of the HTTP request, by default set to 0, no timeout
     */
    protected int $curlTimeout = 0;

    /**
     * Timeout (second) of the HTTP connection, by default set to 0, no timeout
     */
    protected int $curlConnectTimeout = 0;

    /**
     * Allow Curl encoding header
     *
     * @var bool
     */
    protected bool $allowEncoding = false;

    /**
     * Debug switch (default set to false)
     */
    protected bool $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     */
    protected string $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     */
    protected string $tempFolderPath;

    /**
     * Indicates if SSL verification should be enabled or disabled.
     *
     * This is useful if the host uses a self-signed SSL certificate.
     *
     * @var bool True if the certificate should be validated, false otherwise.
     */
    protected bool $sslVerification = true;

    /**
     * Configuration constructor.
     * @param CacheItemPoolInterface|null $cache
     * @param Printer|null $printer
     */
    public function __construct(CacheItemPoolInterface $cache = null, Printer $printer = null)
    {
        $this->tempFolderPath = sys_get_temp_dir();
        $this->cache = $cache ?: new FileCache();
        $this->printer = $printer ?: new ImitationDevicePrinter();
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport(): string
    {
        $report = 'PHP SDK (Secuconnect\Client) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    SDK Package Version: ' . self::SDK_VERSION . PHP_EOL;
        $report .= '    Default Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Gets the temp folder path
     *
     * @return string
     */
    public function getTempFolderPath(): string
    {
        return $this->tempFolderPath;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath
     * @return $this
     */
    public function setTempFolderPath(string $tempFolderPath): static
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration(): static
    {
        self::$defaultConfiguration ??= new Configuration();

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config): void
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * @return Printer
     */
    public function getPrinter(): Printer
    {
        return $this->printer;
    }

    /**
     * @param Printer $printer
     * @return $this
     */
    public function setPrinter(Printer $printer): static
    {
        $this->printer = $printer;
        return $this;
    }

    /**
     * Gets the PSR6 cache solution
     * @return CacheItemPoolInterface
     */
    public function getCache(): CacheItemPoolInterface
    {
        return $this->cache;
    }

    /**
     * Sets the PSR6 cache solution
     * @param CacheItemPoolInterface $cache
     * @return Configuration
     */
    public function setCache(CacheItemPoolInterface $cache): static
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * Gets the STOMP destination
     *
     * @return string
     */
    public function getBasicStompDestination(): string
    {
        return $this->basicStompDestination;
    }

    /**
     * Sets the STOMP destination
     *
     * @param string $basicStompDestination
     * @return $this
     */
    public function setBasicStompDestination(string $basicStompDestination): static
    {
        $this->basicStompDestination = $basicStompDestination;
        return $this;
    }

    /**
     * Gets the STOMP queue
     *
     * @return string basicStompDestination
     */
    public function getReplyToStomp(): string
    {
        return $this->replyToStomp;
    }

    /**
     * Sets STOMP queue
     *
     * @param string $replyToStomp
     * @return $this
     */
    public function setReplyToStomp(string $replyToStomp): static
    {
        $this->replyToStomp = $replyToStomp;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken): static
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the default header
     *
     * @return array An array of default header(s)
     */
    public function getDefaultHeaders(): array
    {
        return $this->defaultHeaders;
    }

    /**
     * Adds a default header
     *
     * @param string $headerName header name (e.g. Token)
     * @param string $headerValue header value (e.g. 1z8wp3)
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addDefaultHeader(string $headerName, string $headerValue): static
    {
        if (empty($headerName)) {
            throw new InvalidArgumentException('Header name must be a string.');
        }

        $this->defaultHeaders[$headerName] = $headerValue;
        return $this;
    }

    /**
     * Deletes a default header
     *
     * @param string $headerName the header to delete
     * @return $this
     */
    public function deleteDefaultHeader(string $headerName): static
    {
        unset($this->defaultHeaders[$headerName]);
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     * @return $this
     */
    public function setHost(string $host): static
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the authentication host
     *
     * @return string
     */
    public function getAuthHost(): string
    {
        return $this->authHost;
    }

    /**
     * Sets the authentication host
     *
     * @param string $host
     * @return $this
     */
    public function setAuthHost(string $host): static
    {
        $this->authHost = $host;
        return $this;
    }

    /**
     * Gets the stomp port
     *
     * @return string
     */
    public function getStompPort(): string
    {
        return $this->stompPort;
    }

    /**
     * Sets the stomp port
     *
     * @param string $port
     * @return $this
     */
    public function setStompPort(string $port): static
    {
        $this->stompPort = $port;
        return $this;
    }

    /**
     * Gets the stomp host
     *
     * @return string
     */
    public function getStompHost(): string
    {
        return $this->stompHost;
    }

    /**
     * Sets the stomp host
     *
     * @param string $host
     * @return $this
     */
    public function setStompHost(string $host): static
    {
        $this->stompHost = $host;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setUserAgent(string $userAgent): static
    {
        if (empty($userAgent)) {
            throw new InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the HTTP timeout value
     *
     * @return int
     */
    public function getCurlTimeout(): int
    {
        return $this->curlTimeout;
    }

    /**
     * Sets the HTTP timeout value
     *
     * @param int $seconds Number of seconds before timing out [set to 0 for no timeout]
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCurlTimeout(int $seconds): static
    {
        if ($seconds < 0) {
            throw new InvalidArgumentException('Timeout value must be a non-negative number.');
        }

        $this->curlTimeout = $seconds;
        return $this;
    }

    /**
     * Gets the HTTP connect timeout value
     *
     * @return int
     */
    public function getCurlConnectTimeout(): int
    {
        return $this->curlConnectTimeout;
    }

    /**
     * Sets the HTTP connect timeout value
     *
     * @param int $seconds Number of seconds before connection times out [set to 0 for no timeout]
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCurlConnectTimeout(int $seconds): static
    {
        if ($seconds < 0) {
            throw new InvalidArgumentException('Connect timeout value must be a non-negative number.');
        }

        $this->curlConnectTimeout = $seconds;
        return $this;
    }

    /**
     * Get whether to allow encoding
     *
     * @return bool
     */
    public function getAllowEncoding(): bool
    {
        return $this->allowEncoding;
    }

    /**
     * Set whether to accept encoding
     *
     * @param bool $allowEncoding
     * @return $this
     */
    public function setAllowEncoding(bool $allowEncoding): static
    {
        $this->allowEncoding = $allowEncoding;
        return $this;
    }

    /**
     * @return CurlProxyConfiguration|null
     */
    public function getProxy(): ?CurlProxyConfiguration
    {
        return $this->proxy;
    }

    /**
     * @param CurlProxyConfiguration|null $proxy
     * @return Configuration
     */
    public function setProxy(?CurlProxyConfiguration $proxy): static
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug
     * @return $this
     */
    public function setDebug(bool $debug): static
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile(): string
    {
        return $this->debugFile;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     * @return $this
     */
    public function setDebugFile(string $debugFile): static
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets if SSL verification should be enabled or disabled
     *
     * @return bool True if the certificate should be validated, false otherwise
     */
    public function getSSLVerification(): bool
    {
        return $this->sslVerification;
    }

    /**
     * Sets if SSL verification should be enabled or disabled
     *
     * @param bool $sslVerification True if the certificate should be validated, false otherwise
     * @return $this
     */
    public function setSSLVerification(bool $sslVerification): static
    {
        $this->sslVerification = $sslVerification;
        return $this;
    }
}
