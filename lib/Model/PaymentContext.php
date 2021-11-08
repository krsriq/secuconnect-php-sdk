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
 * PaymentContext
 *
 * @category Class
 * @description PaymentContext
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContext implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'auto_capture' => 'bool',
        'payment_methods' => 'string[]',
        'merchant_initiated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'auto_capture' => null,
        'payment_methods' => null,
        'merchant_initiated' => null
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
        'auto_capture' => 'auto_capture',
        'payment_methods' => 'payment_methods',
        'merchant_initiated' => 'merchant_initiated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'auto_capture' => 'setAutoCapture',
        'payment_methods' => 'setPaymentMethods',
        'merchant_initiated' => 'setMerchantInitiated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'auto_capture' => 'getAutoCapture',
        'payment_methods' => 'getPaymentMethods',
        'merchant_initiated' => 'getMerchantInitiated'
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
        $this->container['auto_capture'] = $data['auto_capture'] ?? false;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['merchant_initiated'] = $data['merchant_initiated'] ?? false;
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
     * Gets auto_capture
     * @return bool
     */
    public function getAutoCapture(): bool|null
    {
        return $this->container['auto_capture'] ?? null;
    }

    /**
     * Sets auto_capture
     * @param bool|null $auto_capture auto capture the smart transaction
     * @return $this
     */
    public function setAutoCapture(?bool $auto_capture): static
    {
        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets payment_methods
     * @return string[]
     */
    public function getPaymentMethods(): array|null
    {
        return $this->container['payment_methods'] ?? null;
    }

    /**
     * Sets payment_methods
     * @param string[]|null $payment_methods payment_methods
     * @return $this
     */
    public function setPaymentMethods(?array $payment_methods): static
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets merchant_initiated
     * @return bool
     */
    public function getMerchantInitiated(): bool|null
    {
        return $this->container['merchant_initiated'] ?? null;
    }

    /**
     * Sets merchant_initiated
     * @param bool|null $merchant_initiated is this smart transaction created automatically by the merchant (process without customer interaction)
     * @return $this
     */
    public function setMerchantInitiated(?bool $merchant_initiated): static
    {
        $this->container['merchant_initiated'] = $merchant_initiated;

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

