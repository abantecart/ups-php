<?php
/**
 * ManifestShipTo
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
 * ManifestShipTo Class Doc Comment
 *
 * @category Class
 * @description Address and contact information describing the location where a return is to be delivered.
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManifestShipTo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Manifest_ShipTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipper_assigned_identification_number' => 'string',
        'company_name' => 'string',
        'attention_name' => 'string',
        'phone_number' => 'string',
        'tax_identification_number' => 'string',
        'fax_number' => 'string',
        'e_mail_address' => 'string',
        'address' => '\UPS\QuantumView\QuantumView\ShipToAddress',
        'location_id' => 'string',
        'receiving_address_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipper_assigned_identification_number' => null,
        'company_name' => null,
        'attention_name' => null,
        'phone_number' => null,
        'tax_identification_number' => null,
        'fax_number' => null,
        'e_mail_address' => null,
        'address' => null,
        'location_id' => null,
        'receiving_address_name' => null
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
        'shipper_assigned_identification_number' => 'ShipperAssignedIdentificationNumber',
        'company_name' => 'CompanyName',
        'attention_name' => 'AttentionName',
        'phone_number' => 'PhoneNumber',
        'tax_identification_number' => 'TaxIdentificationNumber',
        'fax_number' => 'FaxNumber',
        'e_mail_address' => 'EMailAddress',
        'address' => 'Address',
        'location_id' => 'LocationID',
        'receiving_address_name' => 'ReceivingAddressName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipper_assigned_identification_number' => 'setShipperAssignedIdentificationNumber',
        'company_name' => 'setCompanyName',
        'attention_name' => 'setAttentionName',
        'phone_number' => 'setPhoneNumber',
        'tax_identification_number' => 'setTaxIdentificationNumber',
        'fax_number' => 'setFaxNumber',
        'e_mail_address' => 'setEMailAddress',
        'address' => 'setAddress',
        'location_id' => 'setLocationId',
        'receiving_address_name' => 'setReceivingAddressName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipper_assigned_identification_number' => 'getShipperAssignedIdentificationNumber',
        'company_name' => 'getCompanyName',
        'attention_name' => 'getAttentionName',
        'phone_number' => 'getPhoneNumber',
        'tax_identification_number' => 'getTaxIdentificationNumber',
        'fax_number' => 'getFaxNumber',
        'e_mail_address' => 'getEMailAddress',
        'address' => 'getAddress',
        'location_id' => 'getLocationId',
        'receiving_address_name' => 'getReceivingAddressName'
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
        $this->container['shipper_assigned_identification_number'] = isset($data['shipper_assigned_identification_number']) ? $data['shipper_assigned_identification_number'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['attention_name'] = isset($data['attention_name']) ? $data['attention_name'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['tax_identification_number'] = isset($data['tax_identification_number']) ? $data['tax_identification_number'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['e_mail_address'] = isset($data['e_mail_address']) ? $data['e_mail_address'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['receiving_address_name'] = isset($data['receiving_address_name']) ? $data['receiving_address_name'] : null;
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
     * Gets shipper_assigned_identification_number
     *
     * @return string
     */
    public function getShipperAssignedIdentificationNumber()
    {
        return $this->container['shipper_assigned_identification_number'];
    }

    /**
     * Sets shipper_assigned_identification_number
     *
     * @param string $shipper_assigned_identification_number An identification number specified by shipper.
     *
     * @return $this
     */
    public function setShipperAssignedIdentificationNumber($shipper_assigned_identification_number)
    {
        $this->container['shipper_assigned_identification_number'] = $shipper_assigned_identification_number;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Consignee's company name.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets attention_name
     *
     * @return string
     */
    public function getAttentionName()
    {
        return $this->container['attention_name'];
    }

    /**
     * Sets attention_name
     *
     * @param string $attention_name Contact name at the consignee's location.
     *
     * @return $this
     */
    public function setAttentionName($attention_name)
    {
        $this->container['attention_name'] = $attention_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets tax_identification_number
     *
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['tax_identification_number'];
    }

    /**
     * Sets tax_identification_number
     *
     * @param string $tax_identification_number Consignee's Tax Identification Number.
     *
     * @return $this
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets e_mail_address
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->container['e_mail_address'];
    }

    /**
     * Sets e_mail_address
     *
     * @param string $e_mail_address Consignee's email address.
     *
     * @return $this
     */
    public function setEMailAddress($e_mail_address)
    {
        $this->container['e_mail_address'] = $e_mail_address;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \UPS\QuantumView\QuantumView\ShipToAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \UPS\QuantumView\QuantumView\ShipToAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id Location name that the package is shipped to.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets receiving_address_name
     *
     * @return string
     */
    public function getReceivingAddressName()
    {
        return $this->container['receiving_address_name'];
    }

    /**
     * Sets receiving_address_name
     *
     * @param string $receiving_address_name Name of the location where the package is received.
     *
     * @return $this
     */
    public function setReceivingAddressName($receiving_address_name)
    {
        $this->container['receiving_address_name'] = $receiving_address_name;

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
