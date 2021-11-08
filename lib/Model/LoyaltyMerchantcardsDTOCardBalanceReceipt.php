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
 * LoyaltyMerchantcardsDTOCardBalanceReceipt
 *
 * @category Class
 * @description LoyaltyMerchantcardsDTOCardBalanceReceipt
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsDTOCardBalanceReceipt implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsDTOCardBalanceReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'cardnumber' => 'int',
        'terminal_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'cardnumber' => null,
        'terminal_id' => null
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
        'cardnumber' => 'cardnumber',
        'terminal_id' => 'terminal_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'cardnumber' => 'setCardnumber',
        'terminal_id' => 'setTerminalId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'cardnumber' => 'getCardnumber',
        'terminal_id' => 'getTerminalId'
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
        $this->container['cardnumber'] = $data['cardnumber'] ?? null;
        $this->container['terminal_id'] = $data['terminal_id'] ?? null;
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
     * Gets cardnumber
     * @return int
     */
    public function getCardnumber(): int|null
    {
        return $this->container['cardnumber'] ?? null;
    }

    /**
     * Sets cardnumber
     * @param int|null $cardnumber Loyalty Card number
     * @return $this
     */
    public function setCardnumber(?int $cardnumber): static
    {
        $this->container['cardnumber'] = $cardnumber;

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

