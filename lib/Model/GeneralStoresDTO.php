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
 * GeneralStoresDTO
 *
 * @category Class
 * @description GeneralStoresDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralStoresDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeneralStoresDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'name' => 'string',
        'merchant' => 'string',
        'address' => '\Secuconnect\Client\Model\Address',
        'facebook_id' => 'string',
        'phone' => 'string',
        'url_website' => 'string',
        'photo_main' => 'string',
        'photo' => 'string[]',
        'open_hours' => '\Secuconnect\Client\Model\OpenHours[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'name' => null,
        'merchant' => null,
        'address' => null,
        'facebook_id' => null,
        'phone' => null,
        'url_website' => null,
        'photo_main' => null,
        'photo' => null,
        'open_hours' => null
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
        'name' => 'name',
        'merchant' => 'merchant',
        'address' => 'address',
        'facebook_id' => 'facebook_id',
        'phone' => 'phone',
        'url_website' => 'url_website',
        'photo_main' => 'photo_main',
        'photo' => 'photo',
        'open_hours' => 'open_hours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'merchant' => 'setMerchant',
        'address' => 'setAddress',
        'facebook_id' => 'setFacebookId',
        'phone' => 'setPhone',
        'url_website' => 'setUrlWebsite',
        'photo_main' => 'setPhotoMain',
        'photo' => 'setPhoto',
        'open_hours' => 'setOpenHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'merchant' => 'getMerchant',
        'address' => 'getAddress',
        'facebook_id' => 'getFacebookId',
        'phone' => 'getPhone',
        'url_website' => 'getUrlWebsite',
        'photo_main' => 'getPhotoMain',
        'photo' => 'getPhoto',
        'open_hours' => 'getOpenHours'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['facebook_id'] = $data['facebook_id'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['url_website'] = $data['url_website'] ?? null;
        $this->container['photo_main'] = $data['photo_main'] ?? null;
        $this->container['photo'] = $data['photo'] ?? null;
        $this->container['open_hours'] = $data['open_hours'] ?? null;
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
     * Gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string|null $name Name
     * @return $this
     */
    public function setName(?string $name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets merchant
     * @return string
     */
    public function getMerchant(): string
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     * @param string|null $merchant Merchant
     * @return $this
     */
    public function setMerchant(?string $merchant): static
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets address
     * @return \Secuconnect\Client\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Secuconnect\Client\Model\Address|null $address address
     * @return $this
     */
    public function setAddress(?Address $address): static
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets facebook_id
     * @return string
     */
    public function getFacebookId(): string
    {
        return $this->container['facebook_id'];
    }

    /**
     * Sets facebook_id
     * @param string|null $facebook_id New facebook ID
     * @return $this
     */
    public function setFacebookId(?string $facebook_id): static
    {
        $this->container['facebook_id'] = $facebook_id;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone(): string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string|null $phone New phone number
     * @return $this
     */
    public function setPhone(?string $phone): static
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets url_website
     * @return string
     */
    public function getUrlWebsite(): string
    {
        return $this->container['url_website'];
    }

    /**
     * Sets url_website
     * @param string|null $url_website New URL to general store website
     * @return $this
     */
    public function setUrlWebsite(?string $url_website): static
    {
        $this->container['url_website'] = $url_website;

        return $this;
    }

    /**
     * Gets photo_main
     * @return string
     */
    public function getPhotoMain(): string
    {
        return $this->container['photo_main'];
    }

    /**
     * Sets photo_main
     * @param string|null $photo_main New main photo
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
    public function getPhoto(): array
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     * @param string[]|null $photo New photos
     * @return $this
     */
    public function setPhoto(?array $photo): static
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets open_hours
     * @return \Secuconnect\Client\Model\OpenHours[]
     */
    public function getOpenHours(): array
    {
        return $this->container['open_hours'];
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

