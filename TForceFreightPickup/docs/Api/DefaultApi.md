# UPS\TForceFreightPickup\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**freightPickup**](DefaultApi.md#freightpickup) | **POST** /freight/{version}/pickups | TForce Freight Pickup

# **freightPickup**
> \UPS\TForceFreightPickup\TForceFreightPickup\FREIGHTPICKUPResponseWrapper freightPickup($body, $trans_id, $transaction_src, $version)

TForce Freight Pickup

API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\TForceFreightPickup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\TForceFreightPickup\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\TForceFreightPickup\TForceFreightPickup\FREIGHTPICKUPRequestWrapper(); // \UPS\TForceFreightPickup\TForceFreightPickup\FREIGHTPICKUPRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$version = "version_example"; // string | Version of the API e.g v1

try {
    $result = $apiInstance->freightPickup($body, $trans_id, $transaction_src, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->freightPickup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\TForceFreightPickup\TForceFreightPickup\FREIGHTPICKUPRequestWrapper**](../Model/FREIGHTPICKUPRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **version** | **string**| Version of the API e.g v1 |

### Return type

[**\UPS\TForceFreightPickup\TForceFreightPickup\FREIGHTPICKUPResponseWrapper**](../Model/FREIGHTPICKUPResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

