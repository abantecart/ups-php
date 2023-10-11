# UPS\FreightShipping\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**freightShip**](DefaultApi.md#freightship) | **POST** /freight/{version}/shipments/{reqoption} | Only users that plan to ship packages manifested, tendered, and delivered by TForce Freight can use the API.

# **freightShip**
> \UPS\FreightShipping\FreightShipping\FREIGHTSHIPResponseWrapper freightShip($body, $trans_id, $transaction_src, $version, $reqoption)

Only users that plan to ship packages manifested, tendered, and delivered by TForce Freight can use the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\FreightShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\FreightShipping\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\FreightShipping\FreightShipping\FREIGHTSHIPRequestWrapper(); // \UPS\FreightShipping\FreightShipping\FREIGHTSHIPRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$version = "version_example"; // string | When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to 'v1601'.  Format: YYMM = Year and month of the release. Example: v1601 = 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5
$reqoption = "reqoption_example"; // string | Valid Values:  Ground, Air . Length 15

try {
    $result = $apiInstance->freightShip($body, $trans_id, $transaction_src, $version, $reqoption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->freightShip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\FreightShipping\FreightShipping\FREIGHTSHIPRequestWrapper**](../Model/FREIGHTSHIPRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **version** | **string**| When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 |
 **reqoption** | **string**| Valid Values:  Ground, Air . Length 15 |

### Return type

[**\UPS\FreightShipping\FreightShipping\FREIGHTSHIPResponseWrapper**](../Model/FREIGHTSHIPResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

