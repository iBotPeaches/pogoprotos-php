<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/CombatSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.CombatSettings</code>
 */
class CombatSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float round_duration_seconds = 1;</code>
     */
    private $round_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float turn_duration_seconds = 2;</code>
     */
    private $turn_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float minigame_duration_seconds = 3;</code>
     */
    private $minigame_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float same_type_attack_bonus_multiplier = 4;</code>
     */
    private $same_type_attack_bonus_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float fast_attack_bonus_multiplier = 5;</code>
     */
    private $fast_attack_bonus_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float charge_attack_bonus_multiplier = 6;</code>
     */
    private $charge_attack_bonus_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float defense_bonus_multiplier = 7;</code>
     */
    private $defense_bonus_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float minigame_bonus_base_multiplier = 8;</code>
     */
    private $minigame_bonus_base_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float minigame_bonus_variable_multiplier = 9;</code>
     */
    private $minigame_bonus_variable_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>int32 max_energy = 10;</code>
     */
    private $max_energy = 0;
    /**
     * Generated from protobuf field <code>float defender_minigame_multiplier = 11;</code>
     */
    private $defender_minigame_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>float change_pokemon_duration_seconds = 12;</code>
     */
    private $change_pokemon_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float minigame_submit_score_duration_seconds = 13;</code>
     */
    private $minigame_submit_score_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float quick_swap_combat_start_available_seconds = 14;</code>
     */
    private $quick_swap_combat_start_available_seconds = 0.0;
    /**
     * Generated from protobuf field <code>float quick_swap_cooldown_duration_seconds = 15;</code>
     */
    private $quick_swap_cooldown_duration_seconds = 0.0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatOffensiveInputChallengeSettings offensive_input_challenge_settings = 16;</code>
     */
    private $offensive_input_challenge_settings = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatDefensiveInputChallengeSettings defensive_input_challenge_settings = 17;</code>
     */
    private $defensive_input_challenge_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $round_duration_seconds
     *     @type float $turn_duration_seconds
     *     @type float $minigame_duration_seconds
     *     @type float $same_type_attack_bonus_multiplier
     *     @type float $fast_attack_bonus_multiplier
     *     @type float $charge_attack_bonus_multiplier
     *     @type float $defense_bonus_multiplier
     *     @type float $minigame_bonus_base_multiplier
     *     @type float $minigame_bonus_variable_multiplier
     *     @type int $max_energy
     *     @type float $defender_minigame_multiplier
     *     @type float $change_pokemon_duration_seconds
     *     @type float $minigame_submit_score_duration_seconds
     *     @type float $quick_swap_combat_start_available_seconds
     *     @type float $quick_swap_cooldown_duration_seconds
     *     @type \POGOProtos\Settings\Master\CombatSettings\CombatOffensiveInputChallengeSettings $offensive_input_challenge_settings
     *     @type \POGOProtos\Settings\Master\CombatSettings\CombatDefensiveInputChallengeSettings $defensive_input_challenge_settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\CombatSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float round_duration_seconds = 1;</code>
     * @return float
     */
    public function getRoundDurationSeconds()
    {
        return $this->round_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float round_duration_seconds = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setRoundDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->round_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float turn_duration_seconds = 2;</code>
     * @return float
     */
    public function getTurnDurationSeconds()
    {
        return $this->turn_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float turn_duration_seconds = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTurnDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->turn_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float minigame_duration_seconds = 3;</code>
     * @return float
     */
    public function getMinigameDurationSeconds()
    {
        return $this->minigame_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float minigame_duration_seconds = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMinigameDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->minigame_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float same_type_attack_bonus_multiplier = 4;</code>
     * @return float
     */
    public function getSameTypeAttackBonusMultiplier()
    {
        return $this->same_type_attack_bonus_multiplier;
    }

    /**
     * Generated from protobuf field <code>float same_type_attack_bonus_multiplier = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setSameTypeAttackBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->same_type_attack_bonus_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float fast_attack_bonus_multiplier = 5;</code>
     * @return float
     */
    public function getFastAttackBonusMultiplier()
    {
        return $this->fast_attack_bonus_multiplier;
    }

    /**
     * Generated from protobuf field <code>float fast_attack_bonus_multiplier = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setFastAttackBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->fast_attack_bonus_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float charge_attack_bonus_multiplier = 6;</code>
     * @return float
     */
    public function getChargeAttackBonusMultiplier()
    {
        return $this->charge_attack_bonus_multiplier;
    }

    /**
     * Generated from protobuf field <code>float charge_attack_bonus_multiplier = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setChargeAttackBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->charge_attack_bonus_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defense_bonus_multiplier = 7;</code>
     * @return float
     */
    public function getDefenseBonusMultiplier()
    {
        return $this->defense_bonus_multiplier;
    }

    /**
     * Generated from protobuf field <code>float defense_bonus_multiplier = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setDefenseBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->defense_bonus_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float minigame_bonus_base_multiplier = 8;</code>
     * @return float
     */
    public function getMinigameBonusBaseMultiplier()
    {
        return $this->minigame_bonus_base_multiplier;
    }

    /**
     * Generated from protobuf field <code>float minigame_bonus_base_multiplier = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setMinigameBonusBaseMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->minigame_bonus_base_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float minigame_bonus_variable_multiplier = 9;</code>
     * @return float
     */
    public function getMinigameBonusVariableMultiplier()
    {
        return $this->minigame_bonus_variable_multiplier;
    }

    /**
     * Generated from protobuf field <code>float minigame_bonus_variable_multiplier = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setMinigameBonusVariableMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->minigame_bonus_variable_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_energy = 10;</code>
     * @return int
     */
    public function getMaxEnergy()
    {
        return $this->max_energy;
    }

    /**
     * Generated from protobuf field <code>int32 max_energy = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxEnergy($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_energy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defender_minigame_multiplier = 11;</code>
     * @return float
     */
    public function getDefenderMinigameMultiplier()
    {
        return $this->defender_minigame_multiplier;
    }

    /**
     * Generated from protobuf field <code>float defender_minigame_multiplier = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setDefenderMinigameMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->defender_minigame_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float change_pokemon_duration_seconds = 12;</code>
     * @return float
     */
    public function getChangePokemonDurationSeconds()
    {
        return $this->change_pokemon_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float change_pokemon_duration_seconds = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setChangePokemonDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->change_pokemon_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float minigame_submit_score_duration_seconds = 13;</code>
     * @return float
     */
    public function getMinigameSubmitScoreDurationSeconds()
    {
        return $this->minigame_submit_score_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float minigame_submit_score_duration_seconds = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setMinigameSubmitScoreDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->minigame_submit_score_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float quick_swap_combat_start_available_seconds = 14;</code>
     * @return float
     */
    public function getQuickSwapCombatStartAvailableSeconds()
    {
        return $this->quick_swap_combat_start_available_seconds;
    }

    /**
     * Generated from protobuf field <code>float quick_swap_combat_start_available_seconds = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setQuickSwapCombatStartAvailableSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->quick_swap_combat_start_available_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float quick_swap_cooldown_duration_seconds = 15;</code>
     * @return float
     */
    public function getQuickSwapCooldownDurationSeconds()
    {
        return $this->quick_swap_cooldown_duration_seconds;
    }

    /**
     * Generated from protobuf field <code>float quick_swap_cooldown_duration_seconds = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setQuickSwapCooldownDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->quick_swap_cooldown_duration_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatOffensiveInputChallengeSettings offensive_input_challenge_settings = 16;</code>
     * @return \POGOProtos\Settings\Master\CombatSettings\CombatOffensiveInputChallengeSettings
     */
    public function getOffensiveInputChallengeSettings()
    {
        return $this->offensive_input_challenge_settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatOffensiveInputChallengeSettings offensive_input_challenge_settings = 16;</code>
     * @param \POGOProtos\Settings\Master\CombatSettings\CombatOffensiveInputChallengeSettings $var
     * @return $this
     */
    public function setOffensiveInputChallengeSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\CombatSettings_CombatOffensiveInputChallengeSettings::class);
        $this->offensive_input_challenge_settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatDefensiveInputChallengeSettings defensive_input_challenge_settings = 17;</code>
     * @return \POGOProtos\Settings\Master\CombatSettings\CombatDefensiveInputChallengeSettings
     */
    public function getDefensiveInputChallengeSettings()
    {
        return $this->defensive_input_challenge_settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.Master.CombatSettings.CombatDefensiveInputChallengeSettings defensive_input_challenge_settings = 17;</code>
     * @param \POGOProtos\Settings\Master\CombatSettings\CombatDefensiveInputChallengeSettings $var
     * @return $this
     */
    public function setDefensiveInputChallengeSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\CombatSettings_CombatDefensiveInputChallengeSettings::class);
        $this->defensive_input_challenge_settings = $var;

        return $this;
    }

}

