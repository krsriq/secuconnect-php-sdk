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
 * PaymentTransactionsProductModel
 *
 * @category Class
 * @description The Payment Transaction manages the payment process, from authorization till the payment is really executed.
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'platform' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'store' => '\Secuconnect\Client\Model\GeneralStoresProductModel',
        'trans_id' => 'int',
        'parents' => '\Secuconnect\Client\Model\ParentObj[]',
        'product_id' => 'int',
        'product' => 'string',
        'product_raw' => 'string',
        'zahlungsmittel_id' => 'int',
        'contract_id' => 'int',
        'amount' => 'int',
        'currency' => 'string',
        'status' => 'int',
        'status_text' => 'string',
        'incoming_payment_date' => 'string',
        'details' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelDetails',
        'customer' => '\Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer',
        'tid' => 'string',
        'payment_data' => 'string',
        'store_name' => 'string',
        'payout_date' => 'string',
        'invoice_number' => 'string',
        'transaction_hash' => 'string',
        'reference_id' => 'string',
        'account_owner' => 'string',
        'accrual' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'platform' => null,
        'merchant' => null,
        'store' => null,
        'trans_id' => null,
        'parents' => null,
        'product_id' => null,
        'product' => null,
        'product_raw' => null,
        'zahlungsmittel_id' => null,
        'contract_id' => null,
        'amount' => null,
        'currency' => null,
        'status' => null,
        'status_text' => null,
        'incoming_payment_date' => null,
        'details' => null,
        'customer' => null,
        'tid' => null,
        'payment_data' => null,
        'store_name' => null,
        'payout_date' => null,
        'invoice_number' => null,
        'transaction_hash' => null,
        'reference_id' => null,
        'account_owner' => null,
        'accrual' => null
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
        'platform' => 'platform',
        'merchant' => 'merchant',
        'store' => 'store',
        'trans_id' => 'trans_id',
        'parents' => 'parents',
        'product_id' => 'product_id',
        'product' => 'product',
        'product_raw' => 'product_raw',
        'zahlungsmittel_id' => 'zahlungsmittel_id',
        'contract_id' => 'contract_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'status' => 'status',
        'status_text' => 'status_text',
        'incoming_payment_date' => 'incoming_payment_date',
        'details' => 'details',
        'customer' => 'customer',
        'tid' => 'tid',
        'payment_data' => 'payment_data',
        'store_name' => 'store_name',
        'payout_date' => 'payout_date',
        'invoice_number' => 'invoice_number',
        'transaction_hash' => 'transaction_hash',
        'reference_id' => 'reference_id',
        'account_owner' => 'account_owner',
        'accrual' => 'accrual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'platform' => 'setPlatform',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'trans_id' => 'setTransId',
        'parents' => 'setParents',
        'product_id' => 'setProductId',
        'product' => 'setProduct',
        'product_raw' => 'setProductRaw',
        'zahlungsmittel_id' => 'setZahlungsmittelId',
        'contract_id' => 'setContractId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'status_text' => 'setStatusText',
        'incoming_payment_date' => 'setIncomingPaymentDate',
        'details' => 'setDetails',
        'customer' => 'setCustomer',
        'tid' => 'setTid',
        'payment_data' => 'setPaymentData',
        'store_name' => 'setStoreName',
        'payout_date' => 'setPayoutDate',
        'invoice_number' => 'setInvoiceNumber',
        'transaction_hash' => 'setTransactionHash',
        'reference_id' => 'setReferenceId',
        'account_owner' => 'setAccountOwner',
        'accrual' => 'setAccrual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'platform' => 'getPlatform',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'trans_id' => 'getTransId',
        'parents' => 'getParents',
        'product_id' => 'getProductId',
        'product' => 'getProduct',
        'product_raw' => 'getProductRaw',
        'zahlungsmittel_id' => 'getZahlungsmittelId',
        'contract_id' => 'getContractId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'status_text' => 'getStatusText',
        'incoming_payment_date' => 'getIncomingPaymentDate',
        'details' => 'getDetails',
        'customer' => 'getCustomer',
        'tid' => 'getTid',
        'payment_data' => 'getPaymentData',
        'store_name' => 'getStoreName',
        'payout_date' => 'getPayoutDate',
        'invoice_number' => 'getInvoiceNumber',
        'transaction_hash' => 'getTransactionHash',
        'reference_id' => 'getReferenceId',
        'account_owner' => 'getAccountOwner',
        'accrual' => 'getAccrual'
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
        $this->container['platform'] = $data['platform'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['trans_id'] = $data['trans_id'] ?? null;
        $this->container['parents'] = $data['parents'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['product_raw'] = $data['product_raw'] ?? null;
        $this->container['zahlungsmittel_id'] = $data['zahlungsmittel_id'] ?? null;
        $this->container['contract_id'] = $data['contract_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_text'] = $data['status_text'] ?? null;
        $this->container['incoming_payment_date'] = $data['incoming_payment_date'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['tid'] = $data['tid'] ?? null;
        $this->container['payment_data'] = $data['payment_data'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
        $this->container['payout_date'] = $data['payout_date'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['account_owner'] = $data['account_owner'] ?? null;
        $this->container['accrual'] = $data['accrual'] ?? null;
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
     * Gets platform
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getPlatform(): ProductInstanceUID|null
    {
        return $this->container['platform'] ?? null;
    }

    /**
     * Sets platform
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $platform platform
     * @return $this
     */
    public function setPlatform(?ProductInstanceUID $platform): static
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\GeneralMerchantsProductModel
     */
    public function getMerchant(): GeneralMerchantsProductModel|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\GeneralMerchantsProductModel|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?GeneralMerchantsProductModel $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\GeneralStoresProductModel
     */
    public function getStore(): GeneralStoresProductModel|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\GeneralStoresProductModel|null $store store
     * @return $this
     */
    public function setStore(?GeneralStoresProductModel $store): static
    {
        $this->container['store'] = $store;

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
     * @param int|null $trans_id Transaction ID in secupay Frontend
     * @return $this
     */
    public function setTransId(?int $trans_id): static
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets parents
     * @return \Secuconnect\Client\Model\ParentObj[]
     */
    public function getParents(): array|null
    {
        return $this->container['parents'] ?? null;
    }

    /**
     * Sets parents
     * @param \Secuconnect\Client\Model\ParentObj[]|null $parents Parent transactions
     * @return $this
     */
    public function setParents(?array $parents): static
    {
        $this->container['parents'] = $parents;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId(): int|null
    {
        return $this->container['product_id'] ?? null;
    }

    /**
     * Sets product_id
     * @param int|null $product_id Payment product ID
     * @return $this
     */
    public function setProductId(?int $product_id): static
    {
        $this->container['product_id'] = $product_id;

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
     * @param string|null $product Payment product type
     * @return $this
     */
    public function setProduct(?string $product): static
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets product_raw
     * @return string
     */
    public function getProductRaw(): string|null
    {
        return $this->container['product_raw'] ?? null;
    }

    /**
     * Sets product_raw
     * @param string|null $product_raw Payment product name
     * @return $this
     */
    public function setProductRaw(?string $product_raw): static
    {
        $this->container['product_raw'] = $product_raw;

        return $this;
    }

    /**
     * Gets zahlungsmittel_id
     * @return int
     */
    public function getZahlungsmittelId(): int|null
    {
        return $this->container['zahlungsmittel_id'] ?? null;
    }

    /**
     * Sets zahlungsmittel_id
     * @param int|null $zahlungsmittel_id Internal ID of the payment instrument
     * @return $this
     */
    public function setZahlungsmittelId(?int $zahlungsmittel_id): static
    {
        $this->container['zahlungsmittel_id'] = $zahlungsmittel_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return int
     */
    public function getContractId(): int|null
    {
        return $this->container['contract_id'] ?? null;
    }

    /**
     * Sets contract_id
     * @param int|null $contract_id Merchant's contract ID
     * @return $this
     */
    public function setContractId(?int $contract_id): static
    {
        $this->container['contract_id'] = $contract_id;

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
     * Gets status
     * @return int
     */
    public function getStatus(): int|null
    {
        return $this->container['status'] ?? null;
    }

    /**
     * Sets status
     * @param int|null $status Transaction status ID
     * @return $this
     */
    public function setStatus(?int $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_text
     * @return string
     */
    public function getStatusText(): string|null
    {
        return $this->container['status_text'] ?? null;
    }

    /**
     * Sets status_text
     * @param string|null $status_text Transaction status description
     * @return $this
     */
    public function setStatusText(?string $status_text): static
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets incoming_payment_date
     * @return string
     */
    public function getIncomingPaymentDate(): string|null
    {
        return $this->container['incoming_payment_date'] ?? null;
    }

    /**
     * Sets incoming_payment_date
     * @param string|null $incoming_payment_date Date when the payment was received
     * @return $this
     */
    public function setIncomingPaymentDate(?string $incoming_payment_date): static
    {
        $this->container['incoming_payment_date'] = $incoming_payment_date;

        return $this;
    }

    /**
     * Gets details
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModelDetails
     */
    public function getDetails(): PaymentTransactionsProductModelDetails|null
    {
        return $this->container['details'] ?? null;
    }

    /**
     * Sets details
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelDetails|null $details details
     * @return $this
     */
    public function setDetails(?PaymentTransactionsProductModelDetails $details): static
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer
     */
    public function getCustomer(): PaymentTransactionsProductModelCustomer|null
    {
        return $this->container['customer'] ?? null;
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentTransactionsProductModelCustomer|null $customer customer
     * @return $this
     */
    public function setCustomer(?PaymentTransactionsProductModelCustomer $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid(): string|null
    {
        return $this->container['tid'] ?? null;
    }

    /**
     * Sets tid
     * @param string|null $tid Terminal-ID
     * @return $this
     */
    public function setTid(?string $tid): static
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets payment_data
     * @return string
     */
    public function getPaymentData(): string|null
    {
        return $this->container['payment_data'] ?? null;
    }

    /**
     * Sets payment_data
     * @param string|null $payment_data Data of the used payment instrument
     * @return $this
     */
    public function setPaymentData(?string $payment_data): static
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
    }

    /**
     * Gets store_name
     * @return string
     */
    public function getStoreName(): string|null
    {
        return $this->container['store_name'] ?? null;
    }

    /**
     * Sets store_name
     * @param string|null $store_name Store name
     * @return $this
     */
    public function setStoreName(?string $store_name): static
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets payout_date
     * @return string
     */
    public function getPayoutDate(): string|null
    {
        return $this->container['payout_date'] ?? null;
    }

    /**
     * Sets payout_date
     * @param string|null $payout_date Date when the payout was created
     * @return $this
     */
    public function setPayoutDate(?string $payout_date): static
    {
        $this->container['payout_date'] = $payout_date;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber(): string|null
    {
        return $this->container['invoice_number'] ?? null;
    }

    /**
     * Sets invoice_number
     * @param string|null $invoice_number Invoice number (from merchant)
     * @return $this
     */
    public function setInvoiceNumber(?string $invoice_number): static
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets transaction_hash
     * @return string
     */
    public function getTransactionHash(): string|null
    {
        return $this->container['transaction_hash'] ?? null;
    }

    /**
     * Sets transaction_hash
     * @param string|null $transaction_hash Payment-ID
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash): static
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId(): string|null
    {
        return $this->container['reference_id'] ?? null;
    }

    /**
     * Sets reference_id
     * @param string|null $reference_id Reference ID
     * @return $this
     */
    public function setReferenceId(?string $reference_id): static
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets account_owner
     * @return string
     */
    public function getAccountOwner(): string|null
    {
        return $this->container['account_owner'] ?? null;
    }

    /**
     * Sets account_owner
     * @param string|null $account_owner Name of the bank account owner
     * @return $this
     */
    public function setAccountOwner(?string $account_owner): static
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets accrual
     * @return bool
     */
    public function getAccrual(): bool|null
    {
        return $this->container['accrual'] ?? null;
    }

    /**
     * Sets accrual
     * @param bool|null $accrual Accrual Flag
     * @return $this
     */
    public function setAccrual(?bool $accrual): static
    {
        $this->container['accrual'] = $accrual;

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

