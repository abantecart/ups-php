<?php
/**
 * RatedShipmentTimeInTransit
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
 * RatedShipmentTimeInTransit Class Doc Comment
 *
 * @category Class
 * @description Container for returned Time in Transit information.  Will only be returned if request option was either \&quot;ratetimeintransit\&quot; or \&quot;shoptimeintransit\&quot; and DeliveryTimeInformation container was present in request.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatedShipmentTimeInTransit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatedShipment_TimeInTransit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_date' => 'string',
        'documents_only_indicator' => 'string',
        'package_bill_type' => 'string',
        'service_summary' => '\UPS\Rating\Rating\TimeInTransitServiceSummary',
        'auto_duty_code' => 'string',
        'disclaimer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_date' => null,
        'documents_only_indicator' => null,
        'package_bill_type' => null,
        'service_summary' => null,
        'auto_duty_code' => null,
        'disclaimer' => null
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
        'pickup_date' => 'PickupDate',
        'documents_only_indicator' => 'DocumentsOnlyIndicator',
        'package_bill_type' => 'PackageBillType',
        'service_summary' => 'ServiceSummary',
        'auto_duty_code' => 'AutoDutyCode',
        'disclaimer' => 'Disclaimer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_date' => 'setPickupDate',
        'documents_only_indicator' => 'setDocumentsOnlyIndicator',
        'package_bill_type' => 'setPackageBillType',
        'service_summary' => 'setServiceSummary',
        'auto_duty_code' => 'setAutoDutyCode',
        'disclaimer' => 'setDisclaimer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_date' => 'getPickupDate',
        'documents_only_indicator' => 'getDocumentsOnlyIndicator',
        'package_bill_type' => 'getPackageBillType',
        'service_summary' => 'getServiceSummary',
        'auto_duty_code' => 'getAutoDutyCode',
        'disclaimer' => 'getDisclaimer'
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
        $this->container['pickup_date'] = isset($data['pickup_date']) ? $data['pickup_date'] : null;
        $this->container['documents_only_indicator'] = isset($data['documents_only_indicator']) ? $data['documents_only_indicator'] : null;
        $this->container['package_bill_type'] = isset($data['package_bill_type']) ? $data['package_bill_type'] : null;
        $this->container['service_summary'] = isset($data['service_summary']) ? $data['service_summary'] : null;
        $this->container['auto_duty_code'] = isset($data['auto_duty_code']) ? $data['auto_duty_code'] : null;
        $this->container['disclaimer'] = isset($data['disclaimer']) ? $data['disclaimer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pickup_date'] === null) {
            $invalidProperties[] = "'pickup_date' can't be null";
        }
        if ($this->container['service_summary'] === null) {
            $invalidProperties[] = "'service_summary' can't be null";
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
     * Gets pickup_date
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->container['pickup_date'];
    }

    /**
     * Sets pickup_date
     *
     * @param string $pickup_date The date the user requests UPS to pickup the package from the origin. Format: YYYYMMDD. In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.  In the event this Pickup date differs from the Pickup date in the Estimated Arrival Container, a warning will be returned.
     *
     * @return $this
     */
    public function setPickupDate($pickup_date)
    {
        $this->container['pickup_date'] = $pickup_date;

        return $this;
    }

    /**
     * Gets documents_only_indicator
     *
     * @return string
     */
    public function getDocumentsOnlyIndicator()
    {
        return $this->container['documents_only_indicator'];
    }

    /**
     * Sets documents_only_indicator
     *
     * @param string $documents_only_indicator If the indicator is present then the shipment was processed as Document Only.
     *
     * @return $this
     */
    public function setDocumentsOnlyIndicator($documents_only_indicator)
    {
        $this->container['documents_only_indicator'] = $documents_only_indicator;

        return $this;
    }

    /**
     * Gets package_bill_type
     *
     * @return string
     */
    public function getPackageBillType()
    {
        return $this->container['package_bill_type'];
    }

    /**
     * Sets package_bill_type
     *
     * @param string $package_bill_type Package bill type for the shipment. Valid values:02 - Document only 03 - Non-Document04 - Pallet
     *
     * @return $this
     */
    public function setPackageBillType($package_bill_type)
    {
        $this->container['package_bill_type'] = $package_bill_type;

        return $this;
    }

    /**
     * Gets service_summary
     *
     * @return \UPS\Rating\Rating\TimeInTransitServiceSummary
     */
    public function getServiceSummary()
    {
        return $this->container['service_summary'];
    }

    /**
     * Sets service_summary
     *
     * @param \UPS\Rating\Rating\TimeInTransitServiceSummary $service_summary service_summary
     *
     * @return $this
     */
    public function setServiceSummary($service_summary)
    {
        $this->container['service_summary'] = $service_summary;

        return $this;
    }

    /**
     * Gets auto_duty_code
     *
     * @return string
     */
    public function getAutoDutyCode()
    {
        return $this->container['auto_duty_code'];
    }

    /**
     * Sets auto_duty_code
     *
     * @param string $auto_duty_code Required output for International requests. If Documents indicator is set for Non-document a duty is automatically calculated. The possible values to be returned are: 01 - Dutiable02 - Non-Dutiable03 - Low-value04 - Courier Remission05 - Gift06 - Military07 - Exception08 - Line Release09 - Section 321 low value.
     *
     * @return $this
     */
    public function setAutoDutyCode($auto_duty_code)
    {
        $this->container['auto_duty_code'] = $auto_duty_code;

        return $this;
    }

    /**
     * Gets disclaimer
     *
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->container['disclaimer'];
    }

    /**
     * Sets disclaimer
     *
     * @param string $disclaimer The Disclaimer is provided based upon the origin and destination country or territory codes provided in the request document. The possible disclaimers that can be returned are available in the Service Guaranteed Disclaimers table.
     *
     * @return $this
     */
    public function setDisclaimer($disclaimer)
    {
        $this->container['disclaimer'] = $disclaimer;

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
