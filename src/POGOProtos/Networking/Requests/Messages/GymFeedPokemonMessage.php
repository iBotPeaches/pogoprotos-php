<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GymFeedPokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.GymFeedPokemonMessage</code>
 */
class GymFeedPokemonMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    private $item = 0;
    /**
     * <code>int32 starting_quantity = 2;</code>
     */
    private $starting_quantity = 0;
    /**
     * <code>string gym_id = 3;</code>
     */
    private $gym_id = '';
    /**
     * <code>fixed64 pokemon_id = 4;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>double player_lat_degrees = 5;</code>
     */
    private $player_lat_degrees = 0.0;
    /**
     * <code>double player_lng_degrees = 6;</code>
     */
    private $player_lng_degrees = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GymFeedPokemonMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function setItem($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item = $var;
    }

    /**
     * <code>int32 starting_quantity = 2;</code>
     */
    public function getStartingQuantity()
    {
        return $this->starting_quantity;
    }

    /**
     * <code>int32 starting_quantity = 2;</code>
     */
    public function setStartingQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->starting_quantity = $var;
    }

    /**
     * <code>string gym_id = 3;</code>
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * <code>string gym_id = 3;</code>
     */
    public function setGymId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gym_id = $var;
    }

    /**
     * <code>fixed64 pokemon_id = 4;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>fixed64 pokemon_id = 4;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;
    }

    /**
     * <code>double player_lat_degrees = 5;</code>
     */
    public function getPlayerLatDegrees()
    {
        return $this->player_lat_degrees;
    }

    /**
     * <code>double player_lat_degrees = 5;</code>
     */
    public function setPlayerLatDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lat_degrees = $var;
    }

    /**
     * <code>double player_lng_degrees = 6;</code>
     */
    public function getPlayerLngDegrees()
    {
        return $this->player_lng_degrees;
    }

    /**
     * <code>double player_lng_degrees = 6;</code>
     */
    public function setPlayerLngDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lng_degrees = $var;
    }

}

