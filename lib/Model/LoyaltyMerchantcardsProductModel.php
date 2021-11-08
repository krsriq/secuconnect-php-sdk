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
 * LoyaltyMerchantcardsProductModel
 *
 * @category Class
 * @description Loyalty merchant card
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'card' => '\Secuconnect\Client\Model\LoyaltyCardsProductModel',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'created_for_merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'created_for_store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'customer' => '\Secuconnect\Client\Model\LoyaltyCustomersProductModel',
        'cardgroup' => '\Secuconnect\Client\Model\LoyaltyCardgroupsProductModel',
        'payment_container' => '\Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer',
        'balance' => 'int',
        'points' => 'int',
        'bonus_balance' => 'int',
        'cash_balance' => 'int',
        'stock_status' => 'string',
        'lock_status' => 'string',
        'last_usage' => 'string',
        'last_charge' => 'string',
        'is_base_card' => 'bool',
        'passcode' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'card' => null,
        'merchant' => null,
        'created_for_merchant' => null,
        'created_for_store' => null,
        'customer' => null,
        'cardgroup' => null,
        'payment_container' => null,
        'balance' => null,
        'points' => null,
        'bonus_balance' => null,
        'cash_balance' => null,
        'stock_status' => null,
        'lock_status' => null,
        'last_usage' => null,
        'last_charge' => null,
        'is_base_card' => null,
        'passcode' => null
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
        'card' => 'card',
        'merchant' => 'merchant',
        'created_for_merchant' => 'created_for_merchant',
        'created_for_store' => 'created_for_store',
        'customer' => 'customer',
        'cardgroup' => 'cardgroup',
        'payment_container' => 'payment_container',
        'balance' => 'balance',
        'points' => 'points',
        'bonus_balance' => 'bonus_balance',
        'cash_balance' => 'cash_balance',
        'stock_status' => 'stock_status',
        'lock_status' => 'lock_status',
        'last_usage' => 'last_usage',
        'last_charge' => 'last_charge',
        'is_base_card' => 'is_base_card',
        'passcode' => 'passcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'card' => 'setCard',
        'merchant' => 'setMerchant',
        'created_for_merchant' => 'setCreatedForMerchant',
        'created_for_store' => 'setCreatedForStore',
        'customer' => 'setCustomer',
        'cardgroup' => 'setCardgroup',
        'payment_container' => 'setPaymentContainer',
        'balance' => 'setBalance',
        'points' => 'setPoints',
        'bonus_balance' => 'setBonusBalance',
        'cash_balance' => 'setCashBalance',
        'stock_status' => 'setStockStatus',
        'lock_status' => 'setLockStatus',
        'last_usage' => 'setLastUsage',
        'last_charge' => 'setLastCharge',
        'is_base_card' => 'setIsBaseCard',
        'passcode' => 'setPasscode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'card' => 'getCard',
        'merchant' => 'getMerchant',
        'created_for_merchant' => 'getCreatedForMerchant',
        'created_for_store' => 'getCreatedForStore',
        'customer' => 'getCustomer',
        'cardgroup' => 'getCardgroup',
        'payment_container' => 'getPaymentContainer',
        'balance' => 'getBalance',
        'points' => 'getPoints',
        'bonus_balance' => 'getBonusBalance',
        'cash_balance' => 'getCashBalance',
        'stock_status' => 'getStockStatus',
        'lock_status' => 'getLockStatus',
        'last_usage' => 'getLastUsage',
        'last_charge' => 'getLastCharge',
        'is_base_card' => 'getIsBaseCard',
        'passcode' => 'getPasscode'
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

        $this->container['card'] = $data['card'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['created_for_merchant'] = $data['created_for_merchant'] ?? null;
        $this->container['created_for_store'] = $data['created_for_store'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['cardgroup'] = $data['cardgroup'] ?? null;
        $this->container['payment_container'] = $data['payment_container'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['bonus_balance'] = $data['bonus_balance'] ?? null;
        $this->container['cash_balance'] = $data['cash_balance'] ?? null;
        $this->container['stock_status'] = $data['stock_status'] ?? null;
        $this->container['lock_status'] = $data['lock_status'] ?? null;
        $this->container['last_usage'] = $data['last_usage'] ?? null;
        $this->container['last_charge'] = $data['last_charge'] ?? null;
        $this->container['is_base_card'] = $data['is_base_card'] ?? null;
        $this->container['passcode'] = $data['passcode'] ?? null;
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
     * Gets card
     * @return \Secuconnect\Client\Model\LoyaltyCardsProductModel
     */
    public function getCard(): LoyaltyCardsProductModel|null
    {
        return $this->container['card'] ?? null;
    }

    /**
     * Sets card
     * @param \Secuconnect\Client\Model\LoyaltyCardsProductModel|null $card card
     * @return $this
     */
    public function setCard(?LoyaltyCardsProductModel $card): static
    {
        $this->container['card'] = $card;

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
     * Gets created_for_merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCreatedForMerchant(): ProductInstanceUID|null
    {
        return $this->container['created_for_merchant'] ?? null;
    }

    /**
     * Sets created_for_merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $created_for_merchant created_for_merchant
     * @return $this
     */
    public function setCreatedForMerchant(?ProductInstanceUID $created_for_merchant): static
    {
        $this->container['created_for_merchant'] = $created_for_merchant;

        return $this;
    }

    /**
     * Gets created_for_store
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getCreatedForStore(): ProductInstanceUID|null
    {
        return $this->container['created_for_store'] ?? null;
    }

    /**
     * Sets created_for_store
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $created_for_store created_for_store
     * @return $this
     */
    public function setCreatedForStore(?ProductInstanceUID $created_for_store): static
    {
        $this->container['created_for_store'] = $created_for_store;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\LoyaltyCustomersProductModel
     */
    public function getCustomer(): LoyaltyCustomersProductModel|null
    {
        return $this->container['customer'] ?? null;
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\LoyaltyCustomersProductModel|null $customer customer
     * @return $this
     */
    public function setCustomer(?LoyaltyCustomersProductModel $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets cardgroup
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel
     */
    public function getCardgroup(): LoyaltyCardgroupsProductModel|null
    {
        return $this->container['cardgroup'] ?? null;
    }

    /**
     * Sets cardgroup
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsProductModel|null $cardgroup cardgroup
     * @return $this
     */
    public function setCardgroup(?LoyaltyCardgroupsProductModel $cardgroup): static
    {
        $this->container['cardgroup'] = $cardgroup;

        return $this;
    }

    /**
     * Gets payment_container
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer
     */
    public function getPaymentContainer(): LoyaltyMerchantcardsDTOPaymentContainer|null
    {
        return $this->container['payment_container'] ?? null;
    }

    /**
     * Sets payment_container
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsDTOPaymentContainer|null $payment_container payment_container
     * @return $this
     */
    public function setPaymentContainer(?LoyaltyMerchantcardsDTOPaymentContainer $payment_container): static
    {
        $this->container['payment_container'] = $payment_container;

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
     * @param int|null $balance Loyalty merchant card balance
     * @return $this
     */
    public function setBalance(?int $balance): static
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets points
     * @return int
     */
    public function getPoints(): int|null
    {
        return $this->container['points'] ?? null;
    }

    /**
     * Sets points
     * @param int|null $points Loyalty merchant card points
     * @return $this
     */
    public function setPoints(?int $points): static
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets bonus_balance
     * @return int
     */
    public function getBonusBalance(): int|null
    {
        return $this->container['bonus_balance'] ?? null;
    }

    /**
     * Sets bonus_balance
     * @param int|null $bonus_balance Loyalty merchant card bonus balance
     * @return $this
     */
    public function setBonusBalance(?int $bonus_balance): static
    {
        $this->container['bonus_balance'] = $bonus_balance;

        return $this;
    }

    /**
     * Gets cash_balance
     * @return int
     */
    public function getCashBalance(): int|null
    {
        return $this->container['cash_balance'] ?? null;
    }

    /**
     * Sets cash_balance
     * @param int|null $cash_balance Loyalty merchant card cash balance
     * @return $this
     */
    public function setCashBalance(?int $cash_balance): static
    {
        $this->container['cash_balance'] = $cash_balance;

        return $this;
    }

    /**
     * Gets stock_status
     * @return string
     */
    public function getStockStatus(): string|null
    {
        return $this->container['stock_status'] ?? null;
    }

    /**
     * Sets stock_status
     * @param string|null $stock_status Loyalty merchant card stock status
     * @return $this
     */
    public function setStockStatus(?string $stock_status): static
    {
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets lock_status
     * @return string
     */
    public function getLockStatus(): string|null
    {
        return $this->container['lock_status'] ?? null;
    }

    /**
     * Sets lock_status
     * @param string|null $lock_status Loyalty merchant card lock status
     * @return $this
     */
    public function setLockStatus(?string $lock_status): static
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets last_usage
     * @return string
     */
    public function getLastUsage(): string|null
    {
        return $this->container['last_usage'] ?? null;
    }

    /**
     * Sets last_usage
     * @param string|null $last_usage Loyalty merchant card last usage
     * @return $this
     */
    public function setLastUsage(?string $last_usage): static
    {
        $this->container['last_usage'] = $last_usage;

        return $this;
    }

    /**
     * Gets last_charge
     * @return string
     */
    public function getLastCharge(): string|null
    {
        return $this->container['last_charge'] ?? null;
    }

    /**
     * Sets last_charge
     * @param string|null $last_charge Loyalty merchant card last charge
     * @return $this
     */
    public function setLastCharge(?string $last_charge): static
    {
        $this->container['last_charge'] = $last_charge;

        return $this;
    }

    /**
     * Gets is_base_card
     * @return bool
     */
    public function getIsBaseCard(): bool|null
    {
        return $this->container['is_base_card'] ?? null;
    }

    /**
     * Sets is_base_card
     * @param bool|null $is_base_card Information whether loyalty merchant card is base card
     * @return $this
     */
    public function setIsBaseCard(?bool $is_base_card): static
    {
        $this->container['is_base_card'] = $is_base_card;

        return $this;
    }

    /**
     * Gets passcode
     * @return int
     */
    public function getPasscode(): int|null
    {
        return $this->container['passcode'] ?? null;
    }

    /**
     * Sets passcode
     * @param int|null $passcode Loyalty merchant card passcode
     * @return $this
     */
    public function setPasscode(?int $passcode): static
    {
        $this->container['passcode'] = $passcode;

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

