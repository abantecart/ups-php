# UPS\OAuthAuthCode\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateToken**](DefaultApi.md#generatetoken) | **POST** /security/v1/oauth/token | 
[**refreshToken**](DefaultApi.md#refreshtoken) | **POST** /security/v1/oauth/refresh | 
[**validateClient**](DefaultApi.md#validateclient) | **GET** /security/v1/oauth/validate-client | 

# **generateToken**
> \UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse generateToken($grant_type, $code, $redirect_uri, $x_merchant_id)



Generate Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = UPS\OAuthAuthCode\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new UPS\OAuthAuthCode\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = "grant_type_example"; // string | 
$code = "code_example"; // string | 
$redirect_uri = "redirect_uri_example"; // string | 
$x_merchant_id = "x_merchant_id_example"; // string | Client merchant ID

try {
    $result = $apiInstance->generateToken($grant_type, $code, $redirect_uri, $x_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **redirect_uri** | **string**|  | [optional]
 **x_merchant_id** | **string**| Client merchant ID | [optional]

### Return type

[**\UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse**](../Model/GenerateTokenSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse refreshToken($grant_type, $refresh_token)



Refresh Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = UPS\OAuthAuthCode\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new UPS\OAuthAuthCode\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = "grant_type_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->refreshToken($grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]

### Return type

[**\UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse**](../Model/RefreshTokenSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateClient**
> \UPS\OAuthAuthCode\OAuthAuthCode\ValidateSuccessResponse validateClient($client_id, $redirect_uri)



Validate Client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new UPS\OAuthAuthCode\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | Client id for the requesting application.
$redirect_uri = "redirect_uri_example"; // string | Callback URL for the requesting application.

try {
    $result = $apiInstance->validateClient($client_id, $redirect_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client id for the requesting application. |
 **redirect_uri** | **string**| Callback URL for the requesting application. |

### Return type

[**\UPS\OAuthAuthCode\OAuthAuthCode\ValidateSuccessResponse**](../Model/ValidateSuccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

