<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PokedexEntry.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.PokedexEntry</code>
 */
class PokedexEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>int32 times_encountered = 2;</code>
     */
    private $times_encountered = 0;
    /**
     * Generated from protobuf field <code>int32 times_captured = 3;</code>
     */
    private $times_captured = 0;
    /**
     * Generated from protobuf field <code>int32 evolution_stone_pieces = 4;</code>
     */
    private $evolution_stone_pieces = 0;
    /**
     * Generated from protobuf field <code>int32 evolution_stones = 5;</code>
     */
    private $evolution_stones = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume captured_costumes = 6;</code>
     */
    private $captured_costumes;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form captured_forms = 7;</code>
     */
    private $captured_forms;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender captured_genders = 8;</code>
     */
    private $captured_genders;
    /**
     * Generated from protobuf field <code>bool captured_shiny = 9;</code>
     */
    private $captured_shiny = false;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume encountered_costumes = 10;</code>
     */
    private $encountered_costumes;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form encountered_forms = 11;</code>
     */
    private $encountered_forms;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender encountered_genders = 12;</code>
     */
    private $encountered_genders;
    /**
     * Generated from protobuf field <code>bool encountered_shiny = 13;</code>
     */
    private $encountered_shiny = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pokemon_id
     *     @type int $times_encountered
     *     @type int $times_captured
     *     @type int $evolution_stone_pieces
     *     @type int $evolution_stones
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $captured_costumes
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $captured_forms
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $captured_genders
     *     @type bool $captured_shiny
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $encountered_costumes
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $encountered_forms
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $encountered_genders
     *     @type bool $encountered_shiny
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\PokedexEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     * @return int
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 times_encountered = 2;</code>
     * @return int
     */
    public function getTimesEncountered()
    {
        return $this->times_encountered;
    }

    /**
     * Generated from protobuf field <code>int32 times_encountered = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTimesEncountered($var)
    {
        GPBUtil::checkInt32($var);
        $this->times_encountered = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 times_captured = 3;</code>
     * @return int
     */
    public function getTimesCaptured()
    {
        return $this->times_captured;
    }

    /**
     * Generated from protobuf field <code>int32 times_captured = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimesCaptured($var)
    {
        GPBUtil::checkInt32($var);
        $this->times_captured = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 evolution_stone_pieces = 4;</code>
     * @return int
     */
    public function getEvolutionStonePieces()
    {
        return $this->evolution_stone_pieces;
    }

    /**
     * Generated from protobuf field <code>int32 evolution_stone_pieces = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEvolutionStonePieces($var)
    {
        GPBUtil::checkInt32($var);
        $this->evolution_stone_pieces = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 evolution_stones = 5;</code>
     * @return int
     */
    public function getEvolutionStones()
    {
        return $this->evolution_stones;
    }

    /**
     * Generated from protobuf field <code>int32 evolution_stones = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEvolutionStones($var)
    {
        GPBUtil::checkInt32($var);
        $this->evolution_stones = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume captured_costumes = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapturedCostumes()
    {
        return $this->captured_costumes;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume captured_costumes = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapturedCostumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Costume::class);
        $this->captured_costumes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form captured_forms = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapturedForms()
    {
        return $this->captured_forms;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form captured_forms = 7;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapturedForms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Form::class);
        $this->captured_forms = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender captured_genders = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapturedGenders()
    {
        return $this->captured_genders;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender captured_genders = 8;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapturedGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Gender::class);
        $this->captured_genders = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool captured_shiny = 9;</code>
     * @return bool
     */
    public function getCapturedShiny()
    {
        return $this->captured_shiny;
    }

    /**
     * Generated from protobuf field <code>bool captured_shiny = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCapturedShiny($var)
    {
        GPBUtil::checkBool($var);
        $this->captured_shiny = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume encountered_costumes = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncounteredCostumes()
    {
        return $this->encountered_costumes;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Costume encountered_costumes = 10;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncounteredCostumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Costume::class);
        $this->encountered_costumes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form encountered_forms = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncounteredForms()
    {
        return $this->encountered_forms;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Form encountered_forms = 11;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncounteredForms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Form::class);
        $this->encountered_forms = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender encountered_genders = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncounteredGenders()
    {
        return $this->encountered_genders;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonDisplay.Gender encountered_genders = 12;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncounteredGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\PokemonDisplay\Gender::class);
        $this->encountered_genders = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool encountered_shiny = 13;</code>
     * @return bool
     */
    public function getEncounteredShiny()
    {
        return $this->encountered_shiny;
    }

    /**
     * Generated from protobuf field <code>bool encountered_shiny = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setEncounteredShiny($var)
    {
        GPBUtil::checkBool($var);
        $this->encountered_shiny = $var;

        return $this;
    }

}

