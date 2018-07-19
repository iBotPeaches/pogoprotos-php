<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/NotificationSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.NotificationSettings</code>
 */
class NotificationSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool pull_notifications = 1;</code>
     */
    private $pull_notifications = false;
    /**
     * Generated from protobuf field <code>bool show_notifications = 2;</code>
     */
    private $show_notifications = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $pull_notifications
     *     @type bool $show_notifications
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\NotificationSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool pull_notifications = 1;</code>
     * @return bool
     */
    public function getPullNotifications()
    {
        return $this->pull_notifications;
    }

    /**
     * Generated from protobuf field <code>bool pull_notifications = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPullNotifications($var)
    {
        GPBUtil::checkBool($var);
        $this->pull_notifications = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool show_notifications = 2;</code>
     * @return bool
     */
    public function getShowNotifications()
    {
        return $this->show_notifications;
    }

    /**
     * Generated from protobuf field <code>bool show_notifications = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowNotifications($var)
    {
        GPBUtil::checkBool($var);
        $this->show_notifications = $var;

        return $this;
    }

}

