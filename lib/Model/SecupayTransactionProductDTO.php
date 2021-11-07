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
 * SecupayTransactionProductDTO
 *
 * @category Class
 * @description SecupayTransactionProductDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionProductDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionProductDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'amount' => 'int',
        'currency' => 'string',
        'purpose' => 'string',
        'payment_methods' => 'string[]',
        'order_id' => 'string',
        'basket' => '\Secuconnect\Client\Model\SecupayBasketItem[]',
        'accrual' => 'bool',
        'payment_action' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'redirect_url' => '\Secuconnect\Client\Model\SecupayRedirectUrl',
        'contract' => 'string',
        'container' => 'string',
        'opt_data' => '\Secuconnect\Client\Model\SecupayTransactionProductDTOOptData',
        'subscription' => '\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription',
        'demo' => 'bool',
        'experience' => '\Secuconnect\Client\Model\SecupayTransactionProductDTOExperience'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'amount' => null,
        'currency' => null,
        'purpose' => null,
        'payment_methods' => null,
        'order_id' => null,
        'basket' => null,
        'accrual' => null,
        'payment_action' => null,
        'customer' => null,
        'redirect_url' => null,
        'contract' => null,
        'container' => null,
        'opt_data' => null,
        'subscription' => null,
        'demo' => null,
        'experience' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'purpose' => 'purpose',
        'payment_methods' => 'payment_methods',
        'order_id' => 'order_id',
        'basket' => 'basket',
        'accrual' => 'accrual',
        'payment_action' => 'payment_action',
        'customer' => 'customer',
        'redirect_url' => 'redirect_url',
        'contract' => 'contract',
        'container' => 'container',
        'opt_data' => 'opt_data',
        'subscription' => 'subscription',
        'demo' => 'demo',
        'experience' => 'experience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'purpose' => 'setPurpose',
        'payment_methods' => 'setPaymentMethods',
        'order_id' => 'setOrderId',
        'basket' => 'setBasket',
        'accrual' => 'setAccrual',
        'payment_action' => 'setPaymentAction',
        'customer' => 'setCustomer',
        'redirect_url' => 'setRedirectUrl',
        'contract' => 'setContract',
        'container' => 'setContainer',
        'opt_data' => 'setOptData',
        'subscription' => 'setSubscription',
        'demo' => 'setDemo',
        'experience' => 'setExperience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'purpose' => 'getPurpose',
        'payment_methods' => 'getPaymentMethods',
        'order_id' => 'getOrderId',
        'basket' => 'getBasket',
        'accrual' => 'getAccrual',
        'payment_action' => 'getPaymentAction',
        'customer' => 'getCustomer',
        'redirect_url' => 'getRedirectUrl',
        'contract' => 'getContract',
        'container' => 'getContainer',
        'opt_data' => 'getOptData',
        'subscription' => 'getSubscription',
        'demo' => 'getDemo',
        'experience' => 'getExperience'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['basket'] = $data['basket'] ?? null;
        $this->container['accrual'] = $data['accrual'] ?? null;
        $this->container['payment_action'] = $data['payment_action'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['opt_data'] = $data['opt_data'] ?? null;
        $this->container['subscription'] = $data['subscription'] ?? null;
        $this->container['demo'] = $data['demo'] ?? null;
        $this->container['experience'] = $data['experience'] ?? null;
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
     * Gets payment_methods
     * @return string[]
     */
    public function getPaymentMethods(): array
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     * @param string[]|null $payment_methods payment methods
     * @return $this
     */
    public function setPaymentMethods(?array $payment_methods): static
    {
        $this->container['payment_methods'] = $payment_methods;

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
     * Gets basket
     * @return \Secuconnect\Client\Model\SecupayBasketItem[]
     */
    public function getBasket(): array
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     * @param \Secuconnect\Client\Model\SecupayBasketItem[]|null $basket A list of items that are being purchased.
     * @return $this
     */
    public function setBasket(?array $basket): static
    {
        $this->container['basket'] = $basket;

        return $this;
    }

    /**
     * Gets accrual
     * @return bool
     */
    public function getAccrual(): bool
    {
        return $this->container['accrual'];
    }

    /**
     * Sets accrual
     * @param bool|null $accrual Indicates whether the payment is locked for pay-out (TRUE) or not (FALSE). Standard value here is FALSE.
     * @return $this
     */
    public function setAccrual(?bool $accrual): static
    {
        $this->container['accrual'] = $accrual;

        return $this;
    }

    /**
     * Gets payment_action
     * @return string
     */
    public function getPaymentAction(): string
    {
        return $this->container['payment_action'];
    }

    /**
     * Sets payment_action
     * @param string|null $payment_action Specifies whether a pre-authorization (\"authorization\") or instant payment (\"sale\") is to be performed. Standard value here is \"sale\". The collection of the pre-authorized payment is made with the \"capture\" command.
     * @return $this
     */
    public function setPaymentAction(?string $payment_action): static
    {
        $this->container['payment_action'] = $payment_action;

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
     * @param string|null $contract Contract id
     * @return $this
     */
    public function setContract(?string $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets container
     * @return string
     */
    public function getContainer(): string
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param string|null $container Container id
     * @return $this
     */
    public function setContainer(?string $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets opt_data
     * @return \Secuconnect\Client\Model\SecupayTransactionProductDTOOptData
     */
    public function getOptData(): SecupayTransactionProductDTOOptData
    {
        return $this->container['opt_data'];
    }

    /**
     * Sets opt_data
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTOOptData|null $opt_data opt_data
     * @return $this
     */
    public function setOptData(?SecupayTransactionProductDTOOptData $opt_data): static
    {
        $this->container['opt_data'] = $opt_data;

        return $this;
    }

    /**
     * Gets subscription
     * @return \Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription
     */
    public function getSubscription(): SecupayTransactionProductDTOSubscription
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription|null $subscription subscription
     * @return $this
     */
    public function setSubscription(?SecupayTransactionProductDTOSubscription $subscription): static
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets demo
     * @return bool
     */
    public function getDemo(): bool
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param bool|null $demo Demo
     * @return $this
     */
    public function setDemo(?bool $demo): static
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets experience
     * @return \Secuconnect\Client\Model\SecupayTransactionProductDTOExperience
     */
    public function getExperience(): SecupayTransactionProductDTOExperience
    {
        return $this->container['experience'];
    }

    /**
     * Sets experience
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTOExperience|null $experience experience
     * @return $this
     */
    public function setExperience(?SecupayTransactionProductDTOExperience $experience): static
    {
        $this->container['experience'] = $experience;

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

