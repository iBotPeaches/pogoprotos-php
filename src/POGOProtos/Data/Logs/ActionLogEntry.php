<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/ActionLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Logs.ActionLogEntry</code>
 */
class ActionLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 timestamp_ms = 1;</code>
     */
    private $timestamp_ms = 0;
    /**
     * <code>bool sfida = 2;</code>
     */
    private $sfida = false;
    protected $Action;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Logs\ActionLogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 timestamp_ms = 1;</code>
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * <code>int64 timestamp_ms = 1;</code>
     */
    public function setTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_ms = $var;
    }

    /**
     * <code>bool sfida = 2;</code>
     */
    public function getSfida()
    {
        return $this->sfida;
    }

    /**
     * <code>bool sfida = 2;</code>
     */
    public function setSfida($var)
    {
        GPBUtil::checkBool($var);
        $this->sfida = $var;
    }

    /**
     * <code>.POGOProtos.Data.Logs.CatchPokemonLogEntry catch_pokemon = 3;</code>
     */
    public function getCatchPokemon()
    {
        return $this->readOneof(3);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CatchPokemonLogEntry catch_pokemon = 3;</code>
     */
    public function setCatchPokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\CatchPokemonLogEntry::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.FortSearchLogEntry fort_search = 4;</code>
     */
    public function getFortSearch()
    {
        return $this->readOneof(4);
    }

    /**
     * <code>.POGOProtos.Data.Logs.FortSearchLogEntry fort_search = 4;</code>
     */
    public function setFortSearch(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\FortSearchLogEntry::class);
        $this->writeOneof(4, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.BuddyPokemonLogEntry buddy_pokemon = 5;</code>
     */
    public function getBuddyPokemon()
    {
        return $this->readOneof(5);
    }

    /**
     * <code>.POGOProtos.Data.Logs.BuddyPokemonLogEntry buddy_pokemon = 5;</code>
     */
    public function setBuddyPokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\BuddyPokemonLogEntry::class);
        $this->writeOneof(5, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.RaidRewardsLogEntry raid_rewards = 6;</code>
     */
    public function getRaidRewards()
    {
        return $this->readOneof(6);
    }

    /**
     * <code>.POGOProtos.Data.Logs.RaidRewardsLogEntry raid_rewards = 6;</code>
     */
    public function setRaidRewards(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\RaidRewardsLogEntry::class);
        $this->writeOneof(6, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.PasscodeRewardsLogEntry passcode_rewards = 7;</code>
     */
    public function getPasscodeRewards()
    {
        return $this->readOneof(7);
    }

    /**
     * <code>.POGOProtos.Data.Logs.PasscodeRewardsLogEntry passcode_rewards = 7;</code>
     */
    public function setPasscodeRewards(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\PasscodeRewardsLogEntry::class);
        $this->writeOneof(7, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestLogEntry complete_quest = 8;</code>
     */
    public function getCompleteQuest()
    {
        return $this->readOneof(8);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestLogEntry complete_quest = 8;</code>
     */
    public function setCompleteQuest(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\CompleteQuestLogEntry::class);
        $this->writeOneof(8, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestStampCardLogEntry complete_quest_stamp_card = 9;</code>
     */
    public function getCompleteQuestStampCard()
    {
        return $this->readOneof(9);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestStampCardLogEntry complete_quest_stamp_card = 9;</code>
     */
    public function setCompleteQuestStampCard(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\CompleteQuestStampCardLogEntry::class);
        $this->writeOneof(9, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry complete_quest_pokemon_encounter = 10;</code>
     */
    public function getCompleteQuestPokemonEncounter()
    {
        return $this->readOneof(10);
    }

    /**
     * <code>.POGOProtos.Data.Logs.CompleteQuestPokemonEncounterLogEntry complete_quest_pokemon_encounter = 10;</code>
     */
    public function setCompleteQuestPokemonEncounter(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\CompleteQuestPokemonEncounterLogEntry::class);
        $this->writeOneof(10, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.OpenGiftLogEntry open_gift = 12;</code>
     */
    public function getOpenGift()
    {
        return $this->readOneof(12);
    }

    /**
     * <code>.POGOProtos.Data.Logs.OpenGiftLogEntry open_gift = 12;</code>
     */
    public function setOpenGift(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\OpenGiftLogEntry::class);
        $this->writeOneof(12, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.SendGiftLogEntry send_gift = 13;</code>
     */
    public function getSendGift()
    {
        return $this->readOneof(13);
    }

    /**
     * <code>.POGOProtos.Data.Logs.SendGiftLogEntry send_gift = 13;</code>
     */
    public function setSendGift(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\SendGiftLogEntry::class);
        $this->writeOneof(13, $var);
    }

    /**
     * <code>.POGOProtos.Data.Logs.TradingLogEntry trading = 14;</code>
     */
    public function getTrading()
    {
        return $this->readOneof(14);
    }

    /**
     * <code>.POGOProtos.Data.Logs.TradingLogEntry trading = 14;</code>
     */
    public function setTrading(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\TradingLogEntry::class);
        $this->writeOneof(14, $var);
    }

    public function getAction()
    {
        return $this->Action;
    }

}

