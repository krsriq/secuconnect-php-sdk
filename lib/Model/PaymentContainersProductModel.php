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
 * PaymentContainersProductModel
 *
 * @category Class
 * @description PaymentContainersProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContainersProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'contract' => '\Secuconnect\Client\Model\PaymentContractsProductModel',
        'customer' => '\Secuconnect\Client\Model\PaymentCustomersProductModel',
        'assign' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'type' => 'string',
        'public' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate',
        'private' => '\Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate',
        'mandate' => '\Secuconnect\Client\Model\PaymentContainerMandate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'contract' => null,
        'customer' => null,
        'assign' => null,
        'type' => null,
        'public' => null,
        'private' => null,
        'mandate' => null
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
        'updated' => 'updated',
        'contract' => 'contract',
        'customer' => 'customer',
        'assign' => 'assign',
        'type' => 'type',
        'public' => 'public',
        'private' => 'private',
        'mandate' => 'mandate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'contract' => 'setContract',
        'customer' => 'setCustomer',
        'assign' => 'setAssign',
        'type' => 'setType',
        'public' => 'setPublic',
        'private' => 'setPrivate',
        'mandate' => 'setMandate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'contract' => 'getContract',
        'customer' => 'getCustomer',
        'assign' => 'getAssign',
        'type' => 'getType',
        'public' => 'getPublic',
        'private' => 'getPrivate',
        'mandate' => 'getMandate'
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
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['assign'] = $data['assign'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['public'] = $data['public'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['mandate'] = $data['mandate'] ?? null;
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
     * Gets updated
     * @return string
     */
    public function getUpdated(): string|null
    {
        return $this->container['updated'] ?? null;
    }

    /**
     * Sets updated
     * @param string|null $updated updated
     * @return $this
     */
    public function setUpdated(?string $updated): static
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\PaymentContractsProductModel
     */
    public function getContract(): PaymentContractsProductModel|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\PaymentContractsProductModel|null $contract contract
     * @return $this
     */
    public function setContract(?PaymentContractsProductModel $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\PaymentCustomersProductModel
     */
    public function getCustomer(): PaymentCustomersProductModel|null
    {
        return $this->container['customer'] ?? null;
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\PaymentCustomersProductModel|null $customer customer
     * @return $this
     */
    public function setCustomer(?PaymentCustomersProductModel $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets assign
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getAssign(): ProductInstanceUID|null
    {
        return $this->container['assign'] ?? null;
    }

    /**
     * Sets assign
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $assign assign
     * @return $this
     */
    public function setAssign(?ProductInstanceUID $assign): static
    {
        $this->container['assign'] = $assign;

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
     * @param string|null $type Type of payment container
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets public
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPublic(): OneOfPaymentContainersDTOModelPrivate|null
    {
        return $this->container['public'] ?? null;
    }

    /**
     * Sets public
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate|null $public public
     * @return $this
     */
    public function setPublic(?OneOfPaymentContainersDTOModelPrivate $public): static
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets private
     * @return \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate
     */
    public function getPrivate(): OneOfPaymentContainersDTOModelPrivate|null
    {
        return $this->container['private'] ?? null;
    }

    /**
     * Sets private
     * @param \Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate|null $private private
     * @return $this
     */
    public function setPrivate(?OneOfPaymentContainersDTOModelPrivate $private): static
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets mandate
     * @return \Secuconnect\Client\Model\PaymentContainerMandate
     */
    public function getMandate(): PaymentContainerMandate|null
    {
        return $this->container['mandate'] ?? null;
    }

    /**
     * Sets mandate
     * @param \Secuconnect\Client\Model\PaymentContainerMandate|null $mandate mandate
     * @return $this
     */
    public function setMandate(?PaymentContainerMandate $mandate): static
    {
        $this->container['mandate'] = $mandate;

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

