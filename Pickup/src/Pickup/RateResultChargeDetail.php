<?php
/**
 * RateResultChargeDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pickup
 *
 * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups. # Reference - <a href=\"https://developer.ups.com/api/reference/pickup/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/pickup/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/pickup/errors\" target=\"_blank\" rel=\"noopener\">Errors</a>  </br><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-d7dd9c32-e6de-47ec-9a91-35312b92931e?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-d7dd9c32-e6de-47ec-9a91-35312b92931e%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\Pickup\Pickup;

use \ArrayAccess;
use \UPS\Pickup\ObjectSerializer;

/**
 * RateResultChargeDetail Class Doc Comment
 *
 * @category Class
 * @description Detailed charges.
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateResultChargeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateResult_ChargeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_code' => 'string',
        'charge_description' => 'string',
        'charge_amount' => 'string',
        'incented_amount' => 'string',
        'tax_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_code' => null,
        'charge_description' => null,
        'charge_amount' => null,
        'incented_amount' => null,
        'tax_amount' => null
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
        'charge_code' => 'ChargeCode',
        'charge_description' => 'ChargeDescription',
        'charge_amount' => 'ChargeAmount',
        'incented_amount' => 'IncentedAmount',
        'tax_amount' => 'TaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_code' => 'setChargeCode',
        'charge_description' => 'setChargeDescription',
        'charge_amount' => 'setChargeAmount',
        'incented_amount' => 'setIncentedAmount',
        'tax_amount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_code' => 'getChargeCode',
        'charge_description' => 'getChargeDescription',
        'charge_amount' => 'getChargeAmount',
        'incented_amount' => 'getIncentedAmount',
        'tax_amount' => 'getTaxAmount'
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
        $this->container['charge_code'] = isset($data['charge_code']) ? $data['charge_code'] : null;
        $this->container['charge_description'] = isset($data['charge_description']) ? $data['charge_description'] : null;
        $this->container['charge_amount'] = isset($data['charge_amount']) ? $data['charge_amount'] : null;
        $this->container['incented_amount'] = isset($data['incented_amount']) ? $data['incented_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['charge_code'] === null) {
            $invalidProperties[] = "'charge_code' can't be null";
        }
        if ($this->container['charge_amount'] === null) {
            $invalidProperties[] = "'charge_amount' can't be null";
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
     * Gets charge_code
     *
     * @return string
     */
    public function getChargeCode()
    {
        return $this->container['charge_code'];
    }

    /**
     * Sets charge_code
     *
     * @param string $charge_code Indicates the general charge type - A = ACCESSORIAL TYPE - B = BASE CHARGE TYPE - S = SURCHARGE TYPE
     *
     * @return $this
     */
    public function setChargeCode($charge_code)
    {
        $this->container['charge_code'] = $charge_code;

        return $this;
    }

    /**
     * Gets charge_description
     *
     * @return string
     */
    public function getChargeDescription()
    {
        return $this->container['charge_description'];
    }

    /**
     * Sets charge_description
     *
     * @param string $charge_description Description of each charge.The possible descriptions are: - BASE CHARGE - EXTENDED AREA SURCHARGE - FUEL SURCHARGE - REMOTE AREA SURCHARGE - RESIDENTIAL SURCHARGE - SATURDAY ON-CALL STOP CHARGE
     *
     * @return $this
     */
    public function setChargeDescription($charge_description)
    {
        $this->container['charge_description'] = $charge_description;

        return $this;
    }

    /**
     * Gets charge_amount
     *
     * @return string
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param string $charge_amount Monetary value of the charge.
     *
     * @return $this
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }

    /**
     * Gets incented_amount
     *
     * @return string
     */
    public function getIncentedAmount()
    {
        return $this->container['incented_amount'];
    }

    /**
     * Sets incented_amount
     *
     * @param string $incented_amount Monetary value of the incented charge. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @return $this
     */
    public function setIncentedAmount($incented_amount)
    {
        $this->container['incented_amount'] = $incented_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string $tax_amount Monetary value of the tax if apply.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
