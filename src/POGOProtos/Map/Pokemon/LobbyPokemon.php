<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Pokemon/LobbyPokemon.proto

namespace POGOProtos\Map\Pokemon;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Map.Pokemon.LobbyPokemon</code>
 */
class LobbyPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokedex_id = 2;</code>
     */
    private $pokedex_id = 0;
    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     */
    private $cp = 0;
    /**
     * Generated from protobuf field <code>float percent_health = 4;</code>
     */
    private $percent_health = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int $pokedex_id
     *     @type int $cp
     *     @type float $percent_health
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Map\Pokemon\LobbyPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokedex_id = 2;</code>
     * @return int
     */
    public function getPokedexId()
    {
        return $this->pokedex_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokedex_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPokedexId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokedex_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float percent_health = 4;</code>
     * @return float
     */
    public function getPercentHealth()
    {
        return $this->percent_health;
    }

    /**
     * Generated from protobuf field <code>float percent_health = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPercentHealth($var)
    {
        GPBUtil::checkFloat($var);
        $this->percent_health = $var;

        return $this;
    }

}

