<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/ReplaceLoginActionMessage.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Requests.ReplaceLoginActionMessage</code>
 */
class ReplaceLoginActionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider existing_identity_provider = 1;</code>
     */
    private $existing_identity_provider = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.AddLoginActionMessage new_login = 2;</code>
     */
    private $new_login = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $existing_identity_provider
     *     @type \POGOProtos\Networking\Platform\Requests\AddLoginActionMessage $new_login
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\ReplaceLoginActionMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider existing_identity_provider = 1;</code>
     * @return int
     */
    public function getExistingIdentityProvider()
    {
        return $this->existing_identity_provider;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.IdentityProvider existing_identity_provider = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setExistingIdentityProvider($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\IdentityProvider::class);
        $this->existing_identity_provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.AddLoginActionMessage new_login = 2;</code>
     * @return \POGOProtos\Networking\Platform\Requests\AddLoginActionMessage
     */
    public function getNewLogin()
    {
        return $this->new_login;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.AddLoginActionMessage new_login = 2;</code>
     * @param \POGOProtos\Networking\Platform\Requests\AddLoginActionMessage $var
     * @return $this
     */
    public function setNewLogin($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Platform\Requests\AddLoginActionMessage::class);
        $this->new_login = $var;

        return $this;
    }

}

