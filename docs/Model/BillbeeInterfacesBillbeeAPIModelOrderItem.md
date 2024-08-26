# # BillbeeInterfacesBillbeeAPIModelOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billbee_id** | **int** | The billbee id of this item | [optional]
**transaction_id** | **string** | Id of the individual transaction. Only required by Ebay to detect aggregated orders | [optional]
**product** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelSoldProduct**](BillbeeInterfacesBillbeeAPIModelSoldProduct.md) |  | [optional]
**quantity** | **float** | The sold quantity | [optional]
**total_price** | **float** | The total price (unit price * quantity) | [optional]
**tax_amount** | **float** | The tax amount in the total price | [optional]
**tax_index** | **int** | The tax index. | [optional]
**discount** | **float** | Sets the discount in percent | [optional]
**attributes** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelOrderItemAttribute[]**](BillbeeInterfacesBillbeeAPIModelOrderItemAttribute.md) | A list of product attributes for this position | [optional]
**get_price_from_article_if_any** | **bool** | If true, the price will be overwritten by the known article price in billbee if available | [optional]
**is_coupon** | **bool** | Determines if it is a coupon, which is interpreted as tax-free payment | [optional]
**shipping_profile_id** | **string** | Determines if it is a coupon, which is interpreted as tax-free payment | [optional]
**dont_adjust_stock** | **bool** | If true, the import of this order won&#39;t adjust the stock level at billbee. | [optional]
**unrebated_total_price** | **float** | Is just used for the billbee api | [optional]
**serial_number** | **string** | Contains the used serial number | [optional]
**invoice_sku** | **string** | Contains the SKU from OrderDetail (if available) or from Product | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
