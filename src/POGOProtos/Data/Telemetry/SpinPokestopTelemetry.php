<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/SpinPokestopTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.SpinPokestopTelemetry</code>
 */
class SpinPokestopTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string result = 1;</code>
     */
    private $result = '';
    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>int32 fort_type = 3;</code>
     */
    private $fort_type = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Telemetry.PokestopReward pokestop_rewards = 4;</code>
     */
    private $pokestop_rewards;
    /**
     * Generated from protobuf field <code>int32 total_rewards = 5;</code>
     */
    private $total_rewards = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $result
     *     @type string $fort_id
     *     @type int $fort_type
     *     @type \POGOProtos\Data\Telemetry\PokestopReward[]|\Google\Protobuf\Internal\RepeatedField $pokestop_rewards
     *     @type int $total_rewards
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\SpinPokestopTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string result = 1;</code>
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>string result = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 fort_type = 3;</code>
     * @return int
     */
    public function getFortType()
    {
        return $this->fort_type;
    }

    /**
     * Generated from protobuf field <code>int32 fort_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFortType($var)
    {
        GPBUtil::checkInt32($var);
        $this->fort_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Telemetry.PokestopReward pokestop_rewards = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokestopRewards()
    {
        return $this->pokestop_rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Telemetry.PokestopReward pokestop_rewards = 4;</code>
     * @param \POGOProtos\Data\Telemetry\PokestopReward[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPokestopRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Telemetry\PokestopReward::class);
        $this->pokestop_rewards = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_rewards = 5;</code>
     * @return int
     */
    public function getTotalRewards()
    {
        return $this->total_rewards;
    }

    /**
     * Generated from protobuf field <code>int32 total_rewards = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalRewards($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_rewards = $var;

        return $this;
    }

}

