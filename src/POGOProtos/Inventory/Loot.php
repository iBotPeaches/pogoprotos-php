<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/Loot.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Inventory.Loot</code>
 */
class Loot extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.LootItem loot_item = 1;</code>
     */
    private $loot_item;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Inventory\LootItem[]|\Google\Protobuf\Internal\RepeatedField $loot_item
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Inventory\Loot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.LootItem loot_item = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLootItem()
    {
        return $this->loot_item;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.LootItem loot_item = 1;</code>
     * @param \POGOProtos\Inventory\LootItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLootItem($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\LootItem::class);
        $this->loot_item = $arr;

        return $this;
    }

}

