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
 * PaymentContractsDTORequestId
 *
 * @category Class
 * @description PaymentContractsDTORequestId
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContractsDTORequestId implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'PaymentContractsDTORequestId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'contact' => '\Secuconnect\Client\Model\Contact',
        'project' => 'string',
        'payout_account' => '\Secuconnect\Client\Model\PaymentInformation',
        'iframe_opts' => '\Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts',
        'payin_account' => 'bool',
        'create_first_store' => 'bool',
        'store_name' => 'string',
        'payout_purpose' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'contact' => null,
        'project' => null,
        'payout_account' => null,
        'iframe_opts' => null,
        'payin_account' => null,
        'create_first_store' => null,
        'store_name' => null,
        'payout_purpose' => null
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
        'contact' => 'contact',
        'project' => 'project',
        'payout_account' => 'payout_account',
        'iframe_opts' => 'iframe_opts',
        'payin_account' => 'payin_account',
        'create_first_store' => 'create_first_store',
        'store_name' => 'store_name',
        'payout_purpose' => 'payout_purpose'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'contact' => 'setContact',
        'project' => 'setProject',
        'payout_account' => 'setPayoutAccount',
        'iframe_opts' => 'setIframeOpts',
        'payin_account' => 'setPayinAccount',
        'create_first_store' => 'setCreateFirstStore',
        'store_name' => 'setStoreName',
        'payout_purpose' => 'setPayoutPurpose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'contact' => 'getContact',
        'project' => 'getProject',
        'payout_account' => 'getPayoutAccount',
        'iframe_opts' => 'getIframeOpts',
        'payin_account' => 'getPayinAccount',
        'create_first_store' => 'getCreateFirstStore',
        'store_name' => 'getStoreName',
        'payout_purpose' => 'getPayoutPurpose'
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
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['project'] = $data['project'] ?? null;
        $this->container['payout_account'] = $data['payout_account'] ?? null;
        $this->container['iframe_opts'] = $data['iframe_opts'] ?? null;
        $this->container['payin_account'] = $data['payin_account'] ?? false;
        $this->container['create_first_store'] = $data['create_first_store'] ?? false;
        $this->container['store_name'] = $data['store_name'] ?? null;
        $this->container['payout_purpose'] = $data['payout_purpose'] ?? null;
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
     * Gets contact
     * @return \Secuconnect\Client\Model\Contact
     */
    public function getContact(): Contact
    {
        return $this->container['contact'];
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
     * Gets project
     * @return string
     */
    public function getProject(): string
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     * @param string|null $project Name of the project (must be unique)
     * @return $this
     */
    public function setProject(?string $project): static
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets payout_account
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPayoutAccount(): PaymentInformation
    {
        return $this->container['payout_account'];
    }

    /**
     * Sets payout_account
     * @param \Secuconnect\Client\Model\PaymentInformation|null $payout_account payout_account
     * @return $this
     */
    public function setPayoutAccount(?PaymentInformation $payout_account): static
    {
        $this->container['payout_account'] = $payout_account;

        return $this;
    }

    /**
     * Gets iframe_opts
     * @return \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts
     */
    public function getIframeOpts(): PaymentContractsDTOIFrameOpts
    {
        return $this->container['iframe_opts'];
    }

    /**
     * Sets iframe_opts
     * @param \Secuconnect\Client\Model\PaymentContractsDTOIFrameOpts|null $iframe_opts iframe_opts
     * @return $this
     */
    public function setIframeOpts(?PaymentContractsDTOIFrameOpts $iframe_opts): static
    {
        $this->container['iframe_opts'] = $iframe_opts;

        return $this;
    }

    /**
     * Gets payin_account
     * @return bool
     */
    public function getPayinAccount(): bool
    {
        return $this->container['payin_account'];
    }

    /**
     * Sets payin_account
     * @param bool|null $payin_account Pay in account
     * @return $this
     */
    public function setPayinAccount(?bool $payin_account): static
    {
        $this->container['payin_account'] = $payin_account;

        return $this;
    }

    /**
     * Gets create_first_store
     * @return bool
     */
    public function getCreateFirstStore(): bool
    {
        return $this->container['create_first_store'];
    }

    /**
     * Sets create_first_store
     * @param bool|null $create_first_store Create first store
     * @return $this
     */
    public function setCreateFirstStore(?bool $create_first_store): static
    {
        $this->container['create_first_store'] = $create_first_store;

        return $this;
    }

    /**
     * Gets store_name
     * @return string
     */
    public function getStoreName(): string
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     * @param string|null $store_name Store name
     * @return $this
     */
    public function setStoreName(?string $store_name): static
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets payout_purpose
     * @return string
     */
    public function getPayoutPurpose(): string
    {
        return $this->container['payout_purpose'];
    }

    /**
     * Sets payout_purpose
     * @param string|null $payout_purpose Payout purpose
     * @return $this
     */
    public function setPayoutPurpose(?string $payout_purpose): static
    {
        $this->container['payout_purpose'] = $payout_purpose;

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

