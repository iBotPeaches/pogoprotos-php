<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItemData.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Inventory.InventoryItemData</code>
 */
class InventoryItemData extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 1;</code>
     */
    private $pokemon_data = null;
    /**
     * <code>.POGOProtos.Inventory.Item.ItemData item = 2;</code>
     */
    private $item = null;
    /**
     * <code>.POGOProtos.Data.PokedexEntry pokedex_entry = 3;</code>
     */
    private $pokedex_entry = null;
    /**
     * <code>.POGOProtos.Data.Player.PlayerStats player_stats = 4;</code>
     */
    private $player_stats = null;
    /**
     * <code>.POGOProtos.Data.Player.PlayerCurrency player_currency = 5;</code>
     */
    private $player_currency = null;
    /**
     * <code>.POGOProtos.Data.Player.PlayerCamera player_camera = 6;</code>
     */
    private $player_camera = null;
    /**
     * <code>.POGOProtos.Inventory.InventoryUpgrades inventory_upgrades = 7;</code>
     */
    private $inventory_upgrades = null;
    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 8;</code>
     */
    private $applied_items = null;
    /**
     * <code>.POGOProtos.Inventory.EggIncubators egg_incubators = 9;</code>
     */
    private $egg_incubators = null;
    /**
     * <code>.POGOProtos.Inventory.Candy candy = 10;</code>
     */
    private $candy = null;
    /**
     * <code>.POGOProtos.Data.Quests.Quest quest = 11;</code>
     */
    private $quest = null;
    /**
     * <code>.POGOProtos.Data.Avatar.AvatarItem avatar_item = 12;</code>
     */
    private $avatar_item = null;
    /**
     * <code>.POGOProtos.Inventory.RaidTickets raid_tickets = 13;</code>
     */
    private $raid_tickets = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Inventory\InventoryItemData::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 1;</code>
     */
    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 1;</code>
     */
    public function setPokemonData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemData item = 2;</code>
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemData item = 2;</code>
     */
    public function setItem(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Item\ItemData::class);
        $this->item = $var;
    }

    /**
     * <code>.POGOProtos.Data.PokedexEntry pokedex_entry = 3;</code>
     */
    public function getPokedexEntry()
    {
        return $this->pokedex_entry;
    }

    /**
     * <code>.POGOProtos.Data.PokedexEntry pokedex_entry = 3;</code>
     */
    public function setPokedexEntry(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokedexEntry::class);
        $this->pokedex_entry = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerStats player_stats = 4;</code>
     */
    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerStats player_stats = 4;</code>
     */
    public function setPlayerStats(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerStats::class);
        $this->player_stats = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerCurrency player_currency = 5;</code>
     */
    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerCurrency player_currency = 5;</code>
     */
    public function setPlayerCurrency(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCurrency::class);
        $this->player_currency = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerCamera player_camera = 6;</code>
     */
    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerCamera player_camera = 6;</code>
     */
    public function setPlayerCamera(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCamera::class);
        $this->player_camera = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.InventoryUpgrades inventory_upgrades = 7;</code>
     */
    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    /**
     * <code>.POGOProtos.Inventory.InventoryUpgrades inventory_upgrades = 7;</code>
     */
    public function setInventoryUpgrades(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryUpgrades::class);
        $this->inventory_upgrades = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 8;</code>
     */
    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 8;</code>
     */
    public function setAppliedItems(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\AppliedItems::class);
        $this->applied_items = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubators egg_incubators = 9;</code>
     */
    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubators egg_incubators = 9;</code>
     */
    public function setEggIncubators(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubators::class);
        $this->egg_incubators = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Candy candy = 10;</code>
     */
    public function getCandy()
    {
        return $this->candy;
    }

    /**
     * <code>.POGOProtos.Inventory.Candy candy = 10;</code>
     */
    public function setCandy(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Candy::class);
        $this->candy = $var;
    }

    /**
     * <code>.POGOProtos.Data.Quests.Quest quest = 11;</code>
     */
    public function getQuest()
    {
        return $this->quest;
    }

    /**
     * <code>.POGOProtos.Data.Quests.Quest quest = 11;</code>
     */
    public function setQuest(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest::class);
        $this->quest = $var;
    }

    /**
     * <code>.POGOProtos.Data.Avatar.AvatarItem avatar_item = 12;</code>
     */
    public function getAvatarItem()
    {
        return $this->avatar_item;
    }

    /**
     * <code>.POGOProtos.Data.Avatar.AvatarItem avatar_item = 12;</code>
     */
    public function setAvatarItem(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Avatar\AvatarItem::class);
        $this->avatar_item = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.RaidTickets raid_tickets = 13;</code>
     */
    public function getRaidTickets()
    {
        return $this->raid_tickets;
    }

    /**
     * <code>.POGOProtos.Inventory.RaidTickets raid_tickets = 13;</code>
     */
    public function setRaidTickets(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\RaidTickets::class);
        $this->raid_tickets = $var;
    }

}

