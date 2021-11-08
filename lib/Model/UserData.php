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
 * UserData
 *
 * @category Class
 * @description UserData
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserData implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'UserData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'dob' => '\Secuconnect\Client\Model\ValueField',
        'birthplace' => '\Secuconnect\Client\Model\ValueField',
        'forename' => '\Secuconnect\Client\Model\ValueField',
        'surname' => '\Secuconnect\Client\Model\ValueField',
        'nationality' => '\Secuconnect\Client\Model\ValueField',
        'gender' => '\Secuconnect\Client\Model\ValueField',
        'address' => '\Secuconnect\Client\Model\UserAddressData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'dob' => null,
        'birthplace' => null,
        'forename' => null,
        'surname' => null,
        'nationality' => null,
        'gender' => null,
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
        'dob' => 'dob',
        'birthplace' => 'birthplace',
        'forename' => 'forename',
        'surname' => 'surname',
        'nationality' => 'nationality',
        'gender' => 'gender',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'dob' => 'setDob',
        'birthplace' => 'setBirthplace',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'nationality' => 'setNationality',
        'gender' => 'setGender',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'dob' => 'getDob',
        'birthplace' => 'getBirthplace',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'nationality' => 'getNationality',
        'gender' => 'getGender',
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
        $this->container['dob'] = $data['dob'] ?? null;
        $this->container['birthplace'] = $data['birthplace'] ?? null;
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['nationality'] = $data['nationality'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
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
     * Gets dob
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getDob(): ValueField|null
    {
        return $this->container['dob'] ?? null;
    }

    /**
     * Sets dob
     * @param \Secuconnect\Client\Model\ValueField|null $dob dob
     * @return $this
     */
    public function setDob(?ValueField $dob): static
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets birthplace
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getBirthplace(): ValueField|null
    {
        return $this->container['birthplace'] ?? null;
    }

    /**
     * Sets birthplace
     * @param \Secuconnect\Client\Model\ValueField|null $birthplace birthplace
     * @return $this
     */
    public function setBirthplace(?ValueField $birthplace): static
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets forename
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getForename(): ValueField|null
    {
        return $this->container['forename'] ?? null;
    }

    /**
     * Sets forename
     * @param \Secuconnect\Client\Model\ValueField|null $forename forename
     * @return $this
     */
    public function setForename(?ValueField $forename): static
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getSurname(): ValueField|null
    {
        return $this->container['surname'] ?? null;
    }

    /**
     * Sets surname
     * @param \Secuconnect\Client\Model\ValueField|null $surname surname
     * @return $this
     */
    public function setSurname(?ValueField $surname): static
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets nationality
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getNationality(): ValueField|null
    {
        return $this->container['nationality'] ?? null;
    }

    /**
     * Sets nationality
     * @param \Secuconnect\Client\Model\ValueField|null $nationality nationality
     * @return $this
     */
    public function setNationality(?ValueField $nationality): static
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets gender
     * @return \Secuconnect\Client\Model\ValueField
     */
    public function getGender(): ValueField|null
    {
        return $this->container['gender'] ?? null;
    }

    /**
     * Sets gender
     * @param \Secuconnect\Client\Model\ValueField|null $gender gender
     * @return $this
     */
    public function setGender(?ValueField $gender): static
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets address
     * @return \Secuconnect\Client\Model\UserAddressData
     */
    public function getAddress(): UserAddressData|null
    {
        return $this->container['address'] ?? null;
    }

    /**
     * Sets address
     * @param \Secuconnect\Client\Model\UserAddressData|null $address address
     * @return $this
     */
    public function setAddress(?UserAddressData $address): static
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

