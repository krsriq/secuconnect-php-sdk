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
 * PaymentSubscriptionsProductModelBillingCycles
 *
 * @category Class
 * @description Billing cycles
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSubscriptionsProductModelBillingCycles implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentSubscriptionsProductModel_billing_cycles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'cycle_executions' => '\Secuconnect\Client\Model\BillingCyclesItem[]',
        'next_billing_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'cycle_executions' => null,
        'next_billing_time' => null
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
        'cycle_executions' => 'cycle_executions',
        'next_billing_time' => 'next_billing_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'cycle_executions' => 'setCycleExecutions',
        'next_billing_time' => 'setNextBillingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'cycle_executions' => 'getCycleExecutions',
        'next_billing_time' => 'getNextBillingTime'
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
        $this->container['cycle_executions'] = $data['cycle_executions'] ?? null;
        $this->container['next_billing_time'] = $data['next_billing_time'] ?? null;
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
     * Gets cycle_executions
     * @return \Secuconnect\Client\Model\BillingCyclesItem[]
     */
    public function getCycleExecutions(): array|null
    {
        return $this->container['cycle_executions'] ?? null;
    }

    /**
     * Sets cycle_executions
     * @param \Secuconnect\Client\Model\BillingCyclesItem[]|null $cycle_executions cycle executions
     * @return $this
     */
    public function setCycleExecutions(?array $cycle_executions): static
    {
        $this->container['cycle_executions'] = $cycle_executions;

        return $this;
    }

    /**
     * Gets next_billing_time
     * @return string
     */
    public function getNextBillingTime(): string|null
    {
        return $this->container['next_billing_time'] ?? null;
    }

    /**
     * Sets next_billing_time
     * @param string|null $next_billing_time next billing time
     * @return $this
     */
    public function setNextBillingTime(?string $next_billing_time): static
    {
        $this->container['next_billing_time'] = $next_billing_time;

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

