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
 * GeneralContractsProductModel
 *
 * @category Class
 * @description GeneralContractsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralContractsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeneralContractsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id_old' => 'int',
        'parent' => '\Secuconnect\Client\Model\ParentModel',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'pay_in_advance_account' => '\Secuconnect\Client\Model\BankAccountDescriptor',
        'payment_link_options' => '\Secuconnect\Client\Model\PaymentLinkOptions',
        'approved' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id_old' => 'id',
        'parent' => null,
        'merchant' => null,
        'pay_in_advance_account' => null,
        'payment_link_options' => null,
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
        'id_old' => 'id_old',
        'parent' => 'parent',
        'merchant' => 'merchant',
        'pay_in_advance_account' => 'pay_in_advance_account',
        'payment_link_options' => 'payment_link_options',
        'approved' => 'approved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id_old' => 'setIdOld',
        'parent' => 'setParent',
        'merchant' => 'setMerchant',
        'pay_in_advance_account' => 'setPayInAdvanceAccount',
        'payment_link_options' => 'setPaymentLinkOptions',
        'approved' => 'setApproved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id_old' => 'getIdOld',
        'parent' => 'getParent',
        'merchant' => 'getMerchant',
        'pay_in_advance_account' => 'getPayInAdvanceAccount',
        'payment_link_options' => 'getPaymentLinkOptions',
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

        $this->container['id_old'] = $data['id_old'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['pay_in_advance_account'] = $data['pay_in_advance_account'] ?? null;
        $this->container['payment_link_options'] = $data['payment_link_options'] ?? null;
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
     * Gets id_old
     * @return int
     */
    public function getIdOld(): int
    {
        return $this->container['id_old'];
    }

    /**
     * Sets id_old
     * @param int|null $id_old ID in secupay Frontend
     * @return $this
     */
    public function setIdOld(?int $id_old): static
    {
        $this->container['id_old'] = $id_old;

        return $this;
    }

    /**
     * Gets parent
     * @return \Secuconnect\Client\Model\ParentModel
     */
    public function getParent(): ParentModel
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Secuconnect\Client\Model\ParentModel|null $parent parent
     * @return $this
     */
    public function setParent(?ParentModel $parent): static
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant(): ProductInstanceUID
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?ProductInstanceUID $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets pay_in_advance_account
     * @return \Secuconnect\Client\Model\BankAccountDescriptor
     */
    public function getPayInAdvanceAccount(): BankAccountDescriptor
    {
        return $this->container['pay_in_advance_account'];
    }

    /**
     * Sets pay_in_advance_account
     * @param \Secuconnect\Client\Model\BankAccountDescriptor|null $pay_in_advance_account pay_in_advance_account
     * @return $this
     */
    public function setPayInAdvanceAccount(?BankAccountDescriptor $pay_in_advance_account): static
    {
        $this->container['pay_in_advance_account'] = $pay_in_advance_account;

        return $this;
    }

    /**
     * Gets payment_link_options
     * @return \Secuconnect\Client\Model\PaymentLinkOptions
     */
    public function getPaymentLinkOptions(): PaymentLinkOptions
    {
        return $this->container['payment_link_options'];
    }

    /**
     * Sets payment_link_options
     * @param \Secuconnect\Client\Model\PaymentLinkOptions|null $payment_link_options payment_link_options
     * @return $this
     */
    public function setPaymentLinkOptions(?PaymentLinkOptions $payment_link_options): static
    {
        $this->container['payment_link_options'] = $payment_link_options;

        return $this;
    }

    /**
     * Gets approved
     * @return bool
     */
    public function getApproved(): bool
    {
        return $this->container['approved'];
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

