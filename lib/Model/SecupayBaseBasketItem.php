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
 * SecupayBaseBasketItem
 *
 * @category Class
 * @description Item describing single position in basket in transaction
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecupayBaseBasketItem implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SecupayBaseBasketItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'item_type' => 'string',
        'article_number' => 'string',
        'quantity' => 'int',
        'name' => 'string',
        'model' => 'string',
        'ean' => 'string',
        'tax' => 'string',
        'total' => 'int',
        'price' => 'int',
        'apikey' => 'string',
        'plan_id' => 'string',
        'start_at' => 'string',
        'transaction_hash' => 'string',
        'contract_id' => 'string',
        'reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'item_type' => null,
        'article_number' => null,
        'quantity' => null,
        'name' => null,
        'model' => null,
        'ean' => null,
        'tax' => null,
        'total' => null,
        'price' => null,
        'apikey' => null,
        'plan_id' => null,
        'start_at' => null,
        'transaction_hash' => null,
        'contract_id' => null,
        'reference_id' => null
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
        'item_type' => 'item_type',
        'article_number' => 'article_number',
        'quantity' => 'quantity',
        'name' => 'name',
        'model' => 'model',
        'ean' => 'ean',
        'tax' => 'tax',
        'total' => 'total',
        'price' => 'price',
        'apikey' => 'apikey',
        'plan_id' => 'plan_id',
        'start_at' => 'start_at',
        'transaction_hash' => 'transaction_hash',
        'contract_id' => 'contract_id',
        'reference_id' => 'reference_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'item_type' => 'setItemType',
        'article_number' => 'setArticleNumber',
        'quantity' => 'setQuantity',
        'name' => 'setName',
        'model' => 'setModel',
        'ean' => 'setEan',
        'tax' => 'setTax',
        'total' => 'setTotal',
        'price' => 'setPrice',
        'apikey' => 'setApikey',
        'plan_id' => 'setPlanId',
        'start_at' => 'setStartAt',
        'transaction_hash' => 'setTransactionHash',
        'contract_id' => 'setContractId',
        'reference_id' => 'setReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'item_type' => 'getItemType',
        'article_number' => 'getArticleNumber',
        'quantity' => 'getQuantity',
        'name' => 'getName',
        'model' => 'getModel',
        'ean' => 'getEan',
        'tax' => 'getTax',
        'total' => 'getTotal',
        'price' => 'getPrice',
        'apikey' => 'getApikey',
        'plan_id' => 'getPlanId',
        'start_at' => 'getStartAt',
        'transaction_hash' => 'getTransactionHash',
        'contract_id' => 'getContractId',
        'reference_id' => 'getReferenceId'
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
        $this->container['item_type'] = $data['item_type'] ?? 'article';
        $this->container['article_number'] = $data['article_number'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['apikey'] = $data['apikey'] ?? null;
        $this->container['plan_id'] = $data['plan_id'] ?? null;
        $this->container['start_at'] = $data['start_at'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['contract_id'] = $data['contract_id'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
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
     * Gets item_type
     * @return string
     */
    public function getItemType(): string
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     * @param string|null $item_type Line type {'article', 'sub_transaction', 'stakeholder_payment', 'shipping', 'subscription'}
     * @return $this
     */
    public function setItemType(?string $item_type): static
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets article_number
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     * @param string|null $article_number Your article number, storage key unit (SKU)
     * @return $this
     */
    public function setArticleNumber(?string $article_number): static
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int|null $quantity Quantity of articles in item
     * @return $this
     */
    public function setQuantity(?int $quantity): static
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string|null $name Descriptive article name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel(): string
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string|null $model Model of item
     * @return $this
     */
    public function setModel(?string $model): static
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan(): string
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string|null $ean ean
     * @return $this
     */
    public function setEan(?string $ean): static
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets tax
     * @return string
     */
    public function getTax(): string
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param string|null $tax Tax rate in percent (integer values only)
     * @return $this
     */
    public function setTax(?string $tax): static
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal(): int
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int|null $total total
     * @return $this
     */
    public function setTotal(?int $total): static
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice(): int
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int|null $price price
     * @return $this
     */
    public function setPrice(?int $price): static
    {
        $this->container['price'] = $price;

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
     * @param string|null $apikey API key (only for stakeholder payments)
     * @return $this
     */
    public function setApikey(?string $apikey): static
    {
        $this->container['apikey'] = $apikey;

        return $this;
    }

    /**
     * Gets plan_id
     * @return string
     */
    public function getPlanId(): string
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     * @param string|null $plan_id Subscription plan id
     * @return $this
     */
    public function setPlanId(?string $plan_id): static
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets start_at
     * @return string
     */
    public function getStartAt(): string
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     * @param string|null $start_at Subscription start at date
     * @return $this
     */
    public function setStartAt(?string $start_at): static
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets transaction_hash
     * @return string
     */
    public function getTransactionHash(): string
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     * @param string|null $transaction_hash Original transaction hash (only for payouts)
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash): static
    {
        $this->container['transaction_hash'] = $transaction_hash;

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
     * @param string|null $contract_id Contract ID (only for stakeholder payments)
     * @return $this
     */
    public function setContractId(?string $contract_id): static
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId(): string
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string|null $reference_id Unique line identifier, used to maintain the basket before the transaction is executed
     * @return $this
     */
    public function setReferenceId(?string $reference_id): static
    {
        $this->container['reference_id'] = $reference_id;

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

