<?php
/**
 * BillbeeInterfacesBillbeeAPIModelInvoiceApiModel
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
 * BillbeeInterfacesBillbeeAPIModelInvoiceApiModel Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillbeeInterfacesBillbeeAPIModelInvoiceApiModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Billbee.Interfaces.BillbeeAPI.Model.InvoiceApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_number' => 'string',
        'type' => 'string',
        'title' => 'string',
        'salutation' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'company' => 'string',
        'customer_number' => 'int',
        'debtor_number' => 'int',
        'invoice_date' => '\DateTime',
        'total_net' => 'float',
        'currency' => 'string',
        'total_gross' => 'float',
        'payment_type_id' => 'int',
        'order_number' => 'string',
        'transaction_id' => 'string',
        'email' => 'string',
        'shop_name' => 'string',
        'positions' => '\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel[]',
        'pay_date' => '\DateTime',
        'vat_mode' => 'int',
        'billbee_id' => 'int',
        'shipping_country' => 'string',
        'additional_fees' => '\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel[]',
        'merchant_vat_id' => 'string',
        'customer_vat_id' => 'string',
        'vat_flags' => '\kruegge82\billbee\Model\BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_number' => null,
        'type' => null,
        'title' => null,
        'salutation' => null,
        'last_name' => null,
        'first_name' => null,
        'company' => null,
        'customer_number' => 'int32',
        'debtor_number' => 'int32',
        'invoice_date' => 'date-time',
        'total_net' => 'double',
        'currency' => null,
        'total_gross' => 'double',
        'payment_type_id' => 'int32',
        'order_number' => null,
        'transaction_id' => null,
        'email' => null,
        'shop_name' => null,
        'positions' => null,
        'pay_date' => 'date-time',
        'vat_mode' => 'int32',
        'billbee_id' => 'int64',
        'shipping_country' => null,
        'additional_fees' => null,
        'merchant_vat_id' => null,
        'customer_vat_id' => null,
        'vat_flags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_number' => false,
        'type' => false,
        'title' => false,
        'salutation' => false,
        'last_name' => false,
        'first_name' => false,
        'company' => false,
        'customer_number' => false,
        'debtor_number' => false,
        'invoice_date' => false,
        'total_net' => false,
        'currency' => false,
        'total_gross' => false,
        'payment_type_id' => false,
        'order_number' => false,
        'transaction_id' => false,
        'email' => false,
        'shop_name' => false,
        'positions' => false,
        'pay_date' => false,
        'vat_mode' => false,
        'billbee_id' => false,
        'shipping_country' => false,
        'additional_fees' => false,
        'merchant_vat_id' => false,
        'customer_vat_id' => false,
        'vat_flags' => false
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
        'invoice_number' => 'InvoiceNumber',
        'type' => 'Type',
        'title' => 'Title',
        'salutation' => 'Salutation',
        'last_name' => 'LastName',
        'first_name' => 'FirstName',
        'company' => 'Company',
        'customer_number' => 'CustomerNumber',
        'debtor_number' => 'DebtorNumber',
        'invoice_date' => 'InvoiceDate',
        'total_net' => 'TotalNet',
        'currency' => 'Currency',
        'total_gross' => 'TotalGross',
        'payment_type_id' => 'PaymentTypeId',
        'order_number' => 'OrderNumber',
        'transaction_id' => 'TransactionId',
        'email' => 'Email',
        'shop_name' => 'ShopName',
        'positions' => 'Positions',
        'pay_date' => 'PayDate',
        'vat_mode' => 'VatMode',
        'billbee_id' => 'BillbeeId',
        'shipping_country' => 'ShippingCountry',
        'additional_fees' => 'AdditionalFees',
        'merchant_vat_id' => 'MerchantVatId',
        'customer_vat_id' => 'CustomerVatId',
        'vat_flags' => 'VatFlags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'type' => 'setType',
        'title' => 'setTitle',
        'salutation' => 'setSalutation',
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'company' => 'setCompany',
        'customer_number' => 'setCustomerNumber',
        'debtor_number' => 'setDebtorNumber',
        'invoice_date' => 'setInvoiceDate',
        'total_net' => 'setTotalNet',
        'currency' => 'setCurrency',
        'total_gross' => 'setTotalGross',
        'payment_type_id' => 'setPaymentTypeId',
        'order_number' => 'setOrderNumber',
        'transaction_id' => 'setTransactionId',
        'email' => 'setEmail',
        'shop_name' => 'setShopName',
        'positions' => 'setPositions',
        'pay_date' => 'setPayDate',
        'vat_mode' => 'setVatMode',
        'billbee_id' => 'setBillbeeId',
        'shipping_country' => 'setShippingCountry',
        'additional_fees' => 'setAdditionalFees',
        'merchant_vat_id' => 'setMerchantVatId',
        'customer_vat_id' => 'setCustomerVatId',
        'vat_flags' => 'setVatFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'type' => 'getType',
        'title' => 'getTitle',
        'salutation' => 'getSalutation',
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'company' => 'getCompany',
        'customer_number' => 'getCustomerNumber',
        'debtor_number' => 'getDebtorNumber',
        'invoice_date' => 'getInvoiceDate',
        'total_net' => 'getTotalNet',
        'currency' => 'getCurrency',
        'total_gross' => 'getTotalGross',
        'payment_type_id' => 'getPaymentTypeId',
        'order_number' => 'getOrderNumber',
        'transaction_id' => 'getTransactionId',
        'email' => 'getEmail',
        'shop_name' => 'getShopName',
        'positions' => 'getPositions',
        'pay_date' => 'getPayDate',
        'vat_mode' => 'getVatMode',
        'billbee_id' => 'getBillbeeId',
        'shipping_country' => 'getShippingCountry',
        'additional_fees' => 'getAdditionalFees',
        'merchant_vat_id' => 'getMerchantVatId',
        'customer_vat_id' => 'getCustomerVatId',
        'vat_flags' => 'getVatFlags'
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

    public const VAT_MODE_NUMBER_0 = 0;
    public const VAT_MODE_NUMBER_1 = 1;
    public const VAT_MODE_NUMBER_2 = 2;
    public const VAT_MODE_NUMBER_3 = 3;
    public const VAT_MODE_NUMBER_4 = 4;
    public const VAT_MODE_NUMBER_5 = 5;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVatModeAllowableValues()
    {
        return [
            self::VAT_MODE_NUMBER_0,
            self::VAT_MODE_NUMBER_1,
            self::VAT_MODE_NUMBER_2,
            self::VAT_MODE_NUMBER_3,
            self::VAT_MODE_NUMBER_4,
            self::VAT_MODE_NUMBER_5,
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
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('customer_number', $data ?? [], null);
        $this->setIfExists('debtor_number', $data ?? [], null);
        $this->setIfExists('invoice_date', $data ?? [], null);
        $this->setIfExists('total_net', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('total_gross', $data ?? [], null);
        $this->setIfExists('payment_type_id', $data ?? [], null);
        $this->setIfExists('order_number', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('shop_name', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
        $this->setIfExists('pay_date', $data ?? [], null);
        $this->setIfExists('vat_mode', $data ?? [], null);
        $this->setIfExists('billbee_id', $data ?? [], null);
        $this->setIfExists('shipping_country', $data ?? [], null);
        $this->setIfExists('additional_fees', $data ?? [], null);
        $this->setIfExists('merchant_vat_id', $data ?? [], null);
        $this->setIfExists('customer_vat_id', $data ?? [], null);
        $this->setIfExists('vat_flags', $data ?? [], null);
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

        $allowedValues = $this->getVatModeAllowableValues();
        if (!is_null($this->container['vat_mode']) && !in_array($this->container['vat_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vat_mode', must be one of '%s'",
                $this->container['vat_mode'],
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
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return int|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param int|null $customer_number customer_number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        if (is_null($customer_number)) {
            throw new \InvalidArgumentException('non-nullable customer_number cannot be null');
        }
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets debtor_number
     *
     * @return int|null
     */
    public function getDebtorNumber()
    {
        return $this->container['debtor_number'];
    }

    /**
     * Sets debtor_number
     *
     * @param int|null $debtor_number debtor_number
     *
     * @return self
     */
    public function setDebtorNumber($debtor_number)
    {
        if (is_null($debtor_number)) {
            throw new \InvalidArgumentException('non-nullable debtor_number cannot be null');
        }
        $this->container['debtor_number'] = $debtor_number;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime|null $invoice_date invoice_date
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        if (is_null($invoice_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_date cannot be null');
        }
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets total_net
     *
     * @return float|null
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param float|null $total_net total_net
     *
     * @return self
     */
    public function setTotalNet($total_net)
    {
        if (is_null($total_net)) {
            throw new \InvalidArgumentException('non-nullable total_net cannot be null');
        }
        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets total_gross
     *
     * @return float|null
     */
    public function getTotalGross()
    {
        return $this->container['total_gross'];
    }

    /**
     * Sets total_gross
     *
     * @param float|null $total_gross total_gross
     *
     * @return self
     */
    public function setTotalGross($total_gross)
    {
        if (is_null($total_gross)) {
            throw new \InvalidArgumentException('non-nullable total_gross cannot be null');
        }
        $this->container['total_gross'] = $total_gross;

        return $this;
    }

    /**
     * Gets payment_type_id
     *
     * @return int|null
     */
    public function getPaymentTypeId()
    {
        return $this->container['payment_type_id'];
    }

    /**
     * Sets payment_type_id
     *
     * @param int|null $payment_type_id payment_type_id
     *
     * @return self
     */
    public function setPaymentTypeId($payment_type_id)
    {
        if (is_null($payment_type_id)) {
            throw new \InvalidArgumentException('non-nullable payment_type_id cannot be null');
        }
        $this->container['payment_type_id'] = $payment_type_id;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string|null $order_number order_number
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {
        if (is_null($order_number)) {
            throw new \InvalidArgumentException('non-nullable order_number cannot be null');
        }
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        if (is_null($transaction_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_id cannot be null');
        }
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets shop_name
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string|null $shop_name shop_name
     *
     * @return self
     */
    public function setShopName($shop_name)
    {
        if (is_null($shop_name)) {
            throw new \InvalidArgumentException('non-nullable shop_name cannot be null');
        }
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel[]|null
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel[]|null $positions positions
     *
     * @return self
     */
    public function setPositions($positions)
    {
        if (is_null($positions)) {
            throw new \InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'] = $positions;

        return $this;
    }

    /**
     * Gets pay_date
     *
     * @return \DateTime|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param \DateTime|null $pay_date pay_date
     *
     * @return self
     */
    public function setPayDate($pay_date)
    {
        if (is_null($pay_date)) {
            throw new \InvalidArgumentException('non-nullable pay_date cannot be null');
        }
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets vat_mode
     *
     * @return int|null
     */
    public function getVatMode()
    {
        return $this->container['vat_mode'];
    }

    /**
     * Sets vat_mode
     *
     * @param int|null $vat_mode vat_mode
     *
     * @return self
     */
    public function setVatMode($vat_mode)
    {
        if (is_null($vat_mode)) {
            throw new \InvalidArgumentException('non-nullable vat_mode cannot be null');
        }
        $allowedValues = $this->getVatModeAllowableValues();
        if (!in_array($vat_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vat_mode', must be one of '%s'",
                    $vat_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vat_mode'] = $vat_mode;

        return $this;
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
     * @param int|null $billbee_id billbee_id
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
     * Gets shipping_country
     *
     * @return string|null
     */
    public function getShippingCountry()
    {
        return $this->container['shipping_country'];
    }

    /**
     * Sets shipping_country
     *
     * @param string|null $shipping_country two letters for CountryCode Identification
     *
     * @return self
     */
    public function setShippingCountry($shipping_country)
    {
        if (is_null($shipping_country)) {
            throw new \InvalidArgumentException('non-nullable shipping_country cannot be null');
        }
        $this->container['shipping_country'] = $shipping_country;

        return $this;
    }

    /**
     * Gets additional_fees
     *
     * @return \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel[]|null
     */
    public function getAdditionalFees()
    {
        return $this->container['additional_fees'];
    }

    /**
     * Sets additional_fees
     *
     * @param \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel[]|null $additional_fees additional_fees
     *
     * @return self
     */
    public function setAdditionalFees($additional_fees)
    {
        if (is_null($additional_fees)) {
            throw new \InvalidArgumentException('non-nullable additional_fees cannot be null');
        }
        $this->container['additional_fees'] = $additional_fees;

        return $this;
    }

    /**
     * Gets merchant_vat_id
     *
     * @return string|null
     */
    public function getMerchantVatId()
    {
        return $this->container['merchant_vat_id'];
    }

    /**
     * Sets merchant_vat_id
     *
     * @param string|null $merchant_vat_id The vat-id, that should be displayed on the invoice and other order documents
     *
     * @return self
     */
    public function setMerchantVatId($merchant_vat_id)
    {
        if (is_null($merchant_vat_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_vat_id cannot be null');
        }
        $this->container['merchant_vat_id'] = $merchant_vat_id;

        return $this;
    }

    /**
     * Gets customer_vat_id
     *
     * @return string|null
     */
    public function getCustomerVatId()
    {
        return $this->container['customer_vat_id'];
    }

    /**
     * Sets customer_vat_id
     *
     * @param string|null $customer_vat_id The vat-id, that was given by the customer to fulfill this order
     *
     * @return self
     */
    public function setCustomerVatId($customer_vat_id)
    {
        if (is_null($customer_vat_id)) {
            throw new \InvalidArgumentException('non-nullable customer_vat_id cannot be null');
        }
        $this->container['customer_vat_id'] = $customer_vat_id;

        return $this;
    }

    /**
     * Gets vat_flags
     *
     * @return \kruegge82\billbee\Model\BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags|null
     */
    public function getVatFlags()
    {
        return $this->container['vat_flags'];
    }

    /**
     * Sets vat_flags
     *
     * @param \kruegge82\billbee\Model\BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags|null $vat_flags vat_flags
     *
     * @return self
     */
    public function setVatFlags($vat_flags)
    {
        if (is_null($vat_flags)) {
            throw new \InvalidArgumentException('non-nullable vat_flags cannot be null');
        }
        $this->container['vat_flags'] = $vat_flags;

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


