<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Combat/Combat.proto

namespace POGOProtos\Data\Combat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Combat.Combat</code>
 */
class Combat extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat.CombatState combat_state = 1;</code>
     */
    private $combat_state = 0;
    /**
     * Generated from protobuf field <code>string combat_id = 2;</code>
     */
    private $combat_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer player = 3;</code>
     */
    private $player = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer opponent = 4;</code>
     */
    private $opponent = null;
    /**
     * Generated from protobuf field <code>int64 combat_start_ms = 5;</code>
     */
    private $combat_start_ms = 0;
    /**
     * Generated from protobuf field <code>int64 combat_end_ms = 6;</code>
     */
    private $combat_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 server_ms = 7;</code>
     */
    private $server_ms = 0;
    /**
     * Generated from protobuf field <code>int32 current_turn = 8;</code>
     */
    private $current_turn = 0;
    /**
     * Generated from protobuf field <code>int64 turn_start_ms = 9;</code>
     */
    private $turn_start_ms = 0;
    /**
     * Generated from protobuf field <code>int64 minigame_end_ms = 10;</code>
     */
    private $minigame_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 minigame_submit_score_end_ms = 11;</code>
     */
    private $minigame_submit_score_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 change_pokemon_end_ms = 12;</code>
     */
    private $change_pokemon_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 quick_swap_cooldown_duration_ms = 13;</code>
     */
    private $quick_swap_cooldown_duration_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $combat_state
     *     @type string $combat_id
     *     @type \POGOProtos\Data\Combat\CombatPlayer $player
     *     @type \POGOProtos\Data\Combat\CombatPlayer $opponent
     *     @type int|string $combat_start_ms
     *     @type int|string $combat_end_ms
     *     @type int|string $server_ms
     *     @type int $current_turn
     *     @type int|string $turn_start_ms
     *     @type int|string $minigame_end_ms
     *     @type int|string $minigame_submit_score_end_ms
     *     @type int|string $change_pokemon_end_ms
     *     @type int|string $quick_swap_cooldown_duration_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Combat\Combat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat.CombatState combat_state = 1;</code>
     * @return int
     */
    public function getCombatState()
    {
        return $this->combat_state;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat.CombatState combat_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCombatState($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Combat\Combat_CombatState::class);
        $this->combat_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string combat_id = 2;</code>
     * @return string
     */
    public function getCombatId()
    {
        return $this->combat_id;
    }

    /**
     * Generated from protobuf field <code>string combat_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCombatId($var)
    {
        GPBUtil::checkString($var, True);
        $this->combat_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer player = 3;</code>
     * @return \POGOProtos\Data\Combat\CombatPlayer
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer player = 3;</code>
     * @param \POGOProtos\Data\Combat\CombatPlayer $var
     * @return $this
     */
    public function setPlayer($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\CombatPlayer::class);
        $this->player = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer opponent = 4;</code>
     * @return \POGOProtos\Data\Combat\CombatPlayer
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayer opponent = 4;</code>
     * @param \POGOProtos\Data\Combat\CombatPlayer $var
     * @return $this
     */
    public function setOpponent($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\CombatPlayer::class);
        $this->opponent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 combat_start_ms = 5;</code>
     * @return int|string
     */
    public function getCombatStartMs()
    {
        return $this->combat_start_ms;
    }

    /**
     * Generated from protobuf field <code>int64 combat_start_ms = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCombatStartMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->combat_start_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 combat_end_ms = 6;</code>
     * @return int|string
     */
    public function getCombatEndMs()
    {
        return $this->combat_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 combat_end_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCombatEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->combat_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 server_ms = 7;</code>
     * @return int|string
     */
    public function getServerMs()
    {
        return $this->server_ms;
    }

    /**
     * Generated from protobuf field <code>int64 server_ms = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServerMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->server_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 current_turn = 8;</code>
     * @return int
     */
    public function getCurrentTurn()
    {
        return $this->current_turn;
    }

    /**
     * Generated from protobuf field <code>int32 current_turn = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentTurn($var)
    {
        GPBUtil::checkInt32($var);
        $this->current_turn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 turn_start_ms = 9;</code>
     * @return int|string
     */
    public function getTurnStartMs()
    {
        return $this->turn_start_ms;
    }

    /**
     * Generated from protobuf field <code>int64 turn_start_ms = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTurnStartMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->turn_start_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 minigame_end_ms = 10;</code>
     * @return int|string
     */
    public function getMinigameEndMs()
    {
        return $this->minigame_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 minigame_end_ms = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinigameEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->minigame_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 minigame_submit_score_end_ms = 11;</code>
     * @return int|string
     */
    public function getMinigameSubmitScoreEndMs()
    {
        return $this->minigame_submit_score_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 minigame_submit_score_end_ms = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinigameSubmitScoreEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->minigame_submit_score_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 change_pokemon_end_ms = 12;</code>
     * @return int|string
     */
    public function getChangePokemonEndMs()
    {
        return $this->change_pokemon_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 change_pokemon_end_ms = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChangePokemonEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->change_pokemon_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 quick_swap_cooldown_duration_ms = 13;</code>
     * @return int|string
     */
    public function getQuickSwapCooldownDurationMs()
    {
        return $this->quick_swap_cooldown_duration_ms;
    }

    /**
     * Generated from protobuf field <code>int64 quick_swap_cooldown_duration_ms = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuickSwapCooldownDurationMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->quick_swap_cooldown_duration_ms = $var;

        return $this;
    }

}

