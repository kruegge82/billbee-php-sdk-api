# kruegge82\billbee\CloudStorageApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudStorageApiGetList()**](CloudStorageApi.md#cloudStorageApiGetList) | **GET** /api/v1/cloudstorages | Gets a list of all connected cloud storage devices |


## `cloudStorageApiGetList()`

```php
cloudStorageApiGetList(): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel
```

Gets a list of all connected cloud storage devices

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


$apiInstance = new kruegge82\billbee\Api\CloudStorageApi(
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

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
