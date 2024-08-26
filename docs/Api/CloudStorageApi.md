# OpenAPI\Client\CloudStorageApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudStorageApiGetList()**](CloudStorageApi.md#cloudStorageApiGetList) | **GET** /api/v1/cloudstorages | Gets a list of all connected cloud storage devices |


## `cloudStorageApiGetList()`

```php
cloudStorageApiGetList(): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel
```

Gets a list of all connected cloud storage devices

### Example

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

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCloudStorageApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
