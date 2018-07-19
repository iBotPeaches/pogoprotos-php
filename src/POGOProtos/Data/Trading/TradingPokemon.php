<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Trading/TradingPokemon.proto

namespace POGOProtos\Data\Trading;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Trading.TradingPokemon</code>
 */
class TradingPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>int32 pokedex_entry_number = 2;</code>
     */
    private $pokedex_entry_number = 0;
    /**
     * Generated from protobuf field <code>int32 original_cp = 3;</code>
     */
    private $original_cp = 0;
    /**
     * Generated from protobuf field <code>int32 adjusted_cp_min = 4;</code>
     */
    private $adjusted_cp_min = 0;
    /**
     * Generated from protobuf field <code>int32 adjusted_cp_max = 5;</code>
     */
    private $adjusted_cp_max = 0;
    /**
     * Generated from protobuf field <code>int32 original_stamina = 6;</code>
     */
    private $original_stamina = 0;
    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_min = 7;</code>
     */
    private $adjusted_stamina_min = 0;
    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_max = 8;</code>
     */
    private $adjusted_stamina_max = 0;
    /**
     * Generated from protobuf field <code>bool friend_level_cap = 9;</code>
     */
    private $friend_level_cap = false;
    /**
     * Generated from protobuf field <code>int32 move1 = 10;</code>
     */
    private $move1 = 0;
    /**
     * Generated from protobuf field <code>int32 move2 = 11;</code>
     */
    private $move2 = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 12;</code>
     */
    private $pokemon_display = null;
    /**
     * Generated from protobuf field <code>int64 captured_s2_cell_id = 13;</code>
     */
    private $captured_s2_cell_id = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData traded_pokemon = 14;</code>
     */
    private $traded_pokemon = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemData pokeball = 15;</code>
     */
    private $pokeball = null;
    /**
     * Generated from protobuf field <code>int32 individual_attack = 16;</code>
     */
    private $individual_attack = 0;
    /**
     * Generated from protobuf field <code>int32 individual_defense = 17;</code>
     */
    private $individual_defense = 0;
    /**
     * Generated from protobuf field <code>int32 individual_stamina = 18;</code>
     */
    private $individual_stamina = 0;
    /**
     * Generated from protobuf field <code>string nickname = 19;</code>
     */
    private $nickname = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pokemon_id
     *     @type int $pokedex_entry_number
     *     @type int $original_cp
     *     @type int $adjusted_cp_min
     *     @type int $adjusted_cp_max
     *     @type int $original_stamina
     *     @type int $adjusted_stamina_min
     *     @type int $adjusted_stamina_max
     *     @type bool $friend_level_cap
     *     @type int $move1
     *     @type int $move2
     *     @type \POGOProtos\Data\PokemonDisplay $pokemon_display
     *     @type int|string $captured_s2_cell_id
     *     @type \POGOProtos\Data\PokemonData $traded_pokemon
     *     @type \POGOProtos\Inventory\Item\ItemData $pokeball
     *     @type int $individual_attack
     *     @type int $individual_defense
     *     @type int $individual_stamina
     *     @type string $nickname
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Trading\TradingPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Generated from protobuf field <code>fixed64 pokemon_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_entry_number = 2;</code>
     * @return int
     */
    public function getPokedexEntryNumber()
    {
        return $this->pokedex_entry_number;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_entry_number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPokedexEntryNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokedex_entry_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 original_cp = 3;</code>
     * @return int
     */
    public function getOriginalCp()
    {
        return $this->original_cp;
    }

    /**
     * Generated from protobuf field <code>int32 original_cp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOriginalCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->original_cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_cp_min = 4;</code>
     * @return int
     */
    public function getAdjustedCpMin()
    {
        return $this->adjusted_cp_min;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_cp_min = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustedCpMin($var)
    {
        GPBUtil::checkInt32($var);
        $this->adjusted_cp_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_cp_max = 5;</code>
     * @return int
     */
    public function getAdjustedCpMax()
    {
        return $this->adjusted_cp_max;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_cp_max = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustedCpMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->adjusted_cp_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 original_stamina = 6;</code>
     * @return int
     */
    public function getOriginalStamina()
    {
        return $this->original_stamina;
    }

    /**
     * Generated from protobuf field <code>int32 original_stamina = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOriginalStamina($var)
    {
        GPBUtil::checkInt32($var);
        $this->original_stamina = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_min = 7;</code>
     * @return int
     */
    public function getAdjustedStaminaMin()
    {
        return $this->adjusted_stamina_min;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_min = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustedStaminaMin($var)
    {
        GPBUtil::checkInt32($var);
        $this->adjusted_stamina_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_max = 8;</code>
     * @return int
     */
    public function getAdjustedStaminaMax()
    {
        return $this->adjusted_stamina_max;
    }

    /**
     * Generated from protobuf field <code>int32 adjusted_stamina_max = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustedStaminaMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->adjusted_stamina_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool friend_level_cap = 9;</code>
     * @return bool
     */
    public function getFriendLevelCap()
    {
        return $this->friend_level_cap;
    }

    /**
     * Generated from protobuf field <code>bool friend_level_cap = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setFriendLevelCap($var)
    {
        GPBUtil::checkBool($var);
        $this->friend_level_cap = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 move1 = 10;</code>
     * @return int
     */
    public function getMove1()
    {
        return $this->move1;
    }

    /**
     * Generated from protobuf field <code>int32 move1 = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMove1($var)
    {
        GPBUtil::checkInt32($var);
        $this->move1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 move2 = 11;</code>
     * @return int
     */
    public function getMove2()
    {
        return $this->move2;
    }

    /**
     * Generated from protobuf field <code>int32 move2 = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMove2($var)
    {
        GPBUtil::checkInt32($var);
        $this->move2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 12;</code>
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonDisplay pokemon_display = 12;</code>
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
     * Generated from protobuf field <code>int64 captured_s2_cell_id = 13;</code>
     * @return int|string
     */
    public function getCapturedS2CellId()
    {
        return $this->captured_s2_cell_id;
    }

    /**
     * Generated from protobuf field <code>int64 captured_s2_cell_id = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapturedS2CellId($var)
    {
        GPBUtil::checkInt64($var);
        $this->captured_s2_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData traded_pokemon = 14;</code>
     * @return \POGOProtos\Data\PokemonData
     */
    public function getTradedPokemon()
    {
        return $this->traded_pokemon;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PokemonData traded_pokemon = 14;</code>
     * @param \POGOProtos\Data\PokemonData $var
     * @return $this
     */
    public function setTradedPokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->traded_pokemon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemData pokeball = 15;</code>
     * @return \POGOProtos\Inventory\Item\ItemData
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Item.ItemData pokeball = 15;</code>
     * @param \POGOProtos\Inventory\Item\ItemData $var
     * @return $this
     */
    public function setPokeball($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Item\ItemData::class);
        $this->pokeball = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 16;</code>
     * @return int
     */
    public function getIndividualAttack()
    {
        return $this->individual_attack;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 16;</code>
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
     * Generated from protobuf field <code>int32 individual_defense = 17;</code>
     * @return int
     */
    public function getIndividualDefense()
    {
        return $this->individual_defense;
    }

    /**
     * Generated from protobuf field <code>int32 individual_defense = 17;</code>
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
     * Generated from protobuf field <code>int32 individual_stamina = 18;</code>
     * @return int
     */
    public function getIndividualStamina()
    {
        return $this->individual_stamina;
    }

    /**
     * Generated from protobuf field <code>int32 individual_stamina = 18;</code>
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
     * Generated from protobuf field <code>string nickname = 19;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

}
