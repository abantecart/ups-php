# UPS\FreightPickupCancel\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**freightCancelPickup_**](DefaultApi.md#freightcancelpickup_) | **DELETE** /freight/{version}/pickups | API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight

# **freightCancelPickup_**
> \UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper freightCancelPickup_($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)

API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\FreightPickupCancel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\FreightPickupCancel\FreightPickupCancel\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$pickup_request_confirmation_number = "pickup_request_confirmation_number_example"; // string | Confirmation number of the pickup ground freight shipment to cancel. Length 35
$version = "version_example"; // string | Version of the API e.g v1

try {
    $result = $apiInstance->freightCancelPickup_($trans_id, $transaction_src, $pickup_request_confirmation_number, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->freightCancelPickup_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **pickup_request_confirmation_number** | **string**| Confirmation number of the pickup ground freight shipment to cancel. Length 35 |
 **version** | **string**| Version of the API e.g v1 |

### Return type

[**\UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper**](../Model/FREIGHTPICKUPResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

