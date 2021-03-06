<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/CombatGlobalSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.CombatGlobalSettings</code>
 */
class CombatGlobalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enable_combat = 1;</code>
     */
    private $enable_combat = false;
    /**
     * Generated from protobuf field <code>int32 maximum_daily_rewarded_battles = 2;</code>
     */
    private $maximum_daily_rewarded_battles = 0;
    /**
     * Generated from protobuf field <code>bool enable_combat_stat_stages = 3;</code>
     */
    private $enable_combat_stat_stages = false;
    /**
     * Generated from protobuf field <code>uint32 minimum_player_level = 4;</code>
     */
    private $minimum_player_level = 0;
    /**
     * Generated from protobuf field <code>int32 maximum_daily_npc_rewarded_battles = 5;</code>
     */
    private $maximum_daily_npc_rewarded_battles = 0;
    /**
     * Generated from protobuf field <code>int32 active_combat_update_interval_ms = 6;</code>
     */
    private $active_combat_update_interval_ms = 0;
    /**
     * Generated from protobuf field <code>int32 waiting_for_player_update_interval_ms = 7;</code>
     */
    private $waiting_for_player_update_interval_ms = 0;
    /**
     * Generated from protobuf field <code>int32 ready_for_battle_update_interval_ms = 8;</code>
     */
    private $ready_for_battle_update_interval_ms = 0;
    /**
     * Generated from protobuf field <code>int32 pre_move_submit_window_ms = 9;</code>
     */
    private $pre_move_submit_window_ms = 0;
    /**
     * Generated from protobuf field <code>int32 post_move_submit_window_ms = 10;</code>
     */
    private $post_move_submit_window_ms = 0;
    /**
     * Generated from protobuf field <code>bool enable_sockets = 11;</code>
     */
    private $enable_sockets = false;
    /**
     * Generated from protobuf field <code>bool enable_spin_minigame = 12;</code>
     */
    private $enable_spin_minigame = false;
    /**
     * Generated from protobuf field <code>bool enable_quick_swap_v2 = 13;</code>
     */
    private $enable_quick_swap_v2 = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_combat
     *     @type int $maximum_daily_rewarded_battles
     *     @type bool $enable_combat_stat_stages
     *     @type int $minimum_player_level
     *     @type int $maximum_daily_npc_rewarded_battles
     *     @type int $active_combat_update_interval_ms
     *     @type int $waiting_for_player_update_interval_ms
     *     @type int $ready_for_battle_update_interval_ms
     *     @type int $pre_move_submit_window_ms
     *     @type int $post_move_submit_window_ms
     *     @type bool $enable_sockets
     *     @type bool $enable_spin_minigame
     *     @type bool $enable_quick_swap_v2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\CombatGlobalSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enable_combat = 1;</code>
     * @return bool
     */
    public function getEnableCombat()
    {
        return $this->enable_combat;
    }

    /**
     * Generated from protobuf field <code>bool enable_combat = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableCombat($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_combat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_daily_rewarded_battles = 2;</code>
     * @return int
     */
    public function getMaximumDailyRewardedBattles()
    {
        return $this->maximum_daily_rewarded_battles;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_daily_rewarded_battles = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumDailyRewardedBattles($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_daily_rewarded_battles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_combat_stat_stages = 3;</code>
     * @return bool
     */
    public function getEnableCombatStatStages()
    {
        return $this->enable_combat_stat_stages;
    }

    /**
     * Generated from protobuf field <code>bool enable_combat_stat_stages = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableCombatStatStages($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_combat_stat_stages = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 minimum_player_level = 4;</code>
     * @return int
     */
    public function getMinimumPlayerLevel()
    {
        return $this->minimum_player_level;
    }

    /**
     * Generated from protobuf field <code>uint32 minimum_player_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMinimumPlayerLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->minimum_player_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_daily_npc_rewarded_battles = 5;</code>
     * @return int
     */
    public function getMaximumDailyNpcRewardedBattles()
    {
        return $this->maximum_daily_npc_rewarded_battles;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_daily_npc_rewarded_battles = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumDailyNpcRewardedBattles($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_daily_npc_rewarded_battles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 active_combat_update_interval_ms = 6;</code>
     * @return int
     */
    public function getActiveCombatUpdateIntervalMs()
    {
        return $this->active_combat_update_interval_ms;
    }

    /**
     * Generated from protobuf field <code>int32 active_combat_update_interval_ms = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveCombatUpdateIntervalMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->active_combat_update_interval_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 waiting_for_player_update_interval_ms = 7;</code>
     * @return int
     */
    public function getWaitingForPlayerUpdateIntervalMs()
    {
        return $this->waiting_for_player_update_interval_ms;
    }

    /**
     * Generated from protobuf field <code>int32 waiting_for_player_update_interval_ms = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitingForPlayerUpdateIntervalMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->waiting_for_player_update_interval_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ready_for_battle_update_interval_ms = 8;</code>
     * @return int
     */
    public function getReadyForBattleUpdateIntervalMs()
    {
        return $this->ready_for_battle_update_interval_ms;
    }

    /**
     * Generated from protobuf field <code>int32 ready_for_battle_update_interval_ms = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setReadyForBattleUpdateIntervalMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->ready_for_battle_update_interval_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pre_move_submit_window_ms = 9;</code>
     * @return int
     */
    public function getPreMoveSubmitWindowMs()
    {
        return $this->pre_move_submit_window_ms;
    }

    /**
     * Generated from protobuf field <code>int32 pre_move_submit_window_ms = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPreMoveSubmitWindowMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->pre_move_submit_window_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 post_move_submit_window_ms = 10;</code>
     * @return int
     */
    public function getPostMoveSubmitWindowMs()
    {
        return $this->post_move_submit_window_ms;
    }

    /**
     * Generated from protobuf field <code>int32 post_move_submit_window_ms = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPostMoveSubmitWindowMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->post_move_submit_window_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_sockets = 11;</code>
     * @return bool
     */
    public function getEnableSockets()
    {
        return $this->enable_sockets;
    }

    /**
     * Generated from protobuf field <code>bool enable_sockets = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSockets($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_sockets = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_spin_minigame = 12;</code>
     * @return bool
     */
    public function getEnableSpinMinigame()
    {
        return $this->enable_spin_minigame;
    }

    /**
     * Generated from protobuf field <code>bool enable_spin_minigame = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSpinMinigame($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_spin_minigame = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_quick_swap_v2 = 13;</code>
     * @return bool
     */
    public function getEnableQuickSwapV2()
    {
        return $this->enable_quick_swap_v2;
    }

    /**
     * Generated from protobuf field <code>bool enable_quick_swap_v2 = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableQuickSwapV2($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_quick_swap_v2 = $var;

        return $this;
    }

}

