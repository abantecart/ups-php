# QuantumView
UPS Quantum View is a suite of services that gives you and your customers details regarding UPS shipments. # Reference - <a href=\"https://developer.ups.com/api/reference/quantumview/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/errors\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-84cbd22f-67ec-4c9c-b500-620b266922c9?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-84cbd22f-67ec-4c9c-b500-620b266922c9%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 
- Package version: 1.0.9
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/abantecart/ups-quantum-view.git"
    }
  ],
  "require": {
    "abantecart/ups-quantum-view": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/QuantumView/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = UPS\QuantumView\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\QuantumView\Request\QuantumViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\QuantumView\QuantumView\QUANTUMVIEWRequestWrapper(); // \UPS\QuantumView\QuantumView\QUANTUMVIEWRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \"Authorize\" and enter your application credentials, then populate the required parameters above and click \"Try it out\".
$deprecated_version = "deprecated_version_example"; // string | Version of API.  Valid values: - v1

try {
    $result = $apiInstance->deprecatedQuantumView($body, $deprecated_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantumViewApi->deprecatedQuantumView: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = UPS\QuantumView\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\QuantumView\Request\QuantumViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\QuantumView\QuantumView\QUANTUMVIEWRequestWrapper(); // \UPS\QuantumView\QuantumView\QUANTUMVIEWRequestWrapper | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \"Authorize\" and enter your application credentials, then populate the required parameters above and click \"Try it out\".
$version = "version_example"; // string | Version of API.  Valid values: - v3

try {
    $result = $apiInstance->quantumView($body, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantumViewApi->quantumView: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://wwwcie.ups.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*QuantumViewApi* | [**deprecatedQuantumView**](docs/Api/QuantumViewApi.md#deprecatedquantumview) | **POST** /quantumview/{deprecatedVersion}/events | Quantum View
*QuantumViewApi* | [**quantumView**](docs/Api/QuantumViewApi.md#quantumview) | **POST** /quantumview/{version}/events | Quantum View

## Documentation For Models

 - [ActivityLocationAddressArtifactFormat](docs/Model/ActivityLocationAddressArtifactFormat.md)
 - [AddressArtifactFormatAddressExtendedInformation](docs/Model/AddressArtifactFormatAddressExtendedInformation.md)
 - [CODCODAmount](docs/Model/CODCODAmount.md)
 - [CODCODCode](docs/Model/CODCODCode.md)
 - [CommonErrorResponse](docs/Model/CommonErrorResponse.md)
 - [DeliveryActivityLocation](docs/Model/DeliveryActivityLocation.md)
 - [DeliveryBillToAccount](docs/Model/DeliveryBillToAccount.md)
 - [DeliveryCOD](docs/Model/DeliveryCOD.md)
 - [DeliveryDeliveryLocation](docs/Model/DeliveryDeliveryLocation.md)
 - [DeliveryLocationAddressArtifactFormat](docs/Model/DeliveryLocationAddressArtifactFormat.md)
 - [DeliveryPackageReferenceNumber](docs/Model/DeliveryPackageReferenceNumber.md)
 - [DeliveryShipmentReferenceNumber](docs/Model/DeliveryShipmentReferenceNumber.md)
 - [DimensionalWeightUnitOfMeasurement](docs/Model/DimensionalWeightUnitOfMeasurement.md)
 - [DimensionalWeightWeight](docs/Model/DimensionalWeightWeight.md)
 - [ErrorErrorDigest](docs/Model/ErrorErrorDigest.md)
 - [ErrorErrorLocation](docs/Model/ErrorErrorLocation.md)
 - [ErrorMessage](docs/Model/ErrorMessage.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ExceptionActivityLocation](docs/Model/ExceptionActivityLocation.md)
 - [ExceptionBillToAccount](docs/Model/ExceptionBillToAccount.md)
 - [ExceptionPackageReferenceNumber](docs/Model/ExceptionPackageReferenceNumber.md)
 - [ExceptionResolution](docs/Model/ExceptionResolution.md)
 - [ExceptionShipmentReferenceNumber](docs/Model/ExceptionShipmentReferenceNumber.md)
 - [ExceptionUpdatedAddress](docs/Model/ExceptionUpdatedAddress.md)
 - [FailureNotificationFailureNotificationCode](docs/Model/FailureNotificationFailureNotificationCode.md)
 - [GenericActivity](docs/Model/GenericActivity.md)
 - [GenericBillToAccount](docs/Model/GenericBillToAccount.md)
 - [GenericFailureNotification](docs/Model/GenericFailureNotification.md)
 - [GenericPackageReferenceNumber](docs/Model/GenericPackageReferenceNumber.md)
 - [GenericService](docs/Model/GenericService.md)
 - [GenericShipTo](docs/Model/GenericShipTo.md)
 - [GenericShipmentReferenceNumber](docs/Model/GenericShipmentReferenceNumber.md)
 - [ManifestBillToAccount](docs/Model/ManifestBillToAccount.md)
 - [ManifestCustomsValue](docs/Model/ManifestCustomsValue.md)
 - [ManifestPackage](docs/Model/ManifestPackage.md)
 - [ManifestReferenceNumber](docs/Model/ManifestReferenceNumber.md)
 - [ManifestService](docs/Model/ManifestService.md)
 - [ManifestShipTo](docs/Model/ManifestShipTo.md)
 - [ManifestShipmentServiceOptions](docs/Model/ManifestShipmentServiceOptions.md)
 - [ManifestShipper](docs/Model/ManifestShipper.md)
 - [ManifestUAPAddress](docs/Model/ManifestUAPAddress.md)
 - [OriginActivityLocation](docs/Model/OriginActivityLocation.md)
 - [OriginBillToAccount](docs/Model/OriginBillToAccount.md)
 - [OriginPackageReferenceNumber](docs/Model/OriginPackageReferenceNumber.md)
 - [OriginShipmentReferenceNumber](docs/Model/OriginShipmentReferenceNumber.md)
 - [PackageActivity](docs/Model/PackageActivity.md)
 - [PackageDimensionalWeight](docs/Model/PackageDimensionalWeight.md)
 - [PackageDimensions](docs/Model/PackageDimensions.md)
 - [PackageLargePackage](docs/Model/PackageLargePackage.md)
 - [PackagePackageServiceOptions](docs/Model/PackagePackageServiceOptions.md)
 - [PackagePackageWeight](docs/Model/PackagePackageWeight.md)
 - [PackageReferenceNumber](docs/Model/PackageReferenceNumber.md)
 - [PackageServiceOptionsCOD](docs/Model/PackageServiceOptionsCOD.md)
 - [PackageServiceOptionsInsuredValue](docs/Model/PackageServiceOptionsInsuredValue.md)
 - [PackageTrackingNumber](docs/Model/PackageTrackingNumber.md)
 - [QUANTUMVIEWRequestWrapper](docs/Model/QUANTUMVIEWRequestWrapper.md)
 - [QUANTUMVIEWResponseWrapper](docs/Model/QUANTUMVIEWResponseWrapper.md)
 - [QuantumViewEventsSubscriptionEvents](docs/Model/QuantumViewEventsSubscriptionEvents.md)
 - [QuantumViewRequest](docs/Model/QuantumViewRequest.md)
 - [QuantumViewRequestRequest](docs/Model/QuantumViewRequestRequest.md)
 - [QuantumViewRequestSubscriptionRequest](docs/Model/QuantumViewRequestSubscriptionRequest.md)
 - [QuantumViewResponse](docs/Model/QuantumViewResponse.md)
 - [QuantumViewResponseQuantumViewEvents](docs/Model/QuantumViewResponseQuantumViewEvents.md)
 - [QuantumViewResponseResponse](docs/Model/QuantumViewResponseResponse.md)
 - [RequestTransactionReference](docs/Model/RequestTransactionReference.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ResponseTransactionReference](docs/Model/ResponseTransactionReference.md)
 - [ShipToAddress](docs/Model/ShipToAddress.md)
 - [ShipmentServiceOptionsCallTagARS](docs/Model/ShipmentServiceOptionsCallTagARS.md)
 - [ShipperAddress](docs/Model/ShipperAddress.md)
 - [SubscriptionEventsDateRange](docs/Model/SubscriptionEventsDateRange.md)
 - [SubscriptionEventsSubscriptionFile](docs/Model/SubscriptionEventsSubscriptionFile.md)
 - [SubscriptionEventsSubscriptionStatus](docs/Model/SubscriptionEventsSubscriptionStatus.md)
 - [SubscriptionFileDelivery](docs/Model/SubscriptionFileDelivery.md)
 - [SubscriptionFileException](docs/Model/SubscriptionFileException.md)
 - [SubscriptionFileGeneric](docs/Model/SubscriptionFileGeneric.md)
 - [SubscriptionFileManifest](docs/Model/SubscriptionFileManifest.md)
 - [SubscriptionFileOrigin](docs/Model/SubscriptionFileOrigin.md)
 - [SubscriptionFileStatusType](docs/Model/SubscriptionFileStatusType.md)
 - [SubscriptionRequestDateTimeRange](docs/Model/SubscriptionRequestDateTimeRange.md)
 - [UAPAddressAddress](docs/Model/UAPAddressAddress.md)
 - [UpdatedAddressAddressExtendedInformation](docs/Model/UpdatedAddressAddressExtendedInformation.md)

## Documentation For Authorization


## OAuth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 


## Author



