# ShipmentServiceOptionsNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_code** | **string** | Notification Code.  Valid values: 3 - Receiver Return Notification 6 - QV Email Notification 7 - QV Exception Notification 8 - QV Delivery Notification  For Mail Innovations forward shipments, QV Email Notifications are allowed for First Class, Priority Mail, and Expedited Mail Innovation services. | 
**e_mail** | [**\UPS\Shipping\Shipping\NotificationEMail**](NotificationEMail.md) |  | 
**voice_message** | [**\UPS\Shipping\Shipping\NotificationVoiceMessage**](NotificationVoiceMessage.md) |  | [optional] 
**text_message** | [**\UPS\Shipping\Shipping\NotificationTextMessage**](NotificationTextMessage.md) |  | [optional] 
**locale** | [**\UPS\Shipping\Shipping\NotificationLocale**](NotificationLocale.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

