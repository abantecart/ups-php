<?php
/**
 * HandlingUnitCommodity
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\TForceFreightShipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freight Ship
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

namespace UPS\TForceFreightShipping\TForceFreightShipping;

use \ArrayAccess;
use \UPS\TForceFreightShipping\ObjectSerializer;

/**
 * HandlingUnitCommodity Class Doc Comment
 *
 * @category Class
 * @description Commodity Container.
 * @package  UPS\TForceFreightShipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HandlingUnitCommodity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HandlingUnit_Commodity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number_of_pieces' => 'string',
        'packaging_type' => '\UPS\TForceFreightShipping\TForceFreightShipping\CommodityPackagingType',
        'dangerous_goods_indicator' => 'string',
        'description' => 'string',
        'nmfc_commodity_code' => 'string',
        'freight_class' => 'string',
        'dimensions' => '\UPS\TForceFreightShipping\TForceFreightShipping\CommodityDimensions',
        'weight' => 'string',
        'commodity_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number_of_pieces' => null,
        'packaging_type' => null,
        'dangerous_goods_indicator' => null,
        'description' => null,
        'nmfc_commodity_code' => null,
        'freight_class' => null,
        'dimensions' => null,
        'weight' => null,
        'commodity_value' => null
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
        'number_of_pieces' => 'NumberOfPieces',
        'packaging_type' => 'PackagingType',
        'dangerous_goods_indicator' => 'DangerousGoodsIndicator',
        'description' => 'Description',
        'nmfc_commodity_code' => 'NMFCCommodityCode',
        'freight_class' => 'FreightClass',
        'dimensions' => 'Dimensions',
        'weight' => 'Weight',
        'commodity_value' => 'CommodityValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number_of_pieces' => 'setNumberOfPieces',
        'packaging_type' => 'setPackagingType',
        'dangerous_goods_indicator' => 'setDangerousGoodsIndicator',
        'description' => 'setDescription',
        'nmfc_commodity_code' => 'setNmfcCommodityCode',
        'freight_class' => 'setFreightClass',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'commodity_value' => 'setCommodityValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_pieces' => 'getNumberOfPieces',
        'packaging_type' => 'getPackagingType',
        'dangerous_goods_indicator' => 'getDangerousGoodsIndicator',
        'description' => 'getDescription',
        'nmfc_commodity_code' => 'getNmfcCommodityCode',
        'freight_class' => 'getFreightClass',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'commodity_value' => 'getCommodityValue'
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
        $this->container['number_of_pieces'] = isset($data['number_of_pieces']) ? $data['number_of_pieces'] : null;
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['dangerous_goods_indicator'] = isset($data['dangerous_goods_indicator']) ? $data['dangerous_goods_indicator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nmfc_commodity_code'] = isset($data['nmfc_commodity_code']) ? $data['nmfc_commodity_code'] : null;
        $this->container['freight_class'] = isset($data['freight_class']) ? $data['freight_class'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['commodity_value'] = isset($data['commodity_value']) ? $data['commodity_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['freight_class'] === null) {
            $invalidProperties[] = "'freight_class' can't be null";
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
     * Gets number_of_pieces
     *
     * @return string
     */
    public function getNumberOfPieces()
    {
        return $this->container['number_of_pieces'];
    }

    /**
     * Sets number_of_pieces
     *
     * @param string $number_of_pieces Number of Pieces.
     *
     * @return $this
     */
    public function setNumberOfPieces($number_of_pieces)
    {
        $this->container['number_of_pieces'] = $number_of_pieces;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\CommodityPackagingType
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\CommodityPackagingType $packaging_type packaging_type
     *
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets dangerous_goods_indicator
     *
     * @return string
     */
    public function getDangerousGoodsIndicator()
    {
        return $this->container['dangerous_goods_indicator'];
    }

    /**
     * Sets dangerous_goods_indicator
     *
     * @param string $dangerous_goods_indicator Hazmat Indicator.
     *
     * @return $this
     */
    public function setDangerousGoodsIndicator($dangerous_goods_indicator)
    {
        $this->container['dangerous_goods_indicator'] = $dangerous_goods_indicator;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of articles, special marks, freight codes.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets nmfc_commodity_code
     *
     * @return string
     */
    public function getNmfcCommodityCode()
    {
        return $this->container['nmfc_commodity_code'];
    }

    /**
     * Sets nmfc_commodity_code
     *
     * @param string $nmfc_commodity_code NMFC.
     *
     * @return $this
     */
    public function setNmfcCommodityCode($nmfc_commodity_code)
    {
        $this->container['nmfc_commodity_code'] = $nmfc_commodity_code;

        return $this;
    }

    /**
     * Gets freight_class
     *
     * @return string
     */
    public function getFreightClass()
    {
        return $this->container['freight_class'];
    }

    /**
     * Sets freight_class
     *
     * @param string $freight_class Class.
     *
     * @return $this
     */
    public function setFreightClass($freight_class)
    {
        $this->container['freight_class'] = $freight_class;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\CommodityDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\CommodityDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight Weight of the package.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets commodity_value
     *
     * @return string
     */
    public function getCommodityValue()
    {
        return $this->container['commodity_value'];
    }

    /**
     * Sets commodity_value
     *
     * @param string $commodity_value Unit price of the commodity.
     *
     * @return $this
     */
    public function setCommodityValue($commodity_value)
    {
        $this->container['commodity_value'] = $commodity_value;

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
