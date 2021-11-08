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
 * LoyaltyMerchantcardsDTOTransaction
 *
 * @category Class
 * @description LoyaltyMerchantcardsDTOTransaction
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTOTransaction implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsDTOTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'action' => 'string',
        'terminal_id' => 'string',
        'amount' => 'int',
        'tid' => 'string',
        'store' => 'string',
        'cardnumber' => 'int',
        'bonus_amount' => 'int',
        'amount_split_allowed' => 'string',
        'merchant_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'action' => null,
        'terminal_id' => null,
        'amount' => null,
        'tid' => null,
        'store' => null,
        'cardnumber' => null,
        'bonus_amount' => null,
        'amount_split_allowed' => null,
        'merchant_id' => null
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
        'action' => 'action',
        'terminal_id' => 'terminal_id',
        'amount' => 'amount',
        'tid' => 'tid',
        'store' => 'store',
        'cardnumber' => 'cardnumber',
        'bonus_amount' => 'bonus_amount',
        'amount_split_allowed' => 'amount_split_allowed',
        'merchant_id' => 'merchant_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'action' => 'setAction',
        'terminal_id' => 'setTerminalId',
        'amount' => 'setAmount',
        'tid' => 'setTid',
        'store' => 'setStore',
        'cardnumber' => 'setCardnumber',
        'bonus_amount' => 'setBonusAmount',
        'amount_split_allowed' => 'setAmountSplitAllowed',
        'merchant_id' => 'setMerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'action' => 'getAction',
        'terminal_id' => 'getTerminalId',
        'amount' => 'getAmount',
        'tid' => 'getTid',
        'store' => 'getStore',
        'cardnumber' => 'getCardnumber',
        'bonus_amount' => 'getBonusAmount',
        'amount_split_allowed' => 'getAmountSplitAllowed',
        'merchant_id' => 'getMerchantId'
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['terminal_id'] = $data['terminal_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['tid'] = $data['tid'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['cardnumber'] = $data['cardnumber'] ?? null;
        $this->container['bonus_amount'] = $data['bonus_amount'] ?? null;
        $this->container['amount_split_allowed'] = $data['amount_split_allowed'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
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
     * Gets action
     * @return string
     */
    public function getAction(): string|null
    {
        return $this->container['action'] ?? null;
    }

    /**
     * Sets action
     * @param string|null $action Action
     * @return $this
     */
    public function setAction(?string $action): static
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets terminal_id
     * @return string
     */
    public function getTerminalId(): string|null
    {
        return $this->container['terminal_id'] ?? null;
    }

    /**
     * Sets terminal_id
     * @param string|null $terminal_id Terminal id
     * @return $this
     */
    public function setTerminalId(?string $terminal_id): static
    {
        $this->container['terminal_id'] = $terminal_id;

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
     * Gets tid
     * @return string
     */
    public function getTid(): string|null
    {
        return $this->container['tid'] ?? null;
    }

    /**
     * Sets tid
     * @param string|null $tid Tid
     * @return $this
     */
    public function setTid(?string $tid): static
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets store
     * @return string
     */
    public function getStore(): string|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param string|null $store Store id
     * @return $this
     */
    public function setStore(?string $store): static
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets cardnumber
     * @return int
     */
    public function getCardnumber(): int|null
    {
        return $this->container['cardnumber'] ?? null;
    }

    /**
     * Sets cardnumber
     * @param int|null $cardnumber Card number
     * @return $this
     */
    public function setCardnumber(?int $cardnumber): static
    {
        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets bonus_amount
     * @return int
     */
    public function getBonusAmount(): int|null
    {
        return $this->container['bonus_amount'] ?? null;
    }

    /**
     * Sets bonus_amount
     * @param int|null $bonus_amount Bonus amount
     * @return $this
     */
    public function setBonusAmount(?int $bonus_amount): static
    {
        $this->container['bonus_amount'] = $bonus_amount;

        return $this;
    }

    /**
     * Gets amount_split_allowed
     * @return string
     */
    public function getAmountSplitAllowed(): string|null
    {
        return $this->container['amount_split_allowed'] ?? null;
    }

    /**
     * Sets amount_split_allowed
     * @param string|null $amount_split_allowed Amount split allowed
     * @return $this
     */
    public function setAmountSplitAllowed(?string $amount_split_allowed): static
    {
        $this->container['amount_split_allowed'] = $amount_split_allowed;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId(): string|null
    {
        return $this->container['merchant_id'] ?? null;
    }

    /**
     * Sets merchant_id
     * @param string|null $merchant_id Merchant id
     * @return $this
     */
    public function setMerchantId(?string $merchant_id): static
    {
        $this->container['merchant_id'] = $merchant_id;

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

