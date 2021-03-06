<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PokemonData.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.PokemonData</code>
 */
class PokemonData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     */
    private $cp = 0;
    /**
     * Generated from protobuf field <code>int32 stamina = 4;</code>
     */
    private $stamina = 0;
    /**
     * Generated from protobuf field <code>int32 stamina_max = 5;</code>
     */
    private $stamina_max = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     */
    private $move_1 = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     */
    private $move_2 = 0;
    /**
     * Generated from protobuf field <code>string deployed_fort_id = 8;</code>
     */
    private $deployed_fort_id = '';
    /**
     * Generated from protobuf field <code>string owner_name = 9;</code>
     */
    private $owner_name = '';
    /**
     * Generated from protobuf field <code>bool is_egg = 10;</code>
     */
    private $is_egg = false;
    /**
     * Generated from protobuf field <code>double egg_km_walked_target = 11;</code>
     */
    private $egg_km_walked_target = 0.0;
    /**
     * Generated from protobuf field <code>double egg_km_walked_start = 12;</code>
     */
    private $egg_km_walked_start = 0.0;
    /**
     * Generated from protobuf field <code>int32 origin = 14;</code>
     */
    private $origin = 0;
    /**
     * Generated from protobuf field <code>float height_m = 15;</code>
     */
    private $height_m = 0.0;
    /**
     * Generated from protobuf field <code>float weight_kg = 16;</code>
     */
    private $weight_kg = 0.0;
    /**
     * Generated from protobuf field <code>int32 individual_attack = 17;</code>
     */
    private $individual_attack = 0;
    /**
     * Generated from protobuf field <code>int32 individual_defense = 18;</code>
     */
    private $individual_defense = 0;
    /**
     * Generated from protobuf field <code>int32 individual_stamina = 19;</code>
     */
    private $individual_stamina = 0;
    /**
     * Generated from protobuf field <code>float cp_multiplier = 20;</code>
     */
    private $cp_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     */
    private $pokeball = 0;
    /**
     * Generated from protobuf field <code>uint64 captured_cell_id = 22;</code>
     */
    private $captured_cell_id = 0;
    /**
     * Generated from protobuf field <code>int32 battles_attacked = 23;</code>
     */
    private $battles_attacked = 0;
    /**
     * Generated from protobuf field <code>int32 battles_defended = 24;</code>
     */
    private $battles_defended = 0;
    /**
     * Generated from protobuf field <code>string egg_incubator_id = 25;</code>
     */
    private $egg_incubator_id = '';
    /**
     * Generated from protobuf field <code>uint64 creation_time_ms = 26;</code>
     */
    private $creation_time_ms = 0;
    /**
     * Generated from protobuf field <code>int32 num_upgrades = 27;</code>
     */
    private $num_upgrades = 0;
    /**
     * Generated from protobuf field <code>float additional_cp_multiplier = 28;</code>
     */
    private $additional_cp_multiplier = 0.0;
    /**
     * Generated from protobuf field <code>int32 favorite = 29;</code>
     */
    private $favorite = 0;
    /**
     * Generated from protobuf field <code>string nickname = 30;</code>
     */
    private $nickname = '';
    /**
     * Generated from protobuf field <code>int32 from_fort = 31;</code>
     */
    private $from_fort = 0;
    /**
     * Generated from protobuf field <code>int32 buddy_candy_awarded = 32;</code>
     */
    private $buddy_candy_awarded = 0;
    /**
     * Generated from protobuf field <code>float buddy_total_km_walked = 33;</code>
     */
    private $buddy_total_km_walked = 0.0;
    /**
     * Generated from protobuf field <code>int32 display_pokemon_id = 34;</code>
     */
    private $display_pokemon_id = 0;
    /**
     * Generated from protobuf field <code>int32 display_cp = 35;</code>
     */
    private $display_cp = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     */
    private $pokemon_display = null;
    /**
     * Generated from protobuf field <code>bool is_bad = 37;</code>
     */
    private $is_bad = false;
    /**
     * Generated from protobuf field <code>bool hatched_from_egg = 38;</code>
     */
    private $hatched_from_egg = false;
    /**
     * Generated from protobuf field <code>int32 coins_returned = 39;</code>
     */
    private $coins_returned = 0;
    /**
     * Generated from protobuf field <code>int64 deployed_duration_ms = 40;</code>
     */
    private $deployed_duration_ms = 0;
    /**
     * Generated from protobuf field <code>int64 deployed_returned_timestamp_ms = 41;</code>
     */
    private $deployed_returned_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>float cp_multiplier_before_trading = 42;</code>
     */
    private $cp_multiplier_before_trading = 0.0;
    /**
     * Generated from protobuf field <code>int32 trading_original_owner_hash = 43;</code>
     */
    private $trading_original_owner_hash = 0;
    /**
     * Generated from protobuf field <code>string original_owner_nickname = 44;</code>
     */
    private $original_owner_nickname = '';
    /**
     * Generated from protobuf field <code>int64 traded_time_ms = 45;</code>
     */
    private $traded_time_ms = 0;
    /**
     * Generated from protobuf field <code>bool is_lucky = 46;</code>
     */
    private $is_lucky = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_3 = 47;</code>
     */
    private $move_3 = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats pvp_combat_stats = 48;</code>
     */
    private $pvp_combat_stats = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats npc_combat_stats = 49;</code>
     */
    private $npc_combat_stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int $pokemon_id
     *     @type int $cp
     *     @type int $stamina
     *     @type int $stamina_max
     *     @type int $move_1
     *     @type int $move_2
     *     @type string $deployed_fort_id
     *     @type string $owner_name
     *     @type bool $is_egg
     *     @type float $egg_km_walked_target
     *     @type float $egg_km_walked_start
     *     @type int $origin
     *     @type float $height_m
     *     @type float $weight_kg
     *     @type int $individual_attack
     *     @type int $individual_defense
     *     @type int $individual_stamina
     *     @type float $cp_multiplier
     *     @type int $pokeball
     *     @type int|string $captured_cell_id
     *     @type int $battles_attacked
     *     @type int $battles_defended
     *     @type string $egg_incubator_id
     *     @type int|string $creation_time_ms
     *     @type int $num_upgrades
     *     @type float $additional_cp_multiplier
     *     @type int $favorite
     *     @type string $nickname
     *     @type int $from_fort
     *     @type int $buddy_candy_awarded
     *     @type float $buddy_total_km_walked
     *     @type int $display_pokemon_id
     *     @type int $display_cp
     *     @type \POGOProtos\Data\PokemonDisplay $pokemon_display
     *     @type bool $is_bad
     *     @type bool $hatched_from_egg
     *     @type int $coins_returned
     *     @type int|string $deployed_duration_ms
     *     @type int|string $deployed_returned_timestamp_ms
     *     @type float $cp_multiplier_before_trading
     *     @type int $trading_original_owner_hash
     *     @type string $original_owner_nickname
     *     @type int|string $traded_time_ms
     *     @type bool $is_lucky
     *     @type int $move_3
     *     @type \POGOProtos\Data\Combat\PokemonCombatStats $pvp_combat_stats
     *     @type \POGOProtos\Data\Combat\PokemonCombatStats $npc_combat_stats
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\PokemonData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     * @return int
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stamina = 4;</code>
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Generated from protobuf field <code>int32 stamina = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStamina($var)
    {
        GPBUtil::checkInt32($var);
        $this->stamina = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stamina_max = 5;</code>
     * @return int
     */
    public function getStaminaMax()
    {
        return $this->stamina_max;
    }

    /**
     * Generated from protobuf field <code>int32 stamina_max = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStaminaMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->stamina_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     * @return int
     */
    public function getMove1()
    {
        return $this->move_1;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMove1($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move_1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     * @return int
     */
    public function getMove2()
    {
        return $this->move_2;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMove2($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move_2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deployed_fort_id = 8;</code>
     * @return string
     */
    public function getDeployedFortId()
    {
        return $this->deployed_fort_id;
    }

    /**
     * Generated from protobuf field <code>string deployed_fort_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_name = 9;</code>
     * @return string
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * Generated from protobuf field <code>string owner_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_egg = 10;</code>
     * @return bool
     */
    public function getIsEgg()
    {
        return $this->is_egg;
    }

    /**
     * Generated from protobuf field <code>bool is_egg = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEgg($var)
    {
        GPBUtil::checkBool($var);
        $this->is_egg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double egg_km_walked_target = 11;</code>
     * @return float
     */
    public function getEggKmWalkedTarget()
    {
        return $this->egg_km_walked_target;
    }

    /**
     * Generated from protobuf field <code>double egg_km_walked_target = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setEggKmWalkedTarget($var)
    {
        GPBUtil::checkDouble($var);
        $this->egg_km_walked_target = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double egg_km_walked_start = 12;</code>
     * @return float
     */
    public function getEggKmWalkedStart()
    {
        return $this->egg_km_walked_start;
    }

    /**
     * Generated from protobuf field <code>double egg_km_walked_start = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setEggKmWalkedStart($var)
    {
        GPBUtil::checkDouble($var);
        $this->egg_km_walked_start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 origin = 14;</code>
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Generated from protobuf field <code>int32 origin = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkInt32($var);
        $this->origin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float height_m = 15;</code>
     * @return float
     */
    public function getHeightM()
    {
        return $this->height_m;
    }

    /**
     * Generated from protobuf field <code>float height_m = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setHeightM($var)
    {
        GPBUtil::checkFloat($var);
        $this->height_m = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float weight_kg = 16;</code>
     * @return float
     */
    public function getWeightKg()
    {
        return $this->weight_kg;
    }

    /**
     * Generated from protobuf field <code>float weight_kg = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setWeightKg($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight_kg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 17;</code>
     * @return int
     */
    public function getIndividualAttack()
    {
        return $this->individual_attack;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setIndividualAttack($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_attack = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 individual_defense = 18;</code>
     * @return int
     */
    public function getIndividualDefense()
    {
        return $this->individual_defense;
    }

    /**
     * Generated from protobuf field <code>int32 individual_defense = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setIndividualDefense($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_defense = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 individual_stamina = 19;</code>
     * @return int
     */
    public function getIndividualStamina()
    {
        return $this->individual_stamina;
    }

    /**
     * Generated from protobuf field <code>int32 individual_stamina = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setIndividualStamina($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_stamina = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cp_multiplier = 20;</code>
     * @return float
     */
    public function getCpMultiplier()
    {
        return $this->cp_multiplier;
    }

    /**
     * Generated from protobuf field <code>float cp_multiplier = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setCpMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->cp_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     * @return int
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setPokeball($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->pokeball = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 captured_cell_id = 22;</code>
     * @return int|string
     */
    public function getCapturedCellId()
    {
        return $this->captured_cell_id;
    }

    /**
     * Generated from protobuf field <code>uint64 captured_cell_id = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapturedCellId($var)
    {
        GPBUtil::checkUint64($var);
        $this->captured_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battles_attacked = 23;</code>
     * @return int
     */
    public function getBattlesAttacked()
    {
        return $this->battles_attacked;
    }

    /**
     * Generated from protobuf field <code>int32 battles_attacked = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setBattlesAttacked($var)
    {
        GPBUtil::checkInt32($var);
        $this->battles_attacked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 battles_defended = 24;</code>
     * @return int
     */
    public function getBattlesDefended()
    {
        return $this->battles_defended;
    }

    /**
     * Generated from protobuf field <code>int32 battles_defended = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setBattlesDefended($var)
    {
        GPBUtil::checkInt32($var);
        $this->battles_defended = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string egg_incubator_id = 25;</code>
     * @return string
     */
    public function getEggIncubatorId()
    {
        return $this->egg_incubator_id;
    }

    /**
     * Generated from protobuf field <code>string egg_incubator_id = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setEggIncubatorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->egg_incubator_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 creation_time_ms = 26;</code>
     * @return int|string
     */
    public function getCreationTimeMs()
    {
        return $this->creation_time_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 creation_time_ms = 26;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->creation_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_upgrades = 27;</code>
     * @return int
     */
    public function getNumUpgrades()
    {
        return $this->num_upgrades;
    }

    /**
     * Generated from protobuf field <code>int32 num_upgrades = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setNumUpgrades($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_upgrades = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float additional_cp_multiplier = 28;</code>
     * @return float
     */
    public function getAdditionalCpMultiplier()
    {
        return $this->additional_cp_multiplier;
    }

    /**
     * Generated from protobuf field <code>float additional_cp_multiplier = 28;</code>
     * @param float $var
     * @return $this
     */
    public function setAdditionalCpMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->additional_cp_multiplier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 favorite = 29;</code>
     * @return int
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * Generated from protobuf field <code>int32 favorite = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setFavorite($var)
    {
        GPBUtil::checkInt32($var);
        $this->favorite = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 30;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 from_fort = 31;</code>
     * @return int
     */
    public function getFromFort()
    {
        return $this->from_fort;
    }

    /**
     * Generated from protobuf field <code>int32 from_fort = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setFromFort($var)
    {
        GPBUtil::checkInt32($var);
        $this->from_fort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 buddy_candy_awarded = 32;</code>
     * @return int
     */
    public function getBuddyCandyAwarded()
    {
        return $this->buddy_candy_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 buddy_candy_awarded = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setBuddyCandyAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->buddy_candy_awarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float buddy_total_km_walked = 33;</code>
     * @return float
     */
    public function getBuddyTotalKmWalked()
    {
        return $this->buddy_total_km_walked;
    }

    /**
     * Generated from protobuf field <code>float buddy_total_km_walked = 33;</code>
     * @param float $var
     * @return $this
     */
    public function setBuddyTotalKmWalked($var)
    {
        GPBUtil::checkFloat($var);
        $this->buddy_total_km_walked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 display_pokemon_id = 34;</code>
     * @return int
     */
    public function getDisplayPokemonId()
    {
        return $this->display_pokemon_id;
    }

    /**
     * Generated from protobuf field <code>int32 display_pokemon_id = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setDisplayPokemonId($var)
    {
        GPBUtil::checkInt32($var);
        $this->display_pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 display_cp = 35;</code>
     * @return int
     */
    public function getDisplayCp()
    {
        return $this->display_cp;
    }

    /**
     * Generated from protobuf field <code>int32 display_cp = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setDisplayCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->display_cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     * @param \POGOProtos\Data\PokemonDisplay $var
     * @return $this
     */
    public function setPokemonDisplay($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->pokemon_display = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_bad = 37;</code>
     * @return bool
     */
    public function getIsBad()
    {
        return $this->is_bad;
    }

    /**
     * Generated from protobuf field <code>bool is_bad = 37;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBad($var)
    {
        GPBUtil::checkBool($var);
        $this->is_bad = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hatched_from_egg = 38;</code>
     * @return bool
     */
    public function getHatchedFromEgg()
    {
        return $this->hatched_from_egg;
    }

    /**
     * Generated from protobuf field <code>bool hatched_from_egg = 38;</code>
     * @param bool $var
     * @return $this
     */
    public function setHatchedFromEgg($var)
    {
        GPBUtil::checkBool($var);
        $this->hatched_from_egg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 coins_returned = 39;</code>
     * @return int
     */
    public function getCoinsReturned()
    {
        return $this->coins_returned;
    }

    /**
     * Generated from protobuf field <code>int32 coins_returned = 39;</code>
     * @param int $var
     * @return $this
     */
    public function setCoinsReturned($var)
    {
        GPBUtil::checkInt32($var);
        $this->coins_returned = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 deployed_duration_ms = 40;</code>
     * @return int|string
     */
    public function getDeployedDurationMs()
    {
        return $this->deployed_duration_ms;
    }

    /**
     * Generated from protobuf field <code>int64 deployed_duration_ms = 40;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeployedDurationMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->deployed_duration_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 deployed_returned_timestamp_ms = 41;</code>
     * @return int|string
     */
    public function getDeployedReturnedTimestampMs()
    {
        return $this->deployed_returned_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 deployed_returned_timestamp_ms = 41;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeployedReturnedTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->deployed_returned_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cp_multiplier_before_trading = 42;</code>
     * @return float
     */
    public function getCpMultiplierBeforeTrading()
    {
        return $this->cp_multiplier_before_trading;
    }

    /**
     * Generated from protobuf field <code>float cp_multiplier_before_trading = 42;</code>
     * @param float $var
     * @return $this
     */
    public function setCpMultiplierBeforeTrading($var)
    {
        GPBUtil::checkFloat($var);
        $this->cp_multiplier_before_trading = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 trading_original_owner_hash = 43;</code>
     * @return int
     */
    public function getTradingOriginalOwnerHash()
    {
        return $this->trading_original_owner_hash;
    }

    /**
     * Generated from protobuf field <code>int32 trading_original_owner_hash = 43;</code>
     * @param int $var
     * @return $this
     */
    public function setTradingOriginalOwnerHash($var)
    {
        GPBUtil::checkInt32($var);
        $this->trading_original_owner_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string original_owner_nickname = 44;</code>
     * @return string
     */
    public function getOriginalOwnerNickname()
    {
        return $this->original_owner_nickname;
    }

    /**
     * Generated from protobuf field <code>string original_owner_nickname = 44;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalOwnerNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_owner_nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 traded_time_ms = 45;</code>
     * @return int|string
     */
    public function getTradedTimeMs()
    {
        return $this->traded_time_ms;
    }

    /**
     * Generated from protobuf field <code>int64 traded_time_ms = 45;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTradedTimeMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->traded_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_lucky = 46;</code>
     * @return bool
     */
    public function getIsLucky()
    {
        return $this->is_lucky;
    }

    /**
     * Generated from protobuf field <code>bool is_lucky = 46;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLucky($var)
    {
        GPBUtil::checkBool($var);
        $this->is_lucky = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_3 = 47;</code>
     * @return int
     */
    public function getMove3()
    {
        return $this->move_3;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move_3 = 47;</code>
     * @param int $var
     * @return $this
     */
    public function setMove3($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move_3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats pvp_combat_stats = 48;</code>
     * @return \POGOProtos\Data\Combat\PokemonCombatStats
     */
    public function getPvpCombatStats()
    {
        return $this->pvp_combat_stats;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats pvp_combat_stats = 48;</code>
     * @param \POGOProtos\Data\Combat\PokemonCombatStats $var
     * @return $this
     */
    public function setPvpCombatStats($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\PokemonCombatStats::class);
        $this->pvp_combat_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats npc_combat_stats = 49;</code>
     * @return \POGOProtos\Data\Combat\PokemonCombatStats
     */
    public function getNpcCombatStats()
    {
        return $this->npc_combat_stats;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.PokemonCombatStats npc_combat_stats = 49;</code>
     * @param \POGOProtos\Data\Combat\PokemonCombatStats $var
     * @return $this
     */
    public function setNpcCombatStats($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\PokemonCombatStats::class);
        $this->npc_combat_stats = $var;

        return $this;
    }

}

