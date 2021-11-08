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
 * CreditCardDescriptor
 *
 * @category Class
 * @description Credit card details
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCardDescriptor implements ArrayAccess, ModelInterface, OneOfPaymentContainersDTOModelPrivate 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'CreditCardDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'owner' => 'string',
        'pan' => 'string',
        'expiration_date' => 'string',
        'issuer' => 'string',
        'transact_container' => 'string',
        'transact_skey_pubkey' => 'string',
        'transact_skey_keyname' => 'string',
        'transact_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'owner' => null,
        'pan' => null,
        'expiration_date' => null,
        'issuer' => null,
        'transact_container' => null,
        'transact_skey_pubkey' => null,
        'transact_skey_keyname' => null,
        'transact_hash' => null
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
        'owner' => 'owner',
        'pan' => 'pan',
        'expiration_date' => 'expiration_date',
        'issuer' => 'issuer',
        'transact_container' => 'transact_container',
        'transact_skey_pubkey' => 'transact_skey_pubkey',
        'transact_skey_keyname' => 'transact_skey_keyname',
        'transact_hash' => 'transact_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'owner' => 'setOwner',
        'pan' => 'setPan',
        'expiration_date' => 'setExpirationDate',
        'issuer' => 'setIssuer',
        'transact_container' => 'setTransactContainer',
        'transact_skey_pubkey' => 'setTransactSkeyPubkey',
        'transact_skey_keyname' => 'setTransactSkeyKeyname',
        'transact_hash' => 'setTransactHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'owner' => 'getOwner',
        'pan' => 'getPan',
        'expiration_date' => 'getExpirationDate',
        'issuer' => 'getIssuer',
        'transact_container' => 'getTransactContainer',
        'transact_skey_pubkey' => 'getTransactSkeyPubkey',
        'transact_skey_keyname' => 'getTransactSkeyKeyname',
        'transact_hash' => 'getTransactHash'
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
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['pan'] = $data['pan'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['issuer'] = $data['issuer'] ?? null;
        $this->container['transact_container'] = $data['transact_container'] ?? null;
        $this->container['transact_skey_pubkey'] = $data['transact_skey_pubkey'] ?? null;
        $this->container['transact_skey_keyname'] = $data['transact_skey_keyname'] ?? null;
        $this->container['transact_hash'] = $data['transact_hash'] ?? null;
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
     * Gets owner
     * @return string
     */
    public function getOwner(): string|null
    {
        return $this->container['owner'] ?? null;
    }

    /**
     * Sets owner
     * @param string|null $owner Card holder
     * @return $this
     */
    public function setOwner(?string $owner): static
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets pan
     * @return string
     */
    public function getPan(): string|null
    {
        return $this->container['pan'] ?? null;
    }

    /**
     * Sets pan
     * @param string|null $pan Truncated Primary Account Number (PAN)
     * @return $this
     */
    public function setPan(?string $pan): static
    {
        $this->container['pan'] = $pan;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return string
     */
    public function getExpirationDate(): string|null
    {
        return $this->container['expiration_date'] ?? null;
    }

    /**
     * Sets expiration_date
     * @param string|null $expiration_date Date and time when the card will expire; the system must pass 2023-07-01T00:00:00 if the card is valid thru 06/23
     * @return $this
     */
    public function setExpirationDate(?string $expiration_date): static
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer(): string|null
    {
        return $this->container['issuer'] ?? null;
    }

    /**
     * Sets issuer
     * @param string|null $issuer Card brand or scheme like VISA, or MasterCard
     * @return $this
     */
    public function setIssuer(?string $issuer): static
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets transact_container
     * @return string
     */
    public function getTransactContainer(): string|null
    {
        return $this->container['transact_container'] ?? null;
    }

    /**
     * Sets transact_container
     * @param string|null $transact_container transact container
     * @return $this
     */
    public function setTransactContainer(?string $transact_container): static
    {
        $this->container['transact_container'] = $transact_container;

        return $this;
    }

    /**
     * Gets transact_skey_pubkey
     * @return string
     */
    public function getTransactSkeyPubkey(): string|null
    {
        return $this->container['transact_skey_pubkey'] ?? null;
    }

    /**
     * Sets transact_skey_pubkey
     * @param string|null $transact_skey_pubkey transact public key
     * @return $this
     */
    public function setTransactSkeyPubkey(?string $transact_skey_pubkey): static
    {
        $this->container['transact_skey_pubkey'] = $transact_skey_pubkey;

        return $this;
    }

    /**
     * Gets transact_skey_keyname
     * @return string
     */
    public function getTransactSkeyKeyname(): string|null
    {
        return $this->container['transact_skey_keyname'] ?? null;
    }

    /**
     * Sets transact_skey_keyname
     * @param string|null $transact_skey_keyname transact key name
     * @return $this
     */
    public function setTransactSkeyKeyname(?string $transact_skey_keyname): static
    {
        $this->container['transact_skey_keyname'] = $transact_skey_keyname;

        return $this;
    }

    /**
     * Gets transact_hash
     * @return string
     */
    public function getTransactHash(): string|null
    {
        return $this->container['transact_hash'] ?? null;
    }

    /**
     * Sets transact_hash
     * @param string|null $transact_hash transact hash
     * @return $this
     */
    public function setTransactHash(?string $transact_hash): static
    {
        $this->container['transact_hash'] = $transact_hash;

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

