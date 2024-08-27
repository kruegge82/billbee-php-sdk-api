# kruegge82\billbee\DeliveryNoteApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderApiCreateDeliveryNote()**](DeliveryNoteApi.md#orderApiCreateDeliveryNote) | **POST** /api/v1/orders/CreateDeliveryNote/{id} | Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes. |


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


$apiInstance = new kruegge82\billbee\Api\DeliveryNoteApi(
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
    echo 'Exception when calling DeliveryNoteApi->orderApiCreateDeliveryNote: ', $e->getMessage(), PHP_EOL;
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
