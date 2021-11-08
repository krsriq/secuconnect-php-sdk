<?php

namespace Secuconnect\Client;

/**
 * Proxy configuration for curl
 */
class CurlProxyConfiguration
{
    /**
     * Proxy host
     */
    protected ?string $host = null;

    /**
     * Proxy port
     */
    protected ?int $port = null;

    /**
     * Proxy type, e.g. CURLPROXY_HTTP or CURLPROXY_SOCKS5
     *
     * @see https://secure.php.net/manual/en/function.curl-setopt.php
     */
    protected ?int $type = null;

    /**
     * Proxy username
     */
    protected ?string $username = null;

    /**
     * Proxy password
     */
    protected ?string $password = null;

    /**
     * Gets the HTTP Proxy Host
     *
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Sets the HTTP Proxy Host
     *
     * @param string $host
     * @return $this
     */
    public function setHost(string $host): static
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Port
     *
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * Sets the HTTP Proxy Port
     *
     * @param int $port
     * @return $this
     */
    public function setPort(int $port): static
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Type
     *
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Sets the HTTP Proxy Type
     *
     * @param int $type
     * @return $this
     */
    public function setType(int $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets the HTTP Proxy User
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Sets the HTTP Proxy User
     *
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Password
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Sets the HTTP Proxy Password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

}
