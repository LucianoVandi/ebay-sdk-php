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
 * @property string $CategoryID
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDurationReferenceType[] $ListingDuration
 * @property boolean $ShippingTermsRequired
 * @property boolean $BestOfferEnabled
 * @property boolean $UserConsentRequired
 * @property boolean $HomePageFeaturedEnabled
 * @property boolean $ProPackEnabled
 * @property boolean $ValuePackEnabled
 * @property boolean $ProPackPlusEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\AdFormatEnabledCodeType $AdFormatEnabled
 * @property boolean $BestOfferCounterEnabled
 * @property boolean $BestOfferAutoDeclineEnabled
 * @property boolean $LocalMarketSpecialitySubscription
 * @property boolean $LocalMarketRegularSubscription
 * @property boolean $LocalMarketPremiumSubscription
 * @property boolean $LocalMarketNonSubscription
 * @property double $MinimumReservePrice
 * @property boolean $SellerContactDetailsEnabled
 * @property boolean $TransactionConfirmationRequestEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
 * @property boolean $ClassifiedAdShippingMethodEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
 * @property boolean $ClassifiedAdCounterOfferEnabled
 * @property boolean $ClassifiedAdAutoDeclineEnabled
 * @property boolean $ClassifiedAdContactByPhoneEnabled
 * @property boolean $ClassifiedAdContactByEmailEnabled
 * @property boolean $SafePaymentRequired
 * @property boolean $ClassifiedAdPayPerLeadEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
 * @property boolean $PaisaPayFullEscrowEnabled
 * @property boolean $BrandMPNIdentifierEnabled
 * @property boolean $ClassifiedAdAutoAcceptEnabled
 * @property boolean $BestOfferAutoAcceptEnabled
 * @property boolean $CrossBorderTradeNorthAmericaEnabled
 * @property boolean $CrossBorderTradeGBEnabled
 * @property boolean $CrossBorderTradeAustraliaEnabled
 * @property boolean $PayPalBuyerProtectionEnabled
 * @property boolean $BuyerGuaranteeEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
 * @property boolean $PayPalRequired
 * @property \DTS\eBaySDK\MerchantData\Enums\AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
 * @property boolean $eBayMotorsProContactByPhoneEnabled
 * @property integer $eBayMotorsProPhoneCount
 * @property boolean $eBayMotorsProContactByAddressEnabled
 * @property integer $eBayMotorsProStreetCount
 * @property boolean $eBayMotorsProCompanyNameEnabled
 * @property boolean $eBayMotorsProContactByEmailEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
 * @property boolean $eBayMotorsProAutoAcceptEnabled
 * @property boolean $eBayMotorsProAutoDeclineEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property boolean $eBayMotorsProShippingMethodEnabled
 * @property boolean $eBayMotorsProCounterOfferEnabled
 * @property boolean $eBayMotorsProSellerContactDetailsEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
 * @property boolean $LocalMarketContactByPhoneEnabled
 * @property integer $LocalMarketPhoneCount
 * @property boolean $LocalMarketContactByAddressEnabled
 * @property integer $LocalMarketStreetCount
 * @property boolean $LocalMarketCompanyNameEnabled
 * @property boolean $LocalMarketContactByEmailEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
 * @property boolean $LocalMarketAutoAcceptEnabled
 * @property boolean $LocalMarketAutoDeclineEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
 * @property boolean $LocalMarketShippingMethodEnabled
 * @property boolean $LocalMarketCounterOfferEnabled
 * @property boolean $LocalMarketSellerContactDetailsEnabled
 * @property integer $ClassifiedAdPhoneCount
 * @property boolean $ClassifiedAdContactByAddressEnabled
 * @property integer $ClassifiedAdStreetCount
 * @property boolean $ClassifiedAdCompanyNameEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\GeographicExposureCodeType $SpecialitySubscription
 * @property \DTS\eBaySDK\MerchantData\Enums\GeographicExposureCodeType $RegularSubscription
 * @property \DTS\eBaySDK\MerchantData\Enums\GeographicExposureCodeType $PremiumSubscription
 * @property \DTS\eBaySDK\MerchantData\Enums\GeographicExposureCodeType $NonSubscription
 * @property \DTS\eBaySDK\MerchantData\Enums\INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
 * @property boolean $ReviseQuantityAllowed
 * @property boolean $RevisePriceAllowed
 * @property boolean $StoreOwnerExtendedListingDurationsEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
 * @property boolean $ReturnPolicyEnabled
 * @property boolean $HandlingTimeEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $MaxFlatShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $Group1MaxFlatShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $Group2MaxFlatShippingCost
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $Group3MaxFlatShippingCost
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethod
 * @property boolean $VariationsEnabled
 * @property boolean $FreeGalleryPlusEnabled
 * @property boolean $FreePicturePackEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
 * @property integer $MinItemCompatibility
 * @property integer $MaxItemCompatibility
 * @property \DTS\eBaySDK\MerchantData\Enums\ConditionEnabledCodeType $ConditionEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\ConditionValuesType $ConditionValues
 * @property boolean $ValueCategory
 * @property \DTS\eBaySDK\MerchantData\Enums\ProductCreationEnabledCodeType $ProductCreationEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ProductIdentiferEnabledCodeType $EANEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ProductIdentiferEnabledCodeType $ISBNEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\ProductIdentiferEnabledCodeType $UPCEnabled
 * @property integer $MaxGranularFitmentCount
 * @property string $CompatibleVehicleType
 * @property \DTS\eBaySDK\MerchantData\Enums\ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
 * @property \DTS\eBaySDK\MerchantData\Enums\ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
 * @property \DTS\eBaySDK\MerchantData\Enums\ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
 * @property boolean $VINSupported
 * @property boolean $VRMSupported
 * @property boolean $SellerProvidedTitleSupported
 * @property boolean $DepositSupported
 * @property boolean $GlobalShippingEnabled
 * @property boolean $AdditionalCompatibilityEnabled
 * @property boolean $PickupDropOffEnabled
 * @property boolean $DigitalGoodDeliveryEnabled
 * @property boolean $EpidSupported
 * @property boolean $KTypeSupported
 * @property \DTS\eBaySDK\MerchantData\Enums\ProductRequiredEnabledCodeType $ProductRequiredEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\DomesticReturnsAcceptedCodeType $DomesticReturnsAcceptedValues
 * @property \DTS\eBaySDK\MerchantData\Types\InternationalReturnsAcceptedCodeType $InternationalReturnsAcceptedValues
 * @property \DTS\eBaySDK\MerchantData\Types\DomesticReturnsDurationCodeType $DomesticReturnsDurationValues
 * @property \DTS\eBaySDK\MerchantData\Types\InternationalReturnsDurationCodeType $InternationalReturnsDurationValues
 * @property \DTS\eBaySDK\MerchantData\Types\DomesticReturnsShipmentPayeeCodeType $DomesticReturnsShipmentPayeeValues
 * @property \DTS\eBaySDK\MerchantData\Types\InternationalReturnsShipmentPayeeCodeType $InternationalReturnsShipmentPayeeValues
 * @property \DTS\eBaySDK\MerchantData\Types\DomesticRefundMethodCodeType $DomesticRefundMethodValues
 * @property \DTS\eBaySDK\MerchantData\Types\InternationalRefundMethodCodeType $InternationalRefundMethodValues
 * @property boolean $ReturnPolicyDescriptionEnabled
 */
