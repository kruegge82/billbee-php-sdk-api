# # RechnungsdruckWebAppControllersApiApiAddShipmentToOrderModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_id** | **string** | The id of the shipment (Sendungsnummer/trackingid) | [optional]
**order_id** | **string** | Optional a differing order number of the shipment if available | [optional]
**comment** | **string** | Optional a text stored with the shipment | [optional]
**shipping_provider_id** | **int** | Optional the id of a shipping provider existing in the billbee account that should be assigned to the shipment | [optional]
**shipping_provider_product_id** | **int** | Optional the id of a shipping provider product that should be assigend to the shipment | [optional]
**carrier_id** | **int** | Optional the id of a shipping carrier that should be assigend to the shipment  Will override the carrier from the shipment product.  Please use the integer value from this Enumeration:  {Billbee.Interfaces.Shipping.Enums.ShippingCarrier} | [optional]
**shipment_type** | **int** | 0 if Shipment, 1 if Retoure  {Billbee.Interfaces.Shipping.Enums.ShipmentTypeEnum} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
