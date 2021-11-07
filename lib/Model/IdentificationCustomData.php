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
 * IdentificationCustomData
 *
 * @category Class
 * @description IdentificationCustomData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentificationCustomData implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'IdentificationCustomData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'custom1' => 'string',
        'custom2' => 'string',
        'custom3' => 'string',
        'custom4' => 'string',
        'custom5' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'custom1' => null,
        'custom2' => null,
        'custom3' => null,
        'custom4' => null,
        'custom5' => null
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
        'custom1' => 'custom1',
        'custom2' => 'custom2',
        'custom3' => 'custom3',
        'custom4' => 'custom4',
        'custom5' => 'custom5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'custom1' => 'setCustom1',
        'custom2' => 'setCustom2',
        'custom3' => 'setCustom3',
        'custom4' => 'setCustom4',
        'custom5' => 'setCustom5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'custom1' => 'getCustom1',
        'custom2' => 'getCustom2',
        'custom3' => 'getCustom3',
        'custom4' => 'getCustom4',
        'custom5' => 'getCustom5'
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
        $this->container['custom1'] = $data['custom1'] ?? null;
        $this->container['custom2'] = $data['custom2'] ?? null;
        $this->container['custom3'] = $data['custom3'] ?? null;
        $this->container['custom4'] = $data['custom4'] ?? null;
        $this->container['custom5'] = $data['custom5'] ?? null;
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
     * Gets custom1
     * @return string
     */
    public function getCustom1(): string
    {
        return $this->container['custom1'];
    }

    /**
     * Sets custom1
     * @param string|null $custom1 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom1(?string $custom1): static
    {
        $this->container['custom1'] = $custom1;

        return $this;
    }

    /**
     * Gets custom2
     * @return string
     */
    public function getCustom2(): string
    {
        return $this->container['custom2'];
    }

    /**
     * Sets custom2
     * @param string|null $custom2 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom2(?string $custom2): static
    {
        $this->container['custom2'] = $custom2;

        return $this;
    }

    /**
     * Gets custom3
     * @return string
     */
    public function getCustom3(): string
    {
        return $this->container['custom3'];
    }

    /**
     * Sets custom3
     * @param string|null $custom3 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom3(?string $custom3): static
    {
        $this->container['custom3'] = $custom3;

        return $this;
    }

    /**
     * Gets custom4
     * @return string
     */
    public function getCustom4(): string
    {
        return $this->container['custom4'];
    }

    /**
     * Sets custom4
     * @param string|null $custom4 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom4(?string $custom4): static
    {
        $this->container['custom4'] = $custom4;

        return $this;
    }

    /**
     * Gets custom5
     * @return string
     */
    public function getCustom5(): string
    {
        return $this->container['custom5'];
    }

    /**
     * Sets custom5
     * @param string|null $custom5 Some custom fields which can be individually used to store information
     * @return $this
     */
    public function setCustom5(?string $custom5): static
    {
        $this->container['custom5'] = $custom5;

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

