<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetInventoryMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.GetInventoryMessage</code>
 */
class GetInventoryMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 last_timestamp_ms = 1;</code>
     */
    private $last_timestamp_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $last_timestamp_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GetInventoryMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 last_timestamp_ms = 1;</code>
     * @return int|string
     */
    public function getLastTimestampMs()
    {
        return $this->last_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 last_timestamp_ms = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_timestamp_ms = $var;

        return $this;
    }

}

