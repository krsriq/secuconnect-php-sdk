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
 * LoyaltyCustomersDTO
 *
 * @category Class
 * @description LoyaltyCustomersDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyCustomersDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'merchant' => 'string',
        'merchant_contact' => '\Secuconnect\Client\Model\Contact',
        'age' => 'int',
        'days_until_birthday' => 'int',
        'customernumber' => 'string',
        'note' => 'string',
        'additional_data' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'merchant' => null,
        'merchant_contact' => null,
        'age' => null,
        'days_until_birthday' => null,
        'customernumber' => null,
        'note' => null,
        'additional_data' => null
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
        'merchant' => 'merchant',
        'merchant_contact' => 'merchant_contact',
        'age' => 'age',
        'days_until_birthday' => 'days_until_birthday',
        'customernumber' => 'customernumber',
        'note' => 'note',
        'additional_data' => 'additional_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'merchant' => 'setMerchant',
        'merchant_contact' => 'setMerchantContact',
        'age' => 'setAge',
        'days_until_birthday' => 'setDaysUntilBirthday',
        'customernumber' => 'setCustomernumber',
        'note' => 'setNote',
        'additional_data' => 'setAdditionalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'merchant' => 'getMerchant',
        'merchant_contact' => 'getMerchantContact',
        'age' => 'getAge',
        'days_until_birthday' => 'getDaysUntilBirthday',
        'customernumber' => 'getCustomernumber',
        'note' => 'getNote',
        'additional_data' => 'getAdditionalData'
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
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['merchant_contact'] = $data['merchant_contact'] ?? null;
        $this->container['age'] = $data['age'] ?? null;
        $this->container['days_until_birthday'] = $data['days_until_birthday'] ?? null;
        $this->container['customernumber'] = $data['customernumber'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['additional_data'] = $data['additional_data'] ?? null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant(): string
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?string $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets merchant_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getMerchantContact(): Contact
    {
        return $this->container['merchant_contact'];
    }

    /**
     * Sets merchant_contact
     * @param \Secuconnect\Client\Model\Contact|null $merchant_contact merchant_contact
     * @return $this
     */
    public function setMerchantContact(?Contact $merchant_contact): static
    {
        $this->container['merchant_contact'] = $merchant_contact;

        return $this;
    }

    /**
     * Gets age
     * @return int
     */
    public function getAge(): int
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     * @param int|null $age Age
     * @return $this
     */
    public function setAge(?int $age): static
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets days_until_birthday
     * @return int
     */
    public function getDaysUntilBirthday(): int
    {
        return $this->container['days_until_birthday'];
    }

    /**
     * Sets days_until_birthday
     * @param int|null $days_until_birthday Number of days until birthday
     * @return $this
     */
    public function setDaysUntilBirthday(?int $days_until_birthday): static
    {
        $this->container['days_until_birthday'] = $days_until_birthday;

        return $this;
    }

    /**
     * Gets customernumber
     * @return string
     */
    public function getCustomernumber(): string
    {
        return $this->container['customernumber'];
    }

    /**
     * Sets customernumber
     * @param string|null $customernumber Customer number
     * @return $this
     */
    public function setCustomernumber(?string $customernumber): static
    {
        $this->container['customernumber'] = $customernumber;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote(): string
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string|null $note note
     * @return $this
     */
    public function setNote(?string $note): static
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets additional_data
     * @return object
     */
    public function getAdditionalData(): object
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param object|null $additional_data Consent for communication
     * @return $this
     */
    public function setAdditionalData(?object $additional_data): static
    {
        $this->container['additional_data'] = $additional_data;

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

