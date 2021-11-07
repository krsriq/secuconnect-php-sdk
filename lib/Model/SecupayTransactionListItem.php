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
 * SecupayTransactionListItem
 *
 * @category Class
 * @description SecupayTransactionListItem
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionListItem implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'item_type' => 'string',
        'reference_id' => 'string',
        'name' => 'string',
        'transaction_hash' => 'string',
        'transaction_id' => 'string',
        'container_id' => 'string',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'item_type' => null,
        'reference_id' => null,
        'name' => null,
        'transaction_hash' => null,
        'transaction_id' => null,
        'container_id' => null,
        'total' => null
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
        'item_type' => 'item_type',
        'reference_id' => 'reference_id',
        'name' => 'name',
        'transaction_hash' => 'transaction_hash',
        'transaction_id' => 'transaction_id',
        'container_id' => 'container_id',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'item_type' => 'setItemType',
        'reference_id' => 'setReferenceId',
        'name' => 'setName',
        'transaction_hash' => 'setTransactionHash',
        'transaction_id' => 'setTransactionId',
        'container_id' => 'setContainerId',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'item_type' => 'getItemType',
        'reference_id' => 'getReferenceId',
        'name' => 'getName',
        'transaction_hash' => 'getTransactionHash',
        'transaction_id' => 'getTransactionId',
        'container_id' => 'getContainerId',
        'total' => 'getTotal'
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
        $this->container['item_type'] = $data['item_type'] ?? 'transaction_payout';
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['container_id'] = $data['container_id'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets item_type
     * @return string
     */
    public function getItemType(): string
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     * @param string|null $item_type Category of item
     * @return $this
     */
    public function setItemType(?string $item_type): static
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId(): string
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string|null $reference_id Reference id - must be unique for the entire basket
     * @return $this
     */
    public function setReferenceId(?string $reference_id): static
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string|null $name Item name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets transaction_hash
     * @return string
     */
    public function getTransactionHash(): string
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     * @param string|null $transaction_hash Id of transaction
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash): static
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param string|null $transaction_id Id of transaction
     * @return $this
     */
    public function setTransactionId(?string $transaction_id): static
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets container_id
     * @return string
     */
    public function getContainerId(): string
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     * @param string|null $container_id Payment Container ID
     * @return $this
     */
    public function setContainerId(?string $container_id): static
    {
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal(): int
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int|null $total total
     * @return $this
     */
    public function setTotal(?int $total): static
    {
        $this->container['total'] = $total;

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

