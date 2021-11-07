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
 * GeneralMerchantsPublicDataModel
 *
 * @category Class
 * @description GeneralMerchantsPublicDataModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsPublicDataModel extends BaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeneralMerchantsPublicDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'company' => '\Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany',
        'merchant_urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'legal_details' => null,
        'company' => null,
        'merchant_urls' => null
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
        'legal_details' => 'legal_details',
        'company' => 'company',
        'merchant_urls' => 'merchant_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'legal_details' => 'setLegalDetails',
        'company' => 'setCompany',
        'merchant_urls' => 'setMerchantUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'legal_details' => 'getLegalDetails',
        'company' => 'getCompany',
        'merchant_urls' => 'getMerchantUrls'
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

        $this->container['legal_details'] = $data['legal_details'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['merchant_urls'] = $data['merchant_urls'] ?? null;
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
     * Gets legal_details
     * @return \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]
     */
    public function getLegalDetails(): array
    {
        return $this->container['legal_details'];
    }

    /**
     * Sets legal_details
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]|null $legal_details Legal details like terms of use, privacy policy, or imprint
     * @return $this
     */
    public function setLegalDetails(?array $legal_details): static
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets company
     * @return \Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany
     */
    public function getCompany(): GeneralMerchantsPublicDataCompany
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Secuconnect\Client\Model\GeneralMerchantsPublicDataCompany|null $company company
     * @return $this
     */
    public function setCompany(?GeneralMerchantsPublicDataCompany $company): static
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets merchant_urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls[]
     */
    public function getMerchantUrls(): array
    {
        return $this->container['merchant_urls'];
    }

    /**
     * Sets merchant_urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[]|null $merchant_urls URLs
     * @return $this
     */
    public function setMerchantUrls(?array $merchant_urls): static
    {
        $this->container['merchant_urls'] = $merchant_urls;

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

