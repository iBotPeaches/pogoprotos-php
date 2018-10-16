<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/RpcSocketResponseTime.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.RpcSocketResponseTime</code>
 */
class RpcSocketResponseTime extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 request_id = 1;</code>
     */
    private $request_id = 0;
    /**
     * Generated from protobuf field <code>string probe_id = 2;</code>
     */
    private $probe_id = '';
    /**
     * Generated from protobuf field <code>float response_time = 3;</code>
     */
    private $response_time = 0.0;
    /**
     * Generated from protobuf field <code>bool side_channel = 4;</code>
     */
    private $side_channel = false;
    /**
     * Generated from protobuf field <code>bool ad_hoc = 5;</code>
     */
    private $ad_hoc = false;
    /**
     * Generated from protobuf field <code>float ad_hoc_delay = 6;</code>
     */
    private $ad_hoc_delay = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $request_id
     *     @type string $probe_id
     *     @type float $response_time
     *     @type bool $side_channel
     *     @type bool $ad_hoc
     *     @type float $ad_hoc_delay
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\RpcSocketResponseTime::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 request_id = 1;</code>
     * @return int|string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>uint64 request_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkUint64($var);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string probe_id = 2;</code>
     * @return string
     */
    public function getProbeId()
    {
        return $this->probe_id;
    }

    /**
     * Generated from protobuf field <code>string probe_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProbeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->probe_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float response_time = 3;</code>
     * @return float
     */
    public function getResponseTime()
    {
        return $this->response_time;
    }

    /**
     * Generated from protobuf field <code>float response_time = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setResponseTime($var)
    {
        GPBUtil::checkFloat($var);
        $this->response_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool side_channel = 4;</code>
     * @return bool
     */
    public function getSideChannel()
    {
        return $this->side_channel;
    }

    /**
     * Generated from protobuf field <code>bool side_channel = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSideChannel($var)
    {
        GPBUtil::checkBool($var);
        $this->side_channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ad_hoc = 5;</code>
     * @return bool
     */
    public function getAdHoc()
    {
        return $this->ad_hoc;
    }

    /**
     * Generated from protobuf field <code>bool ad_hoc = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAdHoc($var)
    {
        GPBUtil::checkBool($var);
        $this->ad_hoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float ad_hoc_delay = 6;</code>
     * @return float
     */
    public function getAdHocDelay()
    {
        return $this->ad_hoc_delay;
    }

    /**
     * Generated from protobuf field <code>float ad_hoc_delay = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setAdHocDelay($var)
    {
        GPBUtil::checkFloat($var);
        $this->ad_hoc_delay = $var;

        return $this;
    }

}

