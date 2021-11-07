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
 * SmartTransactionsDTO
 *
 * @category Class
 * @description SmartTransactionsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'merchant' => 'string',
        'provider_contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'transaction_ref' => 'string',
        'merchant_ref' => 'string',
        'basket' => '\Secuconnect\Client\Model\SmartTransactionsBasket',
        'basket_info' => '\Secuconnect\Client\Model\SmartTransactionsBasketInfo',
        'idents' => '\Secuconnect\Client\Model\SmartTransactionsIdent[]',
        'tax_amount' => 'int',
        'tax_rate' => 'int',
        'market' => 'string',
        'cashier' => 'string',
        'product' => 'string',
        'device_source' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'trans_id' => 'int',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceID',
        'last_visited_page' => 'string',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'shipping_address' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'container' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'checkin' => '\Secuconnect\Client\Model\SmartTransactionsCheckin',
        'payment_method' => 'string',
        'is_demo' => 'bool',
        'intent' => 'string',
        'checkout_links' => '\Secuconnect\Client\Model\SmartTransactionsCheckoutLinks',
        'delivery_options' => '\Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel',
        'communications' => '\Secuconnect\Client\Model\SmartTransactionsCommunication',
        'application_context' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContext',
        'payment_context' => '\Secuconnect\Client\Model\PaymentContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'merchant' => null,
        'provider_contract' => null,
        'transaction_ref' => null,
        'merchant_ref' => null,
        'basket' => null,
        'basket_info' => null,
        'idents' => null,
        'tax_amount' => null,
        'tax_rate' => null,
        'market' => null,
        'cashier' => null,
        'product' => null,
        'device_source' => null,
        'trans_id' => null,
        'contract' => null,
        'last_visited_page' => null,
        'customer' => null,
        'shipping_address' => null,
        'container' => null,
        'checkin' => null,
        'payment_method' => null,
        'is_demo' => null,
        'intent' => null,
        'checkout_links' => null,
        'delivery_options' => null,
        'communications' => null,
        'application_context' => null,
        'payment_context' => null
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
        'merchant' => 'merchant',
        'provider_contract' => 'provider_contract',
        'transaction_ref' => 'transactionRef',
        'merchant_ref' => 'merchantRef',
        'basket' => 'basket',
        'basket_info' => 'basket_info',
        'idents' => 'idents',
        'tax_amount' => 'tax_amount',
        'tax_rate' => 'tax_rate',
        'market' => 'market',
        'cashier' => 'cashier',
        'product' => 'product',
        'device_source' => 'device_source',
        'trans_id' => 'trans_id',
        'contract' => 'contract',
        'last_visited_page' => 'last_visited_page',
        'customer' => 'customer',
        'shipping_address' => 'shipping_address',
        'container' => 'container',
        'checkin' => 'checkin',
        'payment_method' => 'payment_method',
        'is_demo' => 'is_demo',
        'intent' => 'intent',
        'checkout_links' => 'checkout_links',
        'delivery_options' => 'delivery_options',
        'communications' => 'communications',
        'application_context' => 'application_context',
        'payment_context' => 'payment_context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'merchant' => 'setMerchant',
        'provider_contract' => 'setProviderContract',
        'transaction_ref' => 'setTransactionRef',
        'merchant_ref' => 'setMerchantRef',
        'basket' => 'setBasket',
        'basket_info' => 'setBasketInfo',
        'idents' => 'setIdents',
        'tax_amount' => 'setTaxAmount',
        'tax_rate' => 'setTaxRate',
        'market' => 'setMarket',
        'cashier' => 'setCashier',
        'product' => 'setProduct',
        'device_source' => 'setDeviceSource',
        'trans_id' => 'setTransId',
        'contract' => 'setContract',
        'last_visited_page' => 'setLastVisitedPage',
        'customer' => 'setCustomer',
        'shipping_address' => 'setShippingAddress',
        'container' => 'setContainer',
        'checkin' => 'setCheckin',
        'payment_method' => 'setPaymentMethod',
        'is_demo' => 'setIsDemo',
        'intent' => 'setIntent',
        'checkout_links' => 'setCheckoutLinks',
        'delivery_options' => 'setDeliveryOptions',
        'communications' => 'setCommunications',
        'application_context' => 'setApplicationContext',
        'payment_context' => 'setPaymentContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'merchant' => 'getMerchant',
        'provider_contract' => 'getProviderContract',
        'transaction_ref' => 'getTransactionRef',
        'merchant_ref' => 'getMerchantRef',
        'basket' => 'getBasket',
        'basket_info' => 'getBasketInfo',
        'idents' => 'getIdents',
        'tax_amount' => 'getTaxAmount',
        'tax_rate' => 'getTaxRate',
        'market' => 'getMarket',
        'cashier' => 'getCashier',
        'product' => 'getProduct',
        'device_source' => 'getDeviceSource',
        'trans_id' => 'getTransId',
        'contract' => 'getContract',
        'last_visited_page' => 'getLastVisitedPage',
        'customer' => 'getCustomer',
        'shipping_address' => 'getShippingAddress',
        'container' => 'getContainer',
        'checkin' => 'getCheckin',
        'payment_method' => 'getPaymentMethod',
        'is_demo' => 'getIsDemo',
        'intent' => 'getIntent',
        'checkout_links' => 'getCheckoutLinks',
        'delivery_options' => 'getDeliveryOptions',
        'communications' => 'getCommunications',
        'application_context' => 'getApplicationContext',
        'payment_context' => 'getPaymentContext'
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
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['provider_contract'] = $data['provider_contract'] ?? null;
        $this->container['transaction_ref'] = $data['transaction_ref'] ?? null;
        $this->container['merchant_ref'] = $data['merchant_ref'] ?? null;
        $this->container['basket'] = $data['basket'] ?? null;
        $this->container['basket_info'] = $data['basket_info'] ?? null;
        $this->container['idents'] = $data['idents'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['market'] = $data['market'] ?? null;
        $this->container['cashier'] = $data['cashier'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['device_source'] = $data['device_source'] ?? null;
        $this->container['trans_id'] = $data['trans_id'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['last_visited_page'] = $data['last_visited_page'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['checkin'] = $data['checkin'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['is_demo'] = $data['is_demo'] ?? null;
        $this->container['intent'] = $data['intent'] ?? null;
        $this->container['checkout_links'] = $data['checkout_links'] ?? null;
        $this->container['delivery_options'] = $data['delivery_options'] ?? null;
        $this->container['communications'] = $data['communications'] ?? null;
        $this->container['application_context'] = $data['application_context'] ?? null;
        $this->container['payment_context'] = $data['payment_context'] ?? null;
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
     * Gets merchant
     * @return string
     */
    public function getMerchant(): string
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string|null $merchant Merchant
     * @return $this
     */
    public function setMerchant(?string $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets provider_contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getProviderContract(): ProductInstanceUID
    {
        return $this->container['provider_contract'];
    }

    /**
     * Sets provider_contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $provider_contract provider_contract
     * @return $this
     */
    public function setProviderContract(?ProductInstanceUID $provider_contract): static
    {
        $this->container['provider_contract'] = $provider_contract;

        return $this;
    }

    /**
     * Gets transaction_ref
     * @return string
     */
    public function getTransactionRef(): string
    {
        return $this->container['transaction_ref'];
    }

    /**
     * Sets transaction_ref
     * @param string|null $transaction_ref Transaction reference
     * @return $this
     */
    public function setTransactionRef(?string $transaction_ref): static
    {
        $this->container['transaction_ref'] = $transaction_ref;

        return $this;
    }

    /**
     * Gets merchant_ref
     * @return string
     */
    public function getMerchantRef(): string
    {
        return $this->container['merchant_ref'];
    }

    /**
     * Sets merchant_ref
     * @param string|null $merchant_ref Merchant reference
     * @return $this
     */
    public function setMerchantRef(?string $merchant_ref): static
    {
        $this->container['merchant_ref'] = $merchant_ref;

        return $this;
    }

    /**
     * Gets basket
     * @return \Secuconnect\Client\Model\SmartTransactionsBasket
     */
    public function getBasket(): SmartTransactionsBasket
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     * @param \Secuconnect\Client\Model\SmartTransactionsBasket|null $basket basket
     * @return $this
     */
    public function setBasket(?SmartTransactionsBasket $basket): static
    {
        $this->container['basket'] = $basket;

        return $this;
    }

    /**
     * Gets basket_info
     * @return \Secuconnect\Client\Model\SmartTransactionsBasketInfo
     */
    public function getBasketInfo(): SmartTransactionsBasketInfo
    {
        return $this->container['basket_info'];
    }

    /**
     * Sets basket_info
     * @param \Secuconnect\Client\Model\SmartTransactionsBasketInfo|null $basket_info basket_info
     * @return $this
     */
    public function setBasketInfo(?SmartTransactionsBasketInfo $basket_info): static
    {
        $this->container['basket_info'] = $basket_info;

        return $this;
    }

    /**
     * Gets idents
     * @return \Secuconnect\Client\Model\SmartTransactionsIdent[]
     */
    public function getIdents(): array
    {
        return $this->container['idents'];
    }

    /**
     * Sets idents
     * @param \Secuconnect\Client\Model\SmartTransactionsIdent[]|null $idents Idents
     * @return $this
     */
    public function setIdents(?array $idents): static
    {
        $this->container['idents'] = $idents;

        return $this;
    }

    /**
     * Gets tax_amount
     * @return int
     */
    public function getTaxAmount(): int
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     * @param int|null $tax_amount tax_amount
     * @return $this
     */
    public function setTaxAmount(?int $tax_amount): static
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     * @param int|null $tax_rate tax_rate
     * @return $this
     */
    public function setTaxRate(?int $tax_rate): static
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets market
     * @return string
     */
    public function getMarket(): string
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     * @param string|null $market Market
     * @return $this
     */
    public function setMarket(?string $market): static
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets cashier
     * @return string
     */
    public function getCashier(): string
    {
        return $this->container['cashier'];
    }

    /**
     * Sets cashier
     * @param string|null $cashier Cashier
     * @return $this
     */
    public function setCashier(?string $cashier): static
    {
        $this->container['cashier'] = $cashier;

        return $this;
    }

    /**
     * Gets product
     * @return string
     */
    public function getProduct(): string
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     * @param string|null $product Product
     * @return $this
     */
    public function setProduct(?string $product): static
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets device_source
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceSource(): ProductInstanceUID
    {
        return $this->container['device_source'];
    }

    /**
     * Sets device_source
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $device_source device_source
     * @return $this
     */
    public function setDeviceSource(?ProductInstanceUID $device_source): static
    {
        $this->container['device_source'] = $device_source;

        return $this;
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
     * @param int|null $trans_id Transaction id
     * @return $this
     */
    public function setTransId(?int $trans_id): static
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceID
     */
    public function getContract(): ProductInstanceID
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceID|null $contract contract
     * @return $this
     */
    public function setContract(?ProductInstanceID $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets last_visited_page
     * @return string
     */
    public function getLastVisitedPage(): string
    {
        return $this->container['last_visited_page'];
    }

    /**
     * Sets last_visited_page
     * @param string|null $last_visited_page Last visited page
     * @return $this
     */
    public function setLastVisitedPage(?string $last_visited_page): static
    {
        $this->container['last_visited_page'] = $last_visited_page;

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
     * Gets shipping_address
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getShippingAddress(): PaymentCustomersProductModel
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel|null $shipping_address shipping_address
     * @return $this
     */
    public function setShippingAddress(?PaymentCustomersProductModel $shipping_address): static
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContainer(): ProductInstanceUID
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $container container
     * @return $this
     */
    public function setContainer(?ProductInstanceUID $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets checkin
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckin
     */
    public function getCheckin(): SmartTransactionsCheckin
    {
        return $this->container['checkin'];
    }

    /**
     * Sets checkin
     * @param \Secuconnect\Client\Model\SmartTransactionsCheckin|null $checkin checkin
     * @return $this
     */
    public function setCheckin(?SmartTransactionsCheckin $checkin): static
    {
        $this->container['checkin'] = $checkin;

        return $this;
    }

    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     * @param string|null $payment_method Payment method
     * @return $this
     */
    public function setPaymentMethod(?string $payment_method): static
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo(): bool
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     * @param bool|null $is_demo Demo payment
     * @return $this
     */
    public function setIsDemo(?bool $is_demo): static
    {
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Gets intent
     * @return string
     */
    public function getIntent(): string
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     * @param string|null $intent intent of transaction
     * @return $this
     */
    public function setIntent(?string $intent): static
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets checkout_links
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckoutLinks
     */
    public function getCheckoutLinks(): SmartTransactionsCheckoutLinks
    {
        return $this->container['checkout_links'];
    }

    /**
     * Sets checkout_links
     * @param \Secuconnect\Client\Model\SmartTransactionsCheckoutLinks|null $checkout_links checkout_links
     * @return $this
     */
    public function setCheckoutLinks(?SmartTransactionsCheckoutLinks $checkout_links): static
    {
        $this->container['checkout_links'] = $checkout_links;

        return $this;
    }

    /**
     * Gets delivery_options
     * @return \Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel
     */
    public function getDeliveryOptions(): OneOfSmartTransactionsDeliveryOptionsModel
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     * @param \Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel|null $delivery_options delivery_options
     * @return $this
     */
    public function setDeliveryOptions(?OneOfSmartTransactionsDeliveryOptionsModel $delivery_options): static
    {
        $this->container['delivery_options'] = $delivery_options;

        return $this;
    }

    /**
     * Gets communications
     * @return \Secuconnect\Client\Model\SmartTransactionsCommunication
     */
    public function getCommunications(): SmartTransactionsCommunication
    {
        return $this->container['communications'];
    }

    /**
     * Sets communications
     * @param \Secuconnect\Client\Model\SmartTransactionsCommunication|null $communications communications
     * @return $this
     */
    public function setCommunications(?SmartTransactionsCommunication $communications): static
    {
        $this->container['communications'] = $communications;

        return $this;
    }

    /**
     * Gets application_context
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContext
     */
    public function getApplicationContext(): SmartTransactionsApplicationContext
    {
        return $this->container['application_context'];
    }

    /**
     * Sets application_context
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContext|null $application_context application_context
     * @return $this
     */
    public function setApplicationContext(?SmartTransactionsApplicationContext $application_context): static
    {
        $this->container['application_context'] = $application_context;

        return $this;
    }

    /**
     * Gets payment_context
     * @return \Secuconnect\Client\Model\PaymentContext
     */
    public function getPaymentContext(): PaymentContext
    {
        return $this->container['payment_context'];
    }

    /**
     * Sets payment_context
     * @param \Secuconnect\Client\Model\PaymentContext|null $payment_context payment_context
     * @return $this
     */
    public function setPaymentContext(?PaymentContext $payment_context): static
    {
        $this->container['payment_context'] = $payment_context;

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

