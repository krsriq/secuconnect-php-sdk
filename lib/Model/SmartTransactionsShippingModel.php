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
 * SmartTransactionsShippingModel
 *
 * @category Class
 * @description SmartTransactionsShippingModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsShippingModel implements ArrayAccess, ModelInterface, OneOfSmartTransactionsDeliveryOptionsModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsShippingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'type' => 'string',
        'shipped_at' => 'string',
        'shipped_by' => 'string',
        'tracking_code' => 'string',
        'invoice_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'type' => null,
        'shipped_at' => null,
        'shipped_by' => null,
        'tracking_code' => null,
        'invoice_number' => null
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
        'type' => 'type',
        'shipped_at' => 'shipped_at',
        'shipped_by' => 'shipped_by',
        'tracking_code' => 'tracking_code',
        'invoice_number' => 'invoice_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'shipped_at' => 'setShippedAt',
        'shipped_by' => 'setShippedBy',
        'tracking_code' => 'setTrackingCode',
        'invoice_number' => 'setInvoiceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'shipped_at' => 'getShippedAt',
        'shipped_by' => 'getShippedBy',
        'tracking_code' => 'getTrackingCode',
        'invoice_number' => 'getInvoiceNumber'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['shipped_at'] = $data['shipped_at'] ?? null;
        $this->container['shipped_by'] = $data['shipped_by'] ?? null;
        $this->container['tracking_code'] = $data['tracking_code'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
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
     * Gets type
     * @return string
     */
    public function getType(): string|null
    {
        return $this->container['type'] ?? null;
    }

    /**
     * Sets type
     * @param string|null $type Type of delivery option
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets shipped_at
     * @return string
     */
    public function getShippedAt(): string|null
    {
        return $this->container['shipped_at'] ?? null;
    }

    /**
     * Sets shipped_at
     * @param string|null $shipped_at Shipment Date
     * @return $this
     */
    public function setShippedAt(?string $shipped_at): static
    {
        $this->container['shipped_at'] = $shipped_at;

        return $this;
    }

    /**
     * Gets shipped_by
     * @return string
     */
    public function getShippedBy(): string|null
    {
        return $this->container['shipped_by'] ?? null;
    }

    /**
     * Sets shipped_by
     * @param string|null $shipped_by Parcel Provider
     * @return $this
     */
    public function setShippedBy(?string $shipped_by): static
    {
        $this->container['shipped_by'] = $shipped_by;

        return $this;
    }

    /**
     * Gets tracking_code
     * @return string
     */
    public function getTrackingCode(): string|null
    {
        return $this->container['tracking_code'] ?? null;
    }

    /**
     * Sets tracking_code
     * @param string|null $tracking_code Tracking Code
     * @return $this
     */
    public function setTrackingCode(?string $tracking_code): static
    {
        $this->container['tracking_code'] = $tracking_code;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber(): string|null
    {
        return $this->container['invoice_number'] ?? null;
    }

    /**
     * Sets invoice_number
     * @param string|null $invoice_number Invoice Number
     * @return $this
     */
    public function setInvoiceNumber(?string $invoice_number): static
    {
        $this->container['invoice_number'] = $invoice_number;

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

