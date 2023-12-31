<?php
/**
 * FreightShipRequestShipment
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
 * FreightShipRequestShipment Class Doc Comment
 *
 * @category Class
 * @description Shipment Container.
 * @package  UPS\TForceFreightShipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreightShipRequestShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreightShipRequest_Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ship_from' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipFrom',
        'shipper_number' => 'string',
        'ship_to' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipTo',
        'payment_information' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPaymentInformation',
        'service' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentService',
        'handling_unit_one' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitOne',
        'handling_unit_two' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitTwo',
        'existing_shipment_id' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentExistingShipmentID',
        'handling_instructions' => 'string',
        'delivery_instructions' => 'string',
        'pickup_instructions' => 'string',
        'commodity' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentCommodity[]',
        'reference' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentReference[]',
        'shipment_service_options' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipmentServiceOptions',
        'pickup_request' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPickupRequest',
        'documents' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentDocuments',
        'time_in_transit_indicator' => 'string',
        'handling_units' => '\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnits',
        'density_eligible_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ship_from' => null,
        'shipper_number' => null,
        'ship_to' => null,
        'payment_information' => null,
        'service' => null,
        'handling_unit_one' => null,
        'handling_unit_two' => null,
        'existing_shipment_id' => null,
        'handling_instructions' => null,
        'delivery_instructions' => null,
        'pickup_instructions' => null,
        'commodity' => null,
        'reference' => null,
        'shipment_service_options' => null,
        'pickup_request' => null,
        'documents' => null,
        'time_in_transit_indicator' => null,
        'handling_units' => null,
        'density_eligible_indicator' => null
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
        'ship_from' => 'ShipFrom',
        'shipper_number' => 'ShipperNumber',
        'ship_to' => 'ShipTo',
        'payment_information' => 'PaymentInformation',
        'service' => 'Service',
        'handling_unit_one' => 'HandlingUnitOne',
        'handling_unit_two' => 'HandlingUnitTwo',
        'existing_shipment_id' => 'ExistingShipmentID',
        'handling_instructions' => 'HandlingInstructions',
        'delivery_instructions' => 'DeliveryInstructions',
        'pickup_instructions' => 'PickupInstructions',
        'commodity' => 'Commodity',
        'reference' => 'Reference',
        'shipment_service_options' => 'ShipmentServiceOptions',
        'pickup_request' => 'PickupRequest',
        'documents' => 'Documents',
        'time_in_transit_indicator' => 'TimeInTransitIndicator',
        'handling_units' => 'HandlingUnits',
        'density_eligible_indicator' => 'DensityEligibleIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_from' => 'setShipFrom',
        'shipper_number' => 'setShipperNumber',
        'ship_to' => 'setShipTo',
        'payment_information' => 'setPaymentInformation',
        'service' => 'setService',
        'handling_unit_one' => 'setHandlingUnitOne',
        'handling_unit_two' => 'setHandlingUnitTwo',
        'existing_shipment_id' => 'setExistingShipmentId',
        'handling_instructions' => 'setHandlingInstructions',
        'delivery_instructions' => 'setDeliveryInstructions',
        'pickup_instructions' => 'setPickupInstructions',
        'commodity' => 'setCommodity',
        'reference' => 'setReference',
        'shipment_service_options' => 'setShipmentServiceOptions',
        'pickup_request' => 'setPickupRequest',
        'documents' => 'setDocuments',
        'time_in_transit_indicator' => 'setTimeInTransitIndicator',
        'handling_units' => 'setHandlingUnits',
        'density_eligible_indicator' => 'setDensityEligibleIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_from' => 'getShipFrom',
        'shipper_number' => 'getShipperNumber',
        'ship_to' => 'getShipTo',
        'payment_information' => 'getPaymentInformation',
        'service' => 'getService',
        'handling_unit_one' => 'getHandlingUnitOne',
        'handling_unit_two' => 'getHandlingUnitTwo',
        'existing_shipment_id' => 'getExistingShipmentId',
        'handling_instructions' => 'getHandlingInstructions',
        'delivery_instructions' => 'getDeliveryInstructions',
        'pickup_instructions' => 'getPickupInstructions',
        'commodity' => 'getCommodity',
        'reference' => 'getReference',
        'shipment_service_options' => 'getShipmentServiceOptions',
        'pickup_request' => 'getPickupRequest',
        'documents' => 'getDocuments',
        'time_in_transit_indicator' => 'getTimeInTransitIndicator',
        'handling_units' => 'getHandlingUnits',
        'density_eligible_indicator' => 'getDensityEligibleIndicator'
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
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['payment_information'] = isset($data['payment_information']) ? $data['payment_information'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['handling_unit_one'] = isset($data['handling_unit_one']) ? $data['handling_unit_one'] : null;
        $this->container['handling_unit_two'] = isset($data['handling_unit_two']) ? $data['handling_unit_two'] : null;
        $this->container['existing_shipment_id'] = isset($data['existing_shipment_id']) ? $data['existing_shipment_id'] : null;
        $this->container['handling_instructions'] = isset($data['handling_instructions']) ? $data['handling_instructions'] : null;
        $this->container['delivery_instructions'] = isset($data['delivery_instructions']) ? $data['delivery_instructions'] : null;
        $this->container['pickup_instructions'] = isset($data['pickup_instructions']) ? $data['pickup_instructions'] : null;
        $this->container['commodity'] = isset($data['commodity']) ? $data['commodity'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['shipment_service_options'] = isset($data['shipment_service_options']) ? $data['shipment_service_options'] : null;
        $this->container['pickup_request'] = isset($data['pickup_request']) ? $data['pickup_request'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['time_in_transit_indicator'] = isset($data['time_in_transit_indicator']) ? $data['time_in_transit_indicator'] : null;
        $this->container['handling_units'] = isset($data['handling_units']) ? $data['handling_units'] : null;
        $this->container['density_eligible_indicator'] = isset($data['density_eligible_indicator']) ? $data['density_eligible_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['shipper_number'] === null) {
            $invalidProperties[] = "'shipper_number' can't be null";
        }
        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['payment_information'] === null) {
            $invalidProperties[] = "'payment_information' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['commodity'] === null) {
            $invalidProperties[] = "'commodity' can't be null";
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
     * Gets ship_from
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipFrom
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipFrom $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

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
     * @param string $shipper_number Shipper�s six digit account number. Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipTo
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipTo $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets payment_information
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['payment_information'];
    }

    /**
     * Sets payment_information
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPaymentInformation $payment_information payment_information
     *
     * @return $this
     */
    public function setPaymentInformation($payment_information)
    {
        $this->container['payment_information'] = $payment_information;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentService $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets handling_unit_one
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitOne
     */
    public function getHandlingUnitOne()
    {
        return $this->container['handling_unit_one'];
    }

    /**
     * Sets handling_unit_one
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitOne $handling_unit_one handling_unit_one
     *
     * @return $this
     */
    public function setHandlingUnitOne($handling_unit_one)
    {
        $this->container['handling_unit_one'] = $handling_unit_one;

        return $this;
    }

    /**
     * Gets handling_unit_two
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitTwo
     */
    public function getHandlingUnitTwo()
    {
        return $this->container['handling_unit_two'];
    }

    /**
     * Sets handling_unit_two
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnitTwo $handling_unit_two handling_unit_two
     *
     * @return $this
     */
    public function setHandlingUnitTwo($handling_unit_two)
    {
        $this->container['handling_unit_two'] = $handling_unit_two;

        return $this;
    }

    /**
     * Gets existing_shipment_id
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentExistingShipmentID
     */
    public function getExistingShipmentId()
    {
        return $this->container['existing_shipment_id'];
    }

    /**
     * Sets existing_shipment_id
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentExistingShipmentID $existing_shipment_id existing_shipment_id
     *
     * @return $this
     */
    public function setExistingShipmentId($existing_shipment_id)
    {
        $this->container['existing_shipment_id'] = $existing_shipment_id;

        return $this;
    }

    /**
     * Gets handling_instructions
     *
     * @return string
     */
    public function getHandlingInstructions()
    {
        return $this->container['handling_instructions'];
    }

    /**
     * Sets handling_instructions
     *
     * @param string $handling_instructions General purpose instructions to the driver.   Example: Call 30 minutes before
     *
     * @return $this
     */
    public function setHandlingInstructions($handling_instructions)
    {
        $this->container['handling_instructions'] = $handling_instructions;

        return $this;
    }

    /**
     * Gets delivery_instructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    /**
     * Sets delivery_instructions
     *
     * @param string $delivery_instructions Delivery Instructions.
     *
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->container['delivery_instructions'] = $delivery_instructions;

        return $this;
    }

    /**
     * Gets pickup_instructions
     *
     * @return string
     */
    public function getPickupInstructions()
    {
        return $this->container['pickup_instructions'];
    }

    /**
     * Sets pickup_instructions
     *
     * @param string $pickup_instructions Pickup Instructions.
     *
     * @return $this
     */
    public function setPickupInstructions($pickup_instructions)
    {
        $this->container['pickup_instructions'] = $pickup_instructions;

        return $this;
    }

    /**
     * Gets commodity
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentCommodity[]
     */
    public function getCommodity()
    {
        return $this->container['commodity'];
    }

    /**
     * Sets commodity
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentCommodity[] $commodity commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        $this->container['commodity'] = $commodity;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentReference[]
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentReference[] $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets shipment_service_options
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipmentServiceOptions
     */
    public function getShipmentServiceOptions()
    {
        return $this->container['shipment_service_options'];
    }

    /**
     * Sets shipment_service_options
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentShipmentServiceOptions $shipment_service_options shipment_service_options
     *
     * @return $this
     */
    public function setShipmentServiceOptions($shipment_service_options)
    {
        $this->container['shipment_service_options'] = $shipment_service_options;

        return $this;
    }

    /**
     * Gets pickup_request
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPickupRequest
     */
    public function getPickupRequest()
    {
        return $this->container['pickup_request'];
    }

    /**
     * Sets pickup_request
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentPickupRequest $pickup_request pickup_request
     *
     * @return $this
     */
    public function setPickupRequest($pickup_request)
    {
        $this->container['pickup_request'] = $pickup_request;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentDocuments
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentDocuments $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets time_in_transit_indicator
     *
     * @return string
     */
    public function getTimeInTransitIndicator()
    {
        return $this->container['time_in_transit_indicator'];
    }

    /**
     * Sets time_in_transit_indicator
     *
     * @param string $time_in_transit_indicator Presence of the tag indicates Time in Transit information is requested and will be returned if available.
     *
     * @return $this
     */
    public function setTimeInTransitIndicator($time_in_transit_indicator)
    {
        $this->container['time_in_transit_indicator'] = $time_in_transit_indicator;

        return $this;
    }

    /**
     * Gets handling_units
     *
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnits
     */
    public function getHandlingUnits()
    {
        return $this->container['handling_units'];
    }

    /**
     * Sets handling_units
     *
     * @param \UPS\TForceFreightShipping\TForceFreightShipping\ShipmentHandlingUnits $handling_units handling_units
     *
     * @return $this
     */
    public function setHandlingUnits($handling_units)
    {
        $this->container['handling_units'] = $handling_units;

        return $this;
    }

    /**
     * Gets density_eligible_indicator
     *
     * @return string
     */
    public function getDensityEligibleIndicator()
    {
        return $this->container['density_eligible_indicator'];
    }

    /**
     * Sets density_eligible_indicator
     *
     * @param string $density_eligible_indicator The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested.
     *
     * @return $this
     */
    public function setDensityEligibleIndicator($density_eligible_indicator)
    {
        $this->container['density_eligible_indicator'] = $density_eligible_indicator;

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
