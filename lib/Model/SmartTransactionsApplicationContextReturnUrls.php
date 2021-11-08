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
 * SmartTransactionsApplicationContextReturnUrls
 *
 * @category Class
 * @description SmartTransactionsApplicationContextReturnUrls
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApplicationContextReturnUrls implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsApplicationContextReturnUrls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'url_success' => 'string',
        'url_abort' => 'string',
        'url_error' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'url_success' => null,
        'url_abort' => null,
        'url_error' => null
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
        'url_success' => 'url_success',
        'url_abort' => 'url_abort',
        'url_error' => 'url_error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'url_success' => 'setUrlSuccess',
        'url_abort' => 'setUrlAbort',
        'url_error' => 'setUrlError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'url_success' => 'getUrlSuccess',
        'url_abort' => 'getUrlAbort',
        'url_error' => 'getUrlError'
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
        $this->container['url_success'] = $data['url_success'] ?? null;
        $this->container['url_abort'] = $data['url_abort'] ?? null;
        $this->container['url_error'] = $data['url_error'] ?? null;
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
     * Gets url_success
     * @return string
     */
    public function getUrlSuccess(): string|null
    {
        return $this->container['url_success'] ?? null;
    }

    /**
     * Sets url_success
     * @param string|null $url_success Success URL
     * @return $this
     */
    public function setUrlSuccess(?string $url_success): static
    {
        $this->container['url_success'] = $url_success;

        return $this;
    }

    /**
     * Gets url_abort
     * @return string
     */
    public function getUrlAbort(): string|null
    {
        return $this->container['url_abort'] ?? null;
    }

    /**
     * Sets url_abort
     * @param string|null $url_abort Abort URL
     * @return $this
     */
    public function setUrlAbort(?string $url_abort): static
    {
        $this->container['url_abort'] = $url_abort;

        return $this;
    }

    /**
     * Gets url_error
     * @return string
     */
    public function getUrlError(): string|null
    {
        return $this->container['url_error'] ?? null;
    }

    /**
     * Sets url_error
     * @param string|null $url_error Error URL
     * @return $this
     */
    public function setUrlError(?string $url_error): static
    {
        $this->container['url_error'] = $url_error;

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

