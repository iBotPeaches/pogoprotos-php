<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Social/SendFriendInviteMessage.proto

namespace POGOProtos\Networking\Requests\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Social.SendFriendInviteMessage</code>
 */
class SendFriendInviteMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * Generated from protobuf field <code>string friend_code = 2;</code>
     */
    private $friend_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $player_id
     *     @type string $friend_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Social\SendFriendInviteMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string friend_code = 2;</code>
     * @return string
     */
    public function getFriendCode()
    {
        return $this->friend_code;
    }

    /**
     * Generated from protobuf field <code>string friend_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->friend_code = $var;

        return $this;
    }

}

