# kruegge82\billbee\ShopAccountsApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shopAccountQueryShopAccounts()**](ShopAccountsApi.md#shopAccountQueryShopAccounts) | **GET** /api/v1/shopaccounts | Queries a list of avaible shop accounts |


## `shopAccountQueryShopAccounts()`

```php
shopAccountQueryShopAccounts($page, $page_size): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel
```

Queries a list of avaible shop accounts

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


$apiInstance = new kruegge82\billbee\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current page to request starting with 1
$page_size = 50; // int | The pagesize for the result list. Values between 1 and 250 are allowed

try {
    $result = $apiInstance->shopAccountQueryShopAccounts($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->shopAccountQueryShopAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current page to request starting with 1 | [optional] [default to 1] |
| **page_size** | **int**| The pagesize for the result list. Values between 1 and 250 are allowed | [optional] [default to 50] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIShopAccountReadApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
