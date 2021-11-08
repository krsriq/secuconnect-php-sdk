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
 * PaymentPlansProductModel
 *
 * @category Class
 * @description PaymentPlansProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentPlansProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentPlansProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'description' => 'string',
        'currency' => 'string',
        'paypal_plan_id' => 'string',
        'status' => 'string',
        'payment_methods' => 'string[]',
        'merchant' => '\Secuconnect\Client\Model\GeneralMerchantsProductModel',
        'billing_cycles' => '\Secuconnect\Client\Model\BillingCyclesItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'description' => null,
        'currency' => null,
        'paypal_plan_id' => null,
        'status' => null,
        'payment_methods' => null,
        'merchant' => null,
        'billing_cycles' => null
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
        'description' => 'description',
        'currency' => 'currency',
        'paypal_plan_id' => 'paypal_plan_id',
        'status' => 'status',
        'payment_methods' => 'payment_methods',
        'merchant' => 'merchant',
        'billing_cycles' => 'billing_cycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'paypal_plan_id' => 'setPaypalPlanId',
        'status' => 'setStatus',
        'payment_methods' => 'setPaymentMethods',
        'merchant' => 'setMerchant',
        'billing_cycles' => 'setBillingCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'paypal_plan_id' => 'getPaypalPlanId',
        'status' => 'getStatus',
        'payment_methods' => 'getPaymentMethods',
        'merchant' => 'getMerchant',
        'billing_cycles' => 'getBillingCycles'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['paypal_plan_id'] = $data['paypal_plan_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['billing_cycles'] = $data['billing_cycles'] ?? null;
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
     * Gets description
     * @return string
     */
    public function getDescription(): string|null
    {
        return $this->container['description'] ?? null;
    }

    /**
     * Sets description
     * @param string|null $description Description of payment plan
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency(): string|null
    {
        return $this->container['currency'] ?? null;
    }

    /**
     * Sets currency
     * @param string|null $currency ISO currency code
     * @return $this
     */
    public function setCurrency(?string $currency): static
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets paypal_plan_id
     * @return string
     */
    public function getPaypalPlanId(): string|null
    {
        return $this->container['paypal_plan_id'] ?? null;
    }

    /**
     * Sets paypal_plan_id
     * @param string|null $paypal_plan_id Payment plan id
     * @return $this
     */
    public function setPaypalPlanId(?string $paypal_plan_id): static
    {
        $this->container['paypal_plan_id'] = $paypal_plan_id;

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
     * @param string|null $status Payment plan status
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_methods
     * @return string[]
     */
    public function getPaymentMethods(): array|null
    {
        return $this->container['payment_methods'] ?? null;
    }

    /**
     * Sets payment_methods
     * @param string[]|null $payment_methods Payment methods
     * @return $this
     */
    public function setPaymentMethods(?array $payment_methods): static
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\GeneralMerchantsProductModel
     */
    public function getMerchant(): GeneralMerchantsProductModel|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\GeneralMerchantsProductModel|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?GeneralMerchantsProductModel $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets billing_cycles
     * @return \Secuconnect\Client\Model\BillingCyclesItem[]
     */
    public function getBillingCycles(): array|null
    {
        return $this->container['billing_cycles'] ?? null;
    }

    /**
     * Sets billing_cycles
     * @param \Secuconnect\Client\Model\BillingCyclesItem[]|null $billing_cycles Billing cycles
     * @return $this
     */
    public function setBillingCycles(?array $billing_cycles): static
    {
        $this->container['billing_cycles'] = $billing_cycles;

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

