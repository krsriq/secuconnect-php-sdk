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
 * GeoAddress
 *
 * @category Class
 * @description GeoAddress
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeoAddress implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeoAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'type' => 'string',
        'address_components' => '\Secuconnect\Client\Model\AddressComponents[]',
        'address_formatted' => 'string',
        'geometry' => '\Secuconnect\Client\Model\GeoAddressGeometry'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'type' => null,
        'address_components' => null,
        'address_formatted' => null,
        'geometry' => null
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
        'type' => 'type',
        'address_components' => 'address_components',
        'address_formatted' => 'address_formatted',
        'geometry' => 'geometry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'address_components' => 'setAddressComponents',
        'address_formatted' => 'setAddressFormatted',
        'geometry' => 'setGeometry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'address_components' => 'getAddressComponents',
        'address_formatted' => 'getAddressFormatted',
        'geometry' => 'getGeometry'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['address_components'] = $data['address_components'] ?? null;
        $this->container['address_formatted'] = $data['address_formatted'] ?? null;
        $this->container['geometry'] = $data['geometry'] ?? null;
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
     * Gets type
     * @return string
     */
    public function getType(): string|null
    {
        return $this->container['type'] ?? null;
    }

    /**
     * Sets type
     * @param string|null $type Address type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address_components
     * @return \Secuconnect\Client\Model\AddressComponents[]
     */
    public function getAddressComponents(): array|null
    {
        return $this->container['address_components'] ?? null;
    }

    /**
     * Sets address_components
     * @param \Secuconnect\Client\Model\AddressComponents[]|null $address_components Address components
     * @return $this
     */
    public function setAddressComponents(?array $address_components): static
    {
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets address_formatted
     * @return string
     */
    public function getAddressFormatted(): string|null
    {
        return $this->container['address_formatted'] ?? null;
    }

    /**
     * Sets address_formatted
     * @param string|null $address_formatted Address formatted
     * @return $this
     */
    public function setAddressFormatted(?string $address_formatted): static
    {
        $this->container['address_formatted'] = $address_formatted;

        return $this;
    }

    /**
     * Gets geometry
     * @return \Secuconnect\Client\Model\GeoAddressGeometry
     */
    public function getGeometry(): GeoAddressGeometry|null
    {
        return $this->container['geometry'] ?? null;
    }

    /**
     * Sets geometry
     * @param \Secuconnect\Client\Model\GeoAddressGeometry|null $geometry geometry
     * @return $this
     */
    public function setGeometry(?GeoAddressGeometry $geometry): static
    {
        $this->container['geometry'] = $geometry;

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

