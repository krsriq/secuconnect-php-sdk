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
 * LoyaltyMerchantcardsProductWithReceiptModel
 *
 * @category Class
 * @description LoyaltyMerchantcardsProductWithReceiptModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyMerchantcardsProductWithReceiptModel extends LoyaltyMerchantcardsProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'LoyaltyMerchantcardsProductWithReceiptModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'receipt_header' => '\Secuconnect\Client\Model\ReceiptType[]',
        'receipt' => '\Secuconnect\Client\Model\ReceiptTypeValue[]',
        'trans_id' => 'int',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'receipt_header' => null,
        'receipt' => null,
        'trans_id' => null,
        'amount' => null
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
        'receipt_header' => 'receipt_header',
        'receipt' => 'receipt',
        'trans_id' => 'trans_id',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'receipt_header' => 'setReceiptHeader',
        'receipt' => 'setReceipt',
        'trans_id' => 'setTransId',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'receipt_header' => 'getReceiptHeader',
        'receipt' => 'getReceipt',
        'trans_id' => 'getTransId',
        'amount' => 'getAmount'
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

        $this->container['receipt_header'] = $data['receipt_header'] ?? null;
        $this->container['receipt'] = $data['receipt'] ?? null;
        $this->container['trans_id'] = $data['trans_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
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
     * Gets receipt_header
     * @return \Secuconnect\Client\Model\ReceiptType[]
     */
    public function getReceiptHeader(): array|null
    {
        return $this->container['receipt_header'] ?? null;
    }

    /**
     * Sets receipt_header
     * @param \Secuconnect\Client\Model\ReceiptType[]|null $receipt_header Receipt header
     * @return $this
     */
    public function setReceiptHeader(?array $receipt_header): static
    {
        $this->container['receipt_header'] = $receipt_header;

        return $this;
    }

    /**
     * Gets receipt
     * @return \Secuconnect\Client\Model\ReceiptTypeValue[]
     */
    public function getReceipt(): array|null
    {
        return $this->container['receipt'] ?? null;
    }

    /**
     * Sets receipt
     * @param \Secuconnect\Client\Model\ReceiptTypeValue[]|null $receipt Receipt
     * @return $this
     */
    public function setReceipt(?array $receipt): static
    {
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets trans_id
     * @return int
     */
    public function getTransId(): int|null
    {
        return $this->container['trans_id'] ?? null;
    }

    /**
     * Sets trans_id
     * @param int|null $trans_id Created TransactionId
     * @return $this
     */
    public function setTransId(?int $trans_id): static
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount(): int|null
    {
        return $this->container['amount'] ?? null;
    }

    /**
     * Sets amount
     * @param int|null $amount amount
     * @return $this
     */
    public function setAmount(?int $amount): static
    {
        $this->container['amount'] = $amount;

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

