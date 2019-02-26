<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CheckPhotobombResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.CheckPhotobombResponse</code>
 */
class CheckPhotobombResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CheckPhotobombResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId photobomb_pokemon_id = 2;</code>
     */
    private $photobomb_pokemon_id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay photobomb_pokemon_display = 3;</code>
     */
    private $photobomb_pokemon_display = null;
    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 4;</code>
     */
    private $encounter_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $photobomb_pokemon_id
     *     @type \POGOProtos\Data\PokemonDisplay $photobomb_pokemon_display
     *     @type int|string $encounter_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\CheckPhotobombResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CheckPhotobombResponse.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CheckPhotobombResponse.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\CheckPhotobombResponse_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId photobomb_pokemon_id = 2;</code>
     * @return int
     */
    public function getPhotobombPokemonId()
    {
        return $this->photobomb_pokemon_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId photobomb_pokemon_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPhotobombPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->photobomb_pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay photobomb_pokemon_display = 3;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPhotobombPokemonDisplay()
    {
        return $this->photobomb_pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay photobomb_pokemon_display = 3;</code>
     * @param \POGOProtos\Data\PokemonDisplay $var
     * @return $this
     */
    public function setPhotobombPokemonDisplay($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->photobomb_pokemon_display = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 4;</code>
     * @return int|string
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEncounterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->encounter_id = $var;

        return $this;
    }

}

