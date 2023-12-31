<?php
/**
 * PickupDateInfoReadyTimeTest
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
 * Please update the test case below to test the model.
 */

namespace UPS\Pickup;

use PHPUnit\Framework\TestCase;

/**
 * PickupDateInfoReadyTimeTest Class Doc Comment
 *
 * @category    Class
 * @description Pickup location&#x27;s local ready time.  ReadyTime means the time when your shipment(s) can be ready for UPS to pick up.  - User provided ReadyTime must be earlier than CallByTime.  - CallByTime is determined by UPS pickup operation system. CallByTime is the Latest time a Customer can call UPS or self-serve on UPS.com and complete a Pickup Request and UPS can still make the Pickup service request.  - If ReadyTime is earlier than current local time, UPS uses the current local time as the ReadyTime.  Format: HHmm Hour: 0-23 Minute: 0-59
 * @package     UPS\Pickup
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PickupDateInfoReadyTimeTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "PickupDateInfoReadyTime"
     */
    public function testPickupDateInfoReadyTime()
    {
    }
}
