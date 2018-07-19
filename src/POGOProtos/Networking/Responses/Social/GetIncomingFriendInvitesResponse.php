<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/GetIncomingFriendInvitesResponse.proto

namespace POGOProtos\Networking\Responses\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.Social.GetIncomingFriendInvitesResponse</code>
 */
class GetIncomingFriendInvitesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.Social.GetIncomingFriendInvitesResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>repeated .POGOProtos.Data.Friends.IncomingFriendInviteDisplay invites = 2;</code>
     */
    private $invites;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\Social\GetIncomingFriendInvitesResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.GetIncomingFriendInvitesResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.GetIncomingFriendInvitesResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\Social\GetIncomingFriendInvitesResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Friends.IncomingFriendInviteDisplay invites = 2;</code>
     */
    public function getInvites()
    {
        return $this->invites;
    }

    /**
     * <code>repeated .POGOProtos.Data.Friends.IncomingFriendInviteDisplay invites = 2;</code>
     */
    public function setInvites(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Friends\IncomingFriendInviteDisplay::class);
        $this->invites = $var;
    }

}

