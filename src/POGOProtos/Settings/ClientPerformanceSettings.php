<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/ClientPerformanceSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.ClientPerformanceSettings</code>
 */
class ClientPerformanceSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enable_local_disk_caching = 1;</code>
     */
    private $enable_local_disk_caching = false;
    /**
     * Generated from protobuf field <code>int32 max_number_local_battle_parties = 2;</code>
     */
    private $max_number_local_battle_parties = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_local_disk_caching
     *     @type int $max_number_local_battle_parties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\ClientPerformanceSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enable_local_disk_caching = 1;</code>
     * @return bool
     */
    public function getEnableLocalDiskCaching()
    {
        return $this->enable_local_disk_caching;
    }

    /**
     * Generated from protobuf field <code>bool enable_local_disk_caching = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableLocalDiskCaching($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_local_disk_caching = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_number_local_battle_parties = 2;</code>
     * @return int
     */
    public function getMaxNumberLocalBattleParties()
    {
        return $this->max_number_local_battle_parties;
    }

    /**
     * Generated from protobuf field <code>int32 max_number_local_battle_parties = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNumberLocalBattleParties($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_number_local_battle_parties = $var;

        return $this;
    }

}

