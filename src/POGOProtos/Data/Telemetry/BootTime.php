<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/BootTime.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.BootTime</code>
 */
class BootTime extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.PlatformMetricData duration = 1;</code>
     */
    private $duration = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.BootTime.BootPhase boot_phase = 2;</code>
     */
    private $boot_phase = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Telemetry\PlatformMetricData $duration
     *     @type int $boot_phase
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\BootTime::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.PlatformMetricData duration = 1;</code>
     * @return \POGOProtos\Data\Telemetry\PlatformMetricData
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.PlatformMetricData duration = 1;</code>
     * @param \POGOProtos\Data\Telemetry\PlatformMetricData $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Telemetry\PlatformMetricData::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.BootTime.BootPhase boot_phase = 2;</code>
     * @return int
     */
    public function getBootPhase()
    {
        return $this->boot_phase;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.BootTime.BootPhase boot_phase = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBootPhase($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Telemetry\BootTime_BootPhase::class);
        $this->boot_phase = $var;

        return $this;
    }

}
