<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/LootItem.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Inventory.LootItem</code>
 */
class LootItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    private $item = 0;
    /**
     * <code>bool stardust = 2;</code>
     */
    private $stardust = false;
    /**
     * <code>bool pokecoin = 3;</code>
     */
    private $pokecoin = false;
    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_candy = 4;</code>
     */
    private $pokemon_candy = 0;
    /**
     * <code>int32 count = 5;</code>
     */
    private $count = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Inventory\LootItem::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    public function setItem($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item = $var;
    }

    /**
     * <code>bool stardust = 2;</code>
     */
    public function getStardust()
    {
        return $this->stardust;
    }

    /**
     * <code>bool stardust = 2;</code>
     */
    public function setStardust($var)
    {
        GPBUtil::checkBool($var);
        $this->stardust = $var;
    }

    /**
     * <code>bool pokecoin = 3;</code>
     */
    public function getPokecoin()
    {
        return $this->pokecoin;
    }

    /**
     * <code>bool pokecoin = 3;</code>
     */
    public function setPokecoin($var)
    {
        GPBUtil::checkBool($var);
        $this->pokecoin = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_candy = 4;</code>
     */
    public function getPokemonCandy()
    {
        return $this->pokemon_candy;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_candy = 4;</code>
     */
    public function setPokemonCandy($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_candy = $var;
    }

    /**
     * <code>int32 count = 5;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>int32 count = 5;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;
    }

}

