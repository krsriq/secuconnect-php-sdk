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
 * IdentrequestPerson
 *
 * @category Class
 * @description IdentrequestPerson
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentrequestPerson extends IdentrequestPersonDTO
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'IdentrequestPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'transaction_id' => 'string',
        'redirect_url' => 'string',
        'status' => 'string',
        'provider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'transaction_id' => null,
        'redirect_url' => null,
        'status' => null,
        'provider' => null
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
        'transaction_id' => 'transaction_id',
        'redirect_url' => 'redirect_url',
        'status' => 'status',
        'provider' => 'provider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'transaction_id' => 'setTransactionId',
        'redirect_url' => 'setRedirectUrl',
        'status' => 'setStatus',
        'provider' => 'setProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'transaction_id' => 'getTransactionId',
        'redirect_url' => 'getRedirectUrl',
        'status' => 'getStatus',
        'provider' => 'getProvider'
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

        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
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
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId(): string|null
    {
        return $this->container['transaction_id'] ?? null;
    }

    /**
     * Sets transaction_id
     * @param string|null $transaction_id An internal transaction_id to identify the person inside and identrequest
     * @return $this
     */
    public function setTransactionId(?string $transaction_id): static
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets redirect_url
     * @return string
     */
    public function getRedirectUrl(): string|null
    {
        return $this->container['redirect_url'] ?? null;
    }

    /**
     * Sets redirect_url
     * @param string|null $redirect_url The url the person should visit to be forwarded to identification provider
     * @return $this
     */
    public function setRedirectUrl(?string $redirect_url): static
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus(): string|null
    {
        return $this->container['status'] ?? null;
    }

    /**
     * Sets status
     * @param string|null $status The status of the person identification request
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets provider
     * @return string
     */
    public function getProvider(): string|null
    {
        return $this->container['provider'] ?? null;
    }

    /**
     * Sets provider
     * @param string|null $provider The generated ID of the provider for this identrequest - can be null on creation
     * @return $this
     */
    public function setProvider(?string $provider): static
    {
        $this->container['provider'] = $provider;

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

