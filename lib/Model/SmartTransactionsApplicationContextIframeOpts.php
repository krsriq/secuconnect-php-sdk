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
 * SmartTransactionsApplicationContextIframeOpts
 *
 * @category Class
 * @description SmartTransactionsApplicationContextIframeOpts
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApplicationContextIframeOpts implements ArrayAccess, ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static string $swaggerModelName = 'SmartTransactionsApplicationContextIframeOpts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerTypes = [
        'payment_hint_title' => 'string',
        'payment_hint' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'project_title' => 'string',
        'submit_button_title' => 'string',
        'cancel_button_title' => 'string',
        'language' => 'string',
        'basket_title' => 'string',
        'hide_disclaimer' => 'bool',
        'has_accepted_disclaimer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static array $swaggerFormats = [
        'payment_hint_title' => null,
        'payment_hint' => null,
        'project_title' => null,
        'submit_button_title' => null,
        'cancel_button_title' => null,
        'language' => null,
        'basket_title' => null,
        'hide_disclaimer' => null,
        'has_accepted_disclaimer' => null
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
        'payment_hint_title' => 'payment_hint_title',
        'payment_hint' => 'payment_hint',
        'project_title' => 'project_title',
        'submit_button_title' => 'submit_button_title',
        'cancel_button_title' => 'cancel_button_title',
        'language' => 'language',
        'basket_title' => 'basket_title',
        'hide_disclaimer' => 'hide_disclaimer',
        'has_accepted_disclaimer' => 'has_accepted_disclaimer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static array $setters = [
        'payment_hint_title' => 'setPaymentHintTitle',
        'payment_hint' => 'setPaymentHint',
        'project_title' => 'setProjectTitle',
        'submit_button_title' => 'setSubmitButtonTitle',
        'cancel_button_title' => 'setCancelButtonTitle',
        'language' => 'setLanguage',
        'basket_title' => 'setBasketTitle',
        'hide_disclaimer' => 'setHideDisclaimer',
        'has_accepted_disclaimer' => 'setHasAcceptedDisclaimer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static array $getters = [
        'payment_hint_title' => 'getPaymentHintTitle',
        'payment_hint' => 'getPaymentHint',
        'project_title' => 'getProjectTitle',
        'submit_button_title' => 'getSubmitButtonTitle',
        'cancel_button_title' => 'getCancelButtonTitle',
        'language' => 'getLanguage',
        'basket_title' => 'getBasketTitle',
        'hide_disclaimer' => 'getHideDisclaimer',
        'has_accepted_disclaimer' => 'getHasAcceptedDisclaimer'
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
        $this->container['payment_hint_title'] = $data['payment_hint_title'] ?? null;
        $this->container['payment_hint'] = $data['payment_hint'] ?? null;
        $this->container['project_title'] = $data['project_title'] ?? null;
        $this->container['submit_button_title'] = $data['submit_button_title'] ?? null;
        $this->container['cancel_button_title'] = $data['cancel_button_title'] ?? null;
        $this->container['language'] = $data['language'] ?? 'de_DE';
        $this->container['basket_title'] = $data['basket_title'] ?? null;
        $this->container['hide_disclaimer'] = $data['hide_disclaimer'] ?? false;
        $this->container['has_accepted_disclaimer'] = $data['has_accepted_disclaimer'] ?? false;
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
     * Gets payment_hint_title
     * @return string
     */
    public function getPaymentHintTitle(): string|null
    {
        return $this->container['payment_hint_title'] ?? null;
    }

    /**
     * Sets payment_hint_title
     * @param string|null $payment_hint_title payment hint title
     * @return $this
     */
    public function setPaymentHintTitle(?string $payment_hint_title): static
    {
        $this->container['payment_hint_title'] = $payment_hint_title;

        return $this;
    }

    /**
     * Gets payment_hint
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getPaymentHint(): array|null
    {
        return $this->container['payment_hint'] ?? null;
    }

    /**
     * Sets payment_hint
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[]|null $payment_hint payment hint
     * @return $this
     */
    public function setPaymentHint(?array $payment_hint): static
    {
        $this->container['payment_hint'] = $payment_hint;

        return $this;
    }

    /**
     * Gets project_title
     * @return string
     */
    public function getProjectTitle(): string|null
    {
        return $this->container['project_title'] ?? null;
    }

    /**
     * Sets project_title
     * @param string|null $project_title project name
     * @return $this
     */
    public function setProjectTitle(?string $project_title): static
    {
        $this->container['project_title'] = $project_title;

        return $this;
    }

    /**
     * Gets submit_button_title
     * @return string
     */
    public function getSubmitButtonTitle(): string|null
    {
        return $this->container['submit_button_title'] ?? null;
    }

    /**
     * Sets submit_button_title
     * @param string|null $submit_button_title title of the submit button
     * @return $this
     */
    public function setSubmitButtonTitle(?string $submit_button_title): static
    {
        $this->container['submit_button_title'] = $submit_button_title;

        return $this;
    }

    /**
     * Gets cancel_button_title
     * @return string
     */
    public function getCancelButtonTitle(): string|null
    {
        return $this->container['cancel_button_title'] ?? null;
    }

    /**
     * Sets cancel_button_title
     * @param string|null $cancel_button_title title of the cancel button
     * @return $this
     */
    public function setCancelButtonTitle(?string $cancel_button_title): static
    {
        $this->container['cancel_button_title'] = $cancel_button_title;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage(): string|null
    {
        return $this->container['language'] ?? null;
    }

    /**
     * Sets language
     * @param string|null $language language
     * @return $this
     */
    public function setLanguage(?string $language): static
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets basket_title
     * @return string
     */
    public function getBasketTitle(): string|null
    {
        return $this->container['basket_title'] ?? null;
    }

    /**
     * Sets basket_title
     * @param string|null $basket_title basket title
     * @return $this
     */
    public function setBasketTitle(?string $basket_title): static
    {
        $this->container['basket_title'] = $basket_title;

        return $this;
    }

    /**
     * Gets hide_disclaimer
     * @return bool
     */
    public function getHideDisclaimer(): bool|null
    {
        return $this->container['hide_disclaimer'] ?? null;
    }

    /**
     * Sets hide_disclaimer
     * @param bool|null $hide_disclaimer hide disclaimer
     * @return $this
     */
    public function setHideDisclaimer(?bool $hide_disclaimer): static
    {
        $this->container['hide_disclaimer'] = $hide_disclaimer;

        return $this;
    }

    /**
     * Gets has_accepted_disclaimer
     * @return bool
     */
    public function getHasAcceptedDisclaimer(): bool|null
    {
        return $this->container['has_accepted_disclaimer'] ?? null;
    }

    /**
     * Sets has_accepted_disclaimer
     * @param bool|null $has_accepted_disclaimer has accepted disclaimer
     * @return $this
     */
    public function setHasAcceptedDisclaimer(?bool $has_accepted_disclaimer): static
    {
        $this->container['has_accepted_disclaimer'] = $has_accepted_disclaimer;

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

