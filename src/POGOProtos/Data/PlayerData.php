<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PlayerData.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.PlayerData</code>
 */
class PlayerData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 1;</code>
     */
    private $creation_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 5;</code>
     */
    private $team = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.TutorialState tutorial_state = 7 [packed = true];</code>
     */
    private $tutorial_state;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 8;</code>
     */
    private $avatar = null;
    /**
     * Generated from protobuf field <code>int32 max_pokemon_storage = 9;</code>
     */
    private $max_pokemon_storage = 0;
    /**
     * Generated from protobuf field <code>int32 max_item_storage = 10;</code>
     */
    private $max_item_storage = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.DailyBonus daily_bonus = 11;</code>
     */
    private $daily_bonus = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.EquippedBadge equipped_badge = 12;</code>
     */
    private $equipped_badge = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.ContactSettings contact_settings = 13;</code>
     */
    private $contact_settings = null;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyQuantity currency_balance = 14;</code>
     */
    private $currency_balance;
    /**
     * Generated from protobuf field <code>int32 remaining_codename_claims = 15;</code>
     */
    private $remaining_codename_claims = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.BuddyPokemon buddy_pokemon = 16;</code>
     */
    private $buddy_pokemon = null;
    /**
     * Generated from protobuf field <code>int64 battle_lockout_end_ms = 17;</code>
     */
    private $battle_lockout_end_ms = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar secondary_player_avatar = 18;</code>
     */
    private $secondary_player_avatar = null;
    /**
     * Generated from protobuf field <code>bool name_is_blacklisted = 19;</code>
     */
    private $name_is_blacklisted = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.SocialPlayerSettings social_player_settings = 20;</code>
     */
    private $social_player_settings = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayerPreferences combat_player_preferences = 21;</code>
     */
    private $combat_player_preferences = null;
    /**
     * Generated from protobuf field <code>string player_support_id = 22;</code>
     */
    private $player_support_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.TeamChangeInfo team_change_info = 23;</code>
     */
    private $team_change_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $creation_timestamp_ms
     *     @type string $username
     *     @type int $team
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $tutorial_state
     *     @type \POGOProtos\Data\Player\PlayerAvatar $avatar
     *     @type int $max_pokemon_storage
     *     @type int $max_item_storage
     *     @type \POGOProtos\Data\Player\DailyBonus $daily_bonus
     *     @type \POGOProtos\Data\Player\EquippedBadge $equipped_badge
     *     @type \POGOProtos\Data\Player\ContactSettings $contact_settings
     *     @type \POGOProtos\Data\Store\CurrencyQuantity[]|\Google\Protobuf\Internal\RepeatedField $currency_balance
     *     @type int $remaining_codename_claims
     *     @type \POGOProtos\Data\BuddyPokemon $buddy_pokemon
     *     @type int|string $battle_lockout_end_ms
     *     @type \POGOProtos\Data\Player\PlayerAvatar $secondary_player_avatar
     *     @type bool $name_is_blacklisted
     *     @type \POGOProtos\Data\Player\SocialPlayerSettings $social_player_settings
     *     @type \POGOProtos\Data\Combat\CombatPlayerPreferences $combat_player_preferences
     *     @type string $player_support_id
     *     @type \POGOProtos\Data\Player\TeamChangeInfo $team_change_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\PlayerData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 1;</code>
     * @return int|string
     */
    public function getCreationTimestampMs()
    {
        return $this->creation_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 5;</code>
     * @return int
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor team = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\TeamColor::class);
        $this->team = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.TutorialState tutorial_state = 7 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTutorialState()
    {
        return $this->tutorial_state;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.TutorialState tutorial_state = 7 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTutorialState($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\TutorialState::class);
        $this->tutorial_state = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 8;</code>
     * @return \POGOProtos\Data\Player\PlayerAvatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 8;</code>
     * @param \POGOProtos\Data\Player\PlayerAvatar $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerAvatar::class);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_pokemon_storage = 9;</code>
     * @return int
     */
    public function getMaxPokemonStorage()
    {
        return $this->max_pokemon_storage;
    }

    /**
     * Generated from protobuf field <code>int32 max_pokemon_storage = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPokemonStorage($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_pokemon_storage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_item_storage = 10;</code>
     * @return int
     */
    public function getMaxItemStorage()
    {
        return $this->max_item_storage;
    }

    /**
     * Generated from protobuf field <code>int32 max_item_storage = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxItemStorage($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_item_storage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.DailyBonus daily_bonus = 11;</code>
     * @return \POGOProtos\Data\Player\DailyBonus
     */
    public function getDailyBonus()
    {
        return $this->daily_bonus;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.DailyBonus daily_bonus = 11;</code>
     * @param \POGOProtos\Data\Player\DailyBonus $var
     * @return $this
     */
    public function setDailyBonus($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\DailyBonus::class);
        $this->daily_bonus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.EquippedBadge equipped_badge = 12;</code>
     * @return \POGOProtos\Data\Player\EquippedBadge
     */
    public function getEquippedBadge()
    {
        return $this->equipped_badge;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.EquippedBadge equipped_badge = 12;</code>
     * @param \POGOProtos\Data\Player\EquippedBadge $var
     * @return $this
     */
    public function setEquippedBadge($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\EquippedBadge::class);
        $this->equipped_badge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.ContactSettings contact_settings = 13;</code>
     * @return \POGOProtos\Data\Player\ContactSettings
     */
    public function getContactSettings()
    {
        return $this->contact_settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.ContactSettings contact_settings = 13;</code>
     * @param \POGOProtos\Data\Player\ContactSettings $var
     * @return $this
     */
    public function setContactSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\ContactSettings::class);
        $this->contact_settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyQuantity currency_balance = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurrencyBalance()
    {
        return $this->currency_balance;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Store.CurrencyQuantity currency_balance = 14;</code>
     * @param \POGOProtos\Data\Store\CurrencyQuantity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurrencyBalance($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Store\CurrencyQuantity::class);
        $this->currency_balance = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 remaining_codename_claims = 15;</code>
     * @return int
     */
    public function getRemainingCodenameClaims()
    {
        return $this->remaining_codename_claims;
    }

    /**
     * Generated from protobuf field <code>int32 remaining_codename_claims = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRemainingCodenameClaims($var)
    {
        GPBUtil::checkInt32($var);
        $this->remaining_codename_claims = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.BuddyPokemon buddy_pokemon = 16;</code>
     * @return \POGOProtos\Data\BuddyPokemon
     */
    public function getBuddyPokemon()
    {
        return $this->buddy_pokemon;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.BuddyPokemon buddy_pokemon = 16;</code>
     * @param \POGOProtos\Data\BuddyPokemon $var
     * @return $this
     */
    public function setBuddyPokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\BuddyPokemon::class);
        $this->buddy_pokemon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 battle_lockout_end_ms = 17;</code>
     * @return int|string
     */
    public function getBattleLockoutEndMs()
    {
        return $this->battle_lockout_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 battle_lockout_end_ms = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleLockoutEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->battle_lockout_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar secondary_player_avatar = 18;</code>
     * @return \POGOProtos\Data\Player\PlayerAvatar
     */
    public function getSecondaryPlayerAvatar()
    {
        return $this->secondary_player_avatar;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar secondary_player_avatar = 18;</code>
     * @param \POGOProtos\Data\Player\PlayerAvatar $var
     * @return $this
     */
    public function setSecondaryPlayerAvatar($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerAvatar::class);
        $this->secondary_player_avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool name_is_blacklisted = 19;</code>
     * @return bool
     */
    public function getNameIsBlacklisted()
    {
        return $this->name_is_blacklisted;
    }

    /**
     * Generated from protobuf field <code>bool name_is_blacklisted = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setNameIsBlacklisted($var)
    {
        GPBUtil::checkBool($var);
        $this->name_is_blacklisted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.SocialPlayerSettings social_player_settings = 20;</code>
     * @return \POGOProtos\Data\Player\SocialPlayerSettings
     */
    public function getSocialPlayerSettings()
    {
        return $this->social_player_settings;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.SocialPlayerSettings social_player_settings = 20;</code>
     * @param \POGOProtos\Data\Player\SocialPlayerSettings $var
     * @return $this
     */
    public function setSocialPlayerSettings($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\SocialPlayerSettings::class);
        $this->social_player_settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayerPreferences combat_player_preferences = 21;</code>
     * @return \POGOProtos\Data\Combat\CombatPlayerPreferences
     */
    public function getCombatPlayerPreferences()
    {
        return $this->combat_player_preferences;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatPlayerPreferences combat_player_preferences = 21;</code>
     * @param \POGOProtos\Data\Combat\CombatPlayerPreferences $var
     * @return $this
     */
    public function setCombatPlayerPreferences($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\CombatPlayerPreferences::class);
        $this->combat_player_preferences = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string player_support_id = 22;</code>
     * @return string
     */
    public function getPlayerSupportId()
    {
        return $this->player_support_id;
    }

    /**
     * Generated from protobuf field <code>string player_support_id = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerSupportId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_support_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.TeamChangeInfo team_change_info = 23;</code>
     * @return \POGOProtos\Data\Player\TeamChangeInfo
     */
    public function getTeamChangeInfo()
    {
        return $this->team_change_info;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.TeamChangeInfo team_change_info = 23;</code>
     * @param \POGOProtos\Data\Player\TeamChangeInfo $var
     * @return $this
     */
    public function setTeamChangeInfo($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\TeamChangeInfo::class);
        $this->team_change_info = $var;

        return $this;
    }

}

