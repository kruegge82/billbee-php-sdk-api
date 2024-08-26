# # BillbeeInterfacesBillbeeAPIModelCustomerAddressApiModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal Billbee ID of the address record. Can be null if a new address is created | [optional]
**address_type** | **int** | The type of the address | [optional]
**customer_id** | **int** | The internal Billbee id of the customer the address belongs to | [optional]
**company** | **string** | The name of the company | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**name2** | **string** | Optionally an additional name field | [optional]
**street** | **string** |  | [optional]
**housenumber** | **string** |  | [optional]
**zip** | **string** |  | [optional]
**city** | **string** |  | [optional]
**state** | **string** |  | [optional]
**country_code** | **string** | The ISO2 code of the country | [optional]
**email** | **string** |  | [optional]
**tel1** | **string** |  | [optional]
**tel2** | **string** |  | [optional]
**fax** | **string** |  | [optional]
**address_addition** | **string** |  | [optional]
**archived_at** | **\DateTime** | If set, the customeraddress was already archived at the given date. Further modification is disabled. | [optional]
**restored_at** | **\DateTime** | If set, the customeraddress was restored from the archive at the given date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
