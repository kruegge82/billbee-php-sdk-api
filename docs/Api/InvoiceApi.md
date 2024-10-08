# kruegge82\billbee\InvoiceApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderApiCreateInvoice_0()**](InvoiceApi.md#orderApiCreateInvoice_0) | **POST** /api/v1/orders/CreateInvoice/{id} | Create an invoice for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes. |
| [**orderApiGetInvoiceList_0()**](InvoiceApi.md#orderApiGetInvoiceList_0) | **GET** /api/v1/orders/invoices | Get a list of all invoices optionally filtered by date. This request ist throttled to 1 per 1 minute for same page and minInvoiceDate |


## `orderApiCreateInvoice_0()`

```php
orderApiCreateInvoice_0($id, $include_invoice_pdf, $template_id, $send_to_cloud_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiInvoice
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


$apiInstance = new kruegge82\billbee\Api\InvoiceApi(
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
    $result = $apiInstance->orderApiCreateInvoice_0($id, $include_invoice_pdf, $template_id, $send_to_cloud_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->orderApiCreateInvoice_0: ', $e->getMessage(), PHP_EOL;
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

## `orderApiGetInvoiceList_0()`

```php
orderApiGetInvoiceList_0($min_invoice_date, $max_invoice_date, $page, $page_size, $shop_id, $order_state_id, $tag, $min_pay_date, $max_pay_date, $include_positions, $exclude_tags): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelInvoiceApiModel
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


$apiInstance = new kruegge82\billbee\Api\InvoiceApi(
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
    $result = $apiInstance->orderApiGetInvoiceList_0($min_invoice_date, $max_invoice_date, $page, $page_size, $shop_id, $order_state_id, $tag, $min_pay_date, $max_pay_date, $include_positions, $exclude_tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->orderApiGetInvoiceList_0: ', $e->getMessage(), PHP_EOL;
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
