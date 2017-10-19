<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/FortSearchLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Logs.FortSearchLogEntry</code>
 */
class FortSearchLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Logs.FortSearchLogEntry.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>string fort_id = 2;</code>
     */
    private $fort_id = '';
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    private $items;
    /**
     * <code>int32 eggs = 4;</code>
     */
    private $eggs = 0;
    /**
     * <code>repeated .POGOProtos.Data.PokemonData pokemon_eggs = 5;</code>
     */
    private $pokemon_eggs;
    /**
     * <code>.POGOProtos.Map.Fort.FortType fort_type = 6;</code>
     */
    private $fort_type = 0;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData awarded_items = 7;</code>
     */
    private $awarded_items;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData bonus_items = 8;</code>
     */
    private $bonus_items;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData team_bonus_items = 9;</code>
     */
    private $team_bonus_items;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Logs\FortSearchLogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Logs.FortSearchLogEntry.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Data.Logs.FortSearchLogEntry.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Logs\FortSearchLogEntry_Result::class);
        $this->result = $var;
    }

    /**
     * <code>string fort_id = 2;</code>
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * <code>string fort_id = 2;</code>
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData items = 3;</code>
     */
    public function setItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->items = $var;
    }

    /**
     * <code>int32 eggs = 4;</code>
     */
    public function getEggs()
    {
        return $this->eggs;
    }

    /**
     * <code>int32 eggs = 4;</code>
     */
    public function setEggs($var)
    {
        GPBUtil::checkInt32($var);
        $this->eggs = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.PokemonData pokemon_eggs = 5;</code>
     */
    public function getPokemonEggs()
    {
        return $this->pokemon_eggs;
    }

    /**
     * <code>repeated .POGOProtos.Data.PokemonData pokemon_eggs = 5;</code>
     */
    public function setPokemonEggs(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_eggs = $var;
    }

    /**
     * <code>.POGOProtos.Map.Fort.FortType fort_type = 6;</code>
     */
    public function getFortType()
    {
        return $this->fort_type;
    }

    /**
     * <code>.POGOProtos.Map.Fort.FortType fort_type = 6;</code>
     */
    public function setFortType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\Fort\FortType::class);
        $this->fort_type = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData awarded_items = 7;</code>
     */
    public function getAwardedItems()
    {
        return $this->awarded_items;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData awarded_items = 7;</code>
     */
    public function setAwardedItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->awarded_items = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData bonus_items = 8;</code>
     */
    public function getBonusItems()
    {
        return $this->bonus_items;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData bonus_items = 8;</code>
     */
    public function setBonusItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->bonus_items = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData team_bonus_items = 9;</code>
     */
    public function getTeamBonusItems()
    {
        return $this->team_bonus_items;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemData team_bonus_items = 9;</code>
     */
    public function setTeamBonusItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemData::class);
        $this->team_bonus_items = $var;
    }

}

