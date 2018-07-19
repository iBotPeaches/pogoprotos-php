<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SendGiftMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.SendGiftMessage</code>
 */
class SendGiftMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    private $giftbox_id = 0;
    /**
     * <code>string player_id = 2;</code>
     */
    private $player_id = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\SendGiftMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    public function getGiftboxId()
    {
        return $this->giftbox_id;
    }

    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    public function setGiftboxId($var)
    {
        GPBUtil::checkUint64($var);
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

