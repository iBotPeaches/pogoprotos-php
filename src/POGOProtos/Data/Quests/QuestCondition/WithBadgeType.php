<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestCondition.proto

namespace POGOProtos\Data\Quests\QuestCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.QuestCondition.WithBadgeType</code>
 */
class WithBadgeType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    private $badge_type;
    /**
     * Generated from protobuf field <code>int32 badge_rank = 2;</code>
     */
    private $badge_rank = 0;
    /**
     * Generated from protobuf field <code>int32 amount = 3;</code>
     */
    private $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $badge_type
     *     @type int $badge_rank
     *     @type int $amount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\QuestCondition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBadgeType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\BadgeType::class);
        $this->badge_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 badge_rank = 2;</code>
     * @return int
     */
    public function getBadgeRank()
    {
        return $this->badge_rank;
    }

    /**
     * Generated from protobuf field <code>int32 badge_rank = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBadgeRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->badge_rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 3;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WithBadgeType::class, \POGOProtos\Data\Quests\QuestCondition_WithBadgeType::class);

