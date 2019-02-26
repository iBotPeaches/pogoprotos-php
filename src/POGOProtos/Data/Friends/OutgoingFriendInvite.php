<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/OutgoingFriendInvite.proto

namespace POGOProtos\Data\Friends;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Friends.OutgoingFriendInvite</code>
 */
class OutgoingFriendInvite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.OutgoingFriendInvite.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
     */
    private $player_id = '';
    /**
     * Generated from protobuf field <code>int64 created_ms = 3;</code>
     */
    private $created_ms = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.InvitationType invitation_type = 4;</code>
     */
    private $invitation_type = 0;
    /**
     * Generated from protobuf field <code>string full_name = 5;</code>
     */
    private $full_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type string $player_id
     *     @type int|string $created_ms
     *     @type int $invitation_type
     *     @type string $full_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Friends\OutgoingFriendInvite::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.OutgoingFriendInvite.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.OutgoingFriendInvite.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Friends\OutgoingFriendInvite_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
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
     * Generated from protobuf field <code>int64 created_ms = 3;</code>
     * @return int|string
     */
    public function getCreatedMs()
    {
        return $this->created_ms;
    }

    /**
     * Generated from protobuf field <code>int64 created_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.InvitationType invitation_type = 4;</code>
     * @return int
     */
    public function getInvitationType()
    {
        return $this->invitation_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.InvitationType invitation_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setInvitationType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\InvitationType::class);
        $this->invitation_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string full_name = 5;</code>
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Generated from protobuf field <code>string full_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_name = $var;

        return $this;
    }

}

