<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/RequestEnvelope.proto

namespace POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo.AuthOptions</code>
 */
class AuthOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool prevent_account_creation = 1;</code>
     */
    private $prevent_account_creation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $prevent_account_creation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Envelopes\RequestEnvelope::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool prevent_account_creation = 1;</code>
     * @return bool
     */
    public function getPreventAccountCreation()
    {
        return $this->prevent_account_creation;
    }

    /**
     * Generated from protobuf field <code>bool prevent_account_creation = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreventAccountCreation($var)
    {
        GPBUtil::checkBool($var);
        $this->prevent_account_creation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthOptions::class, \POGOProtos\Networking\Envelopes\RequestEnvelope_AuthInfo_AuthOptions::class);
