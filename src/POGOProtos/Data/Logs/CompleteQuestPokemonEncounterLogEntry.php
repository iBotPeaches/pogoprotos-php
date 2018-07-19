<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/CompleteQuestPokemonEncounterLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry</code>
 */
class CompleteQuestPokemonEncounterLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>int32 pokedex_number = 2;</code>
     */
    private $pokedex_number = 0;
    /**
     * Generated from protobuf field <code>int32 combat_points = 3;</code>
     */
    private $combat_points = 0;
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 4;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 5;</code>
     */
    private $pokemon_display = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPokemonEncounter.EncounterType encounter_type = 6;</code>
     */
    private $encounter_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type int $pokedex_number
     *     @type int $combat_points
     *     @type int|string $pokemon_id
     *     @type \POGOProtos\Data\PokemonDisplay $pokemon_display
     *     @type int $encounter_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Logs\CompleteQuestPokemonEncounterLogEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Logs\CompleteQuestPokemonEncounterLogEntry_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_number = 2;</code>
     * @return int
     */
    public function getPokedexNumber()
    {
        return $this->pokedex_number;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPokedexNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokedex_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 combat_points = 3;</code>
     * @return int
     */
    public function getCombatPoints()
    {
        return $this->combat_points;
    }

    /**
     * Generated from protobuf field <code>int32 combat_points = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCombatPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->combat_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 4;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 5;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 5;</code>
     * @param \POGOProtos\Data\PokemonDisplay $var
     * @return $this
     */
    public function setPokemonDisplay($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->pokemon_display = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPokemonEncounter.EncounterType encounter_type = 6;</code>
     * @return int
     */
    public function getEncounterType()
    {
        return $this->encounter_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestPokemonEncounter.EncounterType encounter_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEncounterType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Quests\QuestPokemonEncounter_EncounterType::class);
        $this->encounter_type = $var;

        return $this;
    }

}

