<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemRareCandyMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.UseItemRareCandyMessage</code>
 */
class UseItemRareCandyMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    private $item_id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>int32 candy_count = 3;</code>
     */
    private $candy_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $item_id
     *     @type int $pokemon_id
     *     @type int $candy_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\UseItemRareCandyMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     * @return int
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 candy_count = 3;</code>
     * @return int
     */
    public function getCandyCount()
    {
        return $this->candy_count;
    }

    /**
     * Generated from protobuf field <code>int32 candy_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCandyCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_count = $var;

        return $this;
    }

}

