<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/TeamChangeInfo.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Player.TeamChangeInfo</code>
 */
class TeamChangeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 last_acquired_time = 1;</code>
     */
    private $last_acquired_time = 0;
    /**
     * Generated from protobuf field <code>int32 num_items_acquired = 2;</code>
     */
    private $num_items_acquired = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $last_acquired_time
     *     @type int $num_items_acquired
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Player\TeamChangeInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 last_acquired_time = 1;</code>
     * @return int|string
     */
    public function getLastAcquiredTime()
    {
        return $this->last_acquired_time;
    }

    /**
     * Generated from protobuf field <code>int64 last_acquired_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastAcquiredTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_acquired_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_items_acquired = 2;</code>
     * @return int
     */
    public function getNumItemsAcquired()
    {
        return $this->num_items_acquired;
    }

    /**
     * Generated from protobuf field <code>int32 num_items_acquired = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumItemsAcquired($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_items_acquired = $var;

        return $this;
    }

}
