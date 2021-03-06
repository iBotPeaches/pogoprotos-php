<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/AddLoginActionMessage.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Requests.AddLoginActionMessage</code>
 */
class AddLoginActionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider identity_provider = 1;</code>
     */
    private $identity_provider = 0;
    /**
     * Generated from protobuf field <code>bytes inner_message = 2;</code>
     */
    private $inner_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $identity_provider
     *     @type string $inner_message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\AddLoginActionMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider identity_provider = 1;</code>
     * @return int
     */
    public function getIdentityProvider()
    {
        return $this->identity_provider;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider identity_provider = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIdentityProvider($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\IdentityProvider::class);
        $this->identity_provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes inner_message = 2;</code>
     * @return string
     */
    public function getInnerMessage()
    {
        return $this->inner_message;
    }

    /**
     * Generated from protobuf field <code>bytes inner_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInnerMessage($var)
    {
        GPBUtil::checkString($var, False);
        $this->inner_message = $var;

        return $this;
    }

}

