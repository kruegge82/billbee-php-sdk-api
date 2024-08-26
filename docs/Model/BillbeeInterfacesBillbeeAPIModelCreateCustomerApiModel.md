# # BillbeeInterfacesBillbeeAPIModelCreateCustomerApiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel**](BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel.md) |  | [optional]
**id** | **int** | The Billbee Id of the customer | [optional]
**name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**tel1** | **string** |  | [optional]
**tel2** | **string** |  | [optional]
**number** | **int** |  | [optional]
**price_group_id** | **int** |  | [optional]
**language_id** | **int** |  | [optional]
**default_mail_address** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**default_commercial_mail_address** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**default_status_updates_mail_address** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**default_phone1** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**default_phone2** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**default_fax** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**vat_id** | **string** | The vat-id, that should be saved at the customer. Only used if CustomerVatId is not set on the order. | [optional]
**type** | **int** | Customer Type | [optional]
**meta_data** | [**\OpenAPI\Client\Model\BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel[]**](BillbeeInterfacesBillbeeAPIModelsCustomerMetaDataApiModel.md) |  | [optional]
**archived_at** | **\DateTime** | If set, the customer was already archived at the given date. Further modification is disabled. | [optional]
**restored_at** | **\DateTime** | If set, the customer was restored from the archive at the given date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
