<?php
/**
 * LocationSearchCriteriaAccessPointSearch
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Locator
 *
 * The Locator API allows you to find UPS locations - such as drop-off points, retail locations, and UPS access points (third-party retail locations that offer UPS package drop-off, or delivery services). The API provides capabilities to search by location, services offered, program types, and related criteria. You can also retrieve hours of operation, location details, and additional UPS services offered at specific locations. # Reference - <a href=\"https://developer.ups.com/api/reference/locator/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/locator/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/locator/errors\" target=\"_blank\" rel=\"noopener\">Errors</a>  </br><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-8637d9f1-5e40-4a1e-aa95-82376e268638?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-8637d9f1-5e40-4a1e-aa95-82376e268638%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\Locator\Locator;

use \ArrayAccess;
use \UPS\Locator\ObjectSerializer;

/**
 * LocationSearchCriteriaAccessPointSearch Class Doc Comment
 *
 * @category Class
 * @description Applicable for request option 64 only. This contains inclusion and exclusion criteria for address search. It also contains Account Number and Access Point Public ID search elements.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationSearchCriteriaAccessPointSearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocationSearchCriteria_AccessPointSearch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'public_access_point_id' => 'string',
        'access_point_status' => 'string',
        'account_number' => 'string',
        'include_criteria' => '\UPS\Locator\Locator\AccessPointSearchIncludeCriteria',
        'exclude_from_result' => '\UPS\Locator\Locator\AccessPointSearchExcludeFromResult',
        'exact_match_indicator' => 'string',
        'exist_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'public_access_point_id' => null,
        'access_point_status' => null,
        'account_number' => null,
        'include_criteria' => null,
        'exclude_from_result' => null,
        'exact_match_indicator' => null,
        'exist_indicator' => null
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
        'public_access_point_id' => 'PublicAccessPointID',
        'access_point_status' => 'AccessPointStatus',
        'account_number' => 'AccountNumber',
        'include_criteria' => 'IncludeCriteria',
        'exclude_from_result' => 'ExcludeFromResult',
        'exact_match_indicator' => 'ExactMatchIndicator',
        'exist_indicator' => 'ExistIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_access_point_id' => 'setPublicAccessPointId',
        'access_point_status' => 'setAccessPointStatus',
        'account_number' => 'setAccountNumber',
        'include_criteria' => 'setIncludeCriteria',
        'exclude_from_result' => 'setExcludeFromResult',
        'exact_match_indicator' => 'setExactMatchIndicator',
        'exist_indicator' => 'setExistIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_access_point_id' => 'getPublicAccessPointId',
        'access_point_status' => 'getAccessPointStatus',
        'account_number' => 'getAccountNumber',
        'include_criteria' => 'getIncludeCriteria',
        'exclude_from_result' => 'getExcludeFromResult',
        'exact_match_indicator' => 'getExactMatchIndicator',
        'exist_indicator' => 'getExistIndicator'
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
        $this->container['public_access_point_id'] = isset($data['public_access_point_id']) ? $data['public_access_point_id'] : null;
        $this->container['access_point_status'] = isset($data['access_point_status']) ? $data['access_point_status'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['include_criteria'] = isset($data['include_criteria']) ? $data['include_criteria'] : null;
        $this->container['exclude_from_result'] = isset($data['exclude_from_result']) ? $data['exclude_from_result'] : null;
        $this->container['exact_match_indicator'] = isset($data['exact_match_indicator']) ? $data['exact_match_indicator'] : null;
        $this->container['exist_indicator'] = isset($data['exist_indicator']) ? $data['exist_indicator'] : null;
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
     * Gets public_access_point_id
     *
     * @return string
     */
    public function getPublicAccessPointId()
    {
        return $this->container['public_access_point_id'];
    }

    /**
     * Sets public_access_point_id
     *
     * @param string $public_access_point_id The Public Access Point ID to use for UPS Access Point Search. Once this parameter is present , address or geocode search is ignored. It cannot be combined with AccountNumber search parameter.
     *
     * @return $this
     */
    public function setPublicAccessPointId($public_access_point_id)
    {
        $this->container['public_access_point_id'] = $public_access_point_id;

        return $this;
    }

    /**
     * Gets access_point_status
     *
     * @return string
     */
    public function getAccessPointStatus()
    {
        return $this->container['access_point_status'];
    }

    /**
     * Sets access_point_status
     *
     * @param string $access_point_status Status of UPS Access Point. Valid values are:  01-Active-available 07-Active-unavailable.
     *
     * @return $this
     */
    public function setAccessPointStatus($access_point_status)
    {
        $this->container['access_point_status'] = $access_point_status;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number The account number to use for UPS Access Point Search in the country or territory. Used to locate a private network for the account. Once this parameter is present any access point address or geocode search is ignored. It cannot be combined with PublicAccessPointID search parameter.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets include_criteria
     *
     * @return \UPS\Locator\Locator\AccessPointSearchIncludeCriteria
     */
    public function getIncludeCriteria()
    {
        return $this->container['include_criteria'];
    }

    /**
     * Sets include_criteria
     *
     * @param \UPS\Locator\Locator\AccessPointSearchIncludeCriteria $include_criteria include_criteria
     *
     * @return $this
     */
    public function setIncludeCriteria($include_criteria)
    {
        $this->container['include_criteria'] = $include_criteria;

        return $this;
    }

    /**
     * Gets exclude_from_result
     *
     * @return \UPS\Locator\Locator\AccessPointSearchExcludeFromResult
     */
    public function getExcludeFromResult()
    {
        return $this->container['exclude_from_result'];
    }

    /**
     * Sets exclude_from_result
     *
     * @param \UPS\Locator\Locator\AccessPointSearchExcludeFromResult $exclude_from_result exclude_from_result
     *
     * @return $this
     */
    public function setExcludeFromResult($exclude_from_result)
    {
        $this->container['exclude_from_result'] = $exclude_from_result;

        return $this;
    }

    /**
     * Gets exact_match_indicator
     *
     * @return string
     */
    public function getExactMatchIndicator()
    {
        return $this->container['exact_match_indicator'];
    }

    /**
     * Sets exact_match_indicator
     *
     * @param string $exact_match_indicator Presence of this tag represents that \"AccessPointSearchByAddress\" service is requested. The value of this tag is ignored.
     *
     * @return $this
     */
    public function setExactMatchIndicator($exact_match_indicator)
    {
        $this->container['exact_match_indicator'] = $exact_match_indicator;

        return $this;
    }

    /**
     * Gets exist_indicator
     *
     * @return string
     */
    public function getExistIndicator()
    {
        return $this->container['exist_indicator'];
    }

    /**
     * Sets exist_indicator
     *
     * @param string $exist_indicator Presence of this tag represents that \"AccessPointAvailability\" service is requested. The value of this tag is ignored.
     *
     * @return $this
     */
    public function setExistIndicator($exist_indicator)
    {
        $this->container['exist_indicator'] = $exist_indicator;

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
