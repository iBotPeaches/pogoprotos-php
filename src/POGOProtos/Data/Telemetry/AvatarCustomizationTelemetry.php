<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/AvatarCustomizationTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.AvatarCustomizationTelemetry</code>
 */
class AvatarCustomizationTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.AvatarCustomizationTelemetryIds avatar_customization_click_id = 1;</code>
     */
    private $avatar_customization_click_id = 0;
    /**
     * Generated from protobuf field <code>string asset_name = 2;</code>
     */
    private $asset_name = '';
    /**
     * Generated from protobuf field <code>string sku = 3;</code>
     */
    private $sku = '';
    /**
     * Generated from protobuf field <code>bool has_enough_coins = 4;</code>
     */
    private $has_enough_coins = false;
    /**
     * Generated from protobuf field <code>string group_name = 5;</code>
     */
    private $group_name = '';
    /**
     * Generated from protobuf field <code>string color_choice_id = 6;</code>
     */
    private $color_choice_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $avatar_customization_click_id
     *     @type string $asset_name
     *     @type string $sku
     *     @type bool $has_enough_coins
     *     @type string $group_name
     *     @type string $color_choice_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\AvatarCustomizationTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.AvatarCustomizationTelemetryIds avatar_customization_click_id = 1;</code>
     * @return int
     */
    public function getAvatarCustomizationClickId()
    {
        return $this->avatar_customization_click_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.AvatarCustomizationTelemetryIds avatar_customization_click_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarCustomizationClickId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\AvatarCustomizationTelemetryIds::class);
        $this->avatar_customization_click_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string asset_name = 2;</code>
     * @return string
     */
    public function getAssetName()
    {
        return $this->asset_name;
    }

    /**
     * Generated from protobuf field <code>string asset_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sku = 3;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Generated from protobuf field <code>string sku = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_enough_coins = 4;</code>
     * @return bool
     */
    public function getHasEnoughCoins()
    {
        return $this->has_enough_coins;
    }

    /**
     * Generated from protobuf field <code>bool has_enough_coins = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasEnoughCoins($var)
    {
        GPBUtil::checkBool($var);
        $this->has_enough_coins = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string group_name = 5;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Generated from protobuf field <code>string group_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string color_choice_id = 6;</code>
     * @return string
     */
    public function getColorChoiceId()
    {
        return $this->color_choice_id;
    }

    /**
     * Generated from protobuf field <code>string color_choice_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setColorChoiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->color_choice_id = $var;

        return $this;
    }

}

