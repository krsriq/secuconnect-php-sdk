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
 * LoyaltyMerchantcardsDTO
 *
 * @category Class
 * @description LoyaltyMerchantcardsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'merchant' => 'string',
        'card' => 'string',
        'payment_container' => 'string',
        'created_by_merchant' => 'bool',
        'used_by_merchant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'merchant' => null,
        'card' => null,
        'payment_container' => null,
        'created_by_merchant' => null,
        'used_by_merchant' => null
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
        'card' => 'card',
        'payment_container' => 'payment_container',
        'created_by_merchant' => 'created_by_merchant',
        'used_by_merchant' => 'used_by_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'merchant' => 'setMerchant',
        'card' => 'setCard',
        'payment_container' => 'setPaymentContainer',
        'created_by_merchant' => 'setCreatedByMerchant',
        'used_by_merchant' => 'setUsedByMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'merchant' => 'getMerchant',
        'card' => 'getCard',
        'payment_container' => 'getPaymentContainer',
        'created_by_merchant' => 'getCreatedByMerchant',
        'used_by_merchant' => 'getUsedByMerchant'
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
        $this->container['card'] = $data['card'] ?? null;
        $this->container['payment_container'] = $data['payment_container'] ?? null;
        $this->container['created_by_merchant'] = $data['created_by_merchant'] ?? null;
        $this->container['used_by_merchant'] = $data['used_by_merchant'] ?? null;
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
     * @param string|null $merchant General merchant id
     * @return $this
     */
    public function setMerchant(?string $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets card
     * @return string
     */
    public function getCard(): string
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param string|null $card Loyalty card id
     * @return $this
     */
    public function setCard(?string $card): static
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets payment_container
     * @return string
     */
    public function getPaymentContainer(): string
    {
        return $this->container['payment_container'];
    }

    /**
     * Sets payment_container
     * @param string|null $payment_container Loyalty payment container id
     * @return $this
     */
    public function setPaymentContainer(?string $payment_container): static
    {
        $this->container['payment_container'] = $payment_container;

        return $this;
    }

    /**
     * Gets created_by_merchant
     * @return bool
     */
    public function getCreatedByMerchant(): bool
    {
        return $this->container['created_by_merchant'];
    }

    /**
     * Sets created_by_merchant
     * @param bool|null $created_by_merchant Created by general merchant or not
     * @return $this
     */
    public function setCreatedByMerchant(?bool $created_by_merchant): static
    {
        $this->container['created_by_merchant'] = $created_by_merchant;

        return $this;
    }

    /**
     * Gets used_by_merchant
     * @return bool
     */
    public function getUsedByMerchant(): bool
    {
        return $this->container['used_by_merchant'];
    }

    /**
     * Sets used_by_merchant
     * @param bool|null $used_by_merchant Used by general merchant or not
     * @return $this
     */
    public function setUsedByMerchant(?bool $used_by_merchant): static
    {
        $this->container['used_by_merchant'] = $used_by_merchant;

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

