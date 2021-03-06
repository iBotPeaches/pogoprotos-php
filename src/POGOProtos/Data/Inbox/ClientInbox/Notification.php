<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Inbox/ClientInbox.proto

namespace POGOProtos\Data\Inbox\ClientInbox;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Inbox.ClientInbox.Notification</code>
 */
class Notification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string notification_id = 1;</code>
     */
    private $notification_id = '';
    /**
     * Generated from protobuf field <code>string title_key = 2;</code>
     */
    private $title_key = '';
    /**
     * Generated from protobuf field <code>string category = 3;</code>
     */
    private $category = '';
    /**
     * Generated from protobuf field <code>int64 create_timestamp_ms = 4;</code>
     */
    private $create_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.TemplateVariable variables = 5;</code>
     */
    private $variables;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.Notification.Label labels = 6;</code>
     */
    private $labels;
    /**
     * Generated from protobuf field <code>int64 expire_time_ms = 7;</code>
     */
    private $expire_time_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $notification_id
     *     @type string $title_key
     *     @type string $category
     *     @type int|string $create_timestamp_ms
     *     @type \POGOProtos\Data\Inbox\ClientInbox\TemplateVariable[]|\Google\Protobuf\Internal\RepeatedField $variables
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $labels
     *     @type int|string $expire_time_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Inbox\ClientInbox::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string notification_id = 1;</code>
     * @return string
     */
    public function getNotificationId()
    {
        return $this->notification_id;
    }

    /**
     * Generated from protobuf field <code>string notification_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNotificationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->notification_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title_key = 2;</code>
     * @return string
     */
    public function getTitleKey()
    {
        return $this->title_key;
    }

    /**
     * Generated from protobuf field <code>string title_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitleKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->title_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string category = 3;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>string category = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 create_timestamp_ms = 4;</code>
     * @return int|string
     */
    public function getCreateTimestampMs()
    {
        return $this->create_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 create_timestamp_ms = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.TemplateVariable variables = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.TemplateVariable variables = 5;</code>
     * @param \POGOProtos\Data\Inbox\ClientInbox\TemplateVariable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Inbox\ClientInbox\TemplateVariable::class);
        $this->variables = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.Notification.Label labels = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Inbox.ClientInbox.Notification.Label labels = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\Inbox\ClientInbox\Notification\Label::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire_time_ms = 7;</code>
     * @return int|string
     */
    public function getExpireTimeMs()
    {
        return $this->expire_time_ms;
    }

    /**
     * Generated from protobuf field <code>int64 expire_time_ms = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireTimeMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_time_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Notification::class, \POGOProtos\Data\Inbox\ClientInbox_Notification::class);

