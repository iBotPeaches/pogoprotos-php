<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/LeaveLobbyResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.LeaveLobbyResponse</code>
 */
class LeaveLobbyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LeaveLobbyResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     */
    private $lobby = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Raid\Lobby $lobby
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\LeaveLobbyResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LeaveLobbyResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.LeaveLobbyResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\LeaveLobbyResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     * @return \POGOProtos\Data\Raid\Lobby
     */
    public function getLobby()
    {
        return $this->lobby;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.Lobby lobby = 2;</code>
     * @param \POGOProtos\Data\Raid\Lobby $var
     * @return $this
     */
    public function setLobby($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\Lobby::class);
        $this->lobby = $var;

        return $this;
    }

}

