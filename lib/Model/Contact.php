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
 * Contact
 *
 * @category Class
 * @description Contact
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'forename' => 'string',
        'surname' => 'string',
        'companyname' => 'string',
        'salutation' => 'string',
        'gender' => 'string',
        'title' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'dob' => 'string',
        'picture' => 'string',
        'url_website' => 'string',
        'birthplace' => 'string',
        'nationality' => 'string',
        'address' => '\Secuconnect\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'forename' => null,
        'surname' => null,
        'companyname' => null,
        'salutation' => null,
        'gender' => null,
        'title' => null,
        'email' => null,
        'phone' => null,
        'mobile' => null,
        'fax' => null,
        'dob' => null,
        'picture' => null,
        'url_website' => null,
        'birthplace' => null,
        'nationality' => null,
        'address' => null
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
        'forename' => 'forename',
        'surname' => 'surname',
        'companyname' => 'companyname',
        'salutation' => 'salutation',
        'gender' => 'gender',
        'title' => 'title',
        'email' => 'email',
        'phone' => 'phone',
        'mobile' => 'mobile',
        'fax' => 'fax',
        'dob' => 'dob',
        'picture' => 'picture',
        'url_website' => 'url_website',
        'birthplace' => 'birthplace',
        'nationality' => 'nationality',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'companyname' => 'setCompanyname',
        'salutation' => 'setSalutation',
        'gender' => 'setGender',
        'title' => 'setTitle',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'fax' => 'setFax',
        'dob' => 'setDob',
        'picture' => 'setPicture',
        'url_website' => 'setUrlWebsite',
        'birthplace' => 'setBirthplace',
        'nationality' => 'setNationality',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'companyname' => 'getCompanyname',
        'salutation' => 'getSalutation',
        'gender' => 'getGender',
        'title' => 'getTitle',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'fax' => 'getFax',
        'dob' => 'getDob',
        'picture' => 'getPicture',
        'url_website' => 'getUrlWebsite',
        'birthplace' => 'getBirthplace',
        'nationality' => 'getNationality',
        'address' => 'getAddress'
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
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['companyname'] = $data['companyname'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['dob'] = $data['dob'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
        $this->container['url_website'] = $data['url_website'] ?? null;
        $this->container['birthplace'] = $data['birthplace'] ?? null;
        $this->container['nationality'] = $data['nationality'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
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
     * Gets salutation
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string|null $salutation Salutation
     * @return $this
     */
    public function setSalutation(?string $salutation): static
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender(): string
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string|null $gender Gender
     * @return $this
     */
    public function setGender(?string $gender): static
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string|null $title Title or academic degree
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        $this->container['title'] = $title;

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
     * @param string|null $email E-mail address
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
     * @param string|null $phone Landline number
     * @return $this
     */
    public function setPhone(?string $phone): static
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mobile
     * @return string
     */
    public function getMobile(): string
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     * @param string|null $mobile Mobile phone number
     * @return $this
     */
    public function setMobile(?string $mobile): static
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets fax
     * @return string
     */
    public function getFax(): string
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     * @param string|null $fax Fax number
     * @return $this
     */
    public function setFax(?string $fax): static
    {
        $this->container['fax'] = $fax;

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
     * Gets picture
     * @return string
     */
    public function getPicture(): string
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string|null $picture The document ID of an user picture; s. Document service
     * @return $this
     */
    public function setPicture(?string $picture): static
    {
        $this->container['picture'] = $picture;

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
     * @param string|null $url_website URL to company website
     * @return $this
     */
    public function setUrlWebsite(?string $url_website): static
    {
        $this->container['url_website'] = $url_website;

        return $this;
    }

    /**
     * Gets birthplace
     * @return string
     */
    public function getBirthplace(): string
    {
        return $this->container['birthplace'];
    }

    /**
     * Sets birthplace
     * @param string|null $birthplace Birthplace
     * @return $this
     */
    public function setBirthplace(?string $birthplace): static
    {
        $this->container['birthplace'] = $birthplace;

        return $this;
    }

    /**
     * Gets nationality
     * @return string
     */
    public function getNationality(): string
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     * @param string|null $nationality nationality
     * @return $this
     */
    public function setNationality(?string $nationality): static
    {
        $this->container['nationality'] = $nationality;

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

