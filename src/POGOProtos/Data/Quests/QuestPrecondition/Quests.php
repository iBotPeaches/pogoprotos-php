<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestPrecondition.proto

namespace POGOProtos\Data\Quests\QuestPrecondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.QuestPrecondition.Quests</code>
 */
class Quests extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string quest_template_ids = 1;</code>
     */
    private $quest_template_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $quest_template_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\QuestPrecondition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string quest_template_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuestTemplateIds()
    {
        return $this->quest_template_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string quest_template_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuestTemplateIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->quest_template_ids = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Quests::class, \POGOProtos\Data\Quests\QuestPrecondition_Quests::class);
