<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/UpsightLoggingSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.UpsightLoggingSettings</code>
 */
class UpsightLoggingSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool use_verbose_logging = 1;</code>
     */
    private $use_verbose_logging = false;
    /**
     * Generated from protobuf field <code>int32 logging_percentage = 2;</code>
     */
    private $logging_percentage = 0;
    /**
     * Generated from protobuf field <code>bool disable_logging = 3;</code>
     */
    private $disable_logging = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_verbose_logging
     *     @type int $logging_percentage
     *     @type bool $disable_logging
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\UpsightLoggingSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool use_verbose_logging = 1;</code>
     * @return bool
     */
    public function getUseVerboseLogging()
    {
        return $this->use_verbose_logging;
    }

    /**
     * Generated from protobuf field <code>bool use_verbose_logging = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseVerboseLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->use_verbose_logging = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 logging_percentage = 2;</code>
     * @return int
     */
    public function getLoggingPercentage()
    {
        return $this->logging_percentage;
    }

    /**
     * Generated from protobuf field <code>int32 logging_percentage = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLoggingPercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->logging_percentage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_logging = 3;</code>
     * @return bool
     */
    public function getDisableLogging()
    {
        return $this->disable_logging;
    }

    /**
     * Generated from protobuf field <code>bool disable_logging = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_logging = $var;

        return $this;
    }

}

