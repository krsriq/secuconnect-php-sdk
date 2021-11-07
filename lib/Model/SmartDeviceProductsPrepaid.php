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
 * SmartDeviceProductsPrepaid
 *
 * @category Class
 * @description SmartDeviceProductsPrepaid
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDeviceProductsPrepaid implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartDeviceProductsPrepaid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'enabled' => 'bool',
        'simulate_force' => 'bool',
        'demo_force' => 'bool',
        'vtc_tid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'enabled' => null,
        'simulate_force' => null,
        'demo_force' => null,
        'vtc_tid' => null
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
        'enabled' => 'enabled',
        'simulate_force' => 'simulate_force',
        'demo_force' => 'demo_force',
        'vtc_tid' => 'vtc_tid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'enabled' => 'setEnabled',
        'simulate_force' => 'setSimulateForce',
        'demo_force' => 'setDemoForce',
        'vtc_tid' => 'setVtcTid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'enabled' => 'getEnabled',
        'simulate_force' => 'getSimulateForce',
        'demo_force' => 'getDemoForce',
        'vtc_tid' => 'getVtcTid'
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
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['simulate_force'] = $data['simulate_force'] ?? null;
        $this->container['demo_force'] = $data['demo_force'] ?? null;
        $this->container['vtc_tid'] = $data['vtc_tid'] ?? null;
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
     * Gets enabled
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool|null $enabled Enabled
     * @return $this
     */
    public function setEnabled(?bool $enabled): static
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets simulate_force
     * @return bool
     */
    public function getSimulateForce(): bool
    {
        return $this->container['simulate_force'];
    }

    /**
     * Sets simulate_force
     * @param bool|null $simulate_force Simulate force
     * @return $this
     */
    public function setSimulateForce(?bool $simulate_force): static
    {
        $this->container['simulate_force'] = $simulate_force;

        return $this;
    }

    /**
     * Gets demo_force
     * @return bool
     */
    public function getDemoForce(): bool
    {
        return $this->container['demo_force'];
    }

    /**
     * Sets demo_force
     * @param bool|null $demo_force Demo force
     * @return $this
     */
    public function setDemoForce(?bool $demo_force): static
    {
        $this->container['demo_force'] = $demo_force;

        return $this;
    }

    /**
     * Gets vtc_tid
     * @return string
     */
    public function getVtcTid(): string
    {
        return $this->container['vtc_tid'];
    }

    /**
     * Sets vtc_tid
     * @param string|null $vtc_tid Vtc tid
     * @return $this
     */
    public function setVtcTid(?string $vtc_tid): static
    {
        $this->container['vtc_tid'] = $vtc_tid;

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

