<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetCombatResultsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetCombatResultsResponse</code>
 */
class GetCombatResultsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatRewardStatus reward_status = 2;</code>
     */
    private $reward_status = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 3;</code>
     */
    private $rewards = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.LeveledUpFriends friend_level_up = 4;</code>
     */
    private $friend_level_up = null;
    /**
     * Generated from protobuf field <code>int32 number_rewarded_battles_today = 5;</code>
     */
    private $number_rewarded_battles_today = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatPlayerFinishState combat_player_finish_state = 6;</code>
     */
    private $combat_player_finish_state = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.CombatRematch combat_rematch = 7;</code>
     */
    private $combat_rematch = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type int $reward_status
     *     @type \POGOProtos\Inventory\Loot $rewards
     *     @type \POGOProtos\Data\Friends\LeveledUpFriends $friend_level_up
     *     @type int $number_rewarded_battles_today
     *     @type int $combat_player_finish_state
     *     @type \POGOProtos\Networking\Responses\GetCombatResultsResponse\CombatRematch $combat_rematch
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetCombatResultsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetCombatResultsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatRewardStatus reward_status = 2;</code>
     * @return int
     */
    public function getRewardStatus()
    {
        return $this->reward_status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatRewardStatus reward_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\CombatRewardStatus::class);
        $this->reward_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 3;</code>
     * @return \POGOProtos\Inventory\Loot
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 3;</code>
     * @param \POGOProtos\Inventory\Loot $var
     * @return $this
     */
    public function setRewards($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Loot::class);
        $this->rewards = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.LeveledUpFriends friend_level_up = 4;</code>
     * @return \POGOProtos\Data\Friends\LeveledUpFriends
     */
    public function getFriendLevelUp()
    {
        return $this->friend_level_up;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.LeveledUpFriends friend_level_up = 4;</code>
     * @param \POGOProtos\Data\Friends\LeveledUpFriends $var
     * @return $this
     */
    public function setFriendLevelUp($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Friends\LeveledUpFriends::class);
        $this->friend_level_up = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 number_rewarded_battles_today = 5;</code>
     * @return int
     */
    public function getNumberRewardedBattlesToday()
    {
        return $this->number_rewarded_battles_today;
    }

    /**
     * Generated from protobuf field <code>int32 number_rewarded_battles_today = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberRewardedBattlesToday($var)
    {
        GPBUtil::checkInt32($var);
        $this->number_rewarded_battles_today = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatPlayerFinishState combat_player_finish_state = 6;</code>
     * @return int
     */
    public function getCombatPlayerFinishState()
    {
        return $this->combat_player_finish_state;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.CombatPlayerFinishState combat_player_finish_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCombatPlayerFinishState($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\CombatPlayerFinishState::class);
        $this->combat_player_finish_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.CombatRematch combat_rematch = 7;</code>
     * @return \POGOProtos\Networking\Responses\GetCombatResultsResponse\CombatRematch
     */
    public function getCombatRematch()
    {
        return $this->combat_rematch;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetCombatResultsResponse.CombatRematch combat_rematch = 7;</code>
     * @param \POGOProtos\Networking\Responses\GetCombatResultsResponse\CombatRematch $var
     * @return $this
     */
    public function setCombatRematch($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Responses\GetCombatResultsResponse_CombatRematch::class);
        $this->combat_rematch = $var;

        return $this;
    }

}

