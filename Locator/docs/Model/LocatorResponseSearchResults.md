# LocatorResponseSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**geocode_candidate** | [**OneOfLocatorResponseSearchResultsGeocodeCandidate**](OneOfLocatorResponseSearchResultsGeocodeCandidate.md) |  | [optional] 
**disclaimer** | [**OneOfLocatorResponseSearchResultsDisclaimer**](OneOfLocatorResponseSearchResultsDisclaimer.md) | Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius.   The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin. | [optional] 
**drop_location** | [**\UPS\Locator\Locator\SearchResultsDropLocation**](SearchResultsDropLocation.md) |  | [optional] 
**available_location_attributes** | [**OneOfLocatorResponseSearchResultsAvailableLocationAttributes**](OneOfLocatorResponseSearchResultsAvailableLocationAttributes.md) |  | [optional] 
**active_available_access_point_indicator** | **string** | Indicates whether the country or territory has AccessPoints or not.   This tag is populated in the Response only if tag \&quot;ExistIndicator\&quot; was present in the Locator request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

