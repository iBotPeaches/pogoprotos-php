<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/FriendshipMilestoneRewardNotification.proto

namespace POGOProtos\Data\Friends;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Friends.FriendshipMilestoneRewardNotification</code>
 */
class FriendshipMilestoneRewardNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string friend_id = 1;</code>
     */
    private $friend_id = '';
    /**
     * <code>string friend_codename = 2;</code>
     */
    private $friend_codename = '';
    /**
     * <code>int32 friendship_milestone_level = 3;</code>
     */
    private $friendship_milestone_level = 0;
    /**
     * <code>int64 xp_reward = 4;</code>
     */
    private $xp_reward = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Friends\FriendshipMilestoneRewardNotification::initOnce();
        parent::__construct();
    }

    /**
     * <code>string friend_id = 1;</code>
     */
    public function getFriendId()
    {
        return $this->friend_id;
    }

    /**
     * <code>string friend_id = 1;</code>
     */
    public function setFriendId($var)
    {
        GPBUtil::checkString($var, True);
        $this->friend_id = $var;
    }

    /**
     * <code>string friend_codename = 2;</code>
     */
    public function getFriendCodename()
    {
        return $this->friend_codename;
    }

    /**
     * <code>string friend_codename = 2;</code>
     */
    public function setFriendCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->friend_codename = $var;
    }

    /**
     * <code>int32 friendship_milestone_level = 3;</code>
     */
    public function getFriendshipMilestoneLevel()
    {
        return $this->friendship_milestone_level;
    }

    /**
     * <code>int32 friendship_milestone_level = 3;</code>
     */
    public function setFriendshipMilestoneLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->friendship_milestone_level = $var;
    }

    /**
     * <code>int64 xp_reward = 4;</code>
     */
    public function getXpReward()
    {
        return $this->xp_reward;
    }

    /**
     * <code>int64 xp_reward = 4;</code>
     */
    public function setXpReward($var)
    {
        GPBUtil::checkInt64($var);
        $this->xp_reward = $var;
    }

}

