<?php
/**
 * ChemicalReferenceDataRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dangerous Goods Utility
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\DangerousGoods\DangerousGoods;

use \ArrayAccess;
use \UPS\DangerousGoods\ObjectSerializer;

/**
 * ChemicalReferenceDataRequest Class Doc Comment
 *
 * @category Class
 * @description Dangerous Goods Utility Request container for Chemical Reference Data.
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChemicalReferenceDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChemicalReferenceDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request' => '\UPS\DangerousGoods\DangerousGoods\ChemicalReferenceDataRequestRequest',
        'id_number' => 'string',
        'proper_shipping_name' => 'string',
        'shipper_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request' => null,
        'id_number' => null,
        'proper_shipping_name' => null,
        'shipper_number' => null
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
        'request' => 'Request',
        'id_number' => 'IDNumber',
        'proper_shipping_name' => 'ProperShippingName',
        'shipper_number' => 'ShipperNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'id_number' => 'setIdNumber',
        'proper_shipping_name' => 'setProperShippingName',
        'shipper_number' => 'setShipperNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'id_number' => 'getIdNumber',
        'proper_shipping_name' => 'getProperShippingName',
        'shipper_number' => 'getShipperNumber'
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
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['proper_shipping_name'] = isset($data['proper_shipping_name']) ? $data['proper_shipping_name'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        if ($this->container['shipper_number'] === null) {
            $invalidProperties[] = "'shipper_number' can't be null";
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
     * Gets request
     *
     * @return \UPS\DangerousGoods\DangerousGoods\ChemicalReferenceDataRequestRequest
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \UPS\DangerousGoods\DangerousGoods\ChemicalReferenceDataRequestRequest $request request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets proper_shipping_name
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->container['proper_shipping_name'];
    }

    /**
     * Sets proper_shipping_name
     *
     * @param string $proper_shipping_name The Proper Shipping Name assigned by ADR, CFR or IATA.   At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @return $this
     */
    public function setProperShippingName($proper_shipping_name)
    {
        $this->container['proper_shipping_name'] = $proper_shipping_name;

        return $this;
    }

    /**
     * Gets shipper_number
     *
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->container['shipper_number'];
    }

    /**
     * Sets shipper_number
     *
     * @param string $shipper_number Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

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
