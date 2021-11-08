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
 * SecupayRedirectUrl
 *
 * @category Class
 * @description SecupayRedirectUrl
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayRedirectUrl implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayRedirectUrl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'iframe_url' => 'string',
        'url_success' => 'string',
        'url_failure' => 'string',
        'url_push' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'iframe_url' => null,
        'url_success' => null,
        'url_failure' => null,
        'url_push' => null
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
        'iframe_url' => 'iframe_url',
        'url_success' => 'url_success',
        'url_failure' => 'url_failure',
        'url_push' => 'url_push'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'iframe_url' => 'setIframeUrl',
        'url_success' => 'setUrlSuccess',
        'url_failure' => 'setUrlFailure',
        'url_push' => 'setUrlPush'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'iframe_url' => 'getIframeUrl',
        'url_success' => 'getUrlSuccess',
        'url_failure' => 'getUrlFailure',
        'url_push' => 'getUrlPush'
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
        $this->container['iframe_url'] = $data['iframe_url'] ?? null;
        $this->container['url_success'] = $data['url_success'] ?? null;
        $this->container['url_failure'] = $data['url_failure'] ?? null;
        $this->container['url_push'] = $data['url_push'] ?? null;
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
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl(): string|null
    {
        return $this->container['iframe_url'] ?? null;
    }

    /**
     * Sets iframe_url
     * @param string|null $iframe_url The url of the payment checkout iframe
     * @return $this
     */
    public function setIframeUrl(?string $iframe_url): static
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets url_success
     * @return string
     */
    public function getUrlSuccess(): string|null
    {
        return $this->container['url_success'] ?? null;
    }

    /**
     * Sets url_success
     * @param string|null $url_success After successfully entering the cash data of the payer is returned to this page.
     * @return $this
     */
    public function setUrlSuccess(?string $url_success): static
    {
        $this->container['url_success'] = $url_success;

        return $this;
    }

    /**
     * Gets url_failure
     * @return string
     */
    public function getUrlFailure(): string|null
    {
        return $this->container['url_failure'] ?? null;
    }

    /**
     * Sets url_failure
     * @param string|null $url_failure After canceling or on errors the payer will be redirected to this page and can select there an another payment method.
     * @return $this
     */
    public function setUrlFailure(?string $url_failure): static
    {
        $this->container['url_failure'] = $url_failure;

        return $this;
    }

    /**
     * Gets url_push
     * @return string
     */
    public function getUrlPush(): string|null
    {
        return $this->container['url_push'] ?? null;
    }

    /**
     * Sets url_push
     * @param string|null $url_push The secupay system will be send status change notifications to this URL.
     * @return $this
     */
    public function setUrlPush(?string $url_push): static
    {
        $this->container['url_push'] = $url_push;

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

