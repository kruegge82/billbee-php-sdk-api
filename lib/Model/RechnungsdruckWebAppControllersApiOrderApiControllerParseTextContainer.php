<?php
/**
 * RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Billbee API
 *
 * Documentation of the Billbee REST API to connect a Billbee account to external aplications.  ## Endpoint  The Billbee API endpoint base url is https://api.billbee.io/api/v1   ## Activation  You have to enable the API in the settings of your Billbee account. In addition you need a Billbee API Key identifying the application you develop. To get an API key, send a mail to support@billbee.io and send us a short note about what you are building.  ## Authorization & security  Because you can access private data with the Billbee API, every request has to be sent over https and must  * Contain a valid API Key identifying the application/developer. It has to be sent as the HTTP header X-Billbee-Api-Key * Contain a valid user login with billbee username and api password in form of a basic auth HTTP header  ## Throttling  50 calls per second for each API Key.  10 calls per second for each API Key in combination with Billbee user.  Besides that each endpoint has a throttle of max 2 requests per second per combination of API Key and Billbee user.  When you exceed the throttle threshold, the API will return a HTTP 429 status code and a Retry-After-Header indicating how many seconds you will have to wait before you can call the API again.
 *
 * The version of the OpenAPI document: V1
 * Contact: support@billbee.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\billbee\Model;

use \ArrayAccess;
use \kruegge82\billbee\ObjectSerializer;

/**
 * RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rechnungsdruck.WebApp.Controllers.Api.OrderApiController.ParseTextContainer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text_to_parse' => 'string',
        'is_html' => 'bool',
        'language' => 'string',
        'trim' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text_to_parse' => null,
        'is_html' => null,
        'language' => null,
        'trim' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'text_to_parse' => false,
        'is_html' => false,
        'language' => false,
        'trim' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text_to_parse' => 'TextToParse',
        'is_html' => 'IsHtml',
        'language' => 'Language',
        'trim' => 'Trim'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_to_parse' => 'setTextToParse',
        'is_html' => 'setIsHtml',
        'language' => 'setLanguage',
        'trim' => 'setTrim'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_to_parse' => 'getTextToParse',
        'is_html' => 'getIsHtml',
        'language' => 'getLanguage',
        'trim' => 'getTrim'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('text_to_parse', $data ?? [], null);
        $this->setIfExists('is_html', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('trim', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets text_to_parse
     *
     * @return string|null
     */
    public function getTextToParse()
    {
        return $this->container['text_to_parse'];
    }

    /**
     * Sets text_to_parse
     *
     * @param string|null $text_to_parse The text to parse and replace the placeholders in.
     *
     * @return self
     */
    public function setTextToParse($text_to_parse)
    {
        if (is_null($text_to_parse)) {
            throw new \InvalidArgumentException('non-nullable text_to_parse cannot be null');
        }
        $this->container['text_to_parse'] = $text_to_parse;

        return $this;
    }

    /**
     * Gets is_html
     *
     * @return bool|null
     */
    public function getIsHtml()
    {
        return $this->container['is_html'];
    }

    /**
     * Sets is_html
     *
     * @param bool|null $is_html If true, the string will be handled as html.
     *
     * @return self
     */
    public function setIsHtml($is_html)
    {
        if (is_null($is_html)) {
            throw new \InvalidArgumentException('non-nullable is_html cannot be null');
        }
        $this->container['is_html'] = $is_html;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The ISO 639-1 code of the target language. Using default if not set.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets trim
     *
     * @return bool|null
     */
    public function getTrim()
    {
        return $this->container['trim'];
    }

    /**
     * Sets trim
     *
     * @param bool|null $trim If true, then the placeholder values are trimmed after usage.
     *
     * @return self
     */
    public function setTrim($trim)
    {
        if (is_null($trim)) {
            throw new \InvalidArgumentException('non-nullable trim cannot be null');
        }
        $this->container['trim'] = $trim;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


