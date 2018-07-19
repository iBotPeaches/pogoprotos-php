<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/ClientTelemetryRequest.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Requests.ClientTelemetry</code>
 */
class ClientTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Platform.Telemetry.PlatformDataId data_id = 1;</code>
     */
    private $data_id;
    /**
     * Generated from protobuf field <code>repeated bytes application_data = 2;</code>
     */
    private $application_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Networking\Platform\Telemetry\PlatformDataId[]|\Google\Protobuf\Internal\RepeatedField $data_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $application_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\ClientTelemetryRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Platform.Telemetry.PlatformDataId data_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataId()
    {
        return $this->data_id;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Platform.Telemetry.PlatformDataId data_id = 1;</code>
     * @param \POGOProtos\Networking\Platform\Telemetry\PlatformDataId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Platform\Telemetry\PlatformDataId::class);
        $this->data_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes application_data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApplicationData()
    {
        return $this->application_data;
    }

    /**
     * Generated from protobuf field <code>repeated bytes application_data = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApplicationData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->application_data = $arr;

        return $this;
    }

}

