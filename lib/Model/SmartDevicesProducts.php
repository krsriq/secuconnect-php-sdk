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
 * SmartDevicesProducts
 *
 * @category Class
 * @description SmartDevicesProducts
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesProducts implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartDevicesProducts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'loyalty' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'smart' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'cashreg' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'collect' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'showcase' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'vtm' => '\Secuconnect\Client\Model\SmartDeviceProductsEnabled',
        'prepaid' => '\Secuconnect\Client\Model\SmartDeviceProductsPrepaid'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'loyalty' => null,
        'smart' => null,
        'cashreg' => null,
        'collect' => null,
        'showcase' => null,
        'vtm' => null,
        'prepaid' => null
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
        'loyalty' => 'loyalty',
        'smart' => 'smart',
        'cashreg' => 'cashreg',
        'collect' => 'collect',
        'showcase' => 'showcase',
        'vtm' => 'vtm',
        'prepaid' => 'prepaid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'loyalty' => 'setLoyalty',
        'smart' => 'setSmart',
        'cashreg' => 'setCashreg',
        'collect' => 'setCollect',
        'showcase' => 'setShowcase',
        'vtm' => 'setVtm',
        'prepaid' => 'setPrepaid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'loyalty' => 'getLoyalty',
        'smart' => 'getSmart',
        'cashreg' => 'getCashreg',
        'collect' => 'getCollect',
        'showcase' => 'getShowcase',
        'vtm' => 'getVtm',
        'prepaid' => 'getPrepaid'
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
        $this->container['loyalty'] = $data['loyalty'] ?? null;
        $this->container['smart'] = $data['smart'] ?? null;
        $this->container['cashreg'] = $data['cashreg'] ?? null;
        $this->container['collect'] = $data['collect'] ?? null;
        $this->container['showcase'] = $data['showcase'] ?? null;
        $this->container['vtm'] = $data['vtm'] ?? null;
        $this->container['prepaid'] = $data['prepaid'] ?? null;
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
     * Gets loyalty
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getLoyalty(): SmartDeviceProductsEnabled
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $loyalty loyalty
     * @return $this
     */
    public function setLoyalty(?SmartDeviceProductsEnabled $loyalty): static
    {
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets smart
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getSmart(): SmartDeviceProductsEnabled
    {
        return $this->container['smart'];
    }

    /**
     * Sets smart
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $smart smart
     * @return $this
     */
    public function setSmart(?SmartDeviceProductsEnabled $smart): static
    {
        $this->container['smart'] = $smart;

        return $this;
    }

    /**
     * Gets cashreg
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getCashreg(): SmartDeviceProductsEnabled
    {
        return $this->container['cashreg'];
    }

    /**
     * Sets cashreg
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $cashreg cashreg
     * @return $this
     */
    public function setCashreg(?SmartDeviceProductsEnabled $cashreg): static
    {
        $this->container['cashreg'] = $cashreg;

        return $this;
    }

    /**
     * Gets collect
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getCollect(): SmartDeviceProductsEnabled
    {
        return $this->container['collect'];
    }

    /**
     * Sets collect
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $collect collect
     * @return $this
     */
    public function setCollect(?SmartDeviceProductsEnabled $collect): static
    {
        $this->container['collect'] = $collect;

        return $this;
    }

    /**
     * Gets showcase
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getShowcase(): SmartDeviceProductsEnabled
    {
        return $this->container['showcase'];
    }

    /**
     * Sets showcase
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $showcase showcase
     * @return $this
     */
    public function setShowcase(?SmartDeviceProductsEnabled $showcase): static
    {
        $this->container['showcase'] = $showcase;

        return $this;
    }

    /**
     * Gets vtm
     * @return \Secuconnect\Client\Model\SmartDeviceProductsEnabled
     */
    public function getVtm(): SmartDeviceProductsEnabled
    {
        return $this->container['vtm'];
    }

    /**
     * Sets vtm
     * @param \Secuconnect\Client\Model\SmartDeviceProductsEnabled|null $vtm vtm
     * @return $this
     */
    public function setVtm(?SmartDeviceProductsEnabled $vtm): static
    {
        $this->container['vtm'] = $vtm;

        return $this;
    }

    /**
     * Gets prepaid
     * @return \Secuconnect\Client\Model\SmartDeviceProductsPrepaid
     */
    public function getPrepaid(): SmartDeviceProductsPrepaid
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     * @param \Secuconnect\Client\Model\SmartDeviceProductsPrepaid|null $prepaid prepaid
     * @return $this
     */
    public function setPrepaid(?SmartDeviceProductsPrepaid $prepaid): static
    {
        $this->container['prepaid'] = $prepaid;

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

