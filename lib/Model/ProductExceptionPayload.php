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
 * ProductExceptionPayload
 *
 * @category Class
 * @description Payload of exceptions returned by the API
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductExceptionPayload implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'ProductExceptionPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'status' => 'string',
        'error' => 'string',
        'error_details' => 'string',
        'error_user' => 'string',
        'code' => 'string',
        'support_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'status' => null,
        'error' => null,
        'error_details' => null,
        'error_user' => null,
        'code' => null,
        'support_id' => null
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
        'status' => 'status',
        'error' => 'error',
        'error_details' => 'error_details',
        'error_user' => 'error_user',
        'code' => 'code',
        'support_id' => 'supportId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'error' => 'setError',
        'error_details' => 'setErrorDetails',
        'error_user' => 'setErrorUser',
        'code' => 'setCode',
        'support_id' => 'setSupportId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'error' => 'getError',
        'error_details' => 'getErrorDetails',
        'error_user' => 'getErrorUser',
        'code' => 'getCode',
        'support_id' => 'getSupportId'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['error_details'] = $data['error_details'] ?? null;
        $this->container['error_user'] = $data['error_user'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['support_id'] = $data['support_id'] ?? null;
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
     * Gets status
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string|null $status Request status (always 'error')
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError(): string
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string|null $error Error type identifier
     * @return $this
     */
    public function setError(?string $error): static
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets error_details
     * @return string
     */
    public function getErrorDetails(): string
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     * @param string|null $error_details Error details
     * @return $this
     */
    public function setErrorDetails(?string $error_details): static
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets error_user
     * @return string
     */
    public function getErrorUser(): string
    {
        return $this->container['error_user'];
    }

    /**
     * Sets error_user
     * @param string|null $error_user Error details in German
     * @return $this
     */
    public function setErrorUser(?string $error_user): static
    {
        $this->container['error_user'] = $error_user;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode(): string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string|null $code HTTP code corresponding to error
     * @return $this
     */
    public function setCode(?string $code): static
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets support_id
     * @return string
     */
    public function getSupportId(): string
    {
        return $this->container['support_id'];
    }

    /**
     * Sets support_id
     * @param string|null $support_id ID by which support team can relate error with action(s) that caused it
     * @return $this
     */
    public function setSupportId(?string $support_id): static
    {
        $this->container['support_id'] = $support_id;

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

