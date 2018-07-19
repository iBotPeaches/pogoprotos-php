<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/FortRecallPokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.FortRecallPokemonMessage</code>
 */
class FortRecallPokemonMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>double player_latitude = 3;</code>
     */
    private $player_latitude = 0.0;
    /**
     * Generated from protobuf field <code>double player_longitude = 4;</code>
     */
    private $player_longitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fort_id
     *     @type int|string $pokemon_id
     *     @type float $player_latitude
     *     @type float $player_longitude
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\FortRecallPokemonMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
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
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
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
     * Generated from protobuf field <code>double player_latitude = 3;</code>
     * @return float
     */
    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    /**
     * Generated from protobuf field <code>double player_latitude = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPlayerLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_latitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double player_longitude = 4;</code>
     * @return float
     */
    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    /**
     * Generated from protobuf field <code>double player_longitude = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPlayerLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_longitude = $var;

        return $this;
    }

}

