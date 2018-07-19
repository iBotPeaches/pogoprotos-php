<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Pokemon/NearbyPokemon.proto

namespace POGOProtos\Map\Pokemon;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Map.Pokemon.NearbyPokemon</code>
 */
class NearbyPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>float distance_in_meters = 2;</code>
     */
    private $distance_in_meters = 0.0;
    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 3;</code>
     */
    private $encounter_id = 0;
    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>string fort_image_url = 5;</code>
     */
    private $fort_image_url = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 6;</code>
     */
    private $pokemon_display = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pokemon_id
     *     @type float $distance_in_meters
     *     @type int|string $encounter_id
     *     @type string $fort_id
     *     @type string $fort_image_url
     *     @type \POGOProtos\Data\PokemonDisplay $pokemon_display
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Map\Pokemon\NearbyPokemon::initOnce();
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
     * Generated from protobuf field <code>float distance_in_meters = 2;</code>
     * @return float
     */
    public function getDistanceInMeters()
    {
        return $this->distance_in_meters;
    }

    /**
     * Generated from protobuf field <code>float distance_in_meters = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDistanceInMeters($var)
    {
        GPBUtil::checkFloat($var);
        $this->distance_in_meters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 3;</code>
     * @return int|string
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 encounter_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEncounterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->encounter_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_image_url = 5;</code>
     * @return string
     */
    public function getFortImageUrl()
    {
        return $this->fort_image_url;
    }

    /**
     * Generated from protobuf field <code>string fort_image_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFortImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 6;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 6;</code>
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

