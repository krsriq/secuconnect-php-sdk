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
 * LoyaltyMerchantcardsValidateMerchantCard
 *
 * @category Class
 * @description LoyaltyMerchantcardsValidateMerchantCard
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsValidateMerchantCard implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsValidateMerchantCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'is_valid' => 'bool',
        'has_passcode' => 'bool',
        'is_locked' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'is_valid' => null,
        'has_passcode' => null,
        'is_locked' => null
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
        'is_valid' => 'isValid',
        'has_passcode' => 'hasPasscode',
        'is_locked' => 'isLocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'is_valid' => 'setIsValid',
        'has_passcode' => 'setHasPasscode',
        'is_locked' => 'setIsLocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'is_valid' => 'getIsValid',
        'has_passcode' => 'getHasPasscode',
        'is_locked' => 'getIsLocked'
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
        $this->container['is_valid'] = $data['is_valid'] ?? null;
        $this->container['has_passcode'] = $data['has_passcode'] ?? null;
        $this->container['is_locked'] = $data['is_locked'] ?? null;
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
     * Gets is_valid
     * @return bool
     */
    public function getIsValid(): bool
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     * @param bool|null $is_valid Result has true or false value
     * @return $this
     */
    public function setIsValid(?bool $is_valid): static
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets has_passcode
     * @return bool
     */
    public function getHasPasscode(): bool
    {
        return $this->container['has_passcode'];
    }

    /**
     * Sets has_passcode
     * @param bool|null $has_passcode Result has true or false value
     * @return $this
     */
    public function setHasPasscode(?bool $has_passcode): static
    {
        $this->container['has_passcode'] = $has_passcode;

        return $this;
    }

    /**
     * Gets is_locked
     * @return bool
     */
    public function getIsLocked(): bool
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     * @param bool|null $is_locked Result has true or false value
     * @return $this
     */
    public function setIsLocked(?bool $is_locked): static
    {
        $this->container['is_locked'] = $is_locked;

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

