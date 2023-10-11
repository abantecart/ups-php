# PickupRateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request** | [**\UPS\Pickup\Pickup\PickupRateRequestRequest**](PickupRateRequestRequest.md) |  | 
**shipper_account** | [**\UPS\Pickup\Pickup\PickupRateRequestShipperAccount**](PickupRateRequestShipperAccount.md) |  | [optional] 
**pickup_address** | [**\UPS\Pickup\Pickup\PickupRateRequestPickupAddress**](PickupRateRequestPickupAddress.md) |  | 
**alternate_address_indicator** | **string** | Indicates if the pickup address is different than the address specified in the customer&#x27;s profile.   Valid values: Y &#x3D; Alternate address N &#x3D; Original pickup address (default) | 
**service_date_option** | **string** | Indicates the pickup timeframe. 01 &#x3D; Same-Day Pickup 02 &#x3D; Future-Day Pickup 03 &#x3D; A Specific-Day Pickup  If 03 is selected, then PickupDate, EarliestReadyTime, and LatestClosetime must be specified. | 
**pickup_date_info** | [**\UPS\Pickup\Pickup\PickupRateRequestPickupDateInfo**](PickupRateRequestPickupDateInfo.md) |  | [optional] 
**tax_information_indicator** | **string** | Indicates whether to return detailed taxes for on-callpickups. Valid values: Y &#x3D; Rate this pickup with taxes N &#x3D; Do not rate this pickup with taxes (default) | [optional] 
**user_level_discount_indicator** | **string** | Indicates whether to return user level promo discount for the on-callpickups.  Valid values: Y &#x3D; Rate this pickup with user level promo discount N &#x3D; Do not rate this pickup with user level promo discount(default) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

