# RateResponseRatedShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disclaimer** | [**\UPS\Rating\Rating\RatedShipmentDisclaimer[]**](RatedShipmentDisclaimer.md) |  | [optional] 
**service** | [**\UPS\Rating\Rating\RatedShipmentService**](RatedShipmentService.md) |  | 
**rate_chart** | **string** | Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: US 48 origin: 1 \&quot; Daily Rates 3 \&quot; Standard List Rates 4 \&quot; Retail Rates. Alaska/Hawaii origin:1 \&quot; Daily Rates 3 \&quot; Standard List Rates 4 \&quot; Retail Rates.  All Other origins:1 \&quot; Rates 5 - Regional Rates 6 - General List Rates. 3 and 4 do not apply | [optional] 
**rated_shipment_alert** | [**\UPS\Rating\Rating\RatedShipmentRatedShipmentAlert[]**](RatedShipmentRatedShipmentAlert.md) |  | [optional] 
**billable_weight_calculation_method** | **string** | Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment Billable Weight02 &#x3D; Package Billable Weight | [optional] 
**rating_method** | **string** | Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment level02 &#x3D; Package level | [optional] 
**billing_weight** | [**\UPS\Rating\Rating\RatedShipmentBillingWeight**](RatedShipmentBillingWeight.md) |  | 
**transportation_charges** | [**\UPS\Rating\Rating\RatedShipmentTransportationCharges**](RatedShipmentTransportationCharges.md) |  | 
**base_service_charge** | [**\UPS\Rating\Rating\RatedShipmentBaseServiceCharge**](RatedShipmentBaseServiceCharge.md) |  | [optional] 
**itemized_charges** | [**\UPS\Rating\Rating\RatedShipmentItemizedCharges[]**](RatedShipmentItemizedCharges.md) |  | [optional] 
**frs_shipment_data** | [**\UPS\Rating\Rating\RatedShipmentFRSShipmentData**](RatedShipmentFRSShipmentData.md) |  | [optional] 
**service_options_charges** | [**\UPS\Rating\Rating\RatedShipmentServiceOptionsCharges**](RatedShipmentServiceOptionsCharges.md) |  | 
**tax_charges** | [**\UPS\Rating\Rating\RatedShipmentTaxCharges[]**](RatedShipmentTaxCharges.md) |  | [optional] 
**total_charges** | [**\UPS\Rating\Rating\RatedShipmentTotalCharges**](RatedShipmentTotalCharges.md) |  | 
**total_charges_with_taxes** | [**\UPS\Rating\Rating\RatedShipmentTotalChargesWithTaxes**](RatedShipmentTotalChargesWithTaxes.md) |  | [optional] 
**negotiated_rate_charges** | [**\UPS\Rating\Rating\RatedShipmentNegotiatedRateCharges**](RatedShipmentNegotiatedRateCharges.md) |  | [optional] 
**rated_package** | [**\UPS\Rating\Rating\RatedShipmentRatedPackage[]**](RatedShipmentRatedPackage.md) |  | 
**time_in_transit** | [**\UPS\Rating\Rating\RatedShipmentTimeInTransit**](RatedShipmentTimeInTransit.md) |  | [optional] 
**scheduled_delivery_date** | **string** | The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract. | [optional] 
**roar_rated_indicator** | **string** | Informational only | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

