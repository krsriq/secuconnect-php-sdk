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
 * Address
 *
 * @category Class
 * @description Postal address
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'type' => 'string',
        'street' => 'string',
        'street_number' => 'string',
        'city' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'additional_address_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'type' => null,
        'street' => null,
        'street_number' => null,
        'city' => null,
        'postal_code' => null,
        'country' => null,
        'additional_address_data' => null
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
        'street' => 'street',
        'street_number' => 'street_number',
        'city' => 'city',
        'postal_code' => 'postal_code',
        'country' => 'country',
        'additional_address_data' => 'additional_address_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'street' => 'setStreet',
        'street_number' => 'setStreetNumber',
        'city' => 'setCity',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'additional_address_data' => 'setAdditionalAddressData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'street' => 'getStreet',
        'street_number' => 'getStreetNumber',
        'city' => 'getCity',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'additional_address_data' => 'getAdditionalAddressData'
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
        $this->container['street'] = $data['street'] ?? null;
        $this->container['street_number'] = $data['street_number'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['additional_address_data'] = $data['additional_address_data'] ?? null;
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
     * @param string|null $type Type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet(): string|null
    {
        return $this->container['street'] ?? null;
    }

    /**
     * Sets street
     * @param string|null $street Street name without house number
     * @return $this
     */
    public function setStreet(?string $street): static
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_number
     * @return string
     */
    public function getStreetNumber(): string|null
    {
        return $this->container['street_number'] ?? null;
    }

    /**
     * Sets street_number
     * @param string|null $street_number House number incl. supplement
     * @return $this
     */
    public function setStreetNumber(?string $street_number): static
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity(): string|null
    {
        return $this->container['city'] ?? null;
    }

    /**
     * Sets city
     * @param string|null $city City
     * @return $this
     */
    public function setCity(?string $city): static
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode(): string|null
    {
        return $this->container['postal_code'] ?? null;
    }

    /**
     * Sets postal_code
     * @param string|null $postal_code Postal code / ZIP code
     * @return $this
     */
    public function setPostalCode(?string $postal_code): static
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry(): string|null
    {
        return $this->container['country'] ?? null;
    }

    /**
     * Sets country
     * @param string|null $country country
     * @return $this
     */
    public function setCountry(?string $country): static
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets additional_address_data
     * @return string
     */
    public function getAdditionalAddressData(): string|null
    {
        return $this->container['additional_address_data'] ?? null;
    }

    /**
     * Sets additional_address_data
     * @param string|null $additional_address_data Additional address line, like c/o, or an appartment number
     * @return $this
     */
    public function setAdditionalAddressData(?string $additional_address_data): static
    {
        $this->container['additional_address_data'] = $additional_address_data;

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

