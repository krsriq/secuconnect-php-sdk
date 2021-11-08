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
 * PaymentContainersDTO
 *
 * @category Class
 * @description PaymentContainersDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContainersDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'customer' => '\Secuconnect\Client\Model\PaymentContainersDTOCustomer',
        'customer_id' => 'string',
        'type' => 'string',
        'private' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'customer' => null,
        'customer_id' => null,
        'type' => null,
        'private' => null
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
        'customer' => 'customer',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'private' => 'private'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'customer' => 'setCustomer',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'private' => 'setPrivate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'customer' => 'getCustomer',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'private' => 'getPrivate'
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
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
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
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentContainersDTOCustomer
     */
    public function getCustomer(): PaymentContainersDTOCustomer|null
    {
        return $this->container['customer'] ?? null;
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentContainersDTOCustomer|null $customer customer
     * @return $this
     */
    public function setCustomer(?PaymentContainersDTOCustomer $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId(): string|null
    {
        return $this->container['customer_id'] ?? null;
    }

    /**
     * Sets customer_id
     * @param string|null $customer_id Payment-Customer-ID
     * @return $this
     */
    public function setCustomerId(?string $customer_id): static
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
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
     * @param string|null $type Type of Payment Containers
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets private
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPrivate(): OneOfPaymentContainersDTOModelPrivate|null
    {
        return $this->container['private'] ?? null;
    }

    /**
     * Sets private
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate|null $private private
     * @return $this
     */
    public function setPrivate(?OneOfPaymentContainersDTOModelPrivate $private): static
    {
        $this->container['private'] = $private;

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

