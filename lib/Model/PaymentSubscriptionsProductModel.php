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
 * PaymentSubscriptionsProductModel
 *
 * @category Class
 * @description PaymentSubscriptionsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSubscriptionsProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentSubscriptionsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'updated' => 'string',
        'smart_transaction' => '\Secuconnect\Client\Model\BaseProductModel',
        'merchant' => '\Secuconnect\Client\Model\BaseProductModel',
        'contract' => '\Secuconnect\Client\Model\BaseProductModel',
        'customer' => '\Secuconnect\Client\Model\BaseProductModel',
        'container' => '\Secuconnect\Client\Model\BaseProductModel',
        'plan' => '\Secuconnect\Client\Model\BaseProductModel',
        'start_at' => 'string',
        'status' => 'string',
        'paypal_subscription_id' => 'string',
        'billing_cycles' => '\Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'updated' => null,
        'smart_transaction' => null,
        'merchant' => null,
        'contract' => null,
        'customer' => null,
        'container' => null,
        'plan' => null,
        'start_at' => null,
        'status' => null,
        'paypal_subscription_id' => null,
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
        'smart_transaction' => 'smart_transaction',
        'merchant' => 'merchant',
        'contract' => 'contract',
        'customer' => 'customer',
        'container' => 'container',
        'plan' => 'plan',
        'start_at' => 'start_at',
        'status' => 'status',
        'paypal_subscription_id' => 'paypal_subscription_id',
        'billing_cycles' => 'billing_cycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'smart_transaction' => 'setSmartTransaction',
        'merchant' => 'setMerchant',
        'contract' => 'setContract',
        'customer' => 'setCustomer',
        'container' => 'setContainer',
        'plan' => 'setPlan',
        'start_at' => 'setStartAt',
        'status' => 'setStatus',
        'paypal_subscription_id' => 'setPaypalSubscriptionId',
        'billing_cycles' => 'setBillingCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'smart_transaction' => 'getSmartTransaction',
        'merchant' => 'getMerchant',
        'contract' => 'getContract',
        'customer' => 'getCustomer',
        'container' => 'getContainer',
        'plan' => 'getPlan',
        'start_at' => 'getStartAt',
        'status' => 'getStatus',
        'paypal_subscription_id' => 'getPaypalSubscriptionId',
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
        $this->container['smart_transaction'] = $data['smart_transaction'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['plan'] = $data['plan'] ?? null;
        $this->container['start_at'] = $data['start_at'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['paypal_subscription_id'] = $data['paypal_subscription_id'] ?? null;
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
     * Gets smart_transaction
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getSmartTransaction(): BaseProductModel|null
    {
        return $this->container['smart_transaction'] ?? null;
    }

    /**
     * Sets smart_transaction
     * @param \Secuconnect\Client\Model\BaseProductModel|null $smart_transaction smart_transaction
     * @return $this
     */
    public function setSmartTransaction(?BaseProductModel $smart_transaction): static
    {
        $this->container['smart_transaction'] = $smart_transaction;

        return $this;
    }

    /**
     * Gets merchant
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getMerchant(): BaseProductModel|null
    {
        return $this->container['merchant'] ?? null;
    }

    /**
     * Sets merchant
     * @param \Secuconnect\Client\Model\BaseProductModel|null $merchant merchant
     * @return $this
     */
    public function setMerchant(?BaseProductModel $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets contract
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getContract(): BaseProductModel|null
    {
        return $this->container['contract'] ?? null;
    }

    /**
     * Sets contract
     * @param \Secuconnect\Client\Model\BaseProductModel|null $contract contract
     * @return $this
     */
    public function setContract(?BaseProductModel $contract): static
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets customer
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getCustomer(): BaseProductModel|null
    {
        return $this->container['customer'] ?? null;
    }

    /**
     * Sets customer
     * @param \Secuconnect\Client\Model\BaseProductModel|null $customer customer
     * @return $this
     */
    public function setCustomer(?BaseProductModel $customer): static
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets container
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getContainer(): BaseProductModel|null
    {
        return $this->container['container'] ?? null;
    }

    /**
     * Sets container
     * @param \Secuconnect\Client\Model\BaseProductModel|null $container container
     * @return $this
     */
    public function setContainer(?BaseProductModel $container): static
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets plan
     * @return \Secuconnect\Client\Model\BaseProductModel
     */
    public function getPlan(): BaseProductModel|null
    {
        return $this->container['plan'] ?? null;
    }

    /**
     * Sets plan
     * @param \Secuconnect\Client\Model\BaseProductModel|null $plan plan
     * @return $this
     */
    public function setPlan(?BaseProductModel $plan): static
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets start_at
     * @return string
     */
    public function getStartAt(): string|null
    {
        return $this->container['start_at'] ?? null;
    }

    /**
     * Sets start_at
     * @param string|null $start_at start at
     * @return $this
     */
    public function setStartAt(?string $start_at): static
    {
        $this->container['start_at'] = $start_at;

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
     * @param string|null $status status
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets paypal_subscription_id
     * @return string
     */
    public function getPaypalSubscriptionId(): string|null
    {
        return $this->container['paypal_subscription_id'] ?? null;
    }

    /**
     * Sets paypal_subscription_id
     * @param string|null $paypal_subscription_id paypal_subscription_id
     * @return $this
     */
    public function setPaypalSubscriptionId(?string $paypal_subscription_id): static
    {
        $this->container['paypal_subscription_id'] = $paypal_subscription_id;

        return $this;
    }

    /**
     * Gets billing_cycles
     * @return \Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles
     */
    public function getBillingCycles(): PaymentSubscriptionsProductModelBillingCycles|null
    {
        return $this->container['billing_cycles'] ?? null;
    }

    /**
     * Sets billing_cycles
     * @param \Secuconnect\Client\Model\PaymentSubscriptionsProductModelBillingCycles|null $billing_cycles billing_cycles
     * @return $this
     */
    public function setBillingCycles(?PaymentSubscriptionsProductModelBillingCycles $billing_cycles): static
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

