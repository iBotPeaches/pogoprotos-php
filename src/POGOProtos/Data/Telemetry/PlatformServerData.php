<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/PlatformServerData.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.PlatformServerData</code>
 */
class PlatformServerData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     */
    private $user_id = '';
    /**
     * Generated from protobuf field <code>string telemetry_id = 2;</code>
     */
    private $telemetry_id = '';
    /**
     * Generated from protobuf field <code>string session_id = 3;</code>
     */
    private $session_id = '';
    /**
     * Generated from protobuf field <code>repeated int32 experiment_ids = 4;</code>
     */
    private $experiment_ids;
    /**
     * Generated from protobuf field <code>string event_request_id = 5;</code>
     */
    private $event_request_id = '';
    /**
     * Generated from protobuf field <code>int64 server_timestamp_ms = 6;</code>
     */
    private $server_timestamp_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $telemetry_id
     *     @type string $session_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $experiment_ids
     *     @type string $event_request_id
     *     @type int|string $server_timestamp_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\PlatformServerData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string telemetry_id = 2;</code>
     * @return string
     */
    public function getTelemetryId()
    {
        return $this->telemetry_id;
    }

    /**
     * Generated from protobuf field <code>string telemetry_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTelemetryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->telemetry_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 experiment_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExperimentIds()
    {
        return $this->experiment_ids;
    }

    /**
     * Generated from protobuf field <code>repeated int32 experiment_ids = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExperimentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->experiment_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event_request_id = 5;</code>
     * @return string
     */
    public function getEventRequestId()
    {
        return $this->event_request_id;
    }

    /**
     * Generated from protobuf field <code>string event_request_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEventRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 server_timestamp_ms = 6;</code>
     * @return int|string
     */
    public function getServerTimestampMs()
    {
        return $this->server_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 server_timestamp_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServerTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->server_timestamp_ms = $var;

        return $this;
    }

}

