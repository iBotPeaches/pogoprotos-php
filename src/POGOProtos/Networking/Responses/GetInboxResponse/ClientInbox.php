<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetInboxResponse.proto

namespace POGOProtos\Networking\Responses\GetInboxResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox</code>
 */
class ClientInbox extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.Notification notifications = 1;</code>
     */
    private $notifications;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.TemplateVariable builtin_variables = 2;</code>
     */
    private $builtin_variables;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification[]|\Google\Protobuf\Internal\RepeatedField $notifications
     *     @type \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable[]|\Google\Protobuf\Internal\RepeatedField $builtin_variables
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetInboxResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.Notification notifications = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.Notification notifications = 1;</code>
     * @param \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotifications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification::class);
        $this->notifications = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.TemplateVariable builtin_variables = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuiltinVariables()
    {
        return $this->builtin_variables;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.TemplateVariable builtin_variables = 2;</code>
     * @param \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuiltinVariables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable::class);
        $this->builtin_variables = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClientInbox::class, \POGOProtos\Networking\Responses\GetInboxResponse_ClientInbox::class);
