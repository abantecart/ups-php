# ShipToAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line** | **string[]** | Destination street address including name and number (when applicable). | 
**city** | **string** | UPS Access Point city. | [optional] 
**state_province_code** | **string** | UPS Access Point State or Province code. | [optional] 
**postal_code** | **string** | Postal Code for UPS accounts billing address.  Postal Code  may be present when the FRS Payment Information type &#x3D; 02 and type &#x3D; 03. | [optional] 
**country_code** | **string** | Country or Territory code for the  UPS accounts &amp; billing address.  Country or Territory Code is required when the FRS Payment Information type &#x3D; 02 and type&#x3D; 03. | 
**residential_address_indicator** | **string** | Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

