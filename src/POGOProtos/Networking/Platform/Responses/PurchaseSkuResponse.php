<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/PurchaseSkuResponse.proto

namespace POGOProtos\Networking\Platform\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Responses.PurchaseSkuResponse</code>
 */
class PurchaseSkuResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.PurchaseSkuResponse.Status result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated bytes added_inventory_item = 2;</code>
     */
    private $added_inventory_item;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyUpdate currency_update = 3;</code>
     */
    private $currency_update;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $added_inventory_item
     *     @type \POGOProtos\Data\Store\CurrencyUpdate[]|\Google\Protobuf\Internal\RepeatedField $currency_update
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Responses\PurchaseSkuResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.PurchaseSkuResponse.Status result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.PurchaseSkuResponse.Status result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Platform\Responses\PurchaseSkuResponse_Status::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes added_inventory_item = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddedInventoryItem()
    {
        return $this->added_inventory_item;
    }

    /**
     * Generated from protobuf field <code>repeated bytes added_inventory_item = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddedInventoryItem($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->added_inventory_item = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyUpdate currency_update = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurrencyUpdate()
    {
        return $this->currency_update;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyUpdate currency_update = 3;</code>
     * @param \POGOProtos\Data\Store\CurrencyUpdate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurrencyUpdate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Store\CurrencyUpdate::class);
        $this->currency_update = $arr;

        return $this;
    }

}

