# UPS\OAuthAuthCode\DefaultApi

All URIs are relative to *https://wwwcie.ups.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeClient**](DefaultApi.md#authorizeclient) | **GET** /security/v1/oauth/authorize | Authorize Client
[**generateToken**](DefaultApi.md#generatetoken) | **POST** /security/v1/oauth/token | 
[**refreshToken**](DefaultApi.md#refreshtoken) | **POST** /security/v1/oauth/refresh | Refresh Token

# **authorizeClient**
> authorizeClient($client_id, $redirect_uri, $response_type, $state, $scope)

Authorize Client

The Authorize Client endpoint initiates the OAuth flow by redirecting the user to UPS to log in and authorize the client application. It accepts the parameters listed below to facilitate the user authorization flow. A successful response redirects back to the client with an authorization code that can be exchanged for an access token.

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
$response_type = "response_type_example"; // string | Valid Values: code
$state = "state_example"; // string | Optional value supplied by the client, will be returned during the redirection back to the client. Can be utilized to maintain state between Auth-Code request and callback event.
$scope = "scope_example"; // string | Optional value supplied by the client, will be returned during the redirection back to the client.

try {
    $apiInstance->authorizeClient($client_id, $redirect_uri, $response_type, $state, $scope);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authorizeClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client id for the requesting application. |
 **redirect_uri** | **string**| Callback URL for the requesting application. |
 **response_type** | **string**| Valid Values: code |
 **state** | **string**| Optional value supplied by the client, will be returned during the redirection back to the client. Can be utilized to maintain state between Auth-Code request and callback event. | [optional]
 **scope** | **string**| Optional value supplied by the client, will be returned during the redirection back to the client. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateToken**
> \UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse generateToken($grant_type, $code, $redirect_uri, $x_merchant_id)



The Generate Token endpoint exchanges the authorization code received from Authorize Client for an access token and a refresh token. The client uses the access token to make API requests on behalf of the user by including it in the Authorization header. The access token will expire after a certain period and can be refreshed by using the RefreshToken endpoint.

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

The RefreshToken endpoint is used to refresh an expired access token in order to continue accessing the UPS API on behalf of a user. The endpoint generates a new access/refresh token pair by exchanging a valid refresh token. A successful response returns new access and refresh tokens for ongoing API access without reprompting the user.

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

