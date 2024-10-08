<?php
/**
 * RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
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
 * RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rechnungsdruck.WebApp.Controllers.Api.ApiResultOfSystem.Collections.Generic.ListOfBillbee.Interfaces.BillbeeAPI.Model.ArticleImageRelationApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_message' => 'string',
        'error_code' => 'int',
        'error_description' => 'int',
        'data' => '\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_message' => null,
        'error_code' => 'int32',
        'error_description' => 'int32',
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_message' => false,
        'error_code' => false,
        'error_description' => false,
        'data' => false
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
        'error_message' => 'ErrorMessage',
        'error_code' => 'ErrorCode',
        'error_description' => 'ErrorDescription',
        'data' => 'Data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_message' => 'setErrorMessage',
        'error_code' => 'setErrorCode',
        'error_description' => 'setErrorDescription',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_message' => 'getErrorMessage',
        'error_code' => 'getErrorCode',
        'error_description' => 'getErrorDescription',
        'data' => 'getData'
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

    public const ERROR_CODE_NUMBER_0 = 0;
    public const ERROR_CODE_NUMBER_1 = 1;
    public const ERROR_CODE_NUMBER_2 = 2;
    public const ERROR_CODE_NUMBER_3 = 3;
    public const ERROR_CODE_NUMBER_4 = 4;
    public const ERROR_CODE_NUMBER_5 = 5;
    public const ERROR_CODE_NUMBER_6 = 6;
    public const ERROR_CODE_NUMBER_7 = 7;
    public const ERROR_CODE_NUMBER_8 = 8;
    public const ERROR_CODE_NUMBER_9 = 9;
    public const ERROR_CODE_NUMBER_10 = 10;
    public const ERROR_CODE_NUMBER_11 = 11;
    public const ERROR_CODE_NUMBER_12 = 12;
    public const ERROR_CODE_NUMBER_13 = 13;
    public const ERROR_CODE_NUMBER_14 = 14;
    public const ERROR_CODE_NUMBER_15 = 15;
    public const ERROR_CODE_NUMBER_16 = 16;
    public const ERROR_CODE_NUMBER_17 = 17;
    public const ERROR_CODE_NUMBER_18 = 18;
    public const ERROR_CODE_NUMBER_19 = 19;
    public const ERROR_CODE_NUMBER_20 = 20;
    public const ERROR_CODE_NUMBER_21 = 21;
    public const ERROR_CODE_NUMBER_22 = 22;
    public const ERROR_CODE_NUMBER_23 = 23;
    public const ERROR_CODE_NUMBER_24 = 24;
    public const ERROR_CODE_NUMBER_25 = 25;
    public const ERROR_CODE_NUMBER_26 = 26;
    public const ERROR_CODE_NUMBER_27 = 27;
    public const ERROR_CODE_NUMBER_28 = 28;
    public const ERROR_CODE_NUMBER_29 = 29;
    public const ERROR_DESCRIPTION_NUMBER_0 = 0;
    public const ERROR_DESCRIPTION_NUMBER_1 = 1;
    public const ERROR_DESCRIPTION_NUMBER_2 = 2;
    public const ERROR_DESCRIPTION_NUMBER_3 = 3;
    public const ERROR_DESCRIPTION_NUMBER_4 = 4;
    public const ERROR_DESCRIPTION_NUMBER_5 = 5;
    public const ERROR_DESCRIPTION_NUMBER_6 = 6;
    public const ERROR_DESCRIPTION_NUMBER_7 = 7;
    public const ERROR_DESCRIPTION_NUMBER_8 = 8;
    public const ERROR_DESCRIPTION_NUMBER_9 = 9;
    public const ERROR_DESCRIPTION_NUMBER_10 = 10;
    public const ERROR_DESCRIPTION_NUMBER_11 = 11;
    public const ERROR_DESCRIPTION_NUMBER_12 = 12;
    public const ERROR_DESCRIPTION_NUMBER_13 = 13;
    public const ERROR_DESCRIPTION_NUMBER_14 = 14;
    public const ERROR_DESCRIPTION_NUMBER_15 = 15;
    public const ERROR_DESCRIPTION_NUMBER_16 = 16;
    public const ERROR_DESCRIPTION_NUMBER_17 = 17;
    public const ERROR_DESCRIPTION_NUMBER_18 = 18;
    public const ERROR_DESCRIPTION_NUMBER_19 = 19;
    public const ERROR_DESCRIPTION_NUMBER_20 = 20;
    public const ERROR_DESCRIPTION_NUMBER_21 = 21;
    public const ERROR_DESCRIPTION_NUMBER_22 = 22;
    public const ERROR_DESCRIPTION_NUMBER_23 = 23;
    public const ERROR_DESCRIPTION_NUMBER_24 = 24;
    public const ERROR_DESCRIPTION_NUMBER_25 = 25;
    public const ERROR_DESCRIPTION_NUMBER_26 = 26;
    public const ERROR_DESCRIPTION_NUMBER_27 = 27;
    public const ERROR_DESCRIPTION_NUMBER_28 = 28;
    public const ERROR_DESCRIPTION_NUMBER_29 = 29;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorCodeAllowableValues()
    {
        return [
            self::ERROR_CODE_NUMBER_0,
            self::ERROR_CODE_NUMBER_1,
            self::ERROR_CODE_NUMBER_2,
            self::ERROR_CODE_NUMBER_3,
            self::ERROR_CODE_NUMBER_4,
            self::ERROR_CODE_NUMBER_5,
            self::ERROR_CODE_NUMBER_6,
            self::ERROR_CODE_NUMBER_7,
            self::ERROR_CODE_NUMBER_8,
            self::ERROR_CODE_NUMBER_9,
            self::ERROR_CODE_NUMBER_10,
            self::ERROR_CODE_NUMBER_11,
            self::ERROR_CODE_NUMBER_12,
            self::ERROR_CODE_NUMBER_13,
            self::ERROR_CODE_NUMBER_14,
            self::ERROR_CODE_NUMBER_15,
            self::ERROR_CODE_NUMBER_16,
            self::ERROR_CODE_NUMBER_17,
            self::ERROR_CODE_NUMBER_18,
            self::ERROR_CODE_NUMBER_19,
            self::ERROR_CODE_NUMBER_20,
            self::ERROR_CODE_NUMBER_21,
            self::ERROR_CODE_NUMBER_22,
            self::ERROR_CODE_NUMBER_23,
            self::ERROR_CODE_NUMBER_24,
            self::ERROR_CODE_NUMBER_25,
            self::ERROR_CODE_NUMBER_26,
            self::ERROR_CODE_NUMBER_27,
            self::ERROR_CODE_NUMBER_28,
            self::ERROR_CODE_NUMBER_29,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorDescriptionAllowableValues()
    {
        return [
            self::ERROR_DESCRIPTION_NUMBER_0,
            self::ERROR_DESCRIPTION_NUMBER_1,
            self::ERROR_DESCRIPTION_NUMBER_2,
            self::ERROR_DESCRIPTION_NUMBER_3,
            self::ERROR_DESCRIPTION_NUMBER_4,
            self::ERROR_DESCRIPTION_NUMBER_5,
            self::ERROR_DESCRIPTION_NUMBER_6,
            self::ERROR_DESCRIPTION_NUMBER_7,
            self::ERROR_DESCRIPTION_NUMBER_8,
            self::ERROR_DESCRIPTION_NUMBER_9,
            self::ERROR_DESCRIPTION_NUMBER_10,
            self::ERROR_DESCRIPTION_NUMBER_11,
            self::ERROR_DESCRIPTION_NUMBER_12,
            self::ERROR_DESCRIPTION_NUMBER_13,
            self::ERROR_DESCRIPTION_NUMBER_14,
            self::ERROR_DESCRIPTION_NUMBER_15,
            self::ERROR_DESCRIPTION_NUMBER_16,
            self::ERROR_DESCRIPTION_NUMBER_17,
            self::ERROR_DESCRIPTION_NUMBER_18,
            self::ERROR_DESCRIPTION_NUMBER_19,
            self::ERROR_DESCRIPTION_NUMBER_20,
            self::ERROR_DESCRIPTION_NUMBER_21,
            self::ERROR_DESCRIPTION_NUMBER_22,
            self::ERROR_DESCRIPTION_NUMBER_23,
            self::ERROR_DESCRIPTION_NUMBER_24,
            self::ERROR_DESCRIPTION_NUMBER_25,
            self::ERROR_DESCRIPTION_NUMBER_26,
            self::ERROR_DESCRIPTION_NUMBER_27,
            self::ERROR_DESCRIPTION_NUMBER_28,
            self::ERROR_DESCRIPTION_NUMBER_29,
        ];
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
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('error_code', $data ?? [], null);
        $this->setIfExists('error_description', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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

        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!is_null($this->container['error_code']) && !in_array($this->container['error_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_code', must be one of '%s'",
                $this->container['error_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getErrorDescriptionAllowableValues();
        if (!is_null($this->container['error_description']) && !in_array($this->container['error_description'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_description', must be one of '%s'",
                $this->container['error_description'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message error_message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            throw new \InvalidArgumentException('non-nullable error_message cannot be null');
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int|null $error_code error_code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            throw new \InvalidArgumentException('non-nullable error_code cannot be null');
        }
        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!in_array($error_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_code', must be one of '%s'",
                    $error_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_description
     *
     * @return int|null
     */
    public function getErrorDescription()
    {
        return $this->container['error_description'];
    }

    /**
     * Sets error_description
     *
     * @param int|null $error_description error_description
     *
     * @return self
     */
    public function setErrorDescription($error_description)
    {
        if (is_null($error_description)) {
            throw new \InvalidArgumentException('non-nullable error_description cannot be null');
        }
        $allowedValues = $this->getErrorDescriptionAllowableValues();
        if (!in_array($error_description, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_description', must be one of '%s'",
                    $error_description,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_description'] = $error_description;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel[]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

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


