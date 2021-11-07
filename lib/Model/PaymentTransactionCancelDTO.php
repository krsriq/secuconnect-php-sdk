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
 * PaymentTransactionCancelDTO
 *
 * @category Class
 * @description PaymentTransactionCancelDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionCancelDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentTransactionCancelDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'reason' => 'string',
        'amount' => 'int',
        'reduce_stakeholder_payment' => 'bool',
        'container_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'reason' => null,
        'amount' => null,
        'reduce_stakeholder_payment' => null,
        'container_id' => null
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
        'reason' => 'reason',
        'amount' => 'amount',
        'reduce_stakeholder_payment' => 'reduce_stakeholder_payment',
        'container_id' => 'container_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'reason' => 'setReason',
        'amount' => 'setAmount',
        'reduce_stakeholder_payment' => 'setReduceStakeholderPayment',
        'container_id' => 'setContainerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'reason' => 'getReason',
        'amount' => 'getAmount',
        'reduce_stakeholder_payment' => 'getReduceStakeholderPayment',
        'container_id' => 'getContainerId'
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
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['reduce_stakeholder_payment'] = $data['reduce_stakeholder_payment'] ?? false;
        $this->container['container_id'] = $data['container_id'] ?? null;
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
     * Gets reason
     * @return string
     */
    public function getReason(): string
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string|null $reason The reason of this cancel or refund
     * @return $this
     */
    public function setReason(?string $reason): static
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount(): int
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int|null $amount amount
     * @return $this
     */
    public function setAmount(?int $amount): static
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reduce_stakeholder_payment
     * @return bool
     */
    public function getReduceStakeholderPayment(): bool
    {
        return $this->container['reduce_stakeholder_payment'];
    }

    /**
     * Sets reduce_stakeholder_payment
     * @param bool|null $reduce_stakeholder_payment Mixed-Basket: (percentage) reduce the stakeholder amount too
     * @return $this
     */
    public function setReduceStakeholderPayment(?bool $reduce_stakeholder_payment): static
    {
        $this->container['reduce_stakeholder_payment'] = $reduce_stakeholder_payment;

        return $this;
    }

    /**
     * Gets container_id
     * @return string
     */
    public function getContainerId(): string
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     * @param string|null $container_id Payment Container ID
     * @return $this
     */
    public function setContainerId(?string $container_id): static
    {
        $this->container['container_id'] = $container_id;

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

