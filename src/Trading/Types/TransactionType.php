<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\TaxesType $eBayCollectAndRemitTaxes
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountPaid
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedAdjustmentAmount
 * @property \DTS\eBaySDK\Trading\Types\UserType $Buyer
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedAmountPaid
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedTransactionPrice
 * @property \DateTime $CreatedDate
 * @property \DTS\eBaySDK\Trading\Enums\DepositTypeCodeType $DepositType
 * @property \DTS\eBaySDK\Trading\Types\ItemType $Item
 * @property integer $QuantityPurchased
 * @property \DTS\eBaySDK\Trading\Types\TransactionStatusType $Status
 * @property string $TransactionID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TransactionPrice
 * @property boolean $BestOfferSale
 * @property integer $VATPercent
 * @property \DTS\eBaySDK\Trading\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DTS\eBaySDK\Trading\Enums\PaidStatusCodeType $BuyerPaidStatus
 * @property \DTS\eBaySDK\Trading\Enums\PaidStatusCodeType $SellerPaidStatus
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalPrice
 * @property \DTS\eBaySDK\Trading\Types\FeedbackInfoType $FeedbackLeft
 * @property \DTS\eBaySDK\Trading\Types\FeedbackInfoType $FeedbackReceived
 * @property \DTS\eBaySDK\Trading\Types\OrderType $ContainingOrder
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FinalValueFee
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $TransactionSiteID
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType $Platform
 * @property string $PayPalEmailAddress
 * @property string $PaisaPayID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\Trading\Types\VariationType $Variation
 * @property string $BuyerCheckoutMessage
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalTransactionPrice
 * @property \DTS\eBaySDK\Trading\Types\TaxesType $Taxes
 * @property boolean $BundlePurchase
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ActualHandlingCost
 * @property string $OrderLineItemID
 * @property string $eBayPaymentID
 * @property \DTS\eBaySDK\Trading\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DTS\eBaySDK\Trading\Types\SellerDiscountsType $SellerDiscounts
 * @property string $CodiceFiscale
 * @property boolean $IsMultiLegShipping
 * @property \DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DateTime $InvoiceSentTime
 * @property \DTS\eBaySDK\Trading\Types\UnpaidItemType $UnpaidItem
 * @property boolean $IntangibleItem
 * @property \DTS\eBaySDK\Trading\Types\PaymentsInformationType $MonetaryDetails
 * @property \DTS\eBaySDK\Trading\Types\PickupDetailsType $PickupDetails
 * @property \DTS\eBaySDK\Trading\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ShippingConvenienceCharge
 * @property string $LogisticsPlanType
 * @property \DTS\eBaySDK\Trading\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $InventoryReservationID
 * @property string $ExtendedOrderID
 * @property boolean $eBayPlusTransaction
 * @property \DTS\eBaySDK\Trading\Types\GiftSummaryType $GiftSummary
 * @property \DTS\eBaySDK\Trading\Types\DigitalDeliverySelectedType $DigitalDeliverySelected
 * @property boolean $Gift
 * @property boolean $GuaranteedShipping
 * @property boolean $GuaranteedDelivery
 */
class TransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AmountPaid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AdjustmentAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'ConvertedAdjustmentAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAdjustmentAmount'
        ],
        'Buyer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ],
        'ShippingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ConvertedAmountPaid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAmountPaid'
        ],
        'ConvertedTransactionPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedTransactionPrice'
        ],
        'CreatedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedDate'
        ],
        'eBayCollectAndRemitTaxes' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TaxesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayCollectAndRemitTaxes'
        ],
        'DepositType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DepositType'
        ],
        'Item' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'QuantityPurchased' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityPurchased'
        ],
        'Status' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'TransactionPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionPrice'
        ],
        'BestOfferSale' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferSale'
        ],
        'VATPercent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
        ],
        'ExternalTransaction' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'SellingManagerProductDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'ShippingServiceSelected' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'BuyerPaidStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaidStatus'
        ],
        'SellerPaidStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaidStatus'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'TotalPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalPrice'
        ],
        'FeedbackLeft' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeft'
        ],
        'FeedbackReceived' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ],
        'ContainingOrder' => [
            'type' => 'DTS\eBaySDK\Trading\Types\OrderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainingOrder'
        ],
        'FinalValueFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ],
        'TransactionSiteID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionSiteID'
        ],
        'Platform' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'PaisaPayID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayID'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'Variation' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VariationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'TotalTransactionPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalTransactionPrice'
        ],
        'Taxes' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TaxesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ],
        'BundlePurchase' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ],
        'ActualShippingCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ],
        'ActualHandlingCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualHandlingCost'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'eBayPaymentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentID'
        ],
        'PaymentHoldDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'SellerDiscounts' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerDiscountsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerDiscounts'
        ],
        'CodiceFiscale' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CodiceFiscale'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'InvoiceSentTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceSentTime'
        ],
        'UnpaidItem' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UnpaidItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ],
        'IntangibleItem' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntangibleItem'
        ],
        'MonetaryDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'InventoryReservationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryReservationID'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'eBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusTransaction'
        ],
        'GiftSummary' => [
            'type' => 'DTS\eBaySDK\Trading\Types\GiftSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GiftSummary'
        ],
        'DigitalDeliverySelected' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DigitalDeliverySelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalDeliverySelected'
        ],
        'Gift' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Gift'
        ],
        'GuaranteedShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GuaranteedShipping'
        ],
        'GuaranteedDelivery' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GuaranteedDelivery'
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
