<?php
/**
 * BillbeeInterfacesBillbeeAPIModelStockArticleApiModel
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
 * BillbeeInterfacesBillbeeAPIModelStockArticleApiModel Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillbeeInterfacesBillbeeAPIModelStockArticleApiModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Billbee.Interfaces.BillbeeAPI.Model.StockArticleApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'stock_id' => 'int',
        'stock_current' => 'float',
        'stock_current_is_calculated' => 'bool',
        'stock_warning' => 'float',
        'stock_code' => 'string',
        'unfulfilled_amount' => 'float',
        'stock_desired' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'stock_id' => 'int64',
        'stock_current' => 'double',
        'stock_current_is_calculated' => null,
        'stock_warning' => 'double',
        'stock_code' => null,
        'unfulfilled_amount' => 'double',
        'stock_desired' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'stock_id' => false,
        'stock_current' => false,
        'stock_current_is_calculated' => false,
        'stock_warning' => false,
        'stock_code' => false,
        'unfulfilled_amount' => false,
        'stock_desired' => false
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
        'name' => 'Name',
        'stock_id' => 'StockId',
        'stock_current' => 'StockCurrent',
        'stock_current_is_calculated' => 'StockCurrentIsCalculated',
        'stock_warning' => 'StockWarning',
        'stock_code' => 'StockCode',
        'unfulfilled_amount' => 'UnfulfilledAmount',
        'stock_desired' => 'StockDesired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'stock_id' => 'setStockId',
        'stock_current' => 'setStockCurrent',
        'stock_current_is_calculated' => 'setStockCurrentIsCalculated',
        'stock_warning' => 'setStockWarning',
        'stock_code' => 'setStockCode',
        'unfulfilled_amount' => 'setUnfulfilledAmount',
        'stock_desired' => 'setStockDesired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'stock_id' => 'getStockId',
        'stock_current' => 'getStockCurrent',
        'stock_current_is_calculated' => 'getStockCurrentIsCalculated',
        'stock_warning' => 'getStockWarning',
        'stock_code' => 'getStockCode',
        'unfulfilled_amount' => 'getUnfulfilledAmount',
        'stock_desired' => 'getStockDesired'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('stock_id', $data ?? [], null);
        $this->setIfExists('stock_current', $data ?? [], null);
        $this->setIfExists('stock_current_is_calculated', $data ?? [], null);
        $this->setIfExists('stock_warning', $data ?? [], null);
        $this->setIfExists('stock_code', $data ?? [], null);
        $this->setIfExists('unfulfilled_amount', $data ?? [], null);
        $this->setIfExists('stock_desired', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stock_id
     *
     * @return int|null
     */
    public function getStockId()
    {
        return $this->container['stock_id'];
    }

    /**
     * Sets stock_id
     *
     * @param int|null $stock_id stock_id
     *
     * @return self
     */
    public function setStockId($stock_id)
    {
        if (is_null($stock_id)) {
            throw new \InvalidArgumentException('non-nullable stock_id cannot be null');
        }
        $this->container['stock_id'] = $stock_id;

        return $this;
    }

    /**
     * Gets stock_current
     *
     * @return float|null
     */
    public function getStockCurrent()
    {
        return $this->container['stock_current'];
    }

    /**
     * Sets stock_current
     *
     * @param float|null $stock_current stock_current
     *
     * @return self
     */
    public function setStockCurrent($stock_current)
    {
        if (is_null($stock_current)) {
            throw new \InvalidArgumentException('non-nullable stock_current cannot be null');
        }
        $this->container['stock_current'] = $stock_current;

        return $this;
    }

    /**
     * Gets stock_current_is_calculated
     *
     * @return bool|null
     */
    public function getStockCurrentIsCalculated()
    {
        return $this->container['stock_current_is_calculated'];
    }

    /**
     * Sets stock_current_is_calculated
     *
     * @param bool|null $stock_current_is_calculated stock_current_is_calculated
     *
     * @return self
     */
    public function setStockCurrentIsCalculated($stock_current_is_calculated)
    {
        if (is_null($stock_current_is_calculated)) {
            throw new \InvalidArgumentException('non-nullable stock_current_is_calculated cannot be null');
        }
        $this->container['stock_current_is_calculated'] = $stock_current_is_calculated;

        return $this;
    }

    /**
     * Gets stock_warning
     *
     * @return float|null
     */
    public function getStockWarning()
    {
        return $this->container['stock_warning'];
    }

    /**
     * Sets stock_warning
     *
     * @param float|null $stock_warning stock_warning
     *
     * @return self
     */
    public function setStockWarning($stock_warning)
    {
        if (is_null($stock_warning)) {
            throw new \InvalidArgumentException('non-nullable stock_warning cannot be null');
        }
        $this->container['stock_warning'] = $stock_warning;

        return $this;
    }

    /**
     * Gets stock_code
     *
     * @return string|null
     */
    public function getStockCode()
    {
        return $this->container['stock_code'];
    }

    /**
     * Sets stock_code
     *
     * @param string|null $stock_code stock_code
     *
     * @return self
     */
    public function setStockCode($stock_code)
    {
        if (is_null($stock_code)) {
            throw new \InvalidArgumentException('non-nullable stock_code cannot be null');
        }
        $this->container['stock_code'] = $stock_code;

        return $this;
    }

    /**
     * Gets unfulfilled_amount
     *
     * @return float|null
     */
    public function getUnfulfilledAmount()
    {
        return $this->container['unfulfilled_amount'];
    }

    /**
     * Sets unfulfilled_amount
     *
     * @param float|null $unfulfilled_amount unfulfilled_amount
     *
     * @return self
     */
    public function setUnfulfilledAmount($unfulfilled_amount)
    {
        if (is_null($unfulfilled_amount)) {
            throw new \InvalidArgumentException('non-nullable unfulfilled_amount cannot be null');
        }
        $this->container['unfulfilled_amount'] = $unfulfilled_amount;

        return $this;
    }

    /**
     * Gets stock_desired
     *
     * @return float|null
     */
    public function getStockDesired()
    {
        return $this->container['stock_desired'];
    }

    /**
     * Sets stock_desired
     *
     * @param float|null $stock_desired stock_desired
     *
     * @return self
     */
    public function setStockDesired($stock_desired)
    {
        if (is_null($stock_desired)) {
            throw new \InvalidArgumentException('non-nullable stock_desired cannot be null');
        }
        $this->container['stock_desired'] = $stock_desired;

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


