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
 * SecupayTransactionProductModel
 *
 * @category Class
 * @description SecupayTransactionProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionProductModel';

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
        'payment_id' => 'string',
        'basket' => '\Secuconnect\Client\Model\SecupayBasketItem[]',
        'transaction_status' => 'string',
        'accrual' => 'bool',
        'payment_action' => 'string',
        'transfer_purpose' => 'string',
        'transfer_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'used_payment_instrument' => '\Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument',
        'redirect_url' => '\Secuconnect\Client\Model\SecupayRedirectUrl',
        'subscription' => '\Secuconnect\Client\Model\SecupayTransactionProductDTOSubscription',
        'iframe_url' => 'string',
        'container' => '\Secuconnect\Client\Model\PaymentContainersProductModel',
        'sub_transactions' => '\Secuconnect\Client\Model\SecupaySubTransactionProductModel[]',
        'mandate' => '\Secuconnect\Client\Model\PaymentContainerMandate'
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
        'payment_id' => null,
        'basket' => null,
        'transaction_status' => null,
        'accrual' => null,
        'payment_action' => null,
        'transfer_purpose' => null,
        'transfer_account' => null,
        'customer' => null,
        'used_payment_instrument' => null,
        'redirect_url' => null,
        'subscription' => null,
        'iframe_url' => null,
        'container' => null,
        'sub_transactions' => null,
        'mandate' => null
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
        'payment_id' => 'payment_id',
        'basket' => 'basket',
        'transaction_status' => 'transaction_status',
        'accrual' => 'accrual',
        'payment_action' => 'payment_action',
        'transfer_purpose' => 'transfer_purpose',
        'transfer_account' => 'transfer_account',
        'customer' => 'customer',
        'used_payment_instrument' => 'used_payment_instrument',
        'redirect_url' => 'redirect_url',
        'subscription' => 'subscription',
        'iframe_url' => 'iframe_url',
        'container' => 'container',
        'sub_transactions' => 'sub_transactions',
        'mandate' => 'mandate'
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
        'payment_id' => 'setPaymentId',
        'basket' => 'setBasket',
        'transaction_status' => 'setTransactionStatus',
        'accrual' => 'setAccrual',
        'payment_action' => 'setPaymentAction',
        'transfer_purpose' => 'setTransferPurpose',
        'transfer_account' => 'setTransferAccount',
        'customer' => 'setCustomer',
        'used_payment_instrument' => 'setUsedPaymentInstrument',
        'redirect_url' => 'setRedirectUrl',
        'subscription' => 'setSubscription',
        'iframe_url' => 'setIframeUrl',
        'container' => 'setContainer',
        'sub_transactions' => 'setSubTransactions',
        'mandate' => 'setMandate'
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
        'payment_id' => 'getPaymentId',
        'basket' => 'getBasket',
        'transaction_status' => 'getTransactionStatus',
        'accrual' => 'getAccrual',
        'payment_action' => 'getPaymentAction',
        'transfer_purpose' => 'getTransferPurpose',
        'transfer_account' => 'getTransferAccount',
        'customer' => 'getCustomer',
        'used_payment_instrument' => 'getUsedPaymentInstrument',
        'redirect_url' => 'getRedirectUrl',
        'subscription' => 'getSubscription',
        'iframe_url' => 'getIframeUrl',
        'container' => 'getContainer',
        'sub_transactions' => 'getSubTransactions',
        'mandate' => 'getMandate'
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
        $this->container['payment_id'] = $data['payment_id'] ?? null;
        $this->container['basket'] = $data['basket'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['accrual'] = $data['accrual'] ?? null;
        $this->container['payment_action'] = $data['payment_action'] ?? null;
        $this->container['transfer_purpose'] = $data['transfer_purpose'] ?? null;
        $this->container['transfer_account'] = $data['transfer_account'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['used_payment_instrument'] = $data['used_payment_instrument'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['subscription'] = $data['subscription'] ?? null;
        $this->container['iframe_url'] = $data['iframe_url'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['sub_transactions'] = $data['sub_transactions'] ?? null;
        $this->container['mandate'] = $data['mandate'] ?? null;
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
     * @param int|null $trans_id Transaction identifier
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
     * Gets payment_id
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     * @param string|null $payment_id Payment ID
     * @return $this
     */
    public function setPaymentId(?string $payment_id): static
    {
        $this->container['payment_id'] = $payment_id;

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
     * @param string|null $payment_action Specifies whether a pre-authorization (\"authorization\") or instant payment ( \"sale\") is to be performed. Standard value here is \"sale\". The collection of the pre-authorized payment is made with the \"capture\" command.
     * @return $this
     */
    public function setPaymentAction(?string $payment_action): static
    {
        $this->container['payment_action'] = $payment_action;

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
     * Gets used_payment_instrument
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument
     */
    public function getUsedPaymentInstrument(): SecupayTransactionProductModelUsedPaymentInstrument
    {
        return $this->container['used_payment_instrument'];
    }

    /**
     * Sets used_payment_instrument
     * @param \Secuconnect\Client\Model\SecupayTransactionProductModelUsedPaymentInstrument|null $used_payment_instrument used_payment_instrument
     * @return $this
     */
    public function setUsedPaymentInstrument(?SecupayTransactionProductModelUsedPaymentInstrument $used_payment_instrument): static
    {
        $this->container['used_payment_instrument'] = $used_payment_instrument;

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
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl(): string
    {
        return $this->container['iframe_url'];
    }

    /**
     * Sets iframe_url
     * @param string|null $iframe_url The url of the payment checkout iframe
     * @return $this
     */
    public function setIframeUrl(?string $iframe_url): static
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function getContainer(): PaymentContainersProductModel
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\PaymentContainersProductModel|null $container container
     * @return $this
     */
    public function setContainer(?PaymentContainersProductModel $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets sub_transactions
     * @return \Secuconnect\Client\Model\SecupaySubTransactionProductModel[]
     */
    public function getSubTransactions(): array
    {
        return $this->container['sub_transactions'];
    }

    /**
     * Sets sub_transactions
     * @param \Secuconnect\Client\Model\SecupaySubTransactionProductModel[]|null $sub_transactions A list of sub transactions (for mixed basket)
     * @return $this
     */
    public function setSubTransactions(?array $sub_transactions): static
    {
        $this->container['sub_transactions'] = $sub_transactions;

        return $this;
    }

    /**
     * Gets mandate
     * @return \Secuconnect\Client\Model\PaymentContainerMandate
     */
    public function getMandate(): PaymentContainerMandate
    {
        return $this->container['mandate'];
    }

    /**
     * Sets mandate
     * @param \Secuconnect\Client\Model\PaymentContainerMandate|null $mandate mandate
     * @return $this
     */
    public function setMandate(?PaymentContainerMandate $mandate): static
    {
        $this->container['mandate'] = $mandate;

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

