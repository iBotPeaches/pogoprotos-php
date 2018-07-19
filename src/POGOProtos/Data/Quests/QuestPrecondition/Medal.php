<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestPrecondition.proto

namespace POGOProtos\Data\Quests\QuestPrecondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.QuestPrecondition.Medal</code>
 */
class Medal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPrecondition.Operator operator = 2;</code>
     */
    private $operator = 0;
    /**
     * Generated from protobuf field <code>int32 badge_rank = 3;</code>
     */
    private $badge_rank = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $operator
     *     @type int $badge_rank
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\QuestPrecondition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPrecondition.Operator operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPrecondition.Operator operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Quests\QuestPrecondition_Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 badge_rank = 3;</code>
     * @return int
     */
    public function getBadgeRank()
    {
        return $this->badge_rank;
    }

    /**
     * Generated from protobuf field <code>int32 badge_rank = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBadgeRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->badge_rank = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Medal::class, \POGOProtos\Data\Quests\QuestPrecondition_Medal::class);

