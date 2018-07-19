<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/BadgeSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.BadgeSettings</code>
 */
class BadgeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    private $badge_type = 0;
    /**
     * Generated from protobuf field <code>int32 badge_rank = 2;</code>
     */
    private $badge_rank = 0;
    /**
     * Generated from protobuf field <code>repeated int32 targets = 3;</code>
     */
    private $targets;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     */
    private $capture_reward;
    /**
     * Generated from protobuf field <code>bool event_badge = 5;</code>
     */
    private $event_badge = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     */
    private $event_badge_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $badge_type
     *     @type int $badge_rank
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $targets
     *     @type \POGOProtos\Data\Badge\BadgeCaptureReward[]|\Google\Protobuf\Internal\RepeatedField $capture_reward
     *     @type bool $event_badge
     *     @type \POGOProtos\Settings\Master\EventBadgeSettings $event_badge_settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\BadgeSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @return int
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->badge_type = $var;

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
     * Generated from protobuf field <code>repeated int32 targets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * Generated from protobuf field <code>repeated int32 targets = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->targets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCaptureReward()
    {
        return $this->capture_reward;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     * @param \POGOProtos\Data\Badge\BadgeCaptureReward[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCaptureReward($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Badge\BadgeCaptureReward::class);
        $this->capture_reward = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool event_badge = 5;</code>
     * @return bool
     */
    public function getEventBadge()
    {
        return $this->event_badge;
    }

    /**
     * Generated from protobuf field <code>bool event_badge = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEventBadge($var)
    {
        GPBUtil::checkBool($var);
        $this->event_badge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     * @return \POGOProtos\Settings\Master\EventBadgeSettings
     */
    public function getEventBadgeSettings()
    {
        return $this->event_badge_settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     * @param \POGOProtos\Settings\Master\EventBadgeSettings $var
     * @return $this
     */
    public function setEventBadgeSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\EventBadgeSettings::class);
        $this->event_badge_settings = $var;

        return $this;
    }

}

