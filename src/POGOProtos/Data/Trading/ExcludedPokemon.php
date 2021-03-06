<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Trading/ExcludedPokemon.proto

namespace POGOProtos\Data\Trading;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Trading.ExcludedPokemon</code>
 */
class ExcludedPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.ExcludedPokemon.ExclusionReason exclusion_reason = 2;</code>
     */
    private $exclusion_reason = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pokemon_id
     *     @type int $exclusion_reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Trading\ExcludedPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
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
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.ExcludedPokemon.ExclusionReason exclusion_reason = 2;</code>
     * @return int
     */
    public function getExclusionReason()
    {
        return $this->exclusion_reason;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.ExcludedPokemon.ExclusionReason exclusion_reason = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExclusionReason($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Trading\ExcludedPokemon_ExclusionReason::class);
        $this->exclusion_reason = $var;

        return $this;
    }

}

