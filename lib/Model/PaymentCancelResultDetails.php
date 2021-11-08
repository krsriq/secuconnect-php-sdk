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
 * PaymentCancelResultDetails
 *
 * @category Class
 * @description Refund information
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCancelResultDetails implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentCancelResultDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'new_trans_id' => 'int',
        'remaining_amount' => 'int',
        'refund_waiting_for_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'new_trans_id' => null,
        'remaining_amount' => null,
        'refund_waiting_for_payment' => null
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
        'new_trans_id' => 'new_trans_id',
        'remaining_amount' => 'remaining_amount',
        'refund_waiting_for_payment' => 'refund_waiting_for_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'new_trans_id' => 'setNewTransId',
        'remaining_amount' => 'setRemainingAmount',
        'refund_waiting_for_payment' => 'setRefundWaitingForPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'new_trans_id' => 'getNewTransId',
        'remaining_amount' => 'getRemainingAmount',
        'refund_waiting_for_payment' => 'getRefundWaitingForPayment'
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
        $this->container['new_trans_id'] = $data['new_trans_id'] ?? null;
        $this->container['remaining_amount'] = $data['remaining_amount'] ?? null;
        $this->container['refund_waiting_for_payment'] = $data['refund_waiting_for_payment'] ?? false;
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
     * Gets new_trans_id
     * @return int
     */
    public function getNewTransId(): int|null
    {
        return $this->container['new_trans_id'] ?? null;
    }

    /**
     * Sets new_trans_id
     * @param int|null $new_trans_id The transaction ID of the refund transaction
     * @return $this
     */
    public function setNewTransId(?int $new_trans_id): static
    {
        $this->container['new_trans_id'] = $new_trans_id;

        return $this;
    }

    /**
     * Gets remaining_amount
     * @return int
     */
    public function getRemainingAmount(): int|null
    {
        return $this->container['remaining_amount'] ?? null;
    }

    /**
     * Sets remaining_amount
     * @param int|null $remaining_amount The remaining amount in case of a partial refund/cancel
     * @return $this
     */
    public function setRemainingAmount(?int $remaining_amount): static
    {
        $this->container['remaining_amount'] = $remaining_amount;

        return $this;
    }

    /**
     * Gets refund_waiting_for_payment
     * @return bool
     */
    public function getRefundWaitingForPayment(): bool|null
    {
        return $this->container['refund_waiting_for_payment'] ?? null;
    }

    /**
     * Sets refund_waiting_for_payment
     * @param bool|null $refund_waiting_for_payment If the merchant needs to transfer money back, this will be true
     * @return $this
     */
    public function setRefundWaitingForPayment(?bool $refund_waiting_for_payment): static
    {
        $this->container['refund_waiting_for_payment'] = $refund_waiting_for_payment;

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

