# FreightShipRequestShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_from** | [**\UPS\FreightShipping\FreightShipping\ShipmentShipFrom**](ShipmentShipFrom.md) |  | 
**shipper_number** | **string** | Shipper�s six digit account number. Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML. | 
**ship_to** | [**\UPS\FreightShipping\FreightShipping\ShipmentShipTo**](ShipmentShipTo.md) |  | 
**payment_information** | [**\UPS\FreightShipping\FreightShipping\ShipmentPaymentInformation**](ShipmentPaymentInformation.md) |  | 
**service** | [**\UPS\FreightShipping\FreightShipping\ShipmentService**](ShipmentService.md) |  | 
**handling_unit_one** | [**\UPS\FreightShipping\FreightShipping\ShipmentHandlingUnitOne**](ShipmentHandlingUnitOne.md) |  | [optional] 
**handling_unit_two** | [**\UPS\FreightShipping\FreightShipping\ShipmentHandlingUnitTwo**](ShipmentHandlingUnitTwo.md) |  | [optional] 
**existing_shipment_id** | [**\UPS\FreightShipping\FreightShipping\ShipmentExistingShipmentID**](ShipmentExistingShipmentID.md) |  | [optional] 
**handling_instructions** | **string** | General purpose instructions to the driver.   Example: Call 30 minutes before | [optional] 
**delivery_instructions** | **string** | Delivery Instructions. | [optional] 
**pickup_instructions** | **string** | Pickup Instructions. | [optional] 
**commodity** | [**\UPS\FreightShipping\FreightShipping\ShipmentCommodity[]**](ShipmentCommodity.md) |  | 
**reference** | [**\UPS\FreightShipping\FreightShipping\ShipmentReference[]**](ShipmentReference.md) |  | [optional] 
**shipment_service_options** | [**\UPS\FreightShipping\FreightShipping\ShipmentShipmentServiceOptions**](ShipmentShipmentServiceOptions.md) |  | [optional] 
**pickup_request** | [**\UPS\FreightShipping\FreightShipping\ShipmentPickupRequest**](ShipmentPickupRequest.md) |  | [optional] 
**documents** | [**\UPS\FreightShipping\FreightShipping\ShipmentDocuments**](ShipmentDocuments.md) |  | [optional] 
**time_in_transit_indicator** | **string** | Presence of the tag indicates Time in Transit information is requested and will be returned if available. | [optional] 
**handling_units** | [**\UPS\FreightShipping\FreightShipping\ShipmentHandlingUnits**](ShipmentHandlingUnits.md) |  | [optional] 
**density_eligible_indicator** | **string** | The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

