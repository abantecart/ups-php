# XAVResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | [**\UPS\AddressValidation\AddressValidation\XAVResponseResponse**](XAVResponseResponse.md) |  | 
**valid_address_indicator** | **string** | Indicates query found a valid match. | [optional] 
**ambiguous_address_indicator** | **string** | Indicates query could not find exact match. Candidate list follows. | [optional] 
**no_candidates_indicator** | **string** | No Candidate found. | [optional] 
**address_classification** | [**\UPS\AddressValidation\AddressValidation\XAVResponseAddressClassification**](XAVResponseAddressClassification.md) |  | [optional] 
**candidate** | [**\UPS\AddressValidation\AddressValidation\XAVResponseCandidate**](XAVResponseCandidate.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

