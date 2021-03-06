<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/DamageProperty.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.DamageProperty</code>
 */
class DamageProperty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 1;</code>
     */
    private $super_effective_charge_move = false;
    /**
     * Generated from protobuf field <code>bool weather_boosted = 2;</code>
     */
    private $weather_boosted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $super_effective_charge_move
     *     @type bool $weather_boosted
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\DamageProperty::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 1;</code>
     * @return bool
     */
    public function getSuperEffectiveChargeMove()
    {
        return $this->super_effective_charge_move;
    }

    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuperEffectiveChargeMove($var)
    {
        GPBUtil::checkBool($var);
        $this->super_effective_charge_move = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool weather_boosted = 2;</code>
     * @return bool
     */
    public function getWeatherBoosted()
    {
        return $this->weather_boosted;
    }

    /**
     * Generated from protobuf field <code>bool weather_boosted = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setWeatherBoosted($var)
    {
        GPBUtil::checkBool($var);
        $this->weather_boosted = $var;

        return $this;
    }

}

