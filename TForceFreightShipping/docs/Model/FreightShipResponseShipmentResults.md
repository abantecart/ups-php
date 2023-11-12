# FreightShipResponseShipmentResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_request_confirmation_number** | **string** | Shipment pickup number. | [optional] 
**delivery_date** | **string** | Estimated date that the shipment will be delivered.   Format: YYYYMMDD. | [optional] 
**shipment_number** | **string** | The shipment Number assigned to the shipment. | [optional] 
**bolid** | **string** | The retrieval key for the stored BOL. | [optional] 
**guaranteed_indicator** | **string** | This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid. | [optional] 
**minimum_charge_applied_indicator** | **string** | This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid. | [optional] 
**rate** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsRate[]**](ShipmentResultsRate.md) |  | [optional] 
**freight_density_rate** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsFreightDensityRate**](ShipmentResultsFreightDensityRate.md) |  | [optional] 
**total_shipment_charge** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsTotalShipmentCharge**](ShipmentResultsTotalShipmentCharge.md) |  | [optional] 
**billable_shipment_weight** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsBillableShipmentWeight**](ShipmentResultsBillableShipmentWeight.md) |  | [optional] 
**service** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsService**](ShipmentResultsService.md) |  | [optional] 
**documents** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsDocuments**](ShipmentResultsDocuments.md) |  | [optional] 
**time_in_transit** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentResultsTimeInTransit**](ShipmentResultsTimeInTransit.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

