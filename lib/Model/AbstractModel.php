<?php

namespace Secuconnect\Client\Model;

use ArrayAccess;
use Secuconnect\Client\ObjectSerializer;

/**
 * Class AbstractModel
 */
class AbstractModel implements ModelInterface, ArrayAccess
{
    /**
     * The original name of the model.
     * @var string
     */
    protected static string $swaggerModelName;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static array $attributeMap;

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static array $swaggerTypes;

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static array $swaggerFormats;

    /**
     * Associative array for storing property values
     * @var array
     */
    protected array $container;

    /**
     * @return string[]
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

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
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        return [];
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
     * @inheritDoc
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
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
     * @inheritDoc (ArrayAccess)
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * @inheritDoc (ArrayAccess)
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * @inheritDoc (ArrayAccess)
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * @inheritDoc (ArrayAccess)
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }
}
