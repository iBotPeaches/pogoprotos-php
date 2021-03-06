<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Fort/GymEvent.proto

namespace POGOProtos\Map\Fort;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Map.Fort.GymEvent</code>
 */
class GymEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string trainer = 1;</code>
     */
    private $trainer = '';
    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 2;</code>
     */
    private $timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Map.Fort.GymEvent.Event event = 3;</code>
     */
    private $event = 0;
    /**
     * Generated from protobuf field <code>int32 pokedex_id = 4;</code>
     */
    private $pokedex_id = 0;
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 5;</code>
     */
    private $pokemon_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trainer
     *     @type int|string $timestamp_ms
     *     @type int $event
     *     @type int $pokedex_id
     *     @type int|string $pokemon_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Map\Fort\GymEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string trainer = 1;</code>
     * @return string
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Generated from protobuf field <code>string trainer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->trainer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 2;</code>
     * @return int|string
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Map.Fort.GymEvent.Event event = 3;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Map.Fort.GymEvent.Event event = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\Fort\GymEvent_Event::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_id = 4;</code>
     * @return int
     */
    public function getPokedexId()
    {
        return $this->pokedex_id;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPokedexId($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokedex_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 5;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;

        return $this;
    }

}

