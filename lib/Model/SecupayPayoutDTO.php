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
 * SecupayPayoutDTO
 *
 * @category Class
 * @description SecupayPayoutDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayPayoutDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayPayoutDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'redirect_url' => '\Secuconnect\Client\Model\SecupayRedirectUrl',
        'contract' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'opt_data' => '\Secuconnect\Client\Model\SecupayPayoutDTOOptData',
        'amount' => 'int',
        'currency' => 'string',
        'purpose' => 'string',
        'order_id' => 'string',
        'transaction_list' => '\Secuconnect\Client\Model\SecupayTransactionListItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'redirect_url' => null,
        'contract' => null,
        'customer' => null,
        'opt_data' => null,
        'amount' => null,
        'currency' => null,
        'purpose' => null,
        'order_id' => null,
        'transaction_list' => null
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
        'redirect_url' => 'redirect_url',
        'contract' => 'contract',
        'customer' => 'customer',
        'opt_data' => 'opt_data',
        'amount' => 'amount',
        'currency' => 'currency',
        'purpose' => 'purpose',
        'order_id' => 'order_id',
        'transaction_list' => 'transaction_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'redirect_url' => 'setRedirectUrl',
        'contract' => 'setContract',
        'customer' => 'setCustomer',
        'opt_data' => 'setOptData',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'purpose' => 'setPurpose',
        'order_id' => 'setOrderId',
        'transaction_list' => 'setTransactionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'redirect_url' => 'getRedirectUrl',
        'contract' => 'getContract',
        'customer' => 'getCustomer',
        'opt_data' => 'getOptData',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'purpose' => 'getPurpose',
        'order_id' => 'getOrderId',
        'transaction_list' => 'getTransactionList'
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
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['opt_data'] = $data['opt_data'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['transaction_list'] = $data['transaction_list'] ?? null;
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
     * Gets redirect_url
     * @return \Secuconnect\Client\Model\SecupayRedirectUrl
     */
    public function getRedirectUrl(): SecupayRedirectUrl
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     * @param \Secuconnect\Client\Model\SecupayRedirectUrl|null $redirect_url redirect_url
     * @return $this
     */
    public function setRedirectUrl(?SecupayRedirectUrl $redirect_url): static
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets contract
     * @return string
     */
    public function getContract(): string
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param string|null $contract The contract ID
     * @return $this
     */
    public function setContract(?string $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getCustomer(): PaymentCustomersProductModel
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel|null $customer customer
     * @return $this
     */
    public function setCustomer(?PaymentCustomersProductModel $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets opt_data
     * @return \Secuconnect\Client\Model\SecupayPayoutDTOOptData
     */
    public function getOptData(): SecupayPayoutDTOOptData
    {
        return $this->container['opt_data'];
    }

    /**
     * Sets opt_data
     * @param \Secuconnect\Client\Model\SecupayPayoutDTOOptData|null $opt_data opt_data
     * @return $this
     */
    public function setOptData(?SecupayPayoutDTOOptData $opt_data): static
    {
        $this->container['opt_data'] = $opt_data;

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

