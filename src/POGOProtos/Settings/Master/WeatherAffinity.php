<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/WeatherAffinity.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.WeatherAffinity</code>
 */
class WeatherAffinity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     */
    private $weather_condition = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    private $pokemon_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $weather_condition
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pokemon_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\WeatherAffinity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     * @return int
     */
    public function getWeatherCondition()
    {
        return $this->weather_condition;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setWeatherCondition($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\PokemonDisplay_WeatherCondition::class);
        $this->weather_condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokemonType()
    {
        return $this->pokemon_type;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPokemonType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\PokemonType::class);
        $this->pokemon_type = $arr;

        return $this;
    }

}
