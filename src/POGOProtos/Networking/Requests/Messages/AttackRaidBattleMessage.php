<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/AttackRaidBattleMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.AttackRaidBattleMessage</code>
 */
class AttackRaidBattleMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string gym_id = 1;</code>
     */
    private $gym_id = '';
    /**
     * <code>int64 raid_seed = 2;</code>
     */
    private $raid_seed = 0;
    /**
     * <code>repeated int32 lobby_id = 4;</code>
     */
    private $lobby_id;
    /**
     * <code>repeated fixed64 attacking_pokemon_id = 5;</code>
     */
    private $attacking_pokemon_id;
    /**
     * <code>double player_lat_degrees = 6;</code>
     */
    private $player_lat_degrees = 0.0;
    /**
     * <code>double player_lng_degrees = 7;</code>
     */
    private $player_lng_degrees = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\AttackRaidBattleMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>string gym_id = 1;</code>
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * <code>string gym_id = 1;</code>
     */
    public function setGymId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gym_id = $var;
    }

    /**
     * <code>int64 raid_seed = 2;</code>
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * <code>int64 raid_seed = 2;</code>
     */
    public function setRaidSeed($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_seed = $var;
    }

    /**
     * <code>repeated int32 lobby_id = 4;</code>
     */
    public function getLobbyId()
    {
        return $this->lobby_id;
    }

    /**
     * <code>repeated int32 lobby_id = 4;</code>
     */
    public function setLobbyId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->lobby_id = $var;
    }

    /**
     * <code>repeated fixed64 attacking_pokemon_id = 5;</code>
     */
    public function getAttackingPokemonId()
    {
        return $this->attacking_pokemon_id;
    }

    /**
     * <code>repeated fixed64 attacking_pokemon_id = 5;</code>
     */
    public function setAttackingPokemonId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->attacking_pokemon_id = $var;
    }

    /**
     * <code>double player_lat_degrees = 6;</code>
     */
    public function getPlayerLatDegrees()
    {
        return $this->player_lat_degrees;
    }

    /**
     * <code>double player_lat_degrees = 6;</code>
     */
    public function setPlayerLatDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lat_degrees = $var;
    }

    /**
     * <code>double player_lng_degrees = 7;</code>
     */
    public function getPlayerLngDegrees()
    {
        return $this->player_lng_degrees;
    }

    /**
     * <code>double player_lng_degrees = 7;</code>
     */
    public function setPlayerLngDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lng_degrees = $var;
    }

}

