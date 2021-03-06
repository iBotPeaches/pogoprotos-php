<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleLog.proto

namespace POGOProtos\Data\Battle;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Battle.BattleLog</code>
 */
class BattleLog extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleState state = 1;</code>
     */
    private $state = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleType battle_type = 2;</code>
     */
    private $battle_type = 0;
    /**
     * Generated from protobuf field <code>int64 server_ms = 3;</code>
     */
    private $server_ms = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction battle_actions = 4;</code>
     */
    private $battle_actions;
    /**
     * Generated from protobuf field <code>int64 battle_start_timestamp_ms = 5;</code>
     */
    private $battle_start_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>int64 battle_end_timestamp_ms = 6;</code>
     */
    private $battle_end_timestamp_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *     @type int $battle_type
     *     @type int|string $server_ms
     *     @type \POGOProtos\Data\Battle\BattleAction[]|\Google\Protobuf\Internal\RepeatedField $battle_actions
     *     @type int|string $battle_start_timestamp_ms
     *     @type int|string $battle_end_timestamp_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Battle\BattleState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleType battle_type = 2;</code>
     * @return int
     */
    public function getBattleType()
    {
        return $this->battle_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleType battle_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Battle\BattleType::class);
        $this->battle_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 server_ms = 3;</code>
     * @return int|string
     */
    public function getServerMs()
    {
        return $this->server_ms;
    }

    /**
     * Generated from protobuf field <code>int64 server_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServerMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->server_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction battle_actions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattleActions()
    {
        return $this->battle_actions;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleAction battle_actions = 4;</code>
     * @param \POGOProtos\Data\Battle\BattleAction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattleActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattleAction::class);
        $this->battle_actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 battle_start_timestamp_ms = 5;</code>
     * @return int|string
     */
    public function getBattleStartTimestampMs()
    {
        return $this->battle_start_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 battle_start_timestamp_ms = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleStartTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->battle_start_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 battle_end_timestamp_ms = 6;</code>
     * @return int|string
     */
    public function getBattleEndTimestampMs()
    {
        return $this->battle_end_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 battle_end_timestamp_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBattleEndTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->battle_end_timestamp_ms = $var;

        return $this;
    }

}

