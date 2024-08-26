# # BillbeeInterfacesBillbeeAPIModelCreateShipmentApiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider_name** | **string** | The name of the provider as specified in the billbee account | [optional]
**product_code** | **string** | The productcode to be used when creating the shipment. Values depends on the carrier used | [optional]
**printer_name** | **string** | The name of a connected Cloudprinter to sent the label to | [optional]
**printer_id_for_export_docs** | **int** | The id of a connected Cloudprinter to sent the export docs to | [optional]
**services** | [**\kruegge82\billbee\Model\BillbeeInterfacesShippingProductService[]**](BillbeeInterfacesShippingProductService.md) | A list of services to be used when creating the shipment | [optional]
**receiver_address** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelShipmentAddressApiModel**](BillbeeInterfacesBillbeeAPIModelShipmentAddressApiModel.md) |  | [optional]
**client_reference** | **string** | Optional specify a text to be included on the label. Not possible with all carriers | [optional]
**customer_number** | **string** | Not used anymore | [optional]
**weight_in_gram** | **float** | Optional specify the weight in gram of the shipment | [optional]
**order_sum** | **float** | The value of the shipments content | [optional]
**total_net** | **float** | The value of the shipments content (net) | [optional]
**order_currency_code** | **string** | The Currency if the ordersum | [optional]
**content** | **string** | Optional specify a text describing the content of the shipment. Used for export shipments | [optional]
**ship_date** | **\DateTime** | Optional overwrite the shipdate to be transferred to the carrier | [optional]
**shipping_carrier** | **int** |  | [optional]
**dimension** | [**\kruegge82\billbee\Model\BillbeeInterfacesShippingShipmentDataDimensions**](BillbeeInterfacesShippingShipmentDataDimensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
