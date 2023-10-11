# ShipmentResultsShipmentCharges

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rate_chart** | **string** | Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:  US 48 origin:  1 - Daily Rates  3 - Standard List Rates  4 - Retail Rates.  Alaska/Hawaii origin:  1 - Daily Rates  3 - Standard List Rates  4 - Retail Rates.   All Other origins:  1 - Rates  5 - Regional Rates  6 - General List Rates.  3 and 4 do not apply. | [optional] 
**base_service_charge** | [**\UPS\Shipping\Shipping\ShipmentChargesBaseServiceCharge**](ShipmentChargesBaseServiceCharge.md) |  | [optional] 
**transportation_charges** | [**\UPS\Shipping\Shipping\ShipmentChargesTransportationCharges**](ShipmentChargesTransportationCharges.md) |  | 
**itemized_charges** | [**\UPS\Shipping\Shipping\ShipmentChargesItemizedCharges[]**](ShipmentChargesItemizedCharges.md) |  | [optional] 
**service_options_charges** | [**\UPS\Shipping\Shipping\ShipmentChargesServiceOptionsCharges**](ShipmentChargesServiceOptionsCharges.md) |  | 
**tax_charges** | [**\UPS\Shipping\Shipping\ShipmentChargesTaxCharges[]**](ShipmentChargesTaxCharges.md) |  | [optional] 
**total_charges** | [**\UPS\Shipping\Shipping\ShipmentChargesTotalCharges**](ShipmentChargesTotalCharges.md) |  | 
**total_charges_with_taxes** | [**\UPS\Shipping\Shipping\ShipmentChargesTotalChargesWithTaxes**](ShipmentChargesTotalChargesWithTaxes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

