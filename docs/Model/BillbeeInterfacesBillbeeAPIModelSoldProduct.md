# # BillbeeInterfacesBillbeeAPIModelSoldProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**old_id** | **string** | This is for migration scenarios when the internal id of a product changes  I.E. Etsy when switching to the new inventory management, the ids for variants will change. | [optional]
**id** | **string** | The id of this product in the external system | [optional]
**title** | **string** | The name of this product | [optional]
**weight** | **int** | Weight of one item in gram | [optional]
**sku** | **string** | The SKU of this product | [optional]
**sku_or_id** | **string** | The SKU of this product or the id if the SKU is empty | [optional] [readonly]
**is_digital** | **bool** | True if the product is a digital good (download etc.), false if not | [optional]
**images** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelProductImage[]**](BillbeeInterfacesBillbeeAPIModelProductImage.md) | The images of this product | [optional]
**ean** | **string** | The EAN / GTIN of this product | [optional]
**platform_data** | **string** | Optional platform specific Data as serialized JSON Object for the product | [optional]
**taric_code** | **string** | The TARIC code | [optional]
**country_of_origin** | **string** | The country where this article was made | [optional]
**billbee_id** | **int** | The Billbee internal id of the linked product | [optional]
**type** | **int** | Indicates whether the article is 1 &#x3D; normal or 2 &#x3D; BOM | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
