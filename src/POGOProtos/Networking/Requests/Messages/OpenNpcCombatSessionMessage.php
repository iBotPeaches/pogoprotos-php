<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/OpenNpcCombatSessionMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.OpenNpcCombatSessionMessage</code>
 */
class OpenNpcCombatSessionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 1;</code>
     */
    private $attacking_pokemon_id;
    /**
     * Generated from protobuf field <code>string combat_npc_template_id = 2;</code>
     */
    private $combat_npc_template_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $attacking_pokemon_id
     *     @type string $combat_npc_template_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\OpenNpcCombatSessionMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttackingPokemonId()
    {
        return $this->attacking_pokemon_id;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttackingPokemonId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->attacking_pokemon_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string combat_npc_template_id = 2;</code>
     * @return string
     */
    public function getCombatNpcTemplateId()
    {
        return $this->combat_npc_template_id;
    }

    /**
     * Generated from protobuf field <code>string combat_npc_template_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCombatNpcTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->combat_npc_template_id = $var;

        return $this;
    }

}

