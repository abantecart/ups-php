# FreightPickupRequestPOM

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pom_number** | **string** | Identifies the kind of number used to identify the Pickup Notifications for LTL shipment. Must provide a POMNumber if the POMNumberType field is populated. | [optional] 
**pom_number_type** | **string** | Identifies the type used to identify the Pickup Notifications for LTL shipments.  Must provide if POMNumber is populated. For valid values, see POMNumberType Values in the Appendix.  The values must match a type defined, case sensitive. | [optional] 
**pickup_notifications** | [**\UPS\FreightPickup\FreightPickup\POMPickupNotifications**](POMPickupNotifications.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

