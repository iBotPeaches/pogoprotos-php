<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/CancelTradingMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.CancelTradingMessage</code>
 */
class CancelTradingMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string player_id = 1;</code>
     */
    private $player_id = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\CancelTradingMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;
    }

}

