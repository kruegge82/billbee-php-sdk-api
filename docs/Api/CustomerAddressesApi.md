# kruegge82\billbee\CustomerAddressesApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerAddressesCreate()**](CustomerAddressesApi.md#customerAddressesCreate) | **POST** /api/v1/customer-addresses | Creates a new customer address |
| [**customerAddressesGetAll()**](CustomerAddressesApi.md#customerAddressesGetAll) | **GET** /api/v1/customer-addresses | Get a list of all customer addresses |
| [**customerAddressesGetOne()**](CustomerAddressesApi.md#customerAddressesGetOne) | **GET** /api/v1/customer-addresses/{id} | Queries a single customer address by id |
| [**customerAddressesUpdate()**](CustomerAddressesApi.md#customerAddressesUpdate) | **PUT** /api/v1/customer-addresses/{id} | Updates a customer address by id |


## `customerAddressesCreate()`

```php
customerAddressesCreate($model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Creates a new customer address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel

try {
    $result = $apiInstance->customerAddressesCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesGetAll()`

```php
customerAddressesGetAll($page, $page_size): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Get a list of all customer addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current page to request starting with 1 (default is 1)
$page_size = 50; // int | The page size for the result list. Values between 1 and 250 are allowed. (default is 50)

try {
    $result = $apiInstance->customerAddressesGetAll($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current page to request starting with 1 (default is 1) | [optional] [default to 1] |
| **page_size** | **int**| The page size for the result list. Values between 1 and 250 are allowed. (default is 50) | [optional] [default to 50] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesGetOne()`

```php
customerAddressesGetOne($id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Queries a single customer address by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the address to query

try {
    $result = $apiInstance->customerAddressesGetOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the address to query | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressesUpdate()`

```php
customerAddressesUpdate($id, $model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Updates a customer address by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\CustomerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the address
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel

try {
    $result = $apiInstance->customerAddressesUpdate($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->customerAddressesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the address | |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
