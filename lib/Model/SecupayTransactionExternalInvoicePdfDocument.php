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
 * SecupayTransactionExternalInvoicePdfDocument
 *
 * @category Class
 * @description Information about the saved document
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayTransactionExternalInvoicePdfDocument implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayTransactionExternalInvoicePdf_document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id' => 'string',
        'mime_type' => 'string',
        'name' => 'string',
        'size' => 'int',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id' => null,
        'mime_type' => null,
        'name' => null,
        'size' => null,
        'url' => null
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
        'mime_type' => 'mime_type',
        'name' => 'name',
        'size' => 'size',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'mime_type' => 'setMimeType',
        'name' => 'setName',
        'size' => 'setSize',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'mime_type' => 'getMimeType',
        'name' => 'getName',
        'size' => 'getSize',
        'url' => 'getUrl'
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
        $this->container['mime_type'] = $data['mime_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * @return string
     */
    public function getId(): string|null
    {
        return $this->container['id'] ?? null;
    }

    /**
     * Sets id
     * @param string|null $id The Document File ID
     * @return $this
     */
    public function setId(?string $id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mime_type
     * @return string
     */
    public function getMimeType(): string|null
    {
        return $this->container['mime_type'] ?? null;
    }

    /**
     * Sets mime_type
     * @param string|null $mime_type The MIME Type
     * @return $this
     */
    public function setMimeType(?string $mime_type): static
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string|null
    {
        return $this->container['name'] ?? null;
    }

    /**
     * Sets name
     * @param string|null $name The file name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize(): int|null
    {
        return $this->container['size'] ?? null;
    }

    /**
     * Sets size
     * @param int|null $size The size of the file in bytes
     * @return $this
     */
    public function setSize(?int $size): static
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl(): string|null
    {
        return $this->container['url'] ?? null;
    }

    /**
     * Sets url
     * @param string|null $url The download-url to this file
     * @return $this
     */
    public function setUrl(?string $url): static
    {
        $this->container['url'] = $url;

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

