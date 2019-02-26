<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleParty.proto

namespace POGOProtos\Data\Battle;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Battle.BattleParty</code>
 */
class BattleParty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>int32 team_number = 2;</code>
     */
    private $team_number = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 ids = 3;</code>
     */
    private $ids;
    /**
     * Generated from protobuf field <code>string combat_league_id = 4;</code>
     */
    private $combat_league_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $team_number
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $ids
     *     @type string $combat_league_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Battle\BattleParty::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 team_number = 2;</code>
     * @return int
     */
    public function getTeamNumber()
    {
        return $this->team_number;
    }

    /**
     * Generated from protobuf field <code>int32 team_number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTeamNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->team_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 ids = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string combat_league_id = 4;</code>
     * @return string
     */
    public function getCombatLeagueId()
    {
        return $this->combat_league_id;
    }

    /**
     * Generated from protobuf field <code>string combat_league_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCombatLeagueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->combat_league_id = $var;

        return $this;
    }

}

