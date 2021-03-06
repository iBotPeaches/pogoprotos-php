<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/LevelUpRewardsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.LevelUpRewardsResponse</code>
 */
class LevelUpRewardsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LevelUpRewardsResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     */
    private $items_awarded;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemId items_unlocked = 4;</code>
     */
    private $items_unlocked;
    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 5;</code>
     */
    private $avatar_template_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Inventory\Item\ItemAward[]|\Google\Protobuf\Internal\RepeatedField $items_awarded
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $items_unlocked
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $avatar_template_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\LevelUpRewardsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LevelUpRewardsResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LevelUpRewardsResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\LevelUpRewardsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemsAwarded()
    {
        return $this->items_awarded;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     * @param \POGOProtos\Inventory\Item\ItemAward[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemsAwarded($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemAward::class);
        $this->items_awarded = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemId items_unlocked = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemsUnlocked()
    {
        return $this->items_unlocked;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Inventory.Item.ItemId items_unlocked = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemsUnlocked($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Inventory\Item\ItemId::class);
        $this->items_unlocked = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarTemplateIds()
    {
        return $this->avatar_template_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarTemplateIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->avatar_template_ids = $arr;

        return $this;
    }

}

