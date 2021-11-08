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
 * SmartTransactionsReceiptValue
 *
 * @category Class
 * @description SmartTransactionsReceiptValue
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsReceiptValue implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsReceiptValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'caption' => 'string',
        'text' => 'string',
        'decoration' => 'string[]',
        'name' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'caption' => null,
        'text' => null,
        'decoration' => null,
        'name' => null,
        'value' => null
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
        'caption' => 'caption',
        'text' => 'text',
        'decoration' => 'decoration',
        'name' => 'name',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'caption' => 'setCaption',
        'text' => 'setText',
        'decoration' => 'setDecoration',
        'name' => 'setName',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'caption' => 'getCaption',
        'text' => 'getText',
        'decoration' => 'getDecoration',
        'name' => 'getName',
        'value' => 'getValue'
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
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['decoration'] = $data['decoration'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
     * Gets caption
     * @return string
     */
    public function getCaption(): string|null
    {
        return $this->container['caption'] ?? null;
    }

    /**
     * Sets caption
     * @param string|null $caption Caption
     * @return $this
     */
    public function setCaption(?string $caption): static
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText(): string|null
    {
        return $this->container['text'] ?? null;
    }

    /**
     * Sets text
     * @param string|null $text Text
     * @return $this
     */
    public function setText(?string $text): static
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets decoration
     * @return string[]
     */
    public function getDecoration(): array|null
    {
        return $this->container['decoration'] ?? null;
    }

    /**
     * Sets decoration
     * @param string[]|null $decoration Decoration
     * @return $this
     */
    public function setDecoration(?array $decoration): static
    {
        $this->container['decoration'] = $decoration;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string|null
    {
        return $this->container['name'] ?? null;
    }

    /**
     * Sets name
     * @param string|null $name Name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue(): string|null
    {
        return $this->container['value'] ?? null;
    }

    /**
     * Sets value
     * @param string|null $value Value
     * @return $this
     */
    public function setValue(?string $value): static
    {
        $this->container['value'] = $value;

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

