<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/CombatNpcPersonality.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.CombatNpcPersonality</code>
 */
class CombatNpcPersonality extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string personality_name = 1;</code>
     */
    private $personality_name = '';
    /**
     * Generated from protobuf field <code>float super_effective_chance = 2;</code>
     */
    private $super_effective_chance = 0.0;
    /**
     * Generated from protobuf field <code>float special_chance = 3;</code>
     */
    private $special_chance = 0.0;
    /**
     * Generated from protobuf field <code>float defensive_minimum_score = 4;</code>
     */
    private $defensive_minimum_score = 0.0;
    /**
     * Generated from protobuf field <code>float defensive_maximum_score = 5;</code>
     */
    private $defensive_maximum_score = 0.0;
    /**
     * Generated from protobuf field <code>float offensive_minimum_score = 6;</code>
     */
    private $offensive_minimum_score = 0.0;
    /**
     * Generated from protobuf field <code>float offensive_maximum_score = 7;</code>
     */
    private $offensive_maximum_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $personality_name
     *     @type float $super_effective_chance
     *     @type float $special_chance
     *     @type float $defensive_minimum_score
     *     @type float $defensive_maximum_score
     *     @type float $offensive_minimum_score
     *     @type float $offensive_maximum_score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\CombatNpcPersonality::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string personality_name = 1;</code>
     * @return string
     */
    public function getPersonalityName()
    {
        return $this->personality_name;
    }

    /**
     * Generated from protobuf field <code>string personality_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPersonalityName($var)
    {
        GPBUtil::checkString($var, True);
        $this->personality_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float super_effective_chance = 2;</code>
     * @return float
     */
    public function getSuperEffectiveChance()
    {
        return $this->super_effective_chance;
    }

    /**
     * Generated from protobuf field <code>float super_effective_chance = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setSuperEffectiveChance($var)
    {
        GPBUtil::checkFloat($var);
        $this->super_effective_chance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float special_chance = 3;</code>
     * @return float
     */
    public function getSpecialChance()
    {
        return $this->special_chance;
    }

    /**
     * Generated from protobuf field <code>float special_chance = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setSpecialChance($var)
    {
        GPBUtil::checkFloat($var);
        $this->special_chance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defensive_minimum_score = 4;</code>
     * @return float
     */
    public function getDefensiveMinimumScore()
    {
        return $this->defensive_minimum_score;
    }

    /**
     * Generated from protobuf field <code>float defensive_minimum_score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDefensiveMinimumScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->defensive_minimum_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defensive_maximum_score = 5;</code>
     * @return float
     */
    public function getDefensiveMaximumScore()
    {
        return $this->defensive_maximum_score;
    }

    /**
     * Generated from protobuf field <code>float defensive_maximum_score = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setDefensiveMaximumScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->defensive_maximum_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float offensive_minimum_score = 6;</code>
     * @return float
     */
    public function getOffensiveMinimumScore()
    {
        return $this->offensive_minimum_score;
    }

    /**
     * Generated from protobuf field <code>float offensive_minimum_score = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setOffensiveMinimumScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->offensive_minimum_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float offensive_maximum_score = 7;</code>
     * @return float
     */
    public function getOffensiveMaximumScore()
    {
        return $this->offensive_maximum_score;
    }

    /**
     * Generated from protobuf field <code>float offensive_maximum_score = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setOffensiveMaximumScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->offensive_maximum_score = $var;

        return $this;
    }

}
