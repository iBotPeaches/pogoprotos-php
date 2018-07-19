<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/FriendshipLevelData.proto

namespace POGOProtos\Data\Friends;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Friends.FriendshipLevelData</code>
 */
class FriendshipLevelData extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 bucket = 1;</code>
     */
    private $bucket = 0;
    /**
     * <code>int32 points_earned_today = 2;</code>
     */
    private $points_earned_today = 0;
    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone awarded_friendship_milestone = 3;</code>
     */
    private $awarded_friendship_milestone = 0;
    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone current_friendship_milestone = 4;</code>
     */
    private $current_friendship_milestone = 0;
    /**
     * <code>double next_friendship_milestone_progress_percentage = 5;</code>
     */
    private $next_friendship_milestone_progress_percentage = 0.0;
    /**
     * <code>int32 points_toward_next_milestone = 6;</code>
     */
    private $points_toward_next_milestone = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Friends\FriendshipLevelData::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 bucket = 1;</code>
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * <code>int64 bucket = 1;</code>
     */
    public function setBucket($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket = $var;
    }

    /**
     * <code>int32 points_earned_today = 2;</code>
     */
    public function getPointsEarnedToday()
    {
        return $this->points_earned_today;
    }

    /**
     * <code>int32 points_earned_today = 2;</code>
     */
    public function setPointsEarnedToday($var)
    {
        GPBUtil::checkInt32($var);
        $this->points_earned_today = $var;
    }

    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone awarded_friendship_milestone = 3;</code>
     */
    public function getAwardedFriendshipMilestone()
    {
        return $this->awarded_friendship_milestone;
    }

    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone awarded_friendship_milestone = 3;</code>
     */
    public function setAwardedFriendshipMilestone($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\FriendshipLevelMilestone::class);
        $this->awarded_friendship_milestone = $var;
    }

    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone current_friendship_milestone = 4;</code>
     */
    public function getCurrentFriendshipMilestone()
    {
        return $this->current_friendship_milestone;
    }

    /**
     * <code>.POGOProtos.Enums.FriendshipLevelMilestone current_friendship_milestone = 4;</code>
     */
    public function setCurrentFriendshipMilestone($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\FriendshipLevelMilestone::class);
        $this->current_friendship_milestone = $var;
    }

    /**
     * <code>double next_friendship_milestone_progress_percentage = 5;</code>
     */
    public function getNextFriendshipMilestoneProgressPercentage()
    {
        return $this->next_friendship_milestone_progress_percentage;
    }

    /**
     * <code>double next_friendship_milestone_progress_percentage = 5;</code>
     */
    public function setNextFriendshipMilestoneProgressPercentage($var)
    {
        GPBUtil::checkDouble($var);
        $this->next_friendship_milestone_progress_percentage = $var;
    }

    /**
     * <code>int32 points_toward_next_milestone = 6;</code>
     */
    public function getPointsTowardNextMilestone()
    {
        return $this->points_toward_next_milestone;
    }

    /**
     * <code>int32 points_toward_next_milestone = 6;</code>
     */
    public function setPointsTowardNextMilestone($var)
    {
        GPBUtil::checkInt32($var);
        $this->points_toward_next_milestone = $var;
    }

}

