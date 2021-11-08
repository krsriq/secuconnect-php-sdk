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
 * SecupayTransactionCancelDTO
 *
 * @category Class
 * @description SecupayTransactionCancelDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionCancelDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionCancelDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'amount' => 'int',
        'reduce_stakeholder_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'contract' => null,
        'amount' => null,
        'reduce_stakeholder_payment' => null
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
        'contract' => 'contract',
        'amount' => 'amount',
        'reduce_stakeholder_payment' => 'reduce_stakeholder_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'contract' => 'setContract',
        'amount' => 'setAmount',
        'reduce_stakeholder_payment' => 'setReduceStakeholderPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'contract' => 'getContract',
        'amount' => 'getAmount',
        'reduce_stakeholder_payment' => 'getReduceStakeholderPayment'
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
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['reduce_stakeholder_payment'] = $data['reduce_stakeholder_payment'] ?? false;
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
     * Gets contract
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function getContract(): PaymentContractsProductModel|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel|null $contract contract
     * @return $this
     */
    public function setContract(?PaymentContractsProductModel $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount(): int|null
    {
        return $this->container['amount'] ?? null;
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
    public function getReduceStakeholderPayment(): bool|null
    {
        return $this->container['reduce_stakeholder_payment'] ?? null;
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

