<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/InviteFacebookFriendResponse.proto

namespace POGOProtos\Networking\Responses\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.Social.InviteFacebookFriendResponse</code>
 */
class InviteFacebookFriendResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.Social.InviteFacebookFriendResponse.Result result = 1;</code>
     */
    private $result = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\Social\InviteFacebookFriendResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.InviteFacebookFriendResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.Social.InviteFacebookFriendResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\Social\InviteFacebookFriendResponse_Result::class);
        $this->result = $var;
    }

}

