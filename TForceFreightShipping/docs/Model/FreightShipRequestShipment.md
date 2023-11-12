# FreightShipRequestShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_from** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipFrom**](ShipmentShipFrom.md) |  | 
**shipper_number** | **string** | Shipper�s six digit account number. Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML. | 
**ship_to** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipTo**](ShipmentShipTo.md) |  | 
**payment_information** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPaymentInformation**](ShipmentPaymentInformation.md) |  | 
**service** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentService**](ShipmentService.md) |  | 
**handling_unit_one** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitOne**](ShipmentHandlingUnitOne.md) |  | [optional] 
**handling_unit_two** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitTwo**](ShipmentHandlingUnitTwo.md) |  | [optional] 
**existing_shipment_id** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentExistingShipmentID**](ShipmentExistingShipmentID.md) |  | [optional] 
**handling_instructions** | **string** | General purpose instructions to the driver.   Example: Call 30 minutes before | [optional] 
**delivery_instructions** | **string** | Delivery Instructions. | [optional] 
**pickup_instructions** | **string** | Pickup Instructions. | [optional] 
**commodity** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentCommodity[]**](ShipmentCommodity.md) |  | 
**reference** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentReference[]**](ShipmentReference.md) |  | [optional] 
**shipment_service_options** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipmentServiceOptions**](ShipmentShipmentServiceOptions.md) |  | [optional] 
**pickup_request** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPickupRequest**](ShipmentPickupRequest.md) |  | [optional] 
**documents** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentDocuments**](ShipmentDocuments.md) |  | [optional] 
**time_in_transit_indicator** | **string** | Presence of the tag indicates Time in Transit information is requested and will be returned if available. | [optional] 
**handling_units** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnits**](ShipmentHandlingUnits.md) |  | [optional] 
**density_eligible_indicator** | **string** | The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

