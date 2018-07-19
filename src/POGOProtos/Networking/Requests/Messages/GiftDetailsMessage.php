<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GiftDetailsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.GiftDetailsMessage</code>
 */
class GiftDetailsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated fixed64 giftbox_id = 1;</code>
     */
    private $giftbox_id;
    /**
     * <code>string player_id = 2;</code>
     */
    private $player_id = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GiftDetailsMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated fixed64 giftbox_id = 1;</code>
     */
    public function getGiftboxId()
    {
        return $this->giftbox_id;
    }

    /**
     * <code>repeated fixed64 giftbox_id = 1;</code>
     */
    public function setGiftboxId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->giftbox_id = $var;
    }

    /**
     * <code>string player_id = 2;</code>
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * <code>string player_id = 2;</code>
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;
    }

}

