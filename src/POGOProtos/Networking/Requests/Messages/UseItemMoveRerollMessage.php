<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemMoveRerollMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.UseItemMoveRerollMessage</code>
 */
class UseItemMoveRerollMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    private $item_id = 0;
    /**
     * <code>fixed64 pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\UseItemMoveRerollMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    /**
     * <code>fixed64 pokemon_id = 2;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>fixed64 pokemon_id = 2;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;
    }

}

