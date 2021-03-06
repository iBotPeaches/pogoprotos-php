<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quest.proto

namespace POGOProtos\Data\Quests\Quest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.Quest.MultiPartQuest</code>
 */
class MultiPartQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     */
    private $sub_quests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Quests\Quest[]|\Google\Protobuf\Internal\RepeatedField $sub_quests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubQuests()
    {
        return $this->sub_quests;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.Quest sub_quests = 1;</code>
     * @param \POGOProtos\Data\Quests\Quest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubQuests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Quests\Quest::class);
        $this->sub_quests = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MultiPartQuest::class, \POGOProtos\Data\Quests\Quest_MultiPartQuest::class);

