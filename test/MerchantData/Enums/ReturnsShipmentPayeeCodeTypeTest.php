<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Enums;

use DTS\eBaySDK\MerchantData\Enums\ReturnsShipmentPayeeCodeType;

class ReturnsShipmentPayeeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnsShipmentPayeeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ReturnsShipmentPayeeCodeType', $this->obj);
    }
}