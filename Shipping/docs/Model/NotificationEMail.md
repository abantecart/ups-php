# NotificationEMail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**e_mail_address** | **string[]** | The destination email address of the receiver returns notification email. | 
**undeliverable_e_mail_address** | **string** | The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable.  Defaults to FromEMailAddress. Only allowed at the first package. | [optional] 
**from_e_mail_address** | **string** | The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The \&quot;From\&quot; field of the message header contains pkginfo@ups.com.  Only allowed at the first package. | [optional] 
**from_name** | **string** | The name the receiver return notification will appear to be from.  Defaults to the Shipper Name. Only allowed at the first package. | [optional] 
**memo** | **string** | User defined text that will be included in the email.  Only allowed at the first package. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

