<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/AddFriendQuest.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.AddFriendQuest</code>
 */
class AddFriendQuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string added_friend_ids = 1;</code>
     */
    private $added_friend_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $added_friend_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\AddFriendQuest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string added_friend_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddedFriendIds()
    {
        return $this->added_friend_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string added_friend_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddedFriendIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->added_friend_ids = $arr;

        return $this;
    }

}

