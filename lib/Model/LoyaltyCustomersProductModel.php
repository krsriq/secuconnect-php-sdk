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
 * LoyaltyCustomersProductModel
 *
 * @category Class
 * @description LoyaltyCustomersProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCustomersProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyCustomersProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'contact' => '\Secuconnect\Client\Model\Contact',
        'merchant_contact' => '\Secuconnect\Client\Model\Contact',
        'account_contact' => '\Secuconnect\Client\Model\Contact',
        'payment_container' => '\Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[]',
        'customernumber' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'merchant' => null,
        'contact' => null,
        'merchant_contact' => null,
        'account_contact' => null,
        'payment_container' => null,
        'customernumber' => null,
        'note' => null
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
        'merchant' => 'merchant',
        'contact' => 'contact',
        'merchant_contact' => 'merchant_contact',
        'account_contact' => 'account_contact',
        'payment_container' => 'payment_container',
        'customernumber' => 'customernumber',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'merchant' => 'setMerchant',
        'contact' => 'setContact',
        'merchant_contact' => 'setMerchantContact',
        'account_contact' => 'setAccountContact',
        'payment_container' => 'setPaymentContainer',
        'customernumber' => 'setCustomernumber',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'merchant' => 'getMerchant',
        'contact' => 'getContact',
        'merchant_contact' => 'getMerchantContact',
        'account_contact' => 'getAccountContact',
        'payment_container' => 'getPaymentContainer',
        'customernumber' => 'getCustomernumber',
        'note' => 'getNote'
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
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['merchant_contact'] = $data['merchant_contact'] ?? null;
        $this->container['account_contact'] = $data['account_contact'] ?? null;
        $this->container['payment_container'] = $data['payment_container'] ?? null;
        $this->container['customernumber'] = $data['customernumber'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
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
     * Gets merchant
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getMerchant(): ProductInstanceUID|null
    {
        return $this->container['merchant'] ?? null;
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
     * Gets contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getContact(): Contact|null
    {
        return $this->container['contact'] ?? null;
    }

    /**
     * Sets contact
     * @param \Secuconnect\Client\Model\Contact|null $contact contact
     * @return $this
     */
    public function setContact(?Contact $contact): static
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets merchant_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getMerchantContact(): Contact|null
    {
        return $this->container['merchant_contact'] ?? null;
    }

    /**
     * Sets merchant_contact
     * @param \Secuconnect\Client\Model\Contact|null $merchant_contact merchant_contact
     * @return $this
     */
    public function setMerchantContact(?Contact $merchant_contact): static
    {
        $this->container['merchant_contact'] = $merchant_contact;

        return $this;
    }

    /**
     * Gets account_contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getAccountContact(): Contact|null
    {
        return $this->container['account_contact'] ?? null;
    }

    /**
     * Sets account_contact
     * @param \Secuconnect\Client\Model\Contact|null $account_contact account_contact
     * @return $this
     */
    public function setAccountContact(?Contact $account_contact): static
    {
        $this->container['account_contact'] = $account_contact;

        return $this;
    }

    /**
     * Gets payment_container
     * @return \Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[]
     */
    public function getPaymentContainer(): array|null
    {
        return $this->container['payment_container'] ?? null;
    }

    /**
     * Sets payment_container
     * @param \Secuconnect\Client\Model\LoyaltyCustomersPaymentContainerModel[]|null $payment_container payment container
     * @return $this
     */
    public function setPaymentContainer(?array $payment_container): static
    {
        $this->container['payment_container'] = $payment_container;

        return $this;
    }

    /**
     * Gets customernumber
     * @return string
     */
    public function getCustomernumber(): string|null
    {
        return $this->container['customernumber'] ?? null;
    }

    /**
     * Sets customernumber
     * @param string|null $customernumber Customer number
     * @return $this
     */
    public function setCustomernumber(?string $customernumber): static
    {
        $this->container['customernumber'] = $customernumber;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote(): string|null
    {
        return $this->container['note'] ?? null;
    }

    /**
     * Sets note
     * @param string|null $note Customer number
     * @return $this
     */
    public function setNote(?string $note): static
    {
        $this->container['note'] = $note;

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

