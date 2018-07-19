<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleParticipant.proto

namespace POGOProtos\Data\Battle;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Battle.BattleParticipant</code>
 */
class BattleParticipant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     */
    private $active_pokemon = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     */
    private $trainer_public_profile = null;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     */
    private $reverse_pokemon;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     */
    private $defeated_pokemon;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Map.Pokemon.LobbyPokemon lobby_pokemon = 5;</code>
     */
    private $lobby_pokemon;
    /**
     * Generated from protobuf field <code>int32 damage_dealt = 6;</code>
     */
    private $damage_dealt = 0;
    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 7;</code>
     */
    private $super_effective_charge_move = false;
    /**
     * Generated from protobuf field <code>bool weather_boosted = 8;</code>
     */
    private $weather_boosted = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.FriendshipLevelMilestone highest_friendship_milestone = 9;</code>
     */
    private $highest_friendship_milestone = 0;
    /**
     * Generated from protobuf field <code>repeated string friend_codename = 10;</code>
     */
    private $friend_codename;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Battle\BattlePokemonInfo $active_pokemon
     *     @type \POGOProtos\Data\Player\PlayerPublicProfile $trainer_public_profile
     *     @type \POGOProtos\Data\Battle\BattlePokemonInfo[]|\Google\Protobuf\Internal\RepeatedField $reverse_pokemon
     *     @type \POGOProtos\Data\Battle\BattlePokemonInfo[]|\Google\Protobuf\Internal\RepeatedField $defeated_pokemon
     *     @type \POGOProtos\Map\Pokemon\LobbyPokemon[]|\Google\Protobuf\Internal\RepeatedField $lobby_pokemon
     *     @type int $damage_dealt
     *     @type bool $super_effective_charge_move
     *     @type bool $weather_boosted
     *     @type int $highest_friendship_milestone
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $friend_codename
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     * @return \POGOProtos\Data\Battle\BattlePokemonInfo
     */
    public function getActivePokemon()
    {
        return $this->active_pokemon;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     * @param \POGOProtos\Data\Battle\BattlePokemonInfo $var
     * @return $this
     */
    public function setActivePokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->active_pokemon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     * @return \POGOProtos\Data\Player\PlayerPublicProfile
     */
    public function getTrainerPublicProfile()
    {
        return $this->trainer_public_profile;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     * @param \POGOProtos\Data\Player\PlayerPublicProfile $var
     * @return $this
     */
    public function setTrainerPublicProfile($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerPublicProfile::class);
        $this->trainer_public_profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReversePokemon()
    {
        return $this->reverse_pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     * @param \POGOProtos\Data\Battle\BattlePokemonInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReversePokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->reverse_pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDefeatedPokemon()
    {
        return $this->defeated_pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     * @param \POGOProtos\Data\Battle\BattlePokemonInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDefeatedPokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->defeated_pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Map.Pokemon.LobbyPokemon lobby_pokemon = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLobbyPokemon()
    {
        return $this->lobby_pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Map.Pokemon.LobbyPokemon lobby_pokemon = 5;</code>
     * @param \POGOProtos\Map\Pokemon\LobbyPokemon[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLobbyPokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Pokemon\LobbyPokemon::class);
        $this->lobby_pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 damage_dealt = 6;</code>
     * @return int
     */
    public function getDamageDealt()
    {
        return $this->damage_dealt;
    }

    /**
     * Generated from protobuf field <code>int32 damage_dealt = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDamageDealt($var)
    {
        GPBUtil::checkInt32($var);
        $this->damage_dealt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 7;</code>
     * @return bool
     */
    public function getSuperEffectiveChargeMove()
    {
        return $this->super_effective_charge_move;
    }

    /**
     * Generated from protobuf field <code>bool super_effective_charge_move = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuperEffectiveChargeMove($var)
    {
        GPBUtil::checkBool($var);
        $this->super_effective_charge_move = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool weather_boosted = 8;</code>
     * @return bool
     */
    public function getWeatherBoosted()
    {
        return $this->weather_boosted;
    }

    /**
     * Generated from protobuf field <code>bool weather_boosted = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setWeatherBoosted($var)
    {
        GPBUtil::checkBool($var);
        $this->weather_boosted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.FriendshipLevelMilestone highest_friendship_milestone = 9;</code>
     * @return int
     */
    public function getHighestFriendshipMilestone()
    {
        return $this->highest_friendship_milestone;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.FriendshipLevelMilestone highest_friendship_milestone = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHighestFriendshipMilestone($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\FriendshipLevelMilestone::class);
        $this->highest_friendship_milestone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string friend_codename = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFriendCodename()
    {
        return $this->friend_codename;
    }

    /**
     * Generated from protobuf field <code>repeated string friend_codename = 10;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFriendCodename($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->friend_codename = $arr;

        return $this;
    }

}

