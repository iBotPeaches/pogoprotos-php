<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EvolvePokemonResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.EvolvePokemonResponse</code>
 */
class EvolvePokemonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.EvolvePokemonResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData evolved_pokemon_data = 2;</code>
     */
    private $evolved_pokemon_data = null;
    /**
     * Generated from protobuf field <code>int32 experience_awarded = 3;</code>
     */
    private $experience_awarded = 0;
    /**
     * Generated from protobuf field <code>int32 candy_awarded = 4;</code>
     */
    private $candy_awarded = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\PokemonData $evolved_pokemon_data
     *     @type int $experience_awarded
     *     @type int $candy_awarded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\EvolvePokemonResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.EvolvePokemonResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.EvolvePokemonResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\EvolvePokemonResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData evolved_pokemon_data = 2;</code>
     * @return \POGOProtos\Data\PokemonData
     */
    public function getEvolvedPokemonData()
    {
        return $this->evolved_pokemon_data;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData evolved_pokemon_data = 2;</code>
     * @param \POGOProtos\Data\PokemonData $var
     * @return $this
     */
    public function setEvolvedPokemonData($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->evolved_pokemon_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 experience_awarded = 3;</code>
     * @return int
     */
    public function getExperienceAwarded()
    {
        return $this->experience_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 experience_awarded = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setExperienceAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->experience_awarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 candy_awarded = 4;</code>
     * @return int
     */
    public function getCandyAwarded()
    {
        return $this->candy_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 candy_awarded = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCandyAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_awarded = $var;

        return $this;
    }

}

