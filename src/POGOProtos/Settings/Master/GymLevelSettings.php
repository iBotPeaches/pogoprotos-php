<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GymLevelSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.GymLevelSettings</code>
 */
class GymLevelSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 required_experience = 1;</code>
     */
    private $required_experience;
    /**
     * Generated from protobuf field <code>repeated int32 leader_slots = 2;</code>
     */
    private $leader_slots;
    /**
     * Generated from protobuf field <code>repeated int32 trainer_slots = 3;</code>
     */
    private $trainer_slots;
    /**
     * Generated from protobuf field <code>repeated int32 search_roll_bonus = 4;</code>
     */
    private $search_roll_bonus;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $required_experience
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $leader_slots
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $trainer_slots
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $search_roll_bonus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\GymLevelSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 required_experience = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredExperience()
    {
        return $this->required_experience;
    }

    /**
     * Generated from protobuf field <code>repeated int32 required_experience = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredExperience($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->required_experience = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 leader_slots = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeaderSlots()
    {
        return $this->leader_slots;
    }

    /**
     * Generated from protobuf field <code>repeated int32 leader_slots = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeaderSlots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->leader_slots = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 trainer_slots = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrainerSlots()
    {
        return $this->trainer_slots;
    }

    /**
     * Generated from protobuf field <code>repeated int32 trainer_slots = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrainerSlots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->trainer_slots = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 search_roll_bonus = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchRollBonus()
    {
        return $this->search_roll_bonus;
    }

    /**
     * Generated from protobuf field <code>repeated int32 search_roll_bonus = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchRollBonus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->search_roll_bonus = $arr;

        return $this;
    }

}

