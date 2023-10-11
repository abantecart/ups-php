# EstimateResponseShipmentEstimate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | Currency Code provided by user in the LandedCostRequest/QueryRequest/Shipment/Result Currency. If not specified, it is shipment destination country or territory&#x27;s currency code. | 
**shipment_charges** | [**\UPS\LandedCostQuoting\LandedCostQuoting\ShipmentEstimateShipmentCharges**](ShipmentEstimateShipmentCharges.md) |  | 
**products_charges** | [**\UPS\LandedCostQuoting\LandedCostQuoting\ShipmentEstimateProductsCharges**](ShipmentEstimateProductsCharges.md) |  | 
**total_landed_cost** | **string** | The total Landed Cost ...sum of shipment level charge and all Product level charges.  Valid characters are 0-9, Decimal Point (\&quot;.\&quot;), and Thousand separator (\&quot;,\&quot;).  Limit to 4 characters after the decimal point. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

