<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SetLobbyVisibilityResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.SetLobbyVisibilityResponse</code>
 */
class SetLobbyVisibilityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.SetLobbyVisibilityResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     */
    private $lobby = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\SetLobbyVisibilityResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.SetLobbyVisibilityResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.SetLobbyVisibilityResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\SetLobbyVisibilityResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     */
    public function getLobby()
    {
        return $this->lobby;
    }

    /**
     * <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     */
    public function setLobby(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\Lobby::class);
        $this->lobby = $var;
    }

}

