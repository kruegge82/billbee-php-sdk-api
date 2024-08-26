# # BillbeeInterfacesBillbeeAPIModelInvoiceApiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** |  | [optional]
**type** | **string** |  | [optional]
**title** | **string** |  | [optional]
**salutation** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**first_name** | **string** |  | [optional]
**company** | **string** |  | [optional]
**customer_number** | **int** |  | [optional]
**debtor_number** | **int** |  | [optional]
**invoice_date** | **\DateTime** |  | [optional]
**total_net** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**total_gross** | **float** |  | [optional]
**payment_type_id** | **int** |  | [optional]
**order_number** | **string** |  | [optional]
**transaction_id** | **string** |  | [optional]
**email** | **string** |  | [optional]
**shop_name** | **string** |  | [optional]
**positions** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel[]**](BillbeeInterfacesBillbeeAPIModelInvoiceApiPositionApiModel.md) |  | [optional]
**pay_date** | **\DateTime** |  | [optional]
**vat_mode** | **int** |  | [optional]
**billbee_id** | **int** |  | [optional]
**shipping_country** | **string** | two letters for CountryCode Identification | [optional]
**additional_fees** | [**\kruegge82\billbee\Model\BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel[]**](BillbeeInterfacesBillbeeAPIModelAdditionalFeeApiModel.md) |  | [optional]
**merchant_vat_id** | **string** | The vat-id, that should be displayed on the invoice and other order documents | [optional]
**customer_vat_id** | **string** | The vat-id, that was given by the customer to fulfill this order | [optional]
**vat_flags** | [**\kruegge82\billbee\Model\BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags**](BillbeeInterfacesOrderVatDetailsRecognizedHistoryEntryVatDetectionFlags.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
