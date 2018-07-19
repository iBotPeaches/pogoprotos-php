<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/AcceptFriendInviteResponse.proto

namespace POGOProtos\Networking\Responses\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.Social.AcceptFriendInviteResponse</code>
 */
class AcceptFriendInviteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.Social.AcceptFriendInviteResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.Player.PlayerSummary friend = 2;</code>
     */
    private $friend = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\Social\AcceptFriendInviteResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.AcceptFriendInviteResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.AcceptFriendInviteResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\Social\AcceptFriendInviteResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerSummary friend = 2;</code>
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerSummary friend = 2;</code>
     */
    public function setFriend(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerSummary::class);
        $this->friend = $var;
    }

}

