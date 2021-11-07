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
 * LoyaltyCustomersPaymentContainerModel
 *
 * @category Class
 * @description LoyaltyCustomersPaymentContainerModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersPaymentContainerModel implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyCustomersPaymentContainerModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'type' => 'string',
        'payment_information' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'last_usage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'object' => null,
        'id' => null,
        'type' => null,
        'payment_information' => null,
        'last_usage' => null
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
        'type' => 'type',
        'payment_information' => 'payment_information',
        'last_usage' => 'last_usage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'type' => 'setType',
        'payment_information' => 'setPaymentInformation',
        'last_usage' => 'setLastUsage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'type' => 'getType',
        'payment_information' => 'getPaymentInformation',
        'last_usage' => 'getLastUsage'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['payment_information'] = $data['payment_information'] ?? null;
        $this->container['last_usage'] = $data['last_usage'] ?? null;
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
    public function getObject(): string
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string|null $object object
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
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string|null $id id
     * @return $this
     */
    public function setId(?string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string|null $type type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets payment_information
     * @return \Secuconnect\Client\Model\BankAccountDescriptor
     */
    public function getPaymentInformation(): BankAccountDescriptor
    {
        return $this->container['payment_information'];
    }

    /**
     * Sets payment_information
     * @param \Secuconnect\Client\Model\BankAccountDescriptor|null $payment_information payment_information
     * @return $this
     */
    public function setPaymentInformation(?BankAccountDescriptor $payment_information): static
    {
        $this->container['payment_information'] = $payment_information;

        return $this;
    }

    /**
     * Gets last_usage
     * @return string
     */
    public function getLastUsage(): string
    {
        return $this->container['last_usage'];
    }

    /**
     * Sets last_usage
     * @param string|null $last_usage Last Usage date
     * @return $this
     */
    public function setLastUsage(?string $last_usage): static
    {
        $this->container['last_usage'] = $last_usage;

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

