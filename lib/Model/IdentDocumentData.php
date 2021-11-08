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
 * IdentDocumentData
 *
 * @category Class
 * @description IdentDocumentData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentDocumentData implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'IdentDocumentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'country' => '\Secuconnect\Client\Model\ValueField',
        'dateissued' => '\Secuconnect\Client\Model\ValueField',
        'issuedby' => '\Secuconnect\Client\Model\ValueField',
        'number' => '\Secuconnect\Client\Model\ValueField',
        'type' => '\Secuconnect\Client\Model\ValueField',
        'validuntil' => '\Secuconnect\Client\Model\ValueField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'country' => null,
        'dateissued' => null,
        'issuedby' => null,
        'number' => null,
        'type' => null,
        'validuntil' => null
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
        'country' => 'country',
        'dateissued' => 'dateissued',
        'issuedby' => 'issuedby',
        'number' => 'number',
        'type' => 'type',
        'validuntil' => 'validuntil'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'country' => 'setCountry',
        'dateissued' => 'setDateissued',
        'issuedby' => 'setIssuedby',
        'number' => 'setNumber',
        'type' => 'setType',
        'validuntil' => 'setValiduntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'country' => 'getCountry',
        'dateissued' => 'getDateissued',
        'issuedby' => 'getIssuedby',
        'number' => 'getNumber',
        'type' => 'getType',
        'validuntil' => 'getValiduntil'
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
        $this->container['country'] = $data['country'] ?? null;
        $this->container['dateissued'] = $data['dateissued'] ?? null;
        $this->container['issuedby'] = $data['issuedby'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['validuntil'] = $data['validuntil'] ?? null;
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
     * Gets dateissued
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getDateissued(): ValueField|null
    {
        return $this->container['dateissued'] ?? null;
    }

    /**
     * Sets dateissued
     * @param \Secuconnect\Client\Model\ValueField|null $dateissued dateissued
     * @return $this
     */
    public function setDateissued(?ValueField $dateissued): static
    {
        $this->container['dateissued'] = $dateissued;

        return $this;
    }

    /**
     * Gets issuedby
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getIssuedby(): ValueField|null
    {
        return $this->container['issuedby'] ?? null;
    }

    /**
     * Sets issuedby
     * @param \Secuconnect\Client\Model\ValueField|null $issuedby issuedby
     * @return $this
     */
    public function setIssuedby(?ValueField $issuedby): static
    {
        $this->container['issuedby'] = $issuedby;

        return $this;
    }

    /**
     * Gets number
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getNumber(): ValueField|null
    {
        return $this->container['number'] ?? null;
    }

    /**
     * Sets number
     * @param \Secuconnect\Client\Model\ValueField|null $number number
     * @return $this
     */
    public function setNumber(?ValueField $number): static
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets type
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getType(): ValueField|null
    {
        return $this->container['type'] ?? null;
    }

    /**
     * Sets type
     * @param \Secuconnect\Client\Model\ValueField|null $type type
     * @return $this
     */
    public function setType(?ValueField $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validuntil
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getValiduntil(): ValueField|null
    {
        return $this->container['validuntil'] ?? null;
    }

    /**
     * Sets validuntil
     * @param \Secuconnect\Client\Model\ValueField|null $validuntil validuntil
     * @return $this
     */
    public function setValiduntil(?ValueField $validuntil): static
    {
        $this->container['validuntil'] = $validuntil;

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

