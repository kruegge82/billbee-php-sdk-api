<?php
/**
 * RechnungsdruckWebAppControllersApiShipmentWithLabelResult
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
 * Generator version: 7.8.0
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
 * RechnungsdruckWebAppControllersApiShipmentWithLabelResult Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RechnungsdruckWebAppControllersApiShipmentWithLabelResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rechnungsdruck.WebApp.Controllers.Api.ShipmentWithLabelResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'int',
        'order_reference' => 'string',
        'shipping_id' => 'string',
        'tracking_url' => 'string',
        'label_data_pdf' => 'string',
        'export_docs_pdf' => 'string',
        'carrier' => 'string',
        'shipping_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_id' => 'int64',
        'order_reference' => null,
        'shipping_id' => null,
        'tracking_url' => null,
        'label_data_pdf' => 'byte',
        'export_docs_pdf' => 'byte',
        'carrier' => null,
        'shipping_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_id' => false,
        'order_reference' => false,
        'shipping_id' => false,
        'tracking_url' => false,
        'label_data_pdf' => false,
        'export_docs_pdf' => false,
        'carrier' => false,
        'shipping_date' => false
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
        'order_id' => 'OrderId',
        'order_reference' => 'OrderReference',
        'shipping_id' => 'ShippingId',
        'tracking_url' => 'TrackingUrl',
        'label_data_pdf' => 'LabelDataPdf',
        'export_docs_pdf' => 'ExportDocsPdf',
        'carrier' => 'Carrier',
        'shipping_date' => 'ShippingDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'order_reference' => 'setOrderReference',
        'shipping_id' => 'setShippingId',
        'tracking_url' => 'setTrackingUrl',
        'label_data_pdf' => 'setLabelDataPdf',
        'export_docs_pdf' => 'setExportDocsPdf',
        'carrier' => 'setCarrier',
        'shipping_date' => 'setShippingDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'order_reference' => 'getOrderReference',
        'shipping_id' => 'getShippingId',
        'tracking_url' => 'getTrackingUrl',
        'label_data_pdf' => 'getLabelDataPdf',
        'export_docs_pdf' => 'getExportDocsPdf',
        'carrier' => 'getCarrier',
        'shipping_date' => 'getShippingDate'
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('order_reference', $data ?? [], null);
        $this->setIfExists('shipping_id', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('label_data_pdf', $data ?? [], null);
        $this->setIfExists('export_docs_pdf', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('shipping_date', $data ?? [], null);
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

        if (!is_null($this->container['label_data_pdf']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['label_data_pdf'])) {
            $invalidProperties[] = "invalid value for 'label_data_pdf', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['export_docs_pdf']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['export_docs_pdf'])) {
            $invalidProperties[] = "invalid value for 'export_docs_pdf', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_reference
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->container['order_reference'];
    }

    /**
     * Sets order_reference
     *
     * @param string|null $order_reference order_reference
     *
     * @return self
     */
    public function setOrderReference($order_reference)
    {
        if (is_null($order_reference)) {
            throw new \InvalidArgumentException('non-nullable order_reference cannot be null');
        }
        $this->container['order_reference'] = $order_reference;

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
     * @param string|null $shipping_id shipping_id
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
     * @param string|null $tracking_url tracking_url
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
     * Gets label_data_pdf
     *
     * @return string|null
     */
    public function getLabelDataPdf()
    {
        return $this->container['label_data_pdf'];
    }

    /**
     * Sets label_data_pdf
     *
     * @param string|null $label_data_pdf label_data_pdf
     *
     * @return self
     */
    public function setLabelDataPdf($label_data_pdf)
    {
        if (is_null($label_data_pdf)) {
            throw new \InvalidArgumentException('non-nullable label_data_pdf cannot be null');
        }

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", ObjectSerializer::toString($label_data_pdf)))) {
            throw new \InvalidArgumentException("invalid value for \$label_data_pdf when calling RechnungsdruckWebAppControllersApiShipmentWithLabelResult., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['label_data_pdf'] = $label_data_pdf;

        return $this;
    }

    /**
     * Gets export_docs_pdf
     *
     * @return string|null
     */
    public function getExportDocsPdf()
    {
        return $this->container['export_docs_pdf'];
    }

    /**
     * Sets export_docs_pdf
     *
     * @param string|null $export_docs_pdf export_docs_pdf
     *
     * @return self
     */
    public function setExportDocsPdf($export_docs_pdf)
    {
        if (is_null($export_docs_pdf)) {
            throw new \InvalidArgumentException('non-nullable export_docs_pdf cannot be null');
        }

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", ObjectSerializer::toString($export_docs_pdf)))) {
            throw new \InvalidArgumentException("invalid value for \$export_docs_pdf when calling RechnungsdruckWebAppControllersApiShipmentWithLabelResult., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['export_docs_pdf'] = $export_docs_pdf;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets shipping_date
     *
     * @return \DateTime|null
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param \DateTime|null $shipping_date shipping_date
     *
     * @return self
     */
    public function setShippingDate($shipping_date)
    {
        if (is_null($shipping_date)) {
            throw new \InvalidArgumentException('non-nullable shipping_date cannot be null');
        }
        $this->container['shipping_date'] = $shipping_date;

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


