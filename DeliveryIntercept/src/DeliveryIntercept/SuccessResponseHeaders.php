<?php
/**
 * SuccessResponseHeaders
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
 * SuccessResponseHeaders Class Doc Comment
 *
 * @category Class
 * @description The headers that are returned for all error responses.
 * @package  UPS\DeliveryIntercept
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuccessResponseHeaders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SuccessResponseHeaders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bknd_trans_id' => '',
        'trans_id' => '',
        'transaction_src' => '',
        'accept' => '',
        'content_type' => ''
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bknd_trans_id' => null,
        'trans_id' => null,
        'transaction_src' => null,
        'accept' => null,
        'content_type' => null
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
        'bknd_trans_id' => 'BkndTransId',
        'trans_id' => 'transId',
        'transaction_src' => 'transactionSrc',
        'accept' => 'Accept',
        'content_type' => 'Content-Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bknd_trans_id' => 'setBkndTransId',
        'trans_id' => 'setTransId',
        'transaction_src' => 'setTransactionSrc',
        'accept' => 'setAccept',
        'content_type' => 'setContentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bknd_trans_id' => 'getBkndTransId',
        'trans_id' => 'getTransId',
        'transaction_src' => 'getTransactionSrc',
        'accept' => 'getAccept',
        'content_type' => 'getContentType'
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
        $this->container['bknd_trans_id'] = isset($data['bknd_trans_id']) ? $data['bknd_trans_id'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['transaction_src'] = isset($data['transaction_src']) ? $data['transaction_src'] : null;
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bknd_trans_id'] === null) {
            $invalidProperties[] = "'bknd_trans_id' can't be null";
        }
        if ($this->container['trans_id'] === null) {
            $invalidProperties[] = "'trans_id' can't be null";
        }
        if ($this->container['transaction_src'] === null) {
            $invalidProperties[] = "'transaction_src' can't be null";
        }
        if ($this->container['accept'] === null) {
            $invalidProperties[] = "'accept' can't be null";
        }
        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
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
     * Gets bknd_trans_id
     *
     * @return 
     */
    public function getBkndTransId()
    {
        return $this->container['bknd_trans_id'];
    }

    /**
     * Sets bknd_trans_id
     *
     * @param  $bknd_trans_id The backend transaction id.
     *
     * @return $this
     */
    public function setBkndTransId($bknd_trans_id)
    {
        $this->container['bknd_trans_id'] = $bknd_trans_id;

        return $this;
    }

    /**
     * Gets trans_id
     *
     * @return 
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     *
     * @param  $trans_id An identifier unique to the request.
     *
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets transaction_src
     *
     * @return 
     */
    public function getTransactionSrc()
    {
        return $this->container['transaction_src'];
    }

    /**
     * Sets transaction_src
     *
     * @param  $transaction_src Identifies the client/source application that is calling.
     *
     * @return $this
     */
    public function setTransactionSrc($transaction_src)
    {
        $this->container['transaction_src'] = $transaction_src;

        return $this;
    }

    /**
     * Gets accept
     *
     * @return 
     */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
     * Sets accept
     *
     * @param  $accept The Accept request HTTP header indicates which content types, expressed as MIME types, the client is able to understand.
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return 
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param  $content_type The Content-Type header provides the client with the actual content/media type of the returned content.
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

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
