<?php
/**
 * ShipmentServiceOptionsPreAlertNotification
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
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
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
 * ShipmentServiceOptionsPreAlertNotification Class Doc Comment
 *
 * @category Class
 * @description This container is used for providing Pre-Alert Notifications to the consignee for UPS Exchange movements and Pack &amp; Collect shipments.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentServiceOptionsPreAlertNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentServiceOptions_PreAlertNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'e_mail_message' => '\UPS\Shipping\Shipping\PreAlertNotificationEMailMessage',
        'voice_message' => '\UPS\Shipping\Shipping\PreAlertNotificationVoiceMessage',
        'text_message' => '\UPS\Shipping\Shipping\PreAlertNotificationTextMessage',
        'locale' => '\UPS\Shipping\Shipping\PreAlertNotificationLocale'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'e_mail_message' => null,
        'voice_message' => null,
        'text_message' => null,
        'locale' => null
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
        'e_mail_message' => 'EMailMessage',
        'voice_message' => 'VoiceMessage',
        'text_message' => 'TextMessage',
        'locale' => 'Locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e_mail_message' => 'setEMailMessage',
        'voice_message' => 'setVoiceMessage',
        'text_message' => 'setTextMessage',
        'locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e_mail_message' => 'getEMailMessage',
        'voice_message' => 'getVoiceMessage',
        'text_message' => 'getTextMessage',
        'locale' => 'getLocale'
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
        $this->container['e_mail_message'] = isset($data['e_mail_message']) ? $data['e_mail_message'] : null;
        $this->container['voice_message'] = isset($data['voice_message']) ? $data['voice_message'] : null;
        $this->container['text_message'] = isset($data['text_message']) ? $data['text_message'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
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
     * Gets e_mail_message
     *
     * @return \UPS\Shipping\Shipping\PreAlertNotificationEMailMessage
     */
    public function getEMailMessage()
    {
        return $this->container['e_mail_message'];
    }

    /**
     * Sets e_mail_message
     *
     * @param \UPS\Shipping\Shipping\PreAlertNotificationEMailMessage $e_mail_message e_mail_message
     *
     * @return $this
     */
    public function setEMailMessage($e_mail_message)
    {
        $this->container['e_mail_message'] = $e_mail_message;

        return $this;
    }

    /**
     * Gets voice_message
     *
     * @return \UPS\Shipping\Shipping\PreAlertNotificationVoiceMessage
     */
    public function getVoiceMessage()
    {
        return $this->container['voice_message'];
    }

    /**
     * Sets voice_message
     *
     * @param \UPS\Shipping\Shipping\PreAlertNotificationVoiceMessage $voice_message voice_message
     *
     * @return $this
     */
    public function setVoiceMessage($voice_message)
    {
        $this->container['voice_message'] = $voice_message;

        return $this;
    }

    /**
     * Gets text_message
     *
     * @return \UPS\Shipping\Shipping\PreAlertNotificationTextMessage
     */
    public function getTextMessage()
    {
        return $this->container['text_message'];
    }

    /**
     * Sets text_message
     *
     * @param \UPS\Shipping\Shipping\PreAlertNotificationTextMessage $text_message text_message
     *
     * @return $this
     */
    public function setTextMessage($text_message)
    {
        $this->container['text_message'] = $text_message;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \UPS\Shipping\Shipping\PreAlertNotificationLocale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \UPS\Shipping\Shipping\PreAlertNotificationLocale $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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
