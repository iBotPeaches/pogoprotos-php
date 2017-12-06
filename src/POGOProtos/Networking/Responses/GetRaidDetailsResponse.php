<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetRaidDetailsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetRaidDetailsResponse</code>
 */
class GetRaidDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 1;</code>
     */
    private $lobby = null;
    /**
     * <code>.POGOProtos.Data.Battle.Battle raid_battle = 2;</code>
     */
    private $raid_battle = null;
    /**
     * <code>bool player_can_join_lobby = 3;</code>
     */
    private $player_can_join_lobby = false;
    /**
     * <code>.POGOProtos.Networking.Responses.GetRaidDetailsResponse.Result result = 4;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.Raid.RaidInfo raid_info = 5;</code>
     */
    private $raid_info = null;
    /**
     * <code>bool ticket_used = 6;</code>
     */
    private $ticket_used = false;
    /**
     * <code>bool free_ticket_available = 7;</code>
     */
    private $free_ticket_available = false;
    /**
     * <code>int32 throws_remaining = 8;</code>
     */
    private $throws_remaining = 0;
    /**
     * <code>bool received_rewards = 9;</code>
     */
    private $received_rewards = false;
    /**
     * <code>int32 num_players_in_lobby = 10;</code>
     */
    private $num_players_in_lobby = 0;
    /**
     * <code>int64 server_ms = 11;</code>
     */
    private $server_ms = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GetRaidDetailsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 1;</code>
     */
    public function getLobby()
    {
        return $this->lobby;
    }

    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 1;</code>
     */
    public function setLobby(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\Lobby::class);
        $this->lobby = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.Battle raid_battle = 2;</code>
     */
    public function getRaidBattle()
    {
        return $this->raid_battle;
    }

    /**
     * <code>.POGOProtos.Data.Battle.Battle raid_battle = 2;</code>
     */
    public function setRaidBattle(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\Battle::class);
        $this->raid_battle = $var;
    }

    /**
     * <code>bool player_can_join_lobby = 3;</code>
     */
    public function getPlayerCanJoinLobby()
    {
        return $this->player_can_join_lobby;
    }

    /**
     * <code>bool player_can_join_lobby = 3;</code>
     */
    public function setPlayerCanJoinLobby($var)
    {
        GPBUtil::checkBool($var);
        $this->player_can_join_lobby = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GetRaidDetailsResponse.Result result = 4;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GetRaidDetailsResponse.Result result = 4;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetRaidDetailsResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.Raid.RaidInfo raid_info = 5;</code>
     */
    public function getRaidInfo()
    {
        return $this->raid_info;
    }

    /**
     * <code>.POGOProtos.Data.Raid.RaidInfo raid_info = 5;</code>
     */
    public function setRaidInfo(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\RaidInfo::class);
        $this->raid_info = $var;
    }

    /**
     * <code>bool ticket_used = 6;</code>
     */
    public function getTicketUsed()
    {
        return $this->ticket_used;
    }

    /**
     * <code>bool ticket_used = 6;</code>
     */
    public function setTicketUsed($var)
    {
        GPBUtil::checkBool($var);
        $this->ticket_used = $var;
    }

    /**
     * <code>bool free_ticket_available = 7;</code>
     */
    public function getFreeTicketAvailable()
    {
        return $this->free_ticket_available;
    }

    /**
     * <code>bool free_ticket_available = 7;</code>
     */
    public function setFreeTicketAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->free_ticket_available = $var;
    }

    /**
     * <code>int32 throws_remaining = 8;</code>
     */
    public function getThrowsRemaining()
    {
        return $this->throws_remaining;
    }

    /**
     * <code>int32 throws_remaining = 8;</code>
     */
    public function setThrowsRemaining($var)
    {
        GPBUtil::checkInt32($var);
        $this->throws_remaining = $var;
    }

    /**
     * <code>bool received_rewards = 9;</code>
     */
    public function getReceivedRewards()
    {
        return $this->received_rewards;
    }

    /**
     * <code>bool received_rewards = 9;</code>
     */
    public function setReceivedRewards($var)
    {
        GPBUtil::checkBool($var);
        $this->received_rewards = $var;
    }

    /**
     * <code>int32 num_players_in_lobby = 10;</code>
     */
    public function getNumPlayersInLobby()
    {
        return $this->num_players_in_lobby;
    }

    /**
     * <code>int32 num_players_in_lobby = 10;</code>
     */
    public function setNumPlayersInLobby($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_players_in_lobby = $var;
    }

    /**
     * <code>int64 server_ms = 11;</code>
     */
    public function getServerMs()
    {
        return $this->server_ms;
    }

    /**
     * <code>int64 server_ms = 11;</code>
     */
    public function setServerMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->server_ms = $var;
    }

}
