<?php
/**
 * @noinspection PhpUnused
 * @noinspection DuplicatedCode
 * @noinspection PhpUnnecessaryLocalVariableInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @noinspection PhpPureAttributeCanBeAddedInspection
 */

namespace Secuconnect\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use Secuconnect\Client\ObjectSerializer;

/**
 * SmartTransactionsPrepare
 *
 * @category Class
 * @description SmartTransactionsPrepare
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsPrepare implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsPrepare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'customer' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'container' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'method' => 'string',
        'callback_urls' => '\Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls',
        'email' => 'string',
        'device_source' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'mode' => 'string',
        'is_paypal_basic' => 'bool',
        'is_demo' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'customer' => null,
        'container' => null,
        'method' => null,
        'callback_urls' => null,
        'email' => null,
        'device_source' => null,
        'mode' => null,
        'is_paypal_basic' => null,
        'is_demo' => null
    ];

    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static array $attributeMap = [
        'customer' => 'customer',
        'container' => 'container',
        'method' => 'method',
        'callback_urls' => 'callback_urls',
        'email' => 'email',
        'device_source' => 'device_source',
        'mode' => 'mode',
        'is_paypal_basic' => 'is_paypal_basic',
        'is_demo' => 'is_demo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'customer' => 'setCustomer',
        'container' => 'setContainer',
        'method' => 'setMethod',
        'callback_urls' => 'setCallbackUrls',
        'email' => 'setEmail',
        'device_source' => 'setDeviceSource',
        'mode' => 'setMode',
        'is_paypal_basic' => 'setIsPaypalBasic',
        'is_demo' => 'setIsDemo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'customer' => 'getCustomer',
        'container' => 'getContainer',
        'method' => 'getMethod',
        'callback_urls' => 'getCallbackUrls',
        'email' => 'getEmail',
        'device_source' => 'getDeviceSource',
        'mode' => 'getMode',
        'is_paypal_basic' => 'getIsPaypalBasic',
        'is_demo' => 'getIsDemo'
    ];

    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    public static function setters(): array
    {
        return self::$setters;
    }

    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['callback_urls'] = $data['callback_urls'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['device_source'] = $data['device_source'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['is_paypal_basic'] = $data['is_paypal_basic'] ?? null;
        $this->container['is_demo'] = $data['is_demo'] ?? null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return true;
    }


    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCustomer(): ProductInstanceUID
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $customer customer
     * @return $this
     */
    public function setCustomer(?ProductInstanceUID $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContainer(): ProductInstanceUID
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $container container
     * @return $this
     */
    public function setContainer(?ProductInstanceUID $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod(): string
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string|null $method Method
     * @return $this
     */
    public function setMethod(?string $method): static
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets callback_urls
     * @return \Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls
     */
    public function getCallbackUrls(): SmartTransactionsPrepareCallbackUrls
    {
        return $this->container['callback_urls'];
    }

    /**
     * Sets callback_urls
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepareCallbackUrls|null $callback_urls callback_urls
     * @return $this
     */
    public function setCallbackUrls(?SmartTransactionsPrepareCallbackUrls $callback_urls): static
    {
        $this->container['callback_urls'] = $callback_urls;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail(): string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string|null $email Email
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets device_source
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceSource(): ProductInstanceUID
    {
        return $this->container['device_source'];
    }

    /**
     * Sets device_source
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $device_source device_source
     * @return $this
     */
    public function setDeviceSource(?ProductInstanceUID $device_source): static
    {
        $this->container['device_source'] = $device_source;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode(): string
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string|null $mode Mode
     * @return $this
     */
    public function setMode(?string $mode): static
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets is_paypal_basic
     * @return bool
     */
    public function getIsPaypalBasic(): bool
    {
        return $this->container['is_paypal_basic'];
    }

    /**
     * Sets is_paypal_basic
     * @param bool|null $is_paypal_basic Is paypal basic or not
     * @return $this
     */
    public function setIsPaypalBasic(?bool $is_paypal_basic): static
    {
        $this->container['is_paypal_basic'] = $is_paypal_basic;

        return $this;
    }

    /**
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo(): bool
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     * @param bool|null $is_demo Is demo or not
     * @return $this
     */
    public function setIsDemo(?bool $is_demo): static
    {
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
    }

    /**
     * @inheritDoc
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }
}

