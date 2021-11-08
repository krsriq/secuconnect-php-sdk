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
 * SmartTransactionsBasketProduct
 *
 * @category Class
 * @description SmartTransactionsBasketProduct
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsBasketProduct implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsBasketProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'int',
        'parent' => 'int',
        'item_type' => 'string',
        'desc' => 'string',
        'article_number' => 'string',
        'serial_number' => 'string',
        'ean' => 'string',
        'quantity' => 'int',
        'price_one' => 'int',
        'sum' => 'int',
        'tax' => 'int',
        'reference_id' => 'string',
        'contract_id' => 'string',
        'group' => '\Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]',
        'sub_basket' => '\Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'parent' => null,
        'item_type' => null,
        'desc' => null,
        'article_number' => null,
        'serial_number' => null,
        'ean' => null,
        'quantity' => null,
        'price_one' => null,
        'sum' => null,
        'tax' => null,
        'reference_id' => null,
        'contract_id' => null,
        'group' => null,
        'sub_basket' => null
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
        'parent' => 'parent',
        'item_type' => 'item_type',
        'desc' => 'desc',
        'article_number' => 'articleNumber',
        'serial_number' => 'serialNumber',
        'ean' => 'ean',
        'quantity' => 'quantity',
        'price_one' => 'priceOne',
        'sum' => 'sum',
        'tax' => 'tax',
        'reference_id' => 'reference_id',
        'contract_id' => 'contract_id',
        'group' => 'group',
        'sub_basket' => 'sub_basket'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'parent' => 'setParent',
        'item_type' => 'setItemType',
        'desc' => 'setDesc',
        'article_number' => 'setArticleNumber',
        'serial_number' => 'setSerialNumber',
        'ean' => 'setEan',
        'quantity' => 'setQuantity',
        'price_one' => 'setPriceOne',
        'sum' => 'setSum',
        'tax' => 'setTax',
        'reference_id' => 'setReferenceId',
        'contract_id' => 'setContractId',
        'group' => 'setGroup',
        'sub_basket' => 'setSubBasket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'parent' => 'getParent',
        'item_type' => 'getItemType',
        'desc' => 'getDesc',
        'article_number' => 'getArticleNumber',
        'serial_number' => 'getSerialNumber',
        'ean' => 'getEan',
        'quantity' => 'getQuantity',
        'price_one' => 'getPriceOne',
        'sum' => 'getSum',
        'tax' => 'getTax',
        'reference_id' => 'getReferenceId',
        'contract_id' => 'getContractId',
        'group' => 'getGroup',
        'sub_basket' => 'getSubBasket'
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
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['item_type'] = $data['item_type'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['article_number'] = $data['article_number'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['price_one'] = $data['price_one'] ?? null;
        $this->container['sum'] = $data['sum'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['contract_id'] = $data['contract_id'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['sub_basket'] = $data['sub_basket'] ?? null;
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
     * @param int|null $id Product id
     * @return $this
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent
     * @return int
     */
    public function getParent(): int|null
    {
        return $this->container['parent'] ?? null;
    }

    /**
     * Sets parent
     * @param int|null $parent Parent
     * @return $this
     */
    public function setParent(?int $parent): static
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets item_type
     * @return string
     */
    public function getItemType(): string|null
    {
        return $this->container['item_type'] ?? null;
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
     * Gets desc
     * @return string
     */
    public function getDesc(): string|null
    {
        return $this->container['desc'] ?? null;
    }

    /**
     * Sets desc
     * @param string|null $desc Desc
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
     * @param string|null $article_number Article number
     * @return $this
     */
    public function setArticleNumber(?string $article_number): static
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets serial_number
     * @return string
     */
    public function getSerialNumber(): string|null
    {
        return $this->container['serial_number'] ?? null;
    }

    /**
     * Sets serial_number
     * @param string|null $serial_number The serialnumber of the scanned posa card
     * @return $this
     */
    public function setSerialNumber(?string $serial_number): static
    {
        $this->container['serial_number'] = $serial_number;

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
     * Gets quantity
     * @return int
     */
    public function getQuantity(): int|null
    {
        return $this->container['quantity'] ?? null;
    }

    /**
     * Sets quantity
     * @param int|null $quantity Quantity
     * @return $this
     */
    public function setQuantity(?int $quantity): static
    {
        $this->container['quantity'] = $quantity;

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
     * Gets sum
     * @return int
     */
    public function getSum(): int|null
    {
        return $this->container['sum'] ?? null;
    }

    /**
     * Sets sum
     * @param int|null $sum it is the value of the sum of the product with all items in sub_basket
     * @return $this
     */
    public function setSum(?int $sum): static
    {
        $this->container['sum'] = $sum;

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
     * Gets reference_id
     * @return string
     */
    public function getReferenceId(): string|null
    {
        return $this->container['reference_id'] ?? null;
    }

    /**
     * Sets reference_id
     * @param string|null $reference_id The reference_id must be unique, it's a Reference for to the reference_id of SmartTransactionsSubBasketProduct [example: SmartTransactionsBasketProduct->reference_id is 1000 then all SmartTransactionsSubBasketProduct must have unique reference_id like 1000.1, 1000.2 etc.]
     * @return $this
     */
    public function setReferenceId(?string $reference_id): static
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return string
     */
    public function getContractId(): string|null
    {
        return $this->container['contract_id'] ?? null;
    }

    /**
     * Sets contract_id
     * @param string|null $contract_id contract id
     * @return $this
     */
    public function setContractId(?string $contract_id): static
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets group
     * @return \Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]
     */
    public function getGroup(): array|null
    {
        return $this->container['group'] ?? null;
    }

    /**
     * Sets group
     * @param \Secuconnect\Client\Model\SmartTransactionsBasketProductGroup[]|null $group Group
     * @return $this
     */
    public function setGroup(?array $group): static
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets sub_basket
     * @return \Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]
     */
    public function getSubBasket(): array|null
    {
        return $this->container['sub_basket'] ?? null;
    }

    /**
     * Sets sub_basket
     * @param \Secuconnect\Client\Model\SmartTransactionsSubBasketProduct[]|null $sub_basket sub basket Product
     * @return $this
     */
    public function setSubBasket(?array $sub_basket): static
    {
        $this->container['sub_basket'] = $sub_basket;

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

