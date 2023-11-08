# OverSeasLegDimensions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**volume** | **string** | Represents the size as volume.  Volume being required if height, length, width is not specified.  If volume is present then height, length, width is ignored.  Valid characters: 0-9 and \&quot;.\&quot; (Decimal).  Maximum of 2 digits after the decimal.  Maximum field length: 16 characters. The decimal \&quot;.\&quot;, does not count as a character. Examples: ##############.## ###############.# ################ | [optional] 
**height** | **string** | The height of the line item used to determine density based rating. | 
**length** | **string** | The length of the line item used to determine density rate rating. | 
**width** | **string** | The width of the line item used to determine the density based rating. | 
**unit_of_measurement** | [**\Swagger\Client\Model\DimensionsUnitOfMeasurement**](DimensionsUnitOfMeasurement.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

