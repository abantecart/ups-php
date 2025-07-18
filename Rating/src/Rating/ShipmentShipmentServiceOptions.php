<?php
/**
 * ShipmentShipmentServiceOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * The Rating API is used when rating or shopping a shipment. # Reference - <a href=\"https://developer.ups.com/api/reference/rating/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/rating/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/rating/error-codes\" target=\"_blank\" rel=\"noopener\">Errors</a> - <a href=\"https://developer.ups.com/api/reference/rating/faq\" target=\"_blank\" rel=\"noopener\">FAQ</a> - <a href=\"https://developer.ups.com/api/reference/rating/best-practices\" target=\"_blank\" rel=\"noopener noreferrer\"> Best Practices</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-ac21ef26-eecf-4841-b0b2-737d615b6809?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-ac21ef26-eecf-4841-b0b2-737d615b6809%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub\" style=\"width: 128px; height: 32px;\"> </a>
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

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * ShipmentShipmentServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Shipment level Accessorials are included in this container.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentShipmentServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_ShipmentServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'global_checkout_indicator' => 'string',
        'saturday_pickup_indicator' => 'string',
        'saturday_delivery_indicator' => 'string',
        'sunday_delivery_indicator' => 'string',
        'available_services_option' => 'string',
        'access_point_cod' => '\UPS\Rating\Rating\ShipmentServiceOptionsAccessPointCOD',
        'deliver_to_addressee_only_indicator' => 'string',
        'direct_delivery_only_indicator' => 'string',
        'cod' => '\UPS\Rating\Rating\ShipmentServiceOptionsCOD',
        'delivery_confirmation' => '\UPS\Rating\Rating\ShipmentServiceOptionsDeliveryConfirmation',
        'return_of_document_indicator' => 'string',
        'up_scarbonneutral_indicator' => 'string',
        'certificate_of_origin_indicator' => 'string',
        'pickup_options' => '\UPS\Rating\Rating\ShipmentServiceOptionsPickupOptions',
        'delivery_options' => '\UPS\Rating\Rating\ShipmentServiceOptionsDeliveryOptions',
        'restricted_articles' => '\UPS\Rating\Rating\ShipmentServiceOptionsRestrictedArticles',
        'shipper_export_declaration_indicator' => 'string',
        'commercial_invoice_removal_indicator' => 'string',
        'import_control' => '\UPS\Rating\Rating\ShipmentServiceOptionsImportControl',
        'return_service' => '\UPS\Rating\Rating\ShipmentServiceOptionsReturnService',
        'sdl_shipment_indicator' => 'string',
        'epra_indicator' => 'string',
        'inside_delivery' => 'string',
        'item_disposal_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'global_checkout_indicator' => null,
        'saturday_pickup_indicator' => null,
        'saturday_delivery_indicator' => null,
        'sunday_delivery_indicator' => null,
        'available_services_option' => null,
        'access_point_cod' => null,
        'deliver_to_addressee_only_indicator' => null,
        'direct_delivery_only_indicator' => null,
        'cod' => null,
        'delivery_confirmation' => null,
        'return_of_document_indicator' => null,
        'up_scarbonneutral_indicator' => null,
        'certificate_of_origin_indicator' => null,
        'pickup_options' => null,
        'delivery_options' => null,
        'restricted_articles' => null,
        'shipper_export_declaration_indicator' => null,
        'commercial_invoice_removal_indicator' => null,
        'import_control' => null,
        'return_service' => null,
        'sdl_shipment_indicator' => null,
        'epra_indicator' => null,
        'inside_delivery' => null,
        'item_disposal_indicator' => null
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
        'global_checkout_indicator' => 'GlobalCheckoutIndicator',
        'saturday_pickup_indicator' => 'SaturdayPickupIndicator',
        'saturday_delivery_indicator' => 'SaturdayDeliveryIndicator',
        'sunday_delivery_indicator' => 'SundayDeliveryIndicator',
        'available_services_option' => 'AvailableServicesOption',
        'access_point_cod' => 'AccessPointCOD',
        'deliver_to_addressee_only_indicator' => 'DeliverToAddresseeOnlyIndicator',
        'direct_delivery_only_indicator' => 'DirectDeliveryOnlyIndicator',
        'cod' => 'COD',
        'delivery_confirmation' => 'DeliveryConfirmation',
        'return_of_document_indicator' => 'ReturnOfDocumentIndicator',
        'up_scarbonneutral_indicator' => 'UPScarbonneutralIndicator',
        'certificate_of_origin_indicator' => 'CertificateOfOriginIndicator',
        'pickup_options' => 'PickupOptions',
        'delivery_options' => 'DeliveryOptions',
        'restricted_articles' => 'RestrictedArticles',
        'shipper_export_declaration_indicator' => 'ShipperExportDeclarationIndicator',
        'commercial_invoice_removal_indicator' => 'CommercialInvoiceRemovalIndicator',
        'import_control' => 'ImportControl',
        'return_service' => 'ReturnService',
        'sdl_shipment_indicator' => 'SDLShipmentIndicator',
        'epra_indicator' => 'EPRAIndicator',
        'inside_delivery' => 'InsideDelivery',
        'item_disposal_indicator' => 'ItemDisposalIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'global_checkout_indicator' => 'setGlobalCheckoutIndicator',
        'saturday_pickup_indicator' => 'setSaturdayPickupIndicator',
        'saturday_delivery_indicator' => 'setSaturdayDeliveryIndicator',
        'sunday_delivery_indicator' => 'setSundayDeliveryIndicator',
        'available_services_option' => 'setAvailableServicesOption',
        'access_point_cod' => 'setAccessPointCod',
        'deliver_to_addressee_only_indicator' => 'setDeliverToAddresseeOnlyIndicator',
        'direct_delivery_only_indicator' => 'setDirectDeliveryOnlyIndicator',
        'cod' => 'setCod',
        'delivery_confirmation' => 'setDeliveryConfirmation',
        'return_of_document_indicator' => 'setReturnOfDocumentIndicator',
        'up_scarbonneutral_indicator' => 'setUpScarbonneutralIndicator',
        'certificate_of_origin_indicator' => 'setCertificateOfOriginIndicator',
        'pickup_options' => 'setPickupOptions',
        'delivery_options' => 'setDeliveryOptions',
        'restricted_articles' => 'setRestrictedArticles',
        'shipper_export_declaration_indicator' => 'setShipperExportDeclarationIndicator',
        'commercial_invoice_removal_indicator' => 'setCommercialInvoiceRemovalIndicator',
        'import_control' => 'setImportControl',
        'return_service' => 'setReturnService',
        'sdl_shipment_indicator' => 'setSdlShipmentIndicator',
        'epra_indicator' => 'setEpraIndicator',
        'inside_delivery' => 'setInsideDelivery',
        'item_disposal_indicator' => 'setItemDisposalIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'global_checkout_indicator' => 'getGlobalCheckoutIndicator',
        'saturday_pickup_indicator' => 'getSaturdayPickupIndicator',
        'saturday_delivery_indicator' => 'getSaturdayDeliveryIndicator',
        'sunday_delivery_indicator' => 'getSundayDeliveryIndicator',
        'available_services_option' => 'getAvailableServicesOption',
        'access_point_cod' => 'getAccessPointCod',
        'deliver_to_addressee_only_indicator' => 'getDeliverToAddresseeOnlyIndicator',
        'direct_delivery_only_indicator' => 'getDirectDeliveryOnlyIndicator',
        'cod' => 'getCod',
        'delivery_confirmation' => 'getDeliveryConfirmation',
        'return_of_document_indicator' => 'getReturnOfDocumentIndicator',
        'up_scarbonneutral_indicator' => 'getUpScarbonneutralIndicator',
        'certificate_of_origin_indicator' => 'getCertificateOfOriginIndicator',
        'pickup_options' => 'getPickupOptions',
        'delivery_options' => 'getDeliveryOptions',
        'restricted_articles' => 'getRestrictedArticles',
        'shipper_export_declaration_indicator' => 'getShipperExportDeclarationIndicator',
        'commercial_invoice_removal_indicator' => 'getCommercialInvoiceRemovalIndicator',
        'import_control' => 'getImportControl',
        'return_service' => 'getReturnService',
        'sdl_shipment_indicator' => 'getSdlShipmentIndicator',
        'epra_indicator' => 'getEpraIndicator',
        'inside_delivery' => 'getInsideDelivery',
        'item_disposal_indicator' => 'getItemDisposalIndicator'
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
        $this->container['global_checkout_indicator'] = isset($data['global_checkout_indicator']) ? $data['global_checkout_indicator'] : null;
        $this->container['saturday_pickup_indicator'] = isset($data['saturday_pickup_indicator']) ? $data['saturday_pickup_indicator'] : null;
        $this->container['saturday_delivery_indicator'] = isset($data['saturday_delivery_indicator']) ? $data['saturday_delivery_indicator'] : null;
        $this->container['sunday_delivery_indicator'] = isset($data['sunday_delivery_indicator']) ? $data['sunday_delivery_indicator'] : null;
        $this->container['available_services_option'] = isset($data['available_services_option']) ? $data['available_services_option'] : null;
        $this->container['access_point_cod'] = isset($data['access_point_cod']) ? $data['access_point_cod'] : null;
        $this->container['deliver_to_addressee_only_indicator'] = isset($data['deliver_to_addressee_only_indicator']) ? $data['deliver_to_addressee_only_indicator'] : null;
        $this->container['direct_delivery_only_indicator'] = isset($data['direct_delivery_only_indicator']) ? $data['direct_delivery_only_indicator'] : null;
        $this->container['cod'] = isset($data['cod']) ? $data['cod'] : null;
        $this->container['delivery_confirmation'] = isset($data['delivery_confirmation']) ? $data['delivery_confirmation'] : null;
        $this->container['return_of_document_indicator'] = isset($data['return_of_document_indicator']) ? $data['return_of_document_indicator'] : null;
        $this->container['up_scarbonneutral_indicator'] = isset($data['up_scarbonneutral_indicator']) ? $data['up_scarbonneutral_indicator'] : null;
        $this->container['certificate_of_origin_indicator'] = isset($data['certificate_of_origin_indicator']) ? $data['certificate_of_origin_indicator'] : null;
        $this->container['pickup_options'] = isset($data['pickup_options']) ? $data['pickup_options'] : null;
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
        $this->container['restricted_articles'] = isset($data['restricted_articles']) ? $data['restricted_articles'] : null;
        $this->container['shipper_export_declaration_indicator'] = isset($data['shipper_export_declaration_indicator']) ? $data['shipper_export_declaration_indicator'] : null;
        $this->container['commercial_invoice_removal_indicator'] = isset($data['commercial_invoice_removal_indicator']) ? $data['commercial_invoice_removal_indicator'] : null;
        $this->container['import_control'] = isset($data['import_control']) ? $data['import_control'] : null;
        $this->container['return_service'] = isset($data['return_service']) ? $data['return_service'] : null;
        $this->container['sdl_shipment_indicator'] = isset($data['sdl_shipment_indicator']) ? $data['sdl_shipment_indicator'] : null;
        $this->container['epra_indicator'] = isset($data['epra_indicator']) ? $data['epra_indicator'] : null;
        $this->container['inside_delivery'] = isset($data['inside_delivery']) ? $data['inside_delivery'] : null;
        $this->container['item_disposal_indicator'] = isset($data['item_disposal_indicator']) ? $data['item_disposal_indicator'] : null;
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
     * Gets global_checkout_indicator
     *
     * @return string
     */
    public function getGlobalCheckoutIndicator()
    {
        return $this->container['global_checkout_indicator'];
    }

    /**
     * Sets global_checkout_indicator
     *
     * @param string $global_checkout_indicator A flag indicating if the shipment requires a GlobalCheckoutIndicator. True if GlobalCheckoutIndicator tag exists; false otherwise  Empty Tag.
     *
     * @return $this
     */
    public function setGlobalCheckoutIndicator($global_checkout_indicator)
    {
        $this->container['global_checkout_indicator'] = $global_checkout_indicator;

        return $this;
    }

    /**
     * Gets saturday_pickup_indicator
     *
     * @return string
     */
    public function getSaturdayPickupIndicator()
    {
        return $this->container['saturday_pickup_indicator'];
    }

    /**
     * Sets saturday_pickup_indicator
     *
     * @param string $saturday_pickup_indicator A flag indicating if the shipment requires a Saturday pickup. True if SaturdayPickupIndicator tag exists; false otherwise. Not available for GFP rating requests.  Empty Tag.
     *
     * @return $this
     */
    public function setSaturdayPickupIndicator($saturday_pickup_indicator)
    {
        $this->container['saturday_pickup_indicator'] = $saturday_pickup_indicator;

        return $this;
    }

    /**
     * Gets saturday_delivery_indicator
     *
     * @return string
     */
    public function getSaturdayDeliveryIndicator()
    {
        return $this->container['saturday_delivery_indicator'];
    }

    /**
     * Sets saturday_delivery_indicator
     *
     * @param string $saturday_delivery_indicator A flag indicating if a shipment must be delivered on a Saturday. True if SaturdayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @return $this
     */
    public function setSaturdayDeliveryIndicator($saturday_delivery_indicator)
    {
        $this->container['saturday_delivery_indicator'] = $saturday_delivery_indicator;

        return $this;
    }

    /**
     * Gets sunday_delivery_indicator
     *
     * @return string
     */
    public function getSundayDeliveryIndicator()
    {
        return $this->container['sunday_delivery_indicator'];
    }

    /**
     * Sets sunday_delivery_indicator
     *
     * @param string $sunday_delivery_indicator A flag indicating if a shipment must be delivered on a Sunday. True if SundayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @return $this
     */
    public function setSundayDeliveryIndicator($sunday_delivery_indicator)
    {
        $this->container['sunday_delivery_indicator'] = $sunday_delivery_indicator;

        return $this;
    }

    /**
     * Gets available_services_option
     *
     * @return string
     */
    public function getAvailableServicesOption()
    {
        return $this->container['available_services_option'];
    }

    /**
     * Sets available_services_option
     *
     * @param string $available_services_option If we need diferent available services in response, this option is used for shop request option. SaturdayDeliveryIndicator/ SundayDeliveryIndicator will be ignored in that case.  Valid Values:1- Weekday+Saturday services2- Weekday+Sunday services3- Weekday+Sat services+Sun services
     *
     * @return $this
     */
    public function setAvailableServicesOption($available_services_option)
    {
        $this->container['available_services_option'] = $available_services_option;

        return $this;
    }

    /**
     * Gets access_point_cod
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsAccessPointCOD
     */
    public function getAccessPointCod()
    {
        return $this->container['access_point_cod'];
    }

    /**
     * Sets access_point_cod
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsAccessPointCOD $access_point_cod access_point_cod
     *
     * @return $this
     */
    public function setAccessPointCod($access_point_cod)
    {
        $this->container['access_point_cod'] = $access_point_cod;

        return $this;
    }

    /**
     * Gets deliver_to_addressee_only_indicator
     *
     * @return string
     */
    public function getDeliverToAddresseeOnlyIndicator()
    {
        return $this->container['deliver_to_addressee_only_indicator'];
    }

    /**
     * Sets deliver_to_addressee_only_indicator
     *
     * @param string $deliver_to_addressee_only_indicator Presence/Absence Indicator. Any value inside is ignored.  DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the \"Hold For PickUp at UPS Access Point\" package.  Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type \"01 - Hold For PickUp at UPS Access Point\".
     *
     * @return $this
     */
    public function setDeliverToAddresseeOnlyIndicator($deliver_to_addressee_only_indicator)
    {
        $this->container['deliver_to_addressee_only_indicator'] = $deliver_to_addressee_only_indicator;

        return $this;
    }

    /**
     * Gets direct_delivery_only_indicator
     *
     * @return string
     */
    public function getDirectDeliveryOnlyIndicator()
    {
        return $this->container['direct_delivery_only_indicator'];
    }

    /**
     * Sets direct_delivery_only_indicator
     *
     * @param string $direct_delivery_only_indicator Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the Ship To address on the shipping label.  This accessorial is not valid with Shipment Indication Types: - 01 - Hold For Pickup At UPS Access Point - 02 - UPS Access Point™ Delivery
     *
     * @return $this
     */
    public function setDirectDeliveryOnlyIndicator($direct_delivery_only_indicator)
    {
        $this->container['direct_delivery_only_indicator'] = $direct_delivery_only_indicator;

        return $this;
    }

    /**
     * Gets cod
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsCOD
     */
    public function getCod()
    {
        return $this->container['cod'];
    }

    /**
     * Sets cod
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsCOD $cod cod
     *
     * @return $this
     */
    public function setCod($cod)
    {
        $this->container['cod'] = $cod;

        return $this;
    }

    /**
     * Gets delivery_confirmation
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsDeliveryConfirmation
     */
    public function getDeliveryConfirmation()
    {
        return $this->container['delivery_confirmation'];
    }

    /**
     * Sets delivery_confirmation
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsDeliveryConfirmation $delivery_confirmation delivery_confirmation
     *
     * @return $this
     */
    public function setDeliveryConfirmation($delivery_confirmation)
    {
        $this->container['delivery_confirmation'] = $delivery_confirmation;

        return $this;
    }

    /**
     * Gets return_of_document_indicator
     *
     * @return string
     */
    public function getReturnOfDocumentIndicator()
    {
        return $this->container['return_of_document_indicator'];
    }

    /**
     * Sets return_of_document_indicator
     *
     * @param string $return_of_document_indicator Return of Documents Indicator - If the flag is present, the shipper has requested the ReturnOfDocument accessorial be added to the shipment  Valid for Poland to Poland shipment.
     *
     * @return $this
     */
    public function setReturnOfDocumentIndicator($return_of_document_indicator)
    {
        $this->container['return_of_document_indicator'] = $return_of_document_indicator;

        return $this;
    }

    /**
     * Gets up_scarbonneutral_indicator
     *
     * @return string
     */
    public function getUpScarbonneutralIndicator()
    {
        return $this->container['up_scarbonneutral_indicator'];
    }

    /**
     * Sets up_scarbonneutral_indicator
     *
     * @param string $up_scarbonneutral_indicator UPS carbon neutral indicator. Indicates the shipment will be rated as carbon neutral.
     *
     * @return $this
     */
    public function setUpScarbonneutralIndicator($up_scarbonneutral_indicator)
    {
        $this->container['up_scarbonneutral_indicator'] = $up_scarbonneutral_indicator;

        return $this;
    }

    /**
     * Gets certificate_of_origin_indicator
     *
     * @return string
     */
    public function getCertificateOfOriginIndicator()
    {
        return $this->container['certificate_of_origin_indicator'];
    }

    /**
     * Sets certificate_of_origin_indicator
     *
     * @param string $certificate_of_origin_indicator The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setCertificateOfOriginIndicator($certificate_of_origin_indicator)
    {
        $this->container['certificate_of_origin_indicator'] = $certificate_of_origin_indicator;

        return $this;
    }

    /**
     * Gets pickup_options
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsPickupOptions
     */
    public function getPickupOptions()
    {
        return $this->container['pickup_options'];
    }

    /**
     * Sets pickup_options
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsPickupOptions $pickup_options pickup_options
     *
     * @return $this
     */
    public function setPickupOptions($pickup_options)
    {
        $this->container['pickup_options'] = $pickup_options;

        return $this;
    }

    /**
     * Gets delivery_options
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsDeliveryOptions
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsDeliveryOptions $delivery_options delivery_options
     *
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

        return $this;
    }

    /**
     * Gets restricted_articles
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsRestrictedArticles
     */
    public function getRestrictedArticles()
    {
        return $this->container['restricted_articles'];
    }

    /**
     * Sets restricted_articles
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsRestrictedArticles $restricted_articles restricted_articles
     *
     * @return $this
     */
    public function setRestrictedArticles($restricted_articles)
    {
        $this->container['restricted_articles'] = $restricted_articles;

        return $this;
    }

    /**
     * Gets shipper_export_declaration_indicator
     *
     * @return string
     */
    public function getShipperExportDeclarationIndicator()
    {
        return $this->container['shipper_export_declaration_indicator'];
    }

    /**
     * Sets shipper_export_declaration_indicator
     *
     * @param string $shipper_export_declaration_indicator The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setShipperExportDeclarationIndicator($shipper_export_declaration_indicator)
    {
        $this->container['shipper_export_declaration_indicator'] = $shipper_export_declaration_indicator;

        return $this;
    }

    /**
     * Gets commercial_invoice_removal_indicator
     *
     * @return string
     */
    public function getCommercialInvoiceRemovalIndicator()
    {
        return $this->container['commercial_invoice_removal_indicator'];
    }

    /**
     * Sets commercial_invoice_removal_indicator
     *
     * @param string $commercial_invoice_removal_indicator Presence/Absence Indicator. Any value inside is ignored. CommercialInvoiceRemovalIndicator - empty tag means indicator is present. CommercialInvoiceRemovalIndicator allows a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @return $this
     */
    public function setCommercialInvoiceRemovalIndicator($commercial_invoice_removal_indicator)
    {
        $this->container['commercial_invoice_removal_indicator'] = $commercial_invoice_removal_indicator;

        return $this;
    }

    /**
     * Gets import_control
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsImportControl
     */
    public function getImportControl()
    {
        return $this->container['import_control'];
    }

    /**
     * Sets import_control
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsImportControl $import_control import_control
     *
     * @return $this
     */
    public function setImportControl($import_control)
    {
        $this->container['import_control'] = $import_control;

        return $this;
    }

    /**
     * Gets return_service
     *
     * @return \UPS\Rating\Rating\ShipmentServiceOptionsReturnService
     */
    public function getReturnService()
    {
        return $this->container['return_service'];
    }

    /**
     * Sets return_service
     *
     * @param \UPS\Rating\Rating\ShipmentServiceOptionsReturnService $return_service return_service
     *
     * @return $this
     */
    public function setReturnService($return_service)
    {
        $this->container['return_service'] = $return_service;

        return $this;
    }

    /**
     * Gets sdl_shipment_indicator
     *
     * @return string
     */
    public function getSdlShipmentIndicator()
    {
        return $this->container['sdl_shipment_indicator'];
    }

    /**
     * Sets sdl_shipment_indicator
     *
     * @param string $sdl_shipment_indicator Empty Tag means the indicator is present. This field is a flag to indicate if the receiver needs SDL rates in response. True if SDLShipmentIndicator tag exists; false otherwise.  If present, the State Department License (SDL) rates will be returned in the response.This service requires that the account number is enabled for SDL.
     *
     * @return $this
     */
    public function setSdlShipmentIndicator($sdl_shipment_indicator)
    {
        $this->container['sdl_shipment_indicator'] = $sdl_shipment_indicator;

        return $this;
    }

    /**
     * Gets epra_indicator
     *
     * @return string
     */
    public function getEpraIndicator()
    {
        return $this->container['epra_indicator'];
    }

    /**
     * Sets epra_indicator
     *
     * @param string $epra_indicator For valid values, refer to Rating and Shipping COD Supported Countries or Territories in the Appendix.Presence/Absence Indicator. Any value inside is ignored. This field is a flag to indicate Package Release Code is requested for shipment.  This accessorial is only valid with ShipmentIndicationType '01' - Hold for Pickup at UPS Access Point™.
     *
     * @return $this
     */
    public function setEpraIndicator($epra_indicator)
    {
        $this->container['epra_indicator'] = $epra_indicator;

        return $this;
    }

    /**
     * Gets inside_delivery
     *
     * @return string
     */
    public function getInsideDelivery()
    {
        return $this->container['inside_delivery'];
    }

    /**
     * Sets inside_delivery
     *
     * @param string $inside_delivery Inside Delivery accessory. Valid values: - 01 - White Glove - 02 - Room of Choice - 03 - Installation  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @return $this
     */
    public function setInsideDelivery($inside_delivery)
    {
        $this->container['inside_delivery'] = $inside_delivery;

        return $this;
    }

    /**
     * Gets item_disposal_indicator
     *
     * @return string
     */
    public function getItemDisposalIndicator()
    {
        return $this->container['item_disposal_indicator'];
    }

    /**
     * Sets item_disposal_indicator
     *
     * @param string $item_disposal_indicator Presence/Absence Indicator. Any value inside is ignored. If present, indicates that the customer would like items disposed.   Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @return $this
     */
    public function setItemDisposalIndicator($item_disposal_indicator)
    {
        $this->container['item_disposal_indicator'] = $item_disposal_indicator;

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
