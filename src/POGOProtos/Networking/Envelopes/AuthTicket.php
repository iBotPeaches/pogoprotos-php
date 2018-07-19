<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/AuthTicket.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Envelopes.AuthTicket</code>
 */
class AuthTicket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes start = 1;</code>
     */
    private $start = '';
    /**
     * Generated from protobuf field <code>uint64 expire_timestamp_ms = 2;</code>
     */
    private $expire_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>bytes end = 3;</code>
     */
    private $end = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start
     *     @type int|string $expire_timestamp_ms
     *     @type string $end
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Envelopes\AuthTicket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes start = 1;</code>
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>bytes start = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, False);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 expire_timestamp_ms = 2;</code>
     * @return int|string
     */
    public function getExpireTimestampMs()
    {
        return $this->expire_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 expire_timestamp_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->expire_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes end = 3;</code>
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>bytes end = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkString($var, False);
        $this->end = $var;

        return $this;
    }

}

