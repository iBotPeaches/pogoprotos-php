<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/GlobalSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.GlobalSettings</code>
 */
class GlobalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Settings.FortSettings fort_settings = 2;</code>
     */
    private $fort_settings = null;
    /**
     * <code>.POGOProtos.Settings.MapSettings map_settings = 3;</code>
     */
    private $map_settings = null;
    /**
     * <code>.POGOProtos.Settings.LevelSettings level_settings = 4;</code>
     */
    private $level_settings = null;
    /**
     * <code>.POGOProtos.Settings.InventorySettings inventory_settings = 5;</code>
     */
    private $inventory_settings = null;
    /**
     * <code>string minimum_client_version = 6;</code>
     */
    private $minimum_client_version = '';
    /**
     * <code>.POGOProtos.Settings.GpsSettings gps_settings = 7;</code>
     */
    private $gps_settings = null;
    /**
     * <code>.POGOProtos.Settings.FestivalSettings festival_settings = 8;</code>
     */
    private $festival_settings = null;
    /**
     * <code>.POGOProtos.Settings.EventSettings event_settings = 9;</code>
     */
    private $event_settings = null;
    /**
     * <code>int32 max_pokemon_types = 10;</code>
     */
    private $max_pokemon_types = 0;
    /**
     * <code>.POGOProtos.Settings.SfidaSettings sfida_settings = 11;</code>
     */
    private $sfida_settings = null;
    /**
     * <code>.POGOProtos.Settings.NewsSettings news_settings = 12;</code>
     */
    private $news_settings = null;
    /**
     * <code>.POGOProtos.Settings.TranslationSettings translation_settings = 13;</code>
     */
    private $translation_settings = null;
    /**
     * <code>.POGOProtos.Settings.PasscodeSettings passcode_settings = 14;</code>
     */
    private $passcode_settings = null;
    /**
     * <code>.POGOProtos.Settings.NotificationSettings notification_settings = 15;</code>
     */
    private $notification_settings = null;
    /**
     * <code>repeated string client_app_blacklist = 16;</code>
     */
    private $client_app_blacklist;
    /**
     * <code>.POGOProtos.Settings.ClientPerformanceSettings client_perf_settings = 17;</code>
     */
    private $client_perf_settings = null;
    /**
     * <code>.POGOProtos.Settings.NewsGlobalSettings news_global_settings = 18;</code>
     */
    private $news_global_settings = null;
    /**
     * <code>.POGOProtos.Settings.TelemetryGlobalSettings telemetry_global_settings = 21;</code>
     */
    private $telemetry_global_settings = null;
    /**
     * <code>.POGOProtos.Settings.LoginSettings login_settings = 22;</code>
     */
    private $login_settings = null;
    /**
     * <code>.POGOProtos.Settings.QuestGlobalSettings quest_global_settings = 19;</code>
     */
    private $quest_global_settings = null;
    /**
     * <code>.POGOProtos.Settings.SocialClientSettings social_settings = 23;</code>
     */
    private $social_settings = null;
    /**
     * <code>.POGOProtos.Settings.TradingGlobalSettings trading_global_settings = 24;</code>
     */
    private $trading_global_settings = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\GlobalSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Settings.FortSettings fort_settings = 2;</code>
     */
    public function getFortSettings()
    {
        return $this->fort_settings;
    }

    /**
     * <code>.POGOProtos.Settings.FortSettings fort_settings = 2;</code>
     */
    public function setFortSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\FortSettings::class);
        $this->fort_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.MapSettings map_settings = 3;</code>
     */
    public function getMapSettings()
    {
        return $this->map_settings;
    }

    /**
     * <code>.POGOProtos.Settings.MapSettings map_settings = 3;</code>
     */
    public function setMapSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\MapSettings::class);
        $this->map_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.LevelSettings level_settings = 4;</code>
     */
    public function getLevelSettings()
    {
        return $this->level_settings;
    }

    /**
     * <code>.POGOProtos.Settings.LevelSettings level_settings = 4;</code>
     */
    public function setLevelSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\LevelSettings::class);
        $this->level_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.InventorySettings inventory_settings = 5;</code>
     */
    public function getInventorySettings()
    {
        return $this->inventory_settings;
    }

    /**
     * <code>.POGOProtos.Settings.InventorySettings inventory_settings = 5;</code>
     */
    public function setInventorySettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\InventorySettings::class);
        $this->inventory_settings = $var;
    }

    /**
     * <code>string minimum_client_version = 6;</code>
     */
    public function getMinimumClientVersion()
    {
        return $this->minimum_client_version;
    }

    /**
     * <code>string minimum_client_version = 6;</code>
     */
    public function setMinimumClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->minimum_client_version = $var;
    }

    /**
     * <code>.POGOProtos.Settings.GpsSettings gps_settings = 7;</code>
     */
    public function getGpsSettings()
    {
        return $this->gps_settings;
    }

    /**
     * <code>.POGOProtos.Settings.GpsSettings gps_settings = 7;</code>
     */
    public function setGpsSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\GpsSettings::class);
        $this->gps_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.FestivalSettings festival_settings = 8;</code>
     */
    public function getFestivalSettings()
    {
        return $this->festival_settings;
    }

    /**
     * <code>.POGOProtos.Settings.FestivalSettings festival_settings = 8;</code>
     */
    public function setFestivalSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\FestivalSettings::class);
        $this->festival_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.EventSettings event_settings = 9;</code>
     */
    public function getEventSettings()
    {
        return $this->event_settings;
    }

    /**
     * <code>.POGOProtos.Settings.EventSettings event_settings = 9;</code>
     */
    public function setEventSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\EventSettings::class);
        $this->event_settings = $var;
    }

    /**
     * <code>int32 max_pokemon_types = 10;</code>
     */
    public function getMaxPokemonTypes()
    {
        return $this->max_pokemon_types;
    }

    /**
     * <code>int32 max_pokemon_types = 10;</code>
     */
    public function setMaxPokemonTypes($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_pokemon_types = $var;
    }

    /**
     * <code>.POGOProtos.Settings.SfidaSettings sfida_settings = 11;</code>
     */
    public function getSfidaSettings()
    {
        return $this->sfida_settings;
    }

    /**
     * <code>.POGOProtos.Settings.SfidaSettings sfida_settings = 11;</code>
     */
    public function setSfidaSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\SfidaSettings::class);
        $this->sfida_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.NewsSettings news_settings = 12;</code>
     */
    public function getNewsSettings()
    {
        return $this->news_settings;
    }

    /**
     * <code>.POGOProtos.Settings.NewsSettings news_settings = 12;</code>
     */
    public function setNewsSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\NewsSettings::class);
        $this->news_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.TranslationSettings translation_settings = 13;</code>
     */
    public function getTranslationSettings()
    {
        return $this->translation_settings;
    }

    /**
     * <code>.POGOProtos.Settings.TranslationSettings translation_settings = 13;</code>
     */
    public function setTranslationSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\TranslationSettings::class);
        $this->translation_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.PasscodeSettings passcode_settings = 14;</code>
     */
    public function getPasscodeSettings()
    {
        return $this->passcode_settings;
    }

    /**
     * <code>.POGOProtos.Settings.PasscodeSettings passcode_settings = 14;</code>
     */
    public function setPasscodeSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\PasscodeSettings::class);
        $this->passcode_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.NotificationSettings notification_settings = 15;</code>
     */
    public function getNotificationSettings()
    {
        return $this->notification_settings;
    }

    /**
     * <code>.POGOProtos.Settings.NotificationSettings notification_settings = 15;</code>
     */
    public function setNotificationSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\NotificationSettings::class);
        $this->notification_settings = $var;
    }

    /**
     * <code>repeated string client_app_blacklist = 16;</code>
     */
    public function getClientAppBlacklist()
    {
        return $this->client_app_blacklist;
    }

    /**
     * <code>repeated string client_app_blacklist = 16;</code>
     */
    public function setClientAppBlacklist(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->client_app_blacklist = $var;
    }

    /**
     * <code>.POGOProtos.Settings.ClientPerformanceSettings client_perf_settings = 17;</code>
     */
    public function getClientPerfSettings()
    {
        return $this->client_perf_settings;
    }

    /**
     * <code>.POGOProtos.Settings.ClientPerformanceSettings client_perf_settings = 17;</code>
     */
    public function setClientPerfSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\ClientPerformanceSettings::class);
        $this->client_perf_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.NewsGlobalSettings news_global_settings = 18;</code>
     */
    public function getNewsGlobalSettings()
    {
        return $this->news_global_settings;
    }

    /**
     * <code>.POGOProtos.Settings.NewsGlobalSettings news_global_settings = 18;</code>
     */
    public function setNewsGlobalSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\NewsGlobalSettings::class);
        $this->news_global_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.TelemetryGlobalSettings telemetry_global_settings = 21;</code>
     */
    public function getTelemetryGlobalSettings()
    {
        return $this->telemetry_global_settings;
    }

    /**
     * <code>.POGOProtos.Settings.TelemetryGlobalSettings telemetry_global_settings = 21;</code>
     */
    public function setTelemetryGlobalSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\TelemetryGlobalSettings::class);
        $this->telemetry_global_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.LoginSettings login_settings = 22;</code>
     */
    public function getLoginSettings()
    {
        return $this->login_settings;
    }

    /**
     * <code>.POGOProtos.Settings.LoginSettings login_settings = 22;</code>
     */
    public function setLoginSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\LoginSettings::class);
        $this->login_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.QuestGlobalSettings quest_global_settings = 19;</code>
     */
    public function getQuestGlobalSettings()
    {
        return $this->quest_global_settings;
    }

    /**
     * <code>.POGOProtos.Settings.QuestGlobalSettings quest_global_settings = 19;</code>
     */
    public function setQuestGlobalSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\QuestGlobalSettings::class);
        $this->quest_global_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.SocialClientSettings social_settings = 23;</code>
     */
    public function getSocialSettings()
    {
        return $this->social_settings;
    }

    /**
     * <code>.POGOProtos.Settings.SocialClientSettings social_settings = 23;</code>
     */
    public function setSocialSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\SocialClientSettings::class);
        $this->social_settings = $var;
    }

    /**
     * <code>.POGOProtos.Settings.TradingGlobalSettings trading_global_settings = 24;</code>
     */
    public function getTradingGlobalSettings()
    {
        return $this->trading_global_settings;
    }

    /**
     * <code>.POGOProtos.Settings.TradingGlobalSettings trading_global_settings = 24;</code>
     */
    public function setTradingGlobalSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\TradingGlobalSettings::class);
        $this->trading_global_settings = $var;
    }

}

