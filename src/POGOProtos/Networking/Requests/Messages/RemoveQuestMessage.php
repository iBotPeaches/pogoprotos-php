<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/RemoveQuestMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.RemoveQuestMessage</code>
 */
class RemoveQuestMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string quest_id = 1;</code>
     */
    private $quest_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $quest_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\RemoveQuestMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string quest_id = 1;</code>
     * @return string
     */
    public function getQuestId()
    {
        return $this->quest_id;
    }

    /**
     * Generated from protobuf field <code>string quest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->quest_id = $var;

        return $this;
    }

}

