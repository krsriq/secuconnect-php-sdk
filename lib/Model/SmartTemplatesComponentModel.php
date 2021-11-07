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
 * SmartTemplatesComponentModel
 *
 * @category Class
 * @description SmartTemplatesComponentModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTemplatesComponentModel implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTemplatesComponentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'config' => 'object',
        'condition' => 'object',
        'elements' => '\Secuconnect\Client\Model\SmartTemplatesElementModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'name' => null,
        'config' => null,
        'condition' => null,
        'elements' => null
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
        'name' => 'name',
        'config' => 'config',
        'condition' => 'condition',
        'elements' => 'elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'config' => 'setConfig',
        'condition' => 'setCondition',
        'elements' => 'setElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'config' => 'getConfig',
        'condition' => 'getCondition',
        'elements' => 'getElements'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['elements'] = $data['elements'] ?? null;
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
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int|null $id Id of component item of the page
     * @return $this
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string|null $name The name of component item
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets config
     * @return object
     */
    public function getConfig(): object
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param object|null $config The component configuration
     * @return $this
     */
    public function setConfig(?object $config): static
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets condition
     * @return object
     */
    public function getCondition(): object
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param object|null $condition The component conditions to determine when this component should be shown
     * @return $this
     */
    public function setCondition(?object $condition): static
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets elements
     * @return \Secuconnect\Client\Model\SmartTemplatesElementModel[]
     */
    public function getElements(): array
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     * @param \Secuconnect\Client\Model\SmartTemplatesElementModel[]|null $elements The elements inside the page component
     * @return $this
     */
    public function setElements(?array $elements): static
    {
        $this->container['elements'] = $elements;

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

