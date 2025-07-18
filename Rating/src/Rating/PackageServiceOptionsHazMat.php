<?php
/**
 * PackageServiceOptionsHazMat
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * The Rating API is used when rating or shopping a shipment. # Reference - <a href=\"https://developer.ups.com/api/reference/rating/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/rating/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/rating/error-codes\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/rating/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a> - <a href=\"https://developer.ups.com/api/reference/rating/best-practices\" target=\"_blank\" rel=\"noopener noreferrer\"> Best Practices</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-ac21ef26-eecf-4841-b0b2-737d615b6809?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-ac21ef26-eecf-4841-b0b2-737d615b6809%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub\" style=\"width: 128px; height: 32px;\"> </a>
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.71
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * PackageServiceOptionsHazMat Class Doc Comment
 *
 * @category Class
 * @description Container to hold HazMat information.  Applies only if SubVersion is greater than or equal to 1701.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageServiceOptionsHazMat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageServiceOptions_HazMat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'package_identifier' => 'string',
        'q_value' => 'string',
        'over_packed_indicator' => 'string',
        'all_packed_in_one_indicator' => 'string',
        'haz_mat_chemical_record' => '\UPS\Rating\Rating\HazMatHazMatChemicalRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'package_identifier' => null,
        'q_value' => null,
        'over_packed_indicator' => null,
        'all_packed_in_one_indicator' => null,
        'haz_mat_chemical_record' => null
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
        'package_identifier' => 'PackageIdentifier',
        'q_value' => 'QValue',
        'over_packed_indicator' => 'OverPackedIndicator',
        'all_packed_in_one_indicator' => 'AllPackedInOneIndicator',
        'haz_mat_chemical_record' => 'HazMatChemicalRecord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_identifier' => 'setPackageIdentifier',
        'q_value' => 'setQValue',
        'over_packed_indicator' => 'setOverPackedIndicator',
        'all_packed_in_one_indicator' => 'setAllPackedInOneIndicator',
        'haz_mat_chemical_record' => 'setHazMatChemicalRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_identifier' => 'getPackageIdentifier',
        'q_value' => 'getQValue',
        'over_packed_indicator' => 'getOverPackedIndicator',
        'all_packed_in_one_indicator' => 'getAllPackedInOneIndicator',
        'haz_mat_chemical_record' => 'getHazMatChemicalRecord'
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
        $this->container['package_identifier'] = isset($data['package_identifier']) ? $data['package_identifier'] : null;
        $this->container['q_value'] = isset($data['q_value']) ? $data['q_value'] : null;
        $this->container['over_packed_indicator'] = isset($data['over_packed_indicator']) ? $data['over_packed_indicator'] : null;
        $this->container['all_packed_in_one_indicator'] = isset($data['all_packed_in_one_indicator']) ? $data['all_packed_in_one_indicator'] : null;
        $this->container['haz_mat_chemical_record'] = isset($data['haz_mat_chemical_record']) ? $data['haz_mat_chemical_record'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['haz_mat_chemical_record'] === null) {
            $invalidProperties[] = "'haz_mat_chemical_record' can't be null";
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
     * Gets package_identifier
     *
     * @return string
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string $package_identifier Identifies the package containing Dangerous Goods.  Required if SubVersion is greater than or equal to 1701.
     *
     * @return $this
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }

    /**
     * Gets q_value
     *
     * @return string
     */
    public function getQValue()
    {
        return $this->container['q_value'];
    }

    /**
     * Sets q_value
     *
     * @param string $q_value QValue is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Applies only if SubVersion is greater than or equal to 1701. Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return $this
     */
    public function setQValue($q_value)
    {
        $this->container['q_value'] = $q_value;

        return $this;
    }

    /**
     * Gets over_packed_indicator
     *
     * @return string
     */
    public function getOverPackedIndicator()
    {
        return $this->container['over_packed_indicator'];
    }

    /**
     * Sets over_packed_indicator
     *
     * @param string $over_packed_indicator Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return $this
     */
    public function setOverPackedIndicator($over_packed_indicator)
    {
        $this->container['over_packed_indicator'] = $over_packed_indicator;

        return $this;
    }

    /**
     * Gets all_packed_in_one_indicator
     *
     * @return string
     */
    public function getAllPackedInOneIndicator()
    {
        return $this->container['all_packed_in_one_indicator'];
    }

    /**
     * Sets all_packed_in_one_indicator
     *
     * @param string $all_packed_in_one_indicator Presence/Absence Indicator. Any value is ignored. Indicates the hazmat shipment/package is all packed in one.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return $this
     */
    public function setAllPackedInOneIndicator($all_packed_in_one_indicator)
    {
        $this->container['all_packed_in_one_indicator'] = $all_packed_in_one_indicator;

        return $this;
    }

    /**
     * Gets haz_mat_chemical_record
     *
     * @return \UPS\Rating\Rating\HazMatHazMatChemicalRecord[]
     */
    public function getHazMatChemicalRecord()
    {
        return $this->container['haz_mat_chemical_record'];
    }

    /**
     * Sets haz_mat_chemical_record
     *
     * @param \UPS\Rating\Rating\HazMatHazMatChemicalRecord[] $haz_mat_chemical_record haz_mat_chemical_record
     *
     * @return $this
     */
    public function setHazMatChemicalRecord($haz_mat_chemical_record)
    {
        $this->container['haz_mat_chemical_record'] = $haz_mat_chemical_record;

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
