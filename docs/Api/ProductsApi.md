# kruegge82\billbee\ProductsApi

All URIs are relative to https://app.billbee.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**articleCreateArticle()**](ProductsApi.md#articleCreateArticle) | **POST** /api/v1/products | Creates a new product |
| [**articleDeleteArticle()**](ProductsApi.md#articleDeleteArticle) | **DELETE** /api/v1/products/{id} | Deletes a product |
| [**articleDeleteImage()**](ProductsApi.md#articleDeleteImage) | **DELETE** /api/v1/products/images/{imageId} | Deletes a single image by id |
| [**articleDeleteImageFromProduct()**](ProductsApi.md#articleDeleteImageFromProduct) | **DELETE** /api/v1/products/{productId}/images/{imageId} | Deletes a single image from a product |
| [**articleDeleteImages()**](ProductsApi.md#articleDeleteImages) | **POST** /api/v1/products/images/delete |  |
| [**articleGetArticle()**](ProductsApi.md#articleGetArticle) | **GET** /api/v1/products/{id} | Queries a single article by id or by sku |
| [**articleGetCategory()**](ProductsApi.md#articleGetCategory) | **GET** /api/v1/products/category | GEts a list of all defined categories |
| [**articleGetCustomField()**](ProductsApi.md#articleGetCustomField) | **GET** /api/v1/products/custom-fields/{id} | Queries a single custom field |
| [**articleGetCustomFields()**](ProductsApi.md#articleGetCustomFields) | **GET** /api/v1/products/custom-fields | Queries a list of all custom fields |
| [**articleGetImage()**](ProductsApi.md#articleGetImage) | **GET** /api/v1/products/images/{imageId} | Returns a single image by id |
| [**articleGetImageFromProduct()**](ProductsApi.md#articleGetImageFromProduct) | **GET** /api/v1/products/{productId}/images/{imageId} | Returns a single image by id |
| [**articleGetImages()**](ProductsApi.md#articleGetImages) | **GET** /api/v1/products/{productId}/images | Returns a list of all images of the product |
| [**articleGetList()**](ProductsApi.md#articleGetList) | **GET** /api/v1/products | Get a list of all products |
| [**articleGetPatchableFields()**](ProductsApi.md#articleGetPatchableFields) | **GET** /api/v1/products/PatchableFields | Returns a list of fields which can be updated with the patch call |
| [**articleGetReservedAmount()**](ProductsApi.md#articleGetReservedAmount) | **GET** /api/v1/products/reservedamount | Queries the reserved amount for a single article by id or by sku |
| [**articleGetStocks()**](ProductsApi.md#articleGetStocks) | **GET** /api/v1/products/stocks | Query all defined stock locations |
| [**articlePatchArticle()**](ProductsApi.md#articlePatchArticle) | **PATCH** /api/v1/products/{id} | Updates one or more fields of a product |
| [**articlePutImage()**](ProductsApi.md#articlePutImage) | **PUT** /api/v1/products/{productId}/images/{imageId} | Add or update an existing image of a product |
| [**articlePutImages()**](ProductsApi.md#articlePutImages) | **PUT** /api/v1/products/{productId}/images | Add multiple images to a product or replace the product images by the given images |
| [**articleUpdateStock()**](ProductsApi.md#articleUpdateStock) | **POST** /api/v1/products/updatestock | Update the stock qty of an article |
| [**articleUpdateStockCode()**](ProductsApi.md#articleUpdateStockCode) | **POST** /api/v1/products/updatestockcode | Update the stock code of an article |
| [**articleUpdateStockMultiple()**](ProductsApi.md#articleUpdateStockMultiple) | **POST** /api/v1/products/updatestockmultiple | Update the stock qty for multiple articles at once |
| [**searchSearch()**](ProductsApi.md#searchSearch) | **POST** /api/v1/search | Search for products, customers and orders.  Type can be \&quot;order\&quot;, \&quot;product\&quot; and / or \&quot;customer\&quot;  Term can contain lucene query syntax |


## `articleCreateArticle()`

```php
articleCreateArticle($model): object
```

Creates a new product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleApiModel

try {
    $result = $apiInstance->articleCreateArticle($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleCreateArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelArticleApiModel.md)|  | |

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleDeleteArticle()`

```php
articleDeleteArticle($id): object
```

Deletes a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the Product

try {
    $result = $apiInstance->articleDeleteArticle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleDeleteArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the Product | |

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

## `articleDeleteImage()`

```php
articleDeleteImage($image_id): object
```

Deletes a single image by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The image id

try {
    $result = $apiInstance->articleDeleteImage($image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleDeleteImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_id** | **int**| The image id | |

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

## `articleDeleteImageFromProduct()`

```php
articleDeleteImageFromProduct($product_id, $image_id): object
```

Deletes a single image from a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The product id
$image_id = 56; // int | The image id

try {
    $result = $apiInstance->articleDeleteImageFromProduct($product_id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleDeleteImageFromProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| The product id | |
| **image_id** | **int**| The image id | |

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

## `articleDeleteImages()`

```php
articleDeleteImages($image_ids): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelDeletedImagesModel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_ids = array(56); // int[]

try {
    $result = $apiInstance->articleDeleteImages($image_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleDeleteImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_ids** | [**int[]**](../Model/int.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelDeletedImagesModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelDeletedImagesModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetArticle()`

```php
articleGetArticle($id, $lookup_by): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiModel
```

Queries a single article by id or by sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id or the sku of the article to query
$lookup_by = 'id'; // string | Either the value id, ean or the value sku to specify the meaning of the id parameter.

try {
    $result = $apiInstance->articleGetArticle($id, $lookup_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id or the sku of the article to query | |
| **lookup_by** | **string**| Either the value id, ean or the value sku to specify the meaning of the id parameter. | [optional] [default to &#39;id&#39;] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetCategory()`

```php
articleGetCategory(): object
```

GEts a list of all defined categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->articleGetCategory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetCategory: ', $e->getMessage(), PHP_EOL;
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

## `articleGetCustomField()`

```php
articleGetCustomField($id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel
```

Queries a single custom field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the custom field to query

try {
    $result = $apiInstance->articleGetCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the custom field to query | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetCustomFields()`

```php
articleGetCustomFields($page, $page_size): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel
```

Queries a list of all custom fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$page_size = 50; // int

try {
    $result = $apiInstance->articleGetCustomFields($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 50] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiCustomFieldDefinitionModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetImage()`

```php
articleGetImage($image_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
```

Returns a single image by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The Id of the image

try {
    $result = $apiInstance->articleGetImage($image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_id** | **int**| The Id of the image | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetImageFromProduct()`

```php
articleGetImageFromProduct($product_id, $image_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
```

Returns a single image by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The Id of the product
$image_id = 56; // int | The Id of the image

try {
    $result = $apiInstance->articleGetImageFromProduct($product_id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetImageFromProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| The Id of the product | |
| **image_id** | **int**| The Id of the image | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetImages()`

```php
articleGetImages($product_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
```

Returns a list of all images of the product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The Id of the product

try {
    $result = $apiInstance->articleGetImages($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| The Id of the product | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetList()`

```php
articleGetList($page, $page_size, $min_created_at, $minimum_bill_bee_article_id, $maximum_bill_bee_article_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel
```

Get a list of all products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current page to request starting with 1
$page_size = 50; // int | The pagesize for the result list. Values between 1 and 250 are allowed
$min_created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional the oldest create date of the articles to be returned
$minimum_bill_bee_article_id = 56; // int
$maximum_bill_bee_article_id = 56; // int

try {
    $result = $apiInstance->articleGetList($page, $page_size, $min_created_at, $minimum_bill_bee_article_id, $maximum_bill_bee_article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current page to request starting with 1 | [optional] [default to 1] |
| **page_size** | **int**| The pagesize for the result list. Values between 1 and 250 are allowed | [optional] [default to 50] |
| **min_created_at** | **\DateTime**| Optional the oldest create date of the articles to be returned | [optional] |
| **minimum_bill_bee_article_id** | **int**|  | [optional] |
| **maximum_bill_bee_article_id** | **int**|  | [optional] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel**](../Model/RechnungsdruckWebAppControllersApiApiPagedResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelArticleApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetPatchableFields()`

```php
articleGetPatchableFields(): object
```

Returns a list of fields which can be updated with the patch call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->articleGetPatchableFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetPatchableFields: ', $e->getMessage(), PHP_EOL;
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

## `articleGetReservedAmount()`

```php
articleGetReservedAmount($id, $lookup_by, $stock_id): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData
```

Queries the reserved amount for a single article by id or by sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id or the sku of the article to query
$lookup_by = 'id'; // string | Either the value id or the value sku to specify the meaning of the id parameter
$stock_id = 56; // int | Optional the stock id if the multi stock feature is enabled

try {
    $result = $apiInstance->articleGetReservedAmount($id, $lookup_by, $stock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetReservedAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id or the sku of the article to query | |
| **lookup_by** | **string**| Either the value id or the value sku to specify the meaning of the id parameter | [optional] [default to &#39;id&#39;] |
| **stock_id** | **int**| Optional the stock id if the multi stock feature is enabled | [optional] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelGetReservedAmountResponseData.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleGetStocks()`

```php
articleGetStocks(): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelStockResponseData
```

Query all defined stock locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->articleGetStocks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleGetStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelStockResponseData**](../Model/RechnungsdruckWebAppControllersApiApiResultOfSystemCollectionsGenericListOfBillbeeInterfacesBillbeeAPIModelStockResponseData.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articlePatchArticle()`

```php
articlePatchArticle($id, $model): object
```

Updates one or more fields of a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the Product
$model = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->articlePatchArticle($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articlePatchArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The id of the Product | |
| **model** | **object**|  | |

### Return type

**object**

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articlePutImage()`

```php
articlePutImage($product_id, $image_id, $model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
```

Add or update an existing image of a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The product id
$image_id = 56; // int | The image id. If you pass 0, the image will be added
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel | The ArticleApiImageModel

try {
    $result = $apiInstance->articlePutImage($product_id, $image_id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articlePutImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| The product id | |
| **image_id** | **int**| The image id. If you pass 0, the image will be added | |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)| The ArticleApiImageModel | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articlePutImages()`

```php
articlePutImages($product_id, $models, $replace): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel
```

Add multiple images to a product or replace the product images by the given images

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The id of the product
$models = array(new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel()); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel[] | An array of ArticleApiImageModel
$replace = false; // bool | If you pass true, the images will be replaced by the passed images. Otherwise the passed images will be appended to the product.

try {
    $result = $apiInstance->articlePutImages($product_id, $models, $replace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articlePutImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| The id of the product | |
| **models** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel[]**](../Model/BillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)| An array of ArticleApiImageModel | |
| **replace** | **bool**| If you pass true, the images will be replaced by the passed images. Otherwise the passed images will be appended to the product. | [optional] [default to false] |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelArticleImageRelationApiModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleUpdateStock()`

```php
articleUpdateStock($model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData
```

Update the stock qty of an article

The article is specified by sku. You have to send the absolute value for the current stock

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel

try {
    $result = $apiInstance->articleUpdateStock($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleUpdateStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleUpdateStockCode()`

```php
articleUpdateStockCode($model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockCodeResponseData
```

Update the stock code of an article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel(); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel

try {
    $result = $apiInstance->articleUpdateStockCode($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleUpdateStockCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel**](../Model/BillbeeInterfacesBillbeeAPIModelUpdateStockCodeApiModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockCodeResponseData**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockCodeResponseData.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleUpdateStockMultiple()`

```php
articleUpdateStockMultiple($models): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData[]
```

Update the stock qty for multiple articles at once

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$models = array(new \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel()); // \kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel[]

try {
    $result = $apiInstance->articleUpdateStockMultiple($models);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->articleUpdateStockMultiple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **models** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel[]**](../Model/BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData[]**](../Model/RechnungsdruckWebAppControllersApiApiResultOfBillbeeInterfacesBillbeeAPIModelUpdateStockResponseData.md)

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
searchSearch($model): \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel
```

Search for products, customers and orders.  Type can be \"order\", \"product\" and / or \"customer\"  Term can contain lucene query syntax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Billbee-Api-Key
$config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKey('X-Billbee-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\billbee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Billbee-Api-Key', 'Bearer');


$apiInstance = new kruegge82\billbee\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel(); // \kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel

try {
    $result = $apiInstance->searchSearch($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | [**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiSearchControllerSearchModel**](../Model/RechnungsdruckWebAppControllersApiSearchControllerSearchModel.md)|  | |

### Return type

[**\kruegge82\billbee\Model\RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel**](../Model/RechnungsdruckWebAppControllersApiApiResultOfRechnungsdruckWebAppControllersApiSearchControllerSearchResultsModel.md)

### Authorization

[X-Billbee-Api-Key](../../README.md#X-Billbee-Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
