<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/WeatherAffinity.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.WeatherAffinity</code>
 */
class WeatherAffinity extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     */
    private $weather_condition = 0;
    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    private $pokemon_type;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\WeatherAffinity::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     */
    public function getWeatherCondition()
    {
        return $this->weather_condition;
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 1;</code>
     */
    public function setWeatherCondition($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\PokemonDisplay_WeatherCondition::class);
        $this->weather_condition = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    public function getPokemonType()
    {
        return $this->pokemon_type;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    public function setPokemonType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\PokemonType::class);
        $this->pokemon_type = $var;
    }

}

