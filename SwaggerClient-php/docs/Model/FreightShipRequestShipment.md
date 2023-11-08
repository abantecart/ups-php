# FreightShipRequestShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_from** | [**\Swagger\Client\Model\ShipmentShipFrom**](ShipmentShipFrom.md) |  | 
**shipper_number** | **string** | Shipper�s six digit account number. Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML. | 
**ship_to** | [**\Swagger\Client\Model\ShipmentShipTo**](ShipmentShipTo.md) |  | 
**payment_information** | [**\Swagger\Client\Model\ShipmentPaymentInformation**](ShipmentPaymentInformation.md) |  | 
**service** | [**\Swagger\Client\Model\ShipmentService**](ShipmentService.md) |  | 
**handling_unit_one** | [**\Swagger\Client\Model\ShipmentHandlingUnitOne**](ShipmentHandlingUnitOne.md) |  | [optional] 
**handling_unit_two** | [**\Swagger\Client\Model\ShipmentHandlingUnitTwo**](ShipmentHandlingUnitTwo.md) |  | [optional] 
**existing_shipment_id** | [**\Swagger\Client\Model\ShipmentExistingShipmentID**](ShipmentExistingShipmentID.md) |  | [optional] 
**handling_instructions** | **string** | General purpose instructions to the driver.   Example: Call 30 minutes before | [optional] 
**delivery_instructions** | **string** | Delivery Instructions. | [optional] 
**pickup_instructions** | **string** | Pickup Instructions. | [optional] 
**commodity** | [**\Swagger\Client\Model\ShipmentCommodity[]**](ShipmentCommodity.md) |  | 
**reference** | [**\Swagger\Client\Model\ShipmentReference[]**](ShipmentReference.md) |  | [optional] 
**shipment_service_options** | [**\Swagger\Client\Model\ShipmentShipmentServiceOptions**](ShipmentShipmentServiceOptions.md) |  | [optional] 
**pickup_request** | [**\Swagger\Client\Model\ShipmentPickupRequest**](ShipmentPickupRequest.md) |  | [optional] 
**documents** | [**\Swagger\Client\Model\ShipmentDocuments**](ShipmentDocuments.md) |  | [optional] 
**time_in_transit_indicator** | **string** | Presence of the tag indicates Time in Transit information is requested and will be returned if available. | [optional] 
**handling_units** | [**\Swagger\Client\Model\ShipmentHandlingUnits**](ShipmentHandlingUnits.md) |  | [optional] 
**density_eligible_indicator** | **string** | The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

