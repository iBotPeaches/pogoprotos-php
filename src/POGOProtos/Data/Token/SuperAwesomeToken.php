<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Token/SuperAwesomeToken.proto

namespace POGOProtos\Data\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Token.SuperAwesomeToken</code>
 */
class SuperAwesomeToken extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string token = 1;</code>
     */
    private $token = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Token\SuperAwesomeToken::initOnce();
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

