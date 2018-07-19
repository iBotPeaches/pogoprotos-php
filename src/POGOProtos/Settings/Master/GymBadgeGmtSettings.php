<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GymBadgeGmtSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.GymBadgeGmtSettings</code>
 */
class GymBadgeGmtSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 target = 1;</code>
     */
    private $target;
    /**
     * Generated from protobuf field <code>float battle_winning_score_per_defender_cp = 2;</code>
     */
    private $battle_winning_score_per_defender_cp = 0.0;
    /**
     * Generated from protobuf field <code>float gym_defending_score_per_minute = 3;</code>
     */
    private $gym_defending_score_per_minute = 0.0;
    /**
     * Generated from protobuf field <code>int32 berry_feeding_score = 4;</code>
     */
    private $berry_feeding_score = 0;
    /**
     * Generated from protobuf field <code>int32 pokemon_deploy_score = 5;</code>
     */
    private $pokemon_deploy_score = 0;
    /**
     * Generated from protobuf field <code>int32 raid_battle_winning_score = 6;</code>
     */
    private $raid_battle_winning_score = 0;
    /**
     * Generated from protobuf field <code>int32 lose_all_battles_score = 7;</code>
     */
    private $lose_all_battles_score = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $target
     *     @type float $battle_winning_score_per_defender_cp
     *     @type float $gym_defending_score_per_minute
     *     @type int $berry_feeding_score
     *     @type int $pokemon_deploy_score
     *     @type int $raid_battle_winning_score
     *     @type int $lose_all_battles_score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\GymBadgeGmtSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 target = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Generated from protobuf field <code>repeated int32 target = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTarget($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->target = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float battle_winning_score_per_defender_cp = 2;</code>
     * @return float
     */
    public function getBattleWinningScorePerDefenderCp()
    {
        return $this->battle_winning_score_per_defender_cp;
    }

    /**
     * Generated from protobuf field <code>float battle_winning_score_per_defender_cp = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBattleWinningScorePerDefenderCp($var)
    {
        GPBUtil::checkFloat($var);
        $this->battle_winning_score_per_defender_cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float gym_defending_score_per_minute = 3;</code>
     * @return float
     */
    public function getGymDefendingScorePerMinute()
    {
        return $this->gym_defending_score_per_minute;
    }

    /**
     * Generated from protobuf field <code>float gym_defending_score_per_minute = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setGymDefendingScorePerMinute($var)
    {
        GPBUtil::checkFloat($var);
        $this->gym_defending_score_per_minute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 berry_feeding_score = 4;</code>
     * @return int
     */
    public function getBerryFeedingScore()
    {
        return $this->berry_feeding_score;
    }

    /**
     * Generated from protobuf field <code>int32 berry_feeding_score = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBerryFeedingScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->berry_feeding_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_deploy_score = 5;</code>
     * @return int
     */
    public function getPokemonDeployScore()
    {
        return $this->pokemon_deploy_score;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_deploy_score = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonDeployScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemon_deploy_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 raid_battle_winning_score = 6;</code>
     * @return int
     */
    public function getRaidBattleWinningScore()
    {
        return $this->raid_battle_winning_score;
    }

    /**
     * Generated from protobuf field <code>int32 raid_battle_winning_score = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRaidBattleWinningScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->raid_battle_winning_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 lose_all_battles_score = 7;</code>
     * @return int
     */
    public function getLoseAllBattlesScore()
    {
        return $this->lose_all_battles_score;
    }

    /**
     * Generated from protobuf field <code>int32 lose_all_battles_score = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLoseAllBattlesScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->lose_all_battles_score = $var;

        return $this;
    }

}

