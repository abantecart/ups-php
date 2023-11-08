# FreightPickupRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request** | [**\Swagger\Client\Model\FreightPickupRequestRequest**](FreightPickupRequestRequest.md) |  | 
**pickup_request_confirmation_number** | **string** | Confirmation number of pickup ground freight shipment to modify.� Only use if requesting a pickup modification. If this element is populated, it must contain a valid confirmation number and all previously supplied populated elements in the original request must be present. | [optional] 
**destination_postal_code** | **string** | Destinations postal code. | [optional] 
**destination_country_code** | **string** | Destinations country code. | 
**requester** | [**\Swagger\Client\Model\FreightPickupRequestRequester**](FreightPickupRequestRequester.md) |  | 
**ship_from** | [**\Swagger\Client\Model\FreightPickupRequestShipFrom**](FreightPickupRequestShipFrom.md) |  | 
**ship_to** | [**\Swagger\Client\Model\FreightPickupRequestShipTo**](FreightPickupRequestShipTo.md) |  | [optional] 
**pickup_date** | **string** | Date of the Pickup.  Format:YYYYMMDD | 
**earliest_time_ready** | **string** | The earliest time a shipment is ready to be picked up. The time is on a 24 hour clock.  Format: HHMM HH &#x3D; Hour values 00 to 23 MM &#x3D; Minute values 00 to 59 | 
**latest_time_ready** | **string** | The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window. The time is on a 24 hour clock.  Format: HHMM HH &#x3D; Hour values 00 to 23 MM &#x3D; Minute values 00 to 59 | 
**shipment_service_options** | [**\Swagger\Client\Model\FreightPickupRequestShipmentServiceOptions**](FreightPickupRequestShipmentServiceOptions.md) |  | [optional] 
**shipment_detail** | [**\Swagger\Client\Model\FreightPickupRequestShipmentDetail[]**](FreightPickupRequestShipmentDetail.md) |  | [optional] 
**existing_shipment_id** | [**\Swagger\Client\Model\FreightPickupRequestExistingShipmentID**](FreightPickupRequestExistingShipmentID.md) |  | [optional] 
**pom** | [**\Swagger\Client\Model\FreightPickupRequestPOM**](FreightPickupRequestPOM.md) |  | [optional] 
**pickup_instructions** | **string** | Pickup Instructions. | [optional] 
**additional_comments** | **string** | The location of the freight. Example: Loading Dock A | [optional] 
**handling_instructions** | **string** | Handling Instructions text | [optional] 
**special_instructions** | **string** | Special Instructions text | [optional] 
**delivery_instructions** | **string** | Delivery Instructions text | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

