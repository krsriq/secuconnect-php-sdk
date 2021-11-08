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
 * SmartTemplatesElementModel
 *
 * @category Class
 * @description SmartTemplatesElementModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTemplatesElementModel implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTemplatesElementModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'int',
        'type' => 'string',
        'config' => 'object',
        'condition' => 'object',
        'accordion_elements' => '\Secuconnect\Client\Model\SmartTemplatesAccordionItemModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'type' => null,
        'config' => null,
        'condition' => null,
        'accordion_elements' => null
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
        'type' => 'type',
        'config' => 'config',
        'condition' => 'condition',
        'accordion_elements' => 'accordion_elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'config' => 'setConfig',
        'condition' => 'setCondition',
        'accordion_elements' => 'setAccordionElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'config' => 'getConfig',
        'condition' => 'getCondition',
        'accordion_elements' => 'getAccordionElements'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['accordion_elements'] = $data['accordion_elements'] ?? null;
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
    public function getId(): int|null
    {
        return $this->container['id'] ?? null;
    }

    /**
     * Sets id
     * @param int|null $id Id of element item of the component
     * @return $this
     */
    public function setId(?int $id): static
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $type The element type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets config
     * @return object
     */
    public function getConfig(): object|null
    {
        return $this->container['config'] ?? null;
    }

    /**
     * Sets config
     * @param object|null $config The element configuration
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
    public function getCondition(): object|null
    {
        return $this->container['condition'] ?? null;
    }

    /**
     * Sets condition
     * @param object|null $condition The element conditions to determine when this element should be shown
     * @return $this
     */
    public function setCondition(?object $condition): static
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets accordion_elements
     * @return \Secuconnect\Client\Model\SmartTemplatesAccordionItemModel[]
     */
    public function getAccordionElements(): array|null
    {
        return $this->container['accordion_elements'] ?? null;
    }

    /**
     * Sets accordion_elements
     * @param \Secuconnect\Client\Model\SmartTemplatesAccordionItemModel[]|null $accordion_elements The accordion items to be shown in accordion element
     * @return $this
     */
    public function setAccordionElements(?array $accordion_elements): static
    {
        $this->container['accordion_elements'] = $accordion_elements;

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

