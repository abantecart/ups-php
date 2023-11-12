# UPS\Tracking\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSingleTrackResponseUsingGET**](DefaultApi.md#getsingletrackresponseusingget) | **GET** /track/v1/details/{inquiryNumber} | Tracking

# **getSingleTrackResponseUsingGET**
> \UPS\Tracking\Tracking\TrackApiResponse getSingleTrackResponseUsingGET($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature)

Tracking

gets single track API details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\Tracking\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\Tracking\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inquiry_number = "inquiry_number_example"; // string | Tracking Number
$trans_id = "trans_id_example"; // string | transId
$transaction_src = "testing"; // string | transactionSrc
$locale = "en_US"; // string | locale
$return_signature = "false"; // string | returnSignature

try {
    $result = $apiInstance->getSingleTrackResponseUsingGET($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSingleTrackResponseUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inquiry_number** | **string**| Tracking Number |
 **trans_id** | **string**| transId |
 **transaction_src** | **string**| transactionSrc | [default to testing]
 **locale** | **string**| locale | [optional] [default to en_US]
 **return_signature** | **string**| returnSignature | [optional] [default to false]

### Return type

[**\UPS\Tracking\Tracking\TrackApiResponse**](../Model/TrackApiResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

