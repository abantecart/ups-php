# UPS\AddressValidation\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressValidation**](DefaultApi.md#addressvalidation) | **POST** /addressvalidation/{version}/{requestoption} | The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.

# **addressValidation**
> \UPS\AddressValidation\AddressValidation\XAVResponseWrapper addressValidation($body, $requestoption, $version, $regionalrequestindicator, $maximumcandidatelistsize)

The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\AddressValidation\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\AddressValidation\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\AddressValidation\AddressValidation\XAVRequestWrapper(); // \UPS\AddressValidation\AddressValidation\XAVRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$requestoption = 56; // int | Identifies the type of request. Valid  values:  1 - Address Validation 2 - Address Classification  3 - Address Validation and Address  Classification.
$version = "version_example"; // string | Identifies the version of the API. Valid  values:  v1
$regionalrequestindicator = "regionalrequestindicator_example"; // string | Valid values: True or False.  If True, either the region element or any  combination of Political Division 1,  Political Division 2, PostcodePrimaryLow  and the PostcodeExtendedLow fields will  be recognized for validation in addition to  the urbanization element. If False or no  indicator, street level address validation  is provided
$maximumcandidatelistsize = 56; // int | Valid values: 0 – 50 The maximum number of Candidates to  return for this request. If not provided,  the default size of 15 is returned.

try {
    $result = $apiInstance->addressValidation($body, $requestoption, $version, $regionalrequestindicator, $maximumcandidatelistsize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addressValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\AddressValidation\AddressValidation\XAVRequestWrapper**](../Model/XAVRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **requestoption** | **int**| Identifies the type of request. Valid  values:  1 - Address Validation 2 - Address Classification  3 - Address Validation and Address  Classification. |
 **version** | **string**| Identifies the version of the API. Valid  values:  v1 |
 **regionalrequestindicator** | **string**| Valid values: True or False.  If True, either the region element or any  combination of Political Division 1,  Political Division 2, PostcodePrimaryLow  and the PostcodeExtendedLow fields will  be recognized for validation in addition to  the urbanization element. If False or no  indicator, street level address validation  is provided | [optional]
 **maximumcandidatelistsize** | **int**| Valid values: 0 – 50 The maximum number of Candidates to  return for this request. If not provided,  the default size of 15 is returned. | [optional]

### Return type

[**\UPS\AddressValidation\AddressValidation\XAVResponseWrapper**](../Model/XAVResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

