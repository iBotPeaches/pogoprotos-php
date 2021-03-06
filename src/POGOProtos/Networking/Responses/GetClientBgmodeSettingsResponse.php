<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetClientBgmodeSettingsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetClientBgmodeSettingsResponse</code>
 */
class GetClientBgmodeSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetClientBgmodeSettingsResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.BackgroundModeClientSettings settings = 2;</code>
     */
    private $settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type \POGOProtos\Settings\BackgroundModeClientSettings $settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetClientBgmodeSettingsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetClientBgmodeSettingsResponse.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetClientBgmodeSettingsResponse.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetClientBgmodeSettingsResponse_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.BackgroundModeClientSettings settings = 2;</code>
     * @return \POGOProtos\Settings\BackgroundModeClientSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Settings.BackgroundModeClientSettings settings = 2;</code>
     * @param \POGOProtos\Settings\BackgroundModeClientSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\BackgroundModeClientSettings::class);
        $this->settings = $var;

        return $this;
    }

}

