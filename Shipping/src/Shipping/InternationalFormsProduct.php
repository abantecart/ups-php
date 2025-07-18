<?php
/**
 * InternationalFormsProduct
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
 * InternationalFormsProduct Class Doc Comment
 *
 * @category Class
 * @description Contains the commodity/product information.  Applies to EEI, Invoice, Partial Invoice, CO and NAFTA CO. When any International form is requested, at least one Product must be present.   Maximum number of products allowed for different forms are:  50: Package Packing List  100: Commercial Invoice, NAFTA, CO, EEI  1000: Air Freight packing list  Note: For Partial Invoice this container is optional.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InternationalFormsProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InternationalForms_Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string[]',
        'unit' => '\UPS\Shipping\Shipping\ProductUnit',
        'commodity_code' => 'string',
        'part_number' => 'string',
        'origin_country_code' => 'string',
        'joint_production_indicator' => 'string',
        'net_cost_code' => 'string',
        'net_cost_date_range' => '\UPS\Shipping\Shipping\ProductNetCostDateRange',
        'preference_criteria' => 'string',
        'producer_info' => 'string',
        'marks_and_numbers' => 'string',
        'number_of_packages_per_commodity' => 'string',
        'product_weight' => '\UPS\Shipping\Shipping\ProductProductWeight',
        'vehicle_id' => 'string',
        'schedule_b' => '\UPS\Shipping\Shipping\ProductScheduleB',
        'export_type' => 'string',
        'sed_total_value' => 'string',
        'taxes_paid' => 'string',
        'exclude_from_form' => '\UPS\Shipping\Shipping\ProductExcludeFromForm',
        'packing_list_info' => '\UPS\Shipping\Shipping\ProductPackingListInfo',
        'eei_information' => '\UPS\Shipping\Shipping\ProductEEIInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'unit' => null,
        'commodity_code' => null,
        'part_number' => null,
        'origin_country_code' => null,
        'joint_production_indicator' => null,
        'net_cost_code' => null,
        'net_cost_date_range' => null,
        'preference_criteria' => null,
        'producer_info' => null,
        'marks_and_numbers' => null,
        'number_of_packages_per_commodity' => null,
        'product_weight' => null,
        'vehicle_id' => null,
        'schedule_b' => null,
        'export_type' => null,
        'sed_total_value' => null,
        'taxes_paid' => null,
        'exclude_from_form' => null,
        'packing_list_info' => null,
        'eei_information' => null
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
        'description' => 'Description',
        'unit' => 'Unit',
        'commodity_code' => 'CommodityCode',
        'part_number' => 'PartNumber',
        'origin_country_code' => 'OriginCountryCode',
        'joint_production_indicator' => 'JointProductionIndicator',
        'net_cost_code' => 'NetCostCode',
        'net_cost_date_range' => 'NetCostDateRange',
        'preference_criteria' => 'PreferenceCriteria',
        'producer_info' => 'ProducerInfo',
        'marks_and_numbers' => 'MarksAndNumbers',
        'number_of_packages_per_commodity' => 'NumberOfPackagesPerCommodity',
        'product_weight' => 'ProductWeight',
        'vehicle_id' => 'VehicleID',
        'schedule_b' => 'ScheduleB',
        'export_type' => 'ExportType',
        'sed_total_value' => 'SEDTotalValue',
        'taxes_paid' => 'TaxesPaid',
        'exclude_from_form' => 'ExcludeFromForm',
        'packing_list_info' => 'PackingListInfo',
        'eei_information' => 'EEIInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'unit' => 'setUnit',
        'commodity_code' => 'setCommodityCode',
        'part_number' => 'setPartNumber',
        'origin_country_code' => 'setOriginCountryCode',
        'joint_production_indicator' => 'setJointProductionIndicator',
        'net_cost_code' => 'setNetCostCode',
        'net_cost_date_range' => 'setNetCostDateRange',
        'preference_criteria' => 'setPreferenceCriteria',
        'producer_info' => 'setProducerInfo',
        'marks_and_numbers' => 'setMarksAndNumbers',
        'number_of_packages_per_commodity' => 'setNumberOfPackagesPerCommodity',
        'product_weight' => 'setProductWeight',
        'vehicle_id' => 'setVehicleId',
        'schedule_b' => 'setScheduleB',
        'export_type' => 'setExportType',
        'sed_total_value' => 'setSedTotalValue',
        'taxes_paid' => 'setTaxesPaid',
        'exclude_from_form' => 'setExcludeFromForm',
        'packing_list_info' => 'setPackingListInfo',
        'eei_information' => 'setEeiInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'unit' => 'getUnit',
        'commodity_code' => 'getCommodityCode',
        'part_number' => 'getPartNumber',
        'origin_country_code' => 'getOriginCountryCode',
        'joint_production_indicator' => 'getJointProductionIndicator',
        'net_cost_code' => 'getNetCostCode',
        'net_cost_date_range' => 'getNetCostDateRange',
        'preference_criteria' => 'getPreferenceCriteria',
        'producer_info' => 'getProducerInfo',
        'marks_and_numbers' => 'getMarksAndNumbers',
        'number_of_packages_per_commodity' => 'getNumberOfPackagesPerCommodity',
        'product_weight' => 'getProductWeight',
        'vehicle_id' => 'getVehicleId',
        'schedule_b' => 'getScheduleB',
        'export_type' => 'getExportType',
        'sed_total_value' => 'getSedTotalValue',
        'taxes_paid' => 'getTaxesPaid',
        'exclude_from_form' => 'getExcludeFromForm',
        'packing_list_info' => 'getPackingListInfo',
        'eei_information' => 'getEeiInformation'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['origin_country_code'] = isset($data['origin_country_code']) ? $data['origin_country_code'] : null;
        $this->container['joint_production_indicator'] = isset($data['joint_production_indicator']) ? $data['joint_production_indicator'] : null;
        $this->container['net_cost_code'] = isset($data['net_cost_code']) ? $data['net_cost_code'] : null;
        $this->container['net_cost_date_range'] = isset($data['net_cost_date_range']) ? $data['net_cost_date_range'] : null;
        $this->container['preference_criteria'] = isset($data['preference_criteria']) ? $data['preference_criteria'] : null;
        $this->container['producer_info'] = isset($data['producer_info']) ? $data['producer_info'] : null;
        $this->container['marks_and_numbers'] = isset($data['marks_and_numbers']) ? $data['marks_and_numbers'] : null;
        $this->container['number_of_packages_per_commodity'] = isset($data['number_of_packages_per_commodity']) ? $data['number_of_packages_per_commodity'] : null;
        $this->container['product_weight'] = isset($data['product_weight']) ? $data['product_weight'] : null;
        $this->container['vehicle_id'] = isset($data['vehicle_id']) ? $data['vehicle_id'] : null;
        $this->container['schedule_b'] = isset($data['schedule_b']) ? $data['schedule_b'] : null;
        $this->container['export_type'] = isset($data['export_type']) ? $data['export_type'] : null;
        $this->container['sed_total_value'] = isset($data['sed_total_value']) ? $data['sed_total_value'] : null;
        $this->container['taxes_paid'] = isset($data['taxes_paid']) ? $data['taxes_paid'] : null;
        $this->container['exclude_from_form'] = isset($data['exclude_from_form']) ? $data['exclude_from_form'] : null;
        $this->container['packing_list_info'] = isset($data['packing_list_info']) ? $data['packing_list_info'] : null;
        $this->container['eei_information'] = isset($data['eei_information']) ? $data['eei_information'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets description
     *
     * @return string[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string[] $description Description of the product.  Applies to all International Forms. Optional for Partial Invoice. Must be present at least once and can occur for a maximum of 3 times.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \UPS\Shipping\Shipping\ProductUnit
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \UPS\Shipping\Shipping\ProductUnit $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets commodity_code
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    /**
     * Sets commodity_code
     *
     * @param string $commodity_code 6-to-15-alphanumeric commodity code. Customs uses this code to determine what duties should be assessed on the commodity.  Applies to Invoice, Partial Invoice and NAFTA CO. Required for NAFTA CO and optional for Partial Invoice. Should be at least 6 alphanumeric. For NAFTA CO: For each good described in Description of Goods field, identify the H.S. tariff classification to six digits. If the good is subject to a specific rule of origin in Annex 401 that requires eight digits, identify to eight digits, using the H.S. tariff classification of the country or territory into whose territory the good is imported.
     *
     * @return $this
     */
    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string $part_number The part number or reference number for the product contained in the invoice line, as indicated on the customs invoice.  Applies to Invoice and Partial Invoice. Required for Invoice forms and optional for Partial Invoice.
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets origin_country_code
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->container['origin_country_code'];
    }

    /**
     * Sets origin_country_code
     *
     * @param string $origin_country_code The country or territory in which the good was manufactured, produced or grown. For detailed information on country or territory of origin, certificate of origin, rules of origin, and any related matters, please refer to the U.S. Customs and Border Protection Web site at www.customs.gov or contact your country or territory's Customs authority.
     *
     * @return $this
     */
    public function setOriginCountryCode($origin_country_code)
    {
        $this->container['origin_country_code'] = $origin_country_code;

        return $this;
    }

    /**
     * Gets joint_production_indicator
     *
     * @return string
     */
    public function getJointProductionIndicator()
    {
        return $this->container['joint_production_indicator'];
    }

    /**
     * Sets joint_production_indicator
     *
     * @param string $joint_production_indicator If present, JNT will be used as the origin of country or territory code on the NAFTA form and the Product/Origincountry or territoryCode tag will be ignored.  Applies to NAFTA CO only.
     *
     * @return $this
     */
    public function setJointProductionIndicator($joint_production_indicator)
    {
        $this->container['joint_production_indicator'] = $joint_production_indicator;

        return $this;
    }

    /**
     * Gets net_cost_code
     *
     * @return string
     */
    public function getNetCostCode()
    {
        return $this->container['net_cost_code'];
    }

    /**
     * Sets net_cost_code
     *
     * @param string $net_cost_code For each good described in the Description of Goods field, where the good is subject to a regional value content (RVC) requirement, indicate NC if the RVC is calculated according to the net cost method; otherwise, indicate NO. If the RVC is calculated over a period of time then indicate \"NC with begin/end date\" by passing code \"ND\"  Applies to NAFTA CO only. Required for NAFTA CO.  Valid values: - NC - ND - NO
     *
     * @return $this
     */
    public function setNetCostCode($net_cost_code)
    {
        $this->container['net_cost_code'] = $net_cost_code;

        return $this;
    }

    /**
     * Gets net_cost_date_range
     *
     * @return \UPS\Shipping\Shipping\ProductNetCostDateRange
     */
    public function getNetCostDateRange()
    {
        return $this->container['net_cost_date_range'];
    }

    /**
     * Sets net_cost_date_range
     *
     * @param \UPS\Shipping\Shipping\ProductNetCostDateRange $net_cost_date_range net_cost_date_range
     *
     * @return $this
     */
    public function setNetCostDateRange($net_cost_date_range)
    {
        $this->container['net_cost_date_range'] = $net_cost_date_range;

        return $this;
    }

    /**
     * Gets preference_criteria
     *
     * @return string
     */
    public function getPreferenceCriteria()
    {
        return $this->container['preference_criteria'];
    }

    /**
     * Sets preference_criteria
     *
     * @param string $preference_criteria Indicates the criterion (A through F) for each good described in the Description of Goods field if applicable.   The rules of origin are contained in Chapter Four and Annex 401.   Additional rules are described in Annex 703.2 (certain agricultural goods), Annex 300-B, Appendix 6 (certain textile goods) and Annex 308.1 (certain automatic data processing goods and their parts).  Applies to NAFTA CO only.
     *
     * @return $this
     */
    public function setPreferenceCriteria($preference_criteria)
    {
        $this->container['preference_criteria'] = $preference_criteria;

        return $this;
    }

    /**
     * Gets producer_info
     *
     * @return string
     */
    public function getProducerInfo()
    {
        return $this->container['producer_info'];
    }

    /**
     * Sets producer_info
     *
     * @param string $producer_info Indicate the following:  Yes - If shipper is the producer of the good. If not, state 02, 03, and 04 depending on whether this certificate was based upon:   No [1] - Knowledge of whether the good qualifies as an originating good.  No [2] - Reliance on the producers written representation (other than a Certificate of Origin) that the good qualifies as an originating good.  No [3] - A completed and signed Certificate for the good voluntarily provided to the exporter by the producer.  Applicable for NAFTA CO and is required. Valid values: Yes, No [1], No [2], and No [3].
     *
     * @return $this
     */
    public function setProducerInfo($producer_info)
    {
        $this->container['producer_info'] = $producer_info;

        return $this;
    }

    /**
     * Gets marks_and_numbers
     *
     * @return string
     */
    public function getMarksAndNumbers()
    {
        return $this->container['marks_and_numbers'];
    }

    /**
     * Sets marks_and_numbers
     *
     * @param string $marks_and_numbers Any special marks, codes, and numbers that may appear on package.  Applies to CO Only.
     *
     * @return $this
     */
    public function setMarksAndNumbers($marks_and_numbers)
    {
        $this->container['marks_and_numbers'] = $marks_and_numbers;

        return $this;
    }

    /**
     * Gets number_of_packages_per_commodity
     *
     * @return string
     */
    public function getNumberOfPackagesPerCommodity()
    {
        return $this->container['number_of_packages_per_commodity'];
    }

    /**
     * Sets number_of_packages_per_commodity
     *
     * @param string $number_of_packages_per_commodity The total number of packages, cartons, or containers for the commodity.  Applicable for CO and is required. Should be numeric. Valid characters are 0 -9.
     *
     * @return $this
     */
    public function setNumberOfPackagesPerCommodity($number_of_packages_per_commodity)
    {
        $this->container['number_of_packages_per_commodity'] = $number_of_packages_per_commodity;

        return $this;
    }

    /**
     * Gets product_weight
     *
     * @return \UPS\Shipping\Shipping\ProductProductWeight
     */
    public function getProductWeight()
    {
        return $this->container['product_weight'];
    }

    /**
     * Sets product_weight
     *
     * @param \UPS\Shipping\Shipping\ProductProductWeight $product_weight product_weight
     *
     * @return $this
     */
    public function setProductWeight($product_weight)
    {
        $this->container['product_weight'] = $product_weight;

        return $this;
    }

    /**
     * Gets vehicle_id
     *
     * @return string
     */
    public function getVehicleId()
    {
        return $this->container['vehicle_id'];
    }

    /**
     * Sets vehicle_id
     *
     * @param string $vehicle_id Includes the following information for used self-propelled vehicles as defined in Customs regulations 19 CFR 192.1: The unique Vehicle Identification Number (VIN) in the proper format. Or The Product Identification Number (PIN) for those used self-propelled vehicles for which there are no VINs.  Or the Vehicle Title Number.  Applies to EEI forms only.
     *
     * @return $this
     */
    public function setVehicleId($vehicle_id)
    {
        $this->container['vehicle_id'] = $vehicle_id;

        return $this;
    }

    /**
     * Gets schedule_b
     *
     * @return \UPS\Shipping\Shipping\ProductScheduleB
     */
    public function getScheduleB()
    {
        return $this->container['schedule_b'];
    }

    /**
     * Sets schedule_b
     *
     * @param \UPS\Shipping\Shipping\ProductScheduleB $schedule_b schedule_b
     *
     * @return $this
     */
    public function setScheduleB($schedule_b)
    {
        $this->container['schedule_b'] = $schedule_b;

        return $this;
    }

    /**
     * Gets export_type
     *
     * @return string
     */
    public function getExportType()
    {
        return $this->container['export_type'];
    }

    /**
     * Sets export_type
     *
     * @param string $export_type Code indicating Domestic: Exports that have been produced, manufactured, or grown in the United States or Puerto Rico. This includes imported merchandise which has been enhanced in value or changed from the form in which imported by further manufacture or processing in the United States or Puerto Rico. Foreign: Merchandise that has entered the United States and is being exported again in the same condition as when imported.   Applies to EEI forms only. Required for EEI form.  Valid values:  D: Domestic; F: Foreign.
     *
     * @return $this
     */
    public function setExportType($export_type)
    {
        $this->container['export_type'] = $export_type;

        return $this;
    }

    /**
     * Gets sed_total_value
     *
     * @return string
     */
    public function getSedTotalValue()
    {
        return $this->container['sed_total_value'];
    }

    /**
     * Sets sed_total_value
     *
     * @param string $sed_total_value This amount will always be USD.  Applies to EEI forms only. Required for EEI form. Valid characters are 0-9 and \\'.\\' (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including \\'.\\' and can hold up to 2 decimal places.  Note: This value is calculated based on the Product/Unit/Value and /Product/Unit/Number (Number of Units * Price per Unit). If the total value is incorrect it will be replaced by the actual calculated total value.
     *
     * @return $this
     */
    public function setSedTotalValue($sed_total_value)
    {
        $this->container['sed_total_value'] = $sed_total_value;

        return $this;
    }

    /**
     * Gets taxes_paid
     *
     * @return string
     */
    public function getTaxesPaid()
    {
        return $this->container['taxes_paid'];
    }

    /**
     * Sets taxes_paid
     *
     * @param string $taxes_paid Invoice Commodity Level Tax Collected Code for each shipment commodity line.Taxes paid Indicator is only applicable for shipments to Singapore. [TaxesPaid = 0 - No on Report], [TaxesPaid = 1 -Yes on Report], [TaxesPaid = empty - null on Report], [If TaxesPaid is not passed in input request = null on Report]
     *
     * @return $this
     */
    public function setTaxesPaid($taxes_paid)
    {
        $this->container['taxes_paid'] = $taxes_paid;

        return $this;
    }

    /**
     * Gets exclude_from_form
     *
     * @return \UPS\Shipping\Shipping\ProductExcludeFromForm
     */
    public function getExcludeFromForm()
    {
        return $this->container['exclude_from_form'];
    }

    /**
     * Sets exclude_from_form
     *
     * @param \UPS\Shipping\Shipping\ProductExcludeFromForm $exclude_from_form exclude_from_form
     *
     * @return $this
     */
    public function setExcludeFromForm($exclude_from_form)
    {
        $this->container['exclude_from_form'] = $exclude_from_form;

        return $this;
    }

    /**
     * Gets packing_list_info
     *
     * @return \UPS\Shipping\Shipping\ProductPackingListInfo
     */
    public function getPackingListInfo()
    {
        return $this->container['packing_list_info'];
    }

    /**
     * Sets packing_list_info
     *
     * @param \UPS\Shipping\Shipping\ProductPackingListInfo $packing_list_info packing_list_info
     *
     * @return $this
     */
    public function setPackingListInfo($packing_list_info)
    {
        $this->container['packing_list_info'] = $packing_list_info;

        return $this;
    }

    /**
     * Gets eei_information
     *
     * @return \UPS\Shipping\Shipping\ProductEEIInformation
     */
    public function getEeiInformation()
    {
        return $this->container['eei_information'];
    }

    /**
     * Sets eei_information
     *
     * @param \UPS\Shipping\Shipping\ProductEEIInformation $eei_information eei_information
     *
     * @return $this
     */
    public function setEeiInformation($eei_information)
    {
        $this->container['eei_information'] = $eei_information;

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
