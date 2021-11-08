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
 * PaymentContractsProductModel
 *
 * @category Class
 * @description PaymentContractsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContractsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'parent' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'pay_in_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'demo' => 'bool',
        'approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'parent' => null,
        'pay_in_account' => null,
        'demo' => null,
        'approved' => null
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
        'parent' => 'parent',
        'pay_in_account' => 'pay_in_account',
        'demo' => 'demo',
        'approved' => 'approved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'parent' => 'setParent',
        'pay_in_account' => 'setPayInAccount',
        'demo' => 'setDemo',
        'approved' => 'setApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'parent' => 'getParent',
        'pay_in_account' => 'getPayInAccount',
        'demo' => 'getDemo',
        'approved' => 'getApproved'
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
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['pay_in_account'] = $data['pay_in_account'] ?? null;
        $this->container['demo'] = $data['demo'] ?? null;
        $this->container['approved'] = $data['approved'] ?? null;
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
     * Gets parent
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getParent(): ProductInstanceUID|null
    {
        return $this->container['parent'] ?? null;
    }

    /**
     * Sets parent
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $parent parent
     * @return $this
     */
    public function setParent(?ProductInstanceUID $parent): static
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets pay_in_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayInAccount(): PaymentInformation|null
    {
        return $this->container['pay_in_account'] ?? null;
    }

    /**
     * Sets pay_in_account
     * @param \Secuconnect\Client\Model\PaymentInformation|null $pay_in_account pay_in_account
     * @return $this
     */
    public function setPayInAccount(?PaymentInformation $pay_in_account): static
    {
        $this->container['pay_in_account'] = $pay_in_account;

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
     * @param bool|null $demo Is this a demo contract
     * @return $this
     */
    public function setDemo(?bool $demo): static
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets approved
     * @return bool
     */
    public function getApproved(): bool|null
    {
        return $this->container['approved'] ?? null;
    }

    /**
     * Sets approved
     * @param bool|null $approved Indicates if the payout lock was removed
     * @return $this
     */
    public function setApproved(?bool $approved): static
    {
        $this->container['approved'] = $approved;

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

