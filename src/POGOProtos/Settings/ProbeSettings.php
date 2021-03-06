<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/ProbeSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.ProbeSettings</code>
 */
class ProbeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enable_sidechannel = 1;</code>
     */
    private $enable_sidechannel = false;
    /**
     * Generated from protobuf field <code>bool enable_adhoc = 2;</code>
     */
    private $enable_adhoc = false;
    /**
     * Generated from protobuf field <code>int32 adhoc_frequency_sec = 3;</code>
     */
    private $adhoc_frequency_sec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_sidechannel
     *     @type bool $enable_adhoc
     *     @type int $adhoc_frequency_sec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\ProbeSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enable_sidechannel = 1;</code>
     * @return bool
     */
    public function getEnableSidechannel()
    {
        return $this->enable_sidechannel;
    }

    /**
     * Generated from protobuf field <code>bool enable_sidechannel = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSidechannel($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_sidechannel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_adhoc = 2;</code>
     * @return bool
     */
    public function getEnableAdhoc()
    {
        return $this->enable_adhoc;
    }

    /**
     * Generated from protobuf field <code>bool enable_adhoc = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAdhoc($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_adhoc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adhoc_frequency_sec = 3;</code>
     * @return int
     */
    public function getAdhocFrequencySec()
    {
        return $this->adhoc_frequency_sec;
    }

    /**
     * Generated from protobuf field <code>int32 adhoc_frequency_sec = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAdhocFrequencySec($var)
    {
        GPBUtil::checkInt32($var);
        $this->adhoc_frequency_sec = $var;

        return $this;
    }

}

