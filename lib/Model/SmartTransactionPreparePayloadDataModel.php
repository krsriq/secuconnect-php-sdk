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
 * SmartTransactionPreparePayloadDataModel
 *
 * @category Class
 * @description SmartTransactionPreparePayloadDataModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionPreparePayloadDataModel implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionPreparePayloadDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'callback_urls' => 'string[]',
        'email' => 'string',
        'mode' => 'string',
        'is_paypal_basic' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'callback_urls' => null,
        'email' => null,
        'mode' => null,
        'is_paypal_basic' => null
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
        'callback_urls' => 'callback_urls',
        'email' => 'email',
        'mode' => 'mode',
        'is_paypal_basic' => 'is_paypal_basic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'callback_urls' => 'setCallbackUrls',
        'email' => 'setEmail',
        'mode' => 'setMode',
        'is_paypal_basic' => 'setIsPaypalBasic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'callback_urls' => 'getCallbackUrls',
        'email' => 'getEmail',
        'mode' => 'getMode',
        'is_paypal_basic' => 'getIsPaypalBasic'
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
        $this->container['callback_urls'] = $data['callback_urls'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['is_paypal_basic'] = $data['is_paypal_basic'] ?? null;
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
     * Gets callback_urls
     * @return string[]
     */
    public function getCallbackUrls(): array|null
    {
        return $this->container['callback_urls'] ?? null;
    }

    /**
     * Sets callback_urls
     * @param string[]|null $callback_urls Callback urls
     * @return $this
     */
    public function setCallbackUrls(?array $callback_urls): static
    {
        $this->container['callback_urls'] = $callback_urls;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail(): string|null
    {
        return $this->container['email'] ?? null;
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
     * Gets mode
     * @return string
     */
    public function getMode(): string|null
    {
        return $this->container['mode'] ?? null;
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
    public function getIsPaypalBasic(): bool|null
    {
        return $this->container['is_paypal_basic'] ?? null;
    }

    /**
     * Sets is_paypal_basic
     * @param bool|null $is_paypal_basic Information whether a smart transaction is PayPal basic or not
     * @return $this
     */
    public function setIsPaypalBasic(?bool $is_paypal_basic): static
    {
        $this->container['is_paypal_basic'] = $is_paypal_basic;

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

