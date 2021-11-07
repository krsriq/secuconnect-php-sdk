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
 * SecupayTransactionSetShippingInformationDTO
 *
 * @category Class
 * @description SecupayTransactionSetShippingInformationDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionSetShippingInformationDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionSetShippingInformationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'carrier' => 'string',
        'tracking_id' => 'string',
        'invoice_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'carrier' => null,
        'tracking_id' => null,
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
        'carrier' => 'carrier',
        'tracking_id' => 'tracking_id',
        'invoice_number' => 'invoice_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'carrier' => 'setCarrier',
        'tracking_id' => 'setTrackingId',
        'invoice_number' => 'setInvoiceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'carrier' => 'getCarrier',
        'tracking_id' => 'getTrackingId',
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
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
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
     * Gets carrier
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     * @param string|null $carrier Shipping provider name
     * @return $this
     */
    public function setCarrier(?string $carrier): static
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets tracking_id
     * @return string
     */
    public function getTrackingId(): string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     * @param string|null $tracking_id Tracking-ID
     * @return $this
     */
    public function setTrackingId(?string $tracking_id): static
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string|null $invoice_number Merchants invoice number
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

