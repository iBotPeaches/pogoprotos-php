<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerStats.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Player.PlayerStats</code>
 */
class PlayerStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 level = 1;</code>
     */
    private $level = 0;
    /**
     * Generated from protobuf field <code>int64 experience = 2;</code>
     */
    private $experience = 0;
    /**
     * Generated from protobuf field <code>int64 prev_level_xp = 3;</code>
     */
    private $prev_level_xp = 0;
    /**
     * Generated from protobuf field <code>int64 next_level_xp = 4;</code>
     */
    private $next_level_xp = 0;
    /**
     * Generated from protobuf field <code>float km_walked = 5;</code>
     */
    private $km_walked = 0.0;
    /**
     * Generated from protobuf field <code>int32 pokemons_encountered = 6;</code>
     */
    private $pokemons_encountered = 0;
    /**
     * Generated from protobuf field <code>int32 unique_pokedex_entries = 7;</code>
     */
    private $unique_pokedex_entries = 0;
    /**
     * Generated from protobuf field <code>int32 pokemons_captured = 8;</code>
     */
    private $pokemons_captured = 0;
    /**
     * Generated from protobuf field <code>int32 evolutions = 9;</code>
     */
    private $evolutions = 0;
    /**
     * Generated from protobuf field <code>int32 poke_stop_visits = 10;</code>
     */
    private $poke_stop_visits = 0;
    /**
     * Generated from protobuf field <code>int32 pokeballs_thrown = 11;</code>
     */
    private $pokeballs_thrown = 0;
    /**
     * Generated from protobuf field <code>int32 eggs_hatched = 12;</code>
     */
    private $eggs_hatched = 0;
    /**
     * Generated from protobuf field <code>int32 big_magikarp_caught = 13;</code>
     */
    private $big_magikarp_caught = 0;
    /**
     * Generated from protobuf field <code>int32 battle_attack_won = 14;</code>
     */
    private $battle_attack_won = 0;
    /**
     * Generated from protobuf field <code>int32 battle_attack_total = 15;</code>
     */
    private $battle_attack_total = 0;
    /**
     * Generated from protobuf field <code>int32 battle_defended_won = 16;</code>
     */
    private $battle_defended_won = 0;
    /**
     * Generated from protobuf field <code>int32 battle_training_won = 17;</code>
     */
    private $battle_training_won = 0;
    /**
     * Generated from protobuf field <code>int32 battle_training_total = 18;</code>
     */
    private $battle_training_total = 0;
    /**
     * Generated from protobuf field <code>int32 prestige_raised_total = 19;</code>
     */
    private $prestige_raised_total = 0;
    /**
     * Generated from protobuf field <code>int32 prestige_dropped_total = 20;</code>
     */
    private $prestige_dropped_total = 0;
    /**
     * Generated from protobuf field <code>int32 pokemon_deployed = 21;</code>
     */
    private $pokemon_deployed = 0;
    /**
     * Generated from protobuf field <code>repeated int32 pokemon_caught_by_type = 22;</code>
     */
    private $pokemon_caught_by_type;
    /**
     * Generated from protobuf field <code>int32 small_rattata_caught = 23;</code>
     */
    private $small_rattata_caught = 0;
    /**
     * Generated from protobuf field <code>double used_km_pool = 24;</code>
     */
    private $used_km_pool = 0.0;
    /**
     * Generated from protobuf field <code>int64 last_km_refill_ms = 25;</code>
     */
    private $last_km_refill_ms = 0;
    /**
     * Generated from protobuf field <code>int32 num_raid_battle_won = 26;</code>
     */
    private $num_raid_battle_won = 0;
    /**
     * Generated from protobuf field <code>int32 num_raid_battle_total = 27;</code>
     */
    private $num_raid_battle_total = 0;
    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_won = 28;</code>
     */
    private $num_legendary_battle_won = 0;
    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_total = 29;</code>
     */
    private $num_legendary_battle_total = 0;
    /**
     * Generated from protobuf field <code>int32 num_berries_fed = 30;</code>
     */
    private $num_berries_fed = 0;
    /**
     * Generated from protobuf field <code>int64 total_defended_ms = 31;</code>
     */
    private $total_defended_ms = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.GymBadgeType event_badges = 32;</code>
     */
    private $event_badges;
    /**
     * Generated from protobuf field <code>float km_walked_past_active_day = 33;</code>
     */
    private $km_walked_past_active_day = 0.0;
    /**
     * Generated from protobuf field <code>int32 num_challenge_quests_completed = 34;</code>
     */
    private $num_challenge_quests_completed = 0;
    /**
     * Generated from protobuf field <code>int32 num_trades = 35;</code>
     */
    private $num_trades = 0;
    /**
     * Generated from protobuf field <code>int32 num_max_level_friends = 36;</code>
     */
    private $num_max_level_friends = 0;
    /**
     * Generated from protobuf field <code>int64 trade_accumulated_distance_km = 37;</code>
     */
    private $trade_accumulated_distance_km = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type int|string $experience
     *     @type int|string $prev_level_xp
     *     @type int|string $next_level_xp
     *     @type float $km_walked
     *     @type int $pokemons_encountered
     *     @type int $unique_pokedex_entries
     *     @type int $pokemons_captured
     *     @type int $evolutions
     *     @type int $poke_stop_visits
     *     @type int $pokeballs_thrown
     *     @type int $eggs_hatched
     *     @type int $big_magikarp_caught
     *     @type int $battle_attack_won
     *     @type int $battle_attack_total
     *     @type int $battle_defended_won
     *     @type int $battle_training_won
     *     @type int $battle_training_total
     *     @type int $prestige_raised_total
     *     @type int $prestige_dropped_total
     *     @type int $pokemon_deployed
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pokemon_caught_by_type
     *     @type int $small_rattata_caught
     *     @type float $used_km_pool
     *     @type int|string $last_km_refill_ms
     *     @type int $num_raid_battle_won
     *     @type int $num_raid_battle_total
     *     @type int $num_legendary_battle_won
     *     @type int $num_legendary_battle_total
     *     @type int $num_berries_fed
     *     @type int|string $total_defended_ms
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $event_badges
     *     @type float $km_walked_past_active_day
     *     @type int $num_challenge_quests_completed
     *     @type int $num_trades
     *     @type int $num_max_level_friends
     *     @type int|string $trade_accumulated_distance_km
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Player\PlayerStats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>int32 level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 experience = 2;</code>
     * @return int|string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Generated from protobuf field <code>int64 experience = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExperience($var)
    {
        GPBUtil::checkInt64($var);
        $this->experience = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 prev_level_xp = 3;</code>
     * @return int|string
     */
    public function getPrevLevelXp()
    {
        return $this->prev_level_xp;
    }

    /**
     * Generated from protobuf field <code>int64 prev_level_xp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPrevLevelXp($var)
    {
        GPBUtil::checkInt64($var);
        $this->prev_level_xp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 next_level_xp = 4;</code>
     * @return int|string
     */
    public function getNextLevelXp()
    {
        return $this->next_level_xp;
    }

    /**
     * Generated from protobuf field <code>int64 next_level_xp = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextLevelXp($var)
    {
        GPBUtil::checkInt64($var);
        $this->next_level_xp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float km_walked = 5;</code>
     * @return float
     */
    public function getKmWalked()
    {
        return $this->km_walked;
    }

    /**
     * Generated from protobuf field <code>float km_walked = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setKmWalked($var)
    {
        GPBUtil::checkFloat($var);
        $this->km_walked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokemons_encountered = 6;</code>
     * @return int
     */
    public function getPokemonsEncountered()
    {
        return $this->pokemons_encountered;
    }

    /**
     * Generated from protobuf field <code>int32 pokemons_encountered = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonsEncountered($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemons_encountered = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 unique_pokedex_entries = 7;</code>
     * @return int
     */
    public function getUniquePokedexEntries()
    {
        return $this->unique_pokedex_entries;
    }

    /**
     * Generated from protobuf field <code>int32 unique_pokedex_entries = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setUniquePokedexEntries($var)
    {
        GPBUtil::checkInt32($var);
        $this->unique_pokedex_entries = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokemons_captured = 8;</code>
     * @return int
     */
    public function getPokemonsCaptured()
    {
        return $this->pokemons_captured;
    }

    /**
     * Generated from protobuf field <code>int32 pokemons_captured = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonsCaptured($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemons_captured = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 evolutions = 9;</code>
     * @return int
     */
    public function getEvolutions()
    {
        return $this->evolutions;
    }

    /**
     * Generated from protobuf field <code>int32 evolutions = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEvolutions($var)
    {
        GPBUtil::checkInt32($var);
        $this->evolutions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 poke_stop_visits = 10;</code>
     * @return int
     */
    public function getPokeStopVisits()
    {
        return $this->poke_stop_visits;
    }

    /**
     * Generated from protobuf field <code>int32 poke_stop_visits = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPokeStopVisits($var)
    {
        GPBUtil::checkInt32($var);
        $this->poke_stop_visits = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokeballs_thrown = 11;</code>
     * @return int
     */
    public function getPokeballsThrown()
    {
        return $this->pokeballs_thrown;
    }

    /**
     * Generated from protobuf field <code>int32 pokeballs_thrown = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPokeballsThrown($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokeballs_thrown = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 eggs_hatched = 12;</code>
     * @return int
     */
    public function getEggsHatched()
    {
        return $this->eggs_hatched;
    }

    /**
     * Generated from protobuf field <code>int32 eggs_hatched = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEggsHatched($var)
    {
        GPBUtil::checkInt32($var);
        $this->eggs_hatched = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 big_magikarp_caught = 13;</code>
     * @return int
     */
    public function getBigMagikarpCaught()
    {
        return $this->big_magikarp_caught;
    }

    /**
     * Generated from protobuf field <code>int32 big_magikarp_caught = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setBigMagikarpCaught($var)
    {
        GPBUtil::checkInt32($var);
        $this->big_magikarp_caught = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_attack_won = 14;</code>
     * @return int
     */
    public function getBattleAttackWon()
    {
        return $this->battle_attack_won;
    }

    /**
     * Generated from protobuf field <code>int32 battle_attack_won = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleAttackWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_attack_won = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_attack_total = 15;</code>
     * @return int
     */
    public function getBattleAttackTotal()
    {
        return $this->battle_attack_total;
    }

    /**
     * Generated from protobuf field <code>int32 battle_attack_total = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleAttackTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_attack_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_defended_won = 16;</code>
     * @return int
     */
    public function getBattleDefendedWon()
    {
        return $this->battle_defended_won;
    }

    /**
     * Generated from protobuf field <code>int32 battle_defended_won = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleDefendedWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_defended_won = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_training_won = 17;</code>
     * @return int
     */
    public function getBattleTrainingWon()
    {
        return $this->battle_training_won;
    }

    /**
     * Generated from protobuf field <code>int32 battle_training_won = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleTrainingWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_training_won = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battle_training_total = 18;</code>
     * @return int
     */
    public function getBattleTrainingTotal()
    {
        return $this->battle_training_total;
    }

    /**
     * Generated from protobuf field <code>int32 battle_training_total = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleTrainingTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_training_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 prestige_raised_total = 19;</code>
     * @return int
     */
    public function getPrestigeRaisedTotal()
    {
        return $this->prestige_raised_total;
    }

    /**
     * Generated from protobuf field <code>int32 prestige_raised_total = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setPrestigeRaisedTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->prestige_raised_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 prestige_dropped_total = 20;</code>
     * @return int
     */
    public function getPrestigeDroppedTotal()
    {
        return $this->prestige_dropped_total;
    }

    /**
     * Generated from protobuf field <code>int32 prestige_dropped_total = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setPrestigeDroppedTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->prestige_dropped_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_deployed = 21;</code>
     * @return int
     */
    public function getPokemonDeployed()
    {
        return $this->pokemon_deployed;
    }

    /**
     * Generated from protobuf field <code>int32 pokemon_deployed = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonDeployed($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemon_deployed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 pokemon_caught_by_type = 22;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokemonCaughtByType()
    {
        return $this->pokemon_caught_by_type;
    }

    /**
     * Generated from protobuf field <code>repeated int32 pokemon_caught_by_type = 22;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPokemonCaughtByType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->pokemon_caught_by_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 small_rattata_caught = 23;</code>
     * @return int
     */
    public function getSmallRattataCaught()
    {
        return $this->small_rattata_caught;
    }

    /**
     * Generated from protobuf field <code>int32 small_rattata_caught = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setSmallRattataCaught($var)
    {
        GPBUtil::checkInt32($var);
        $this->small_rattata_caught = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double used_km_pool = 24;</code>
     * @return float
     */
    public function getUsedKmPool()
    {
        return $this->used_km_pool;
    }

    /**
     * Generated from protobuf field <code>double used_km_pool = 24;</code>
     * @param float $var
     * @return $this
     */
    public function setUsedKmPool($var)
    {
        GPBUtil::checkDouble($var);
        $this->used_km_pool = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_km_refill_ms = 25;</code>
     * @return int|string
     */
    public function getLastKmRefillMs()
    {
        return $this->last_km_refill_ms;
    }

    /**
     * Generated from protobuf field <code>int64 last_km_refill_ms = 25;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastKmRefillMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_km_refill_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_raid_battle_won = 26;</code>
     * @return int
     */
    public function getNumRaidBattleWon()
    {
        return $this->num_raid_battle_won;
    }

    /**
     * Generated from protobuf field <code>int32 num_raid_battle_won = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setNumRaidBattleWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_raid_battle_won = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_raid_battle_total = 27;</code>
     * @return int
     */
    public function getNumRaidBattleTotal()
    {
        return $this->num_raid_battle_total;
    }

    /**
     * Generated from protobuf field <code>int32 num_raid_battle_total = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setNumRaidBattleTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_raid_battle_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_won = 28;</code>
     * @return int
     */
    public function getNumLegendaryBattleWon()
    {
        return $this->num_legendary_battle_won;
    }

    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_won = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setNumLegendaryBattleWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_legendary_battle_won = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_total = 29;</code>
     * @return int
     */
    public function getNumLegendaryBattleTotal()
    {
        return $this->num_legendary_battle_total;
    }

    /**
     * Generated from protobuf field <code>int32 num_legendary_battle_total = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setNumLegendaryBattleTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_legendary_battle_total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_berries_fed = 30;</code>
     * @return int
     */
    public function getNumBerriesFed()
    {
        return $this->num_berries_fed;
    }

    /**
     * Generated from protobuf field <code>int32 num_berries_fed = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setNumBerriesFed($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_berries_fed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_defended_ms = 31;</code>
     * @return int|string
     */
    public function getTotalDefendedMs()
    {
        return $this->total_defended_ms;
    }

    /**
     * Generated from protobuf field <code>int64 total_defended_ms = 31;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalDefendedMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_defended_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.GymBadgeType event_badges = 32;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventBadges()
    {
        return $this->event_badges;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.GymBadgeType event_badges = 32;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventBadges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\GymBadgeType::class);
        $this->event_badges = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float km_walked_past_active_day = 33;</code>
     * @return float
     */
    public function getKmWalkedPastActiveDay()
    {
        return $this->km_walked_past_active_day;
    }

    /**
     * Generated from protobuf field <code>float km_walked_past_active_day = 33;</code>
     * @param float $var
     * @return $this
     */
    public function setKmWalkedPastActiveDay($var)
    {
        GPBUtil::checkFloat($var);
        $this->km_walked_past_active_day = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_challenge_quests_completed = 34;</code>
     * @return int
     */
    public function getNumChallengeQuestsCompleted()
    {
        return $this->num_challenge_quests_completed;
    }

    /**
     * Generated from protobuf field <code>int32 num_challenge_quests_completed = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setNumChallengeQuestsCompleted($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_challenge_quests_completed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_trades = 35;</code>
     * @return int
     */
    public function getNumTrades()
    {
        return $this->num_trades;
    }

    /**
     * Generated from protobuf field <code>int32 num_trades = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTrades($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_trades = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_max_level_friends = 36;</code>
     * @return int
     */
    public function getNumMaxLevelFriends()
    {
        return $this->num_max_level_friends;
    }

    /**
     * Generated from protobuf field <code>int32 num_max_level_friends = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setNumMaxLevelFriends($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_max_level_friends = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 trade_accumulated_distance_km = 37;</code>
     * @return int|string
     */
    public function getTradeAccumulatedDistanceKm()
    {
        return $this->trade_accumulated_distance_km;
    }

    /**
     * Generated from protobuf field <code>int64 trade_accumulated_distance_km = 37;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTradeAccumulatedDistanceKm($var)
    {
        GPBUtil::checkInt64($var);
        $this->trade_accumulated_distance_km = $var;

        return $this;
    }

}

