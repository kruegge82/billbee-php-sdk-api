# OpenAPIClient-php

Documentation of the Billbee REST API to connect a Billbee account to external aplications.

## Endpoint

The Billbee API endpoint base url is https://api.billbee.io/api/v1 

## Activation

You have to enable the API in the settings of your Billbee account. In addition you need a Billbee API Key identifying the application you develop. To get an API key, send a mail to support@billbee.io and send us a short note about what you are building.

## Authorization & security

Because you can access private data with the Billbee API, every request has to be sent over https and must

* Contain a valid API Key identifying the application/developer. It has to be sent as the HTTP header X-Billbee-Api-Key
* Contain a valid user login with billbee username and api password in form of a basic auth HTTP header

## Throttling

50 calls per second for each API Key.

10 calls per second for each API Key in combination with Billbee user.

Besides that each endpoint has a throttle of max 2 requests per second per combination of API Key and Billbee user.

When you exceed the throttle threshold, the API will return a HTTP 429 status code and a Retry-After-Header indicating how many seconds you will have to wait before you can call the API again.



For more information, please visit [https://www.billbee.io](https://www.billbee.io).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kruegge82/billbee-php-sdk-api.git"
    }
  ],
  "require": {
    "kruegge82/billbee-php-sdk-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CloudStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudStorageApiGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudStorageApi->cloudStorageApiGetList: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://app.billbee.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CloudStorageApi* | [**cloudStorageApiGetList**](docs/Api/CloudStorageApi.md#cloudstorageapigetlist) | **GET** /api/v1/cloudstorages | Gets a list of all connected cloud storage devices
*CustomerAddressesApi* | [**customerAddressesCreate**](docs/Api/CustomerAddressesApi.md#customeraddressescreate) | **POST** /api/v1/customer-addresses | Creates a new customer address
*CustomerAddressesApi* | [**customerAddressesGetAll**](docs/Api/CustomerAddressesApi.md#customeraddressesgetall) | **GET** /api/v1/customer-addresses | Get a list of all customer addresses
*CustomerAddressesApi* | [**customerAddressesGetOne**](docs/Api/CustomerAddressesApi.md#customeraddressesgetone) | **GET** /api/v1/customer-addresses/{id} | Queries a single customer address by id
*CustomerAddressesApi* | [**customerAddressesUpdate**](docs/Api/CustomerAddressesApi.md#customeraddressesupdate) | **PUT** /api/v1/customer-addresses/{id} | Updates a customer address by id
*CustomersApi* | [**customerAddCustomerAddress**](docs/Api/CustomersApi.md#customeraddcustomeraddress) | **POST** /api/v1/customers/{id}/addresses | Adds a new address to a customer
*CustomersApi* | [**customerCreate**](docs/Api/CustomersApi.md#customercreate) | **POST** /api/v1/customers | Creates a new customer
*CustomersApi* | [**customerGetAll**](docs/Api/CustomersApi.md#customergetall) | **GET** /api/v1/customers | Get a list of all customers
*CustomersApi* | [**customerGetCustomerAddress**](docs/Api/CustomersApi.md#customergetcustomeraddress) | **GET** /api/v1/customers/addresses/{id} | Queries a single address from a customer
*CustomersApi* | [**customerGetCustomerAddresses**](docs/Api/CustomersApi.md#customergetcustomeraddresses) | **GET** /api/v1/customers/{id}/addresses | Queries a list of addresses from a customer
*CustomersApi* | [**customerGetCustomerOrders**](docs/Api/CustomersApi.md#customergetcustomerorders) | **GET** /api/v1/customers/{id}/orders | Queries a list of orders from a customer
*CustomersApi* | [**customerGetOne**](docs/Api/CustomersApi.md#customergetone) | **GET** /api/v1/customers/{id} | Queries a single customer by id
*CustomersApi* | [**customerPatchAddress**](docs/Api/CustomersApi.md#customerpatchaddress) | **PATCH** /api/v1/customers/addresses/{id} | Updates one or more fields of an address
*CustomersApi* | [**customerUpdate**](docs/Api/CustomersApi.md#customerupdate) | **PUT** /api/v1/customers/{id} | Updates a customer by id
*CustomersApi* | [**customerUpdateAddress**](docs/Api/CustomersApi.md#customerupdateaddress) | **PUT** /api/v1/customers/addresses/{id} | Updates all fields of an address
*CustomersApi* | [**searchSearch**](docs/Api/CustomersApi.md#searchsearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax
*DeliveryNoteApi* | [**orderApiCreateDeliveryNote**](docs/Api/DeliveryNoteApi.md#orderapicreatedeliverynote) | **POST** /api/v1/orders/CreateDeliveryNote/{id} | Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
*EnumApiApi* | [**enumApiGetAccountSyncState**](docs/Api/EnumApiApi.md#enumapigetaccountsyncstate) | **GET** /api/v1/enums/accountsyncstate | Returns a list with all defined account sync states
*EnumApiApi* | [**enumApiGetOrderStates**](docs/Api/EnumApiApi.md#enumapigetorderstates) | **GET** /api/v1/enums/orderstates | Returns a list with all defined orderstates
*EnumApiApi* | [**enumApiGetPaymentTypes**](docs/Api/EnumApiApi.md#enumapigetpaymenttypes) | **GET** /api/v1/enums/paymenttypes | Returns a list with all defined paymenttypes
*EnumApiApi* | [**enumApiGetShipmentTypes**](docs/Api/EnumApiApi.md#enumapigetshipmenttypes) | **GET** /api/v1/enums/shipmenttypes | Returns a list with all defined shipmenttypes
*EnumApiApi* | [**enumApiGetShippingCarriers**](docs/Api/EnumApiApi.md#enumapigetshippingcarriers) | **GET** /api/v1/enums/shippingcarriers | Returns a list with all defined shippingcarriers
*EnumApiApi* | [**enumApiGetShopAccountType**](docs/Api/EnumApiApi.md#enumapigetshopaccounttype) | **GET** /api/v1/enums/shopaccounttype | Returns a list with all defined account types
*EventsApi* | [**eventApiGetList**](docs/Api/EventsApi.md#eventapigetlist) | **GET** /api/v1/events | Get a list of all events optionally filtered by date. This request is extra throttled to 2 calls per page per hour.
*InvoiceApi* | [**orderApiCreateInvoice**](docs/Api/InvoiceApi.md#orderapicreateinvoice) | **POST** /api/v1/orders/CreateInvoice/{id} | Create an invoice for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
*InvoiceApi* | [**orderApiGetInvoiceList**](docs/Api/InvoiceApi.md#orderapigetinvoicelist) | **GET** /api/v1/orders/invoices | Get a list of all invoices optionally filtered by date. This request ist throttled to 1 per 1 minute for same page and minInvoiceDate
*OrdersApi* | [**layoutApiGetList**](docs/Api/OrdersApi.md#layoutapigetlist) | **GET** /api/v1/layouts | 
*OrdersApi* | [**orderApiAddShipment**](docs/Api/OrdersApi.md#orderapiaddshipment) | **POST** /api/v1/orders/{id}/shipment | Add a shipment to a given order
*OrdersApi* | [**orderApiCreateDeliveryNote**](docs/Api/OrdersApi.md#orderapicreatedeliverynote) | **POST** /api/v1/orders/CreateDeliveryNote/{id} | Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
*OrdersApi* | [**orderApiCreateInvoice**](docs/Api/OrdersApi.md#orderapicreateinvoice) | **POST** /api/v1/orders/CreateInvoice/{id} | Create an invoice for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
*OrdersApi* | [**orderApiFind**](docs/Api/OrdersApi.md#orderapifind) | **GET** /api/v1/orders/find/{id}/{partner} | Find a single order by its external id (order number)
*OrdersApi* | [**orderApiGet**](docs/Api/OrdersApi.md#orderapiget) | **GET** /api/v1/orders/{id} | Get a single order by its internal billbee id. This request is throttled to 6 calls per order in one minute
*OrdersApi* | [**orderApiGetByExtRef**](docs/Api/OrdersApi.md#orderapigetbyextref) | **GET** /api/v1/orders/findbyextref/{extRef} | Get a single order by its external order number
*OrdersApi* | [**orderApiGetInvoiceList**](docs/Api/OrdersApi.md#orderapigetinvoicelist) | **GET** /api/v1/orders/invoices | Get a list of all invoices optionally filtered by date. This request ist throttled to 1 per 1 minute for same page and minInvoiceDate
*OrdersApi* | [**orderApiGetList**](docs/Api/OrdersApi.md#orderapigetlist) | **GET** /api/v1/orders | Get a list of all orders optionally filtered by date
*OrdersApi* | [**orderApiGetPatchableFields**](docs/Api/OrdersApi.md#orderapigetpatchablefields) | **GET** /api/v1/orders/PatchableFields | Returns a list of fields which can be updated with the orders/{id} patch call
*OrdersApi* | [**orderApiMessage**](docs/Api/OrdersApi.md#orderapimessage) | **POST** /api/v1/orders/{id}/message | Adds a message to the order
*OrdersApi* | [**orderApiParsePlaceholders**](docs/Api/OrdersApi.md#orderapiparseplaceholders) | **POST** /api/v1/orders/{id}/parse-placeholders | Parses a text and replaces all placeholders
*OrdersApi* | [**orderApiPatchOrder**](docs/Api/OrdersApi.md#orderapipatchorder) | **PATCH** /api/v1/orders/{id} | Updates one or more fields of an order
*OrdersApi* | [**orderApiPostNewOrder**](docs/Api/OrdersApi.md#orderapipostneworder) | **POST** /api/v1/orders | Creates a new order in the Billbee account
*OrdersApi* | [**orderApiSendMessage**](docs/Api/OrdersApi.md#orderapisendmessage) | **POST** /api/v1/orders/{id}/send-message | Sends a message to the buyer
*OrdersApi* | [**orderApiTagsCreate**](docs/Api/OrdersApi.md#orderapitagscreate) | **POST** /api/v1/orders/{id}/tags | Attach one or more tags to an order
*OrdersApi* | [**orderApiTagsUpdate**](docs/Api/OrdersApi.md#orderapitagsupdate) | **PUT** /api/v1/orders/{id}/tags | Sets the tags attached to an order
*OrdersApi* | [**orderApiTriggerEvent**](docs/Api/OrdersApi.md#orderapitriggerevent) | **POST** /api/v1/orders/{id}/trigger-event | Triggers a rule event
*OrdersApi* | [**orderApiUpdateState**](docs/Api/OrdersApi.md#orderapiupdatestate) | **PUT** /api/v1/orders/{id}/orderstate | Changes the main state of a single order
*OrdersApi* | [**searchSearch**](docs/Api/OrdersApi.md#searchsearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax
*ProductsApi* | [**articleCreateArticle**](docs/Api/ProductsApi.md#articlecreatearticle) | **POST** /api/v1/products | Creates a new product
*ProductsApi* | [**articleDeleteArticle**](docs/Api/ProductsApi.md#articledeletearticle) | **DELETE** /api/v1/products/{id} | Deletes a product
*ProductsApi* | [**articleDeleteImage**](docs/Api/ProductsApi.md#articledeleteimage) | **DELETE** /api/v1/products/images/{imageId} | Deletes a single image by id
*ProductsApi* | [**articleDeleteImageFromProduct**](docs/Api/ProductsApi.md#articledeleteimagefromproduct) | **DELETE** /api/v1/products/{productId}/images/{imageId} | Deletes a single image from a product
*ProductsApi* | [**articleDeleteImages**](docs/Api/ProductsApi.md#articledeleteimages) | **POST** /api/v1/products/images/delete | 
*ProductsApi* | [**articleGetArticle**](docs/Api/ProductsApi.md#articlegetarticle) | **GET** /api/v1/products/{id} | Queries a single article by id or by sku
*ProductsApi* | [**articleGetCategory**](docs/Api/ProductsApi.md#articlegetcategory) | **GET** /api/v1/products/category | GEts a list of all defined categories
*ProductsApi* | [**articleGetCustomField**](docs/Api/ProductsApi.md#articlegetcustomfield) | **GET** /api/v1/products/custom-fields/{id} | Queries a single custom field
*ProductsApi* | [**articleGetCustomFields**](docs/Api/ProductsApi.md#articlegetcustomfields) | **GET** /api/v1/products/custom-fields | Queries a list of all custom fields
*ProductsApi* | [**articleGetImage**](docs/Api/ProductsApi.md#articlegetimage) | **GET** /api/v1/products/images/{imageId} | Returns a single image by id
*ProductsApi* | [**articleGetImageFromProduct**](docs/Api/ProductsApi.md#articlegetimagefromproduct) | **GET** /api/v1/products/{productId}/images/{imageId} | Returns a single image by id
*ProductsApi* | [**articleGetImages**](docs/Api/ProductsApi.md#articlegetimages) | **GET** /api/v1/products/{productId}/images | Returns a list of all images of the product
*ProductsApi* | [**articleGetList**](docs/Api/ProductsApi.md#articlegetlist) | **GET** /api/v1/products | Get a list of all products
*ProductsApi* | [**articleGetPatchableFields**](docs/Api/ProductsApi.md#articlegetpatchablefields) | **GET** /api/v1/products/PatchableFields | Returns a list of fields which can be updated with the patch call
*ProductsApi* | [**articleGetReservedAmount**](docs/Api/ProductsApi.md#articlegetreservedamount) | **GET** /api/v1/products/reservedamount | Queries the reserved amount for a single article by id or by sku
*ProductsApi* | [**articleGetStocks**](docs/Api/ProductsApi.md#articlegetstocks) | **GET** /api/v1/products/stocks | Query all defined stock locations
*ProductsApi* | [**articlePatchArticle**](docs/Api/ProductsApi.md#articlepatcharticle) | **PATCH** /api/v1/products/{id} | Updates one or more fields of a product
*ProductsApi* | [**articlePutImage**](docs/Api/ProductsApi.md#articleputimage) | **PUT** /api/v1/products/{productId}/images/{imageId} | Add or update an existing image of a product
*ProductsApi* | [**articlePutImages**](docs/Api/ProductsApi.md#articleputimages) | **PUT** /api/v1/products/{productId}/images | Add multiple images to a product or replace the product images by the given images
*ProductsApi* | [**articleUpdateStock**](docs/Api/ProductsApi.md#articleupdatestock) | **POST** /api/v1/products/updatestock | Update the stock qty of an article
*ProductsApi* | [**articleUpdateStockCode**](docs/Api/ProductsApi.md#articleupdatestockcode) | **POST** /api/v1/products/updatestockcode | Update the stock code of an article
*ProductsApi* | [**articleUpdateStockMultiple**](docs/Api/ProductsApi.md#articleupdatestockmultiple) | **POST** /api/v1/products/updatestockmultiple | Update the stock qty for multiple articles at once
*ProductsApi* | [**searchSearch**](docs/Api/ProductsApi.md#searchsearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax
*ProvisioningApi* | [**automaticProvisioningCreateAccount**](docs/Api/ProvisioningApi.md#automaticprovisioningcreateaccount) | **POST** /api/v1/automaticprovision/createaccount | Creates a new Billbee user account with the data passed
*ProvisioningApi* | [**automaticProvisioningTermsInfo**](docs/Api/ProvisioningApi.md#automaticprovisioningtermsinfo) | **GET** /api/v1/automaticprovision/termsinfo | Returns infos about Billbee terms and conditions
*ShipmentsApi* | [**shipmentGetList**](docs/Api/ShipmentsApi.md#shipmentgetlist) | **GET** /api/v1/shipment/shipments | Get a list of all shipments optionally filtered by date. All parameters are optional.
*ShipmentsApi* | [**shipmentGetPing**](docs/Api/ShipmentsApi.md#shipmentgetping) | **GET** /api/v1/shipment/ping | 
*ShipmentsApi* | [**shipmentGetShippingCarrier**](docs/Api/ShipmentsApi.md#shipmentgetshippingcarrier) | **GET** /api/v1/shipment/shippingcarriers | Queries the currently available shipping carriers.
*ShipmentsApi* | [**shipmentGetShippingproviders**](docs/Api/ShipmentsApi.md#shipmentgetshippingproviders) | **GET** /api/v1/shipment/shippingproviders | Query all defined shipping providers
*ShipmentsApi* | [**shipmentPostShipment**](docs/Api/ShipmentsApi.md#shipmentpostshipment) | **POST** /api/v1/shipment/shipment | Creates a new shipment with the selected Shippingprovider
*ShipmentsApi* | [**shipmentShipWithLabel**](docs/Api/ShipmentsApi.md#shipmentshipwithlabel) | **POST** /api/v1/shipment/shipwithlabel | Creates a shipment for an order in billbee
*ShopAccountsApi* | [**shopAccountQueryShopAccounts**](docs/Api/ShopAccountsApi.md#shopaccountqueryshopaccounts) | **GET** /api/v1/shopaccounts | Queries a list of avaible shop accounts
*WebhooksApi* | [**webHookManagementDelete**](docs/Api/WebhooksApi.md#webhookmanagementdelete) | **DELETE** /api/v1/webhooks/{id} | Deletes an existing WebHook registration.
*WebhooksApi* | [**webHookManagementDeleteAll**](docs/Api/WebhooksApi.md#webhookmanagementdeleteall) | **DELETE** /api/v1/webhooks | Deletes all existing WebHook registrations.
*WebhooksApi* | [**webHookManagementGet**](docs/Api/WebhooksApi.md#webhookmanagementget) | **GET** /api/v1/webhooks | Gets all registered WebHooks for a given user.
*WebhooksApi* | [**webHookManagementGetFilters**](docs/Api/WebhooksApi.md#webhookmanagementgetfilters) | **GET** /api/v1/webhooks/filters | Returns a list of all known filters you can use to register webhooks
*WebhooksApi* | [**webHookManagementLookup**](docs/Api/WebhooksApi.md#webhookmanagementlookup) | **GET** /api/v1/webhooks/{id} | Looks up a registered WebHook with the given {id} for a given user.
*WebhooksApi* | [**webHookManagementPost**](docs/Api/WebhooksApi.md#webhookmanagementpost) | **POST** /api/v1/webhooks | Registers a new WebHook for a given user.
*WebhooksApi* | [**webHookManagementPut**](docs/Api/WebhooksApi.md#webhookmanagementput) | **PUT** /api/v1/webhooks/{id} | Updates an existing WebHook registration.

## Models

- [BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldValueModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldValueModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleCategoryApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleCategoryApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelArticleSourceApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelArticleSourceApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelBomSubArticleApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelBomSubArticleApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCloudStorageApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCloudStorageApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCommentApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCommentApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelCustomerApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelDeletedImagesModel](docs/Model/BillbeeInterfacesBillbeeAPIModelDeletedImagesModel.md)
- [BillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData](docs/Model/BillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData.md)
- [BillbeeInterfacesBillbeeAPIModelInvoiceApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelInvoiceApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelOrder](docs/Model/BillbeeInterfacesBillbeeAPIModelOrder.md)
- [BillbeeInterfacesBillbeeAPIModelOrderAddressApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelOrderAddressApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelOrderItem](docs/Model/BillbeeInterfacesBillbeeAPIModelOrderItem.md)
- [BillbeeInterfacesBillbeeAPIModelOrderItemAttribute](docs/Model/BillbeeInterfacesBillbeeAPIModelOrderItemAttribute.md)
- [BillbeeInterfacesBillbeeAPIModelOrderUser](docs/Model/BillbeeInterfacesBillbeeAPIModelOrderUser.md)
- [BillbeeInterfacesBillbeeAPIModelProductImage](docs/Model/BillbeeInterfacesBillbeeAPIModelProductImage.md)
- [BillbeeInterfacesBillbeeAPIModelShipment](docs/Model/BillbeeInterfacesBillbeeAPIModelShipment.md)
- [BillbeeInterfacesBillbeeAPIModelShipmentAddressApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelShipmentAddressApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelSoldProduct](docs/Model/BillbeeInterfacesBillbeeAPIModelSoldProduct.md)
- [BillbeeInterfacesBillbeeAPIModelStockArticleApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelStockArticleApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelStockResponseData](docs/Model/BillbeeInterfacesBillbeeAPIModelStockResponseData.md)
- [BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelUpdateStockResponseData](docs/Model/BillbeeInterfacesBillbeeAPIModelUpdateStockResponseData.md)
- [BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel](docs/Model/BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md)
- [BillbeeInterfacesBillbeeAPIModelsLayoutTemplate](docs/Model/BillbeeInterfacesBillbeeAPIModelsLayoutTemplate.md)
- [BillbeeInterfacesBillbeeAPIModelsOrderPayment](docs/Model/BillbeeInterfacesBillbeeAPIModelsOrderPayment.md)
- [BillbeeInterfacesBillbeeAPIShopAccountReadApiModel](docs/Model/BillbeeInterfacesBillbeeAPIShopAccountReadApiModel.md)
- [BillbeeInterfacesOrderHistoryEntry](docs/Model/BillbeeInterfacesOrderHistoryEntry.md)
- [BillbeeInterfacesOrderMultiLanguageString](docs/Model/BillbeeInterfacesOrderMultiLanguageString.md)
- [BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags](docs/Model/BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags.md)
- [BillbeeInterfacesShippingProductService](docs/Model/BillbeeInterfacesShippingProductService.md)
- [BillbeeInterfacesShippingShipmentDataDimensions](docs/Model/BillbeeInterfacesShippingShipmentDataDimensions.md)
- [RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel](docs/Model/RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel.md)
- [RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder](docs/Model/RechnungsdruckWebAppControllersApiApiPagedResultPagingInformationOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelDeletedImagesModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelDeletedImagesModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockCodeResponseData](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockCodeResponseData.md)
- [RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData.md)
- [RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice.md)
- [RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiShipmentWithLabelResult](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiShipmentWithLabelResult.md)
- [RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel.md)
- [RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelStockResponseData](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelStockResponseData.md)
- [RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelsLayoutTemplate](docs/Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelsLayoutTemplate.md)
- [RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer](docs/Model/RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer.md)
- [RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainerUserAddress](docs/Model/RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainerUserAddress.md)
- [RechnungsdruckWebAppControllersApiInvoice](docs/Model/RechnungsdruckWebAppControllersApiInvoice.md)
- [RechnungsdruckWebAppControllersApiOrder](docs/Model/RechnungsdruckWebAppControllersApiOrder.md)
- [RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer](docs/Model/RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer.md)
- [RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel](docs/Model/RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel.md)
- [RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer](docs/Model/RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer.md)
- [RechnungsdruckWebAppControllersApiOrderStateUpdate](docs/Model/RechnungsdruckWebAppControllersApiOrderStateUpdate.md)
- [RechnungsdruckWebAppControllersApiOrderTagCreate](docs/Model/RechnungsdruckWebAppControllersApiOrderTagCreate.md)
- [RechnungsdruckWebAppControllersApiSearchControllerCustomerResult](docs/Model/RechnungsdruckWebAppControllersApiSearchControllerCustomerResult.md)
- [RechnungsdruckWebAppControllersApiSearchControllerOrderResult](docs/Model/RechnungsdruckWebAppControllersApiSearchControllerOrderResult.md)
- [RechnungsdruckWebAppControllersApiSearchControllerProductResult](docs/Model/RechnungsdruckWebAppControllersApiSearchControllerProductResult.md)
- [RechnungsdruckWebAppControllersApiSearchControllerSearchModel](docs/Model/RechnungsdruckWebAppControllersApiSearchControllerSearchModel.md)
- [RechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel](docs/Model/RechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel.md)
- [RechnungsdruckWebAppControllersApiShipmentWithLabel](docs/Model/RechnungsdruckWebAppControllersApiShipmentWithLabel.md)
- [RechnungsdruckWebAppControllersApiShipmentWithLabelResult](docs/Model/RechnungsdruckWebAppControllersApiShipmentWithLabelResult.md)
- [RechnungsdruckWebAppControllersApiWebHookApiModel](docs/Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)
- [RechnungsdruckWebAppModelApiOrderMessageModel](docs/Model/RechnungsdruckWebAppModelApiOrderMessageModel.md)
- [SystemCollectionsGenericKeyValuePairOfSystemInt32AndSystemString](docs/Model/SystemCollectionsGenericKeyValuePairOfSystemInt32AndSystemString.md)
- [SystemCollectionsGenericKeyValuePairOfSystemStringAndSystemCollectionsGenericListOfSystemCollectionsGenericKeyValuePairOfSystemInt32AndSystemString](docs/Model/SystemCollectionsGenericKeyValuePairOfSystemStringAndSystemCollectionsGenericListOfSystemCollectionsGenericKeyValuePairOfSystemInt32AndSystemString.md)

## Authorization

Authentication schemes defined for the API:
### basic

- **Type**: HTTP basic authentication

### X-Billbee-Api-Key

- **Type**: API key
- **API key parameter name**: X-Billbee-Api-Key
- **Location**: HTTP header
