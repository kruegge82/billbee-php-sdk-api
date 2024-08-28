# kruegge82\billbee\OrdersApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**layoutApiGetList()**](OrdersApi.md#layoutApiGetList) | **GET** /api/v1/layouts |  |
| [**orderApiAddShipment()**](OrdersApi.md#orderApiAddShipment) | **POST** /api/v1/orders/{id}/shipment | Add a shipment to a given order |
| [**orderApiCreateDeliveryNote()**](OrdersApi.md#orderApiCreateDeliveryNote) | **POST** /api/v1/orders/CreateDeliveryNote/{id} | Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes. |
| [**orderApiCreateInvoice()**](OrdersApi.md#orderApiCreateInvoice) | **POST** /api/v1/orders/CreateInvoice/{id} | Create an invoice for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes. |
| [**orderApiFind()**](OrdersApi.md#orderApiFind) | **GET** /api/v1/orders/find/{id}/{partner} | Find a single order by its external id (order number) |
| [**orderApiGet()**](OrdersApi.md#orderApiGet) | **GET** /api/v1/orders/{id} | Get a single order by its internal billbee id. This request is throttled to 6 calls per order in one minute |
| [**orderApiGetByExtRef()**](OrdersApi.md#orderApiGetByExtRef) | **GET** /api/v1/orders/findbyextref/{extRef} | Get a single order by its external order number |
| [**orderApiGetInvoiceList()**](OrdersApi.md#orderApiGetInvoiceList) | **GET** /api/v1/orders/invoices | Get a list of all invoices optionally filtered by date. This request ist throttled to 1 per 1 minute for same page and minInvoiceDate |
| [**orderApiGetList()**](OrdersApi.md#orderApiGetList) | **GET** /api/v1/orders | Get a list of all orders optionally filtered by date |
| [**orderApiGetPatchableFields()**](OrdersApi.md#orderApiGetPatchableFields) | **GET** /api/v1/orders/PatchableFields | Returns a list of fields which can be updated with the orders/{id} patch call |
| [**orderApiMessage()**](OrdersApi.md#orderApiMessage) | **POST** /api/v1/orders/{id}/message | Adds a message to the order |
| [**orderApiParsePlaceholders()**](OrdersApi.md#orderApiParsePlaceholders) | **POST** /api/v1/orders/{id}/parse-placeholders | Parses a text and replaces all placeholders |
| [**orderApiPatchOrder()**](OrdersApi.md#orderApiPatchOrder) | **PATCH** /api/v1/orders/{id} | Updates one or more fields of an order |
| [**orderApiPostNewOrder()**](OrdersApi.md#orderApiPostNewOrder) | **POST** /api/v1/orders | Creates a new order in the Billbee account |
| [**orderApiSendMessage()**](OrdersApi.md#orderApiSendMessage) | **POST** /api/v1/orders/{id}/send-message | Sends a message to the buyer |
| [**orderApiTagsCreate()**](OrdersApi.md#orderApiTagsCreate) | **POST** /api/v1/orders/{id}/tags | Attach one or more tags to an order |
| [**orderApiTagsUpdate()**](OrdersApi.md#orderApiTagsUpdate) | **PUT** /api/v1/orders/{id}/tags | Sets the tags attached to an order |
| [**orderApiTriggerEvent()**](OrdersApi.md#orderApiTriggerEvent) | **POST** /api/v1/orders/{id}/trigger-event | Triggers a rule event |
| [**orderApiUpdateState()**](OrdersApi.md#orderApiUpdateState) | **PUT** /api/v1/orders/{id}/orderstate | Changes the main state of a single order |
| [**searchSearch()**](OrdersApi.md#searchSearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax |


## `layoutApiGetList()`

```php
layoutApiGetList(): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelsLayoutTemplate
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->layoutApiGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->layoutApiGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelsLayoutTemplate**](../Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelsLayoutTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiAddShipment()`

```php
orderApiAddShipment($id, $model)
```

Add a shipment to a given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal billbee id of the order
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel | The shipment data to create the shipment

try {
    $apiInstance->orderApiAddShipment($id, $model);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiAddShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal billbee id of the order | |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel**](../Model/RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel.md)| The shipment data to create the shipment | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiCreateDeliveryNote()`

```php
orderApiCreateDeliveryNote($id, $include_pdf, $send_to_cloud_id): object
```

Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal billbee id of the order
$include_pdf = false; // bool | If true, the PDF is included in the response as base64 encoded string
$send_to_cloud_id = 56; // int | Optionally specify the id of a billbee connected cloud device to send the pdf to

try {
    $result = $apiInstance->orderApiCreateDeliveryNote($id, $include_pdf, $send_to_cloud_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiCreateDeliveryNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal billbee id of the order | |
| **include_pdf** | **bool**| If true, the PDF is included in the response as base64 encoded string | [optional] [default to false] |
| **send_to_cloud_id** | **int**| Optionally specify the id of a billbee connected cloud device to send the pdf to | [optional] |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiCreateInvoice()`

```php
orderApiCreateInvoice($id, $include_invoice_pdf, $template_id, $send_to_cloud_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice
```

Create an invoice for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal billbee id of the order
$include_invoice_pdf = false; // bool | If true, the PDF is included in the response as base64 encoded string
$template_id = 56; // int | You can pass the id of an invoice template to overwrite the assigned template for invoice creation
$send_to_cloud_id = 56; // int | You can pass the id of a connected cloud printer/storage to send the invoice to it

try {
    $result = $apiInstance->orderApiCreateInvoice($id, $include_invoice_pdf, $template_id, $send_to_cloud_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal billbee id of the order | |
| **include_invoice_pdf** | **bool**| If true, the PDF is included in the response as base64 encoded string | [optional] [default to false] |
| **template_id** | **int**| You can pass the id of an invoice template to overwrite the assigned template for invoice creation | [optional] |
| **send_to_cloud_id** | **int**| You can pass the id of a connected cloud printer/storage to send the invoice to it | [optional] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice**](../Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiFind()`

```php
orderApiFind($id, $partner): object
```

Find a single order by its external id (order number)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The order id from the external system
$partner = 'manual'; // string | Optional the name of the shop/marketplace the order was imported from

try {
    $result = $apiInstance->orderApiFind($id, $partner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The order id from the external system | |
| **partner** | **string**| Optional the name of the shop/marketplace the order was imported from | [default to &#39;manual&#39;] |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiGet()`

```php
orderApiGet($id, $article_title_source): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder
```

Get a single order by its internal billbee id. This request is throttled to 6 calls per order in one minute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal billbee id of the order
$article_title_source = 0; // int | The source field for the article title. 0 = Order Position (default), 1 = Article Title, 2 = Article Invoice Text

try {
    $result = $apiInstance->orderApiGet($id, $article_title_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal billbee id of the order | |
| **article_title_source** | **int**| The source field for the article title. 0 &#x3D; Order Position (default), 1 &#x3D; Article Title, 2 &#x3D; Article Invoice Text | [optional] [default to 0] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiGetByExtRef()`

```php
orderApiGetByExtRef($ext_ref): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder
```

Get a single order by its external order number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ext_ref = 'ext_ref_example'; // string | The extern order number of the order

try {
    $result = $apiInstance->orderApiGetByExtRef($ext_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiGetByExtRef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ext_ref** | **string**| The extern order number of the order | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiGetInvoiceList()`

```php
orderApiGetInvoiceList($min_invoice_date, $max_invoice_date, $page, $page_size, $shop_id, $order_state_id, $tag, $min_pay_date, $max_pay_date, $include_positions, $exclude_tags): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel
```

Get a list of all invoices optionally filtered by date. This request ist throttled to 1 per 1 minute for same page and minInvoiceDate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$min_invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the oldest invoice date to include
$max_invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the newest invoice date to include
$page = 1; // int | Specifies the page to request
$page_size = 50; // int | Specifies the pagesize. Defaults to 50, max value is 250
$shop_id = array(56); // int[] | Specifies a list of shop ids for which invoices should be included
$order_state_id = array(56); // int[] | Specifies a list of state ids to include in the response
$tag = array('tag_example'); // string[]
$min_pay_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$max_pay_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$include_positions = false; // bool
$exclude_tags = false; // bool | If true the list of tags passed to the call are used to filter orders to not include these tags

try {
    $result = $apiInstance->orderApiGetInvoiceList($min_invoice_date, $max_invoice_date, $page, $page_size, $shop_id, $order_state_id, $tag, $min_pay_date, $max_pay_date, $include_positions, $exclude_tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiGetInvoiceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **min_invoice_date** | **\DateTime**| Specifies the oldest invoice date to include | [optional] |
| **max_invoice_date** | **\DateTime**| Specifies the newest invoice date to include | [optional] |
| **page** | **int**| Specifies the page to request | [optional] [default to 1] |
| **page_size** | **int**| Specifies the pagesize. Defaults to 50, max value is 250 | [optional] [default to 50] |
| **shop_id** | [**int[]**](../Model/int.md)| Specifies a list of shop ids for which invoices should be included | [optional] |
| **order_state_id** | [**int[]**](../Model/int.md)| Specifies a list of state ids to include in the response | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **min_pay_date** | **\DateTime**|  | [optional] |
| **max_pay_date** | **\DateTime**|  | [optional] |
| **include_positions** | **bool**|  | [optional] [default to false] |
| **exclude_tags** | **bool**| If true the list of tags passed to the call are used to filter orders to not include these tags | [optional] [default to false] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiGetList()`

```php
orderApiGetList($min_order_date, $max_order_date, $page, $page_size, $shop_id, $order_state_id, $tag, $minimum_bill_bee_order_id, $modified_at_min, $modified_at_max, $article_title_source, $exclude_tags): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder
```

Get a list of all orders optionally filtered by date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$min_order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the oldest order date to include in the response
$max_order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the newest order date to include in the response
$page = 1; // int | Specifies the page to request
$page_size = 50; // int | Specifies the pagesize. Defaults to 50, max value is 250
$shop_id = array(56); // int[] | Specifies a list of shop ids for which invoices should be included
$order_state_id = array(56); // int[] | Specifies a list of state ids to include in the response
$tag = array('tag_example'); // string[] | Specifies a list of tags the order must have attached to be included in the response
$minimum_bill_bee_order_id = 56; // int | If given, all delivered orders have an Id greater than or equal to the given minimumOrderId
$modified_at_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If given, the last modification has to be newer than the given date
$modified_at_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If given, the last modification has to be older or equal than the given date.
$article_title_source = 0; // int | The source field for the article title. 0 = Order Position (default), 1 = Article Title, 2 = Article Invoice Text
$exclude_tags = false; // bool | If true the list of tags passed to the call are used to filter orders to not include these tags

try {
    $result = $apiInstance->orderApiGetList($min_order_date, $max_order_date, $page, $page_size, $shop_id, $order_state_id, $tag, $minimum_bill_bee_order_id, $modified_at_min, $modified_at_max, $article_title_source, $exclude_tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **min_order_date** | **\DateTime**| Specifies the oldest order date to include in the response | [optional] |
| **max_order_date** | **\DateTime**| Specifies the newest order date to include in the response | [optional] |
| **page** | **int**| Specifies the page to request | [optional] [default to 1] |
| **page_size** | **int**| Specifies the pagesize. Defaults to 50, max value is 250 | [optional] [default to 50] |
| **shop_id** | [**int[]**](../Model/int.md)| Specifies a list of shop ids for which invoices should be included | [optional] |
| **order_state_id** | [**int[]**](../Model/int.md)| Specifies a list of state ids to include in the response | [optional] |
| **tag** | [**string[]**](../Model/string.md)| Specifies a list of tags the order must have attached to be included in the response | [optional] |
| **minimum_bill_bee_order_id** | **int**| If given, all delivered orders have an Id greater than or equal to the given minimumOrderId | [optional] |
| **modified_at_min** | **\DateTime**| If given, the last modification has to be newer than the given date | [optional] |
| **modified_at_max** | **\DateTime**| If given, the last modification has to be older or equal than the given date. | [optional] |
| **article_title_source** | **int**| The source field for the article title. 0 &#x3D; Order Position (default), 1 &#x3D; Article Title, 2 &#x3D; Article Invoice Text | [optional] [default to 0] |
| **exclude_tags** | **bool**| If true the list of tags passed to the call are used to filter orders to not include these tags | [optional] [default to false] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiGetPatchableFields()`

```php
orderApiGetPatchableFields(): object
```

Returns a list of fields which can be updated with the orders/{id} patch call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->orderApiGetPatchableFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiGetPatchableFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiMessage()`

```php
orderApiMessage($id, $order_message): object
```

Adds a message to the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the order
$order_message = new \kruegge82\billbee\Model\RechnungsdruckWebAppModelApiOrderMessageModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppModelApiOrderMessageModel

try {
    $result = $apiInstance->orderApiMessage($id, $order_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the order | |
| **order_message** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppModelApiOrderMessageModel**](../Model/RechnungsdruckWebAppModelApiOrderMessageModel.md)|  | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiParsePlaceholders()`

```php
orderApiParsePlaceholders($id, $container): object
```

Parses a text and replaces all placeholders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the order
$container = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer

try {
    $result = $apiInstance->orderApiParsePlaceholders($id, $container);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiParsePlaceholders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the order | |
| **container** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer**](../Model/RechnungsdruckWebAppControllersApiOrderApiControllerParseTextContainer.md)|  | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiPatchOrder()`

```php
orderApiPatchOrder($id, $model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder
```

Updates one or more fields of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$model = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->orderApiPatchOrder($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiPatchOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **model** | **object**|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiPostNewOrder()`

```php
orderApiPostNewOrder($order_data, $shop_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder
```

Creates a new order in the Billbee account

To create an order POST an JSON object to the orders endpoint with the shown properties.  Not all properties are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_data = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelOrder(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelOrder
$shop_id = 56; // int | Deprecated, if orderData.ApiAccountId is set, it will be used instead of 'shopId'

try {
    $result = $apiInstance->orderApiPostNewOrder($order_data, $shop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiPostNewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_data** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelOrder**](../Model/BillbeeInterfacesBillbeeAPIModelOrder.md)|  | |
| **shop_id** | **int**| Deprecated, if orderData.ApiAccountId is set, it will be used instead of &#39;shopId&#39; | [optional] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiSendMessage()`

```php
orderApiSendMessage($id, $model): object
```

Sends a message to the buyer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the order
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel | The message model

try {
    $result = $apiInstance->orderApiSendMessage($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the order | |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel**](../Model/RechnungsdruckWebAppControllersApiOrderApiControllerSendMessageModel.md)| The message model | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiTagsCreate()`

```php
orderApiTagsCreate($id, $tag_data): object
```

Attach one or more tags to an order

When a tag is already attached, it is ignored. Tags are not case sensitive. All given tags are added to the existing tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal id of the order
$tag_data = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate | Tags to attach

try {
    $result = $apiInstance->orderApiTagsCreate($id, $tag_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiTagsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal id of the order | |
| **tag_data** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate**](../Model/RechnungsdruckWebAppControllersApiOrderTagCreate.md)| Tags to attach | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiTagsUpdate()`

```php
orderApiTagsUpdate($id, $tag_data): object
```

Sets the tags attached to an order

All existing tags will be replaced by the given list of new tags. To just add tags, use POST method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal id of the order
$tag_data = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate | Tags to attach

try {
    $result = $apiInstance->orderApiTagsUpdate($id, $tag_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiTagsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal id of the order | |
| **tag_data** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderTagCreate**](../Model/RechnungsdruckWebAppControllersApiOrderTagCreate.md)| Tags to attach | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiTriggerEvent()`

```php
orderApiTriggerEvent($id, $model): object
```

Triggers a rule event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the order
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer

try {
    $result = $apiInstance->orderApiTriggerEvent($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiTriggerEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the order | |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer**](../Model/RechnungsdruckWebAppControllersApiOrderApiControllerTriggerEventContainer.md)|  | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderApiUpdateState()`

```php
orderApiUpdateState($id, $model)
```

Changes the main state of a single order

### REMARKS ###  Use this call to change the state of an order to i.e. paid or sent.    The state is transfered to the external shop/marketplace if configured.  This is the list of known states:  - 1: ordered  - 2: confirmed  - 3: paid  - 4: shipped  - 5: reclamation  - 6: deleted  - 7: closed  - 8: canceled  - 9: archived  - 10: not used  - 11: demand note 1  - 12: demand note 2  - 13: packed  - 14: offered  - 15: payment reminder  - 16: fulfilling

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The internal id of the order
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderStateUpdate(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderStateUpdate | The data used to change the state

try {
    $apiInstance->orderApiUpdateState($id, $model);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderApiUpdateState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The internal id of the order | |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiOrderStateUpdate**](../Model/RechnungsdruckWebAppControllersApiOrderStateUpdate.md)| The data used to change the state | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSearch()`

```php
searchSearch($model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel
```

Search for products, customers and orders.  Type can be \"order\", \"product\" and / or \"customer\"  Term can contain lucene query syntax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ApiKeyAuth
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel

try {
    $result = $apiInstance->searchSearch($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->searchSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel**](../Model/RechnungsdruckWebAppControllersApiSearchControllerSearchModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
