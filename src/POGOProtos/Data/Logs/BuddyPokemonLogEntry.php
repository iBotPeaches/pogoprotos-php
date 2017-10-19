<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/BuddyPokemonLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Logs.BuddyPokemonLogEntry</code>
 */
class BuddyPokemonLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>int32 amount = 3;</code>
     */
    private $amount = 0;
    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 4;</code>
     */
    private $pokemon_display = null;
    /**
     * <code>fixed64 pokemon = 5;</code>
     */
    private $pokemon = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Logs\BuddyPokemonLogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;
    }

    /**
     * <code>int32 amount = 3;</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>int32 amount = 3;</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 4;</code>
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 4;</code>
     */
    public function setPokemonDisplay(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->pokemon_display = $var;
    }

    /**
     * <code>fixed64 pokemon = 5;</code>
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * <code>fixed64 pokemon = 5;</code>
     */
    public function setPokemon($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon = $var;
    }

}

