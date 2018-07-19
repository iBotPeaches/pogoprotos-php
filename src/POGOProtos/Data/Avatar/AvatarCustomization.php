<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Avatar/AvatarCustomization.proto

namespace POGOProtos\Data\Avatar;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Avatar.AvatarCustomization</code>
 */
class AvatarCustomization extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    private $enabled = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     */
    private $avatar_type = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     */
    private $slot;
    /**
     * Generated from protobuf field <code>string bundle_name = 4;</code>
     */
    private $bundle_name = '';
    /**
     * Generated from protobuf field <code>string asset_name = 5;</code>
     */
    private $asset_name = '';
    /**
     * Generated from protobuf field <code>string group_name = 6;</code>
     */
    private $group_name = '';
    /**
     * Generated from protobuf field <code>int32 sort_order = 7;</code>
     */
    private $sort_order = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     */
    private $unlock_type = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     */
    private $promo_type;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     */
    private $unlock_badge_type = 0;
    /**
     * Generated from protobuf field <code>string iap_sku = 11;</code>
     */
    private $iap_sku = '';
    /**
     * Generated from protobuf field <code>int32 unlock_badge_level = 12;</code>
     */
    private $unlock_badge_level = 0;
    /**
     * Generated from protobuf field <code>string icon_name = 13;</code>
     */
    private $icon_name = '';
    /**
     * Generated from protobuf field <code>int32 unlock_player_level = 14;</code>
     */
    private $unlock_player_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *     @type int $avatar_type
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $slot
     *     @type string $bundle_name
     *     @type string $asset_name
     *     @type string $group_name
     *     @type int $sort_order
     *     @type int $unlock_type
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $promo_type
     *     @type int $unlock_badge_type
     *     @type string $iap_sku
     *     @type int $unlock_badge_level
     *     @type string $icon_name
     *     @type int $unlock_player_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Avatar\AvatarCustomization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     * @return int
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Player\PlayerAvatarType::class);
        $this->avatar_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSlot($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\Avatar\AvatarCustomization\Slot::class);
        $this->slot = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bundle_name = 4;</code>
     * @return string
     */
    public function getBundleName()
    {
        return $this->bundle_name;
    }

    /**
     * Generated from protobuf field <code>string bundle_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBundleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bundle_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string asset_name = 5;</code>
     * @return string
     */
    public function getAssetName()
    {
        return $this->asset_name;
    }

    /**
     * Generated from protobuf field <code>string asset_name = 5;</code>
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
     * Generated from protobuf field <code>string group_name = 6;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Generated from protobuf field <code>string group_name = 6;</code>
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
     * Generated from protobuf field <code>int32 sort_order = 7;</code>
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Generated from protobuf field <code>int32 sort_order = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->sort_order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     * @return int
     */
    public function getUnlockType()
    {
        return $this->unlock_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setUnlockType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Avatar\AvatarCustomization_AvatarCustomizationUnlockType::class);
        $this->unlock_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPromoType()
    {
        return $this->promo_type;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPromoType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Data\Avatar\AvatarCustomization\AvatarCustomizationPromoType::class);
        $this->promo_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     * @return int
     */
    public function getUnlockBadgeType()
    {
        return $this->unlock_badge_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setUnlockBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->unlock_badge_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iap_sku = 11;</code>
     * @return string
     */
    public function getIapSku()
    {
        return $this->iap_sku;
    }

    /**
     * Generated from protobuf field <code>string iap_sku = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setIapSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->iap_sku = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 unlock_badge_level = 12;</code>
     * @return int
     */
    public function getUnlockBadgeLevel()
    {
        return $this->unlock_badge_level;
    }

    /**
     * Generated from protobuf field <code>int32 unlock_badge_level = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setUnlockBadgeLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->unlock_badge_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string icon_name = 13;</code>
     * @return string
     */
    public function getIconName()
    {
        return $this->icon_name;
    }

    /**
     * Generated from protobuf field <code>string icon_name = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setIconName($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 unlock_player_level = 14;</code>
     * @return int
     */
    public function getUnlockPlayerLevel()
    {
        return $this->unlock_player_level;
    }

    /**
     * Generated from protobuf field <code>int32 unlock_player_level = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setUnlockPlayerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->unlock_player_level = $var;

        return $this;
    }

}

