# kruegge82\billbee\EventsApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventApiGetList()**](EventsApi.md#eventApiGetList) | **GET** /api/v1/events | Get a list of all events optionally filtered by date. This request is extra throttled to 2 calls per page per hour. |


## `eventApiGetList()`

```php
eventApiGetList($min_date, $max_date, $page, $page_size, $type_id, $order_id): object
```

Get a list of all events optionally filtered by date. This request is extra throttled to 2 calls per page per hour.

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


$apiInstance = new kruegge82\billbee\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$min_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the oldest date to include in the response
$max_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the newest date to include in the response
$page = 1; // int | Specifies the page to request
$page_size = 50; // int | Specifies the pagesize. Defaults to 50, max value is 250
$type_id = array(56); // int[] | Filter for specific event types
$order_id = 56; // int | Filter for specific order id

try {
    $result = $apiInstance->eventApiGetList($min_date, $max_date, $page, $page_size, $type_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventApiGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **min_date** | **\DateTime**| Specifies the oldest date to include in the response | [optional] |
| **max_date** | **\DateTime**| Specifies the newest date to include in the response | [optional] |
| **page** | **int**| Specifies the page to request | [optional] [default to 1] |
| **page_size** | **int**| Specifies the pagesize. Defaults to 50, max value is 250 | [optional] [default to 50] |
| **type_id** | [**int[]**](../Model/int.md)| Filter for specific event types | [optional] |
| **order_id** | **int**| Filter for specific order id | [optional] |

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
