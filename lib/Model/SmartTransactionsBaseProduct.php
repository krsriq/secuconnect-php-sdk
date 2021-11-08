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
 * SmartTransactionsBaseProduct
 *
 * @category Class
 * @description SmartTransactionsBaseProduct
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsBaseProduct implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsBaseProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'int',
        'tax' => 'int',
        'price_one' => 'int',
        'quantity' => 'int',
        'desc' => 'string',
        'article_number' => 'string',
        'ean' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'tax' => null,
        'price_one' => null,
        'quantity' => null,
        'desc' => null,
        'article_number' => null,
        'ean' => null
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
        'id' => 'id',
        'tax' => 'tax',
        'price_one' => 'priceOne',
        'quantity' => 'quantity',
        'desc' => 'desc',
        'article_number' => 'articleNumber',
        'ean' => 'ean'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'tax' => 'setTax',
        'price_one' => 'setPriceOne',
        'quantity' => 'setQuantity',
        'desc' => 'setDesc',
        'article_number' => 'setArticleNumber',
        'ean' => 'setEan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'tax' => 'getTax',
        'price_one' => 'getPriceOne',
        'quantity' => 'getQuantity',
        'desc' => 'getDesc',
        'article_number' => 'getArticleNumber',
        'ean' => 'getEan'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['price_one'] = $data['price_one'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['article_number'] = $data['article_number'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
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
     * Gets id
     * @return int
     */
    public function getId(): int|null
    {
        return $this->container['id'] ?? null;
    }

    /**
     * Sets id
     * @param int|null $id Bonus Product ID
     * @return $this
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tax
     * @return int
     */
    public function getTax(): int|null
    {
        return $this->container['tax'] ?? null;
    }

    /**
     * Sets tax
     * @param int|null $tax tax
     * @return $this
     */
    public function setTax(?int $tax): static
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets price_one
     * @return int
     */
    public function getPriceOne(): int|null
    {
        return $this->container['price_one'] ?? null;
    }

    /**
     * Sets price_one
     * @param int|null $price_one price_one
     * @return $this
     */
    public function setPriceOne(?int $price_one): static
    {
        $this->container['price_one'] = $price_one;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity(): int|null
    {
        return $this->container['quantity'] ?? null;
    }

    /**
     * Sets quantity
     * @param int|null $quantity amount of bonus products
     * @return $this
     */
    public function setQuantity(?int $quantity): static
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets desc
     * @return string
     */
    public function getDesc(): string|null
    {
        return $this->container['desc'] ?? null;
    }

    /**
     * Sets desc
     * @param string|null $desc description
     * @return $this
     */
    public function setDesc(?string $desc): static
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets article_number
     * @return string
     */
    public function getArticleNumber(): string|null
    {
        return $this->container['article_number'] ?? null;
    }

    /**
     * Sets article_number
     * @param string|null $article_number article Number
     * @return $this
     */
    public function setArticleNumber(?string $article_number): static
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan(): string|null
    {
        return $this->container['ean'] ?? null;
    }

    /**
     * Sets ean
     * @param string|null $ean ean
     * @return $this
     */
    public function setEan(?string $ean): static
    {
        $this->container['ean'] = $ean;

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

