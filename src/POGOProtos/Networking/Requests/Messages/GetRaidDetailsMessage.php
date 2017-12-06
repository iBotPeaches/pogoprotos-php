<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetRaidDetailsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.GetRaidDetailsMessage</code>
 */
class GetRaidDetailsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 raid_seed = 1;</code>
     */
    private $raid_seed = 0;
    /**
     * <code>string gym_id = 2;</code>
     */
    private $gym_id = '';
    /**
     * <code>repeated int32 lobby_id = 3;</code>
     */
    private $lobby_id;
    /**
     * <code>double player_lat_degrees = 4;</code>
     */
    private $player_lat_degrees = 0.0;
    /**
     * <code>double player_lng_degrees = 5;</code>
     */
    private $player_lng_degrees = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GetRaidDetailsMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 raid_seed = 1;</code>
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * <code>int64 raid_seed = 1;</code>
     */
    public function setRaidSeed($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_seed = $var;
    }

    /**
     * <code>string gym_id = 2;</code>
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * <code>string gym_id = 2;</code>
     */
    public function setGymId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gym_id = $var;
    }

    /**
     * <code>repeated int32 lobby_id = 3;</code>
     */
    public function getLobbyId()
    {
        return $this->lobby_id;
    }

    /**
     * <code>repeated int32 lobby_id = 3;</code>
     */
    public function setLobbyId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->lobby_id = $var;
    }

    /**
     * <code>double player_lat_degrees = 4;</code>
     */
    public function getPlayerLatDegrees()
    {
        return $this->player_lat_degrees;
    }

    /**
     * <code>double player_lat_degrees = 4;</code>
     */
    public function setPlayerLatDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lat_degrees = $var;
    }

    /**
     * <code>double player_lng_degrees = 5;</code>
     */
    public function getPlayerLngDegrees()
    {
        return $this->player_lng_degrees;
    }

    /**
     * <code>double player_lng_degrees = 5;</code>
     */
    public function setPlayerLngDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lng_degrees = $var;
    }

}
