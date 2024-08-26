# kruegge82\billbee\ProvisioningApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**automaticProvisioningCreateAccount()**](ProvisioningApi.md#automaticProvisioningCreateAccount) | **POST** /api/v1/automaticprovision/createaccount | Creates a new Billbee user account with the data passed |
| [**automaticProvisioningTermsInfo()**](ProvisioningApi.md#automaticProvisioningTermsInfo) | **GET** /api/v1/automaticprovision/termsinfo | Returns infos about Billbee terms and conditions |


## `automaticProvisioningCreateAccount()`

```php
automaticProvisioningCreateAccount($model): object
```

Creates a new Billbee user account with the data passed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new kruegge82\billbee\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer

try {
    $result = $apiInstance->automaticProvisioningCreateAccount($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->automaticProvisioningCreateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer**](../Model/RechnungsdruckWebAppControllersApiAutomaticProvisioningControllerCreateAccountContainer.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `automaticProvisioningTermsInfo()`

```php
automaticProvisioningTermsInfo(): object
```

Returns infos about Billbee terms and conditions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new kruegge82\billbee\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->automaticProvisioningTermsInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->automaticProvisioningTermsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
