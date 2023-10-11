# ResponseError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_severity** | **string** | Describes the severity of the error.�� Required if the error is present. | [optional] 
**error_code** | **string** | A numeric value that describes the error.� Each tool defines a range of error codes. Required if the error is present. | [optional] 
**error_description** | **string** | Describes the error code. | [optional] 
**minimum_retry_seconds** | **string** | Number of seconds to wait until retry.� This field is populated on special conditions of the Transient Error only, as defined by the service.� A number between 1 and 86400 (24 hours) | [optional] 
**error_location** | [**\UPS\QuantumView\QuantumView\ErrorErrorLocation[]**](ErrorErrorLocation.md) |  | 
**error_digest** | **string[]** | The contents of the element in error. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

