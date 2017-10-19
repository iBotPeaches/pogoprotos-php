<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/FoodAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.Item.FoodAttributes</code>
 */
class FoodAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Enums.ItemEffect item_effect = 1;</code>
     */
    private $item_effect;
    /**
     * <code>repeated float item_effect_percent = 2;</code>
     */
    private $item_effect_percent;
    /**
     * <code>float growth_percent = 3;</code>
     */
    private $growth_percent = 0.0;
    /**
     * <code>float berry_multiplier = 4;</code>
     */
    private $berry_multiplier = 0.0;
    /**
     * <code>float remote_berry_multiplier = 5;</code>
     */
    private $remote_berry_multiplier = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\Item\FoodAttributes::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Enums.ItemEffect item_effect = 1;</code>
     */
    public function getItemEffect()
    {
        return $this->item_effect;
    }

    /**
     * <code>repeated .POGOProtos.Enums.ItemEffect item_effect = 1;</code>
     */
    public function setItemEffect(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\ItemEffect::class);
        $this->item_effect = $var;
    }

    /**
     * <code>repeated float item_effect_percent = 2;</code>
     */
    public function getItemEffectPercent()
    {
        return $this->item_effect_percent;
    }

    /**
     * <code>repeated float item_effect_percent = 2;</code>
     */
    public function setItemEffectPercent(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->item_effect_percent = $var;
    }

    /**
     * <code>float growth_percent = 3;</code>
     */
    public function getGrowthPercent()
    {
        return $this->growth_percent;
    }

    /**
     * <code>float growth_percent = 3;</code>
     */
    public function setGrowthPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->growth_percent = $var;
    }

    /**
     * <code>float berry_multiplier = 4;</code>
     */
    public function getBerryMultiplier()
    {
        return $this->berry_multiplier;
    }

    /**
     * <code>float berry_multiplier = 4;</code>
     */
    public function setBerryMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->berry_multiplier = $var;
    }

    /**
     * <code>float remote_berry_multiplier = 5;</code>
     */
    public function getRemoteBerryMultiplier()
    {
        return $this->remote_berry_multiplier;
    }

    /**
     * <code>float remote_berry_multiplier = 5;</code>
     */
    public function setRemoteBerryMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->remote_berry_multiplier = $var;
    }

}

