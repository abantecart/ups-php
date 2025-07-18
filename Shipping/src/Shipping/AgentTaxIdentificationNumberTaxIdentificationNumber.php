<?php
/**
 * AgentTaxIdentificationNumberTaxIdentificationNumber
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
 * AgentTaxIdentificationNumberTaxIdentificationNumber Class Doc Comment
 *
 * @category Class
 * @description The value for flexibility and future extensibility of these Identification Numberrequirements,the recommendation is to support up to eight Identification Numbers per shipment party/role.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentTaxIdentificationNumberTaxIdentificationNumber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentTaxIdentificationNumber_TaxIdentificationNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identification_number' => 'string',
        'id_number_customer_role' => 'string',
        'id_number_encryption_indicator' => 'string',
        'id_number_issuing_cntry_cd' => 'string',
        'id_number_purpose_code' => 'string',
        'id_number_requesting_cntry_cd' => 'string',
        'id_number_type_code' => 'string',
        'id_number_sub_type_code' => 'string',
        'include_id_number_on_shipping_brokerage_docs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identification_number' => null,
        'id_number_customer_role' => null,
        'id_number_encryption_indicator' => null,
        'id_number_issuing_cntry_cd' => null,
        'id_number_purpose_code' => null,
        'id_number_requesting_cntry_cd' => null,
        'id_number_type_code' => null,
        'id_number_sub_type_code' => null,
        'include_id_number_on_shipping_brokerage_docs' => null
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
        'identification_number' => 'IdentificationNumber',
        'id_number_customer_role' => 'IDNumberCustomerRole',
        'id_number_encryption_indicator' => 'IDNumberEncryptionIndicator',
        'id_number_issuing_cntry_cd' => 'IDNumberIssuingCntryCd',
        'id_number_purpose_code' => 'IDNumberPurposeCode',
        'id_number_requesting_cntry_cd' => 'IDNumberRequestingCntryCd',
        'id_number_type_code' => 'IDNumberTypeCode',
        'id_number_sub_type_code' => 'IDNumberSubTypeCode',
        'include_id_number_on_shipping_brokerage_docs' => 'IncludeIDNumberOnShippingBrokerageDocs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identification_number' => 'setIdentificationNumber',
        'id_number_customer_role' => 'setIdNumberCustomerRole',
        'id_number_encryption_indicator' => 'setIdNumberEncryptionIndicator',
        'id_number_issuing_cntry_cd' => 'setIdNumberIssuingCntryCd',
        'id_number_purpose_code' => 'setIdNumberPurposeCode',
        'id_number_requesting_cntry_cd' => 'setIdNumberRequestingCntryCd',
        'id_number_type_code' => 'setIdNumberTypeCode',
        'id_number_sub_type_code' => 'setIdNumberSubTypeCode',
        'include_id_number_on_shipping_brokerage_docs' => 'setIncludeIdNumberOnShippingBrokerageDocs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identification_number' => 'getIdentificationNumber',
        'id_number_customer_role' => 'getIdNumberCustomerRole',
        'id_number_encryption_indicator' => 'getIdNumberEncryptionIndicator',
        'id_number_issuing_cntry_cd' => 'getIdNumberIssuingCntryCd',
        'id_number_purpose_code' => 'getIdNumberPurposeCode',
        'id_number_requesting_cntry_cd' => 'getIdNumberRequestingCntryCd',
        'id_number_type_code' => 'getIdNumberTypeCode',
        'id_number_sub_type_code' => 'getIdNumberSubTypeCode',
        'include_id_number_on_shipping_brokerage_docs' => 'getIncludeIdNumberOnShippingBrokerageDocs'
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
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['id_number_customer_role'] = isset($data['id_number_customer_role']) ? $data['id_number_customer_role'] : null;
        $this->container['id_number_encryption_indicator'] = isset($data['id_number_encryption_indicator']) ? $data['id_number_encryption_indicator'] : null;
        $this->container['id_number_issuing_cntry_cd'] = isset($data['id_number_issuing_cntry_cd']) ? $data['id_number_issuing_cntry_cd'] : null;
        $this->container['id_number_purpose_code'] = isset($data['id_number_purpose_code']) ? $data['id_number_purpose_code'] : null;
        $this->container['id_number_requesting_cntry_cd'] = isset($data['id_number_requesting_cntry_cd']) ? $data['id_number_requesting_cntry_cd'] : null;
        $this->container['id_number_type_code'] = isset($data['id_number_type_code']) ? $data['id_number_type_code'] : null;
        $this->container['id_number_sub_type_code'] = isset($data['id_number_sub_type_code']) ? $data['id_number_sub_type_code'] : null;
        $this->container['include_id_number_on_shipping_brokerage_docs'] = isset($data['include_id_number_on_shipping_brokerage_docs']) ? $data['include_id_number_on_shipping_brokerage_docs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identification_number'] === null) {
            $invalidProperties[] = "'identification_number' can't be null";
        }
        if ($this->container['id_number_encryption_indicator'] === null) {
            $invalidProperties[] = "'id_number_encryption_indicator' can't be null";
        }
        if ($this->container['id_number_purpose_code'] === null) {
            $invalidProperties[] = "'id_number_purpose_code' can't be null";
        }
        if ($this->container['id_number_type_code'] === null) {
            $invalidProperties[] = "'id_number_type_code' can't be null";
        }
        if ($this->container['id_number_sub_type_code'] === null) {
            $invalidProperties[] = "'id_number_sub_type_code' can't be null";
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
     * Gets identification_number
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->container['identification_number'];
    }

    /**
     * Sets identification_number
     *
     * @param string $identification_number The code or number that a shipper or consignee has registered with a particular country’s authority for doing business, or for identification purposes.
     *
     * @return $this
     */
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;

        return $this;
    }

    /**
     * Gets id_number_customer_role
     *
     * @return string
     */
    public function getIdNumberCustomerRole()
    {
        return $this->container['id_number_customer_role'];
    }

    /**
     * Sets id_number_customer_role
     *
     * @param string $id_number_customer_role A business or individual identification type description (Future Use).specifies the relationship of the customer/ID Number to the shipment  05 =importer Address, 06=Exporter Address  , 18=DeliverTo/Consignee/Reciever Address,  37= Shipper Address.
     *
     * @return $this
     */
    public function setIdNumberCustomerRole($id_number_customer_role)
    {
        $this->container['id_number_customer_role'] = $id_number_customer_role;

        return $this;
    }

    /**
     * Gets id_number_encryption_indicator
     *
     * @return string
     */
    public function getIdNumberEncryptionIndicator()
    {
        return $this->container['id_number_encryption_indicator'];
    }

    /**
     * Sets id_number_encryption_indicator
     *
     * @param string $id_number_encryption_indicator to determine if decryption is required. 0 = Identification number is not  Encrypted 1 = Identification number is  Encrypted
     *
     * @return $this
     */
    public function setIdNumberEncryptionIndicator($id_number_encryption_indicator)
    {
        $this->container['id_number_encryption_indicator'] = $id_number_encryption_indicator;

        return $this;
    }

    /**
     * Gets id_number_issuing_cntry_cd
     *
     * @return string
     */
    public function getIdNumberIssuingCntryCd()
    {
        return $this->container['id_number_issuing_cntry_cd'];
    }

    /**
     * Sets id_number_issuing_cntry_cd
     *
     * @param string $id_number_issuing_cntry_cd The ISO-defined country code of the country where the Identification Number was issued, when applicable (as per business requirements). Needed for certain types of Identification Numbers (e.g., Passport Number). Sample Values: 'ID' = Indonesia, 'VN' = Vietnam, 'DE' = Germany
     *
     * @return $this
     */
    public function setIdNumberIssuingCntryCd($id_number_issuing_cntry_cd)
    {
        $this->container['id_number_issuing_cntry_cd'] = $id_number_issuing_cntry_cd;

        return $this;
    }

    /**
     * Gets id_number_purpose_code
     *
     * @return string
     */
    public function getIdNumberPurposeCode()
    {
        return $this->container['id_number_purpose_code'];
    }

    /**
     * Sets id_number_purpose_code
     *
     * @param string $id_number_purpose_code Code that specifies the purpose of the Identification Number. For all tax ID that are not EORI = ‘01’ Valid values: 00/ Spaces = Unknown 01= Customs/Brokerage (Default) 02= Customs/Brokerage EORI 99= Other
     *
     * @return $this
     */
    public function setIdNumberPurposeCode($id_number_purpose_code)
    {
        $this->container['id_number_purpose_code'] = $id_number_purpose_code;

        return $this;
    }

    /**
     * Gets id_number_requesting_cntry_cd
     *
     * @return string
     */
    public function getIdNumberRequestingCntryCd()
    {
        return $this->container['id_number_requesting_cntry_cd'];
    }

    /**
     * Sets id_number_requesting_cntry_cd
     *
     * @param string $id_number_requesting_cntry_cd The ISO-defined country code of the country whose regulatory agency is requesting the Identification Number. Typically for Import, the Consignee ID is requested by the Ship To country For export, the Shipper ID is requested by the Ship From country.  Required when a country (e.g., Origin country, Destination country) is requesting an ID Number for a shipment.
     *
     * @return $this
     */
    public function setIdNumberRequestingCntryCd($id_number_requesting_cntry_cd)
    {
        $this->container['id_number_requesting_cntry_cd'] = $id_number_requesting_cntry_cd;

        return $this;
    }

    /**
     * Gets id_number_type_code
     *
     * @return string
     */
    public function getIdNumberTypeCode()
    {
        return $this->container['id_number_type_code'];
    }

    /**
     * Sets id_number_type_code
     *
     * @param string $id_number_type_code Valid Values are: 0000 = Unknown IDNumberTypeCode equal to ‘0000’ (unknown) is to be used when an ‘ID Number Type’ is not applicable, or when the front-end/client system cannot determine the type of IdentificationNumber (for any reason). 0001 = Exporter Tax ID Number 0002 = Importer Tax ID Number or EORI Number – When IdentificationNumberPurposeCode = 02 0005 = Personal Tax ID Number 1001 = Other / Free Form 1002 = Company/Business Tax ID Number 1003 = National ID Number 1004 = Passport Number 1005 = Personal ID Number 1006 = Phone Number
     *
     * @return $this
     */
    public function setIdNumberTypeCode($id_number_type_code)
    {
        $this->container['id_number_type_code'] = $id_number_type_code;

        return $this;
    }

    /**
     * Gets id_number_sub_type_code
     *
     * @return string
     */
    public function getIdNumberSubTypeCode()
    {
        return $this->container['id_number_sub_type_code'];
    }

    /**
     * Sets id_number_sub_type_code
     *
     * @param string $id_number_sub_type_code Combination of IDnumberCode and IDNumberSubTypeCode were used to form the correct regex for processing
     *
     * @return $this
     */
    public function setIdNumberSubTypeCode($id_number_sub_type_code)
    {
        $this->container['id_number_sub_type_code'] = $id_number_sub_type_code;

        return $this;
    }

    /**
     * Gets include_id_number_on_shipping_brokerage_docs
     *
     * @return string
     */
    public function getIncludeIdNumberOnShippingBrokerageDocs()
    {
        return $this->container['include_id_number_on_shipping_brokerage_docs'];
    }

    /**
     * Sets include_id_number_on_shipping_brokerage_docs
     *
     * @param string $include_id_number_on_shipping_brokerage_docs field to determine if the Identification Number should be excluded from Shipping/Brokerage documents (not be passed to Document Services)  ‘00’ -> Do Not include 01-> Include.
     *
     * @return $this
     */
    public function setIncludeIdNumberOnShippingBrokerageDocs($include_id_number_on_shipping_brokerage_docs)
    {
        $this->container['include_id_number_on_shipping_brokerage_docs'] = $include_id_number_on_shipping_brokerage_docs;

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
