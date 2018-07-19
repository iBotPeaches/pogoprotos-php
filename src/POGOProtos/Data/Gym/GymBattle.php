<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymBattle.proto

namespace POGOProtos\Data\Gym;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Gym.GymBattle</code>
 */
class GymBattle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string battle_id = 1;</code>
     */
    private $battle_id = '';
    /**
     * Generated from protobuf field <code>int64 completed_ms = 2;</code>
     */
    private $completed_ms = 0;
    /**
     * Generated from protobuf field <code>bool incremented_gym_battle_friends = 3;</code>
     */
    private $incremented_gym_battle_friends = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $battle_id
     *     @type int|string $completed_ms
     *     @type bool $incremented_gym_battle_friends
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Gym\GymBattle::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string battle_id = 1;</code>
     * @return string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>string battle_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 completed_ms = 2;</code>
     * @return int|string
     */
    public function getCompletedMs()
    {
        return $this->completed_ms;
    }

    /**
     * Generated from protobuf field <code>int64 completed_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompletedMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->completed_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incremented_gym_battle_friends = 3;</code>
     * @return bool
     */
    public function getIncrementedGymBattleFriends()
    {
        return $this->incremented_gym_battle_friends;
    }

    /**
     * Generated from protobuf field <code>bool incremented_gym_battle_friends = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncrementedGymBattleFriends($var)
    {
        GPBUtil::checkBool($var);
        $this->incremented_gym_battle_friends = $var;

        return $this;
    }

}

