<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestStampCard.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.QuestStampCard</code>
 */
class QuestStampCard extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestStamp stamp = 1;</code>
     */
    private $stamp;
    /**
     * Generated from protobuf field <code>int32 target = 2;</code>
     */
    private $target = 0;
    /**
     * Generated from protobuf field <code>int32 remaining_daily_stamps = 3;</code>
     */
    private $remaining_daily_stamps = 0;
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    private $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Quests\QuestStamp[]|\Google\Protobuf\Internal\RepeatedField $stamp
     *     @type int $target
     *     @type int $remaining_daily_stamps
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\QuestStampCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestStamp stamp = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStamp()
    {
        return $this->stamp;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestStamp stamp = 1;</code>
     * @param \POGOProtos\Data\Quests\QuestStamp[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStamp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Quests\QuestStamp::class);
        $this->stamp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 target = 2;</code>
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Generated from protobuf field <code>int32 target = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkInt32($var);
        $this->target = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 remaining_daily_stamps = 3;</code>
     * @return int
     */
    public function getRemainingDailyStamps()
    {
        return $this->remaining_daily_stamps;
    }

    /**
     * Generated from protobuf field <code>int32 remaining_daily_stamps = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRemainingDailyStamps($var)
    {
        GPBUtil::checkInt32($var);
        $this->remaining_daily_stamps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}
