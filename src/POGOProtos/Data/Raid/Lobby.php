<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Raid/Lobby.proto

namespace POGOProtos\Data\Raid;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Raid.Lobby</code>
 */
class Lobby extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 1;</code>
     */
    private $lobby_id;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleParticipant players = 2;</code>
     */
    private $players;
    /**
     * Generated from protobuf field <code>int64 player_join_end_ms = 3;</code>
     */
    private $player_join_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 pokemon_selection_end_ms = 4;</code>
     */
    private $pokemon_selection_end_ms = 0;
    /**
     * Generated from protobuf field <code>int64 raid_battle_start_ms = 5;</code>
     */
    private $raid_battle_start_ms = 0;
    /**
     * Generated from protobuf field <code>int64 raid_battle_end_ms = 6;</code>
     */
    private $raid_battle_end_ms = 0;
    /**
     * Generated from protobuf field <code>string raid_battle_id = 8;</code>
     */
    private $raid_battle_id = '';
    /**
     * Generated from protobuf field <code>string owner_nickname = 9;</code>
     */
    private $owner_nickname = '';
    /**
     * Generated from protobuf field <code>bool private = 10;</code>
     */
    private $private = false;
    /**
     * Generated from protobuf field <code>int64 creation_ms = 11;</code>
     */
    private $creation_ms = 0;
    /**
     * Generated from protobuf field <code>int32 battle_plfe_instance = 12;</code>
     */
    private $battle_plfe_instance = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 13;</code>
     */
    private $weather_condition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $lobby_id
     *     @type \POGOProtos\Data\Battle\BattleParticipant[]|\Google\Protobuf\Internal\RepeatedField $players
     *     @type int|string $player_join_end_ms
     *     @type int|string $pokemon_selection_end_ms
     *     @type int|string $raid_battle_start_ms
     *     @type int|string $raid_battle_end_ms
     *     @type string $raid_battle_id
     *     @type string $owner_nickname
     *     @type bool $private
     *     @type int|string $creation_ms
     *     @type int $battle_plfe_instance
     *     @type int $weather_condition
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Raid\Lobby::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLobbyId()
    {
        return $this->lobby_id;
    }

    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLobbyId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->lobby_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleParticipant players = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattleParticipant players = 2;</code>
     * @param \POGOProtos\Data\Battle\BattleParticipant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattleParticipant::class);
        $this->players = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 player_join_end_ms = 3;</code>
     * @return int|string
     */
    public function getPlayerJoinEndMs()
    {
        return $this->player_join_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 player_join_end_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPlayerJoinEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->player_join_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 pokemon_selection_end_ms = 4;</code>
     * @return int|string
     */
    public function getPokemonSelectionEndMs()
    {
        return $this->pokemon_selection_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 pokemon_selection_end_ms = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonSelectionEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->pokemon_selection_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 raid_battle_start_ms = 5;</code>
     * @return int|string
     */
    public function getRaidBattleStartMs()
    {
        return $this->raid_battle_start_ms;
    }

    /**
     * Generated from protobuf field <code>int64 raid_battle_start_ms = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRaidBattleStartMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_battle_start_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 raid_battle_end_ms = 6;</code>
     * @return int|string
     */
    public function getRaidBattleEndMs()
    {
        return $this->raid_battle_end_ms;
    }

    /**
     * Generated from protobuf field <code>int64 raid_battle_end_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRaidBattleEndMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_battle_end_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string raid_battle_id = 8;</code>
     * @return string
     */
    public function getRaidBattleId()
    {
        return $this->raid_battle_id;
    }

    /**
     * Generated from protobuf field <code>string raid_battle_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRaidBattleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->raid_battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_nickname = 9;</code>
     * @return string
     */
    public function getOwnerNickname()
    {
        return $this->owner_nickname;
    }

    /**
     * Generated from protobuf field <code>string owner_nickname = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool private = 10;</code>
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Generated from protobuf field <code>bool private = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->private = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 creation_ms = 11;</code>
     * @return int|string
     */
    public function getCreationMs()
    {
        return $this->creation_ms;
    }

    /**
     * Generated from protobuf field <code>int64 creation_ms = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_plfe_instance = 12;</code>
     * @return int
     */
    public function getBattlePlfeInstance()
    {
        return $this->battle_plfe_instance;
    }

    /**
     * Generated from protobuf field <code>int32 battle_plfe_instance = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBattlePlfeInstance($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_plfe_instance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 13;</code>
     * @return int
     */
    public function getWeatherCondition()
    {
        return $this->weather_condition;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay.WeatherCondition weather_condition = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setWeatherCondition($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\PokemonDisplay_WeatherCondition::class);
        $this->weather_condition = $var;

        return $this;
    }

}

