<?php
/**
 * @noinspection PhpUnused
 * @noinspection DuplicatedCode
 * @noinspection PhpUnnecessaryLocalVariableInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @noinspection PhpPureAttributeCanBeAddedInspection
 */

namespace Secuconnect\Client\Model;
use InvalidArgumentException;
use Secuconnect\Client\ObjectSerializer;

/**
 * PrepaidItemsProductModel
 *
 * @category Class
 * @description PrepaidItemsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidItemsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PrepaidItemsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'retail_price' => 'int',
        'currency' => 'string',
        'description' => 'string',
        'logo' => 'string',
        'commission' => 'int',
        'vtc_id' => 'string',
        'itemgroup' => '\Secuconnect\Client\Model\ItemGroup',
        'stock_limit_max' => 'int',
        'stock_limit_min' => 'int',
        'taxable' => 'bool',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'retail_price' => null,
        'currency' => null,
        'description' => null,
        'logo' => null,
        'commission' => null,
        'vtc_id' => null,
        'itemgroup' => null,
        'stock_limit_max' => null,
        'stock_limit_min' => null,
        'taxable' => null,
        'type' => null
    ];

    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static array $attributeMap = [
        'retail_price' => 'retail_price',
        'currency' => 'currency',
        'description' => 'description',
        'logo' => 'logo',
        'commission' => 'commission',
        'vtc_id' => 'vtc_id',
        'itemgroup' => 'itemgroup',
        'stock_limit_max' => 'stock_limit_max',
        'stock_limit_min' => 'stock_limit_min',
        'taxable' => 'taxable',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'retail_price' => 'setRetailPrice',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'logo' => 'setLogo',
        'commission' => 'setCommission',
        'vtc_id' => 'setVtcId',
        'itemgroup' => 'setItemgroup',
        'stock_limit_max' => 'setStockLimitMax',
        'stock_limit_min' => 'setStockLimitMin',
        'taxable' => 'setTaxable',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'retail_price' => 'getRetailPrice',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'logo' => 'getLogo',
        'commission' => 'getCommission',
        'vtc_id' => 'getVtcId',
        'itemgroup' => 'getItemgroup',
        'stock_limit_max' => 'getStockLimitMax',
        'stock_limit_min' => 'getStockLimitMin',
        'taxable' => 'getTaxable',
        'type' => 'getType'
    ];

    public static function attributeMap(): array
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters(): array
    {
        return parent::setters() + self::$setters;
    }

    public static function getters(): array
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['retail_price'] = $data['retail_price'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['commission'] = $data['commission'] ?? null;
        $this->container['vtc_id'] = $data['vtc_id'] ?? null;
        $this->container['itemgroup'] = $data['itemgroup'] ?? null;
        $this->container['stock_limit_max'] = $data['stock_limit_max'] ?? null;
        $this->container['stock_limit_min'] = $data['stock_limit_min'] ?? null;
        $this->container['taxable'] = $data['taxable'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * Gets retail_price
     * @return int
     */
    public function getRetailPrice(): int
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     * @param int|null $retail_price Retail price
     * @return $this
     */
    public function setRetailPrice(?int $retail_price): static
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string|null $currency currency
     * @return $this
     */
    public function setCurrency(?string $currency): static
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string|null $description Description
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets logo
     * @return string
     */
    public function getLogo(): string
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param string|null $logo Logo
     * @return $this
     */
    public function setLogo(?string $logo): static
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets commission
     * @return int
     */
    public function getCommission(): int
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     * @param int|null $commission Commission
     * @return $this
     */
    public function setCommission(?int $commission): static
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets vtc_id
     * @return string
     */
    public function getVtcId(): string
    {
        return $this->container['vtc_id'];
    }

    /**
     * Sets vtc_id
     * @param string|null $vtc_id Vtc id
     * @return $this
     */
    public function setVtcId(?string $vtc_id): static
    {
        $this->container['vtc_id'] = $vtc_id;

        return $this;
    }

    /**
     * Gets itemgroup
     * @return \Secuconnect\Client\Model\ItemGroup
     */
    public function getItemgroup(): ItemGroup
    {
        return $this->container['itemgroup'];
    }

    /**
     * Sets itemgroup
     * @param \Secuconnect\Client\Model\ItemGroup|null $itemgroup itemgroup
     * @return $this
     */
    public function setItemgroup(?ItemGroup $itemgroup): static
    {
        $this->container['itemgroup'] = $itemgroup;

        return $this;
    }

    /**
     * Gets stock_limit_max
     * @return int
     */
    public function getStockLimitMax(): int
    {
        return $this->container['stock_limit_max'];
    }

    /**
     * Sets stock_limit_max
     * @param int|null $stock_limit_max Stock limit max
     * @return $this
     */
    public function setStockLimitMax(?int $stock_limit_max): static
    {
        $this->container['stock_limit_max'] = $stock_limit_max;

        return $this;
    }

    /**
     * Gets stock_limit_min
     * @return int
     */
    public function getStockLimitMin(): int
    {
        return $this->container['stock_limit_min'];
    }

    /**
     * Sets stock_limit_min
     * @param int|null $stock_limit_min Stock limit min
     * @return $this
     */
    public function setStockLimitMin(?int $stock_limit_min): static
    {
        $this->container['stock_limit_min'] = $stock_limit_min;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable(): bool
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool|null $taxable Taxable
     * @return $this
     */
    public function setTaxable(?bool $taxable): static
    {
        $this->container['taxable'] = $taxable;

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

