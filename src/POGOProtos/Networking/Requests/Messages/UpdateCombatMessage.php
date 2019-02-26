<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UpdateCombatMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.UpdateCombatMessage</code>
 */
class UpdateCombatMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string combat_id = 1;</code>
     */
    private $combat_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatAction action = 2;</code>
     */
    private $action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $combat_id
     *     @type \POGOProtos\Data\Combat\CombatAction $action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\UpdateCombatMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string combat_id = 1;</code>
     * @return string
     */
    public function getCombatId()
    {
        return $this->combat_id;
    }

    /**
     * Generated from protobuf field <code>string combat_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCombatId($var)
    {
        GPBUtil::checkString($var, True);
        $this->combat_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatAction action = 2;</code>
     * @return \POGOProtos\Data\Combat\CombatAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.CombatAction action = 2;</code>
     * @param \POGOProtos\Data\Combat\CombatAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\CombatAction::class);
        $this->action = $var;

        return $this;
    }

}

