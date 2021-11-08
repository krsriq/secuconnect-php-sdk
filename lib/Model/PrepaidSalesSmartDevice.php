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
 * PrepaidSalesSmartDevice
 *
 * @category Class
 * @description PrepaidSalesSmartDevice
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidSalesSmartDevice implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PrepaidSalesSmartDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'description' => 'string',
        'vendor_uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'object' => null,
        'id' => null,
        'description' => null,
        'vendor_uid' => null
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
        'object' => 'object',
        'id' => 'id',
        'description' => 'description',
        'vendor_uid' => 'vendor_uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'description' => 'setDescription',
        'vendor_uid' => 'setVendorUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'description' => 'getDescription',
        'vendor_uid' => 'getVendorUid'
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
        $this->container['object'] = $data['object'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['vendor_uid'] = $data['vendor_uid'] ?? null;
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
     * Gets object
     * @return string
     */
    public function getObject(): string|null
    {
        return $this->container['object'] ?? null;
    }

    /**
     * Sets object
     * @param string|null $object Object of smart device
     * @return $this
     */
    public function setObject(?string $object): static
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId(): string|null
    {
        return $this->container['id'] ?? null;
    }

    /**
     * Sets id
     * @param string|null $id Id of smart device
     * @return $this
     */
    public function setId(?string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription(): string|null
    {
        return $this->container['description'] ?? null;
    }

    /**
     * Sets description
     * @param string|null $description Smart device description
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vendor_uid
     * @return string
     */
    public function getVendorUid(): string|null
    {
        return $this->container['vendor_uid'] ?? null;
    }

    /**
     * Sets vendor_uid
     * @param string|null $vendor_uid Smart device vendor uid
     * @return $this
     */
    public function setVendorUid(?string $vendor_uid): static
    {
        $this->container['vendor_uid'] = $vendor_uid;

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

