<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SfidaRegistrationResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.SfidaRegistrationResponse</code>
 */
class SfidaRegistrationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes access_token = 1;</code>
     */
    private $access_token = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\SfidaRegistrationResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes access_token = 1;</code>
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * <code>bytes access_token = 1;</code>
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->access_token = $var;
    }

}

