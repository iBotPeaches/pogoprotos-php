<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/RaidRewardsLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Logs.RaidRewardsLogEntry</code>
 */
class RaidRewardsLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Logs.RaidRewardsLogEntry.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>bool is_exclusive = 2;</code>
     */
    private $is_exclusive = false;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    private $items;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData default_rewards = 4;</code>
     */
    private $default_rewards;
    /**
     * <code>int32 stardust = 5;</code>
     */
    private $stardust = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Logs\RaidRewardsLogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Logs.RaidRewardsLogEntry.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Data.Logs.RaidRewardsLogEntry.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Logs\RaidRewardsLogEntry_Result::class);
        $this->result = $var;
    }

    /**
     * <code>bool is_exclusive = 2;</code>
     */
    public function getIsExclusive()
    {
        return $this->is_exclusive;
    }

    /**
     * <code>bool is_exclusive = 2;</code>
     */
    public function setIsExclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_exclusive = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    public function setItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->items = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData default_rewards = 4;</code>
     */
    public function getDefaultRewards()
    {
        return $this->default_rewards;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData default_rewards = 4;</code>
     */
    public function setDefaultRewards(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->default_rewards = $var;
    }

    /**
     * <code>int32 stardust = 5;</code>
     */
    public function getStardust()
    {
        return $this->stardust;
    }

    /**
     * <code>int32 stardust = 5;</code>
     */
    public function setStardust($var)
    {
        GPBUtil::checkInt32($var);
        $this->stardust = $var;
    }

}
