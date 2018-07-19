<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Social/GetGiftBoxDetailsMessage.proto

namespace POGOProtos\Networking\Requests\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Social.GetGiftBoxDetailsMessage</code>
 */
class GetGiftBoxDetailsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 giftbox_id = 1;</code>
     */
    private $giftbox_id;
    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
     */
    private $player_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $giftbox_id
     *     @type string $player_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Social\GetGiftBoxDetailsMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint64 giftbox_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGiftboxId()
    {
        return $this->giftbox_id;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 giftbox_id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGiftboxId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->giftbox_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;

        return $this;
    }

}
