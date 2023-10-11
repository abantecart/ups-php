# QueryRequestShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin_country_code** | **string** | Two-character ISO country or territory code where the items shipped from. Cannot be the same as destination country or territory code. | 
**origin_state_province_code** | **string** | State/Province Code of origin country. Required if the    origin country is Canada CA or Brazil BR. | [optional] 
**destination_country_code** | **string** | Two-character ISO code ISO country or territory code where the items    shipped to. Cannot be the same as origin country or territory code. | 
**destination_state_province_code** | **string** | State/Province Code of destination country or territory. Required if    the destination country is Canada CA or Brazil BR. | [optional] 
**transportation_mode** | **string** | Valid values: 1 - Air 2 - Ground 3 - Rail 4 -?? Ocean If    not specified, default to Air. | [optional] 
**freight_charges** | [**\UPS\LandedCostQuoting\LandedCostQuoting\ShipmentFreightCharges**](ShipmentFreightCharges.md) |  | [optional] 
**additional_insurance** | [**\UPS\LandedCostQuoting\LandedCostQuoting\ShipmentAdditionalInsurance**](ShipmentAdditionalInsurance.md) |  | [optional] 
**tariff_code_alert** | **string** | Contains the indicator for global Tariff Code Alerts. 0 &#x3D; true, send tariff code alerts for all tariff codes in the request. 1 &#x3D; false, do not send tariff code alerts for any of the tariff codes in the request. This indicator setting supersedes the TariffCodeAlert settings in individual Product Type elements. Note: by setting this value to 1 false, you will not receive Tariff Code Alerts for the products in the request.  Note: Invalid values will result in the value being set to true. | [optional] 
**product** | [**\UPS\LandedCostQuoting\LandedCostQuoting\ShipmentProduct[]**](ShipmentProduct.md) |  | 
**result_currency_code** | **string** | Currency code for the Landed Cost quote. Must be    three-character ISO code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

