<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Combat/WithPokemonType.proto

namespace POGOProtos\Data\Combat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Combat.WithPokemonType</code>
 */
class WithPokemonType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 1;</code>
     */
    private $pokemon_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pokemon_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Combat\WithPokemonType::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokemonType()
    {
        return $this->pokemon_type;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 1;</code>
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

