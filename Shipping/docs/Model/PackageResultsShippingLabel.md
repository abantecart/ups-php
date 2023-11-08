# PackageResultsShippingLabel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_format** | [**\UPS\Shipping\Shipping\ShippingLabelImageFormat**](ShippingLabelImageFormat.md) |  | 
**graphic_image** | **string** | Base 64 encoded graphic image.   Applicable only for ShipmentResponse and ShipAcceptResponse. | 
**graphic_image_part** | **string[]** | Base 64 encoded graphic image.  Applicable only for ShipmentResponse and ShipAcceptResponse for Mail Innovations CN22 Combination Forward Label with more than 3 commodities. | [optional] 
**international_signature_graphic_image** | **string** | Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.   Applicable only for ShipmentResponse and ShipAcceptResponse. | [optional] 
**html_image** | **string** | Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.   Applicable only for ShipmentResponse and ShipAcceptResponse. | [optional] 
**pdf417** | **string** | PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only. Applicable only for ShipmentResponse and ShipAcceptResponse. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

