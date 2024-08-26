# kruegge82\billbee\EnumApiApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**enumApiGetAccountSyncState()**](EnumApiApi.md#enumApiGetAccountSyncState) | **GET** /api/v1/enums/accountsyncstate | Returns a list with all defined account sync states |
| [**enumApiGetOrderStates()**](EnumApiApi.md#enumApiGetOrderStates) | **GET** /api/v1/enums/orderstates | Returns a list with all defined orderstates |
| [**enumApiGetPaymentTypes()**](EnumApiApi.md#enumApiGetPaymentTypes) | **GET** /api/v1/enums/paymenttypes | Returns a list with all defined paymenttypes |
| [**enumApiGetShipmentTypes()**](EnumApiApi.md#enumApiGetShipmentTypes) | **GET** /api/v1/enums/shipmenttypes | Returns a list with all defined shipmenttypes |
| [**enumApiGetShippingCarriers()**](EnumApiApi.md#enumApiGetShippingCarriers) | **GET** /api/v1/enums/shippingcarriers | Returns a list with all defined shippingcarriers |
| [**enumApiGetShopAccountType()**](EnumApiApi.md#enumApiGetShopAccountType) | **GET** /api/v1/enums/shopaccounttype | Returns a list with all defined account types |


## `enumApiGetAccountSyncState()`

```php
enumApiGetAccountSyncState(): object
```

Returns a list with all defined account sync states

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetAccountSyncState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetAccountSyncState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enumApiGetOrderStates()`

```php
enumApiGetOrderStates(): object
```

Returns a list with all defined orderstates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetOrderStates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetOrderStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enumApiGetPaymentTypes()`

```php
enumApiGetPaymentTypes(): object
```

Returns a list with all defined paymenttypes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetPaymentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetPaymentTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enumApiGetShipmentTypes()`

```php
enumApiGetShipmentTypes(): object
```

Returns a list with all defined shipmenttypes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetShipmentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetShipmentTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enumApiGetShippingCarriers()`

```php
enumApiGetShippingCarriers(): object
```

Returns a list with all defined shippingcarriers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetShippingCarriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetShippingCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enumApiGetShopAccountType()`

```php
enumApiGetShopAccountType(): object
```

Returns a list with all defined account types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\EnumApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['auth' => ['username', 'password']]),
    $config
);

try {
    $result = $apiInstance->enumApiGetShopAccountType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumApiApi->enumApiGetShopAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
