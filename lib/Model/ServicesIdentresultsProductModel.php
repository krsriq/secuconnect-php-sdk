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
 * ServicesIdentresultsProductModel
 *
 * @category Class
 * @description ServicesIdentresultsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServicesIdentresultsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'ServicesIdentresultsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'request' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'status' => 'string',
        'demo' => 'bool',
        'person' => '\Secuconnect\Client\Model\IdentresultPerson[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'request' => null,
        'contract' => null,
        'status' => null,
        'demo' => null,
        'person' => null
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
        'created' => 'created',
        'request' => 'request',
        'contract' => 'contract',
        'status' => 'status',
        'demo' => 'demo',
        'person' => 'person'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'request' => 'setRequest',
        'contract' => 'setContract',
        'status' => 'setStatus',
        'demo' => 'setDemo',
        'person' => 'setPerson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'request' => 'getRequest',
        'contract' => 'getContract',
        'status' => 'getStatus',
        'demo' => 'getDemo',
        'person' => 'getPerson'
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

        $this->container['created'] = $data['created'] ?? null;
        $this->container['request'] = $data['request'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['demo'] = $data['demo'] ?? null;
        $this->container['person'] = $data['person'] ?? null;
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
     * Gets created
     * @return string
     */
    public function getCreated(): string|null
    {
        return $this->container['created'] ?? null;
    }

    /**
     * Sets created
     * @param string|null $created created
     * @return $this
     */
    public function setCreated(?string $created): static
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets request
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getRequest(): ProductInstanceUID|null
    {
        return $this->container['request'] ?? null;
    }

    /**
     * Sets request
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $request request
     * @return $this
     */
    public function setRequest(?ProductInstanceUID $request): static
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getContract(): ProductInstanceUID|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $contract contract
     * @return $this
     */
    public function setContract(?ProductInstanceUID $contract): static
    {
        $this->container['contract'] = $contract;

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
     * @param string|null $status The status of the identrequest
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets demo
     * @return bool
     */
    public function getDemo(): bool|null
    {
        return $this->container['demo'] ?? null;
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
     * @return \Secuconnect\Client\Model\IdentresultPerson[]
     */
    public function getPerson(): array|null
    {
        return $this->container['person'] ?? null;
    }

    /**
     * Sets person
     * @param \Secuconnect\Client\Model\IdentresultPerson[]|null $person The details from identification process about identified person
     * @return $this
     */
    public function setPerson(?array $person): static
    {
        $this->container['person'] = $person;

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

