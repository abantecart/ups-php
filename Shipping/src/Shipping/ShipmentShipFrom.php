<?php
/**
 * ShipmentShipFrom
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ship
 *
 * The Shipping Package API gives the application many ways to manage the shipment of packages to their destination. # Reference - <a href=\"https://developer.ups.com/api/reference/shipping/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/shipping/appendix1\" target=\"_blank\" rel=\"noopener\">Appendix 1</a> - <a href=\"https://developer.ups.com/api/reference/shipping/appendix2\" target=\"_blank\" rel=\"noopener\">Appendix 2</a> - <a href=\"https://developer.ups.com/api/reference/shipping/errors\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/shipping/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a> - <a href=\"https://developer.ups.com/api/reference/shipping/best-practices\" target=\"_blank\" rel=\"noopener noreferrer\"> Best Practices</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-af2f70b3-405b-4aee-af8d-1eb715e4cebc?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-af2f70b3-405b-4aee-af8d-1eb715e4cebc%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\Shipping\Shipping;

use \ArrayAccess;
use \UPS\Shipping\ObjectSerializer;

/**
 * ShipmentShipFrom Class Doc Comment
 *
 * @category Class
 * @description Ship From Container.  Required for return shipment.   Required if pickup location is different from the shipper&#x27;s address.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentShipFrom implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_ShipFrom';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'attention_name' => 'string',
        'company_displayable_name' => 'string',
        'tax_identification_number' => 'string',
        'tax_id_type' => '\UPS\Shipping\Shipping\ShipFromTaxIDType',
        'phone' => '\UPS\Shipping\Shipping\ShipFromPhone',
        'fax_number' => 'string',
        'address' => '\UPS\Shipping\Shipping\ShipFromAddress',
        'vendor_info' => '\UPS\Shipping\Shipping\ShipFromVendorInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'attention_name' => null,
        'company_displayable_name' => null,
        'tax_identification_number' => null,
        'tax_id_type' => null,
        'phone' => null,
        'fax_number' => null,
        'address' => null,
        'vendor_info' => null
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
        'name' => 'Name',
        'attention_name' => 'AttentionName',
        'company_displayable_name' => 'CompanyDisplayableName',
        'tax_identification_number' => 'TaxIdentificationNumber',
        'tax_id_type' => 'TaxIDType',
        'phone' => 'Phone',
        'fax_number' => 'FaxNumber',
        'address' => 'Address',
        'vendor_info' => 'VendorInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'attention_name' => 'setAttentionName',
        'company_displayable_name' => 'setCompanyDisplayableName',
        'tax_identification_number' => 'setTaxIdentificationNumber',
        'tax_id_type' => 'setTaxIdType',
        'phone' => 'setPhone',
        'fax_number' => 'setFaxNumber',
        'address' => 'setAddress',
        'vendor_info' => 'setVendorInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'attention_name' => 'getAttentionName',
        'company_displayable_name' => 'getCompanyDisplayableName',
        'tax_identification_number' => 'getTaxIdentificationNumber',
        'tax_id_type' => 'getTaxIdType',
        'phone' => 'getPhone',
        'fax_number' => 'getFaxNumber',
        'address' => 'getAddress',
        'vendor_info' => 'getVendorInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attention_name'] = isset($data['attention_name']) ? $data['attention_name'] : null;
        $this->container['company_displayable_name'] = isset($data['company_displayable_name']) ? $data['company_displayable_name'] : null;
        $this->container['tax_identification_number'] = isset($data['tax_identification_number']) ? $data['tax_identification_number'] : null;
        $this->container['tax_id_type'] = isset($data['tax_id_type']) ? $data['tax_id_type'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['vendor_info'] = isset($data['vendor_info']) ? $data['vendor_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The ship from location's name or company name.  35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $attention_name The ship from Attention name.  35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
     *
     * @return $this
     */
    public function setAttentionName($attention_name)
    {
        $this->container['attention_name'] = $attention_name;

        return $this;
    }

    /**
     * Gets company_displayable_name
     *
     * @return string
     */
    public function getCompanyDisplayableName()
    {
        return $this->container['company_displayable_name'];
    }

    /**
     * Sets company_displayable_name
     *
     * @param string $company_displayable_name Not applicable for ShipFrom.
     *
     * @return $this
     */
    public function setCompanyDisplayableName($company_displayable_name)
    {
        $this->container['company_displayable_name'] = $company_displayable_name;

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
     * @param string $tax_identification_number Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested.  Applies to EEI Form only. This element has been deprecated, replacement can be found in the GlobalTaxInformation container.
     *
     * @return $this
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets tax_id_type
     *
     * @return \UPS\Shipping\Shipping\ShipFromTaxIDType
     */
    public function getTaxIdType()
    {
        return $this->container['tax_id_type'];
    }

    /**
     * Sets tax_id_type
     *
     * @param \UPS\Shipping\Shipping\ShipFromTaxIDType $tax_id_type tax_id_type
     *
     * @return $this
     */
    public function setTaxIdType($tax_id_type)
    {
        $this->container['tax_id_type'] = $tax_id_type;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \UPS\Shipping\Shipping\ShipFromPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \UPS\Shipping\Shipping\ShipFromPhone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * @param string $fax_number The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \UPS\Shipping\Shipping\ShipFromAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \UPS\Shipping\Shipping\ShipFromAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets vendor_info
     *
     * @return \UPS\Shipping\Shipping\ShipFromVendorInfo
     */
    public function getVendorInfo()
    {
        return $this->container['vendor_info'];
    }

    /**
     * Sets vendor_info
     *
     * @param \UPS\Shipping\Shipping\ShipFromVendorInfo $vendor_info vendor_info
     *
     * @return $this
     */
    public function setVendorInfo($vendor_info)
    {
        $this->container['vendor_info'] = $vendor_info;

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
