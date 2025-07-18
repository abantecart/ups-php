<?php
/**
 * ShipmentShipTo
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
 * ShipmentShipTo Class Doc Comment
 *
 * @category Class
 * @description Ship To Container.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentShipTo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_ShipTo';

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
        'phone' => '\UPS\Shipping\Shipping\ShipToPhone',
        'fax_number' => 'string',
        'e_mail_address' => 'string',
        'address' => '\UPS\Shipping\Shipping\ShipToAddress',
        'location_id' => 'string'
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
        'phone' => null,
        'fax_number' => null,
        'e_mail_address' => null,
        'address' => null,
        'location_id' => null
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
        'phone' => 'Phone',
        'fax_number' => 'FaxNumber',
        'e_mail_address' => 'EMailAddress',
        'address' => 'Address',
        'location_id' => 'LocationID'
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
        'phone' => 'setPhone',
        'fax_number' => 'setFaxNumber',
        'e_mail_address' => 'setEMailAddress',
        'address' => 'setAddress',
        'location_id' => 'setLocationId'
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
        'phone' => 'getPhone',
        'fax_number' => 'getFaxNumber',
        'e_mail_address' => 'getEMailAddress',
        'address' => 'getAddress',
        'location_id' => 'getLocationId'
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
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['e_mail_address'] = isset($data['e_mail_address']) ? $data['e_mail_address'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
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
     * @param string $name Consignee's company name.  All other accounts must be either a daily pickup account or an occasional account.
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
     * @param string $attention_name Contact name at the consignee's location.  Required for: UPS Next Day Air® Early service, and when ShipTo country or territory is different than ShipFrom country or territory.  Required if Invoice International form is requested.
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
     * @param string $company_displayable_name Not applicable for ShipTo
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
     * @param string $tax_identification_number Consignee's tax identification number. This element has been deprecated, replacement can be found in the GlobalTaxInformation container.
     *
     * @return $this
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \UPS\Shipping\Shipping\ShipToPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \UPS\Shipping\Shipping\ShipToPhone $phone phone
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
     * @param string $fax_number Consignee's fax number.  If ShipTo country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
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
     * @return \UPS\Shipping\Shipping\ShipToAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \UPS\Shipping\Shipping\ShipToAddress $address address
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
     * @param string $location_id Location ID is a unique identifier referring to a specific shipping/receiving location.  Location ID must be alphanumeric characters. All letters must be capitalized.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
