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
 * SecupayBasketItem
 *
 * @category Class
 * @description Item describing single position in basket in transaction
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayBasketItem extends SecupayBaseBasketItem
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayBasketItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'sub_basket' => '\Secuconnect\Client\Model\SecupayBasketItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'sub_basket' => null
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
        'sub_basket' => 'sub_basket'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'sub_basket' => 'setSubBasket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'sub_basket' => 'getSubBasket'
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

        $this->container['sub_basket'] = $data['sub_basket'] ?? null;
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
     * Gets sub_basket
     * @return \Secuconnect\Client\Model\SecupayBasketItem[]
     */
    public function getSubBasket(): array|null
    {
        return $this->container['sub_basket'] ?? null;
    }

    /**
     * Sets sub_basket
     * @param \Secuconnect\Client\Model\SecupayBasketItem[]|null $sub_basket Mixed-Basket: All basket items for one merchant.
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

