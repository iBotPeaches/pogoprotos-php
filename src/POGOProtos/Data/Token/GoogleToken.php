<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Token/GoogleToken.proto

namespace POGOProtos\Data\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Token.GoogleToken</code>
 */
class GoogleToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id_token = 1;</code>
     */
    private $id_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Token\GoogleToken::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id_token = 1;</code>
     * @return string
     */
    public function getIdToken()
    {
        return $this->id_token;
    }

    /**
     * Generated from protobuf field <code>string id_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIdToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->id_token = $var;

        return $this;
    }

}
