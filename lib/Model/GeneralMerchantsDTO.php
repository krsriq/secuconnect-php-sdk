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
 * GeneralMerchantsDTO
 *
 * @category Class
 * @description GeneralMerchantsDTO
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralMerchantsDTO implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'GeneralMerchantsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'salutation' => 'string',
        'companyname' => 'string',
        'forename' => 'string',
        'surname' => 'string',
        'dob' => 'string',
        'homepage' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => '\Secuconnect\Client\Model\Address',
        'payment_data' => '\Secuconnect\Client\Model\PaymentInformation',
        'legal_details' => '\Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]',
        'urls' => '\Secuconnect\Client\Model\GeneralMerchantsUrls[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'salutation' => null,
        'companyname' => null,
        'forename' => null,
        'surname' => null,
        'dob' => null,
        'homepage' => null,
        'email' => null,
        'phone' => null,
        'address' => null,
        'payment_data' => null,
        'legal_details' => null,
        'urls' => null
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
        'salutation' => 'salutation',
        'companyname' => 'companyname',
        'forename' => 'forename',
        'surname' => 'surname',
        'dob' => 'dob',
        'homepage' => 'homepage',
        'email' => 'email',
        'phone' => 'phone',
        'address' => 'address',
        'payment_data' => 'payment_data',
        'legal_details' => 'legal_details',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'salutation' => 'setSalutation',
        'companyname' => 'setCompanyname',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'dob' => 'setDob',
        'homepage' => 'setHomepage',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'address' => 'setAddress',
        'payment_data' => 'setPaymentData',
        'legal_details' => 'setLegalDetails',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'salutation' => 'getSalutation',
        'companyname' => 'getCompanyname',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'dob' => 'getDob',
        'homepage' => 'getHomepage',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'address' => 'getAddress',
        'payment_data' => 'getPaymentData',
        'legal_details' => 'getLegalDetails',
        'urls' => 'getUrls'
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
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['companyname'] = $data['companyname'] ?? null;
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['dob'] = $data['dob'] ?? null;
        $this->container['homepage'] = $data['homepage'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['payment_data'] = $data['payment_data'] ?? null;
        $this->container['legal_details'] = $data['legal_details'] ?? null;
        $this->container['urls'] = $data['urls'] ?? null;
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
     * Gets salutation
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string|null $salutation Salutation {'Frau', 'Herr', 'Firma', 'Divers'}
     * @return $this
     */
    public function setSalutation(?string $salutation): static
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets companyname
     * @return string
     */
    public function getCompanyname(): string
    {
        return $this->container['companyname'];
    }

    /**
     * Sets companyname
     * @param string|null $companyname Company name
     * @return $this
     */
    public function setCompanyname(?string $companyname): static
    {
        $this->container['companyname'] = $companyname;

        return $this;
    }

    /**
     * Gets forename
     * @return string
     */
    public function getForename(): string
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param string|null $forename First name
     * @return $this
     */
    public function setForename(?string $forename): static
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return string
     */
    public function getSurname(): string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param string|null $surname Last name
     * @return $this
     */
    public function setSurname(?string $surname): static
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets dob
     * @return string
     */
    public function getDob(): string
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string|null $dob Date of birth
     * @return $this
     */
    public function setDob(?string $dob): static
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets homepage
     * @return string
     */
    public function getHomepage(): string
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     * @param string|null $homepage Merchant homepage or shop URL
     * @return $this
     */
    public function setHomepage(?string $homepage): static
    {
        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail(): string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string|null $email Merchant email address
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        $this->container['email'] = $email;

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
     * @param string|null $phone Merchant phone number
     * @return $this
     */
    public function setPhone(?string $phone): static
    {
        $this->container['phone'] = $phone;

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
     * Gets payment_data
     * @return \Secuconnect\Client\Model\PaymentInformation
     */
    public function getPaymentData(): PaymentInformation
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     * @param \Secuconnect\Client\Model\PaymentInformation|null $payment_data payment_data
     * @return $this
     */
    public function setPaymentData(?PaymentInformation $payment_data): static
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
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
     * @param \Secuconnect\Client\Model\GeneralMerchantsLegalDetails[]|null $legal_details Legal details, like terms of use, privacy policy, or imprint
     * @return $this
     */
    public function setLegalDetails(?array $legal_details): static
    {
        $this->container['legal_details'] = $legal_details;

        return $this;
    }

    /**
     * Gets urls
     * @return \Secuconnect\Client\Model\GeneralMerchantsUrls[]
     */
    public function getUrls(): array
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Secuconnect\Client\Model\GeneralMerchantsUrls[]|null $urls URLs
     * @return $this
     */
    public function setUrls(?array $urls): static
    {
        $this->container['urls'] = $urls;

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

