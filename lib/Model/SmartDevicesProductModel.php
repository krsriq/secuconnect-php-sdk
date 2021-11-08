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
 * SmartDevicesProductModel
 *
 * @category Class
 * @description SmartDevicesProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartDevicesProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'created' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store' => '\Secuconnect\Client\Model\Store',
        'contract' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'vendor' => 'string',
        'vendor_uid' => 'string',
        'type' => 'string',
        'device' => '\Secuconnect\Client\Model\SmartDevicesDevice',
        'routing' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'user_pin' => 'string',
        'products' => '\Secuconnect\Client\Model\SmartDevicesProducts',
        'description' => 'string',
        'tid' => 'string',
        'idle_screen_register' => 'string',
        'idle_screen_terminal' => 'string',
        'online' => 'bool',
        'refresh' => 'int',
        'terminal_type' => 'string',
        'base_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'created' => null,
        'merchant' => null,
        'store' => null,
        'contract' => null,
        'vendor' => null,
        'vendor_uid' => null,
        'type' => null,
        'device' => null,
        'routing' => null,
        'user_pin' => null,
        'products' => null,
        'description' => null,
        'tid' => null,
        'idle_screen_register' => null,
        'idle_screen_terminal' => null,
        'online' => null,
        'refresh' => null,
        'terminal_type' => null,
        'base_version' => null
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
        'store' => 'store',
        'contract' => 'contract',
        'vendor' => 'vendor',
        'vendor_uid' => 'vendor_uid',
        'type' => 'type',
        'device' => 'device',
        'routing' => 'routing',
        'user_pin' => 'user_pin',
        'products' => 'products',
        'description' => 'description',
        'tid' => 'tid',
        'idle_screen_register' => 'idle_screen_register',
        'idle_screen_terminal' => 'idle_screen_terminal',
        'online' => 'online',
        'refresh' => 'refresh',
        'terminal_type' => 'terminal_type',
        'base_version' => 'base_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'created' => 'setCreated',
        'merchant' => 'setMerchant',
        'store' => 'setStore',
        'contract' => 'setContract',
        'vendor' => 'setVendor',
        'vendor_uid' => 'setVendorUid',
        'type' => 'setType',
        'device' => 'setDevice',
        'routing' => 'setRouting',
        'user_pin' => 'setUserPin',
        'products' => 'setProducts',
        'description' => 'setDescription',
        'tid' => 'setTid',
        'idle_screen_register' => 'setIdleScreenRegister',
        'idle_screen_terminal' => 'setIdleScreenTerminal',
        'online' => 'setOnline',
        'refresh' => 'setRefresh',
        'terminal_type' => 'setTerminalType',
        'base_version' => 'setBaseVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'created' => 'getCreated',
        'merchant' => 'getMerchant',
        'store' => 'getStore',
        'contract' => 'getContract',
        'vendor' => 'getVendor',
        'vendor_uid' => 'getVendorUid',
        'type' => 'getType',
        'device' => 'getDevice',
        'routing' => 'getRouting',
        'user_pin' => 'getUserPin',
        'products' => 'getProducts',
        'description' => 'getDescription',
        'tid' => 'getTid',
        'idle_screen_register' => 'getIdleScreenRegister',
        'idle_screen_terminal' => 'getIdleScreenTerminal',
        'online' => 'getOnline',
        'refresh' => 'getRefresh',
        'terminal_type' => 'getTerminalType',
        'base_version' => 'getBaseVersion'
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
        $this->container['store'] = $data['store'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['vendor'] = $data['vendor'] ?? null;
        $this->container['vendor_uid'] = $data['vendor_uid'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['routing'] = $data['routing'] ?? null;
        $this->container['user_pin'] = $data['user_pin'] ?? null;
        $this->container['products'] = $data['products'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['tid'] = $data['tid'] ?? null;
        $this->container['idle_screen_register'] = $data['idle_screen_register'] ?? null;
        $this->container['idle_screen_terminal'] = $data['idle_screen_terminal'] ?? null;
        $this->container['online'] = $data['online'] ?? null;
        $this->container['refresh'] = $data['refresh'] ?? null;
        $this->container['terminal_type'] = $data['terminal_type'] ?? null;
        $this->container['base_version'] = $data['base_version'] ?? null;
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
     * Gets store
     * @return \Secuconnect\Client\Model\Store
     */
    public function getStore(): Store|null
    {
        return $this->container['store'] ?? null;
    }

    /**
     * Sets store
     * @param \Secuconnect\Client\Model\Store|null $store store
     * @return $this
     */
    public function setStore(?Store $store): static
    {
        $this->container['store'] = $store;

        return $this;
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
     * Gets vendor
     * @return string
     */
    public function getVendor(): string|null
    {
        return $this->container['vendor'] ?? null;
    }

    /**
     * Sets vendor
     * @param string|null $vendor Vendor
     * @return $this
     */
    public function setVendor(?string $vendor): static
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets vendor_uid
     * @return string
     */
    public function getVendorUid(): string|null
    {
        return $this->container['vendor_uid'] ?? null;
    }

    /**
     * Sets vendor_uid
     * @param string|null $vendor_uid Vendor uid
     * @return $this
     */
    public function setVendorUid(?string $vendor_uid): static
    {
        $this->container['vendor_uid'] = $vendor_uid;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType(): string|null
    {
        return $this->container['type'] ?? null;
    }

    /**
     * Sets type
     * @param string|null $type Type
     * @return $this
     */
    public function setType(?string $type): static
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets device
     * @return \Secuconnect\Client\Model\SmartDevicesDevice
     */
    public function getDevice(): SmartDevicesDevice|null
    {
        return $this->container['device'] ?? null;
    }

    /**
     * Sets device
     * @param \Secuconnect\Client\Model\SmartDevicesDevice|null $device device
     * @return $this
     */
    public function setDevice(?SmartDevicesDevice $device): static
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets routing
     * @return \Secuconnect\Client\Model\ProductInstanceUID
     */
    public function getRouting(): ProductInstanceUID|null
    {
        return $this->container['routing'] ?? null;
    }

    /**
     * Sets routing
     * @param \Secuconnect\Client\Model\ProductInstanceUID|null $routing routing
     * @return $this
     */
    public function setRouting(?ProductInstanceUID $routing): static
    {
        $this->container['routing'] = $routing;

        return $this;
    }

    /**
     * Gets user_pin
     * @return string
     */
    public function getUserPin(): string|null
    {
        return $this->container['user_pin'] ?? null;
    }

    /**
     * Sets user_pin
     * @param string|null $user_pin User pin
     * @return $this
     */
    public function setUserPin(?string $user_pin): static
    {
        $this->container['user_pin'] = $user_pin;

        return $this;
    }

    /**
     * Gets products
     * @return \Secuconnect\Client\Model\SmartDevicesProducts
     */
    public function getProducts(): SmartDevicesProducts|null
    {
        return $this->container['products'] ?? null;
    }

    /**
     * Sets products
     * @param \Secuconnect\Client\Model\SmartDevicesProducts|null $products products
     * @return $this
     */
    public function setProducts(?SmartDevicesProducts $products): static
    {
        $this->container['products'] = $products;

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
     * @param string|null $description Description
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid(): string|null
    {
        return $this->container['tid'] ?? null;
    }

    /**
     * Sets tid
     * @param string|null $tid TID
     * @return $this
     */
    public function setTid(?string $tid): static
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets idle_screen_register
     * @return string
     */
    public function getIdleScreenRegister(): string|null
    {
        return $this->container['idle_screen_register'] ?? null;
    }

    /**
     * Sets idle_screen_register
     * @param string|null $idle_screen_register Idle screen register
     * @return $this
     */
    public function setIdleScreenRegister(?string $idle_screen_register): static
    {
        $this->container['idle_screen_register'] = $idle_screen_register;

        return $this;
    }

    /**
     * Gets idle_screen_terminal
     * @return string
     */
    public function getIdleScreenTerminal(): string|null
    {
        return $this->container['idle_screen_terminal'] ?? null;
    }

    /**
     * Sets idle_screen_terminal
     * @param string|null $idle_screen_terminal Idle screen terminal
     * @return $this
     */
    public function setIdleScreenTerminal(?string $idle_screen_terminal): static
    {
        $this->container['idle_screen_terminal'] = $idle_screen_terminal;

        return $this;
    }

    /**
     * Gets online
     * @return bool
     */
    public function getOnline(): bool|null
    {
        return $this->container['online'] ?? null;
    }

    /**
     * Sets online
     * @param bool|null $online Online
     * @return $this
     */
    public function setOnline(?bool $online): static
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets refresh
     * @return int
     */
    public function getRefresh(): int|null
    {
        return $this->container['refresh'] ?? null;
    }

    /**
     * Sets refresh
     * @param int|null $refresh Last refresh timestamp
     * @return $this
     */
    public function setRefresh(?int $refresh): static
    {
        $this->container['refresh'] = $refresh;

        return $this;
    }

    /**
     * Gets terminal_type
     * @return string
     */
    public function getTerminalType(): string|null
    {
        return $this->container['terminal_type'] ?? null;
    }

    /**
     * Sets terminal_type
     * @param string|null $terminal_type Terminal type
     * @return $this
     */
    public function setTerminalType(?string $terminal_type): static
    {
        $this->container['terminal_type'] = $terminal_type;

        return $this;
    }

    /**
     * Gets base_version
     * @return string
     */
    public function getBaseVersion(): string|null
    {
        return $this->container['base_version'] ?? null;
    }

    /**
     * Sets base_version
     * @param string|null $base_version Base version
     * @return $this
     */
    public function setBaseVersion(?string $base_version): static
    {
        $this->container['base_version'] = $base_version;

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

