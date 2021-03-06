<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/ProfilePageTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.ProfilePageTelemetry</code>
 */
class ProfilePageTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ProfilePageTelemetryIds profile_page_click_id = 1;</code>
     */
    private $profile_page_click_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $profile_page_click_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\ProfilePageTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ProfilePageTelemetryIds profile_page_click_id = 1;</code>
     * @return int
     */
    public function getProfilePageClickId()
    {
        return $this->profile_page_click_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ProfilePageTelemetryIds profile_page_click_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProfilePageClickId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\ProfilePageTelemetryIds::class);
        $this->profile_page_click_id = $var;

        return $this;
    }

}

