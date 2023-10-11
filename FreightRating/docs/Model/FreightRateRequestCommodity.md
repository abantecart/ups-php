# FreightRateRequestCommodity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commodity_id** | **string** | Unique identifier for the commodity. | [optional] 
**description** | **string** | Description of the line item. | 
**weight** | [**\UPS\FreightRating\FreightRating\CommodityWeight**](CommodityWeight.md) |  | 
**adjusted_weight** | [**\UPS\FreightRating\FreightRating\CommodityAdjustedWeight**](CommodityAdjustedWeight.md) |  | [optional] 
**dimensions** | [**\UPS\FreightRating\FreightRating\CommodityDimensions**](CommodityDimensions.md) |  | [optional] 
**number_of_pieces** | **string** | Number of piece of the commodity in the handling unit. | 
**packaging_type** | [**\UPS\FreightRating\FreightRating\CommodityPackagingType**](CommodityPackagingType.md) |  | 
**dangerous_goods_indicator** | **string** | The presence of the tag DangerousGoodsIndicator indicates that the commodity is of type dangerous goods. Required for at least one commodity when the dangerous goods accessorial is passed. | [optional] 
**commodity_value** | [**\UPS\FreightRating\FreightRating\CommodityCommodityValue**](CommodityCommodityValue.md) |  | [optional] 
**freight_class** | **string** | Freight Classification.  Refer to Ground Freight Classes in the Appendix for valid values. | [optional] 
**nmfc_commodity_code** | **string** | National Motor Freight Classification Commodity code. | [optional] 
**nmfc_commodity** | [**\UPS\FreightRating\FreightRating\CommodityNMFCCommodity**](CommodityNMFCCommodity.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

