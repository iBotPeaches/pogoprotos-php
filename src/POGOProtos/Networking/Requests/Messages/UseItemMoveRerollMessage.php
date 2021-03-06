<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemMoveRerollMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.UseItemMoveRerollMessage</code>
 */
class UseItemMoveRerollMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    private $item_id = 0;
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>bool reroll_unlocked_move = 3;</code>
     */
    private $reroll_unlocked_move = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $item_id
     *     @type int|string $pokemon_id
     *     @type bool $reroll_unlocked_move
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\UseItemMoveRerollMessage::initOnce();
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
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool reroll_unlocked_move = 3;</code>
     * @return bool
     */
    public function getRerollUnlockedMove()
    {
        return $this->reroll_unlocked_move;
    }

    /**
     * Generated from protobuf field <code>bool reroll_unlocked_move = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRerollUnlockedMove($var)
    {
        GPBUtil::checkBool($var);
        $this->reroll_unlocked_move = $var;

        return $this;
    }

}

