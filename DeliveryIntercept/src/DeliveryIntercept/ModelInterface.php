<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DeliveryIntercept\DeliveryIntercept
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Delivery Intercept® API
 *
 * With the UPS Delivery Intercept® API, a shipper can manage the delivery details of their shipment, prior to delivery.  # Business Values  **Key Business Values:** - elimination of manually processing customer requests - acceptance of requests later in the delivery process  <a href=\"https://developer.ups.com/api/reference/deliveryintercept/product-info\" target=\"_blank\" rel=\"noopener\">Product Info</a>  <a href=\"https://god.gw.postman.com/run-collection/29542085-f2409ef1-39c9-4f4a-a509-a3f860068ff4?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-f2409ef1-39c9-4f4a-a509-a3f860068ff4%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"> </a>  # CIE Behavior  The Delivery Intercept API will return a stubbed success response if the correct data is used for a given endpoint. The static data that is valid for each of the endpoints is in the table below:  | Endpoint | transId | trackingNumber                                                                                                                                                                                              | |------------|-------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | /charges     | SIICharges         | 1Z4096YY0316914058 | /willcall     | SIIWillcall        | 1Z4096YY0316914058 | /return     | SIIReturn         | 1Z4096YY0316914058 | /reschedule     | SIIReschedule         | 1Z4096YY0316914058 | /redirect/address     | SIIRedirect         | 1Z4096YY0316914058 | /cancel     | SIICancel         | 1Z4096YY0316914058
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.71
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\DeliveryIntercept\DeliveryIntercept;

/**
 * Interface abstracting model access.
 *
 * @package UPS\DeliveryIntercept\DeliveryIntercept
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
