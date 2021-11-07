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
 * IdentresultPerson
 *
 * @category Class
 * @description IdentresultPerson
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentresultPerson implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'IdentresultPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'identificationprocess' => '\Secuconnect\Client\Model\IdentificationProcess',
        'customdata' => '\Secuconnect\Client\Model\IdentificationCustomData',
        'contactdata' => '\Secuconnect\Client\Model\ContactData',
        'userdata' => '\Secuconnect\Client\Model\UserData',
        'attachments' => '\Secuconnect\Client\Model\IdentDocument[]',
        'identificationdocument' => '\Secuconnect\Client\Model\IdentDocumentData',
        'video' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'identificationprocess' => null,
        'customdata' => null,
        'contactdata' => null,
        'userdata' => null,
        'attachments' => null,
        'identificationdocument' => null,
        'video' => null
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
        'identificationprocess' => 'identificationprocess',
        'customdata' => 'customdata',
        'contactdata' => 'contactdata',
        'userdata' => 'userdata',
        'attachments' => 'attachments',
        'identificationdocument' => 'identificationdocument',
        'video' => 'video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'identificationprocess' => 'setIdentificationprocess',
        'customdata' => 'setCustomdata',
        'contactdata' => 'setContactdata',
        'userdata' => 'setUserdata',
        'attachments' => 'setAttachments',
        'identificationdocument' => 'setIdentificationdocument',
        'video' => 'setVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'identificationprocess' => 'getIdentificationprocess',
        'customdata' => 'getCustomdata',
        'contactdata' => 'getContactdata',
        'userdata' => 'getUserdata',
        'attachments' => 'getAttachments',
        'identificationdocument' => 'getIdentificationdocument',
        'video' => 'getVideo'
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
        $this->container['identificationprocess'] = $data['identificationprocess'] ?? null;
        $this->container['customdata'] = $data['customdata'] ?? null;
        $this->container['contactdata'] = $data['contactdata'] ?? null;
        $this->container['userdata'] = $data['userdata'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['identificationdocument'] = $data['identificationdocument'] ?? null;
        $this->container['video'] = $data['video'] ?? null;
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
     * Gets identificationprocess
     * @return \Secuconnect\Client\Model\IdentificationProcess
     */
    public function getIdentificationprocess(): IdentificationProcess
    {
        return $this->container['identificationprocess'];
    }

    /**
     * Sets identificationprocess
     * @param \Secuconnect\Client\Model\IdentificationProcess|null $identificationprocess identificationprocess
     * @return $this
     */
    public function setIdentificationprocess(?IdentificationProcess $identificationprocess): static
    {
        $this->container['identificationprocess'] = $identificationprocess;

        return $this;
    }

    /**
     * Gets customdata
     * @return \Secuconnect\Client\Model\IdentificationCustomData
     */
    public function getCustomdata(): IdentificationCustomData
    {
        return $this->container['customdata'];
    }

    /**
     * Sets customdata
     * @param \Secuconnect\Client\Model\IdentificationCustomData|null $customdata customdata
     * @return $this
     */
    public function setCustomdata(?IdentificationCustomData $customdata): static
    {
        $this->container['customdata'] = $customdata;

        return $this;
    }

    /**
     * Gets contactdata
     * @return \Secuconnect\Client\Model\ContactData
     */
    public function getContactdata(): ContactData
    {
        return $this->container['contactdata'];
    }

    /**
     * Sets contactdata
     * @param \Secuconnect\Client\Model\ContactData|null $contactdata contactdata
     * @return $this
     */
    public function setContactdata(?ContactData $contactdata): static
    {
        $this->container['contactdata'] = $contactdata;

        return $this;
    }

    /**
     * Gets userdata
     * @return \Secuconnect\Client\Model\UserData
     */
    public function getUserdata(): UserData
    {
        return $this->container['userdata'];
    }

    /**
     * Sets userdata
     * @param \Secuconnect\Client\Model\UserData|null $userdata userdata
     * @return $this
     */
    public function setUserdata(?UserData $userdata): static
    {
        $this->container['userdata'] = $userdata;

        return $this;
    }

    /**
     * Gets attachments
     * @return \Secuconnect\Client\Model\IdentDocument[]
     */
    public function getAttachments(): array
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     * @param \Secuconnect\Client\Model\IdentDocument[]|null $attachments User Data submitted by provider
     * @return $this
     */
    public function setAttachments(?array $attachments): static
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets identificationdocument
     * @return \Secuconnect\Client\Model\IdentDocumentData
     */
    public function getIdentificationdocument(): IdentDocumentData
    {
        return $this->container['identificationdocument'];
    }

    /**
     * Sets identificationdocument
     * @param \Secuconnect\Client\Model\IdentDocumentData|null $identificationdocument identificationdocument
     * @return $this
     */
    public function setIdentificationdocument(?IdentDocumentData $identificationdocument): static
    {
        $this->container['identificationdocument'] = $identificationdocument;

        return $this;
    }

    /**
     * Gets video
     * @return string
     */
    public function getVideo(): string
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     * @param string|null $video The url to download the identification video
     * @return $this
     */
    public function setVideo(?string $video): static
    {
        $this->container['video'] = $video;

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

