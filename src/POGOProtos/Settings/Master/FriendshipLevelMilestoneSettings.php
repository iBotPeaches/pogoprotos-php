<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/FriendshipLevelMilestoneSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.FriendshipLevelMilestoneSettings</code>
 */
class FriendshipLevelMilestoneSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 min_points_to_reach = 1;</code>
     */
    private $min_points_to_reach = 0;
    /**
     * Generated from protobuf field <code>int32 milestone_xp_reward = 2;</code>
     */
    private $milestone_xp_reward = 0;
    /**
     * Generated from protobuf field <code>float attack_bonus_percentage = 3;</code>
     */
    private $attack_bonus_percentage = 0.0;
    /**
     * Generated from protobuf field <code>int32 raid_ball_bonus = 4;</code>
     */
    private $raid_ball_bonus = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonTradingType unlocked_trading = 5;</code>
     */
    private $unlocked_trading;
    /**
     * Generated from protobuf field <code>float trading_discount = 6;</code>
     */
    private $trading_discount = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_points_to_reach
     *     @type int $milestone_xp_reward
     *     @type float $attack_bonus_percentage
     *     @type int $raid_ball_bonus
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $unlocked_trading
     *     @type float $trading_discount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\FriendshipLevelMilestoneSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 min_points_to_reach = 1;</code>
     * @return int
     */
    public function getMinPointsToReach()
    {
        return $this->min_points_to_reach;
    }

    /**
     * Generated from protobuf field <code>int32 min_points_to_reach = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPointsToReach($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_points_to_reach = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 milestone_xp_reward = 2;</code>
     * @return int
     */
    public function getMilestoneXpReward()
    {
        return $this->milestone_xp_reward;
    }

    /**
     * Generated from protobuf field <code>int32 milestone_xp_reward = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMilestoneXpReward($var)
    {
        GPBUtil::checkInt32($var);
        $this->milestone_xp_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float attack_bonus_percentage = 3;</code>
     * @return float
     */
    public function getAttackBonusPercentage()
    {
        return $this->attack_bonus_percentage;
    }

    /**
     * Generated from protobuf field <code>float attack_bonus_percentage = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAttackBonusPercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack_bonus_percentage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 raid_ball_bonus = 4;</code>
     * @return int
     */
    public function getRaidBallBonus()
    {
        return $this->raid_ball_bonus;
    }

    /**
     * Generated from protobuf field <code>int32 raid_ball_bonus = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRaidBallBonus($var)
    {
        GPBUtil::checkInt32($var);
        $this->raid_ball_bonus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonTradingType unlocked_trading = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnlockedTrading()
    {
        return $this->unlocked_trading;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonTradingType unlocked_trading = 5;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnlockedTrading($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\PokemonTradingType::class);
        $this->unlocked_trading = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float trading_discount = 6;</code>
     * @return float
     */
    public function getTradingDiscount()
    {
        return $this->trading_discount;
    }

    /**
     * Generated from protobuf field <code>float trading_discount = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setTradingDiscount($var)
    {
        GPBUtil::checkFloat($var);
        $this->trading_discount = $var;

        return $this;
    }

}

