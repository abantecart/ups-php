# ShipmentFRSPaymentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Container to hold the Ground Freight Pricing payment type information.  It is required if the request has Ground Freight Pricing shipment indicator. | 
**account_number** | **string** | The UPS account number.  If the Ground Freight Pricing indicator and FreightShipmentInformation/DensityEligibleIndicator is present in the request, this account number must be validated to check if it is Ground Freight Pricing Density Based Rating enabled. | 
**address** | [**\UPS\Shipping\Shipping\FRSPaymentInformationAddress**](FRSPaymentInformationAddress.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

