<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/DailyQuest.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.DailyQuest</code>
 */
class DailyQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 current_period_bucket = 1;</code>
     */
    private $current_period_bucket = 0;
    /**
     * Generated from protobuf field <code>int32 current_streak_count = 2;</code>
     */
    private $current_streak_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $current_period_bucket
     *     @type int $current_streak_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\DailyQuest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 current_period_bucket = 1;</code>
     * @return int
     */
    public function getCurrentPeriodBucket()
    {
        return $this->current_period_bucket;
    }

    /**
     * Generated from protobuf field <code>int32 current_period_bucket = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentPeriodBucket($var)
    {
        GPBUtil::checkInt32($var);
        $this->current_period_bucket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 current_streak_count = 2;</code>
     * @return int
     */
    public function getCurrentStreakCount()
    {
        return $this->current_streak_count;
    }

    /**
     * Generated from protobuf field <code>int32 current_streak_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentStreakCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->current_streak_count = $var;

        return $this;
    }

}

