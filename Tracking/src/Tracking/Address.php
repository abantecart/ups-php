<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UPS TrackService API
 *
 * The Track API helps retrieves current status of shipments such as Small Package 1Z, Infonotice, Mail Innovations, FGV, or UPS Freight shipments using the package number or the reference number. The tracking response data typically includes package movements/activities, destination UPS access point information, expected delivery dates/times, etc. Required parameters are the inquiryNumber, transaction ID, and transaction source.<br />The response returns an array of shipment objects containing detailed tracking information and status for the package(s) associated with the inquiryNumber, including current status, activity history, delivery details, package details, and more. For more information on the Track API, please visit the <a href=\"https://developer.ups.com/api/reference/tracking/product-info\" target=\"_blank\" rel=\"noopener noreferrer\">Product Overview</a> page.  **Note:** Data is rolled off after the 120 day retention period and may not be returned in the response after the retention period.  Key Business Values: - **Near real-time tracking information**: Get up-to-date information on the status and location of your shipments, so you can keep your customers informed. - **Proof of Delivery**: Automated proof of delivery updates with signature verification to help prevent fraud and theft. - **Improved cash flow**: Reduce the time it takes to collect payments by tracking shipments and invoices electronically.  # Reference - <a href=\"https://developer.ups.com/api/reference/tracking/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/tracking/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/trackingapi/errors\" target=\"_blank\" rel=\"noopener noreferrer\">Errors</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-003f5ace-291f-4d93-b2a2-6be86eb9961d?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-003f5ace-291f-4d93-b2a2-6be86eb9961d%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\Tracking\Tracking;

use \ArrayAccess;
use \UPS\Tracking\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The container which has the physical address.
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'city' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'state_province' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'city' => null,
        'country' => null,
        'country_code' => null,
        'postal_code' => null,
        'state_province' => null
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'city' => 'city',
        'country' => 'country',
        'country_code' => 'countryCode',
        'postal_code' => 'postalCode',
        'state_province' => 'stateProvince'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'city' => 'setCity',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'state_province' => 'setStateProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'city' => 'getCity',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'state_province' => 'getStateProvince'
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
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_province'] = isset($data['state_province']) ? $data['state_province'] : null;
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
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The physical street address line 1.
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2 The physical street address line 2.
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string $address_line3 The physical street address line 3.
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The physical address city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The physical address country.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The physical address country code.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The physical address postal code.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_province
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string $state_province The physical address state or province.
     *
     * @return $this
     */
    public function setStateProvince($state_province)
    {
        $this->container['state_province'] = $state_province;

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
