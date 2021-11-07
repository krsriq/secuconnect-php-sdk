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
 * LoyaltyCardgroupsDTO
 *
 * @category Class
 * @description LoyaltyCardgroupsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCardgroupsDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyCardgroupsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'display_name' => 'string',
        'display_name_raw' => 'string',
        'stock_warn_limit' => 'string',
        'picture' => 'string',
        'merchant' => '\Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'display_name' => null,
        'display_name_raw' => null,
        'stock_warn_limit' => null,
        'picture' => null,
        'merchant' => null
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
        'display_name' => 'display_name',
        'display_name_raw' => 'display_name_raw',
        'stock_warn_limit' => 'stock_warn_limit',
        'picture' => 'picture',
        'merchant' => 'merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'display_name' => 'setDisplayName',
        'display_name_raw' => 'setDisplayNameRaw',
        'stock_warn_limit' => 'setStockWarnLimit',
        'picture' => 'setPicture',
        'merchant' => 'setMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'display_name' => 'getDisplayName',
        'display_name_raw' => 'getDisplayNameRaw',
        'stock_warn_limit' => 'getStockWarnLimit',
        'picture' => 'getPicture',
        'merchant' => 'getMerchant'
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['display_name_raw'] = $data['display_name_raw'] ?? null;
        $this->container['stock_warn_limit'] = $data['stock_warn_limit'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
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
     * Gets display_name
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string|null $display_name Display name
     * @return $this
     */
    public function setDisplayName(?string $display_name): static
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_name_raw
     * @return string
     */
    public function getDisplayNameRaw(): string
    {
        return $this->container['display_name_raw'];
    }

    /**
     * Sets display_name_raw
     * @param string|null $display_name_raw Display name raw
     * @return $this
     */
    public function setDisplayNameRaw(?string $display_name_raw): static
    {
        $this->container['display_name_raw'] = $display_name_raw;

        return $this;
    }

    /**
     * Gets stock_warn_limit
     * @return string
     */
    public function getStockWarnLimit(): string
    {
        return $this->container['stock_warn_limit'];
    }

    /**
     * Sets stock_warn_limit
     * @param string|null $stock_warn_limit Stock warn limit
     * @return $this
     */
    public function setStockWarnLimit(?string $stock_warn_limit): static
    {
        $this->container['stock_warn_limit'] = $stock_warn_limit;

        return $this;
    }

    /**
     * Gets picture
     * @return string
     */
    public function getPicture(): string
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string|null $picture Picture
     * @return $this
     */
    public function setPicture(?string $picture): static
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant
     */
    public function getMerchant(): LoyaltyCardgroupsDTOMerchant
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\LoyaltyCardgroupsDTOMerchant|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?LoyaltyCardgroupsDTOMerchant $merchant): static
    {
        $this->container['merchant'] = $merchant;

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

