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
 * PaymentTransactionsProductModelCustomer
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsProductModelCustomer implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentTransactionsProductModel_customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'companyname' => 'string',
        'salutation' => 'string',
        'title' => 'string',
        'forename' => 'string',
        'surname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'companyname' => null,
        'salutation' => null,
        'title' => null,
        'forename' => null,
        'surname' => null
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
        'companyname' => 'companyname',
        'salutation' => 'salutation',
        'title' => 'title',
        'forename' => 'forename',
        'surname' => 'surname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'companyname' => 'setCompanyname',
        'salutation' => 'setSalutation',
        'title' => 'setTitle',
        'forename' => 'setForename',
        'surname' => 'setSurname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'companyname' => 'getCompanyname',
        'salutation' => 'getSalutation',
        'title' => 'getTitle',
        'forename' => 'getForename',
        'surname' => 'getSurname'
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
        $this->container['companyname'] = $data['companyname'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
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
     * Gets companyname
     * @return string
     */
    public function getCompanyname(): string
    {
        return $this->container['companyname'];
    }

    /**
     * Sets companyname
     * @param string|null $companyname Customer company name
     * @return $this
     */
    public function setCompanyname(?string $companyname): static
    {
        $this->container['companyname'] = $companyname;

        return $this;
    }

    /**
     * Gets salutation
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string|null $salutation Customer salutation
     * @return $this
     */
    public function setSalutation(?string $salutation): static
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string|null $title Customer title
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets forename
     * @return string
     */
    public function getForename(): string
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param string|null $forename Customer forename
     * @return $this
     */
    public function setForename(?string $forename): static
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return string
     */
    public function getSurname(): string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param string|null $surname Customer surname
     * @return $this
     */
    public function setSurname(?string $surname): static
    {
        $this->container['surname'] = $surname;

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

