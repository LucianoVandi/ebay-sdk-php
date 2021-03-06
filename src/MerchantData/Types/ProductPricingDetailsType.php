<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MinimumSoldPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MaximumSoldPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AverageSoldPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $LastSoldPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MinimumSoldPriceOverall
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MaximumSoldPriceOverall
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AverageSoldPriceOverall
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $LastSoldPriceOverall
 */
class ProductPricingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'MinimumSoldPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumSoldPrice'
        ],
        'MaximumSoldPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumSoldPrice'
        ],
        'AverageSoldPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AverageSoldPrice'
        ],
        'LastSoldPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastSoldPrice'
        ],
        'MinimumSoldPriceOverall' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumSoldPriceOverall'
        ],
        'MaximumSoldPriceOverall' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumSoldPriceOverall'
        ],
        'AverageSoldPriceOverall' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AverageSoldPriceOverall'
        ],
        'LastSoldPriceOverall' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastSoldPriceOverall'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
