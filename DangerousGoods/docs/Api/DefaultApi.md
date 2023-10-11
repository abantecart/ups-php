# UPS\DangerousGoods\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptanceAuditPreCheck**](DefaultApi.md#acceptanceauditprecheck) | **POST** /dangerousgoods/{version}/acceptanceauditprecheck | The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.
[**chemicalReferenceData**](DefaultApi.md#chemicalreferencedata) | **POST** /dangerousgoods/{version}/chemicalreferencedata | The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.

# **acceptanceAuditPreCheck**
> \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYAPCResponseWrapper acceptanceAuditPreCheck($body, $trans_id, $transaction_src, $version)

The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.

Acceptance Audit Pre-check

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\DangerousGoods\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\DangerousGoods\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYAPCRequestWrapper(); // \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYAPCRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$version = "version_example"; // string | API version

try {
    $result = $apiInstance->acceptanceAuditPreCheck($body, $trans_id, $transaction_src, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->acceptanceAuditPreCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYAPCRequestWrapper**](../Model/DANGEROUSGOODSUTILITYAPCRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **version** | **string**| API version |

### Return type

[**\UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYAPCResponseWrapper**](../Model/DANGEROUSGOODSUTILITYAPCResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chemicalReferenceData**
> \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYResponseWrapper chemicalReferenceData($body, $trans_id, $transaction_src, $version)

The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.

Chemical Reference Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\DangerousGoods\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\DangerousGoods\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYRequestWrapper(); // \UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$version = "version_example"; // string | Version of the API. Valid values: v1 v1801. Length 5

try {
    $result = $apiInstance->chemicalReferenceData($body, $trans_id, $transaction_src, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chemicalReferenceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYRequestWrapper**](../Model/DANGEROUSGOODSUTILITYRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 |
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [default to testing]
 **version** | **string**| Version of the API. Valid values: v1 v1801. Length 5 |

### Return type

[**\UPS\DangerousGoods\DangerousGoods\DANGEROUSGOODSUTILITYResponseWrapper**](../Model/DANGEROUSGOODSUTILITYResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

