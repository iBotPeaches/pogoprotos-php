<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetAvailableSkusAndBalancesResponse.proto

namespace POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.AvailableSku</code>
 */
class AvailableSku extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal ID (probably for Google Play/App Store) example: "pgorelease.incenseordinary.1"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * If true, this item is bought with real currency (USD, etc.) through the Play/App Store instead of Pokecoins
     *
     * Generated from protobuf field <code>bool is_third_party_vendor_item = 2;</code>
     */
    private $is_third_party_vendor_item = false;
    /**
     * This defines how much the item costs (with the exception of items that cost real money like Pokecoins, that's defined in the respective store)
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity price = 3;</code>
     */
    private $price = null;
    /**
     * When bought, this IAP will yield this much currency
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity currency_granted = 4;</code>
     */
    private $currency_granted = null;
    /**
     * The item and count of such item that this IAP will yield
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.GameItemContent game_item_content = 5;</code>
     */
    private $game_item_content;
    /**
     * Stuff like SORT:12, CATEGORY:ITEMS
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.SkuPresentation presentation_data = 6;</code>
     */
    private $presentation_data;
    /**
     * Possibly something to toggle visibility in the store/purchasibility?
     *
     * Generated from protobuf field <code>bool can_be_purchased = 7;</code>
     */
    private $can_be_purchased = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Internal ID (probably for Google Play/App Store) example: "pgorelease.incenseordinary.1"
     *     @type bool $is_third_party_vendor_item
     *           If true, this item is bought with real currency (USD, etc.) through the Play/App Store instead of Pokecoins
     *     @type \POGOProtos\Data\Store\CurrencyQuantity $price
     *           This defines how much the item costs (with the exception of items that cost real money like Pokecoins, that's defined in the respective store)
     *     @type \POGOProtos\Data\Store\CurrencyQuantity $currency_granted
     *           When bought, this IAP will yield this much currency
     *     @type \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\GameItemContent[]|\Google\Protobuf\Internal\RepeatedField $game_item_content
     *           The item and count of such item that this IAP will yield
     *     @type \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\SkuPresentation[]|\Google\Protobuf\Internal\RepeatedField $presentation_data
     *           Stuff like SORT:12, CATEGORY:ITEMS
     *     @type bool $can_be_purchased
     *           Possibly something to toggle visibility in the store/purchasibility?
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Internal ID (probably for Google Play/App Store) example: "pgorelease.incenseordinary.1"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Internal ID (probably for Google Play/App Store) example: "pgorelease.incenseordinary.1"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * If true, this item is bought with real currency (USD, etc.) through the Play/App Store instead of Pokecoins
     *
     * Generated from protobuf field <code>bool is_third_party_vendor_item = 2;</code>
     * @return bool
     */
    public function getIsThirdPartyVendorItem()
    {
        return $this->is_third_party_vendor_item;
    }

    /**
     * If true, this item is bought with real currency (USD, etc.) through the Play/App Store instead of Pokecoins
     *
     * Generated from protobuf field <code>bool is_third_party_vendor_item = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsThirdPartyVendorItem($var)
    {
        GPBUtil::checkBool($var);
        $this->is_third_party_vendor_item = $var;

        return $this;
    }

    /**
     * This defines how much the item costs (with the exception of items that cost real money like Pokecoins, that's defined in the respective store)
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity price = 3;</code>
     * @return \POGOProtos\Data\Store\CurrencyQuantity
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * This defines how much the item costs (with the exception of items that cost real money like Pokecoins, that's defined in the respective store)
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity price = 3;</code>
     * @param \POGOProtos\Data\Store\CurrencyQuantity $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Store\CurrencyQuantity::class);
        $this->price = $var;

        return $this;
    }

    /**
     * When bought, this IAP will yield this much currency
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity currency_granted = 4;</code>
     * @return \POGOProtos\Data\Store\CurrencyQuantity
     */
    public function getCurrencyGranted()
    {
        return $this->currency_granted;
    }

    /**
     * When bought, this IAP will yield this much currency
     *
     * Generated from protobuf field <code>.POGOProtos.Data.Store.CurrencyQuantity currency_granted = 4;</code>
     * @param \POGOProtos\Data\Store\CurrencyQuantity $var
     * @return $this
     */
    public function setCurrencyGranted($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Store\CurrencyQuantity::class);
        $this->currency_granted = $var;

        return $this;
    }

    /**
     * The item and count of such item that this IAP will yield
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.GameItemContent game_item_content = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGameItemContent()
    {
        return $this->game_item_content;
    }

    /**
     * The item and count of such item that this IAP will yield
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.GameItemContent game_item_content = 5;</code>
     * @param \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\GameItemContent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGameItemContent($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\GameItemContent::class);
        $this->game_item_content = $arr;

        return $this;
    }

    /**
     * Stuff like SORT:12, CATEGORY:ITEMS
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.SkuPresentation presentation_data = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPresentationData()
    {
        return $this->presentation_data;
    }

    /**
     * Stuff like SORT:12, CATEGORY:ITEMS
     *
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetAvailableSkusAndBalancesResponse.SkuPresentation presentation_data = 6;</code>
     * @param \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\SkuPresentation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPresentationData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse\SkuPresentation::class);
        $this->presentation_data = $arr;

        return $this;
    }

    /**
     * Possibly something to toggle visibility in the store/purchasibility?
     *
     * Generated from protobuf field <code>bool can_be_purchased = 7;</code>
     * @return bool
     */
    public function getCanBePurchased()
    {
        return $this->can_be_purchased;
    }

    /**
     * Possibly something to toggle visibility in the store/purchasibility?
     *
     * Generated from protobuf field <code>bool can_be_purchased = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanBePurchased($var)
    {
        GPBUtil::checkBool($var);
        $this->can_be_purchased = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AvailableSku::class, \POGOProtos\Networking\Responses\GetAvailableSkusAndBalancesResponse_AvailableSku::class);

