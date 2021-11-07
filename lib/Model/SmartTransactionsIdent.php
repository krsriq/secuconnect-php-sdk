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
 * SmartTransactionsIdent
 *
 * @category Class
 * @description SmartTransactionsIdent
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsIdent implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsIdent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'object' => 'string',
        'id' => 'string',
        'prefix' => 'string',
        'name' => 'string',
        'type' => 'string',
        'value' => 'string',
        'valid' => 'bool',
        'merchantcard' => '\Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'object' => null,
        'id' => 'id',
        'prefix' => null,
        'name' => null,
        'type' => null,
        'value' => null,
        'valid' => null,
        'merchantcard' => null
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
        'object' => 'object',
        'id' => 'id',
        'prefix' => 'prefix',
        'name' => 'name',
        'type' => 'type',
        'value' => 'value',
        'valid' => 'valid',
        'merchantcard' => 'merchantcard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'object' => 'setObject',
        'id' => 'setId',
        'prefix' => 'setPrefix',
        'name' => 'setName',
        'type' => 'setType',
        'value' => 'setValue',
        'valid' => 'setValid',
        'merchantcard' => 'setMerchantcard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'object' => 'getObject',
        'id' => 'getId',
        'prefix' => 'getPrefix',
        'name' => 'getName',
        'type' => 'getType',
        'value' => 'getValue',
        'valid' => 'getValid',
        'merchantcard' => 'getMerchantcard'
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
        $this->container['object'] = $data['object'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['prefix'] = $data['prefix'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['valid'] = $data['valid'] ?? null;
        $this->container['merchantcard'] = $data['merchantcard'] ?? null;
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
     * Gets object
     * @return string
     */
    public function getObject(): string
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string|null $object Object of smart transaction ident
     * @return $this
     */
    public function setObject(?string $object): static
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string|null $id Id of smart transaction ident
     * @return $this
     */
    public function setId(?string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string|null $prefix Prefix
     * @return $this
     */
    public function setPrefix(?string $prefix): static
    {
        $this->container['prefix'] = $prefix;

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
     * @param string|null $name Name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string|null $type Type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue(): string
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string|null $value Value
     * @return $this
     */
    public function setValue(?string $value): static
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets valid
     * @return bool
     */
    public function getValid(): bool
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     * @param bool|null $valid Valid
     * @return $this
     */
    public function setValid(?bool $valid): static
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets merchantcard
     * @return \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel
     */
    public function getMerchantcard(): LoyaltyMerchantcardsProductModel
    {
        return $this->container['merchantcard'];
    }

    /**
     * Sets merchantcard
     * @param \Secuconnect\Client\Model\LoyaltyMerchantcardsProductModel|null $merchantcard merchantcard
     * @return $this
     */
    public function setMerchantcard(?LoyaltyMerchantcardsProductModel $merchantcard): static
    {
        $this->container['merchantcard'] = $merchantcard;

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

