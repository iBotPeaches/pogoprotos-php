<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quest.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Quests.Quest.MultiPartQuest</code>
 */
class Quest_MultiPartQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     */
    private $sub_quests;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     */
    public function getSubQuests()
    {
        return $this->sub_quests;
    }

    /**
     * <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     */
    public function setSubQuests(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Quests\Quest::class);
        $this->sub_quests = $var;
    }

}

