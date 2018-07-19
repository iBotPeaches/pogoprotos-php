<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PokemonData.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.PokemonData</code>
 */
class PokemonData extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>int32 cp = 3;</code>
     */
    private $cp = 0;
    /**
     * <code>int32 stamina = 4;</code>
     */
    private $stamina = 0;
    /**
     * <code>int32 stamina_max = 5;</code>
     */
    private $stamina_max = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     */
    private $move_1 = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     */
    private $move_2 = 0;
    /**
     * <code>string deployed_fort_id = 8;</code>
     */
    private $deployed_fort_id = '';
    /**
     * <code>string owner_name = 9;</code>
     */
    private $owner_name = '';
    /**
     * <code>bool is_egg = 10;</code>
     */
    private $is_egg = false;
    /**
     * <code>double egg_km_walked_target = 11;</code>
     */
    private $egg_km_walked_target = 0.0;
    /**
     * <code>double egg_km_walked_start = 12;</code>
     */
    private $egg_km_walked_start = 0.0;
    /**
     * <code>int32 origin = 14;</code>
     */
    private $origin = 0;
    /**
     * <code>float height_m = 15;</code>
     */
    private $height_m = 0.0;
    /**
     * <code>float weight_kg = 16;</code>
     */
    private $weight_kg = 0.0;
    /**
     * <code>int32 individual_attack = 17;</code>
     */
    private $individual_attack = 0;
    /**
     * <code>int32 individual_defense = 18;</code>
     */
    private $individual_defense = 0;
    /**
     * <code>int32 individual_stamina = 19;</code>
     */
    private $individual_stamina = 0;
    /**
     * <code>float cp_multiplier = 20;</code>
     */
    private $cp_multiplier = 0.0;
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     */
    private $pokeball = 0;
    /**
     * <code>uint64 captured_cell_id = 22;</code>
     */
    private $captured_cell_id = 0;
    /**
     * <code>int32 battles_attacked = 23;</code>
     */
    private $battles_attacked = 0;
    /**
     * <code>int32 battles_defended = 24;</code>
     */
    private $battles_defended = 0;
    /**
     * <code>string egg_incubator_id = 25;</code>
     */
    private $egg_incubator_id = '';
    /**
     * <code>uint64 creation_time_ms = 26;</code>
     */
    private $creation_time_ms = 0;
    /**
     * <code>int32 num_upgrades = 27;</code>
     */
    private $num_upgrades = 0;
    /**
     * <code>float additional_cp_multiplier = 28;</code>
     */
    private $additional_cp_multiplier = 0.0;
    /**
     * <code>int32 favorite = 29;</code>
     */
    private $favorite = 0;
    /**
     * <code>string nickname = 30;</code>
     */
    private $nickname = '';
    /**
     * <code>int32 from_fort = 31;</code>
     */
    private $from_fort = 0;
    /**
     * <code>int32 buddy_candy_awarded = 32;</code>
     */
    private $buddy_candy_awarded = 0;
    /**
     * <code>float buddy_total_km_walked = 33;</code>
     */
    private $buddy_total_km_walked = 0.0;
    /**
     * <code>int32 display_pokemon_id = 34;</code>
     */
    private $display_pokemon_id = 0;
    /**
     * <code>int32 display_cp = 35;</code>
     */
    private $display_cp = 0;
    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     */
    private $pokemon_display = null;
    /**
     * <code>bool is_bad = 37;</code>
     */
    private $is_bad = false;
    /**
     * <code>bool hatched_from_egg = 38;</code>
     */
    private $hatched_from_egg = false;
    /**
     * <code>int32 coins_returned = 39;</code>
     */
    private $coins_returned = 0;
    /**
     * <code>int64 deployed_duration_ms = 40;</code>
     */
    private $deployed_duration_ms = 0;
    /**
     * <code>int64 deployed_returned_timestamp_ms = 41;</code>
     */
    private $deployed_returned_timestamp_ms = 0;
    /**
     * <code>float cp_multiplier_before_trading = 42;</code>
     */
    private $cp_multiplier_before_trading = 0.0;
    /**
     * <code>int32 original_owner_hash = 43;</code>
     */
    private $original_owner_hash = 0;
    /**
     * <code>string original_owner_nickname = 44;</code>
     */
    private $original_owner_nickname = '';
    /**
     * <code>int64 traded_time_ms = 45;</code>
     */
    private $traded_time_ms = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\PokemonData::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>fixed64 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 2;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;
    }

    /**
     * <code>int32 cp = 3;</code>
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * <code>int32 cp = 3;</code>
     */
    public function setCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->cp = $var;
    }

    /**
     * <code>int32 stamina = 4;</code>
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * <code>int32 stamina = 4;</code>
     */
    public function setStamina($var)
    {
        GPBUtil::checkInt32($var);
        $this->stamina = $var;
    }

    /**
     * <code>int32 stamina_max = 5;</code>
     */
    public function getStaminaMax()
    {
        return $this->stamina_max;
    }

    /**
     * <code>int32 stamina_max = 5;</code>
     */
    public function setStaminaMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->stamina_max = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     */
    public function getMove1()
    {
        return $this->move_1;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMove move_1 = 6;</code>
     */
    public function setMove1($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move_1 = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     */
    public function getMove2()
    {
        return $this->move_2;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMove move_2 = 7;</code>
     */
    public function setMove2($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move_2 = $var;
    }

    /**
     * <code>string deployed_fort_id = 8;</code>
     */
    public function getDeployedFortId()
    {
        return $this->deployed_fort_id;
    }

    /**
     * <code>string deployed_fort_id = 8;</code>
     */
    public function setDeployedFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_fort_id = $var;
    }

    /**
     * <code>string owner_name = 9;</code>
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * <code>string owner_name = 9;</code>
     */
    public function setOwnerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_name = $var;
    }

    /**
     * <code>bool is_egg = 10;</code>
     */
    public function getIsEgg()
    {
        return $this->is_egg;
    }

    /**
     * <code>bool is_egg = 10;</code>
     */
    public function setIsEgg($var)
    {
        GPBUtil::checkBool($var);
        $this->is_egg = $var;
    }

    /**
     * <code>double egg_km_walked_target = 11;</code>
     */
    public function getEggKmWalkedTarget()
    {
        return $this->egg_km_walked_target;
    }

    /**
     * <code>double egg_km_walked_target = 11;</code>
     */
    public function setEggKmWalkedTarget($var)
    {
        GPBUtil::checkDouble($var);
        $this->egg_km_walked_target = $var;
    }

    /**
     * <code>double egg_km_walked_start = 12;</code>
     */
    public function getEggKmWalkedStart()
    {
        return $this->egg_km_walked_start;
    }

    /**
     * <code>double egg_km_walked_start = 12;</code>
     */
    public function setEggKmWalkedStart($var)
    {
        GPBUtil::checkDouble($var);
        $this->egg_km_walked_start = $var;
    }

    /**
     * <code>int32 origin = 14;</code>
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * <code>int32 origin = 14;</code>
     */
    public function setOrigin($var)
    {
        GPBUtil::checkInt32($var);
        $this->origin = $var;
    }

    /**
     * <code>float height_m = 15;</code>
     */
    public function getHeightM()
    {
        return $this->height_m;
    }

    /**
     * <code>float height_m = 15;</code>
     */
    public function setHeightM($var)
    {
        GPBUtil::checkFloat($var);
        $this->height_m = $var;
    }

    /**
     * <code>float weight_kg = 16;</code>
     */
    public function getWeightKg()
    {
        return $this->weight_kg;
    }

    /**
     * <code>float weight_kg = 16;</code>
     */
    public function setWeightKg($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight_kg = $var;
    }

    /**
     * <code>int32 individual_attack = 17;</code>
     */
    public function getIndividualAttack()
    {
        return $this->individual_attack;
    }

    /**
     * <code>int32 individual_attack = 17;</code>
     */
    public function setIndividualAttack($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_attack = $var;
    }

    /**
     * <code>int32 individual_defense = 18;</code>
     */
    public function getIndividualDefense()
    {
        return $this->individual_defense;
    }

    /**
     * <code>int32 individual_defense = 18;</code>
     */
    public function setIndividualDefense($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_defense = $var;
    }

    /**
     * <code>int32 individual_stamina = 19;</code>
     */
    public function getIndividualStamina()
    {
        return $this->individual_stamina;
    }

    /**
     * <code>int32 individual_stamina = 19;</code>
     */
    public function setIndividualStamina($var)
    {
        GPBUtil::checkInt32($var);
        $this->individual_stamina = $var;
    }

    /**
     * <code>float cp_multiplier = 20;</code>
     */
    public function getCpMultiplier()
    {
        return $this->cp_multiplier;
    }

    /**
     * <code>float cp_multiplier = 20;</code>
     */
    public function setCpMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->cp_multiplier = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 21;</code>
     */
    public function setPokeball($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->pokeball = $var;
    }

    /**
     * <code>uint64 captured_cell_id = 22;</code>
     */
    public function getCapturedCellId()
    {
        return $this->captured_cell_id;
    }

    /**
     * <code>uint64 captured_cell_id = 22;</code>
     */
    public function setCapturedCellId($var)
    {
        GPBUtil::checkUint64($var);
        $this->captured_cell_id = $var;
    }

    /**
     * <code>int32 battles_attacked = 23;</code>
     */
    public function getBattlesAttacked()
    {
        return $this->battles_attacked;
    }

    /**
     * <code>int32 battles_attacked = 23;</code>
     */
    public function setBattlesAttacked($var)
    {
        GPBUtil::checkInt32($var);
        $this->battles_attacked = $var;
    }

    /**
     * <code>int32 battles_defended = 24;</code>
     */
    public function getBattlesDefended()
    {
        return $this->battles_defended;
    }

    /**
     * <code>int32 battles_defended = 24;</code>
     */
    public function setBattlesDefended($var)
    {
        GPBUtil::checkInt32($var);
        $this->battles_defended = $var;
    }

    /**
     * <code>string egg_incubator_id = 25;</code>
     */
    public function getEggIncubatorId()
    {
        return $this->egg_incubator_id;
    }

    /**
     * <code>string egg_incubator_id = 25;</code>
     */
    public function setEggIncubatorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->egg_incubator_id = $var;
    }

    /**
     * <code>uint64 creation_time_ms = 26;</code>
     */
    public function getCreationTimeMs()
    {
        return $this->creation_time_ms;
    }

    /**
     * <code>uint64 creation_time_ms = 26;</code>
     */
    public function setCreationTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->creation_time_ms = $var;
    }

    /**
     * <code>int32 num_upgrades = 27;</code>
     */
    public function getNumUpgrades()
    {
        return $this->num_upgrades;
    }

    /**
     * <code>int32 num_upgrades = 27;</code>
     */
    public function setNumUpgrades($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_upgrades = $var;
    }

    /**
     * <code>float additional_cp_multiplier = 28;</code>
     */
    public function getAdditionalCpMultiplier()
    {
        return $this->additional_cp_multiplier;
    }

    /**
     * <code>float additional_cp_multiplier = 28;</code>
     */
    public function setAdditionalCpMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->additional_cp_multiplier = $var;
    }

    /**
     * <code>int32 favorite = 29;</code>
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * <code>int32 favorite = 29;</code>
     */
    public function setFavorite($var)
    {
        GPBUtil::checkInt32($var);
        $this->favorite = $var;
    }

    /**
     * <code>string nickname = 30;</code>
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * <code>string nickname = 30;</code>
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;
    }

    /**
     * <code>int32 from_fort = 31;</code>
     */
    public function getFromFort()
    {
        return $this->from_fort;
    }

    /**
     * <code>int32 from_fort = 31;</code>
     */
    public function setFromFort($var)
    {
        GPBUtil::checkInt32($var);
        $this->from_fort = $var;
    }

    /**
     * <code>int32 buddy_candy_awarded = 32;</code>
     */
    public function getBuddyCandyAwarded()
    {
        return $this->buddy_candy_awarded;
    }

    /**
     * <code>int32 buddy_candy_awarded = 32;</code>
     */
    public function setBuddyCandyAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->buddy_candy_awarded = $var;
    }

    /**
     * <code>float buddy_total_km_walked = 33;</code>
     */
    public function getBuddyTotalKmWalked()
    {
        return $this->buddy_total_km_walked;
    }

    /**
     * <code>float buddy_total_km_walked = 33;</code>
     */
    public function setBuddyTotalKmWalked($var)
    {
        GPBUtil::checkFloat($var);
        $this->buddy_total_km_walked = $var;
    }

    /**
     * <code>int32 display_pokemon_id = 34;</code>
     */
    public function getDisplayPokemonId()
    {
        return $this->display_pokemon_id;
    }

    /**
     * <code>int32 display_pokemon_id = 34;</code>
     */
    public function setDisplayPokemonId($var)
    {
        GPBUtil::checkInt32($var);
        $this->display_pokemon_id = $var;
    }

    /**
     * <code>int32 display_cp = 35;</code>
     */
    public function getDisplayCp()
    {
        return $this->display_cp;
    }

    /**
     * <code>int32 display_cp = 35;</code>
     */
    public function setDisplayCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->display_cp = $var;
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 36;</code>
     */
    public function setPokemonDisplay(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonDisplay::class);
        $this->pokemon_display = $var;
    }

    /**
     * <code>bool is_bad = 37;</code>
     */
    public function getIsBad()
    {
        return $this->is_bad;
    }

    /**
     * <code>bool is_bad = 37;</code>
     */
    public function setIsBad($var)
    {
        GPBUtil::checkBool($var);
        $this->is_bad = $var;
    }

    /**
     * <code>bool hatched_from_egg = 38;</code>
     */
    public function getHatchedFromEgg()
    {
        return $this->hatched_from_egg;
    }

    /**
     * <code>bool hatched_from_egg = 38;</code>
     */
    public function setHatchedFromEgg($var)
    {
        GPBUtil::checkBool($var);
        $this->hatched_from_egg = $var;
    }

    /**
     * <code>int32 coins_returned = 39;</code>
     */
    public function getCoinsReturned()
    {
        return $this->coins_returned;
    }

    /**
     * <code>int32 coins_returned = 39;</code>
     */
    public function setCoinsReturned($var)
    {
        GPBUtil::checkInt32($var);
        $this->coins_returned = $var;
    }

    /**
     * <code>int64 deployed_duration_ms = 40;</code>
     */
    public function getDeployedDurationMs()
    {
        return $this->deployed_duration_ms;
    }

    /**
     * <code>int64 deployed_duration_ms = 40;</code>
     */
    public function setDeployedDurationMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->deployed_duration_ms = $var;
    }

    /**
     * <code>int64 deployed_returned_timestamp_ms = 41;</code>
     */
    public function getDeployedReturnedTimestampMs()
    {
        return $this->deployed_returned_timestamp_ms;
    }

    /**
     * <code>int64 deployed_returned_timestamp_ms = 41;</code>
     */
    public function setDeployedReturnedTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->deployed_returned_timestamp_ms = $var;
    }

    /**
     * <code>float cp_multiplier_before_trading = 42;</code>
     */
    public function getCpMultiplierBeforeTrading()
    {
        return $this->cp_multiplier_before_trading;
    }

    /**
     * <code>float cp_multiplier_before_trading = 42;</code>
     */
    public function setCpMultiplierBeforeTrading($var)
    {
        GPBUtil::checkFloat($var);
        $this->cp_multiplier_before_trading = $var;
    }

    /**
     * <code>int32 original_owner_hash = 43;</code>
     */
    public function getOriginalOwnerHash()
    {
        return $this->original_owner_hash;
    }

    /**
     * <code>int32 original_owner_hash = 43;</code>
     */
    public function setOriginalOwnerHash($var)
    {
        GPBUtil::checkInt32($var);
        $this->original_owner_hash = $var;
    }

    /**
     * <code>string original_owner_nickname = 44;</code>
     */
    public function getOriginalOwnerNickname()
    {
        return $this->original_owner_nickname;
    }

    /**
     * <code>string original_owner_nickname = 44;</code>
     */
    public function setOriginalOwnerNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_owner_nickname = $var;
    }

    /**
     * <code>int64 traded_time_ms = 45;</code>
     */
    public function getTradedTimeMs()
    {
        return $this->traded_time_ms;
    }

    /**
     * <code>int64 traded_time_ms = 45;</code>
     */
    public function setTradedTimeMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->traded_time_ms = $var;
    }

}

