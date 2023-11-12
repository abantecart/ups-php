# ShipmentPickupRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_comments** | **string** | Additional pickup comments or instructions | [optional] 
**requester** | [**\UPS\TForceFreightShipping\TForceFreightShipping\PickupRequestRequester**](PickupRequestRequester.md) |  | [optional] 
**pickup_date** | **string** | Date of the Pickup.  Format: YYYYMMDD. Ground pickup may be scheduled up to 42 days in the future. Note: This element will act as PickupDate or DropOffDate based on the presence of PickupTimeReady or DropOffTimeReady element. | 
**earliest_time_ready** | **string** | The earliest time a shipment is ready to be picked up. The time is on a 24 hour clock.  Format: HHMM HH &#x3D; Hour values 00 to 23 MM &#x3D; Minute values 00 to 59 | [optional] 
**latest_time_ready** | **string** | The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window. The time is on a 24 hour clock.  Format: HHMM HH &#x3D; Hour values 00 to 23 MM &#x3D; Minute values 00 to 59 Optional if the account type is House. | 
**pom** | [**\UPS\TForceFreightShipping\TForceFreightShipping\PickupRequestPOM**](PickupRequestPOM.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

