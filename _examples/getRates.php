<?php

// Configure OAuth2 access token for authorization: oauth2
/** @see getAccessToken.php */
$config = UPS\Rating\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\Rating\Request\RatingApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\Rating\Rating\RATERequestWrapper(); // \UPS\Rating\Rating\RATERequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$version = "v1"; // string | Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5
$requestoption = "Shop"; // string | Valid Values: Rate = The server rates (The default Request option is Rate if a Request Option is not provided). Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request.Length 512
$additionalinfo = ""; // string | Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15

try {
    $result = $apiInstance->rate($body, $version, $requestoption, $trans_id, $transaction_src, $additionalinfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->rate: ', $e->getMessage(), PHP_EOL;
}