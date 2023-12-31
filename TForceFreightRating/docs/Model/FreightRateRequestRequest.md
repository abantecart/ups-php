# FreightRateRequestRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_option** | **string** | Valid Value: 1 &#x3D; Ground | [optional] 
**sub_version** | **string** | When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.  To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.  Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to &#x27;1601&#x27;.   Format: YYMM &#x3D; Year and month of the release. Example: 1601 &#x3D; 2016 January   Supported values: 1601, 1607, 1701, 1707 | [optional] 
**transaction_reference** | [**\UPS\TForceFreightRating\TForceFreightRating\RequestTransactionReference**](RequestTransactionReference.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

