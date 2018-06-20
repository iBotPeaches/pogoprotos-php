<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/BadgeSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.BadgeSettings</code>
 */
class BadgeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    private $badge_type = 0;
    /**
     * <code>int32 badge_rank = 2;</code>
     */
    private $badge_rank = 0;
    /**
     * <code>repeated int32 targets = 3;</code>
     */
    private $targets;
    /**
     * <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     */
    private $capture_reward;
    /**
     * <code>bool event_badge = 5;</code>
     */
    private $event_badge = false;
    /**
     * <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     */
    private $event_badge_settings = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\BadgeSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    public function setBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->badge_type = $var;
    }

    /**
     * <code>int32 badge_rank = 2;</code>
     */
    public function getBadgeRank()
    {
        return $this->badge_rank;
    }

    /**
     * <code>int32 badge_rank = 2;</code>
     */
    public function setBadgeRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->badge_rank = $var;
    }

    /**
     * <code>repeated int32 targets = 3;</code>
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * <code>repeated int32 targets = 3;</code>
     */
    public function setTargets(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->targets = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     */
    public function getCaptureReward()
    {
        return $this->capture_reward;
    }

    /**
     * <code>repeated .POGOProtos.Data.Badge.BadgeCaptureReward capture_reward = 4;</code>
     */
    public function setCaptureReward(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Badge\BadgeCaptureReward::class);
        $this->capture_reward = $var;
    }

    /**
     * <code>bool event_badge = 5;</code>
     */
    public function getEventBadge()
    {
        return $this->event_badge;
    }

    /**
     * <code>bool event_badge = 5;</code>
     */
    public function setEventBadge($var)
    {
        GPBUtil::checkBool($var);
        $this->event_badge = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     */
    public function getEventBadgeSettings()
    {
        return $this->event_badge_settings;
    }

    /**
     * <code>.POGOProtos.Settings.Master.EventBadgeSettings event_badge_settings = 6;</code>
     */
    public function setEventBadgeSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\EventBadgeSettings::class);
        $this->event_badge_settings = $var;
    }

}

