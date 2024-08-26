# # BillbeeInterfacesBillbeeAPIModelUpdateStockApiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billbee_id** | **int** | Optional the ID of the Billbee product to update | [optional]
**sku** | **string** | The SKU of the product to update | [optional]
**stock_id** | **int** | Optional the stock id if the feature multi stock is activated | [optional]
**reason** | **string** | Optional a reason text for the stock update | [optional]
**old_quantity** | **float** | This parameter is currently ignored | [optional]
**new_quantity** | **float** | The new absolute stock quantity for the product you want to set | [optional]
**delta_quantity** | **float** | This parameter is currently ignored | [optional]
**force_send_stock_to_shops** | **bool** | If true, every sent stockchange is stored and transmitted to the connected shop, even if the value has not changed | [optional]
**autosubtract_reserved_amount** | **bool** | Automatically reduce the NewQuantity by the currently not fulfilled amount | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
