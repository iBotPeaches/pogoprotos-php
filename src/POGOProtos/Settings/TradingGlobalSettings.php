<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/TradingGlobalSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.TradingGlobalSettings</code>
 */
class TradingGlobalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool enable_trading = 1;</code>
     */
    private $enable_trading = false;
    /**
     * <code>uint32 min_player_level = 2;</code>
     */
    private $min_player_level = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\TradingGlobalSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool enable_trading = 1;</code>
     */
    public function getEnableTrading()
    {
        return $this->enable_trading;
    }

    /**
     * <code>bool enable_trading = 1;</code>
     */
    public function setEnableTrading($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_trading = $var;
    }

    /**
     * <code>uint32 min_player_level = 2;</code>
     */
    public function getMinPlayerLevel()
    {
        return $this->min_player_level;
    }

    /**
     * <code>uint32 min_player_level = 2;</code>
     */
    public function setMinPlayerLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_player_level = $var;
    }

}

