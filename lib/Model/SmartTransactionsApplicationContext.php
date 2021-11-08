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
 * SmartTransactionsApplicationContext
 *
 * @category Class
 * @description SmartTransactionsApplicationContext
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApplicationContext implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsApplicationContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'locks' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks',
        'return_urls' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls',
        'iframe_opts' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts',
        'checkout_template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'locks' => null,
        'return_urls' => null,
        'iframe_opts' => null,
        'checkout_template' => null
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
        'locks' => 'locks',
        'return_urls' => 'return_urls',
        'iframe_opts' => 'iframe_opts',
        'checkout_template' => 'checkout_template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'locks' => 'setLocks',
        'return_urls' => 'setReturnUrls',
        'iframe_opts' => 'setIframeOpts',
        'checkout_template' => 'setCheckoutTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'locks' => 'getLocks',
        'return_urls' => 'getReturnUrls',
        'iframe_opts' => 'getIframeOpts',
        'checkout_template' => 'getCheckoutTemplate'
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
        $this->container['locks'] = $data['locks'] ?? null;
        $this->container['return_urls'] = $data['return_urls'] ?? null;
        $this->container['iframe_opts'] = $data['iframe_opts'] ?? null;
        $this->container['checkout_template'] = $data['checkout_template'] ?? null;
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
     * Gets locks
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks
     */
    public function getLocks(): SmartTransactionsApplicationContextLocks|null
    {
        return $this->container['locks'] ?? null;
    }

    /**
     * Sets locks
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks|null $locks locks
     * @return $this
     */
    public function setLocks(?SmartTransactionsApplicationContextLocks $locks): static
    {
        $this->container['locks'] = $locks;

        return $this;
    }

    /**
     * Gets return_urls
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls
     */
    public function getReturnUrls(): SmartTransactionsApplicationContextReturnUrls|null
    {
        return $this->container['return_urls'] ?? null;
    }

    /**
     * Sets return_urls
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls|null $return_urls return_urls
     * @return $this
     */
    public function setReturnUrls(?SmartTransactionsApplicationContextReturnUrls $return_urls): static
    {
        $this->container['return_urls'] = $return_urls;

        return $this;
    }

    /**
     * Gets iframe_opts
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts
     */
    public function getIframeOpts(): SmartTransactionsApplicationContextIframeOpts|null
    {
        return $this->container['iframe_opts'] ?? null;
    }

    /**
     * Sets iframe_opts
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts|null $iframe_opts iframe_opts
     * @return $this
     */
    public function setIframeOpts(?SmartTransactionsApplicationContextIframeOpts $iframe_opts): static
    {
        $this->container['iframe_opts'] = $iframe_opts;

        return $this;
    }

    /**
     * Gets checkout_template
     * @return string
     */
    public function getCheckoutTemplate(): string|null
    {
        return $this->container['checkout_template'] ?? null;
    }

    /**
     * Sets checkout_template
     * @param string|null $checkout_template Smart Checkout Template ID
     * @return $this
     */
    public function setCheckoutTemplate(?string $checkout_template): static
    {
        $this->container['checkout_template'] = $checkout_template;

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

