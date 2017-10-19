<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/StartGymBattleResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.StartGymBattleResponse</code>
 */
class StartGymBattleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.StartGymBattleResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>int64 battle_start_timestamp_ms = 2;</code>
     */
    private $battle_start_timestamp_ms = 0;
    /**
     * <code>int64 battle_end_timestamp_ms = 3;</code>
     */
    private $battle_end_timestamp_ms = 0;
    /**
     * <code>string battle_id = 4;</code>
     */
    private $battle_id = '';
    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant defender = 5;</code>
     */
    private $defender = null;
    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 6;</code>
     */
    private $battle_log = null;
    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant attacker = 7;</code>
     */
    private $attacker = null;
    /**
     * <code>.POGOProtos.Data.Battle.Battle battle = 8;</code>
     */
    private $battle = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\StartGymBattleResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.StartGymBattleResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.StartGymBattleResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\StartGymBattleResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>int64 battle_start_timestamp_ms = 2;</code>
     */
    public function getBattleStartTimestampMs()
    {
        return $this->battle_start_timestamp_ms;
    }

    /**
     * <code>int64 battle_start_timestamp_ms = 2;</code>
     */
    public function setBattleStartTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->battle_start_timestamp_ms = $var;
    }

    /**
     * <code>int64 battle_end_timestamp_ms = 3;</code>
     */
    public function getBattleEndTimestampMs()
    {
        return $this->battle_end_timestamp_ms;
    }

    /**
     * <code>int64 battle_end_timestamp_ms = 3;</code>
     */
    public function setBattleEndTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->battle_end_timestamp_ms = $var;
    }

    /**
     * <code>string battle_id = 4;</code>
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * <code>string battle_id = 4;</code>
     */
    public function setBattleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->battle_id = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant defender = 5;</code>
     */
    public function getDefender()
    {
        return $this->defender;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant defender = 5;</code>
     */
    public function setDefender(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleParticipant::class);
        $this->defender = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 6;</code>
     */
    public function getBattleLog()
    {
        return $this->battle_log;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 6;</code>
     */
    public function setBattleLog(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleLog::class);
        $this->battle_log = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant attacker = 7;</code>
     */
    public function getAttacker()
    {
        return $this->attacker;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleParticipant attacker = 7;</code>
     */
    public function setAttacker(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleParticipant::class);
        $this->attacker = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.Battle battle = 8;</code>
     */
    public function getBattle()
    {
        return $this->battle;
    }

    /**
     * <code>.POGOProtos.Data.Battle.Battle battle = 8;</code>
     */
    public function setBattle(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\Battle::class);
        $this->battle = $var;
    }

}

