<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/EggIncubatorAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.Item.EggIncubatorAttributes</code>
 */
class EggIncubatorAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.EggIncubatorType incubator_type = 1;</code>
     */
    private $incubator_type = 0;
    /**
     * <code>int32 uses = 2;</code>
     */
    private $uses = 0;
    /**
     * <code>float distance_multiplier = 3;</code>
     */
    private $distance_multiplier = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\Item\EggIncubatorAttributes::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubatorType incubator_type = 1;</code>
     */
    public function getIncubatorType()
    {
        return $this->incubator_type;
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubatorType incubator_type = 1;</code>
     */
    public function setIncubatorType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\EggIncubatorType::class);
        $this->incubator_type = $var;
    }

    /**
     * <code>int32 uses = 2;</code>
     */
    public function getUses()
    {
        return $this->uses;
    }

    /**
     * <code>int32 uses = 2;</code>
     */
    public function setUses($var)
    {
        GPBUtil::checkInt32($var);
        $this->uses = $var;
    }

    /**
     * <code>float distance_multiplier = 3;</code>
     */
    public function getDistanceMultiplier()
    {
        return $this->distance_multiplier;
    }

    /**
     * <code>float distance_multiplier = 3;</code>
     */
    public function setDistanceMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->distance_multiplier = $var;
    }

}

