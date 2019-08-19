<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/IncenseAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.Item.IncenseAttributes</code>
 */
class IncenseAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 incense_lifetime_seconds = 1;</code>
     */
    private $incense_lifetime_seconds = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    private $pokemon_type;
    /**
     * Generated from protobuf field <code>float pokemon_incense_type_probability = 3;</code>
     */
    private $pokemon_incense_type_probability = 0.0;
    /**
     * Generated from protobuf field <code>int32 standing_time_between_encounters_seconds = 4;</code>
     */
    private $standing_time_between_encounters_seconds = 0;
    /**
     * Generated from protobuf field <code>int32 moving_time_between_encounter_seconds = 5;</code>
     */
    private $moving_time_between_encounter_seconds = 0;
    /**
     * Generated from protobuf field <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     */
    private $distance_required_for_shorter_interval_meters = 0;
    /**
     * Generated from protobuf field <code>int32 pokemon_attracted_length_sec = 7;</code>
     */
    private $pokemon_attracted_length_sec = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.Item.IncenseAttributes.SpawnTablePokemon spawn_table = 8;</code>
     */
    private $spawn_table;
    /**
     * Generated from protobuf field <code>float spawn_table_probability = 9;</code>
     */
    private $spawn_table_probability = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $incense_lifetime_seconds
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pokemon_type
     *     @type float $pokemon_incense_type_probability
     *     @type int $standing_time_between_encounters_seconds
     *     @type int $moving_time_between_encounter_seconds
     *     @type int $distance_required_for_shorter_interval_meters
     *     @type int $pokemon_attracted_length_sec
     *     @type \POGOProtos\Settings\Master\Item\IncenseAttributes\SpawnTablePokemon[]|\Google\Protobuf\Internal\RepeatedField $spawn_table
     *     @type float $spawn_table_probability
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\Item\IncenseAttributes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 incense_lifetime_seconds = 1;</code>
     * @return int
     */
    public function getIncenseLifetimeSeconds()
    {
        return $this->incense_lifetime_seconds;
    }

    /**
     * Generated from protobuf field <code>int32 incense_lifetime_seconds = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIncenseLifetimeSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->incense_lifetime_seconds = $var;

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

    /**
     * Generated from protobuf field <code>float pokemon_incense_type_probability = 3;</code>
     * @return float
     */
    public function getPokemonIncenseTypeProbability()
    {
        return $this->pokemon_incense_type_probability;
    }

    /**
     * Generated from protobuf field <code>float pokemon_incense_type_probability = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPokemonIncenseTypeProbability($var)
    {
        GPBUtil::checkFloat($var);
        $this->pokemon_incense_type_probability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 standing_time_between_encounters_seconds = 4;</code>
     * @return int
     */
    public function getStandingTimeBetweenEncountersSeconds()
    {
        return $this->standing_time_between_encounters_seconds;
    }

    /**
     * Generated from protobuf field <code>int32 standing_time_between_encounters_seconds = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStandingTimeBetweenEncountersSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->standing_time_between_encounters_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 moving_time_between_encounter_seconds = 5;</code>
     * @return int
     */
    public function getMovingTimeBetweenEncounterSeconds()
    {
        return $this->moving_time_between_encounter_seconds;
    }

    /**
     * Generated from protobuf field <code>int32 moving_time_between_encounter_seconds = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMovingTimeBetweenEncounterSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->moving_time_between_encounter_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     * @return int
     */
    public function getDistanceRequiredForShorterIntervalMeters()
    {
        return $this->distance_required_for_shorter_interval_meters;
    }

    /**
     * Generated from protobuf field <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDistanceRequiredForShorterIntervalMeters($var)
    {
        GPBUtil::checkInt32($var);
        $this->distance_required_for_shorter_interval_meters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_attracted_length_sec = 7;</code>
     * @return int
     */
    public function getPokemonAttractedLengthSec()
    {
        return $this->pokemon_attracted_length_sec;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_attracted_length_sec = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonAttractedLengthSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemon_attracted_length_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.Item.IncenseAttributes.SpawnTablePokemon spawn_table = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpawnTable()
    {
        return $this->spawn_table;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.Item.IncenseAttributes.SpawnTablePokemon spawn_table = 8;</code>
     * @param \POGOProtos\Settings\Master\Item\IncenseAttributes\SpawnTablePokemon[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpawnTable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Settings\Master\Item\IncenseAttributes\SpawnTablePokemon::class);
        $this->spawn_table = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float spawn_table_probability = 9;</code>
     * @return float
     */
    public function getSpawnTableProbability()
    {
        return $this->spawn_table_probability;
    }

    /**
     * Generated from protobuf field <code>float spawn_table_probability = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setSpawnTableProbability($var)
    {
        GPBUtil::checkFloat($var);
        $this->spawn_table_probability = $var;

        return $this;
    }

}

