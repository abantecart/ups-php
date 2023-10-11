# ShipmentResultsPackageResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Package 1Z number.   For Mail Innovations shipments, please use the USPSPICNumber when tracking packages (a non-1Z number Mail Manifest Id is returned).  Applicable only for ShipmentResponse and ShipAcceptResponse. | 
**rate_modifier** | [**\UPS\Shipping\Shipping\PackageResultsRateModifier**](PackageResultsRateModifier.md) |  | [optional] 
**base_service_charge** | [**\UPS\Shipping\Shipping\PackageResultsBaseServiceCharge**](PackageResultsBaseServiceCharge.md) |  | [optional] 
**service_options_charges** | [**\UPS\Shipping\Shipping\PackageResultsServiceOptionsCharges**](PackageResultsServiceOptionsCharges.md) |  | [optional] 
**shipping_label** | [**\UPS\Shipping\Shipping\PackageResultsShippingLabel**](PackageResultsShippingLabel.md) |  | [optional] 
**shipping_receipt** | [**\UPS\Shipping\Shipping\PackageResultsShippingReceipt**](PackageResultsShippingReceipt.md) |  | [optional] 
**uspspic_number** | **string** | USPSPICNumber is USPS Package Identification; it should be used for tracking Mail Innovations shipments. | [optional] 
**cn22_number** | **string** | USPS defined CN22 ID number format varies based on destination country or territory.  Not applicable as of Jan 2015.  Mail Innovations shipments US to VI, PR, and GU are not considered international. | [optional] 
**accessorial** | [**\UPS\Shipping\Shipping\PackageResultsAccessorial[]**](PackageResultsAccessorial.md) |  | [optional] 
**simple_rate** | [**\UPS\Shipping\Shipping\PackageResultsSimpleRate**](PackageResultsSimpleRate.md) |  | [optional] 
**form** | [**\UPS\Shipping\Shipping\PackageResultsForm**](PackageResultsForm.md) |  | [optional] 
**itemized_charges** | [**\UPS\Shipping\Shipping\PackageResultsItemizedCharges[]**](PackageResultsItemizedCharges.md) |  | [optional] 
**negotiated_charges** | [**\UPS\Shipping\Shipping\PackageResultsNegotiatedCharges**](PackageResultsNegotiatedCharges.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

