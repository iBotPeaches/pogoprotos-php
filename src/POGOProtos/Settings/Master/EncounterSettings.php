<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/EncounterSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.EncounterSettings</code>
 */
class EncounterSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>float spin_bonus_threshold = 1;</code>
     */
    private $spin_bonus_threshold = 0.0;
    /**
     * <code>float excellent_throw_threshold = 2;</code>
     */
    private $excellent_throw_threshold = 0.0;
    /**
     * <code>float great_throw_threshold = 3;</code>
     */
    private $great_throw_threshold = 0.0;
    /**
     * <code>float nice_throw_threshold = 4;</code>
     */
    private $nice_throw_threshold = 0.0;
    /**
     * <code>int32 milestone_threshold = 5;</code>
     */
    private $milestone_threshold = 0;
    /**
     * <code>bool ar_plus_mode_enabled = 6;</code>
     */
    private $ar_plus_mode_enabled = false;
    /**
     * <code>float ar_close_proximity_threshold = 7;</code>
     */
    private $ar_close_proximity_threshold = 0.0;
    /**
     * <code>float ar_low_awareness_threshold = 8;</code>
     */
    private $ar_low_awareness_threshold = 0.0;
    /**
     * <code>float ar_close_proximity_multiplier = 9;</code>
     */
    private $ar_close_proximity_multiplier = 0.0;
    /**
     * <code>float ar_awareness_penalty_threshold = 10;</code>
     */
    private $ar_awareness_penalty_threshold = 0.0;
    /**
     * <code>float ar_low_awareness_max_multiplier = 11;</code>
     */
    private $ar_low_awareness_max_multiplier = 0.0;
    /**
     * <code>float ar_high_awareness_min_penalty_multiplier = 12;</code>
     */
    private $ar_high_awareness_min_penalty_multiplier = 0.0;
    /**
     * <code>int32 ar_plus_attempts_until_flee_max = 13;</code>
     */
    private $ar_plus_attempts_until_flee_max = 0;
    /**
     * <code>int32 ar_plus_attempts_until_flee_infinite = 14;</code>
     */
    private $ar_plus_attempts_until_flee_infinite = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\EncounterSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>float spin_bonus_threshold = 1;</code>
     */
    public function getSpinBonusThreshold()
    {
        return $this->spin_bonus_threshold;
    }

    /**
     * <code>float spin_bonus_threshold = 1;</code>
     */
    public function setSpinBonusThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->spin_bonus_threshold = $var;
    }

    /**
     * <code>float excellent_throw_threshold = 2;</code>
     */
    public function getExcellentThrowThreshold()
    {
        return $this->excellent_throw_threshold;
    }

    /**
     * <code>float excellent_throw_threshold = 2;</code>
     */
    public function setExcellentThrowThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->excellent_throw_threshold = $var;
    }

    /**
     * <code>float great_throw_threshold = 3;</code>
     */
    public function getGreatThrowThreshold()
    {
        return $this->great_throw_threshold;
    }

    /**
     * <code>float great_throw_threshold = 3;</code>
     */
    public function setGreatThrowThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->great_throw_threshold = $var;
    }

    /**
     * <code>float nice_throw_threshold = 4;</code>
     */
    public function getNiceThrowThreshold()
    {
        return $this->nice_throw_threshold;
    }

    /**
     * <code>float nice_throw_threshold = 4;</code>
     */
    public function setNiceThrowThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->nice_throw_threshold = $var;
    }

    /**
     * <code>int32 milestone_threshold = 5;</code>
     */
    public function getMilestoneThreshold()
    {
        return $this->milestone_threshold;
    }

    /**
     * <code>int32 milestone_threshold = 5;</code>
     */
    public function setMilestoneThreshold($var)
    {
        GPBUtil::checkInt32($var);
        $this->milestone_threshold = $var;
    }

    /**
     * <code>bool ar_plus_mode_enabled = 6;</code>
     */
    public function getArPlusModeEnabled()
    {
        return $this->ar_plus_mode_enabled;
    }

    /**
     * <code>bool ar_plus_mode_enabled = 6;</code>
     */
    public function setArPlusModeEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ar_plus_mode_enabled = $var;
    }

    /**
     * <code>float ar_close_proximity_threshold = 7;</code>
     */
    public function getArCloseProximityThreshold()
    {
        return $this->ar_close_proximity_threshold;
    }

    /**
     * <code>float ar_close_proximity_threshold = 7;</code>
     */
    public function setArCloseProximityThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_close_proximity_threshold = $var;
    }

    /**
     * <code>float ar_low_awareness_threshold = 8;</code>
     */
    public function getArLowAwarenessThreshold()
    {
        return $this->ar_low_awareness_threshold;
    }

    /**
     * <code>float ar_low_awareness_threshold = 8;</code>
     */
    public function setArLowAwarenessThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_low_awareness_threshold = $var;
    }

    /**
     * <code>float ar_close_proximity_multiplier = 9;</code>
     */
    public function getArCloseProximityMultiplier()
    {
        return $this->ar_close_proximity_multiplier;
    }

    /**
     * <code>float ar_close_proximity_multiplier = 9;</code>
     */
    public function setArCloseProximityMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_close_proximity_multiplier = $var;
    }

    /**
     * <code>float ar_awareness_penalty_threshold = 10;</code>
     */
    public function getArAwarenessPenaltyThreshold()
    {
        return $this->ar_awareness_penalty_threshold;
    }

    /**
     * <code>float ar_awareness_penalty_threshold = 10;</code>
     */
    public function setArAwarenessPenaltyThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_awareness_penalty_threshold = $var;
    }

    /**
     * <code>float ar_low_awareness_max_multiplier = 11;</code>
     */
    public function getArLowAwarenessMaxMultiplier()
    {
        return $this->ar_low_awareness_max_multiplier;
    }

    /**
     * <code>float ar_low_awareness_max_multiplier = 11;</code>
     */
    public function setArLowAwarenessMaxMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_low_awareness_max_multiplier = $var;
    }

    /**
     * <code>float ar_high_awareness_min_penalty_multiplier = 12;</code>
     */
    public function getArHighAwarenessMinPenaltyMultiplier()
    {
        return $this->ar_high_awareness_min_penalty_multiplier;
    }

    /**
     * <code>float ar_high_awareness_min_penalty_multiplier = 12;</code>
     */
    public function setArHighAwarenessMinPenaltyMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->ar_high_awareness_min_penalty_multiplier = $var;
    }

    /**
     * <code>int32 ar_plus_attempts_until_flee_max = 13;</code>
     */
    public function getArPlusAttemptsUntilFleeMax()
    {
        return $this->ar_plus_attempts_until_flee_max;
    }

    /**
     * <code>int32 ar_plus_attempts_until_flee_max = 13;</code>
     */
    public function setArPlusAttemptsUntilFleeMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->ar_plus_attempts_until_flee_max = $var;
    }

    /**
     * <code>int32 ar_plus_attempts_until_flee_infinite = 14;</code>
     */
    public function getArPlusAttemptsUntilFleeInfinite()
    {
        return $this->ar_plus_attempts_until_flee_infinite;
    }

    /**
     * <code>int32 ar_plus_attempts_until_flee_infinite = 14;</code>
     */
    public function setArPlusAttemptsUntilFleeInfinite($var)
    {
        GPBUtil::checkInt32($var);
        $this->ar_plus_attempts_until_flee_infinite = $var;
    }

}

