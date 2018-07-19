<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerSummary.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Player.PlayerSummary</code>
 */
class PlayerSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * <code>string codename = 2;</code>
     */
    private $codename = '';
    /**
     * <code>bytes public_data = 3;</code>
     */
    private $public_data = '';
    /**
     * <code>string team = 4;</code>
     */
    private $team = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Player\PlayerSummary::initOnce();
        parent::__construct();
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;
    }

    /**
     * <code>string codename = 2;</code>
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * <code>string codename = 2;</code>
     */
    public function setCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->codename = $var;
    }

    /**
     * <code>bytes public_data = 3;</code>
     */
    public function getPublicData()
    {
        return $this->public_data;
    }

    /**
     * <code>bytes public_data = 3;</code>
     */
    public function setPublicData($var)
    {
        GPBUtil::checkString($var, False);
        $this->public_data = $var;
    }

    /**
     * <code>string team = 4;</code>
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * <code>string team = 4;</code>
     */
    public function setTeam($var)
    {
        GPBUtil::checkString($var, True);
        $this->team = $var;
    }

}

