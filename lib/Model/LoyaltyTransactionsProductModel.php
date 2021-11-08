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
 * LoyaltyTransactionsProductModel
 *
 * @category Class
 * @description LoyaltyTransactionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyTransactionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyTransactionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'merchant' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant',
        'cardgroup' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup',
        'store' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOStore',
        'merchantcard' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard',
        'card' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTOCard',
        'parents' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]',
        'children' => '\Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]',
        'tid' => 'string',
        'status' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'balance' => 'int',
        'description' => 'string',
        'last_changee' => 'string',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]',
        'is_cancelling' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'merchant' => null,
        'cardgroup' => null,
        'store' => null,
        'merchantcard' => null,
        'card' => null,
        'parents' => null,
        'children' => null,
        'tid' => null,
        'status' => null,
        'amount' => null,
        'currency' => null,
        'balance' => null,
        'description' => null,
        'last_changee' => null,
        'receipt' => null,
        'is_cancelling' => null
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
        'merchant' => 'merchant',
        'cardgroup' => 'cardgroup',
        'store' => 'store',
        'merchantcard' => 'merchantcard',
        'card' => 'card',
        'parents' => 'parents',
        'children' => 'children',
        'tid' => 'tid',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'balance' => 'balance',
        'description' => 'description',
        'last_changee' => 'last_changee',
        'receipt' => 'receipt',
        'is_cancelling' => 'is_cancelling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'merchant' => 'setMerchant',
        'cardgroup' => 'setCardgroup',
        'store' => 'setStore',
        'merchantcard' => 'setMerchantcard',
        'card' => 'setCard',
        'parents' => 'setParents',
        'children' => 'setChildren',
        'tid' => 'setTid',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'balance' => 'setBalance',
        'description' => 'setDescription',
        'last_changee' => 'setLastChangee',
        'receipt' => 'setReceipt',
        'is_cancelling' => 'setIsCancelling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'merchant' => 'getMerchant',
        'cardgroup' => 'getCardgroup',
        'store' => 'getStore',
        'merchantcard' => 'getMerchantcard',
        'card' => 'getCard',
        'parents' => 'getParents',
        'children' => 'getChildren',
        'tid' => 'getTid',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'balance' => 'getBalance',
        'description' => 'getDescription',
        'last_changee' => 'getLastChangee',
        'receipt' => 'getReceipt',
        'is_cancelling' => 'getIsCancelling'
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
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['cardgroup'] = $data['cardgroup'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['merchantcard'] = $data['merchantcard'] ?? null;
        $this->container['card'] = $data['card'] ?? null;
        $this->container['parents'] = $data['parents'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['tid'] = $data['tid'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['last_changee'] = $data['last_changee'] ?? null;
        $this->container['receipt'] = $data['receipt'] ?? null;
        $this->container['is_cancelling'] = $data['is_cancelling'] ?? null;
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
     * Gets merchant
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant
     */
    public function getMerchant(): LoyaltyTransactionsDTOMerchant|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchant|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?LoyaltyTransactionsDTOMerchant $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets cardgroup
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup
     */
    public function getCardgroup(): LoyaltyTransactionsDTOCardgroup|null
    {
        return $this->container['cardgroup'] ?? null;
    }

    /**
     * Sets cardgroup
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOCardgroup|null $cardgroup cardgroup
     * @return $this
     */
    public function setCardgroup(?LoyaltyTransactionsDTOCardgroup $cardgroup): static
    {
        $this->container['cardgroup'] = $cardgroup;

        return $this;
    }

    /**
     * Gets store
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOStore
     */
    public function getStore(): LoyaltyTransactionsDTOStore|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOStore|null $store store
     * @return $this
     */
    public function setStore(?LoyaltyTransactionsDTOStore $store): static
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets merchantcard
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard
     */
    public function getMerchantcard(): LoyaltyTransactionsDTOMerchantcard|null
    {
        return $this->container['merchantcard'] ?? null;
    }

    /**
     * Sets merchantcard
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOMerchantcard|null $merchantcard merchantcard
     * @return $this
     */
    public function setMerchantcard(?LoyaltyTransactionsDTOMerchantcard $merchantcard): static
    {
        $this->container['merchantcard'] = $merchantcard;

        return $this;
    }

    /**
     * Gets card
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTOCard
     */
    public function getCard(): LoyaltyTransactionsDTOCard|null
    {
        return $this->container['card'] ?? null;
    }

    /**
     * Sets card
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTOCard|null $card card
     * @return $this
     */
    public function setCard(?LoyaltyTransactionsDTOCard $card): static
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets parents
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]
     */
    public function getParents(): array|null
    {
        return $this->container['parents'] ?? null;
    }

    /**
     * Sets parents
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]|null $parents parents
     * @return $this
     */
    public function setParents(?array $parents): static
    {
        $this->container['parents'] = $parents;

        return $this;
    }

    /**
     * Gets children
     * @return \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]
     */
    public function getChildren(): array|null
    {
        return $this->container['children'] ?? null;
    }

    /**
     * Sets children
     * @param \Secuconnect\Client\Model\LoyaltyTransactionsDTORelatedTransactions[]|null $children children
     * @return $this
     */
    public function setChildren(?array $children): static
    {
        $this->container['children'] = $children;

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
     * @param string|null $tid The TID of the processed Smart Device
     * @return $this
     */
    public function setTid(?string $tid): static
    {
        $this->container['tid'] = $tid;

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
     * @param string|null $status The status text of the Loyalty Transaction
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
     * Gets balance
     * @return int
     */
    public function getBalance(): int|null
    {
        return $this->container['balance'] ?? null;
    }

    /**
     * Sets balance
     * @param int|null $balance The balance of the merchantcard after this Loyalty Transaction
     * @return $this
     */
    public function setBalance(?int $balance): static
    {
        $this->container['balance'] = $balance;

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
     * @param string|null $description Loyalty Transaction type
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets last_changee
     * @return string
     */
    public function getLastChangee(): string|null
    {
        return $this->container['last_changee'] ?? null;
    }

    /**
     * Sets last_changee
     * @param string|null $last_changee Last change oif this transaction, most like a status change
     * @return $this
     */
    public function setLastChangee(?string $last_changee): static
    {
        $this->container['last_changee'] = $last_changee;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\ReceiptTypeValue[]
     */
    public function getReceipt(): array|null
    {
        return $this->container['receipt'] ?? null;
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\ReceiptTypeValue[]|null $receipt Receipt
     * @return $this
     */
    public function setReceipt(?array $receipt): static
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets is_cancelling
     * @return int
     */
    public function getIsCancelling(): int|null
    {
        return $this->container['is_cancelling'] ?? null;
    }

    /**
     * Sets is_cancelling
     * @param int|null $is_cancelling Indicator for a cancelling transaction (1 = full-cancel, 3 = partial-cancel)
     * @return $this
     */
    public function setIsCancelling(?int $is_cancelling): static
    {
        $this->container['is_cancelling'] = $is_cancelling;

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

