<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItemData.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Inventory.InventoryItemData</code>
 */
class InventoryItemData extends \Google\Protobuf\Internal\Message
{
    protected $Type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\PokemonData $pokemon_data
     *     @type \POGOProtos\Inventory\Item\ItemData $item
     *     @type \POGOProtos\Data\PokedexEntry $pokedex_entry
     *     @type \POGOProtos\Data\Player\PlayerStats $player_stats
     *     @type \POGOProtos\Data\Player\PlayerCurrency $player_currency
     *     @type \POGOProtos\Data\Player\PlayerCamera $player_camera
     *     @type \POGOProtos\Inventory\InventoryUpgrades $inventory_upgrades
     *     @type \POGOProtos\Inventory\AppliedItems $applied_items
     *     @type \POGOProtos\Inventory\EggIncubators $egg_incubators
     *     @type \POGOProtos\Inventory\Candy $candy
     *     @type \POGOProtos\Data\Quests\Quest $quest
     *     @type \POGOProtos\Data\Avatar\AvatarItem $avatar_item
     *     @type \POGOProtos\Inventory\RaidTickets $raid_tickets
     *     @type \POGOProtos\Data\Quests\Quests $quests
     *     @type \POGOProtos\Data\Gift\GiftBoxes $gift_boxes
     *     @type \POGOProtos\Data\Beluga\BelugaIncenseBox $beluga_incense
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Inventory\InventoryItemData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData pokemon_data = 1;</code>
     * @return \POGOProtos\Data\PokemonData
     */
    public function getPokemonData()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData pokemon_data = 1;</code>
     * @param \POGOProtos\Data\PokemonData $var
     * @return $this
     */
    public function setPokemonData($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemData item = 2;</code>
     * @return \POGOProtos\Inventory\Item\ItemData
     */
    public function getItem()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemData item = 2;</code>
     * @param \POGOProtos\Inventory\Item\ItemData $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Item\ItemData::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokedexEntry pokedex_entry = 3;</code>
     * @return \POGOProtos\Data\PokedexEntry
     */
    public function getPokedexEntry()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokedexEntry pokedex_entry = 3;</code>
     * @param \POGOProtos\Data\PokedexEntry $var
     * @return $this
     */
    public function setPokedexEntry($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokedexEntry::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerStats player_stats = 4;</code>
     * @return \POGOProtos\Data\Player\PlayerStats
     */
    public function getPlayerStats()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerStats player_stats = 4;</code>
     * @param \POGOProtos\Data\Player\PlayerStats $var
     * @return $this
     */
    public function setPlayerStats($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerStats::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerCurrency player_currency = 5;</code>
     * @return \POGOProtos\Data\Player\PlayerCurrency
     */
    public function getPlayerCurrency()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerCurrency player_currency = 5;</code>
     * @param \POGOProtos\Data\Player\PlayerCurrency $var
     * @return $this
     */
    public function setPlayerCurrency($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCurrency::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerCamera player_camera = 6;</code>
     * @return \POGOProtos\Data\Player\PlayerCamera
     */
    public function getPlayerCamera()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerCamera player_camera = 6;</code>
     * @param \POGOProtos\Data\Player\PlayerCamera $var
     * @return $this
     */
    public function setPlayerCamera($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCamera::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.InventoryUpgrades inventory_upgrades = 7;</code>
     * @return \POGOProtos\Inventory\InventoryUpgrades
     */
    public function getInventoryUpgrades()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.InventoryUpgrades inventory_upgrades = 7;</code>
     * @param \POGOProtos\Inventory\InventoryUpgrades $var
     * @return $this
     */
    public function setInventoryUpgrades($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryUpgrades::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.AppliedItems applied_items = 8;</code>
     * @return \POGOProtos\Inventory\AppliedItems
     */
    public function getAppliedItems()
    {
        return $this->readOneof(8);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.AppliedItems applied_items = 8;</code>
     * @param \POGOProtos\Inventory\AppliedItems $var
     * @return $this
     */
    public function setAppliedItems($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\AppliedItems::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.EggIncubators egg_incubators = 9;</code>
     * @return \POGOProtos\Inventory\EggIncubators
     */
    public function getEggIncubators()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.EggIncubators egg_incubators = 9;</code>
     * @param \POGOProtos\Inventory\EggIncubators $var
     * @return $this
     */
    public function setEggIncubators($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubators::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Candy candy = 10;</code>
     * @return \POGOProtos\Inventory\Candy
     */
    public function getCandy()
    {
        return $this->readOneof(10);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Candy candy = 10;</code>
     * @param \POGOProtos\Inventory\Candy $var
     * @return $this
     */
    public function setCandy($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Candy::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest quest = 11;</code>
     * @return \POGOProtos\Data\Quests\Quest
     */
    public function getQuest()
    {
        return $this->readOneof(11);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest quest = 11;</code>
     * @param \POGOProtos\Data\Quests\Quest $var
     * @return $this
     */
    public function setQuest($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Avatar.AvatarItem avatar_item = 12;</code>
     * @return \POGOProtos\Data\Avatar\AvatarItem
     */
    public function getAvatarItem()
    {
        return $this->readOneof(12);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Avatar.AvatarItem avatar_item = 12;</code>
     * @param \POGOProtos\Data\Avatar\AvatarItem $var
     * @return $this
     */
    public function setAvatarItem($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Avatar\AvatarItem::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.RaidTickets raid_tickets = 13;</code>
     * @return \POGOProtos\Inventory\RaidTickets
     */
    public function getRaidTickets()
    {
        return $this->readOneof(13);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.RaidTickets raid_tickets = 13;</code>
     * @param \POGOProtos\Inventory\RaidTickets $var
     * @return $this
     */
    public function setRaidTickets($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\RaidTickets::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quests quests = 14;</code>
     * @return \POGOProtos\Data\Quests\Quests
     */
    public function getQuests()
    {
        return $this->readOneof(14);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quests quests = 14;</code>
     * @param \POGOProtos\Data\Quests\Quests $var
     * @return $this
     */
    public function setQuests($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quests::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gift.GiftBoxes gift_boxes = 15;</code>
     * @return \POGOProtos\Data\Gift\GiftBoxes
     */
    public function getGiftBoxes()
    {
        return $this->readOneof(15);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gift.GiftBoxes gift_boxes = 15;</code>
     * @param \POGOProtos\Data\Gift\GiftBoxes $var
     * @return $this
     */
    public function setGiftBoxes($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Gift\GiftBoxes::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaIncenseBox beluga_incense = 16;</code>
     * @return \POGOProtos\Data\Beluga\BelugaIncenseBox
     */
    public function getBelugaIncense()
    {
        return $this->readOneof(16);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaIncenseBox beluga_incense = 16;</code>
     * @param \POGOProtos\Data\Beluga\BelugaIncenseBox $var
     * @return $this
     */
    public function setBelugaIncense($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Beluga\BelugaIncenseBox::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("Type");
    }

}

