<?php

namespace Secuconnect\Client;

use DateTime;
use DateTimeInterface;
use Exception;
use InvalidArgumentException;
use Secuconnect\Client\Model\BankAccountDescriptor;
use Secuconnect\Client\Model\CreditCardDescriptor;
use Secuconnect\Client\Model\OneOfPaymentContainersDTOModelPrivate;
use Secuconnect\Client\Model\OneOfSmartTransactionsDeliveryOptionsModel;
use Secuconnect\Client\Model\PaymentInstructions;
use Secuconnect\Client\Model\SmartTransactionsCollectionModel;
use Secuconnect\Client\Model\SmartTransactionsShippingModel;
use SplFileObject;
use stdClass;

/**
 * ObjectSerializer
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed       $data   the data to serialize
     * @param string|null $format the format of the Swagger type of the data
     *
     * @return mixed serialized form of $data
     * @noinspection PhpMixedReturnTypeCanBeReducedInspection
     */
    public static function sanitizeForSerialization(mixed $data, string $format = null): mixed
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(DateTimeInterface::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($swaggerType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($swaggerType, 'getAllowableEnumValues')
                    && !in_array($value, $swaggerType::getAllowableEnumValues())) {
                    $imploded = implode("', '", $swaggerType::getAllowableEnumValues());
                    throw new InvalidArgumentException("Invalid value for enum '$swaggerType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename(string $filename): string
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue(string $value): string
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param DateTime|string|string[] $object an object to be serialized to a string
     * @param string|null $format the format of the parameter
     *
     * @return string the serialized object
     */
    public static function toQueryValue(array|DateTime|string $object, string $format = null): string
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object, $format);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue(string $value): string
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     *
     * @param string|SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue(string|SplFileObject $value): string
    {
        if ($value instanceof SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     * If it's a date, format it in Y-m-d
     *
     * @param DateTime|string $value the value of the parameter
     * @param string|null $format the format of the parameter
     *
     * @return string the header string
     */
    public static function toString(DateTime|string $value, string $format = null): string
    {
        if ($value instanceof DateTime) {
            return ($format === 'date') ? $value->format('Y-m-d') : $value->format(DateTimeInterface::ATOM);
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv, ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, string $collectionFormat, bool $allowCollectionFormatMulti): string
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection));
        }

        return match ($collectionFormat) {
            'pipes' => implode('|', $collection),
            'tsv' => implode("\t", $collection),
            'ssv' => implode(' ', $collection),
            default => implode(',', $collection),
        };
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed         $data          object or primitive to be deserialized
     * @param string        $class         class name is passed as a string
     * @param string[]|null $httpHeaders   HTTP headers
     *
     * @return mixed a single or an array of $class instances
     * @throws Exception
     */
    public static function deserialize(mixed $data, string $class, array $httpHeaders = null): mixed
    {
        if (null === $data) {
            return null;
        } elseif (str_starts_with($class, 'map[')) { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $value) {
                $values[] = self::deserialize($value, $subClass);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return new DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            /** @noinspection PhpConditionAlreadyCheckedInspection */
            if ($data instanceof stdClass || is_array($data) && $class !== 'object' || $class === 'void') {
                $data = null;
            }

            settype($data, $class);
            return $data;
        } elseif ($class === '\SplFileObject') {
            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues())) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            if (trim($class, '\\') === OneOfPaymentContainersDTOModelPrivate::class) {
                $subclass = BankAccountDescriptor::class;
                if (isset($data->girocode_url)) {
                    $subclass = PaymentInstructions::class;
                } elseif (isset($data->pan)) {
                    $subclass = CreditCardDescriptor::class;
                }

                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            } elseif (trim($class, '\\') === OneOfSmartTransactionsDeliveryOptionsModel::class) {
                $subclass = SmartTransactionsShippingModel::class;
                if ($data->type === 'shipping') {
                    $subclass = SmartTransactionsShippingModel::class;
                } elseif ($data->type === 'collection') {
                    $subclass = SmartTransactionsCollectionModel::class;
                }

                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            } else {
                // If a discriminator is defined and points to a valid subclass, use it.
                if (class_exists($class) && defined($class.'::DISCRIMINATOR')) {
                    $discriminator = $class::DISCRIMINATOR;
                    if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                        $subclass = '\\' . 'Secuconnect\Client\\Model\\' . $data->{$discriminator};
                        if (is_subclass_of($subclass, $class)) {
                            $class = $subclass;
                        }
                    }
                }
            }
            $instance = new $class();
            foreach ($instance::swaggerTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type));
                }
            }
            return $instance;
        }
    }
}
