<?php
/**
 * PackageResultsForm
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
 * PackageResultsForm Class Doc Comment
 *
 * @category Class
 * @description Container tag for the International forms image.  Currently this container would be returned for UPS Premium Care shipments. Form is returned for following shipments - Forward shipments, Shipments with PRL ReturnService, Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. CN22 data for Worlwide economy services will be returned within the PDF417 barcode of the label.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageResultsForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageResults_Form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'description' => 'string',
        'image' => '\UPS\Shipping\Shipping\FormImage',
        'form_group_id' => 'string',
        'form_group_id_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'description' => null,
        'image' => null,
        'form_group_id' => null,
        'form_group_id_name' => null
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
        'code' => 'Code',
        'description' => 'Description',
        'image' => 'Image',
        'form_group_id' => 'FormGroupId',
        'form_group_id_name' => 'FormGroupIdName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'image' => 'setImage',
        'form_group_id' => 'setFormGroupId',
        'form_group_id_name' => 'setFormGroupIdName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'image' => 'getImage',
        'form_group_id' => 'getFormGroupId',
        'form_group_id_name' => 'getFormGroupIdName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['form_group_id'] = isset($data['form_group_id']) ? $data['form_group_id'] : null;
        $this->container['form_group_id_name'] = isset($data['form_group_id_name']) ? $data['form_group_id_name'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code that indicates the type of form.  Valid values: - 01 - All Requested International Forms.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description that indicates the type of form.  Possible Values: All Requested International Forms.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \UPS\Shipping\Shipping\FormImage
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \UPS\Shipping\Shipping\FormImage $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets form_group_id
     *
     * @return string
     */
    public function getFormGroupId()
    {
        return $this->container['form_group_id'];
    }

    /**
     * Sets form_group_id
     *
     * @param string $form_group_id Unique Id for later retrieval of saved version of the completed international forms.
     *
     * @return $this
     */
    public function setFormGroupId($form_group_id)
    {
        $this->container['form_group_id'] = $form_group_id;

        return $this;
    }

    /**
     * Gets form_group_id_name
     *
     * @return string
     */
    public function getFormGroupIdName()
    {
        return $this->container['form_group_id_name'];
    }

    /**
     * Sets form_group_id_name
     *
     * @param string $form_group_id_name Contains description text which identifies the group of International forms. This element is part of both request and response. This element does not appear on the forms.
     *
     * @return $this
     */
    public function setFormGroupIdName($form_group_id_name)
    {
        $this->container['form_group_id_name'] = $form_group_id_name;

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
