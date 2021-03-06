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
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $CashOnDeliveryCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $TotalAmount
 * @property integer $TotalQuantity
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ItemCost
 * @property \DTS\eBaySDK\MerchantData\Types\VATRateType[] $VATRate
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $NetInsuranceFee
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $VATInsuranceFee
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $VATShippingFee
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $NetShippingFee
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $NetTotalAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $VATTotalAmount
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property string $NotesToBuyer
 * @property string $NotesFromBuyer
 * @property string $NotesToSeller
 * @property \DTS\eBaySDK\MerchantData\Types\SellingManagerOrderStatusType $OrderStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\UnpaidItemStatusTypeCodeType $UnpaidItemStatus
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $SalePrice
 * @property integer $EmailsSent
 * @property integer $DaysSinceSale
 * @property string $BuyerID
 * @property string $BuyerEmail
 * @property integer $SaleRecordID
 * @property \DateTime $CreationTime
 */
class SellingManagerSoldOrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingManagerSoldTransaction' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingManagerSoldTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellingManagerSoldTransaction'
        ],
        'ShippingAddress' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'CashOnDeliveryCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CashOnDeliveryCost'
        ],
        'TotalAmount' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalAmount'
        ],
        'TotalQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalQuantity'
        ],
        'ItemCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCost'
        ],
        'VATRate' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\VATRateType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VATRate'
        ],
        'NetInsuranceFee' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetInsuranceFee'
        ],
        'VATInsuranceFee' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATInsuranceFee'
        ],
        'VATShippingFee' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATShippingFee'
        ],
        'NetShippingFee' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetShippingFee'
        ],
        'NetTotalAmount' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetTotalAmount'
        ],
        'VATTotalAmount' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATTotalAmount'
        ],
        'ActualShippingCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ],
        'AdjustmentAmount' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'NotesToBuyer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesToBuyer'
        ],
        'NotesFromBuyer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesFromBuyer'
        ],
        'NotesToSeller' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesToSeller'
        ],
        'OrderStatus' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingManagerOrderStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'UnpaidItemStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemStatus'
        ],
        'SalePrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ],
        'EmailsSent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailsSent'
        ],
        'DaysSinceSale' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DaysSinceSale'
        ],
        'BuyerID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ],
        'BuyerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ],
        'SaleRecordID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleRecordID'
        ],
        'CreationTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreationTime'
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
