# kruegge82\billbee\ShipmentsApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentGetList()**](ShipmentsApi.md#shipmentGetList) | **GET** /api/v1/shipment/shipments | Get a list of all shipments optionally filtered by date. All parameters are optional. |
| [**shipmentGetPing()**](ShipmentsApi.md#shipmentGetPing) | **GET** /api/v1/shipment/ping |  |
| [**shipmentGetShippingCarrier()**](ShipmentsApi.md#shipmentGetShippingCarrier) | **GET** /api/v1/shipment/shippingcarriers | Queries the currently available shipping carriers. |
| [**shipmentGetShippingproviders()**](ShipmentsApi.md#shipmentGetShippingproviders) | **GET** /api/v1/shipment/shippingproviders | Query all defined shipping providers |
| [**shipmentPostShipment()**](ShipmentsApi.md#shipmentPostShipment) | **POST** /api/v1/shipment/shipment | Creates a new shipment with the selected Shippingprovider |
| [**shipmentShipWithLabel()**](ShipmentsApi.md#shipmentShipWithLabel) | **POST** /api/v1/shipment/shipwithlabel | Creates a shipment for an order in billbee |


## `shipmentGetList()`

```php
shipmentGetList($page, $page_size, $created_at_min, $created_at_max, $order_id, $minimum_shipment_id, $shipping_provider_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment
```

Get a list of all shipments optionally filtered by date. All parameters are optional.

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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Specifies the page to request.
$page_size = 50; // int | Specifies the pagesize. Defaults to 50, max value is 250
$created_at_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the oldest shipment date to include in the response
$created_at_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Specifies the newest shipment date to include in the response
$order_id = 56; // int | Get shipments for this order only.
$minimum_shipment_id = 56; // int | Get Shipments with a shipment greater or equal than this id. New shipments have a greater id than older shipments.
$shipping_provider_id = 56; // int | Get Shippings for the specified shipping provider only. <seealso cref=\"M:Rechnungsdruck.WebApp.Controllers.Api.ShipmentController.GetShippingproviders\" />

try {
    $result = $apiInstance->shipmentGetList($page, $page_size, $created_at_min, $created_at_max, $order_id, $minimum_shipment_id, $shipping_provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Specifies the page to request. | [optional] [default to 1] |
| **page_size** | **int**| Specifies the pagesize. Defaults to 50, max value is 250 | [optional] [default to 50] |
| **created_at_min** | **\DateTime**| Specifies the oldest shipment date to include in the response | [optional] |
| **created_at_max** | **\DateTime**| Specifies the newest shipment date to include in the response | [optional] |
| **order_id** | **int**| Get shipments for this order only. | [optional] |
| **minimum_shipment_id** | **int**| Get Shipments with a shipment greater or equal than this id. New shipments have a greater id than older shipments. | [optional] |
| **shipping_provider_id** | **int**| Get Shippings for the specified shipping provider only. &lt;seealso cref&#x3D;\&quot;M:Rechnungsdruck.WebApp.Controllers.Api.ShipmentController.GetShippingproviders\&quot; /&gt; | [optional] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelShipment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentGetPing()`

```php
shipmentGetPing(): object
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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shipmentGetPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentGetPing: ', $e->getMessage(), PHP_EOL;
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

## `shipmentGetShippingCarrier()`

```php
shipmentGetShippingCarrier(): object
```

Queries the currently available shipping carriers.

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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shipmentGetShippingCarrier();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentGetShippingCarrier: ', $e->getMessage(), PHP_EOL;
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

## `shipmentGetShippingproviders()`

```php
shipmentGetShippingproviders(): object
```

Query all defined shipping providers

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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shipmentGetShippingproviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentGetShippingproviders: ', $e->getMessage(), PHP_EOL;
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

## `shipmentPostShipment()`

```php
shipmentPostShipment($model): object
```

Creates a new shipment with the selected Shippingprovider

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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel | Data to specify shipment parameters

try {
    $result = $apiInstance->shipmentPostShipment($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentPostShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel.md)| Data to specify shipment parameters | |

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

## `shipmentShipWithLabel()`

```php
shipmentShipWithLabel($shipment_information): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiShipmentWithLabelResult
```

Creates a shipment for an order in billbee

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


$apiInstance = new kruegge82\billbee\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_information = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiShipmentWithLabel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiShipmentWithLabel | Details on the order and the shipping methods, that should be used.

try {
    $result = $apiInstance->shipmentShipWithLabel($shipment_information);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentShipWithLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_information** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiShipmentWithLabel**](../Model/RechnungsdruckWebAppControllersApiShipmentWithLabel.md)| Details on the order and the shipping methods, that should be used. | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiShipmentWithLabelResult**](../Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiShipmentWithLabelResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
