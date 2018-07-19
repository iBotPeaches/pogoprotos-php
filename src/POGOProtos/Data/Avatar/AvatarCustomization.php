<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Avatar/AvatarCustomization.proto

namespace POGOProtos\Data\Avatar;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Avatar.AvatarCustomization</code>
 */
class AvatarCustomization extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool enabled = 1;</code>
     */
    private $enabled = false;
    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     */
    private $avatar_type = 0;
    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     */
    private $slot;
    /**
     * <code>string bundle_name = 4;</code>
     */
    private $bundle_name = '';
    /**
     * <code>string asset_name = 5;</code>
     */
    private $asset_name = '';
    /**
     * <code>string group_name = 6;</code>
     */
    private $group_name = '';
    /**
     * <code>int32 sort_order = 7;</code>
     */
    private $sort_order = 0;
    /**
     * <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     */
    private $unlock_type = 0;
    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     */
    private $promo_type;
    /**
     * <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     */
    private $unlock_badge_type = 0;
    /**
     * <code>string iap_sku = 11;</code>
     */
    private $iap_sku = '';
    /**
     * <code>int32 unlock_badge_level = 12;</code>
     */
    private $unlock_badge_level = 0;
    /**
     * <code>string icon_name = 13;</code>
     */
    private $icon_name = '';
    /**
     * <code>int32 unlock_player_level = 14;</code>
     */
    private $unlock_player_level = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Avatar\AvatarCustomization::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool enabled = 1;</code>
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * <code>bool enabled = 1;</code>
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 2;</code>
     */
    public function setAvatarType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Player\PlayerAvatarType::class);
        $this->avatar_type = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.Slot slot = 3;</code>
     */
    public function setSlot(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Data\Avatar\AvatarCustomization_Slot::class);
        $this->slot = $var;
    }

    /**
     * <code>string bundle_name = 4;</code>
     */
    public function getBundleName()
    {
        return $this->bundle_name;
    }

    /**
     * <code>string bundle_name = 4;</code>
     */
    public function setBundleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bundle_name = $var;
    }

    /**
     * <code>string asset_name = 5;</code>
     */
    public function getAssetName()
    {
        return $this->asset_name;
    }

    /**
     * <code>string asset_name = 5;</code>
     */
    public function setAssetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_name = $var;
    }

    /**
     * <code>string group_name = 6;</code>
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * <code>string group_name = 6;</code>
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;
    }

    /**
     * <code>int32 sort_order = 7;</code>
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * <code>int32 sort_order = 7;</code>
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->sort_order = $var;
    }

    /**
     * <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     */
    public function getUnlockType()
    {
        return $this->unlock_type;
    }

    /**
     * <code>.POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationUnlockType unlock_type = 8;</code>
     */
    public function setUnlockType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Avatar\AvatarCustomization_AvatarCustomizationUnlockType::class);
        $this->unlock_type = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     */
    public function getPromoType()
    {
        return $this->promo_type;
    }

    /**
     * <code>repeated .POGOProtos.Data.Avatar.AvatarCustomization.AvatarCustomizationPromoType promo_type = 9;</code>
     */
    public function setPromoType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Data\Avatar\AvatarCustomization_AvatarCustomizationPromoType::class);
        $this->promo_type = $var;
    }

    /**
     * <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     */
    public function getUnlockBadgeType()
    {
        return $this->unlock_badge_type;
    }

    /**
     * <code>.POGOProtos.Enums.BadgeType unlock_badge_type = 10;</code>
     */
    public function setUnlockBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->unlock_badge_type = $var;
    }

    /**
     * <code>string iap_sku = 11;</code>
     */
    public function getIapSku()
    {
        return $this->iap_sku;
    }

    /**
     * <code>string iap_sku = 11;</code>
     */
    public function setIapSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->iap_sku = $var;
    }

    /**
     * <code>int32 unlock_badge_level = 12;</code>
     */
    public function getUnlockBadgeLevel()
    {
        return $this->unlock_badge_level;
    }

    /**
     * <code>int32 unlock_badge_level = 12;</code>
     */
    public function setUnlockBadgeLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->unlock_badge_level = $var;
    }

    /**
     * <code>string icon_name = 13;</code>
     */
    public function getIconName()
    {
        return $this->icon_name;
    }

    /**
     * <code>string icon_name = 13;</code>
     */
    public function setIconName($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_name = $var;
    }

    /**
     * <code>int32 unlock_player_level = 14;</code>
     */
    public function getUnlockPlayerLevel()
    {
        return $this->unlock_player_level;
    }

    /**
     * <code>int32 unlock_player_level = 14;</code>
     */
    public function setUnlockPlayerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->unlock_player_level = $var;
    }

}

