<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/VerifyChallengeMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.VerifyChallengeMessage</code>
 */
class VerifyChallengeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string token = 1;</code>
     */
    private $token = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\VerifyChallengeMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>string token = 1;</code>
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * <code>string token = 1;</code>
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;
    }

}

