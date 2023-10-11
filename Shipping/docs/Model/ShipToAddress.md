# ShipToAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line** | **string[]** | Address Line of the consignee. | 
**city** | **string** | Consignee&#x27;s city. 30 characters are accepted, but only 15 characters will be printed on the label. | 
**state_province_code** | **string** | Consignee&#x27;s state or province code. Required for US or Canada. | [optional] 
**postal_code** | **string** | Consignee&#x27;s postal code. | [optional] 
**country_code** | **string** | Consignee&#x27;s country or territory code. | 
**residential_address_indicator** | **string** | This field is a flag to indicate if the receiver is a residential location.  True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

