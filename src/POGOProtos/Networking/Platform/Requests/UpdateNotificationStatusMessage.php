<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/UpdateNotificationStatusMessage.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Requests.UpdateNotificationStatusMessage</code>
 */
class UpdateNotificationStatusMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string notification_ids = 1;</code>
     */
    private $notification_ids;
    /**
     * Generated from protobuf field <code>repeated int64 create_timestamp_ms = 2;</code>
     */
    private $create_timestamp_ms;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NotificationState state = 3;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $notification_ids
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $create_timestamp_ms
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\UpdateNotificationStatusMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string notification_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationIds()
    {
        return $this->notification_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string notification_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 create_timestamp_ms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreateTimestampMs()
    {
        return $this->create_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>repeated int64 create_timestamp_ms = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreateTimestampMs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->create_timestamp_ms = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NotificationState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NotificationState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\NotificationState::class);
        $this->state = $var;

        return $this;
    }

}

