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
 * GeneralStoresProductModel
 *
 * @category Class
 * @description GeneralStoresProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresProductModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeneralStoresProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'id_old' => 'string',
        'merchant' => '\Secuconnect\Client\Model\ProductInstanceUID',
        'store_name' => 'string',
        'facebook_id' => 'string',
        'source' => 'string',
        'key' => 'string',
        'hash' => 'string',
        'address_components' => '\Secuconnect\Client\Model\AddressComponents[]',
        'address_formatted' => 'string',
        'phone_number_formatted' => 'string',
        'geometry' => '\Secuconnect\Client\Model\GeoAddressGeometry',
        'name' => 'string',
        'name_raw' => 'string',
        'photo_main' => 'string',
        'photo' => 'string[]',
        'category_main' => 'string',
        'category' => 'string[]',
        'url_googleplus' => 'string',
        'url_website' => 'string',
        'open_hours' => '\Secuconnect\Client\Model\OpenHours[]',
        'open_now' => 'bool',
        'open_time' => 'string',
        'utc_offset' => 'string',
        'assigned_by' => '\Secuconnect\Client\Model\AssignedBy[]',
        'invited_by' => '\Secuconnect\Client\Model\InvitedBy[]',
        'has_beacon' => 'bool',
        'acceptance_point' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'id_old' => 'id',
        'merchant' => null,
        'store_name' => null,
        'facebook_id' => null,
        'source' => null,
        'key' => null,
        'hash' => null,
        'address_components' => null,
        'address_formatted' => null,
        'phone_number_formatted' => null,
        'geometry' => null,
        'name' => null,
        'name_raw' => null,
        'photo_main' => null,
        'photo' => null,
        'category_main' => null,
        'category' => null,
        'url_googleplus' => null,
        'url_website' => null,
        'open_hours' => null,
        'open_now' => null,
        'open_time' => null,
        'utc_offset' => null,
        'assigned_by' => null,
        'invited_by' => null,
        'has_beacon' => null,
        'acceptance_point' => null
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
        'merchant' => 'merchant',
        'store_name' => 'store_name',
        'facebook_id' => 'facebook_id',
        'source' => 'source',
        'key' => 'key',
        'hash' => 'hash',
        'address_components' => 'address_components',
        'address_formatted' => 'address_formatted',
        'phone_number_formatted' => 'phone_number_formatted',
        'geometry' => 'geometry',
        'name' => 'name',
        'name_raw' => 'name_raw',
        'photo_main' => 'photo_main',
        'photo' => 'photo',
        'category_main' => 'category_main',
        'category' => 'category',
        'url_googleplus' => 'url_googleplus',
        'url_website' => 'url_website',
        'open_hours' => 'open_hours',
        'open_now' => 'open_now',
        'open_time' => 'open_time',
        'utc_offset' => 'utc_offset',
        'assigned_by' => 'assigned_by',
        'invited_by' => 'invited_by',
        'has_beacon' => 'has_beacon',
        'acceptance_point' => 'acceptance_point'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'id_old' => 'setIdOld',
        'merchant' => 'setMerchant',
        'store_name' => 'setStoreName',
        'facebook_id' => 'setFacebookId',
        'source' => 'setSource',
        'key' => 'setKey',
        'hash' => 'setHash',
        'address_components' => 'setAddressComponents',
        'address_formatted' => 'setAddressFormatted',
        'phone_number_formatted' => 'setPhoneNumberFormatted',
        'geometry' => 'setGeometry',
        'name' => 'setName',
        'name_raw' => 'setNameRaw',
        'photo_main' => 'setPhotoMain',
        'photo' => 'setPhoto',
        'category_main' => 'setCategoryMain',
        'category' => 'setCategory',
        'url_googleplus' => 'setUrlGoogleplus',
        'url_website' => 'setUrlWebsite',
        'open_hours' => 'setOpenHours',
        'open_now' => 'setOpenNow',
        'open_time' => 'setOpenTime',
        'utc_offset' => 'setUtcOffset',
        'assigned_by' => 'setAssignedBy',
        'invited_by' => 'setInvitedBy',
        'has_beacon' => 'setHasBeacon',
        'acceptance_point' => 'setAcceptancePoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'id_old' => 'getIdOld',
        'merchant' => 'getMerchant',
        'store_name' => 'getStoreName',
        'facebook_id' => 'getFacebookId',
        'source' => 'getSource',
        'key' => 'getKey',
        'hash' => 'getHash',
        'address_components' => 'getAddressComponents',
        'address_formatted' => 'getAddressFormatted',
        'phone_number_formatted' => 'getPhoneNumberFormatted',
        'geometry' => 'getGeometry',
        'name' => 'getName',
        'name_raw' => 'getNameRaw',
        'photo_main' => 'getPhotoMain',
        'photo' => 'getPhoto',
        'category_main' => 'getCategoryMain',
        'category' => 'getCategory',
        'url_googleplus' => 'getUrlGoogleplus',
        'url_website' => 'getUrlWebsite',
        'open_hours' => 'getOpenHours',
        'open_now' => 'getOpenNow',
        'open_time' => 'getOpenTime',
        'utc_offset' => 'getUtcOffset',
        'assigned_by' => 'getAssignedBy',
        'invited_by' => 'getInvitedBy',
        'has_beacon' => 'getHasBeacon',
        'acceptance_point' => 'getAcceptancePoint'
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
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
        $this->container['facebook_id'] = $data['facebook_id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['address_components'] = $data['address_components'] ?? null;
        $this->container['address_formatted'] = $data['address_formatted'] ?? null;
        $this->container['phone_number_formatted'] = $data['phone_number_formatted'] ?? null;
        $this->container['geometry'] = $data['geometry'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_raw'] = $data['name_raw'] ?? null;
        $this->container['photo_main'] = $data['photo_main'] ?? null;
        $this->container['photo'] = $data['photo'] ?? null;
        $this->container['category_main'] = $data['category_main'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['url_googleplus'] = $data['url_googleplus'] ?? null;
        $this->container['url_website'] = $data['url_website'] ?? null;
        $this->container['open_hours'] = $data['open_hours'] ?? null;
        $this->container['open_now'] = $data['open_now'] ?? null;
        $this->container['open_time'] = $data['open_time'] ?? null;
        $this->container['utc_offset'] = $data['utc_offset'] ?? null;
        $this->container['assigned_by'] = $data['assigned_by'] ?? null;
        $this->container['invited_by'] = $data['invited_by'] ?? null;
        $this->container['has_beacon'] = $data['has_beacon'] ?? null;
        $this->container['acceptance_point'] = $data['acceptance_point'] ?? null;
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
     * @return string
     */
    public function getIdOld(): string|null
    {
        return $this->container['id_old'] ?? null;
    }

    /**
     * Sets id_old
     * @param string|null $id_old ID in secupay Frontend
     * @return $this
     */
    public function setIdOld(?string $id_old): static
    {
        $this->container['id_old'] = $id_old;

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
     * Gets store_name
     * @return string
     */
    public function getStoreName(): string|null
    {
        return $this->container['store_name'] ?? null;
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
     * Gets facebook_id
     * @return string
     */
    public function getFacebookId(): string|null
    {
        return $this->container['facebook_id'] ?? null;
    }

    /**
     * Sets facebook_id
     * @param string|null $facebook_id Facebook ID
     * @return $this
     */
    public function setFacebookId(?string $facebook_id): static
    {
        $this->container['facebook_id'] = $facebook_id;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource(): string|null
    {
        return $this->container['source'] ?? null;
    }

    /**
     * Sets source
     * @param string|null $source Source
     * @return $this
     */
    public function setSource(?string $source): static
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey(): string|null
    {
        return $this->container['key'] ?? null;
    }

    /**
     * Sets key
     * @param string|null $key Key
     * @return $this
     */
    public function setKey(?string $key): static
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets hash
     * @return string
     */
    public function getHash(): string|null
    {
        return $this->container['hash'] ?? null;
    }

    /**
     * Sets hash
     * @param string|null $hash Hash
     * @return $this
     */
    public function setHash(?string $hash): static
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets address_components
     * @return \Secuconnect\Client\Model\AddressComponents[]
     */
    public function getAddressComponents(): array|null
    {
        return $this->container['address_components'] ?? null;
    }

    /**
     * Sets address_components
     * @param \Secuconnect\Client\Model\AddressComponents[]|null $address_components Address components
     * @return $this
     */
    public function setAddressComponents(?array $address_components): static
    {
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets address_formatted
     * @return string
     */
    public function getAddressFormatted(): string|null
    {
        return $this->container['address_formatted'] ?? null;
    }

    /**
     * Sets address_formatted
     * @param string|null $address_formatted Formatted address
     * @return $this
     */
    public function setAddressFormatted(?string $address_formatted): static
    {
        $this->container['address_formatted'] = $address_formatted;

        return $this;
    }

    /**
     * Gets phone_number_formatted
     * @return string
     */
    public function getPhoneNumberFormatted(): string|null
    {
        return $this->container['phone_number_formatted'] ?? null;
    }

    /**
     * Sets phone_number_formatted
     * @param string|null $phone_number_formatted Formatted phone number
     * @return $this
     */
    public function setPhoneNumberFormatted(?string $phone_number_formatted): static
    {
        $this->container['phone_number_formatted'] = $phone_number_formatted;

        return $this;
    }

    /**
     * Gets geometry
     * @return \Secuconnect\Client\Model\GeoAddressGeometry
     */
    public function getGeometry(): GeoAddressGeometry|null
    {
        return $this->container['geometry'] ?? null;
    }

    /**
     * Sets geometry
     * @param \Secuconnect\Client\Model\GeoAddressGeometry|null $geometry geometry
     * @return $this
     */
    public function setGeometry(?GeoAddressGeometry $geometry): static
    {
        $this->container['geometry'] = $geometry;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName(): string|null
    {
        return $this->container['name'] ?? null;
    }

    /**
     * Sets name
     * @param string|null $name Store name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_raw
     * @return string
     */
    public function getNameRaw(): string|null
    {
        return $this->container['name_raw'] ?? null;
    }

    /**
     * Sets name_raw
     * @param string|null $name_raw Raw store name
     * @return $this
     */
    public function setNameRaw(?string $name_raw): static
    {
        $this->container['name_raw'] = $name_raw;

        return $this;
    }

    /**
     * Gets photo_main
     * @return string
     */
    public function getPhotoMain(): string|null
    {
        return $this->container['photo_main'] ?? null;
    }

    /**
     * Sets photo_main
     * @param string|null $photo_main Main photo
     * @return $this
     */
    public function setPhotoMain(?string $photo_main): static
    {
        $this->container['photo_main'] = $photo_main;

        return $this;
    }

    /**
     * Gets photo
     * @return string[]
     */
    public function getPhoto(): array|null
    {
        return $this->container['photo'] ?? null;
    }

    /**
     * Sets photo
     * @param string[]|null $photo All photos
     * @return $this
     */
    public function setPhoto(?array $photo): static
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets category_main
     * @return string
     */
    public function getCategoryMain(): string|null
    {
        return $this->container['category_main'] ?? null;
    }

    /**
     * Sets category_main
     * @param string|null $category_main Main category
     * @return $this
     */
    public function setCategoryMain(?string $category_main): static
    {
        $this->container['category_main'] = $category_main;

        return $this;
    }

    /**
     * Gets category
     * @return string[]
     */
    public function getCategory(): array|null
    {
        return $this->container['category'] ?? null;
    }

    /**
     * Sets category
     * @param string[]|null $category All categories
     * @return $this
     */
    public function setCategory(?array $category): static
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets url_googleplus
     * @return string
     */
    public function getUrlGoogleplus(): string|null
    {
        return $this->container['url_googleplus'] ?? null;
    }

    /**
     * Sets url_googleplus
     * @param string|null $url_googleplus Google+ URL of the store
     * @return $this
     */
    public function setUrlGoogleplus(?string $url_googleplus): static
    {
        $this->container['url_googleplus'] = $url_googleplus;

        return $this;
    }

    /**
     * Gets url_website
     * @return string
     */
    public function getUrlWebsite(): string|null
    {
        return $this->container['url_website'] ?? null;
    }

    /**
     * Sets url_website
     * @param string|null $url_website Store website URL (e. g. a webpage of yours with the details of this store)
     * @return $this
     */
    public function setUrlWebsite(?string $url_website): static
    {
        $this->container['url_website'] = $url_website;

        return $this;
    }

    /**
     * Gets open_hours
     * @return \Secuconnect\Client\Model\OpenHours[]
     */
    public function getOpenHours(): array|null
    {
        return $this->container['open_hours'] ?? null;
    }

    /**
     * Sets open_hours
     * @param \Secuconnect\Client\Model\OpenHours[]|null $open_hours Opening hours per weekday
     * @return $this
     */
    public function setOpenHours(?array $open_hours): static
    {
        $this->container['open_hours'] = $open_hours;

        return $this;
    }

    /**
     * Gets open_now
     * @return bool
     */
    public function getOpenNow(): bool|null
    {
        return $this->container['open_now'] ?? null;
    }

    /**
     * Sets open_now
     * @param bool|null $open_now Whether the store is just open
     * @return $this
     */
    public function setOpenNow(?bool $open_now): static
    {
        $this->container['open_now'] = $open_now;

        return $this;
    }

    /**
     * Gets open_time
     * @return string
     */
    public function getOpenTime(): string|null
    {
        return $this->container['open_time'] ?? null;
    }

    /**
     * Sets open_time
     * @param string|null $open_time Opening time
     * @return $this
     */
    public function setOpenTime(?string $open_time): static
    {
        $this->container['open_time'] = $open_time;

        return $this;
    }

    /**
     * Gets utc_offset
     * @return string
     */
    public function getUtcOffset(): string|null
    {
        return $this->container['utc_offset'] ?? null;
    }

    /**
     * Sets utc_offset
     * @param string|null $utc_offset UTC offset
     * @return $this
     */
    public function setUtcOffset(?string $utc_offset): static
    {
        $this->container['utc_offset'] = $utc_offset;

        return $this;
    }

    /**
     * Gets assigned_by
     * @return \Secuconnect\Client\Model\AssignedBy[]
     */
    public function getAssignedBy(): array|null
    {
        return $this->container['assigned_by'] ?? null;
    }

    /**
     * Sets assigned_by
     * @param \Secuconnect\Client\Model\AssignedBy[]|null $assigned_by Assigned by
     * @return $this
     */
    public function setAssignedBy(?array $assigned_by): static
    {
        $this->container['assigned_by'] = $assigned_by;

        return $this;
    }

    /**
     * Gets invited_by
     * @return \Secuconnect\Client\Model\InvitedBy[]
     */
    public function getInvitedBy(): array|null
    {
        return $this->container['invited_by'] ?? null;
    }

    /**
     * Sets invited_by
     * @param \Secuconnect\Client\Model\InvitedBy[]|null $invited_by Invited by
     * @return $this
     */
    public function setInvitedBy(?array $invited_by): static
    {
        $this->container['invited_by'] = $invited_by;

        return $this;
    }

    /**
     * Gets has_beacon
     * @return bool
     */
    public function getHasBeacon(): bool|null
    {
        return $this->container['has_beacon'] ?? null;
    }

    /**
     * Sets has_beacon
     * @param bool|null $has_beacon Whether the store has a WiFi beacon
     * @return $this
     */
    public function setHasBeacon(?bool $has_beacon): static
    {
        $this->container['has_beacon'] = $has_beacon;

        return $this;
    }

    /**
     * Gets acceptance_point
     * @return bool
     */
    public function getAcceptancePoint(): bool|null
    {
        return $this->container['acceptance_point'] ?? null;
    }

    /**
     * Sets acceptance_point
     * @param bool|null $acceptance_point Whether the store is a secucard acceptance point
     * @return $this
     */
    public function setAcceptancePoint(?bool $acceptance_point): static
    {
        $this->container['acceptance_point'] = $acceptance_point;

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

