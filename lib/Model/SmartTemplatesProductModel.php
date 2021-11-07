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
 * SmartTemplatesProductModel
 *
 * @category Class
 * @description SmartTemplatesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTemplatesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTemplatesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'name' => 'string',
        'description' => 'string',
        'default_language' => 'string',
        'header' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]',
        'footer' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]',
        'pages' => '\Secuconnect\Client\Model\SmartTemplatesComponentModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'name' => null,
        'description' => null,
        'default_language' => null,
        'header' => null,
        'footer' => null,
        'pages' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'name' => 'name',
        'description' => 'description',
        'default_language' => 'default_language',
        'header' => 'header',
        'footer' => 'footer',
        'pages' => 'pages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'name' => 'setName',
        'description' => 'setDescription',
        'default_language' => 'setDefaultLanguage',
        'header' => 'setHeader',
        'footer' => 'setFooter',
        'pages' => 'setPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'name' => 'getName',
        'description' => 'getDescription',
        'default_language' => 'getDefaultLanguage',
        'header' => 'getHeader',
        'footer' => 'getFooter',
        'pages' => 'getPages'
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

        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['default_language'] = $data['default_language'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
        $this->container['footer'] = $data['footer'] ?? null;
        $this->container['pages'] = $data['pages'] ?? null;
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
     * Gets created
     * @return string
     */
    public function getCreated(): string
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string|null $created created
     * @return $this
     */
    public function setCreated(?string $created): static
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     * @return string
     */
    public function getUpdated(): string
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param string|null $updated updated
     * @return $this
     */
    public function setUpdated(?string $updated): static
    {
        $this->container['updated'] = $updated;

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
     * @param string|null $name Name of smart template
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string|null $description Description of smart template
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets default_language
     * @return string
     */
    public function getDefaultLanguage(): string
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     * @param string|null $default_language Default Language configured for this template
     * @return $this
     */
    public function setDefaultLanguage(?string $default_language): static
    {
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets header
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getHeader(): array
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[]|null $header Header definition of smart template
     * @return $this
     */
    public function setHeader(?array $header): static
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets footer
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getFooter(): array
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[]|null $footer Footer definition of smart template
     * @return $this
     */
    public function setFooter(?array $footer): static
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets pages
     * @return \Secuconnect\Client\Model\SmartTemplatesComponentModel[]
     */
    public function getPages(): array
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     * @param \Secuconnect\Client\Model\SmartTemplatesComponentModel[]|null $pages Definition of different pages in smart template
     * @return $this
     */
    public function setPages(?array $pages): static
    {
        $this->container['pages'] = $pages;

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

