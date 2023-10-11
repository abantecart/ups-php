# UPS\PaperlessDocuments\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete**](DefaultApi.md#delete) | **DELETE** /paperlessdocuments/{version}/DocumentId/ShipperNumber | The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.
[**pushToImageRepository**](DefaultApi.md#pushtoimagerepository) | **POST** /paperlessdocuments/{version}/image | The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.
[**upload**](DefaultApi.md#upload) | **POST** /paperlessdocuments/{version}/upload | The Paperless Document API web service allows the users to upload,delete and push to image repository their own customized trade documents for customs clearance to Forms History.

# **delete**
> \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTDeleteResponseWrapper delete($version, $shipper_number, $document_id, $trans_id, $transaction_src)

The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\PaperlessDocuments\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\PaperlessDocuments\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | Version of API
$shipper_number = "shipper_number_example"; // string | Your Shipper Number
$document_id = "document_id_example"; // string | DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512

try {
    $result = $apiInstance->delete($version, $shipper_number, $document_id, $trans_id, $transaction_src);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| Version of API |
 **shipper_number** | **string**| Your Shipper Number |
 **document_id** | **string**| DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request. |
 **trans_id** | **string**| An identifier unique to the request. Length 32 | [optional]
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [optional] [default to testing]

### Return type

[**\UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTDeleteResponseWrapper**](../Model/PAPERLESSDOCUMENTDeleteResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushToImageRepository**
> \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTResponseWrapper pushToImageRepository($body, $shipper_number, $version, $trans_id, $transaction_src)

The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\PaperlessDocuments\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\PaperlessDocuments\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTRequestWrapper(); // \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$shipper_number = "shipper_number_example"; // string | Shipper Number
$version = "version_example"; // string | Version of API
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512

try {
    $result = $apiInstance->pushToImageRepository($body, $shipper_number, $version, $trans_id, $transaction_src);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pushToImageRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTRequestWrapper**](../Model/PAPERLESSDOCUMENTRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **shipper_number** | **string**| Shipper Number |
 **version** | **string**| Version of API |
 **trans_id** | **string**| An identifier unique to the request. Length 32 | [optional]
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [optional] [default to testing]

### Return type

[**\UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTResponseWrapper**](../Model/PAPERLESSDOCUMENTResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTUploadResponseWrapper upload($body, $shipper_number, $version, $trans_id, $transaction_src)

The Paperless Document API web service allows the users to upload,delete and push to image repository their own customized trade documents for customs clearance to Forms History.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\PaperlessDocuments\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\PaperlessDocuments\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTUploadRequestWrapper(); // \UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTUploadRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$shipper_number = "shipper_number_example"; // string | Shipper Number
$version = "version_example"; // string | Version of API
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512

try {
    $result = $apiInstance->upload($body, $shipper_number, $version, $trans_id, $transaction_src);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTUploadRequestWrapper**](../Model/PAPERLESSDOCUMENTUploadRequestWrapper.md)| Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. |
 **shipper_number** | **string**| Shipper Number |
 **version** | **string**| Version of API |
 **trans_id** | **string**| An identifier unique to the request. Length 32 | [optional]
 **transaction_src** | **string**| An identifier of the client/source application that is making the request.Length 512 | [optional] [default to testing]

### Return type

[**\UPS\PaperlessDocuments\PaperlessDocuments\PAPERLESSDOCUMENTUploadResponseWrapper**](../Model/PAPERLESSDOCUMENTUploadResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

