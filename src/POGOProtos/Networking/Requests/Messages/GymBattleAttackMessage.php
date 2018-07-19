<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GymBattleAttackMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.GymBattleAttackMessage</code>
 */
class GymBattleAttackMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string gym_id = 1;</code>
     */
    private $gym_id = '';
    /**
     * Generated from protobuf field <code>string battle_id = 2;</code>
     */
    private $battle_id = '';
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction attacker_actions = 3;</code>
     */
    private $attacker_actions;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleAction last_retrieved_action = 4;</code>
     */
    private $last_retrieved_action = null;
    /**
     * Generated from protobuf field <code>double player_lat_degrees = 5;</code>
     */
    private $player_lat_degrees = 0.0;
    /**
     * Generated from protobuf field <code>double player_lng_degrees = 6;</code>
     */
    private $player_lng_degrees = 0.0;
    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 7;</code>
     */
    private $timestamp_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gym_id
     *     @type string $battle_id
     *     @type \POGOProtos\Data\Battle\BattleAction[]|\Google\Protobuf\Internal\RepeatedField $attacker_actions
     *     @type \POGOProtos\Data\Battle\BattleAction $last_retrieved_action
     *     @type float $player_lat_degrees
     *     @type float $player_lng_degrees
     *     @type int|string $timestamp_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GymBattleAttackMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string gym_id = 1;</code>
     * @return string
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * Generated from protobuf field <code>string gym_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGymId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gym_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string battle_id = 2;</code>
     * @return string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>string battle_id = 2;</code>
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
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction attacker_actions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttackerActions()
    {
        return $this->attacker_actions;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction attacker_actions = 3;</code>
     * @param \POGOProtos\Data\Battle\BattleAction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttackerActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattleAction::class);
        $this->attacker_actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleAction last_retrieved_action = 4;</code>
     * @return \POGOProtos\Data\Battle\BattleAction
     */
    public function getLastRetrievedAction()
    {
        return $this->last_retrieved_action;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleAction last_retrieved_action = 4;</code>
     * @param \POGOProtos\Data\Battle\BattleAction $var
     * @return $this
     */
    public function setLastRetrievedAction($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleAction::class);
        $this->last_retrieved_action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double player_lat_degrees = 5;</code>
     * @return float
     */
    public function getPlayerLatDegrees()
    {
        return $this->player_lat_degrees;
    }

    /**
     * Generated from protobuf field <code>double player_lat_degrees = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setPlayerLatDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lat_degrees = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double player_lng_degrees = 6;</code>
     * @return float
     */
    public function getPlayerLngDegrees()
    {
        return $this->player_lng_degrees;
    }

    /**
     * Generated from protobuf field <code>double player_lng_degrees = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setPlayerLngDegrees($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_lng_degrees = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 7;</code>
     * @return int|string
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_ms = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_ms = $var;

        return $this;
    }

}

