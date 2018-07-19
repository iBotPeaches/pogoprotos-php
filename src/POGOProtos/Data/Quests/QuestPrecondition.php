<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestPrecondition.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Quests.QuestPrecondition</code>
 */
class QuestPrecondition extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.QuestPreconditionType type = 1;</code>
     */
    private $type = 0;
    /**
     * <code>string quest_template_id = 2;</code>
     */
    private $quest_template_id = '';
    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Level level = 3;</code>
     */
    private $level = null;
    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Medal medal = 4;</code>
     */
    private $medal = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Quests\QuestPrecondition::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.QuestPreconditionType type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.QuestPreconditionType type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Quests\QuestPrecondition_QuestPreconditionType::class);
        $this->type = $var;
    }

    /**
     * <code>string quest_template_id = 2;</code>
     */
    public function getQuestTemplateId()
    {
        return $this->quest_template_id;
    }

    /**
     * <code>string quest_template_id = 2;</code>
     */
    public function setQuestTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->quest_template_id = $var;
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Level level = 3;</code>
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Level level = 3;</code>
     */
    public function setLevel(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\QuestPrecondition_Level::class);
        $this->level = $var;
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Medal medal = 4;</code>
     */
    public function getMedal()
    {
        return $this->medal;
    }

    /**
     * <code>.POGOProtos.Data.Quests.QuestPrecondition.Medal medal = 4;</code>
     */
    public function setMedal(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\QuestPrecondition_Medal::class);
        $this->medal = $var;
    }

}

