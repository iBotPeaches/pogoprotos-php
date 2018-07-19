<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SetPlayerTeamMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.SetPlayerTeamMessage</code>
 */
class SetPlayerTeamMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 1;</code>
     */
    private $team = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $team
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\SetPlayerTeamMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 1;</code>
     * @return int
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\TeamColor::class);
        $this->team = $var;

        return $this;
    }

}

