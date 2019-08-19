<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Sfida/SfidaNearbyPokemon.proto

namespace POGOProtos\Data\Sfida;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Sfida.SfidaNearbyPokemon</code>
 */
class SfidaNearbyPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 pokedex_number = 1;</code>
     */
    private $pokedex_number = 0;
    /**
     * Generated from protobuf field <code>bool uncaught = 2;</code>
     */
    private $uncaught = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 3;</code>
     */
    private $pokemon_display = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pokedex_number
     *     @type bool $uncaught
     *     @type \POGOProtos\Data\PokemonDisplay $pokemon_display
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Sfida\SfidaNearbyPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_number = 1;</code>
     * @return int
     */
    public function getPokedexNumber()
    {
        return $this->pokedex_number;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_number = 1;</code>
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
     * Generated from protobuf field <code>bool uncaught = 2;</code>
     * @return bool
     */
    public function getUncaught()
    {
        return $this->uncaught;
    }

    /**
     * Generated from protobuf field <code>bool uncaught = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUncaught($var)
    {
        GPBUtil::checkBool($var);
        $this->uncaught = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 3;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 3;</code>
     * @param \POGOProtos\Data\PokemonDisplay $var
     * @return $this
     */
    public function setPokemonDisplay($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->pokemon_display = $var;

        return $this;
    }

}
