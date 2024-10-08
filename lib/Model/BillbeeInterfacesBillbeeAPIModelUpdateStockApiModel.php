<?php
/**
 * BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel
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
 * BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Billbee.Interfaces.BillbeeAPI.Model.UpdateStockApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billbee_id' => 'int',
        'sku' => 'string',
        'stock_id' => 'int',
        'reason' => 'string',
        'old_quantity' => 'float',
        'new_quantity' => 'float',
        'delta_quantity' => 'float',
        'force_send_stock_to_shops' => 'bool',
        'autosubtract_reserved_amount' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billbee_id' => 'int64',
        'sku' => null,
        'stock_id' => 'int64',
        'reason' => null,
        'old_quantity' => 'double',
        'new_quantity' => 'double',
        'delta_quantity' => 'double',
        'force_send_stock_to_shops' => null,
        'autosubtract_reserved_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billbee_id' => false,
        'sku' => false,
        'stock_id' => false,
        'reason' => false,
        'old_quantity' => false,
        'new_quantity' => false,
        'delta_quantity' => false,
        'force_send_stock_to_shops' => false,
        'autosubtract_reserved_amount' => false
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
        'billbee_id' => 'BillbeeId',
        'sku' => 'Sku',
        'stock_id' => 'StockId',
        'reason' => 'Reason',
        'old_quantity' => 'OldQuantity',
        'new_quantity' => 'NewQuantity',
        'delta_quantity' => 'DeltaQuantity',
        'force_send_stock_to_shops' => 'ForceSendStockToShops',
        'autosubtract_reserved_amount' => 'AutosubtractReservedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billbee_id' => 'setBillbeeId',
        'sku' => 'setSku',
        'stock_id' => 'setStockId',
        'reason' => 'setReason',
        'old_quantity' => 'setOldQuantity',
        'new_quantity' => 'setNewQuantity',
        'delta_quantity' => 'setDeltaQuantity',
        'force_send_stock_to_shops' => 'setForceSendStockToShops',
        'autosubtract_reserved_amount' => 'setAutosubtractReservedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billbee_id' => 'getBillbeeId',
        'sku' => 'getSku',
        'stock_id' => 'getStockId',
        'reason' => 'getReason',
        'old_quantity' => 'getOldQuantity',
        'new_quantity' => 'getNewQuantity',
        'delta_quantity' => 'getDeltaQuantity',
        'force_send_stock_to_shops' => 'getForceSendStockToShops',
        'autosubtract_reserved_amount' => 'getAutosubtractReservedAmount'
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
        $this->setIfExists('billbee_id', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('stock_id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('old_quantity', $data ?? [], null);
        $this->setIfExists('new_quantity', $data ?? [], null);
        $this->setIfExists('delta_quantity', $data ?? [], null);
        $this->setIfExists('force_send_stock_to_shops', $data ?? [], null);
        $this->setIfExists('autosubtract_reserved_amount', $data ?? [], null);
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
     * Gets billbee_id
     *
     * @return int|null
     */
    public function getBillbeeId()
    {
        return $this->container['billbee_id'];
    }

    /**
     * Sets billbee_id
     *
     * @param int|null $billbee_id Optional the ID of the Billbee product to update
     *
     * @return self
     */
    public function setBillbeeId($billbee_id)
    {
        if (is_null($billbee_id)) {
            throw new \InvalidArgumentException('non-nullable billbee_id cannot be null');
        }
        $this->container['billbee_id'] = $billbee_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU of the product to update
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

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
     * @param int|null $stock_id Optional the stock id if the feature multi stock is activated
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
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Optional a reason text for the stock update
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets old_quantity
     *
     * @return float|null
     */
    public function getOldQuantity()
    {
        return $this->container['old_quantity'];
    }

    /**
     * Sets old_quantity
     *
     * @param float|null $old_quantity This parameter is currently ignored
     *
     * @return self
     */
    public function setOldQuantity($old_quantity)
    {
        if (is_null($old_quantity)) {
            throw new \InvalidArgumentException('non-nullable old_quantity cannot be null');
        }
        $this->container['old_quantity'] = $old_quantity;

        return $this;
    }

    /**
     * Gets new_quantity
     *
     * @return float|null
     */
    public function getNewQuantity()
    {
        return $this->container['new_quantity'];
    }

    /**
     * Sets new_quantity
     *
     * @param float|null $new_quantity The new absolute stock quantity for the product you want to set
     *
     * @return self
     */
    public function setNewQuantity($new_quantity)
    {
        if (is_null($new_quantity)) {
            throw new \InvalidArgumentException('non-nullable new_quantity cannot be null');
        }
        $this->container['new_quantity'] = $new_quantity;

        return $this;
    }

    /**
     * Gets delta_quantity
     *
     * @return float|null
     */
    public function getDeltaQuantity()
    {
        return $this->container['delta_quantity'];
    }

    /**
     * Sets delta_quantity
     *
     * @param float|null $delta_quantity This parameter is currently ignored
     *
     * @return self
     */
    public function setDeltaQuantity($delta_quantity)
    {
        if (is_null($delta_quantity)) {
            throw new \InvalidArgumentException('non-nullable delta_quantity cannot be null');
        }
        $this->container['delta_quantity'] = $delta_quantity;

        return $this;
    }

    /**
     * Gets force_send_stock_to_shops
     *
     * @return bool|null
     */
    public function getForceSendStockToShops()
    {
        return $this->container['force_send_stock_to_shops'];
    }

    /**
     * Sets force_send_stock_to_shops
     *
     * @param bool|null $force_send_stock_to_shops If true, every sent stockchange is stored and transmitted to the connected shop, even if the value has not changed
     *
     * @return self
     */
    public function setForceSendStockToShops($force_send_stock_to_shops)
    {
        if (is_null($force_send_stock_to_shops)) {
            throw new \InvalidArgumentException('non-nullable force_send_stock_to_shops cannot be null');
        }
        $this->container['force_send_stock_to_shops'] = $force_send_stock_to_shops;

        return $this;
    }

    /**
     * Gets autosubtract_reserved_amount
     *
     * @return bool|null
     */
    public function getAutosubtractReservedAmount()
    {
        return $this->container['autosubtract_reserved_amount'];
    }

    /**
     * Sets autosubtract_reserved_amount
     *
     * @param bool|null $autosubtract_reserved_amount Automatically reduce the NewQuantity by the currently not fulfilled amount
     *
     * @return self
     */
    public function setAutosubtractReservedAmount($autosubtract_reserved_amount)
    {
        if (is_null($autosubtract_reserved_amount)) {
            throw new \InvalidArgumentException('non-nullable autosubtract_reserved_amount cannot be null');
        }
        $this->container['autosubtract_reserved_amount'] = $autosubtract_reserved_amount;

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


