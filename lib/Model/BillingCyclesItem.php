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
 * BillingCyclesItem
 *
 * @category Class
 * @description BillingCyclesItem
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingCyclesItem implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'BillingCyclesItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'sequence' => 'int',
        'interval' => '\Secuconnect\Client\Model\PaymentPlanInterval',
        'tenure_type' => 'string',
        'total_cycles' => 'int',
        'price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'sequence' => null,
        'interval' => null,
        'tenure_type' => null,
        'total_cycles' => null,
        'price' => null
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
        'sequence' => 'sequence',
        'interval' => 'interval',
        'tenure_type' => 'tenure_type',
        'total_cycles' => 'total_cycles',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'sequence' => 'setSequence',
        'interval' => 'setInterval',
        'tenure_type' => 'setTenureType',
        'total_cycles' => 'setTotalCycles',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'sequence' => 'getSequence',
        'interval' => 'getInterval',
        'tenure_type' => 'getTenureType',
        'total_cycles' => 'getTotalCycles',
        'price' => 'getPrice'
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
        $this->container['sequence'] = $data['sequence'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['tenure_type'] = $data['tenure_type'] ?? null;
        $this->container['total_cycles'] = $data['total_cycles'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
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
     * Gets sequence
     * @return int
     */
    public function getSequence(): int
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     * @param int|null $sequence sequence
     * @return $this
     */
    public function setSequence(?int $sequence): static
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets interval
     * @return \Secuconnect\Client\Model\PaymentPlanInterval
     */
    public function getInterval(): PaymentPlanInterval
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param \Secuconnect\Client\Model\PaymentPlanInterval|null $interval interval
     * @return $this
     */
    public function setInterval(?PaymentPlanInterval $interval): static
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets tenure_type
     * @return string
     */
    public function getTenureType(): string
    {
        return $this->container['tenure_type'];
    }

    /**
     * Sets tenure_type
     * @param string|null $tenure_type Tenure type
     * @return $this
     */
    public function setTenureType(?string $tenure_type): static
    {
        $this->container['tenure_type'] = $tenure_type;

        return $this;
    }

    /**
     * Gets total_cycles
     * @return int
     */
    public function getTotalCycles(): int
    {
        return $this->container['total_cycles'];
    }

    /**
     * Sets total_cycles
     * @param int|null $total_cycles Total cycles
     * @return $this
     */
    public function setTotalCycles(?int $total_cycles): static
    {
        $this->container['total_cycles'] = $total_cycles;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice(): int
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int|null $price Price
     * @return $this
     */
    public function setPrice(?int $price): static
    {
        $this->container['price'] = $price;

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

