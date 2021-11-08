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
 * BankAccountDescriptor
 *
 * @category Class
 * @description Bank details for money transfers
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountDescriptor implements ArrayAccess, ModelInterface, OneOfPaymentContainersDTOModelPrivate 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'BankAccountDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'iban' => 'string',
        'bic' => 'string',
        'owner' => 'string',
        'bankname' => 'string',
        'purpose' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'iban' => null,
        'bic' => null,
        'owner' => null,
        'bankname' => null,
        'purpose' => null
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
        'iban' => 'iban',
        'bic' => 'bic',
        'owner' => 'owner',
        'bankname' => 'bankname',
        'purpose' => 'purpose'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'iban' => 'setIban',
        'bic' => 'setBic',
        'owner' => 'setOwner',
        'bankname' => 'setBankname',
        'purpose' => 'setPurpose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'iban' => 'getIban',
        'bic' => 'getBic',
        'owner' => 'getOwner',
        'bankname' => 'getBankname',
        'purpose' => 'getPurpose'
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
        $this->container['iban'] = $data['iban'] ?? null;
        $this->container['bic'] = $data['bic'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['bankname'] = $data['bankname'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
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
     * Gets iban
     * @return string
     */
    public function getIban(): string|null
    {
        return $this->container['iban'] ?? null;
    }

    /**
     * Sets iban
     * @param string|null $iban International Bank Account Number (IBAN)
     * @return $this
     */
    public function setIban(?string $iban): static
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     * @return string
     */
    public function getBic(): string|null
    {
        return $this->container['bic'] ?? null;
    }

    /**
     * Sets bic
     * @param string|null $bic Bank Identifier Code (BIC), or formerly SWIFT code
     * @return $this
     */
    public function setBic(?string $bic): static
    {
        $this->container['bic'] = $bic;

        return $this;
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
     * @param string|null $owner Account owner name
     * @return $this
     */
    public function setOwner(?string $owner): static
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets bankname
     * @return string
     */
    public function getBankname(): string|null
    {
        return $this->container['bankname'] ?? null;
    }

    /**
     * Sets bankname
     * @param string|null $bankname Bank name
     * @return $this
     */
    public function setBankname(?string $bankname): static
    {
        $this->container['bankname'] = $bankname;

        return $this;
    }

    /**
     * Gets purpose
     * @return string
     */
    public function getPurpose(): string|null
    {
        return $this->container['purpose'] ?? null;
    }

    /**
     * Sets purpose
     * @param string|null $purpose Purpose to use
     * @return $this
     */
    public function setPurpose(?string $purpose): static
    {
        $this->container['purpose'] = $purpose;

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

