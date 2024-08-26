<?php
/**
 * BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModelTest
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
 * Please update the test case below to test the model.
 */

namespace kruegge82\billbee\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModelTest Class Doc Comment
 *
 * @category    Class
 * @description BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel
 * @package     kruegge82\billbee
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModelTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel"
     */
    public function testBillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "position"
     */
    public function testPropertyPosition()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "net_value"
     */
    public function testPropertyNetValue()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "total_net_value"
     */
    public function testPropertyTotalNetValue()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "gross_value"
     */
    public function testPropertyGrossValue()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "total_gross_value"
     */
    public function testPropertyTotalGrossValue()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vat_rate"
     */
    public function testPropertyVatRate()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "article_billbee_id"
     */
    public function testPropertyArticleBillbeeId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sku"
     */
    public function testPropertySku()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "billbee_id"
     */
    public function testPropertyBillbeeId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "total_vat_amount"
     */
    public function testPropertyTotalVatAmount()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "rebate_percent"
     */
    public function testPropertyRebatePercent()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
