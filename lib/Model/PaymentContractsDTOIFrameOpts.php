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
 * PaymentContractsDTOIFrameOpts
 *
 * @category Class
 * @description PaymentContractsDTOIFrameOpts
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTOIFrameOpts implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContractsDTOIFrameOpts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'show_basket' => 'bool',
        'basket_title' => 'string',
        'submit_button_title' => 'string',
        'logo_base64' => 'string',
        'cession' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'show_basket' => null,
        'basket_title' => null,
        'submit_button_title' => null,
        'logo_base64' => null,
        'cession' => null
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
        'show_basket' => 'show_basket',
        'basket_title' => 'basket_title',
        'submit_button_title' => 'submit_button_title',
        'logo_base64' => 'logo_base64',
        'cession' => 'cession'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'show_basket' => 'setShowBasket',
        'basket_title' => 'setBasketTitle',
        'submit_button_title' => 'setSubmitButtonTitle',
        'logo_base64' => 'setLogoBase64',
        'cession' => 'setCession'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'show_basket' => 'getShowBasket',
        'basket_title' => 'getBasketTitle',
        'submit_button_title' => 'getSubmitButtonTitle',
        'logo_base64' => 'getLogoBase64',
        'cession' => 'getCession'
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
        $this->container['show_basket'] = $data['show_basket'] ?? null;
        $this->container['basket_title'] = $data['basket_title'] ?? null;
        $this->container['submit_button_title'] = $data['submit_button_title'] ?? null;
        $this->container['logo_base64'] = $data['logo_base64'] ?? null;
        $this->container['cession'] = $data['cession'] ?? 'personal';
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
     * Gets show_basket
     * @return bool
     */
    public function getShowBasket(): bool
    {
        return $this->container['show_basket'];
    }

    /**
     * Sets show_basket
     * @param bool|null $show_basket Display the basket items to the customer during the checkout
     * @return $this
     */
    public function setShowBasket(?bool $show_basket): static
    {
        $this->container['show_basket'] = $show_basket;

        return $this;
    }

    /**
     * Gets basket_title
     * @return string
     */
    public function getBasketTitle(): string
    {
        return $this->container['basket_title'];
    }

    /**
     * Sets basket_title
     * @param string|null $basket_title Default headline of the checkout page
     * @return $this
     */
    public function setBasketTitle(?string $basket_title): static
    {
        $this->container['basket_title'] = $basket_title;

        return $this;
    }

    /**
     * Gets submit_button_title
     * @return string
     */
    public function getSubmitButtonTitle(): string
    {
        return $this->container['submit_button_title'];
    }

    /**
     * Sets submit_button_title
     * @param string|null $submit_button_title Default naming of the Submit-Button
     * @return $this
     */
    public function setSubmitButtonTitle(?string $submit_button_title): static
    {
        $this->container['submit_button_title'] = $submit_button_title;

        return $this;
    }

    /**
     * Gets logo_base64
     * @return string
     */
    public function getLogoBase64(): string
    {
        return $this->container['logo_base64'];
    }

    /**
     * Sets logo_base64
     * @param string|null $logo_base64 Logo base64-enconded
     * @return $this
     */
    public function setLogoBase64(?string $logo_base64): static
    {
        $this->container['logo_base64'] = $logo_base64;

        return $this;
    }

    /**
     * Gets cession
     * @return string
     */
    public function getCession(): string
    {
        return $this->container['cession'];
    }

    /**
     * Sets cession
     * @param string|null $cession Cession ('formal', 'personal')
     * @return $this
     */
    public function setCession(?string $cession): static
    {
        $this->container['cession'] = $cession;

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

