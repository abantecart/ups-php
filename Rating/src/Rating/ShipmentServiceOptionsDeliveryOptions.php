<?php
/**
 * ShipmentServiceOptionsDeliveryOptions
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
 * ShipmentServiceOptionsDeliveryOptions Class Doc Comment
 *
 * @category Class
 * @description Shipment Service Delivery Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentServiceOptionsDeliveryOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentServiceOptions_DeliveryOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lift_gate_at_delivery_indicator' => 'string',
        'drop_off_at_ups_facility_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lift_gate_at_delivery_indicator' => null,
        'drop_off_at_ups_facility_indicator' => null
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
        'lift_gate_at_delivery_indicator' => 'LiftGateAtDeliveryIndicator',
        'drop_off_at_ups_facility_indicator' => 'DropOffAtUPSFacilityIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lift_gate_at_delivery_indicator' => 'setLiftGateAtDeliveryIndicator',
        'drop_off_at_ups_facility_indicator' => 'setDropOffAtUpsFacilityIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lift_gate_at_delivery_indicator' => 'getLiftGateAtDeliveryIndicator',
        'drop_off_at_ups_facility_indicator' => 'getDropOffAtUpsFacilityIndicator'
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
        $this->container['lift_gate_at_delivery_indicator'] = isset($data['lift_gate_at_delivery_indicator']) ? $data['lift_gate_at_delivery_indicator'] : null;
        $this->container['drop_off_at_ups_facility_indicator'] = isset($data['drop_off_at_ups_facility_indicator']) ? $data['drop_off_at_ups_facility_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets lift_gate_at_delivery_indicator
     *
     * @return string
     */
    public function getLiftGateAtDeliveryIndicator()
    {
        return $this->container['lift_gate_at_delivery_indicator'];
    }

    /**
     * Sets lift_gate_at_delivery_indicator
     *
     * @param string $lift_gate_at_delivery_indicator The presence of the tag LiftGateAtDeliveryIndicator indicates that the shipment requires a lift gate for delivery.
     *
     * @return $this
     */
    public function setLiftGateAtDeliveryIndicator($lift_gate_at_delivery_indicator)
    {
        $this->container['lift_gate_at_delivery_indicator'] = $lift_gate_at_delivery_indicator;

        return $this;
    }

    /**
     * Gets drop_off_at_ups_facility_indicator
     *
     * @return string
     */
    public function getDropOffAtUpsFacilityIndicator()
    {
        return $this->container['drop_off_at_ups_facility_indicator'];
    }

    /**
     * Sets drop_off_at_ups_facility_indicator
     *
     * @param string $drop_off_at_ups_facility_indicator The presence of the tag DropOffAtUPSFacilityIndicator indicates the package will be dropped at a UPS facility for shipment.
     *
     * @return $this
     */
    public function setDropOffAtUpsFacilityIndicator($drop_off_at_ups_facility_indicator)
    {
        $this->container['drop_off_at_ups_facility_indicator'] = $drop_off_at_ups_facility_indicator;

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
