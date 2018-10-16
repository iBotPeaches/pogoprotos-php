<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/BackgroundModeGlobalSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.BackgroundModeGlobalSettings</code>
 */
class BackgroundModeGlobalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 min_player_level_fitness = 1;</code>
     */
    private $min_player_level_fitness = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_player_level_fitness
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\BackgroundModeGlobalSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 min_player_level_fitness = 1;</code>
     * @return int
     */
    public function getMinPlayerLevelFitness()
    {
        return $this->min_player_level_fitness;
    }

    /**
     * Generated from protobuf field <code>uint32 min_player_level_fitness = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPlayerLevelFitness($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_player_level_fitness = $var;

        return $this;
    }

}

