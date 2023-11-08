# FreightRateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request** | [**\Swagger\Client\Model\FreightRateRequestRequest**](FreightRateRequestRequest.md) |  | 
**ship_from** | [**\Swagger\Client\Model\FreightRateRequestShipFrom**](FreightRateRequestShipFrom.md) |  | 
**ship_to** | [**\Swagger\Client\Model\FreightRateRequestShipTo**](FreightRateRequestShipTo.md) |  | 
**payment_information** | [**\Swagger\Client\Model\FreightRateRequestPaymentInformation**](FreightRateRequestPaymentInformation.md) |  | 
**service** | [**\Swagger\Client\Model\FreightRateRequestService**](FreightRateRequestService.md) |  | 
**handling_unit_one** | [**\Swagger\Client\Model\FreightRateRequestHandlingUnitOne**](FreightRateRequestHandlingUnitOne.md) |  | [optional] 
**handling_unit_two** | [**\Swagger\Client\Model\FreightRateRequestHandlingUnitTwo**](FreightRateRequestHandlingUnitTwo.md) |  | [optional] 
**commodity** | [**\Swagger\Client\Model\FreightRateRequestCommodity[]**](FreightRateRequestCommodity.md) |  | 
**shipment_service_options** | [**\Swagger\Client\Model\FreightRateRequestShipmentServiceOptions**](FreightRateRequestShipmentServiceOptions.md) |  | [optional] 
**pickup_request** | [**\Swagger\Client\Model\FreightRateRequestPickupRequest**](FreightRateRequestPickupRequest.md) |  | [optional] 
**alternate_rate_options** | [**\Swagger\Client\Model\FreightRateRequestAlternateRateOptions**](FreightRateRequestAlternateRateOptions.md) |  | [optional] 
**gfp_options** | [**\Swagger\Client\Model\FreightRateRequestGFPOptions**](FreightRateRequestGFPOptions.md) |  | [optional] 
**handling_unit_weight** | [**\Swagger\Client\Model\FreightRateRequestHandlingUnitWeight**](FreightRateRequestHandlingUnitWeight.md) |  | [optional] 
**adjusted_weight_indicator** | **string** | Indicator used to specify if the user wants to subtract the handling unit weight. Defaults to false.   When AdjustedWeightIndicator is set to \&quot;true\&quot;: - If HandlingUnitWeight is present, the HandlingUnitWeight Value will be subtracted and prorated from the FreightLineItem Weight Value. The subtracted/prorated FreightLineItem Weight will be used for GFP rating. - If HandlingUnitWeight is not present and the AdjustedWeightValue is present, the adjusted weight value from the FreightLineItem object will be used to do a GFP rating request to UPGF. - If HandlingUnitWeight is not present and the AdjustedWeightValue is not present, the original weight from the FreightLineItem object will be used to do a GFP rating request to UPGF.In this case, the HandlingUnitWeight value  is assume to be zero.  AdjustedWeightIndicator set to \&quot;false\&quot;: - The FreightLineItem.Weight will be used for both LTL and GFP rating requests (current functionality). The HandlingUnitWeight or the FreightLineItem.AdjustedWeight will not be used. | [optional] 
**time_in_transit_indicator** | **string** | Presence of the tag indicates Time in Transit information is requested and will be returned. | [optional] 
**handling_units** | [**\Swagger\Client\Model\FreightRateRequestHandlingUnits[]**](FreightRateRequestHandlingUnits.md) |  | [optional] 
**adjusted_height_indicator** | **string** | The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request. | [optional] 
**density_eligible_indicator** | **string** | The presence of the tag indicates that the rate request is density based. For Density Based Rating (DBR), the customer must have DBR Contract Service. | [optional] 
**quote_number_indicator** | **string** | The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

