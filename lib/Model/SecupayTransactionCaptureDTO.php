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
 * SecupayTransactionCaptureDTO
 *
 * @category Class
 * @description SecupayTransactionCaptureDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionCaptureDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionCaptureDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'shipping_information' => '\Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'contract' => null,
        'shipping_information' => null
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
        'contract' => 'contract',
        'shipping_information' => 'shipping_information'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'contract' => 'setContract',
        'shipping_information' => 'setShippingInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'contract' => 'getContract',
        'shipping_information' => 'getShippingInformation'
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
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['shipping_information'] = $data['shipping_information'] ?? null;
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
     * Gets contract
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function getContract(): PaymentContractsProductModel|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel|null $contract contract
     * @return $this
     */
    public function setContract(?PaymentContractsProductModel $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets shipping_information
     * @return \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO
     */
    public function getShippingInformation(): SecupayTransactionSetShippingInformationDTO|null
    {
        return $this->container['shipping_information'] ?? null;
    }

    /**
     * Sets shipping_information
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO|null $shipping_information shipping_information
     * @return $this
     */
    public function setShippingInformation(?SecupayTransactionSetShippingInformationDTO $shipping_information): static
    {
        $this->container['shipping_information'] = $shipping_information;

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

