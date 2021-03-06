<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Social/RegisterPushNotificationMessage.proto

namespace POGOProtos\Networking\Requests\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage</code>
 */
class RegisterPushNotificationMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     */
    private $apn_token = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     */
    private $gcm_token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\ApnToken $apn_token
     *     @type \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\GcmToken $gcm_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     * @return \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\ApnToken
     */
    public function getApnToken()
    {
        return $this->apn_token;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.ApnToken apn_token = 1;</code>
     * @param \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\ApnToken $var
     * @return $this
     */
    public function setApnToken($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage_ApnToken::class);
        $this->apn_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     * @return \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\GcmToken
     */
    public function getGcmToken()
    {
        return $this->gcm_token;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Requests.Social.RegisterPushNotificationMessage.GcmToken gcm_token = 2;</code>
     * @param \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage\GcmToken $var
     * @return $this
     */
    public function setGcmToken($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Requests\Social\RegisterPushNotificationMessage_GcmToken::class);
        $this->gcm_token = $var;

        return $this;
    }

}

