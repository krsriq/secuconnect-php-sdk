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
 * PaymentContainerMandate
 *
 * @category Class
 * @description PaymentContainerMandate
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainerMandate implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContainerMandate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'sepa_mandate_id' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'type' => 'string',
        'status' => 'string',
        'identification' => 'string',
        'creditor_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'sepa_mandate_id' => null,
        'iban' => null,
        'bic' => null,
        'type' => null,
        'status' => null,
        'identification' => null,
        'creditor_id' => null
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
        'sepa_mandate_id' => 'sepa_mandate_id',
        'iban' => 'iban',
        'bic' => 'bic',
        'type' => 'type',
        'status' => 'status',
        'identification' => 'identification',
        'creditor_id' => 'creditor_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'sepa_mandate_id' => 'setSepaMandateId',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'type' => 'setType',
        'status' => 'setStatus',
        'identification' => 'setIdentification',
        'creditor_id' => 'setCreditorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'sepa_mandate_id' => 'getSepaMandateId',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'type' => 'getType',
        'status' => 'getStatus',
        'identification' => 'getIdentification',
        'creditor_id' => 'getCreditorId'
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
        $this->container['sepa_mandate_id'] = $data['sepa_mandate_id'] ?? null;
        $this->container['iban'] = $data['iban'] ?? null;
        $this->container['bic'] = $data['bic'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['identification'] = $data['identification'] ?? null;
        $this->container['creditor_id'] = $data['creditor_id'] ?? null;
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
     * Gets sepa_mandate_id
     * @return string
     */
    public function getSepaMandateId(): string|null
    {
        return $this->container['sepa_mandate_id'] ?? null;
    }

    /**
     * Sets sepa_mandate_id
     * @param string|null $sepa_mandate_id Sepa mandate id
     * @return $this
     */
    public function setSepaMandateId(?string $sepa_mandate_id): static
    {
        $this->container['sepa_mandate_id'] = $sepa_mandate_id;

        return $this;
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
     * @param string|null $iban IBAN
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
     * @param string|null $bic BIC
     * @return $this
     */
    public function setBic(?string $bic): static
    {
        $this->container['bic'] = $bic;

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
     * @param string|null $type Type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

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
     * @param string|null $status Status
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets identification
     * @return string
     */
    public function getIdentification(): string|null
    {
        return $this->container['identification'] ?? null;
    }

    /**
     * Sets identification
     * @param string|null $identification Identification
     * @return $this
     */
    public function setIdentification(?string $identification): static
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets creditor_id
     * @return string
     */
    public function getCreditorId(): string|null
    {
        return $this->container['creditor_id'] ?? null;
    }

    /**
     * Sets creditor_id
     * @param string|null $creditor_id Creditor ID
     * @return $this
     */
    public function setCreditorId(?string $creditor_id): static
    {
        $this->container['creditor_id'] = $creditor_id;

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

