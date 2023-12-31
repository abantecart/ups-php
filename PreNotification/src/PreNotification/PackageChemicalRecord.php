<?php
/**
 * PackageChemicalRecord
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\PreNotification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PreNotification
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

namespace UPS\PreNotification\PreNotification;

use \ArrayAccess;
use \UPS\PreNotification\ObjectSerializer;

/**
 * PackageChemicalRecord Class Doc Comment
 *
 * @category Class
 * @description Dangerous Goods Accessorial Commodity Container
 * @package  UPS\PreNotification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageChemicalRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package_ChemicalRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chemical_record_reportable_quantity' => 'string',
        'chemical_record_class_division_number' => 'string',
        'chemical_record_sub_risk_class' => 'string',
        'chemical_record_id_number' => 'string',
        'chemical_record_packaging_group_type' => 'string',
        'chemical_record_quantity' => 'string',
        'chemical_record_uom' => 'string',
        'chemical_record_packaging_instruction_code' => 'string',
        'chemical_record_emergency_phone' => 'string',
        'chemical_record_emergency_contact' => 'string',
        'chemical_record_proper_shipping_name' => 'string',
        'chemical_record_technical_name' => 'string',
        'chemical_record_additional_description' => 'string',
        'chemical_record_packaging_type' => 'string',
        'chemical_record_hazard_label_required' => 'string',
        'chemical_record_packaging_type_quantity' => 'string',
        'chemical_record_commodity_regulated_level_code' => 'string',
        'chemical_record_transport_category' => 'string',
        'chemical_record_tunnel_restriction_code' => 'string',
        'chemical_record_q_value' => 'string',
        'chemical_record_over_packed_indicator' => 'string',
        'chemical_record_all_packed_in_one_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chemical_record_reportable_quantity' => null,
        'chemical_record_class_division_number' => null,
        'chemical_record_sub_risk_class' => null,
        'chemical_record_id_number' => null,
        'chemical_record_packaging_group_type' => null,
        'chemical_record_quantity' => null,
        'chemical_record_uom' => null,
        'chemical_record_packaging_instruction_code' => null,
        'chemical_record_emergency_phone' => null,
        'chemical_record_emergency_contact' => null,
        'chemical_record_proper_shipping_name' => null,
        'chemical_record_technical_name' => null,
        'chemical_record_additional_description' => null,
        'chemical_record_packaging_type' => null,
        'chemical_record_hazard_label_required' => null,
        'chemical_record_packaging_type_quantity' => null,
        'chemical_record_commodity_regulated_level_code' => null,
        'chemical_record_transport_category' => null,
        'chemical_record_tunnel_restriction_code' => null,
        'chemical_record_q_value' => null,
        'chemical_record_over_packed_indicator' => null,
        'chemical_record_all_packed_in_one_indicator' => null
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
        'chemical_record_reportable_quantity' => 'ChemicalRecord_ReportableQuantity',
        'chemical_record_class_division_number' => 'ChemicalRecord_ClassDivisionNumber',
        'chemical_record_sub_risk_class' => 'ChemicalRecord_SubRiskClass',
        'chemical_record_id_number' => 'ChemicalRecord_IDNumber',
        'chemical_record_packaging_group_type' => 'ChemicalRecord_PackagingGroupType',
        'chemical_record_quantity' => 'ChemicalRecord_Quantity',
        'chemical_record_uom' => 'ChemicalRecord_UOM',
        'chemical_record_packaging_instruction_code' => 'ChemicalRecord_PackagingInstructionCode',
        'chemical_record_emergency_phone' => 'ChemicalRecord_EmergencyPhone',
        'chemical_record_emergency_contact' => 'ChemicalRecord_EmergencyContact',
        'chemical_record_proper_shipping_name' => 'ChemicalRecord_ProperShippingName',
        'chemical_record_technical_name' => 'ChemicalRecord_TechnicalName',
        'chemical_record_additional_description' => 'ChemicalRecord_AdditionalDescription',
        'chemical_record_packaging_type' => 'ChemicalRecord_PackagingType',
        'chemical_record_hazard_label_required' => 'ChemicalRecord_HazardLabelRequired',
        'chemical_record_packaging_type_quantity' => 'ChemicalRecord_PackagingTypeQuantity',
        'chemical_record_commodity_regulated_level_code' => 'ChemicalRecord_CommodityRegulatedLevelCode',
        'chemical_record_transport_category' => 'ChemicalRecord_TransportCategory',
        'chemical_record_tunnel_restriction_code' => 'ChemicalRecord_TunnelRestrictionCode',
        'chemical_record_q_value' => 'ChemicalRecord_QValue',
        'chemical_record_over_packed_indicator' => 'ChemicalRecord_OverPackedIndicator',
        'chemical_record_all_packed_in_one_indicator' => 'ChemicalRecord_AllPackedInOneIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chemical_record_reportable_quantity' => 'setChemicalRecordReportableQuantity',
        'chemical_record_class_division_number' => 'setChemicalRecordClassDivisionNumber',
        'chemical_record_sub_risk_class' => 'setChemicalRecordSubRiskClass',
        'chemical_record_id_number' => 'setChemicalRecordIdNumber',
        'chemical_record_packaging_group_type' => 'setChemicalRecordPackagingGroupType',
        'chemical_record_quantity' => 'setChemicalRecordQuantity',
        'chemical_record_uom' => 'setChemicalRecordUom',
        'chemical_record_packaging_instruction_code' => 'setChemicalRecordPackagingInstructionCode',
        'chemical_record_emergency_phone' => 'setChemicalRecordEmergencyPhone',
        'chemical_record_emergency_contact' => 'setChemicalRecordEmergencyContact',
        'chemical_record_proper_shipping_name' => 'setChemicalRecordProperShippingName',
        'chemical_record_technical_name' => 'setChemicalRecordTechnicalName',
        'chemical_record_additional_description' => 'setChemicalRecordAdditionalDescription',
        'chemical_record_packaging_type' => 'setChemicalRecordPackagingType',
        'chemical_record_hazard_label_required' => 'setChemicalRecordHazardLabelRequired',
        'chemical_record_packaging_type_quantity' => 'setChemicalRecordPackagingTypeQuantity',
        'chemical_record_commodity_regulated_level_code' => 'setChemicalRecordCommodityRegulatedLevelCode',
        'chemical_record_transport_category' => 'setChemicalRecordTransportCategory',
        'chemical_record_tunnel_restriction_code' => 'setChemicalRecordTunnelRestrictionCode',
        'chemical_record_q_value' => 'setChemicalRecordQValue',
        'chemical_record_over_packed_indicator' => 'setChemicalRecordOverPackedIndicator',
        'chemical_record_all_packed_in_one_indicator' => 'setChemicalRecordAllPackedInOneIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chemical_record_reportable_quantity' => 'getChemicalRecordReportableQuantity',
        'chemical_record_class_division_number' => 'getChemicalRecordClassDivisionNumber',
        'chemical_record_sub_risk_class' => 'getChemicalRecordSubRiskClass',
        'chemical_record_id_number' => 'getChemicalRecordIdNumber',
        'chemical_record_packaging_group_type' => 'getChemicalRecordPackagingGroupType',
        'chemical_record_quantity' => 'getChemicalRecordQuantity',
        'chemical_record_uom' => 'getChemicalRecordUom',
        'chemical_record_packaging_instruction_code' => 'getChemicalRecordPackagingInstructionCode',
        'chemical_record_emergency_phone' => 'getChemicalRecordEmergencyPhone',
        'chemical_record_emergency_contact' => 'getChemicalRecordEmergencyContact',
        'chemical_record_proper_shipping_name' => 'getChemicalRecordProperShippingName',
        'chemical_record_technical_name' => 'getChemicalRecordTechnicalName',
        'chemical_record_additional_description' => 'getChemicalRecordAdditionalDescription',
        'chemical_record_packaging_type' => 'getChemicalRecordPackagingType',
        'chemical_record_hazard_label_required' => 'getChemicalRecordHazardLabelRequired',
        'chemical_record_packaging_type_quantity' => 'getChemicalRecordPackagingTypeQuantity',
        'chemical_record_commodity_regulated_level_code' => 'getChemicalRecordCommodityRegulatedLevelCode',
        'chemical_record_transport_category' => 'getChemicalRecordTransportCategory',
        'chemical_record_tunnel_restriction_code' => 'getChemicalRecordTunnelRestrictionCode',
        'chemical_record_q_value' => 'getChemicalRecordQValue',
        'chemical_record_over_packed_indicator' => 'getChemicalRecordOverPackedIndicator',
        'chemical_record_all_packed_in_one_indicator' => 'getChemicalRecordAllPackedInOneIndicator'
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
        $this->container['chemical_record_reportable_quantity'] = isset($data['chemical_record_reportable_quantity']) ? $data['chemical_record_reportable_quantity'] : null;
        $this->container['chemical_record_class_division_number'] = isset($data['chemical_record_class_division_number']) ? $data['chemical_record_class_division_number'] : null;
        $this->container['chemical_record_sub_risk_class'] = isset($data['chemical_record_sub_risk_class']) ? $data['chemical_record_sub_risk_class'] : null;
        $this->container['chemical_record_id_number'] = isset($data['chemical_record_id_number']) ? $data['chemical_record_id_number'] : null;
        $this->container['chemical_record_packaging_group_type'] = isset($data['chemical_record_packaging_group_type']) ? $data['chemical_record_packaging_group_type'] : null;
        $this->container['chemical_record_quantity'] = isset($data['chemical_record_quantity']) ? $data['chemical_record_quantity'] : null;
        $this->container['chemical_record_uom'] = isset($data['chemical_record_uom']) ? $data['chemical_record_uom'] : null;
        $this->container['chemical_record_packaging_instruction_code'] = isset($data['chemical_record_packaging_instruction_code']) ? $data['chemical_record_packaging_instruction_code'] : null;
        $this->container['chemical_record_emergency_phone'] = isset($data['chemical_record_emergency_phone']) ? $data['chemical_record_emergency_phone'] : null;
        $this->container['chemical_record_emergency_contact'] = isset($data['chemical_record_emergency_contact']) ? $data['chemical_record_emergency_contact'] : null;
        $this->container['chemical_record_proper_shipping_name'] = isset($data['chemical_record_proper_shipping_name']) ? $data['chemical_record_proper_shipping_name'] : null;
        $this->container['chemical_record_technical_name'] = isset($data['chemical_record_technical_name']) ? $data['chemical_record_technical_name'] : null;
        $this->container['chemical_record_additional_description'] = isset($data['chemical_record_additional_description']) ? $data['chemical_record_additional_description'] : null;
        $this->container['chemical_record_packaging_type'] = isset($data['chemical_record_packaging_type']) ? $data['chemical_record_packaging_type'] : null;
        $this->container['chemical_record_hazard_label_required'] = isset($data['chemical_record_hazard_label_required']) ? $data['chemical_record_hazard_label_required'] : null;
        $this->container['chemical_record_packaging_type_quantity'] = isset($data['chemical_record_packaging_type_quantity']) ? $data['chemical_record_packaging_type_quantity'] : null;
        $this->container['chemical_record_commodity_regulated_level_code'] = isset($data['chemical_record_commodity_regulated_level_code']) ? $data['chemical_record_commodity_regulated_level_code'] : null;
        $this->container['chemical_record_transport_category'] = isset($data['chemical_record_transport_category']) ? $data['chemical_record_transport_category'] : null;
        $this->container['chemical_record_tunnel_restriction_code'] = isset($data['chemical_record_tunnel_restriction_code']) ? $data['chemical_record_tunnel_restriction_code'] : null;
        $this->container['chemical_record_q_value'] = isset($data['chemical_record_q_value']) ? $data['chemical_record_q_value'] : null;
        $this->container['chemical_record_over_packed_indicator'] = isset($data['chemical_record_over_packed_indicator']) ? $data['chemical_record_over_packed_indicator'] : null;
        $this->container['chemical_record_all_packed_in_one_indicator'] = isset($data['chemical_record_all_packed_in_one_indicator']) ? $data['chemical_record_all_packed_in_one_indicator'] : null;
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
     * Gets chemical_record_reportable_quantity
     *
     * @return string
     */
    public function getChemicalRecordReportableQuantity()
    {
        return $this->container['chemical_record_reportable_quantity'];
    }

    /**
     * Sets chemical_record_reportable_quantity
     *
     * @param string $chemical_record_reportable_quantity Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, \"RQ\" should be entered.  Any other value will be  interpreted as \"Non Reportable\" quantity.
     *
     * @return $this
     */
    public function setChemicalRecordReportableQuantity($chemical_record_reportable_quantity)
    {
        $this->container['chemical_record_reportable_quantity'] = $chemical_record_reportable_quantity;

        return $this;
    }

    /**
     * Gets chemical_record_class_division_number
     *
     * @return string
     */
    public function getChemicalRecordClassDivisionNumber()
    {
        return $this->container['chemical_record_class_division_number'];
    }

    /**
     * Sets chemical_record_class_division_number
     *
     * @param string $chemical_record_class_division_number This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is \"LQ\" or \"FR\"
     *
     * @return $this
     */
    public function setChemicalRecordClassDivisionNumber($chemical_record_class_division_number)
    {
        $this->container['chemical_record_class_division_number'] = $chemical_record_class_division_number;

        return $this;
    }

    /**
     * Gets chemical_record_sub_risk_class
     *
     * @return string
     */
    public function getChemicalRecordSubRiskClass()
    {
        return $this->container['chemical_record_sub_risk_class'];
    }

    /**
     * Sets chemical_record_sub_risk_class
     *
     * @param string $chemical_record_sub_risk_class Secondary hazardous characteristics of a package. (There can be more than one, separate each with a comma.)
     *
     * @return $this
     */
    public function setChemicalRecordSubRiskClass($chemical_record_sub_risk_class)
    {
        $this->container['chemical_record_sub_risk_class'] = $chemical_record_sub_risk_class;

        return $this;
    }

    /**
     * Gets chemical_record_id_number
     *
     * @return string
     */
    public function getChemicalRecordIdNumber()
    {
        return $this->container['chemical_record_id_number'];
    }

    /**
     * Sets chemical_record_id_number
     *
     * @param string $chemical_record_id_number This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @return $this
     */
    public function setChemicalRecordIdNumber($chemical_record_id_number)
    {
        $this->container['chemical_record_id_number'] = $chemical_record_id_number;

        return $this;
    }

    /**
     * Gets chemical_record_packaging_group_type
     *
     * @return string
     */
    public function getChemicalRecordPackagingGroupType()
    {
        return $this->container['chemical_record_packaging_group_type'];
    }

    /**
     * Sets chemical_record_packaging_group_type
     *
     * @param string $chemical_record_packaging_group_type This is the packing group category associated to the specified commodity.  Must be shown in Roman Numerals.  Valid values are: I, II, III and blank.
     *
     * @return $this
     */
    public function setChemicalRecordPackagingGroupType($chemical_record_packaging_group_type)
    {
        $this->container['chemical_record_packaging_group_type'] = $chemical_record_packaging_group_type;

        return $this;
    }

    /**
     * Gets chemical_record_quantity
     *
     * @return string
     */
    public function getChemicalRecordQuantity()
    {
        return $this->container['chemical_record_quantity'];
    }

    /**
     * Sets chemical_record_quantity
     *
     * @param string $chemical_record_quantity Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @return $this
     */
    public function setChemicalRecordQuantity($chemical_record_quantity)
    {
        $this->container['chemical_record_quantity'] = $chemical_record_quantity;

        return $this;
    }

    /**
     * Gets chemical_record_uom
     *
     * @return string
     */
    public function getChemicalRecordUom()
    {
        return $this->container['chemical_record_uom'];
    }

    /**
     * Sets chemical_record_uom
     *
     * @param string $chemical_record_uom Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @return $this
     */
    public function setChemicalRecordUom($chemical_record_uom)
    {
        $this->container['chemical_record_uom'] = $chemical_record_uom;

        return $this;
    }

    /**
     * Gets chemical_record_packaging_instruction_code
     *
     * @return string
     */
    public function getChemicalRecordPackagingInstructionCode()
    {
        return $this->container['chemical_record_packaging_instruction_code'];
    }

    /**
     * Sets chemical_record_packaging_instruction_code
     *
     * @param string $chemical_record_packaging_instruction_code The packing instructions related to the chemical record.
     *
     * @return $this
     */
    public function setChemicalRecordPackagingInstructionCode($chemical_record_packaging_instruction_code)
    {
        $this->container['chemical_record_packaging_instruction_code'] = $chemical_record_packaging_instruction_code;

        return $this;
    }

    /**
     * Gets chemical_record_emergency_phone
     *
     * @return string
     */
    public function getChemicalRecordEmergencyPhone()
    {
        return $this->container['chemical_record_emergency_phone'];
    }

    /**
     * Sets chemical_record_emergency_phone
     *
     * @param string $chemical_record_emergency_phone 24 Hour Emergency Phone Number of the shipper.   Valid values for this field are (0) through (9) with trailing blanks.   For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number. The following are restricted in the phone number   period \".\", dash \"-\", plus sign \"+\" and conventional parentheses \"(\" and \")\", \"EXT\" or \"OPT\"  The following are restricted in the phone number   period \".\", dash \"-\", plus sign \"+\" and conventional parentheses \"(\" and \")\", \"EXT\" or \"OPT\"
     *
     * @return $this
     */
    public function setChemicalRecordEmergencyPhone($chemical_record_emergency_phone)
    {
        $this->container['chemical_record_emergency_phone'] = $chemical_record_emergency_phone;

        return $this;
    }

    /**
     * Gets chemical_record_emergency_contact
     *
     * @return string
     */
    public function getChemicalRecordEmergencyContact()
    {
        return $this->container['chemical_record_emergency_contact'];
    }

    /**
     * Sets chemical_record_emergency_contact
     *
     * @param string $chemical_record_emergency_contact The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @return $this
     */
    public function setChemicalRecordEmergencyContact($chemical_record_emergency_contact)
    {
        $this->container['chemical_record_emergency_contact'] = $chemical_record_emergency_contact;

        return $this;
    }

    /**
     * Gets chemical_record_proper_shipping_name
     *
     * @return string
     */
    public function getChemicalRecordProperShippingName()
    {
        return $this->container['chemical_record_proper_shipping_name'];
    }

    /**
     * Sets chemical_record_proper_shipping_name
     *
     * @param string $chemical_record_proper_shipping_name The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @return $this
     */
    public function setChemicalRecordProperShippingName($chemical_record_proper_shipping_name)
    {
        $this->container['chemical_record_proper_shipping_name'] = $chemical_record_proper_shipping_name;

        return $this;
    }

    /**
     * Gets chemical_record_technical_name
     *
     * @return string
     */
    public function getChemicalRecordTechnicalName()
    {
        return $this->container['chemical_record_technical_name'];
    }

    /**
     * Sets chemical_record_technical_name
     *
     * @param string $chemical_record_technical_name The technical name (when required) for the specified commodity.
     *
     * @return $this
     */
    public function setChemicalRecordTechnicalName($chemical_record_technical_name)
    {
        $this->container['chemical_record_technical_name'] = $chemical_record_technical_name;

        return $this;
    }

    /**
     * Gets chemical_record_additional_description
     *
     * @return string
     */
    public function getChemicalRecordAdditionalDescription()
    {
        return $this->container['chemical_record_additional_description'];
    }

    /**
     * Sets chemical_record_additional_description
     *
     * @param string $chemical_record_additional_description Additional remarks or special provision information.
     *
     * @return $this
     */
    public function setChemicalRecordAdditionalDescription($chemical_record_additional_description)
    {
        $this->container['chemical_record_additional_description'] = $chemical_record_additional_description;

        return $this;
    }

    /**
     * Gets chemical_record_packaging_type
     *
     * @return string
     */
    public function getChemicalRecordPackagingType()
    {
        return $this->container['chemical_record_packaging_type'];
    }

    /**
     * Sets chemical_record_packaging_type
     *
     * @param string $chemical_record_packaging_type The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @return $this
     */
    public function setChemicalRecordPackagingType($chemical_record_packaging_type)
    {
        $this->container['chemical_record_packaging_type'] = $chemical_record_packaging_type;

        return $this;
    }

    /**
     * Gets chemical_record_hazard_label_required
     *
     * @return string
     */
    public function getChemicalRecordHazardLabelRequired()
    {
        return $this->container['chemical_record_hazard_label_required'];
    }

    /**
     * Sets chemical_record_hazard_label_required
     *
     * @param string $chemical_record_hazard_label_required Defines the type of label that is required on the package for the commodity.
     *
     * @return $this
     */
    public function setChemicalRecordHazardLabelRequired($chemical_record_hazard_label_required)
    {
        $this->container['chemical_record_hazard_label_required'] = $chemical_record_hazard_label_required;

        return $this;
    }

    /**
     * Gets chemical_record_packaging_type_quantity
     *
     * @return string
     */
    public function getChemicalRecordPackagingTypeQuantity()
    {
        return $this->container['chemical_record_packaging_type_quantity'];
    }

    /**
     * Sets chemical_record_packaging_type_quantity
     *
     * @param string $chemical_record_packaging_type_quantity The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @return $this
     */
    public function setChemicalRecordPackagingTypeQuantity($chemical_record_packaging_type_quantity)
    {
        $this->container['chemical_record_packaging_type_quantity'] = $chemical_record_packaging_type_quantity;

        return $this;
    }

    /**
     * Gets chemical_record_commodity_regulated_level_code
     *
     * @return string
     */
    public function getChemicalRecordCommodityRegulatedLevelCode()
    {
        return $this->container['chemical_record_commodity_regulated_level_code'];
    }

    /**
     * Sets chemical_record_commodity_regulated_level_code
     *
     * @param string $chemical_record_commodity_regulated_level_code Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @return $this
     */
    public function setChemicalRecordCommodityRegulatedLevelCode($chemical_record_commodity_regulated_level_code)
    {
        $this->container['chemical_record_commodity_regulated_level_code'] = $chemical_record_commodity_regulated_level_code;

        return $this;
    }

    /**
     * Gets chemical_record_transport_category
     *
     * @return string
     */
    public function getChemicalRecordTransportCategory()
    {
        return $this->container['chemical_record_transport_category'];
    }

    /**
     * Sets chemical_record_transport_category
     *
     * @param string $chemical_record_transport_category Transport Category.   Valid values are 0 to 4.
     *
     * @return $this
     */
    public function setChemicalRecordTransportCategory($chemical_record_transport_category)
    {
        $this->container['chemical_record_transport_category'] = $chemical_record_transport_category;

        return $this;
    }

    /**
     * Gets chemical_record_tunnel_restriction_code
     *
     * @return string
     */
    public function getChemicalRecordTunnelRestrictionCode()
    {
        return $this->container['chemical_record_tunnel_restriction_code'];
    }

    /**
     * Sets chemical_record_tunnel_restriction_code
     *
     * @param string $chemical_record_tunnel_restriction_code Defines what is restricted to pass through a tunnel.
     *
     * @return $this
     */
    public function setChemicalRecordTunnelRestrictionCode($chemical_record_tunnel_restriction_code)
    {
        $this->container['chemical_record_tunnel_restriction_code'] = $chemical_record_tunnel_restriction_code;

        return $this;
    }

    /**
     * Gets chemical_record_q_value
     *
     * @return string
     */
    public function getChemicalRecordQValue()
    {
        return $this->container['chemical_record_q_value'];
    }

    /**
     * Sets chemical_record_q_value
     *
     * @param string $chemical_record_q_value When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return $this
     */
    public function setChemicalRecordQValue($chemical_record_q_value)
    {
        $this->container['chemical_record_q_value'] = $chemical_record_q_value;

        return $this;
    }

    /**
     * Gets chemical_record_over_packed_indicator
     *
     * @return string
     */
    public function getChemicalRecordOverPackedIndicator()
    {
        return $this->container['chemical_record_over_packed_indicator'];
    }

    /**
     * Sets chemical_record_over_packed_indicator
     *
     * @param string $chemical_record_over_packed_indicator Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @return $this
     */
    public function setChemicalRecordOverPackedIndicator($chemical_record_over_packed_indicator)
    {
        $this->container['chemical_record_over_packed_indicator'] = $chemical_record_over_packed_indicator;

        return $this;
    }

    /**
     * Gets chemical_record_all_packed_in_one_indicator
     *
     * @return string
     */
    public function getChemicalRecordAllPackedInOneIndicator()
    {
        return $this->container['chemical_record_all_packed_in_one_indicator'];
    }

    /**
     * Sets chemical_record_all_packed_in_one_indicator
     *
     * @param string $chemical_record_all_packed_in_one_indicator Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @return $this
     */
    public function setChemicalRecordAllPackedInOneIndicator($chemical_record_all_packed_in_one_indicator)
    {
        $this->container['chemical_record_all_packed_in_one_indicator'] = $chemical_record_all_packed_in_one_indicator;

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
