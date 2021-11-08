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
 * SmartTransactionsProductModel
 *
 * @category Class
 * @description SmartTransactionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'status' => 'string',
        'merchant' => '\Secuconnect\Client\Model\SmartTransactionsMerchant',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'provider_contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'shipping_address' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'container' => '\Secuconnect\Client\Model\SmartTransactionsContainer',
        'checkin' => '\Secuconnect\Client\Model\SmartTransactionsCheckin',
        'merchant_ref' => 'string',
        'transaction_ref' => 'string',
        'store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_source' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'device_destination' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'receipt_number' => 'int',
        'receipt' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_merchant' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'receipt_merchant_print' => 'bool',
        'basket_info' => '\Secuconnect\Client\Model\SmartTransactionsBasketInfo',
        'basket' => '\Secuconnect\Client\Model\SmartTransactionsBasket',
        'idents' => '\Secuconnect\Client\Model\SmartTransactionsIdent[]',
        'tax_rate' => 'int',
        'tax_amount' => 'int',
        'cashier' => 'string',
        'market' => 'string',
        'delivery_options' => '\Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel',
        'product' => 'string',
        'trans_id' => 'int',
        'payment_method' => 'string',
        'transactions' => '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]',
        'last_visited_page' => 'string',
        'is_demo' => 'bool',
        'checkout_links' => '\Secuconnect\Client\Model\SmartTransactionsCheckoutLinks',
        'intent' => 'string',
        'iframe_url' => 'string',
        'prepaid_sales' => '\Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails',
        'communications' => '\Secuconnect\Client\Model\SmartTransactionsCommunication',
        'payment_links' => '\Secuconnect\Client\Model\SmartTransactionsPaymentLinks',
        'application_context' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContext',
        'payment_instructions' => '\Secuconnect\Client\Model\PaymentInstructions',
        'payment_context' => '\Secuconnect\Client\Model\PaymentContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'status' => null,
        'merchant' => null,
        'contract' => null,
        'provider_contract' => null,
        'customer' => null,
        'shipping_address' => null,
        'container' => null,
        'checkin' => null,
        'merchant_ref' => null,
        'transaction_ref' => null,
        'store' => null,
        'device_source' => null,
        'device_destination' => null,
        'receipt_number' => null,
        'receipt' => null,
        'receipt_merchant' => null,
        'receipt_merchant_print' => null,
        'basket_info' => null,
        'basket' => null,
        'idents' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'cashier' => null,
        'market' => null,
        'delivery_options' => null,
        'product' => null,
        'trans_id' => null,
        'payment_method' => null,
        'transactions' => null,
        'last_visited_page' => null,
        'is_demo' => null,
        'checkout_links' => null,
        'intent' => null,
        'iframe_url' => null,
        'prepaid_sales' => null,
        'communications' => null,
        'payment_links' => null,
        'application_context' => null,
        'payment_instructions' => null,
        'payment_context' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'status' => 'status',
        'merchant' => 'merchant',
        'contract' => 'contract',
        'provider_contract' => 'provider_contract',
        'customer' => 'customer',
        'shipping_address' => 'shipping_address',
        'container' => 'container',
        'checkin' => 'checkin',
        'merchant_ref' => 'merchantRef',
        'transaction_ref' => 'transactionRef',
        'store' => 'store',
        'device_source' => 'device_source',
        'device_destination' => 'device_destination',
        'receipt_number' => 'receipt_number',
        'receipt' => 'receipt',
        'receipt_merchant' => 'receipt_merchant',
        'receipt_merchant_print' => 'receipt_merchant_print',
        'basket_info' => 'basket_info',
        'basket' => 'basket',
        'idents' => 'idents',
        'tax_rate' => 'tax_rate',
        'tax_amount' => 'tax_amount',
        'cashier' => 'cashier',
        'market' => 'market',
        'delivery_options' => 'delivery_options',
        'product' => 'product',
        'trans_id' => 'trans_id',
        'payment_method' => 'payment_method',
        'transactions' => 'transactions',
        'last_visited_page' => 'last_visited_page',
        'is_demo' => 'is_demo',
        'checkout_links' => 'checkout_links',
        'intent' => 'intent',
        'iframe_url' => 'iframe_url',
        'prepaid_sales' => 'prepaid_sales',
        'communications' => 'communications',
        'payment_links' => 'payment_links',
        'application_context' => 'application_context',
        'payment_instructions' => 'payment_instructions',
        'payment_context' => 'payment_context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'status' => 'setStatus',
        'merchant' => 'setMerchant',
        'contract' => 'setContract',
        'provider_contract' => 'setProviderContract',
        'customer' => 'setCustomer',
        'shipping_address' => 'setShippingAddress',
        'container' => 'setContainer',
        'checkin' => 'setCheckin',
        'merchant_ref' => 'setMerchantRef',
        'transaction_ref' => 'setTransactionRef',
        'store' => 'setStore',
        'device_source' => 'setDeviceSource',
        'device_destination' => 'setDeviceDestination',
        'receipt_number' => 'setReceiptNumber',
        'receipt' => 'setReceipt',
        'receipt_merchant' => 'setReceiptMerchant',
        'receipt_merchant_print' => 'setReceiptMerchantPrint',
        'basket_info' => 'setBasketInfo',
        'basket' => 'setBasket',
        'idents' => 'setIdents',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'cashier' => 'setCashier',
        'market' => 'setMarket',
        'delivery_options' => 'setDeliveryOptions',
        'product' => 'setProduct',
        'trans_id' => 'setTransId',
        'payment_method' => 'setPaymentMethod',
        'transactions' => 'setTransactions',
        'last_visited_page' => 'setLastVisitedPage',
        'is_demo' => 'setIsDemo',
        'checkout_links' => 'setCheckoutLinks',
        'intent' => 'setIntent',
        'iframe_url' => 'setIframeUrl',
        'prepaid_sales' => 'setPrepaidSales',
        'communications' => 'setCommunications',
        'payment_links' => 'setPaymentLinks',
        'application_context' => 'setApplicationContext',
        'payment_instructions' => 'setPaymentInstructions',
        'payment_context' => 'setPaymentContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'status' => 'getStatus',
        'merchant' => 'getMerchant',
        'contract' => 'getContract',
        'provider_contract' => 'getProviderContract',
        'customer' => 'getCustomer',
        'shipping_address' => 'getShippingAddress',
        'container' => 'getContainer',
        'checkin' => 'getCheckin',
        'merchant_ref' => 'getMerchantRef',
        'transaction_ref' => 'getTransactionRef',
        'store' => 'getStore',
        'device_source' => 'getDeviceSource',
        'device_destination' => 'getDeviceDestination',
        'receipt_number' => 'getReceiptNumber',
        'receipt' => 'getReceipt',
        'receipt_merchant' => 'getReceiptMerchant',
        'receipt_merchant_print' => 'getReceiptMerchantPrint',
        'basket_info' => 'getBasketInfo',
        'basket' => 'getBasket',
        'idents' => 'getIdents',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'cashier' => 'getCashier',
        'market' => 'getMarket',
        'delivery_options' => 'getDeliveryOptions',
        'product' => 'getProduct',
        'trans_id' => 'getTransId',
        'payment_method' => 'getPaymentMethod',
        'transactions' => 'getTransactions',
        'last_visited_page' => 'getLastVisitedPage',
        'is_demo' => 'getIsDemo',
        'checkout_links' => 'getCheckoutLinks',
        'intent' => 'getIntent',
        'iframe_url' => 'getIframeUrl',
        'prepaid_sales' => 'getPrepaidSales',
        'communications' => 'getCommunications',
        'payment_links' => 'getPaymentLinks',
        'application_context' => 'getApplicationContext',
        'payment_instructions' => 'getPaymentInstructions',
        'payment_context' => 'getPaymentContext'
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

        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['provider_contract'] = $data['provider_contract'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['checkin'] = $data['checkin'] ?? null;
        $this->container['merchant_ref'] = $data['merchant_ref'] ?? null;
        $this->container['transaction_ref'] = $data['transaction_ref'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['device_source'] = $data['device_source'] ?? null;
        $this->container['device_destination'] = $data['device_destination'] ?? null;
        $this->container['receipt_number'] = $data['receipt_number'] ?? null;
        $this->container['receipt'] = $data['receipt'] ?? null;
        $this->container['receipt_merchant'] = $data['receipt_merchant'] ?? null;
        $this->container['receipt_merchant_print'] = $data['receipt_merchant_print'] ?? null;
        $this->container['basket_info'] = $data['basket_info'] ?? null;
        $this->container['basket'] = $data['basket'] ?? null;
        $this->container['idents'] = $data['idents'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['cashier'] = $data['cashier'] ?? null;
        $this->container['market'] = $data['market'] ?? null;
        $this->container['delivery_options'] = $data['delivery_options'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['trans_id'] = $data['trans_id'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['last_visited_page'] = $data['last_visited_page'] ?? null;
        $this->container['is_demo'] = $data['is_demo'] ?? null;
        $this->container['checkout_links'] = $data['checkout_links'] ?? null;
        $this->container['intent'] = $data['intent'] ?? null;
        $this->container['iframe_url'] = $data['iframe_url'] ?? null;
        $this->container['prepaid_sales'] = $data['prepaid_sales'] ?? null;
        $this->container['communications'] = $data['communications'] ?? null;
        $this->container['payment_links'] = $data['payment_links'] ?? null;
        $this->container['application_context'] = $data['application_context'] ?? null;
        $this->container['payment_instructions'] = $data['payment_instructions'] ?? null;
        $this->container['payment_context'] = $data['payment_context'] ?? null;
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
     * Gets created
     * @return string
     */
    public function getCreated(): string|null
    {
        return $this->container['created'] ?? null;
    }

    /**
     * Sets created
     * @param string|null $created created
     * @return $this
     */
    public function setCreated(?string $created): static
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     * @return string
     */
    public function getUpdated(): string|null
    {
        return $this->container['updated'] ?? null;
    }

    /**
     * Sets updated
     * @param string|null $updated updated
     * @return $this
     */
    public function setUpdated(?string $updated): static
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus(): string|null
    {
        return $this->container['status'] ?? null;
    }

    /**
     * Sets status
     * @param string|null $status Status of smart transaction
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\SmartTransactionsMerchant
     */
    public function getMerchant(): SmartTransactionsMerchant|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\SmartTransactionsMerchant|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?SmartTransactionsMerchant $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContract(): ProductInstanceUID|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $contract contract
     * @return $this
     */
    public function setContract(?ProductInstanceUID $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets provider_contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getProviderContract(): ProductInstanceUID|null
    {
        return $this->container['provider_contract'] ?? null;
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
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getCustomer(): PaymentCustomersProductModel|null
    {
        return $this->container['customer'] ?? null;
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
    public function getShippingAddress(): PaymentCustomersProductModel|null
    {
        return $this->container['shipping_address'] ?? null;
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
     * @return \Secuconnect\Client\Model\SmartTransactionsContainer
     */
    public function getContainer(): SmartTransactionsContainer|null
    {
        return $this->container['container'] ?? null;
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\SmartTransactionsContainer|null $container container
     * @return $this
     */
    public function setContainer(?SmartTransactionsContainer $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets checkin
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckin
     */
    public function getCheckin(): SmartTransactionsCheckin|null
    {
        return $this->container['checkin'] ?? null;
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
     * Gets merchant_ref
     * @return string
     */
    public function getMerchantRef(): string|null
    {
        return $this->container['merchant_ref'] ?? null;
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
     * Gets transaction_ref
     * @return string
     */
    public function getTransactionRef(): string|null
    {
        return $this->container['transaction_ref'] ?? null;
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
     * Gets store
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getStore(): ProductInstanceUID|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $store store
     * @return $this
     */
    public function setStore(?ProductInstanceUID $store): static
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets device_source
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceSource(): ProductInstanceUID|null
    {
        return $this->container['device_source'] ?? null;
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
     * Gets device_destination
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getDeviceDestination(): ProductInstanceUID|null
    {
        return $this->container['device_destination'] ?? null;
    }

    /**
     * Sets device_destination
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $device_destination device_destination
     * @return $this
     */
    public function setDeviceDestination(?ProductInstanceUID $device_destination): static
    {
        $this->container['device_destination'] = $device_destination;

        return $this;
    }

    /**
     * Gets receipt_number
     * @return int
     */
    public function getReceiptNumber(): int|null
    {
        return $this->container['receipt_number'] ?? null;
    }

    /**
     * Sets receipt_number
     * @param int|null $receipt_number Receipt number
     * @return $this
     */
    public function setReceiptNumber(?int $receipt_number): static
    {
        $this->container['receipt_number'] = $receipt_number;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getReceipt(): array|null
    {
        return $this->container['receipt'] ?? null;
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[]|null $receipt Receipt
     * @return $this
     */
    public function setReceipt(?array $receipt): static
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets receipt_merchant
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getReceiptMerchant(): array|null
    {
        return $this->container['receipt_merchant'] ?? null;
    }

    /**
     * Sets receipt_merchant
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[]|null $receipt_merchant Receipt merchant
     * @return $this
     */
    public function setReceiptMerchant(?array $receipt_merchant): static
    {
        $this->container['receipt_merchant'] = $receipt_merchant;

        return $this;
    }

    /**
     * Gets receipt_merchant_print
     * @return bool
     */
    public function getReceiptMerchantPrint(): bool|null
    {
        return $this->container['receipt_merchant_print'] ?? null;
    }

    /**
     * Sets receipt_merchant_print
     * @param bool|null $receipt_merchant_print Receipt merchant print
     * @return $this
     */
    public function setReceiptMerchantPrint(?bool $receipt_merchant_print): static
    {
        $this->container['receipt_merchant_print'] = $receipt_merchant_print;

        return $this;
    }

    /**
     * Gets basket_info
     * @return \Secuconnect\Client\Model\SmartTransactionsBasketInfo
     */
    public function getBasketInfo(): SmartTransactionsBasketInfo|null
    {
        return $this->container['basket_info'] ?? null;
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
     * Gets basket
     * @return \Secuconnect\Client\Model\SmartTransactionsBasket
     */
    public function getBasket(): SmartTransactionsBasket|null
    {
        return $this->container['basket'] ?? null;
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
     * Gets idents
     * @return \Secuconnect\Client\Model\SmartTransactionsIdent[]
     */
    public function getIdents(): array|null
    {
        return $this->container['idents'] ?? null;
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
     * Gets tax_rate
     * @return int
     */
    public function getTaxRate(): int|null
    {
        return $this->container['tax_rate'] ?? null;
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
     * Gets tax_amount
     * @return int
     */
    public function getTaxAmount(): int|null
    {
        return $this->container['tax_amount'] ?? null;
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
     * Gets cashier
     * @return string
     */
    public function getCashier(): string|null
    {
        return $this->container['cashier'] ?? null;
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
     * Gets market
     * @return string
     */
    public function getMarket(): string|null
    {
        return $this->container['market'] ?? null;
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
     * Gets delivery_options
     * @return \Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel
     */
    public function getDeliveryOptions(): OneOfSmartTransactionsDeliveryOptionsModel|null
    {
        return $this->container['delivery_options'] ?? null;
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
     * Gets product
     * @return string
     */
    public function getProduct(): string|null
    {
        return $this->container['product'] ?? null;
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
     * Gets trans_id
     * @return int
     */
    public function getTransId(): int|null
    {
        return $this->container['trans_id'] ?? null;
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
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod(): string|null
    {
        return $this->container['payment_method'] ?? null;
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
     * Gets transactions
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel[]
     */
    public function getTransactions(): array|null
    {
        return $this->container['transactions'] ?? null;
    }

    /**
     * Sets transactions
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModel[]|null $transactions Payment Transactions
     * @return $this
     */
    public function setTransactions(?array $transactions): static
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets last_visited_page
     * @return string
     */
    public function getLastVisitedPage(): string|null
    {
        return $this->container['last_visited_page'] ?? null;
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
     * Gets is_demo
     * @return bool
     */
    public function getIsDemo(): bool|null
    {
        return $this->container['is_demo'] ?? null;
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
     * Gets checkout_links
     * @return \Secuconnect\Client\Model\SmartTransactionsCheckoutLinks
     */
    public function getCheckoutLinks(): SmartTransactionsCheckoutLinks|null
    {
        return $this->container['checkout_links'] ?? null;
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
     * Gets intent
     * @return string
     */
    public function getIntent(): string|null
    {
        return $this->container['intent'] ?? null;
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
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl(): string|null
    {
        return $this->container['iframe_url'] ?? null;
    }

    /**
     * Sets iframe_url
     * @param string|null $iframe_url IFrame URL
     * @return $this
     */
    public function setIframeUrl(?string $iframe_url): static
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets prepaid_sales
     * @return \Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails
     */
    public function getPrepaidSales(): SmartTransactionsPrepaidSalesDetails|null
    {
        return $this->container['prepaid_sales'] ?? null;
    }

    /**
     * Sets prepaid_sales
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepaidSalesDetails|null $prepaid_sales prepaid_sales
     * @return $this
     */
    public function setPrepaidSales(?SmartTransactionsPrepaidSalesDetails $prepaid_sales): static
    {
        $this->container['prepaid_sales'] = $prepaid_sales;

        return $this;
    }

    /**
     * Gets communications
     * @return \Secuconnect\Client\Model\SmartTransactionsCommunication
     */
    public function getCommunications(): SmartTransactionsCommunication|null
    {
        return $this->container['communications'] ?? null;
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
     * Gets payment_links
     * @return \Secuconnect\Client\Model\SmartTransactionsPaymentLinks
     */
    public function getPaymentLinks(): SmartTransactionsPaymentLinks|null
    {
        return $this->container['payment_links'] ?? null;
    }

    /**
     * Sets payment_links
     * @param \Secuconnect\Client\Model\SmartTransactionsPaymentLinks|null $payment_links payment_links
     * @return $this
     */
    public function setPaymentLinks(?SmartTransactionsPaymentLinks $payment_links): static
    {
        $this->container['payment_links'] = $payment_links;

        return $this;
    }

    /**
     * Gets application_context
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContext
     */
    public function getApplicationContext(): SmartTransactionsApplicationContext|null
    {
        return $this->container['application_context'] ?? null;
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
     * Gets payment_instructions
     * @return \Secuconnect\Client\Model\PaymentInstructions
     */
    public function getPaymentInstructions(): PaymentInstructions|null
    {
        return $this->container['payment_instructions'] ?? null;
    }

    /**
     * Sets payment_instructions
     * @param \Secuconnect\Client\Model\PaymentInstructions|null $payment_instructions payment_instructions
     * @return $this
     */
    public function setPaymentInstructions(?PaymentInstructions $payment_instructions): static
    {
        $this->container['payment_instructions'] = $payment_instructions;

        return $this;
    }

    /**
     * Gets payment_context
     * @return \Secuconnect\Client\Model\PaymentContext
     */
    public function getPaymentContext(): PaymentContext|null
    {
        return $this->container['payment_context'] ?? null;
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

