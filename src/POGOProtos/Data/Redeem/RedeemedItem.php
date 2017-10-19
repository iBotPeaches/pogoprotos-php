<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Redeem/RedeemedItem.proto

namespace POGOProtos\Data\Redeem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Redeem.RedeemedItem</code>
 */
class RedeemedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    private $item = 0;
    /**
     * <code>int32 item_count = 2;</code>
     */
    private $item_count = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Redeem\RedeemedItem::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function setItem($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item = $var;
    }

    /**
     * <code>int32 item_count = 2;</code>
     */
    public function getItemCount()
    {
        return $this->item_count;
    }

    /**
     * <code>int32 item_count = 2;</code>
     */
    public function setItemCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->item_count = $var;
    }

}

