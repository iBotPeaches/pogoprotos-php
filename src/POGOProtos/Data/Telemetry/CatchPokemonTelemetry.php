<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/CatchPokemonTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.CatchPokemonTelemetry</code>
 */
class CatchPokemonTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string status = 1;</code>
     */
    private $status = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.EncounterPokemonTelemetry encounter_pokemon_telemetry = 2;</code>
     */
    private $encounter_pokemon_telemetry = null;
    /**
     * Generated from protobuf field <code>int32 balltype = 3;</code>
     */
    private $balltype = 0;
    /**
     * Generated from protobuf field <code>int32 hit_grade = 4;</code>
     */
    private $hit_grade = 0;
    /**
     * Generated from protobuf field <code>bool curve_ball = 5;</code>
     */
    private $curve_ball = false;
    /**
     * Generated from protobuf field <code>double miss_percent = 6;</code>
     */
    private $miss_percent = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $status
     *     @type \POGOProtos\Data\Telemetry\EncounterPokemonTelemetry $encounter_pokemon_telemetry
     *     @type int $balltype
     *     @type int $hit_grade
     *     @type bool $curve_ball
     *     @type float $miss_percent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\CatchPokemonTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.EncounterPokemonTelemetry encounter_pokemon_telemetry = 2;</code>
     * @return \POGOProtos\Data\Telemetry\EncounterPokemonTelemetry
     */
    public function getEncounterPokemonTelemetry()
    {
        return $this->encounter_pokemon_telemetry;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.EncounterPokemonTelemetry encounter_pokemon_telemetry = 2;</code>
     * @param \POGOProtos\Data\Telemetry\EncounterPokemonTelemetry $var
     * @return $this
     */
    public function setEncounterPokemonTelemetry($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Telemetry\EncounterPokemonTelemetry::class);
        $this->encounter_pokemon_telemetry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 balltype = 3;</code>
     * @return int
     */
    public function getBalltype()
    {
        return $this->balltype;
    }

    /**
     * Generated from protobuf field <code>int32 balltype = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBalltype($var)
    {
        GPBUtil::checkInt32($var);
        $this->balltype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 hit_grade = 4;</code>
     * @return int
     */
    public function getHitGrade()
    {
        return $this->hit_grade;
    }

    /**
     * Generated from protobuf field <code>int32 hit_grade = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHitGrade($var)
    {
        GPBUtil::checkInt32($var);
        $this->hit_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool curve_ball = 5;</code>
     * @return bool
     */
    public function getCurveBall()
    {
        return $this->curve_ball;
    }

    /**
     * Generated from protobuf field <code>bool curve_ball = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCurveBall($var)
    {
        GPBUtil::checkBool($var);
        $this->curve_ball = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double miss_percent = 6;</code>
     * @return float
     */
    public function getMissPercent()
    {
        return $this->miss_percent;
    }

    /**
     * Generated from protobuf field <code>double miss_percent = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setMissPercent($var)
    {
        GPBUtil::checkDouble($var);
        $this->miss_percent = $var;

        return $this;
    }

}

