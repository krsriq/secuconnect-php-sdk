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
 * UploadidentsProductDTO
 *
 * @category Class
 * @description UploadidentsProductDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadidentsProductDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'UploadidentsProductDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'merchant_id' => 'string',
        'payment_id' => 'string',
        'contract_id' => 'string',
        'apikey' => 'string',
        'service_issue_id' => 'int',
        'document_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'merchant_id' => null,
        'payment_id' => null,
        'contract_id' => null,
        'apikey' => null,
        'service_issue_id' => null,
        'document_ids' => null
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
        'merchant_id' => 'merchant_id',
        'payment_id' => 'payment_id',
        'contract_id' => 'contract_id',
        'apikey' => 'apikey',
        'service_issue_id' => 'service_issue_id',
        'document_ids' => 'document_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'merchant_id' => 'setMerchantId',
        'payment_id' => 'setPaymentId',
        'contract_id' => 'setContractId',
        'apikey' => 'setApikey',
        'service_issue_id' => 'setServiceIssueId',
        'document_ids' => 'setDocumentIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'merchant_id' => 'getMerchantId',
        'payment_id' => 'getPaymentId',
        'contract_id' => 'getContractId',
        'apikey' => 'getApikey',
        'service_issue_id' => 'getServiceIssueId',
        'document_ids' => 'getDocumentIds'
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
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['payment_id'] = $data['payment_id'] ?? null;
        $this->container['contract_id'] = $data['contract_id'] ?? null;
        $this->container['apikey'] = $data['apikey'] ?? null;
        $this->container['service_issue_id'] = $data['service_issue_id'] ?? null;
        $this->container['document_ids'] = $data['document_ids'] ?? null;
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
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string|null $merchant_id Merchant ID
     * @return $this
     */
    public function setMerchantId(?string $merchant_id): static
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     * @param string|null $payment_id Payment ID
     * @return $this
     */
    public function setPaymentId(?string $payment_id): static
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets contract_id
     * @return string
     */
    public function getContractId(): string
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param string|null $contract_id Contract ID
     * @return $this
     */
    public function setContractId(?string $contract_id): static
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets apikey
     * @return string
     */
    public function getApikey(): string
    {
        return $this->container['apikey'];
    }

    /**
     * Sets apikey
     * @param string|null $apikey Api Key
     * @return $this
     */
    public function setApikey(?string $apikey): static
    {
        $this->container['apikey'] = $apikey;

        return $this;
    }

    /**
     * Gets service_issue_id
     * @return int
     */
    public function getServiceIssueId(): int
    {
        return $this->container['service_issue_id'];
    }

    /**
     * Sets service_issue_id
     * @param int|null $service_issue_id Service issue id
     * @return $this
     */
    public function setServiceIssueId(?int $service_issue_id): static
    {
        $this->container['service_issue_id'] = $service_issue_id;

        return $this;
    }

    /**
     * Gets document_ids
     * @return string[]
     */
    public function getDocumentIds(): array
    {
        return $this->container['document_ids'];
    }

    /**
     * Sets document_ids
     * @param string[]|null $document_ids List of documents ids
     * @return $this
     */
    public function setDocumentIds(?array $document_ids): static
    {
        $this->container['document_ids'] = $document_ids;

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

