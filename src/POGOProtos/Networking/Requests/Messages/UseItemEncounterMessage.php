<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemEncounterMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.UseItemEncounterMessage</code>
 */
class UseItemEncounterMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 1;</code>
     */
    private $item = 0;
    /**
     * <code>fixed64 encounter_id = 2;</code>
     */
    private $encounter_id = 0;
    /**
     * <code>string spawn_point_guid = 3;</code>
     */
    private $spawn_point_guid = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\UseItemEncounterMessage::initOnce();
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
     * <code>fixed64 encounter_id = 2;</code>
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * <code>fixed64 encounter_id = 2;</code>
     */
    public function setEncounterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->encounter_id = $var;
    }

    /**
     * <code>string spawn_point_guid = 3;</code>
     */
    public function getSpawnPointGuid()
    {
        return $this->spawn_point_guid;
    }

    /**
     * <code>string spawn_point_guid = 3;</code>
     */
    public function setSpawnPointGuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->spawn_point_guid = $var;
    }

}

