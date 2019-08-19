<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Combat/ChallengePlayer.proto

namespace POGOProtos\Data\Combat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Combat.ChallengePlayer</code>
 */
class ChallengePlayer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar player_avatar = 2;</code>
     */
    private $player_avatar = null;
    /**
     * Generated from protobuf field <code>int64 combat_player_s2_cell_id = 3;</code>
     */
    private $combat_player_s2_cell_id = 0;
    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 4;</code>
     */
    private $attacking_pokemon_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $player_id
     *     @type \POGOProtos\Data\Player\PlayerAvatar $player_avatar
     *     @type int|string $combat_player_s2_cell_id
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $attacking_pokemon_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Combat\ChallengePlayer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar player_avatar = 2;</code>
     * @return \POGOProtos\Data\Player\PlayerAvatar
     */
    public function getPlayerAvatar()
    {
        return $this->player_avatar;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerAvatar player_avatar = 2;</code>
     * @param \POGOProtos\Data\Player\PlayerAvatar $var
     * @return $this
     */
    public function setPlayerAvatar($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerAvatar::class);
        $this->player_avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 combat_player_s2_cell_id = 3;</code>
     * @return int|string
     */
    public function getCombatPlayerS2CellId()
    {
        return $this->combat_player_s2_cell_id;
    }

    /**
     * Generated from protobuf field <code>int64 combat_player_s2_cell_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCombatPlayerS2CellId($var)
    {
        GPBUtil::checkInt64($var);
        $this->combat_player_s2_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttackingPokemonId()
    {
        return $this->attacking_pokemon_id;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 attacking_pokemon_id = 4;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttackingPokemonId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->attacking_pokemon_id = $arr;

        return $this;
    }

}
