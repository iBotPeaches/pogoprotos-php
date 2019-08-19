<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/LuckyPokemonSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.LuckyPokemonSettings</code>
 */
class LuckyPokemonSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float power_up_stardust_discount_percent = 1;</code>
     */
    private $power_up_stardust_discount_percent = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $power_up_stardust_discount_percent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\LuckyPokemonSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float power_up_stardust_discount_percent = 1;</code>
     * @return float
     */
    public function getPowerUpStardustDiscountPercent()
    {
        return $this->power_up_stardust_discount_percent;
    }

    /**
     * Generated from protobuf field <code>float power_up_stardust_discount_percent = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setPowerUpStardustDiscountPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->power_up_stardust_discount_percent = $var;

        return $this;
    }

}
