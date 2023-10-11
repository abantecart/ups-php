# ShipmentResultsForm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code that indicates the type of form. Applicable only for ShipmentResponse and ShipAcceptResponse.  Valid values: 01 - All Requested International Forms. | 
**description** | **string** | Description that indicates the type of form. Possible Values. All Requested International Forms.     Applicable only for ShipmentResponse and ShipAcceptResponse. | 
**image** | [**\UPS\Shipping\Shipping\FormImage**](FormImage.md) |  | [optional] 
**form_group_id** | **string** | Unique Id for later retrieval of saved version of the completed international forms. Always returned when code &#x3D; 01. 01 represents international forms.     Applicable only for ShipmentResponse and ShipAcceptResponse. | [optional] 
**form_group_id_name** | **string** | Contains description text which identifies the group of International forms. This element is part of both request and response. This element does not appear on the forms.    Applicable only for ShipmentResponse and ShipAcceptResponse. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

