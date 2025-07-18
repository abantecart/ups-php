<?php
/**
 * PackagePackageServiceOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Quantum View
 *
 * UPS Quantum View is a suite of services that gives you and your customers details regarding UPS shipments. # Reference - <a href=\"https://developer.ups.com/api/reference/quantumview/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/errors\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/quantumview/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-84cbd22f-67ec-4c9c-b500-620b266922c9?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-84cbd22f-67ec-4c9c-b500-620b266922c9%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\QuantumView\QuantumView;

use \ArrayAccess;
use \UPS\QuantumView\ObjectSerializer;

/**
 * PackagePackageServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Defines service options used for the package(s).
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackagePackageServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package_PackageServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cod' => '\UPS\QuantumView\QuantumView\PackageServiceOptionsCOD',
        'insured_value' => '\UPS\QuantumView\QuantumView\PackageServiceOptionsInsuredValue',
        'earliest_delivery_time' => 'string',
        'hazardous_materials_code' => 'string',
        'hold_for_pickup' => 'string',
        'add_shipping_charges_to_cod_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cod' => null,
        'insured_value' => null,
        'earliest_delivery_time' => null,
        'hazardous_materials_code' => null,
        'hold_for_pickup' => null,
        'add_shipping_charges_to_cod_indicator' => null
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
        'cod' => 'COD',
        'insured_value' => 'InsuredValue',
        'earliest_delivery_time' => 'EarliestDeliveryTime',
        'hazardous_materials_code' => 'HazardousMaterialsCode',
        'hold_for_pickup' => 'HoldForPickup',
        'add_shipping_charges_to_cod_indicator' => 'AddShippingChargesToCODIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cod' => 'setCod',
        'insured_value' => 'setInsuredValue',
        'earliest_delivery_time' => 'setEarliestDeliveryTime',
        'hazardous_materials_code' => 'setHazardousMaterialsCode',
        'hold_for_pickup' => 'setHoldForPickup',
        'add_shipping_charges_to_cod_indicator' => 'setAddShippingChargesToCodIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cod' => 'getCod',
        'insured_value' => 'getInsuredValue',
        'earliest_delivery_time' => 'getEarliestDeliveryTime',
        'hazardous_materials_code' => 'getHazardousMaterialsCode',
        'hold_for_pickup' => 'getHoldForPickup',
        'add_shipping_charges_to_cod_indicator' => 'getAddShippingChargesToCodIndicator'
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
        $this->container['cod'] = isset($data['cod']) ? $data['cod'] : null;
        $this->container['insured_value'] = isset($data['insured_value']) ? $data['insured_value'] : null;
        $this->container['earliest_delivery_time'] = isset($data['earliest_delivery_time']) ? $data['earliest_delivery_time'] : null;
        $this->container['hazardous_materials_code'] = isset($data['hazardous_materials_code']) ? $data['hazardous_materials_code'] : null;
        $this->container['hold_for_pickup'] = isset($data['hold_for_pickup']) ? $data['hold_for_pickup'] : null;
        $this->container['add_shipping_charges_to_cod_indicator'] = isset($data['add_shipping_charges_to_cod_indicator']) ? $data['add_shipping_charges_to_cod_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hold_for_pickup'] === null) {
            $invalidProperties[] = "'hold_for_pickup' can't be null";
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
     * Gets cod
     *
     * @return \UPS\QuantumView\QuantumView\PackageServiceOptionsCOD
     */
    public function getCod()
    {
        return $this->container['cod'];
    }

    /**
     * Sets cod
     *
     * @param \UPS\QuantumView\QuantumView\PackageServiceOptionsCOD $cod cod
     *
     * @return $this
     */
    public function setCod($cod)
    {
        $this->container['cod'] = $cod;

        return $this;
    }

    /**
     * Gets insured_value
     *
     * @return \UPS\QuantumView\QuantumView\PackageServiceOptionsInsuredValue
     */
    public function getInsuredValue()
    {
        return $this->container['insured_value'];
    }

    /**
     * Sets insured_value
     *
     * @param \UPS\QuantumView\QuantumView\PackageServiceOptionsInsuredValue $insured_value insured_value
     *
     * @return $this
     */
    public function setInsuredValue($insured_value)
    {
        $this->container['insured_value'] = $insured_value;

        return $this;
    }

    /**
     * Gets earliest_delivery_time
     *
     * @return string
     */
    public function getEarliestDeliveryTime()
    {
        return $this->container['earliest_delivery_time'];
    }

    /**
     * Sets earliest_delivery_time
     *
     * @param string $earliest_delivery_time Earliest delivery time. Time format is HHMMSS.
     *
     * @return $this
     */
    public function setEarliestDeliveryTime($earliest_delivery_time)
    {
        $this->container['earliest_delivery_time'] = $earliest_delivery_time;

        return $this;
    }

    /**
     * Gets hazardous_materials_code
     *
     * @return string
     */
    public function getHazardousMaterialsCode()
    {
        return $this->container['hazardous_materials_code'];
    }

    /**
     * Sets hazardous_materials_code
     *
     * @param string $hazardous_materials_code Indicates if the package contains hazardous materials. Valid values: - 1 - Hazardous Material - 2 - Electronically billed hazardous material.  If present, only one package may exist in the shipment.
     *
     * @return $this
     */
    public function setHazardousMaterialsCode($hazardous_materials_code)
    {
        $this->container['hazardous_materials_code'] = $hazardous_materials_code;

        return $this;
    }

    /**
     * Gets hold_for_pickup
     *
     * @return string
     */
    public function getHoldForPickup()
    {
        return $this->container['hold_for_pickup'];
    }

    /**
     * Sets hold_for_pickup
     *
     * @param string $hold_for_pickup A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @return $this
     */
    public function setHoldForPickup($hold_for_pickup)
    {
        $this->container['hold_for_pickup'] = $hold_for_pickup;

        return $this;
    }

    /**
     * Gets add_shipping_charges_to_cod_indicator
     *
     * @return string
     */
    public function getAddShippingChargesToCodIndicator()
    {
        return $this->container['add_shipping_charges_to_cod_indicator'];
    }

    /**
     * Sets add_shipping_charges_to_cod_indicator
     *
     * @param string $add_shipping_charges_to_cod_indicator An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @return $this
     */
    public function setAddShippingChargesToCodIndicator($add_shipping_charges_to_cod_indicator)
    {
        $this->container['add_shipping_charges_to_cod_indicator'] = $add_shipping_charges_to_cod_indicator;

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
