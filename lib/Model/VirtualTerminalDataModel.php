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
 * VirtualTerminalDataModel
 *
 * @category Class
 * @description VirtualTerminalDataModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualTerminalDataModel implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'VirtualTerminalDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'store' => 'object',
        'tid' => 'string',
        'actions' => 'string[]',
        'gift_terminal' => 'int',
        'amount_split_enabled' => 'int',
        'disabled' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'store' => null,
        'tid' => null,
        'actions' => null,
        'gift_terminal' => null,
        'amount_split_enabled' => null,
        'disabled' => null
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
        'store' => 'store',
        'tid' => 'tid',
        'actions' => 'actions',
        'gift_terminal' => 'gift_terminal',
        'amount_split_enabled' => 'amount_split_enabled',
        'disabled' => 'disabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'store' => 'setStore',
        'tid' => 'setTid',
        'actions' => 'setActions',
        'gift_terminal' => 'setGiftTerminal',
        'amount_split_enabled' => 'setAmountSplitEnabled',
        'disabled' => 'setDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'store' => 'getStore',
        'tid' => 'getTid',
        'actions' => 'getActions',
        'gift_terminal' => 'getGiftTerminal',
        'amount_split_enabled' => 'getAmountSplitEnabled',
        'disabled' => 'getDisabled'
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
        $this->container['store'] = $data['store'] ?? null;
        $this->container['tid'] = $data['tid'] ?? null;
        $this->container['actions'] = $data['actions'] ?? null;
        $this->container['gift_terminal'] = $data['gift_terminal'] ?? null;
        $this->container['amount_split_enabled'] = $data['amount_split_enabled'] ?? null;
        $this->container['disabled'] = $data['disabled'] ?? null;
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
     * Gets store
     * @return object
     */
    public function getStore(): object|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param object|null $store Store
     * @return $this
     */
    public function setStore(?object $store): static
    {
        $this->container['store'] = $store;

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
     * @param string|null $tid Terminal id
     * @return $this
     */
    public function setTid(?string $tid): static
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets actions
     * @return string[]
     */
    public function getActions(): array|null
    {
        return $this->container['actions'] ?? null;
    }

    /**
     * Sets actions
     * @param string[]|null $actions Actions
     * @return $this
     */
    public function setActions(?array $actions): static
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets gift_terminal
     * @return int
     */
    public function getGiftTerminal(): int|null
    {
        return $this->container['gift_terminal'] ?? null;
    }

    /**
     * Sets gift_terminal
     * @param int|null $gift_terminal Gift terminal
     * @return $this
     */
    public function setGiftTerminal(?int $gift_terminal): static
    {
        $this->container['gift_terminal'] = $gift_terminal;

        return $this;
    }

    /**
     * Gets amount_split_enabled
     * @return int
     */
    public function getAmountSplitEnabled(): int|null
    {
        return $this->container['amount_split_enabled'] ?? null;
    }

    /**
     * Sets amount_split_enabled
     * @param int|null $amount_split_enabled Amount split enabled
     * @return $this
     */
    public function setAmountSplitEnabled(?int $amount_split_enabled): static
    {
        $this->container['amount_split_enabled'] = $amount_split_enabled;

        return $this;
    }

    /**
     * Gets disabled
     * @return int
     */
    public function getDisabled(): int|null
    {
        return $this->container['disabled'] ?? null;
    }

    /**
     * Sets disabled
     * @param int|null $disabled Disabled
     * @return $this
     */
    public function setDisabled(?int $disabled): static
    {
        $this->container['disabled'] = $disabled;

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

