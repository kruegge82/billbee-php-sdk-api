# OpenAPI\Client\CustomersApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerAddCustomerAddress()**](CustomersApi.md#customerAddCustomerAddress) | **POST** /api/v1/customers/{id}/addresses | Adds a new address to a customer |
| [**customerCreate()**](CustomersApi.md#customerCreate) | **POST** /api/v1/customers | Creates a new customer |
| [**customerGetAll()**](CustomersApi.md#customerGetAll) | **GET** /api/v1/customers | Get a list of all customers |
| [**customerGetCustomerAddress()**](CustomersApi.md#customerGetCustomerAddress) | **GET** /api/v1/customers/addresses/{id} | Queries a single address from a customer |
| [**customerGetCustomerAddresses()**](CustomersApi.md#customerGetCustomerAddresses) | **GET** /api/v1/customers/{id}/addresses | Queries a list of addresses from a customer |
| [**customerGetCustomerOrders()**](CustomersApi.md#customerGetCustomerOrders) | **GET** /api/v1/customers/{id}/orders | Queries a list of orders from a customer |
| [**customerGetOne()**](CustomersApi.md#customerGetOne) | **GET** /api/v1/customers/{id} | Queries a single customer by id |
| [**customerPatchAddress()**](CustomersApi.md#customerPatchAddress) | **PATCH** /api/v1/customers/addresses/{id} | Updates one or more fields of an address |
| [**customerUpdate()**](CustomersApi.md#customerUpdate) | **PUT** /api/v1/customers/{id} | Updates a customer by id |
| [**customerUpdateAddress()**](CustomersApi.md#customerUpdateAddress) | **PUT** /api/v1/customers/addresses/{id} | Updates all fields of an address |
| [**searchSearch()**](CustomersApi.md#searchSearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax |


## `customerAddCustomerAddress()`

```php
customerAddCustomerAddress($id, $model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Adds a new address to a customer

Id and  CustomerId will be ignored in model. If Id is set, the addition will be stopped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | CustomerId to attach the new address to.
$model = new \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel(); // \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel | Model containing the address, that should be attached.

try {
    $result = $apiInstance->customerAddCustomerAddress($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerAddCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| CustomerId to attach the new address to. | |
| **model** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)| Model containing the address, that should be attached. | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCreate()`

```php
customerCreate($model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel
```

Creates a new customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel(); // \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel

try {
    $result = $apiInstance->customerCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetAll()`

```php
customerGetAll($page, $page_size): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel
```

Get a list of all customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current page to request starting with 1
$page_size = 50; // int | The pagesize for the result list. Values between 1 and 250 are allowed

try {
    $result = $apiInstance->customerGetAll($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current page to request starting with 1 | [optional] [default to 1] |
| **page_size** | **int**| The pagesize for the result list. Values between 1 and 250 are allowed | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetCustomerAddress()`

```php
customerGetCustomerAddress($id): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Queries a single address from a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the address

try {
    $result = $apiInstance->customerGetCustomerAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGetCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the address | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetCustomerAddresses()`

```php
customerGetCustomerAddresses($id, $page, $page_size): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Queries a list of addresses from a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the customer
$page = 1; // int | The current page to request starting with 1
$page_size = 50; // int | The pagesize for the result list. Values between 1 and 250 are allowed

try {
    $result = $apiInstance->customerGetCustomerAddresses($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGetCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the customer | |
| **page** | **int**| The current page to request starting with 1 | [optional] [default to 1] |
| **page_size** | **int**| The pagesize for the result list. Values between 1 and 250 are allowed | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetCustomerOrders()`

```php
customerGetCustomerOrders($id, $page, $page_size): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder
```

Queries a list of orders from a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the customer
$page = 1; // int | The current page to request starting with 1
$page_size = 50; // int | The pagesize for the result list. Values between 1 and 250 are allowed

try {
    $result = $apiInstance->customerGetCustomerOrders($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGetCustomerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the customer | |
| **page** | **int**| The current page to request starting with 1 | [optional] [default to 1] |
| **page_size** | **int**| The pagesize for the result list. Values between 1 and 250 are allowed | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfRechnungsdruckWebAppControllersApiOrder.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetOne()`

```php
customerGetOne($id): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel
```

Queries a single customer by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the customer to query

try {
    $result = $apiInstance->customerGetOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the customer to query | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPatchAddress()`

```php
customerPatchAddress($id, $model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Updates one or more fields of an address

Id and CustomerId cannot be changed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the address
$model = array('key' => new \stdClass); // object | The address fields to be changed. Please query an address via (todo) to see all fields. Note that Id and CustomerId cannot be changed.

try {
    $result = $apiInstance->customerPatchAddress($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerPatchAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the address | |
| **model** | **object**| The address fields to be changed. Please query an address via (todo) to see all fields. Note that Id and CustomerId cannot be changed. | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdate()`

```php
customerUpdate($id, $model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel
```

Updates a customer by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the customer
$model = new \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerApiModel(); // \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerApiModel

try {
    $result = $apiInstance->customerUpdate($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the customer | |
| **model** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdateAddress()`

```php
customerUpdateAddress($id, $model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel
```

Updates all fields of an address

Id and CustomerId cannot be changed. Fields you do not send will become empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the address
$model = new \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel(); // \OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel | The updated address. Please query an address via (todo) to see all fields. Note that Id and CustomerId cannot be changed.

try {
    $result = $apiInstance->customerUpdateAddress($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerUpdateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the address | |
| **model** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)| The updated address. Please query an address via (todo) to see all fields. Note that Id and CustomerId cannot be changed. | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSearch()`

```php
searchSearch($model): \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel
```

Search for products, customers and orders.  Type can be \"order\", \"product\" and / or \"customer\"  Term can contain lucene query syntax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel(); // \OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel

try {
    $result = $apiInstance->searchSearch($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->searchSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel**](../Model/RechnungsdruckWebAppControllersApiSearchControllerSearchModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
