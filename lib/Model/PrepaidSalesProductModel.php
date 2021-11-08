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
 * PrepaidSalesProductModel
 *
 * @category Class
 * @description PrepaidSalesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidSalesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PrepaidSalesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'status' => 'string',
        'stock' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'item' => '\Secuconnect\Client\Model\PrepaidSalesItem',
        'itemgroup' => '\Secuconnect\Client\Model\ItemGroup',
        'smart_device' => '\Secuconnect\Client\Model\PrepaidSalesSmartDevice',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store' => '\Secuconnect\Client\Model\Store',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'demo' => 'bool',
        'description' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'commission' => 'int',
        'commission_currency' => 'string',
        'code' => 'string',
        'serial' => 'string',
        'cardnumber' => 'string',
        'expire_date' => 'string',
        'provider_delivery_number' => 'string',
        'receipt_header' => 'string',
        'receipt_customer' => 'string',
        'receipt_zvt' => 'string',
        'receipt_dealer' => 'string',
        'vtc_tid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'status' => null,
        'stock' => null,
        'item' => null,
        'itemgroup' => null,
        'smart_device' => null,
        'merchant' => null,
        'store' => null,
        'contract' => null,
        'demo' => null,
        'description' => null,
        'amount' => null,
        'currency' => null,
        'commission' => null,
        'commission_currency' => null,
        'code' => null,
        'serial' => null,
        'cardnumber' => null,
        'expire_date' => null,
        'provider_delivery_number' => null,
        'receipt_header' => null,
        'receipt_customer' => null,
        'receipt_zvt' => null,
        'receipt_dealer' => null,
        'vtc_tid' => null
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
        'status' => 'status',
        'stock' => 'stock',
        'item' => 'item',
        'itemgroup' => 'itemgroup',
        'smart_device' => 'smart_device',
        'merchant' => 'merchant',
        'store' => 'store',
        'contract' => 'contract',
        'demo' => 'demo',
        'description' => 'description',
        'amount' => 'amount',
        'currency' => 'currency',
        'commission' => 'commission',
        'commission_currency' => 'commission_currency',
        'code' => 'code',
        'serial' => 'serial',
        'cardnumber' => 'cardnumber',
        'expire_date' => 'expire_date',
        'provider_delivery_number' => 'provider_delivery_number',
        'receipt_header' => 'receipt_header',
        'receipt_customer' => 'receipt_customer',
        'receipt_zvt' => 'receipt_zvt',
        'receipt_dealer' => 'receipt_dealer',
        'vtc_tid' => 'vtc_tid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'status' => 'setStatus',
        'stock' => 'setStock',
        'item' => 'setItem',
        'itemgroup' => 'setItemgroup',
        'smart_device' => 'setSmartDevice',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'contract' => 'setContract',
        'demo' => 'setDemo',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'commission' => 'setCommission',
        'commission_currency' => 'setCommissionCurrency',
        'code' => 'setCode',
        'serial' => 'setSerial',
        'cardnumber' => 'setCardnumber',
        'expire_date' => 'setExpireDate',
        'provider_delivery_number' => 'setProviderDeliveryNumber',
        'receipt_header' => 'setReceiptHeader',
        'receipt_customer' => 'setReceiptCustomer',
        'receipt_zvt' => 'setReceiptZvt',
        'receipt_dealer' => 'setReceiptDealer',
        'vtc_tid' => 'setVtcTid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'status' => 'getStatus',
        'stock' => 'getStock',
        'item' => 'getItem',
        'itemgroup' => 'getItemgroup',
        'smart_device' => 'getSmartDevice',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'contract' => 'getContract',
        'demo' => 'getDemo',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'commission' => 'getCommission',
        'commission_currency' => 'getCommissionCurrency',
        'code' => 'getCode',
        'serial' => 'getSerial',
        'cardnumber' => 'getCardnumber',
        'expire_date' => 'getExpireDate',
        'provider_delivery_number' => 'getProviderDeliveryNumber',
        'receipt_header' => 'getReceiptHeader',
        'receipt_customer' => 'getReceiptCustomer',
        'receipt_zvt' => 'getReceiptZvt',
        'receipt_dealer' => 'getReceiptDealer',
        'vtc_tid' => 'getVtcTid'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['itemgroup'] = $data['itemgroup'] ?? null;
        $this->container['smart_device'] = $data['smart_device'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['demo'] = $data['demo'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['commission'] = $data['commission'] ?? null;
        $this->container['commission_currency'] = $data['commission_currency'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['serial'] = $data['serial'] ?? null;
        $this->container['cardnumber'] = $data['cardnumber'] ?? null;
        $this->container['expire_date'] = $data['expire_date'] ?? null;
        $this->container['provider_delivery_number'] = $data['provider_delivery_number'] ?? null;
        $this->container['receipt_header'] = $data['receipt_header'] ?? null;
        $this->container['receipt_customer'] = $data['receipt_customer'] ?? null;
        $this->container['receipt_zvt'] = $data['receipt_zvt'] ?? null;
        $this->container['receipt_dealer'] = $data['receipt_dealer'] ?? null;
        $this->container['vtc_tid'] = $data['vtc_tid'] ?? null;
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
     * Gets status
     * @return string
     */
    public function getStatus(): string|null
    {
        return $this->container['status'] ?? null;
    }

    /**
     * Sets status
     * @param string|null $status Status
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stock
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getStock(): ProductInstanceUID|null
    {
        return $this->container['stock'] ?? null;
    }

    /**
     * Sets stock
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $stock stock
     * @return $this
     */
    public function setStock(?ProductInstanceUID $stock): static
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets item
     * @return \Secuconnect\Client\Model\PrepaidSalesItem
     */
    public function getItem(): PrepaidSalesItem|null
    {
        return $this->container['item'] ?? null;
    }

    /**
     * Sets item
     * @param \Secuconnect\Client\Model\PrepaidSalesItem|null $item item
     * @return $this
     */
    public function setItem(?PrepaidSalesItem $item): static
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets itemgroup
     * @return \Secuconnect\Client\Model\ItemGroup
     */
    public function getItemgroup(): ItemGroup|null
    {
        return $this->container['itemgroup'] ?? null;
    }

    /**
     * Sets itemgroup
     * @param \Secuconnect\Client\Model\ItemGroup|null $itemgroup itemgroup
     * @return $this
     */
    public function setItemgroup(?ItemGroup $itemgroup): static
    {
        $this->container['itemgroup'] = $itemgroup;

        return $this;
    }

    /**
     * Gets smart_device
     * @return \Secuconnect\Client\Model\PrepaidSalesSmartDevice
     */
    public function getSmartDevice(): PrepaidSalesSmartDevice|null
    {
        return $this->container['smart_device'] ?? null;
    }

    /**
     * Sets smart_device
     * @param \Secuconnect\Client\Model\PrepaidSalesSmartDevice|null $smart_device smart_device
     * @return $this
     */
    public function setSmartDevice(?PrepaidSalesSmartDevice $smart_device): static
    {
        $this->container['smart_device'] = $smart_device;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant(): ProductInstanceUID|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?ProductInstanceUID $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\Store
     */
    public function getStore(): Store|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\Store|null $store store
     * @return $this
     */
    public function setStore(?Store $store): static
    {
        $this->container['store'] = $store;

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
     * Gets demo
     * @return bool
     */
    public function getDemo(): bool|null
    {
        return $this->container['demo'] ?? null;
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
     * Gets description
     * @return string
     */
    public function getDescription(): string|null
    {
        return $this->container['description'] ?? null;
    }

    /**
     * Sets description
     * @param string|null $description Description
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

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
     * Gets currency
     * @return string
     */
    public function getCurrency(): string|null
    {
        return $this->container['currency'] ?? null;
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
     * Gets commission
     * @return int
     */
    public function getCommission(): int|null
    {
        return $this->container['commission'] ?? null;
    }

    /**
     * Sets commission
     * @param int|null $commission Commission
     * @return $this
     */
    public function setCommission(?int $commission): static
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets commission_currency
     * @return string
     */
    public function getCommissionCurrency(): string|null
    {
        return $this->container['commission_currency'] ?? null;
    }

    /**
     * Sets commission_currency
     * @param string|null $commission_currency Commission currency
     * @return $this
     */
    public function setCommissionCurrency(?string $commission_currency): static
    {
        $this->container['commission_currency'] = $commission_currency;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode(): string|null
    {
        return $this->container['code'] ?? null;
    }

    /**
     * Sets code
     * @param string|null $code Code
     * @return $this
     */
    public function setCode(?string $code): static
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets serial
     * @return string
     */
    public function getSerial(): string|null
    {
        return $this->container['serial'] ?? null;
    }

    /**
     * Sets serial
     * @param string|null $serial Serial
     * @return $this
     */
    public function setSerial(?string $serial): static
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets cardnumber
     * @return string
     */
    public function getCardnumber(): string|null
    {
        return $this->container['cardnumber'] ?? null;
    }

    /**
     * Sets cardnumber
     * @param string|null $cardnumber Card number
     * @return $this
     */
    public function setCardnumber(?string $cardnumber): static
    {
        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets expire_date
     * @return string
     */
    public function getExpireDate(): string|null
    {
        return $this->container['expire_date'] ?? null;
    }

    /**
     * Sets expire_date
     * @param string|null $expire_date Expire date
     * @return $this
     */
    public function setExpireDate(?string $expire_date): static
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets provider_delivery_number
     * @return string
     */
    public function getProviderDeliveryNumber(): string|null
    {
        return $this->container['provider_delivery_number'] ?? null;
    }

    /**
     * Sets provider_delivery_number
     * @param string|null $provider_delivery_number Provider delivery number
     * @return $this
     */
    public function setProviderDeliveryNumber(?string $provider_delivery_number): static
    {
        $this->container['provider_delivery_number'] = $provider_delivery_number;

        return $this;
    }

    /**
     * Gets receipt_header
     * @return string
     */
    public function getReceiptHeader(): string|null
    {
        return $this->container['receipt_header'] ?? null;
    }

    /**
     * Sets receipt_header
     * @param string|null $receipt_header Receipt header
     * @return $this
     */
    public function setReceiptHeader(?string $receipt_header): static
    {
        $this->container['receipt_header'] = $receipt_header;

        return $this;
    }

    /**
     * Gets receipt_customer
     * @return string
     */
    public function getReceiptCustomer(): string|null
    {
        return $this->container['receipt_customer'] ?? null;
    }

    /**
     * Sets receipt_customer
     * @param string|null $receipt_customer Receipt customer
     * @return $this
     */
    public function setReceiptCustomer(?string $receipt_customer): static
    {
        $this->container['receipt_customer'] = $receipt_customer;

        return $this;
    }

    /**
     * Gets receipt_zvt
     * @return string
     */
    public function getReceiptZvt(): string|null
    {
        return $this->container['receipt_zvt'] ?? null;
    }

    /**
     * Sets receipt_zvt
     * @param string|null $receipt_zvt Receipt zvt
     * @return $this
     */
    public function setReceiptZvt(?string $receipt_zvt): static
    {
        $this->container['receipt_zvt'] = $receipt_zvt;

        return $this;
    }

    /**
     * Gets receipt_dealer
     * @return string
     */
    public function getReceiptDealer(): string|null
    {
        return $this->container['receipt_dealer'] ?? null;
    }

    /**
     * Sets receipt_dealer
     * @param string|null $receipt_dealer Receipt dealer
     * @return $this
     */
    public function setReceiptDealer(?string $receipt_dealer): static
    {
        $this->container['receipt_dealer'] = $receipt_dealer;

        return $this;
    }

    /**
     * Gets vtc_tid
     * @return string
     */
    public function getVtcTid(): string|null
    {
        return $this->container['vtc_tid'] ?? null;
    }

    /**
     * Sets vtc_tid
     * @param string|null $vtc_tid Vtc tid
     * @return $this
     */
    public function setVtcTid(?string $vtc_tid): static
    {
        $this->container['vtc_tid'] = $vtc_tid;

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

