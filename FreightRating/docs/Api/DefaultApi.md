# UPS\FreightRating\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**freightRate**](DefaultApi.md#freightrate) | **POST** /freight/{version}/rating/{requestoption} | The Rating Ground Freight API may only be used by brokers or resellers of transportation services with a current and active UPGF Master Transportation Agreement.

# **freightRate**
> \UPS\FreightRating\FreightRating\FREIGHTRATEResponseWrapper freightRate($body, $trans_id, $transaction_src, $version, $requestoption)

The Rating Ground Freight API may only be used by brokers or resellers of transportation services with a current and active UPGF Master Transportation Agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\FreightRating\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\FreightRating\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\FreightRating\FreightRating\FREIGHTRATERequestWrapper(); // \UPS\FreightRating\FreightRating\FREIGHTRATERequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$version = "version_example"; // string | When TForce Freight introduces new elements  in the response that are not associated with new  request elements, Version is used. This ensures  backward compatibility. Supported values: v1, v1601, v1607, v1701,  v1707, v1801. Length 5
$requestoption = "requestoption_example"; // string | Valid Values:  ground, air. Length 15

try {
    $result = $apiInstance->freightRate($body, $trans_id, $transaction_src, $version, $requestoption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->freightRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\FreightRating\FreightRating\FREIGHTRATERequestWrapper**](../Model/FREIGHTRATERequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **version** | **string**| When TForce Freight introduces new elements  in the response that are not associated with new  request elements, Version is used. This ensures  backward compatibility. Supported values: v1, v1601, v1607, v1701,  v1707, v1801. Length 5 |
 **requestoption** | **string**| Valid Values:  ground, air. Length 15 |

### Return type

[**\UPS\FreightRating\FreightRating\FREIGHTRATEResponseWrapper**](../Model/FREIGHTRATEResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