class CategoryFeatureType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'ListingDuration' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDurationReferenceType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ],
        'ShippingTermsRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ],
        'BestOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ],
        'UserConsentRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ],
        'HomePageFeaturedEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ],
        'ProPackEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ],
        'ValuePackEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ],
        'ProPackPlusEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ],
        'AdFormatEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ],
        'BestOfferCounterEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ],
        'BestOfferAutoDeclineEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ],
        'LocalMarketSpecialitySubscription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ],
        'LocalMarketRegularSubscription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ],
        'LocalMarketPremiumSubscription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ],
        'LocalMarketNonSubscription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ],
        'MinimumReservePrice' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ],
        'SellerContactDetailsEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ],
        'TransactionConfirmationRequestEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ],
        'ClassifiedAdPaymentMethodEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ],
        'ClassifiedAdShippingMethodEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ],
        'ClassifiedAdBestOfferEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ],
        'ClassifiedAdCounterOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ],
        'ClassifiedAdAutoDeclineEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ],
        'ClassifiedAdContactByPhoneEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ],
        'ClassifiedAdContactByEmailEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ],
        'SafePaymentRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ],
        'ClassifiedAdPayPerLeadEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ],
        'ItemSpecificsEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ],
        'PaisaPayFullEscrowEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ],
        'BrandMPNIdentifierEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ],
        'ClassifiedAdAutoAcceptEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ],
        'BestOfferAutoAcceptEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ],
        'CrossBorderTradeNorthAmericaEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ],
        'CrossBorderTradeGBEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ],
        'CrossBorderTradeAustraliaEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ],
        'PayPalBuyerProtectionEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ],
        'BuyerGuaranteeEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ],
        'GalleryFeaturedDurations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingEnhancementDurationReferenceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ],
        'PayPalRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ],
        'eBayMotorsProAdFormatEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ],
        'eBayMotorsProContactByPhoneEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ],
        'eBayMotorsProPhoneCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ],
        'eBayMotorsProContactByAddressEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ],
        'eBayMotorsProStreetCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
        ],
        'eBayMotorsProCompanyNameEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ],
        'eBayMotorsProContactByEmailEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ],
        'eBayMotorsProBestOfferEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ],
        'eBayMotorsProAutoAcceptEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoAcceptEnabled'
        ],
        'eBayMotorsProAutoDeclineEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoDeclineEnabled'
        ],
        'eBayMotorsProPaymentMethodCheckOutEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ],
        'eBayMotorsProShippingMethodEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ],
        'eBayMotorsProCounterOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ],
        'eBayMotorsProSellerContactDetailsEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ],
        'LocalMarketAdFormatEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ],
        'LocalMarketContactByPhoneEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ],
        'LocalMarketPhoneCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ],
        'LocalMarketContactByAddressEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ],
        'LocalMarketStreetCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ],
        'LocalMarketCompanyNameEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ],
        'LocalMarketContactByEmailEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ],
        'LocalMarketBestOfferEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ],
        'LocalMarketAutoAcceptEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoAcceptEnabled'
        ],
        'LocalMarketAutoDeclineEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoDeclineEnabled'
        ],
        'LocalMarketPaymentMethodCheckOutEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ],
        'LocalMarketShippingMethodEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ],
        'LocalMarketCounterOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ],
        'LocalMarketSellerContactDetailsEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ],
        'ClassifiedAdPhoneCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ],
        'ClassifiedAdContactByAddressEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ],
        'ClassifiedAdStreetCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ],
        'ClassifiedAdCompanyNameEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ],
        'SpecialitySubscription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ],
        'RegularSubscription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ],
        'PremiumSubscription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ],
        'NonSubscription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ],
        'INEscrowWorkflowTimeline' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ],
        'ReviseQuantityAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ],
        'RevisePriceAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ],
        'StoreOwnerExtendedListingDurationsEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ],
        'StoreOwnerExtendedListingDurations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\StoreOwnerExtendedListingDurationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ],
        'ReturnPolicyEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ],
        'HandlingTimeEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ],
        'MaxFlatShippingCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ],
        'Group1MaxFlatShippingCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Group1MaxFlatShippingCost'
        ],
        'Group2MaxFlatShippingCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Group2MaxFlatShippingCost'
        ],
        'Group3MaxFlatShippingCost' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Group3MaxFlatShippingCost'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ],
        'VariationsEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ],
        'FreeGalleryPlusEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreeGalleryPlusEnabled'
        ],
        'FreePicturePackEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreePicturePackEnabled'
        ],
        'ItemCompatibilityEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ],
        'MinItemCompatibility' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ],
        'MaxItemCompatibility' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ],
        'ConditionEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionEnabled'
        ],
        'ConditionValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ConditionValuesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionValues'
        ],
        'ValueCategory' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ],
        'ProductCreationEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ],
        'EANEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EANEnabled'
        ],
        'ISBNEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ISBNEnabled'
        ],
        'UPCEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UPCEnabled'
        ],
        'MaxGranularFitmentCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ],
        'CompatibleVehicleType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ],
        'ShippingProfileCategoryGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ],
        'PaymentProfileCategoryGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ],
        'ReturnPolicyProfileCategoryGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ],
        'VINSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VINSupported'
        ],
        'VRMSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VRMSupported'
        ],
        'SellerProvidedTitleSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ],
        'DepositSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ],
        'GlobalShippingEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ],
        'AdditionalCompatibilityEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ],
        'PickupDropOffEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDropOffEnabled'
        ],
        'DigitalGoodDeliveryEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodDeliveryEnabled'
        ],
        'EpidSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EpidSupported'
        ],
        'KTypeSupported' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'KTypeSupported'
        ],
        'ProductRequiredEnabled' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductRequiredEnabled'
        ],
        'DomesticReturnsAcceptedValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DomesticReturnsAcceptedCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DomesticReturnsAcceptedValues'
        ],
        'InternationalReturnsAcceptedValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\InternationalReturnsAcceptedCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalReturnsAcceptedValues'
        ],
        'DomesticReturnsDurationValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DomesticReturnsDurationCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DomesticReturnsDurationValues'
        ],
        'InternationalReturnsDurationValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\InternationalReturnsDurationCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalReturnsDurationValues'
        ],
        'DomesticReturnsShipmentPayeeValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DomesticReturnsShipmentPayeeCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DomesticReturnsShipmentPayeeValues'
        ],
        'InternationalReturnsShipmentPayeeValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\InternationalReturnsShipmentPayeeCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalReturnsShipmentPayeeValues'
        ],
        'DomesticRefundMethodValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DomesticRefundMethodCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DomesticRefundMethodValues'
        ],
        'InternationalRefundMethodValues' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\InternationalRefundMethodCodeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalRefundMethodValues'
        ],
        'ReturnPolicyDescriptionEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyDescriptionEnabled'
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
