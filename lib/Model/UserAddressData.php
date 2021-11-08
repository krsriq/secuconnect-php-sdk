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
 * UserAddressData
 *
 * @category Class
 * @description UserAddressData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAddressData implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'UserAddressData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'street' => '\Secuconnect\Client\Model\ValueField',
        'street_number' => '\Secuconnect\Client\Model\ValueField',
        'city' => '\Secuconnect\Client\Model\ValueField',
        'postal_code' => '\Secuconnect\Client\Model\ValueField',
        'country' => '\Secuconnect\Client\Model\ValueField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'street' => null,
        'street_number' => null,
        'city' => null,
        'postal_code' => null,
        'country' => null
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
        'street' => 'street',
        'street_number' => 'street_number',
        'city' => 'city',
        'postal_code' => 'postal_code',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'street' => 'setStreet',
        'street_number' => 'setStreetNumber',
        'city' => 'setCity',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'street' => 'getStreet',
        'street_number' => 'getStreetNumber',
        'city' => 'getCity',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['street'] = $data['street'] ?? null;
        $this->container['street_number'] = $data['street_number'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
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
     * Gets street
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getStreet(): ValueField|null
    {
        return $this->container['street'] ?? null;
    }

    /**
     * Sets street
     * @param \Secuconnect\Client\Model\ValueField|null $street street
     * @return $this
     */
    public function setStreet(?ValueField $street): static
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_number
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getStreetNumber(): ValueField|null
    {
        return $this->container['street_number'] ?? null;
    }

    /**
     * Sets street_number
     * @param \Secuconnect\Client\Model\ValueField|null $street_number street_number
     * @return $this
     */
    public function setStreetNumber(?ValueField $street_number): static
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets city
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getCity(): ValueField|null
    {
        return $this->container['city'] ?? null;
    }

    /**
     * Sets city
     * @param \Secuconnect\Client\Model\ValueField|null $city city
     * @return $this
     */
    public function setCity(?ValueField $city): static
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postal_code
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getPostalCode(): ValueField|null
    {
        return $this->container['postal_code'] ?? null;
    }

    /**
     * Sets postal_code
     * @param \Secuconnect\Client\Model\ValueField|null $postal_code postal_code
     * @return $this
     */
    public function setPostalCode(?ValueField $postal_code): static
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getCountry(): ValueField|null
    {
        return $this->container['country'] ?? null;
    }

    /**
     * Sets country
     * @param \Secuconnect\Client\Model\ValueField|null $country country
     * @return $this
     */
    public function setCountry(?ValueField $country): static
    {
        $this->container['country'] = $country;

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

