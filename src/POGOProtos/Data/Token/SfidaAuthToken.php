<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Token/SfidaAuthToken.proto

namespace POGOProtos\Data\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Token.SfidaAuthToken</code>
 */
class SfidaAuthToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes response_token = 1;</code>
     */
    private $response_token = '';
    /**
     * Generated from protobuf field <code>string sfida_id = 2;</code>
     */
    private $sfida_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $response_token
     *     @type string $sfida_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Token\SfidaAuthToken::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes response_token = 1;</code>
     * @return string
     */
    public function getResponseToken()
    {
        return $this->response_token;
    }

    /**
     * Generated from protobuf field <code>bytes response_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResponseToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->response_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sfida_id = 2;</code>
     * @return string
     */
    public function getSfidaId()
    {
        return $this->sfida_id;
    }

    /**
     * Generated from protobuf field <code>string sfida_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSfidaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sfida_id = $var;

        return $this;
    }

}
