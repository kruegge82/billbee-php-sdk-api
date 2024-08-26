# # RechnungsdruckWebAppControllersApiShipmentWithLabel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | The Billbee internal id of the order to ship | [optional]
**provider_id** | **int** | The id of the provider. You can query all providers with the shippingproviders endpoint | [optional]
**product_id** | **int** | the id of the shipping provider product to be used | [optional]
**change_state_to_send** | **bool** | Optional parameter to automatically change the orderstate to sent after creating the shipment | [optional]
**printer_name** | **string** | Optional the name of a connected cloudprinter to send the label to | [optional]
**weight_in_gram** | **int** | Optional the shipments weight in gram to override the calculated weight | [optional]
**ship_date** | **\DateTime** | Optional specify the shipdate to be transmitted to the carrier | [optional]
**client_reference** | **string** | Optional specify a reference text to be included on the label. Works not with all carriers | [optional]
**dimension** | [**\kruegge82\billbee\Model\BillbeeInterfacesShippingShipmentDataDimensions**](BillbeeInterfacesShippingShipmentDataDimensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
