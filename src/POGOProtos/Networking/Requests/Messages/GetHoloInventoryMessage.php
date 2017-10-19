<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetHoloInventoryMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.GetHoloInventoryMessage</code>
 */
class GetHoloInventoryMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 last_timestamp_ms = 1;</code>
     */
    private $last_timestamp_ms = 0;
    /**
     * <pre>
     * TODO: Find out what this is.
     * </pre>
     *
     * <code>int32 item_been_seen = 2;</code>
     */
    private $item_been_seen = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GetHoloInventoryMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 last_timestamp_ms = 1;</code>
     */
    public function getLastTimestampMs()
    {
        return $this->last_timestamp_ms;
    }

    /**
     * <code>int64 last_timestamp_ms = 1;</code>
     */
    public function setLastTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_timestamp_ms = $var;
    }

    /**
     * <pre>
     * TODO: Find out what this is.
     * </pre>
     *
     * <code>int32 item_been_seen = 2;</code>
     */
    public function getItemBeenSeen()
    {
        return $this->item_been_seen;
    }

    /**
     * <pre>
     * TODO: Find out what this is.
     * </pre>
     *
     * <code>int32 item_been_seen = 2;</code>
     */
    public function setItemBeenSeen($var)
    {
        GPBUtil::checkInt32($var);
        $this->item_been_seen = $var;
    }

}

