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
 * PaymentContractsRequestIdResult
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsRequestIdResult implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContractsRequestIdResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'apikey' => 'string',
        'payin_account' => '\Secuconnect\Client\Model\PaymentInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'contract' => null,
        'merchant' => null,
        'store' => null,
        'apikey' => null,
        'payin_account' => null
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
        'contract' => 'contract',
        'merchant' => 'merchant',
        'store' => 'store',
        'apikey' => 'apikey',
        'payin_account' => 'payin_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'contract' => 'setContract',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'apikey' => 'setApikey',
        'payin_account' => 'setPayinAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'contract' => 'getContract',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'apikey' => 'getApikey',
        'payin_account' => 'getPayinAccount'
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
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['apikey'] = $data['apikey'] ?? null;
        $this->container['payin_account'] = $data['payin_account'] ?? null;
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
     * Gets store
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getStore(): ProductInstanceUID|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $store store
     * @return $this
     */
    public function setStore(?ProductInstanceUID $store): static
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets apikey
     * @return string
     */
    public function getApikey(): string|null
    {
        return $this->container['apikey'] ?? null;
    }

    /**
     * Sets apikey
     * @param string|null $apikey Returns the apikey of the created merchant
     * @return $this
     */
    public function setApikey(?string $apikey): static
    {
        $this->container['apikey'] = $apikey;

        return $this;
    }

    /**
     * Gets payin_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayinAccount(): PaymentInformation|null
    {
        return $this->container['payin_account'] ?? null;
    }

    /**
     * Sets payin_account
     * @param \Secuconnect\Client\Model\PaymentInformation|null $payin_account payin_account
     * @return $this
     */
    public function setPayinAccount(?PaymentInformation $payin_account): static
    {
        $this->container['payin_account'] = $payin_account;

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

