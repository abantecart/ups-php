<?php
/**
 * XAVResponseCandidate
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\AddressValidation
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Address Validation - Street Level
 *
 * The Address Validation Street Level API can be used to. check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico. # Reference - <a href=\"https://developer.ups.com/api/reference/addressvalidation/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/addressvalidation/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/addressvalidation/errors\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/addressvalidation/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-f2cd7176-bd05-48ea-bb72-b359a11cff09?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-f2cd7176-bd05-48ea-bb72-b359a11cff09%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\AddressValidation\AddressValidation;

use \ArrayAccess;
use \UPS\AddressValidation\ObjectSerializer;

/**
 * XAVResponseCandidate Class Doc Comment
 *
 * @category Class
 * @package  UPS\AddressValidation
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XAVResponseCandidate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XAVResponse_Candidate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_classification' => '\UPS\AddressValidation\AddressValidation\CandidateAddressClassification',
        'address_key_format' => '\UPS\AddressValidation\AddressValidation\CandidateAddressKeyFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_classification' => null,
        'address_key_format' => null
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
        'address_classification' => 'AddressClassification',
        'address_key_format' => 'AddressKeyFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_classification' => 'setAddressClassification',
        'address_key_format' => 'setAddressKeyFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_classification' => 'getAddressClassification',
        'address_key_format' => 'getAddressKeyFormat'
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
        $this->container['address_classification'] = isset($data['address_classification']) ? $data['address_classification'] : null;
        $this->container['address_key_format'] = isset($data['address_key_format']) ? $data['address_key_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_key_format'] === null) {
            $invalidProperties[] = "'address_key_format' can't be null";
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
     * Gets address_classification
     *
     * @return \UPS\AddressValidation\AddressValidation\CandidateAddressClassification
     */
    public function getAddressClassification()
    {
        return $this->container['address_classification'];
    }

    /**
     * Sets address_classification
     *
     * @param \UPS\AddressValidation\AddressValidation\CandidateAddressClassification $address_classification address_classification
     *
     * @return $this
     */
    public function setAddressClassification($address_classification)
    {
        $this->container['address_classification'] = $address_classification;

        return $this;
    }

    /**
     * Gets address_key_format
     *
     * @return \UPS\AddressValidation\AddressValidation\CandidateAddressKeyFormat
     */
    public function getAddressKeyFormat()
    {
        return $this->container['address_key_format'];
    }

    /**
     * Sets address_key_format
     *
     * @param \UPS\AddressValidation\AddressValidation\CandidateAddressKeyFormat $address_key_format address_key_format
     *
     * @return $this
     */
    public function setAddressKeyFormat($address_key_format)
    {
        $this->container['address_key_format'] = $address_key_format;

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
