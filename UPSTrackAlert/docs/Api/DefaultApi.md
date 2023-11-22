# UPS\UPSTrackAlert\DefaultApi

All URIs are relative to *https://onlinetools.ups.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processSubscriptionTypeForTrackingNumber**](DefaultApi.md#processsubscriptiontypefortrackingnumber) | **POST** /track/{version}/subscription/{type}/package | UPS Track Alert API

# **processSubscriptionTypeForTrackingNumber**
> \UPS\UPSTrackAlert\UPSTrackAlert\TrackSubsServiceResponse processSubscriptionTypeForTrackingNumber($trans_id, $transaction_src, $version, $type, $body)

UPS Track Alert API

The UPS Track Alert API provides best in-class package tracking visibility with near real time event updates for an improved customer experience and stream line logistic management. Updates are pushed to the user as soon as available with no constant polling required, thereby improving operational efficiency.  Key Business Values: - **Enhanced Customer Experience**: Near Real-time tracking information increases transparency, leading to higher customer satisfaction and trust. - **Operational Efficiency**: Eliminates the necessity for continuous polling, thus saving computational resources and improving system responsiveness. - **Data-Driven Decision Making**: Access to timely data can help businesses optimize their supply chain and make informed logistics decisions. - **Optimizing Cash Flow Through Near Real-Time Delivery Tracking**: Improve cash flow by knowing the deliveries occurred in near real time. - **Mitigating Fraud and Theft through Near Real-Time Package Status Monitoring**: Reduce fraud and theft by knowing the status of the package. <br /><a href=\"https://developer.ups.com/api/reference/trackalert/product-info\" target=\"_blank\">Product Info</a><br /><a href=\"https://developer.ups.com/api/reference/trackalert/error-codes\" target=\"_blank\">Errors</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\UPSTrackAlert\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\UPSTrackAlert\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trans_id = "trans_id_example"; // string | An identifier unique to the request.
$transaction_src = "transaction_src_example"; // string | Identifies the client/source application that is calling.
$version = "version_example"; // string | API Version, e.g. v1
$type = "type_example"; // string | - 'Standard' - Represents a standard subscription type that provides near real time updates on tracking status.
$body = new \UPS\UPSTrackAlert\UPSTrackAlert\TrackSubsServiceRequest(); // \UPS\UPSTrackAlert\UPSTrackAlert\TrackSubsServiceRequest | 

try {
    $result = $apiInstance->processSubscriptionTypeForTrackingNumber($trans_id, $transaction_src, $version, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->processSubscriptionTypeForTrackingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trans_id** | **string**| An identifier unique to the request. |
 **transaction_src** | **string**| Identifies the client/source application that is calling. |
 **version** | **string**| API Version, e.g. v1 |
 **type** | **string**| - &#x27;Standard&#x27; - Represents a standard subscription type that provides near real time updates on tracking status. |
 **body** | [**\UPS\UPSTrackAlert\UPSTrackAlert\TrackSubsServiceRequest**](../Model/TrackSubsServiceRequest.md)|  | [optional]

### Return type

[**\UPS\UPSTrackAlert\UPSTrackAlert\TrackSubsServiceResponse**](../Model/TrackSubsServiceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

