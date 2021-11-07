<?php
/**
 * @noinspection PhpUnused
 * @noinspection DuplicatedCode
 * @noinspection PhpUnnecessaryLocalVariableInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @noinspection PhpPureAttributeCanBeAddedInspection
 */

namespace Secuconnect\Client\Model;
use InvalidArgumentException;
use Secuconnect\Client\ObjectSerializer;

/**
 * SecupayPayoutProductModel
 *
 * @category Class
 * @description SecupayPayoutProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayPayoutProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayPayoutProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'trans_id' => 'int',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'purpose' => 'string',
        'order_id' => 'string',
        'transaction_status' => 'string',
        'transaction_list' => '\Secuconnect\Client\Model\SecupayTransactionListItem[]',
        'transfer_purpose' => 'string',
        'transfer_account' => '\Secuconnect\Client\Model\PaymentInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'trans_id' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'purpose' => null,
        'order_id' => null,
        'transaction_status' => null,
        'transaction_list' => null,
        'transfer_purpose' => null,
        'transfer_account' => null
    ];

    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static array $attributeMap = [
        'trans_id' => 'trans_id',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'purpose' => 'purpose',
        'order_id' => 'order_id',
        'transaction_status' => 'transaction_status',
        'transaction_list' => 'transaction_list',
        'transfer_purpose' => 'transfer_purpose',
        'transfer_account' => 'transfer_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'trans_id' => 'setTransId',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'purpose' => 'setPurpose',
        'order_id' => 'setOrderId',
        'transaction_status' => 'setTransactionStatus',
        'transaction_list' => 'setTransactionList',
        'transfer_purpose' => 'setTransferPurpose',
        'transfer_account' => 'setTransferAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'trans_id' => 'getTransId',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'purpose' => 'getPurpose',
        'order_id' => 'getOrderId',
        'transaction_status' => 'getTransactionStatus',
        'transaction_list' => 'getTransactionList',
        'transfer_purpose' => 'getTransferPurpose',
        'transfer_account' => 'getTransferAccount'
    ];

    public static function attributeMap(): array
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters(): array
    {
        return parent::setters() + self::$setters;
    }

    public static function getters(): array
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['trans_id'] = $data['trans_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['transaction_list'] = $data['transaction_list'] ?? null;
        $this->container['transfer_purpose'] = $data['transfer_purpose'] ?? null;
        $this->container['transfer_account'] = $data['transfer_account'] ?? null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * Gets trans_id
     * @return int
     */
    public function getTransId(): int
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     * @param int|null $trans_id ID of transaction
     * @return $this
     */
    public function setTransId(?int $trans_id): static
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string|null $status Transaction status
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

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
     * Gets currency
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string|null $currency currency
     * @return $this
     */
    public function setCurrency(?string $currency): static
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets purpose
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     * @param string|null $purpose The purpose of the payment. This is the later assignment of the payment is for example on the account statement of the buyer.
     * @return $this
     */
    public function setPurpose(?string $purpose): static
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string|null $order_id Specifying an order number. Depending on the contract setting, this must be unique for each payment.
     * @return $this
     */
    public function setOrderId(?string $order_id): static
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets transaction_status
     * @return string
     */
    public function getTransactionStatus(): string
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     * @param string|null $transaction_status Transaction status (number)
     * @return $this
     */
    public function setTransactionStatus(?string $transaction_status): static
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets transaction_list
     * @return \Secuconnect\Client\Model\SecupayTransactionListItem[]
     */
    public function getTransactionList(): array
    {
        return $this->container['transaction_list'];
    }

    /**
     * Sets transaction_list
     * @param \Secuconnect\Client\Model\SecupayTransactionListItem[]|null $transaction_list A list of transaction items
     * @return $this
     */
    public function setTransactionList(?array $transaction_list): static
    {
        $this->container['transaction_list'] = $transaction_list;

        return $this;
    }

    /**
     * Gets transfer_purpose
     * @return string
     */
    public function getTransferPurpose(): string
    {
        return $this->container['transfer_purpose'];
    }

    /**
     * Sets transfer_purpose
     * @param string|null $transfer_purpose The purpose the payer needs to use for his transfer
     * @return $this
     */
    public function setTransferPurpose(?string $transfer_purpose): static
    {
        $this->container['transfer_purpose'] = $transfer_purpose;

        return $this;
    }

    /**
     * Gets transfer_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getTransferAccount(): PaymentInformation
    {
        return $this->container['transfer_account'];
    }

    /**
     * Sets transfer_account
     * @param \Secuconnect\Client\Model\PaymentInformation|null $transfer_account transfer_account
     * @return $this
     */
    public function setTransferAccount(?PaymentInformation $transfer_account): static
    {
        $this->container['transfer_account'] = $transfer_account;

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

