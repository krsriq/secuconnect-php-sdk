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
 * ServicesIdentrequestsProductDTO
 *
 * @category Class
 * @description ServicesIdentrequestsProductDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServicesIdentrequestsProductDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'ServicesIdentrequestsProductDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'provider' => 'PROVIDER',
        'type' => 'TYPE',
        'demo' => 'bool',
        'person' => '\Secuconnect\Client\Model\IdentrequestPersonDTO[]',
        'owner_transaction_id' => 'string',
        'redirect_url' => '\Secuconnect\Client\Model\IdentrequestRedirectUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'provider' => null,
        'type' => null,
        'demo' => null,
        'person' => null,
        'owner_transaction_id' => null,
        'redirect_url' => null
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
        'provider' => 'provider',
        'type' => 'type',
        'demo' => 'demo',
        'person' => 'person',
        'owner_transaction_id' => 'owner_transaction_id',
        'redirect_url' => 'redirect_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'provider' => 'setProvider',
        'type' => 'setType',
        'demo' => 'setDemo',
        'person' => 'setPerson',
        'owner_transaction_id' => 'setOwnerTransactionId',
        'redirect_url' => 'setRedirectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'provider' => 'getProvider',
        'type' => 'getType',
        'demo' => 'getDemo',
        'person' => 'getPerson',
        'owner_transaction_id' => 'getOwnerTransactionId',
        'redirect_url' => 'getRedirectUrl'
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
    const PROVIDER_POST_IDENT = 'post_ident';    const PROVIDER_BANK_IDENT = 'bank_ident';    const PROVIDER_WEBID = 'webid';    const TYPE_PERSON = 'person';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProviderAllowableValues(): array
    {
        return [
            self::PROVIDER_POST_IDENT,
            self::PROVIDER_BANK_IDENT,
            self::PROVIDER_WEBID,
        ];
    }


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues(): array
    {
        return [
            self::TYPE_PERSON,
        ];
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
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['demo'] = $data['demo'] ?? null;
        $this->container['person'] = $data['person'] ?? null;
        $this->container['owner_transaction_id'] = $data['owner_transaction_id'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalid_properties = [];

        $allowed_values = $this->getProviderAllowableValues();
        if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowed_values, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'provider', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowed_values, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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
     * Gets provider
     * @return string
     */
    public function getProvider(): string
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string|null $provider Third party identification provider
     * @return $this
     */
    public function setProvider(?string $provider): static
    {
        $allowed_values = $this->getProviderAllowableValues();
        if (!is_null($provider) && !in_array($provider, $allowed_values, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'provider', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string|null $type Type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets demo
     * @return bool
     */
    public function getDemo(): bool
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param bool|null $demo Demo Flag
     * @return $this
     */
    public function setDemo(?bool $demo): static
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets person
     * @return \Secuconnect\Client\Model\IdentrequestPersonDTO[]
     */
    public function getPerson(): array
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     * @param \Secuconnect\Client\Model\IdentrequestPersonDTO[]|null $person The person which should be identified by third party provider
     * @return $this
     */
    public function setPerson(?array $person): static
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets owner_transaction_id
     * @return string
     */
    public function getOwnerTransactionId(): string
    {
        return $this->container['owner_transaction_id'];
    }

    /**
     * Sets owner_transaction_id
     * @param string|null $owner_transaction_id Arbitrary ID to identify identrequest on merchant
     * @return $this
     */
    public function setOwnerTransactionId(?string $owner_transaction_id): static
    {
        $this->container['owner_transaction_id'] = $owner_transaction_id;

        return $this;
    }

    /**
     * Gets redirect_url
     * @return \Secuconnect\Client\Model\IdentrequestRedirectUrls
     */
    public function getRedirectUrl(): IdentrequestRedirectUrls
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     * @param \Secuconnect\Client\Model\IdentrequestRedirectUrls|null $redirect_url redirect_url
     * @return $this
     */
    public function setRedirectUrl(?IdentrequestRedirectUrls $redirect_url): static
    {
        $this->container['redirect_url'] = $redirect_url;

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

