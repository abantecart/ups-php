<?php
/**
 * ErrorResponseResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DeliveryIntercept
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

use \ArrayAccess;
use \UPS\DeliveryIntercept\ObjectSerializer;

/**
 * ErrorResponseResponse Class Doc Comment
 *
 * @category Class
 * @package  UPS\DeliveryIntercept
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ErrorResponseResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ErrorResponse_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transaction_id' => '',
        'status_code' => '',
        'sub_status_code' => '',
        'success' => '',
        'errors' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transaction_id' => null,
        'status_code' => null,
        'sub_status_code' => null,
        'success' => null,
        'errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transaction_id' => 'transactionId',
        'status_code' => 'statusCode',
        'sub_status_code' => 'subStatusCode',
        'success' => 'success',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'status_code' => 'setStatusCode',
        'sub_status_code' => 'setSubStatusCode',
        'success' => 'setSuccess',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'status_code' => 'getStatusCode',
        'sub_status_code' => 'getSubStatusCode',
        'success' => 'getSuccess',
        'errors' => 'getErrors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['sub_status_code'] = isset($data['sub_status_code']) ? $data['sub_status_code'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['status_code'] === null) {
            $invalidProperties[] = "'status_code' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transaction_id
     *
     * @return 
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param  $transaction_id A unique value that will be used to identify the transaction for logging and troubleshooting purposes.
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return 
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param  $status_code API response status code, Internal code regarding the success or failure of the operation
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets sub_status_code
     *
     * @return 
     */
    public function getSubStatusCode()
    {
        return $this->container['sub_status_code'];
    }

    /**
     * Sets sub_status_code
     *
     * @param  $sub_status_code A new status code for adding granularity to the existing status code structure
     *
     * @return $this
     */
    public function setSubStatusCode($sub_status_code)
    {
        $this->container['sub_status_code'] = $sub_status_code;

        return $this;
    }

    /**
     * Gets success
     *
     * @return 
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param  $success Indicates if the transaction is considered successful.
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return 
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param  $errors Will only be returned if the HTTP statusCode isn't '200'(success). A list of one or more validation errors. On the API version v3 the first element of the errors array contains the statusCode and scoring statusMessage field. This array is unbounded.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
