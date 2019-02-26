<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/RegisterPushNotificationMessage.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage</code>
 */
class RegisterPushNotificationMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     */
    private $apn_token = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     */
    private $gcm_token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\ApnToken $apn_token
     *     @type \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\GcmToken $gcm_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     * @return \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\ApnToken
     */
    public function getApnToken()
    {
        return $this->apn_token;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     * @param \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\ApnToken $var
     * @return $this
     */
    public function setApnToken($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage_ApnToken::class);
        $this->apn_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     * @return \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\GcmToken
     */
    public function getGcmToken()
    {
        return $this->gcm_token;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Requests.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     * @param \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage\GcmToken $var
     * @return $this
     */
    public function setGcmToken($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Platform\Requests\RegisterPushNotificationMessage_GcmToken::class);
        $this->gcm_token = $var;

        return $this;
    }

}

