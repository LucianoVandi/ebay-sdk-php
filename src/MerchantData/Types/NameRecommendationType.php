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
 * @property string $Name
 * @property \DTS\eBaySDK\MerchantData\Types\RelevanceIndicatorType $RelevanceIndicator
 * @property \DTS\eBaySDK\MerchantData\Types\RecommendationValidationRulesType $ValidationRules
 * @property \DTS\eBaySDK\MerchantData\Types\ValueRecommendationType[] $ValueRecommendation
 * @property string $HelpURL
 * @property string $HelpText
 */
class NameRecommendationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'RelevanceIndicator' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\RelevanceIndicatorType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelevanceIndicator'
        ],
        'ValidationRules' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\RecommendationValidationRulesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValidationRules'
        ],
        'ValueRecommendation' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ValueRecommendationType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ValueRecommendation'
        ],
        'HelpURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HelpURL'
        ],
        'HelpText' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HelpText'
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