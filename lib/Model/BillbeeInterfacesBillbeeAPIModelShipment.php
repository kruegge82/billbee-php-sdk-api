<?php
/**
 * BillbeeInterfacesBillbeeAPIModelShipment
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
 * BillbeeInterfacesBillbeeAPIModelShipment Class Doc Comment
 *
 * @category Class
 * @description Represents a single shipment.
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillbeeInterfacesBillbeeAPIModelShipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Billbee.Interfaces.BillbeeAPI.Model.Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billbee_id' => 'int',
        'shipping_id' => 'string',
        'shipper' => 'string',
        'created' => '\DateTime',
        'tracking_url' => 'string',
        'shipping_provider_id' => 'int',
        'shipping_provider_product_id' => 'int',
        'shipping_carrier' => 'int',
        'shipment_type' => 'int'
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
        'shipping_id' => null,
        'shipper' => null,
        'created' => 'date-time',
        'tracking_url' => null,
        'shipping_provider_id' => 'int64',
        'shipping_provider_product_id' => 'int64',
        'shipping_carrier' => 'int32',
        'shipment_type' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billbee_id' => false,
        'shipping_id' => false,
        'shipper' => false,
        'created' => false,
        'tracking_url' => false,
        'shipping_provider_id' => false,
        'shipping_provider_product_id' => false,
        'shipping_carrier' => false,
        'shipment_type' => false
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
        'shipping_id' => 'ShippingId',
        'shipper' => 'Shipper',
        'created' => 'Created',
        'tracking_url' => 'TrackingUrl',
        'shipping_provider_id' => 'ShippingProviderId',
        'shipping_provider_product_id' => 'ShippingProviderProductId',
        'shipping_carrier' => 'ShippingCarrier',
        'shipment_type' => 'ShipmentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billbee_id' => 'setBillbeeId',
        'shipping_id' => 'setShippingId',
        'shipper' => 'setShipper',
        'created' => 'setCreated',
        'tracking_url' => 'setTrackingUrl',
        'shipping_provider_id' => 'setShippingProviderId',
        'shipping_provider_product_id' => 'setShippingProviderProductId',
        'shipping_carrier' => 'setShippingCarrier',
        'shipment_type' => 'setShipmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billbee_id' => 'getBillbeeId',
        'shipping_id' => 'getShippingId',
        'shipper' => 'getShipper',
        'created' => 'getCreated',
        'tracking_url' => 'getTrackingUrl',
        'shipping_provider_id' => 'getShippingProviderId',
        'shipping_provider_product_id' => 'getShippingProviderProductId',
        'shipping_carrier' => 'getShippingCarrier',
        'shipment_type' => 'getShipmentType'
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
        $this->setIfExists('shipping_id', $data ?? [], null);
        $this->setIfExists('shipper', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('shipping_provider_id', $data ?? [], null);
        $this->setIfExists('shipping_provider_product_id', $data ?? [], null);
        $this->setIfExists('shipping_carrier', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
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
     * @param int|null $billbee_id The billbee internal id of the shipment
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
     * Gets shipping_id
     *
     * @return string|null
     */
    public function getShippingId()
    {
        return $this->container['shipping_id'];
    }

    /**
     * Sets shipping_id
     *
     * @param string|null $shipping_id The id of this shipment
     *
     * @return self
     */
    public function setShippingId($shipping_id)
    {
        if (is_null($shipping_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_id cannot be null');
        }
        $this->container['shipping_id'] = $shipping_id;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return string|null
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param string|null $shipper The name of the shipping provider
     *
     * @return self
     */
    public function setShipper($shipper)
    {
        if (is_null($shipper)) {
            throw new \InvalidArgumentException('non-nullable shipper cannot be null');
        }
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created The creation date
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url The url to track this shipment
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {
        if (is_null($tracking_url)) {
            throw new \InvalidArgumentException('non-nullable tracking_url cannot be null');
        }
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets shipping_provider_id
     *
     * @return int|null
     */
    public function getShippingProviderId()
    {
        return $this->container['shipping_provider_id'];
    }

    /**
     * Sets shipping_provider_id
     *
     * @param int|null $shipping_provider_id The id of the used shipping provider
     *
     * @return self
     */
    public function setShippingProviderId($shipping_provider_id)
    {
        if (is_null($shipping_provider_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_provider_id cannot be null');
        }
        $this->container['shipping_provider_id'] = $shipping_provider_id;

        return $this;
    }

    /**
     * Gets shipping_provider_product_id
     *
     * @return int|null
     */
    public function getShippingProviderProductId()
    {
        return $this->container['shipping_provider_product_id'];
    }

    /**
     * Sets shipping_provider_product_id
     *
     * @param int|null $shipping_provider_product_id The id of the used shipping provider product
     *
     * @return self
     */
    public function setShippingProviderProductId($shipping_provider_product_id)
    {
        if (is_null($shipping_provider_product_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_provider_product_id cannot be null');
        }
        $this->container['shipping_provider_product_id'] = $shipping_provider_product_id;

        return $this;
    }

    /**
     * Gets shipping_carrier
     *
     * @return int|null
     */
    public function getShippingCarrier()
    {
        return $this->container['shipping_carrier'];
    }

    /**
     * Sets shipping_carrier
     *
     * @param int|null $shipping_carrier The carrier used to ship the parcel with
     *
     * @return self
     */
    public function setShippingCarrier($shipping_carrier)
    {
        if (is_null($shipping_carrier)) {
            throw new \InvalidArgumentException('non-nullable shipping_carrier cannot be null');
        }
        $this->container['shipping_carrier'] = $shipping_carrier;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return int|null
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param int|null $shipment_type Shipment Type, 0 if Shipment, 1 if Retoure
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        if (is_null($shipment_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_type cannot be null');
        }
        $this->container['shipment_type'] = $shipment_type;

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


