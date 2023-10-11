# AcceptanceAuditPreCheckResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | [**\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseResponse**](AcceptanceAuditPreCheckResponseResponse.md) |  | 
**shipper_number** | **string** | Shipper&#x27;s six digit account number. This is same account number present in the request that is played back in response. | [optional] 
**service** | [**\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseService**](AcceptanceAuditPreCheckResponseService.md) |  | [optional] 
**regulation_set** | **string** | The Regulatory set associated with every regulated shipment. This is same Regulation set present in the request that is played back in response.  Valid values: ADR 49CFR IATA TDG | [optional] 
**package_results** | [**\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponsePackageResults[]**](AcceptanceAuditPreCheckResponsePackageResults.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

