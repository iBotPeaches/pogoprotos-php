<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PokemonDisplay.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.PokemonDisplay</code>
 */
class PokemonDisplay extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 1;</code>
     */
    private $costume = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 2;</code>
     */
    private $gender = 0;
    /**
     * Generated from protobuf field <code>bool shiny = 3;</code>
     */
    private $shiny = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Form form = 4;</code>
     */
    private $form = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.WeatherCondition weather_boosted_condition = 5;</code>
     */
    private $weather_boosted_condition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $costume
     *     @type int $gender
     *     @type bool $shiny
     *     @type int $form
     *     @type int $weather_boosted_condition
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 1;</code>
     * @return int
     */
    public function getCostume()
    {
        return $this->costume;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCostume($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Costume::class);
        $this->costume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 2;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool shiny = 3;</code>
     * @return bool
     */
    public function getShiny()
    {
        return $this->shiny;
    }

    /**
     * Generated from protobuf field <code>bool shiny = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setShiny($var)
    {
        GPBUtil::checkBool($var);
        $this->shiny = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Form form = 4;</code>
     * @return int
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Form form = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setForm($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Form::class);
        $this->form = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.WeatherCondition weather_boosted_condition = 5;</code>
     * @return int
     */
    public function getWeatherBoostedCondition()
    {
        return $this->weather_boosted_condition;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.WeatherCondition weather_boosted_condition = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWeatherBoostedCondition($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\WeatherCondition::class);
        $this->weather_boosted_condition = $var;

        return $this;
    }

}

