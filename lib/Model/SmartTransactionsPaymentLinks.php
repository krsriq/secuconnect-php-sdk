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
 * SmartTransactionsPaymentLinks
 *
 * @category Class
 * @description SmartTransactionsPaymentLinks
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsPaymentLinks implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsPaymentLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'prepaid' => 'string',
        'debit' => 'string',
        'creditcard' => 'string',
        'invoice' => 'string',
        'paypal' => 'string',
        'sofort' => 'string',
        'general' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'prepaid' => null,
        'debit' => null,
        'creditcard' => null,
        'invoice' => null,
        'paypal' => null,
        'sofort' => null,
        'general' => null
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
        'prepaid' => 'prepaid',
        'debit' => 'debit',
        'creditcard' => 'creditcard',
        'invoice' => 'invoice',
        'paypal' => 'paypal',
        'sofort' => 'sofort',
        'general' => 'general'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'prepaid' => 'setPrepaid',
        'debit' => 'setDebit',
        'creditcard' => 'setCreditcard',
        'invoice' => 'setInvoice',
        'paypal' => 'setPaypal',
        'sofort' => 'setSofort',
        'general' => 'setGeneral'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'prepaid' => 'getPrepaid',
        'debit' => 'getDebit',
        'creditcard' => 'getCreditcard',
        'invoice' => 'getInvoice',
        'paypal' => 'getPaypal',
        'sofort' => 'getSofort',
        'general' => 'getGeneral'
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
        $this->container['prepaid'] = $data['prepaid'] ?? null;
        $this->container['debit'] = $data['debit'] ?? null;
        $this->container['creditcard'] = $data['creditcard'] ?? null;
        $this->container['invoice'] = $data['invoice'] ?? null;
        $this->container['paypal'] = $data['paypal'] ?? null;
        $this->container['sofort'] = $data['sofort'] ?? null;
        $this->container['general'] = $data['general'] ?? null;
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
     * Gets prepaid
     * @return string
     */
    public function getPrepaid(): string|null
    {
        return $this->container['prepaid'] ?? null;
    }

    /**
     * Sets prepaid
     * @param string|null $prepaid process with pay in advance
     * @return $this
     */
    public function setPrepaid(?string $prepaid): static
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets debit
     * @return string
     */
    public function getDebit(): string|null
    {
        return $this->container['debit'] ?? null;
    }

    /**
     * Sets debit
     * @param string|null $debit process with SEPA direct debit
     * @return $this
     */
    public function setDebit(?string $debit): static
    {
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets creditcard
     * @return string
     */
    public function getCreditcard(): string|null
    {
        return $this->container['creditcard'] ?? null;
    }

    /**
     * Sets creditcard
     * @param string|null $creditcard process with credit card
     * @return $this
     */
    public function setCreditcard(?string $creditcard): static
    {
        $this->container['creditcard'] = $creditcard;

        return $this;
    }

    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice(): string|null
    {
        return $this->container['invoice'] ?? null;
    }

    /**
     * Sets invoice
     * @param string|null $invoice process with pay on invoice
     * @return $this
     */
    public function setInvoice(?string $invoice): static
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets paypal
     * @return string
     */
    public function getPaypal(): string|null
    {
        return $this->container['paypal'] ?? null;
    }

    /**
     * Sets paypal
     * @param string|null $paypal process with PayPal
     * @return $this
     */
    public function setPaypal(?string $paypal): static
    {
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets sofort
     * @return string
     */
    public function getSofort(): string|null
    {
        return $this->container['sofort'] ?? null;
    }

    /**
     * Sets sofort
     * @param string|null $sofort process with Sofort
     * @return $this
     */
    public function setSofort(?string $sofort): static
    {
        $this->container['sofort'] = $sofort;

        return $this;
    }

    /**
     * Gets general
     * @return string
     */
    public function getGeneral(): string|null
    {
        return $this->container['general'] ?? null;
    }

    /**
     * Sets general
     * @param string|null $general process with selecting a payment method
     * @return $this
     */
    public function setGeneral(?string $general): static
    {
        $this->container['general'] = $general;

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

