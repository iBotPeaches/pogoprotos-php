<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/GenericClickTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.GenericClickTelemetry</code>
 */
class GenericClickTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GenericClickTelemetryIds generic_click_id = 1;</code>
     */
    private $generic_click_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $generic_click_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\GenericClickTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GenericClickTelemetryIds generic_click_id = 1;</code>
     * @return int
     */
    public function getGenericClickId()
    {
        return $this->generic_click_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GenericClickTelemetryIds generic_click_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGenericClickId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\GenericClickTelemetryIds::class);
        $this->generic_click_id = $var;

        return $this;
    }

}
