# kruegge82\billbee\WebhooksApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webHookManagementDelete()**](WebhooksApi.md#webHookManagementDelete) | **DELETE** /api/v1/webhooks/{id} | Deletes an existing WebHook registration. |
| [**webHookManagementDeleteAll()**](WebhooksApi.md#webHookManagementDeleteAll) | **DELETE** /api/v1/webhooks | Deletes all existing WebHook registrations. |
| [**webHookManagementGet()**](WebhooksApi.md#webHookManagementGet) | **GET** /api/v1/webhooks | Gets all registered WebHooks for a given user. |
| [**webHookManagementGetFilters()**](WebhooksApi.md#webHookManagementGetFilters) | **GET** /api/v1/webhooks/filters | Returns a list of all known filters you can use to register webhooks |
| [**webHookManagementLookup()**](WebhooksApi.md#webHookManagementLookup) | **GET** /api/v1/webhooks/{id} | Looks up a registered WebHook with the given {id} for a given user. |
| [**webHookManagementPost()**](WebhooksApi.md#webHookManagementPost) | **POST** /api/v1/webhooks | Registers a new WebHook for a given user. |
| [**webHookManagementPut()**](WebhooksApi.md#webHookManagementPut) | **PUT** /api/v1/webhooks/{id} | Updates an existing WebHook registration. |


## `webHookManagementDelete()`

```php
webHookManagementDelete($id): object
```

Deletes an existing WebHook registration.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The WebHook ID.

try {
    $result = $apiInstance->webHookManagementDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The WebHook ID. | |

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

## `webHookManagementDeleteAll()`

```php
webHookManagementDeleteAll(): object
```

Deletes all existing WebHook registrations.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webHookManagementDeleteAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementDeleteAll: ', $e->getMessage(), PHP_EOL;
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

## `webHookManagementGet()`

```php
webHookManagementGet(): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel[]
```

Gets all registered WebHooks for a given user.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webHookManagementGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel[]**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webHookManagementGetFilters()`

```php
webHookManagementGetFilters(): object
```

Returns a list of all known filters you can use to register webhooks

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webHookManagementGetFilters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementGetFilters: ', $e->getMessage(), PHP_EOL;
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

## `webHookManagementLookup()`

```php
webHookManagementLookup($id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel
```

Looks up a registered WebHook with the given {id} for a given user.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->webHookManagementLookup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webHookManagementPost()`

```php
webHookManagementPost($web_hook): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel
```

Registers a new WebHook for a given user.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel | The webhook to create. Attach ?noecho to the uri to prevent echo test.

try {
    $result = $apiInstance->webHookManagementPost($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_hook** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)| The webhook to create. Attach ?noecho to the uri to prevent echo test. | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webHookManagementPut()`

```php
webHookManagementPut($id, $web_hook): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel
```

Updates an existing WebHook registration.

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


$apiInstance = new kruegge82\billbee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The WebHook ID.
$web_hook = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel | The new webhook to use.

try {
    $result = $apiInstance->webHookManagementPut($id, $web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webHookManagementPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The WebHook ID. | |
| **web_hook** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)| The new webhook to use. | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiWebHookApiModel**](../Model/RechnungsdruckWebAppControllersApiWebHookApiModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
