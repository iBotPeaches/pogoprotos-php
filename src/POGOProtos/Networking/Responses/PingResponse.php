<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/PlatformClientActionsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.PingResponse</code>
 */
class PingResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string user_info = 1;</code>
     */
    private $user_info = '';
    /**
     * <code>string server_info = 2;</code>
     */
    private $server_info = '';
    /**
     * <code>string random_response_bytes = 3;</code>
     */
    private $random_response_bytes = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\PlatformClientActionsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>string user_info = 1;</code>
     */
    public function getUserInfo()
    {
        return $this->user_info;
    }

    /**
     * <code>string user_info = 1;</code>
     */
    public function setUserInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_info = $var;
    }

    /**
     * <code>string server_info = 2;</code>
     */
    public function getServerInfo()
    {
        return $this->server_info;
    }

    /**
     * <code>string server_info = 2;</code>
     */
    public function setServerInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_info = $var;
    }

    /**
     * <code>string random_response_bytes = 3;</code>
     */
    public function getRandomResponseBytes()
    {
        return $this->random_response_bytes;
    }

    /**
     * <code>string random_response_bytes = 3;</code>
     */
    public function setRandomResponseBytes($var)
    {
        GPBUtil::checkString($var, True);
        $this->random_response_bytes = $var;
    }

}

