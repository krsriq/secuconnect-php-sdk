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
 * LoyaltyCustomersContactDTO
 *
 * @category Class
 * @description LoyaltyCustomersContactDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersContactDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyCustomersContactDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'forename' => 'string',
        'surname' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'address' => '\Secuconnect\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'forename' => null,
        'surname' => null,
        'name' => null,
        'phone' => null,
        'address' => null
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
        'forename' => 'forename',
        'surname' => 'surname',
        'name' => 'name',
        'phone' => 'phone',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'name' => 'setName',
        'phone' => 'setPhone',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'name' => 'getName',
        'phone' => 'getPhone',
        'address' => 'getAddress'
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
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
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
     * Gets forename
     * @return string
     */
    public function getForename(): string
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param string|null $forename Forename
     * @return $this
     */
    public function setForename(?string $forename): static
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return string
     */
    public function getSurname(): string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param string|null $surname Surname
     * @return $this
     */
    public function setSurname(?string $surname): static
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
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
     * Gets phone
     * @return string
     */
    public function getPhone(): string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string|null $phone Phone
     * @return $this
     */
    public function setPhone(?string $phone): static
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets address
     * @return \Secuconnect\Client\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Secuconnect\Client\Model\Address|null $address address
     * @return $this
     */
    public function setAddress(?Address $address): static
    {
        $this->container['address'] = $address;

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

