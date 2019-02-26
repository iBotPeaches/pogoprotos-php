<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Beluga/BelugaPokemon.proto

namespace POGOProtos\Data\Beluga;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Beluga.BelugaPokemon</code>
 */
class BelugaPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string trainer_name = 1;</code>
     */
    private $trainer_name = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.TrainerGender trainer_gender = 2;</code>
     */
    private $trainer_gender = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor trainer_team = 3;</code>
     */
    private $trainer_team = 0;
    /**
     * Generated from protobuf field <code>int32 trainer_level = 4;</code>
     */
    private $trainer_level = 0;
    /**
     * Generated from protobuf field <code>int32 pokedex_id = 5;</code>
     */
    private $pokedex_id = 0;
    /**
     * Generated from protobuf field <code>int32 cp = 6;</code>
     */
    private $cp = 0;
    /**
     * Generated from protobuf field <code>float pokemon_level = 7;</code>
     */
    private $pokemon_level = 0.0;
    /**
     * Generated from protobuf field <code>int32 max_hp = 8;</code>
     */
    private $max_hp = 0;
    /**
     * Generated from protobuf field <code>double origin_lat = 9;</code>
     */
    private $origin_lat = 0.0;
    /**
     * Generated from protobuf field <code>double origin_lng = 10;</code>
     */
    private $origin_lng = 0.0;
    /**
     * Generated from protobuf field <code>float height = 11;</code>
     */
    private $height = 0.0;
    /**
     * Generated from protobuf field <code>float weight = 12;</code>
     */
    private $weight = 0.0;
    /**
     * Generated from protobuf field <code>int32 individual_attack = 13;</code>
     */
    private $individual_attack = 0;
    /**
     * Generated from protobuf field <code>int32 individual_defense = 14;</code>
     */
    private $individual_defense = 0;
    /**
     * Generated from protobuf field <code>int32 individual_stamina = 15;</code>
     */
    private $individual_stamina = 0;
    /**
     * Generated from protobuf field <code>int32 creation_day = 16;</code>
     */
    private $creation_day = 0;
    /**
     * Generated from protobuf field <code>int32 creation_month = 17;</code>
     */
    private $creation_month = 0;
    /**
     * Generated from protobuf field <code>int32 creation_year = 18;</code>
     */
    private $creation_year = 0;
    /**
     * Generated from protobuf field <code>string nickname = 19;</code>
     */
    private $nickname = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 20;</code>
     */
    private $gender = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 21;</code>
     */
    private $costume = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.PokemonForm form = 22;</code>
     */
    private $form = 0;
    /**
     * Generated from protobuf field <code>bool shiny = 23;</code>
     */
    private $shiny = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move1 = 24;</code>
     */
    private $move1 = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move2 = 25;</code>
     */
    private $move2 = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trainer_name
     *     @type int $trainer_gender
     *     @type int $trainer_team
     *     @type int $trainer_level
     *     @type int $pokedex_id
     *     @type int $cp
     *     @type float $pokemon_level
     *     @type int $max_hp
     *     @type float $origin_lat
     *     @type float $origin_lng
     *     @type float $height
     *     @type float $weight
     *     @type int $individual_attack
     *     @type int $individual_defense
     *     @type int $individual_stamina
     *     @type int $creation_day
     *     @type int $creation_month
     *     @type int $creation_year
     *     @type string $nickname
     *     @type int $gender
     *     @type int $costume
     *     @type int $form
     *     @type bool $shiny
     *     @type int $move1
     *     @type int $move2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Beluga\BelugaPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string trainer_name = 1;</code>
     * @return string
     */
    public function getTrainerName()
    {
        return $this->trainer_name;
    }

    /**
     * Generated from protobuf field <code>string trainer_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrainerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->trainer_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.TrainerGender trainer_gender = 2;</code>
     * @return int
     */
    public function getTrainerGender()
    {
        return $this->trainer_gender;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.TrainerGender trainer_gender = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTrainerGender($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Beluga\BelugaPokemon_TrainerGender::class);
        $this->trainer_gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor trainer_team = 3;</code>
     * @return int
     */
    public function getTrainerTeam()
    {
        return $this->trainer_team;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.TeamColor trainer_team = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTrainerTeam($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\TeamColor::class);
        $this->trainer_team = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 trainer_level = 4;</code>
     * @return int
     */
    public function getTrainerLevel()
    {
        return $this->trainer_level;
    }

    /**
     * Generated from protobuf field <code>int32 trainer_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTrainerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->trainer_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_id = 5;</code>
     * @return int
     */
    public function getPokedexId()
    {
        return $this->pokedex_id;
    }

    /**
     * Generated from protobuf field <code>int32 pokedex_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPokedexId($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokedex_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 6;</code>
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 6;</code>
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
     * Generated from protobuf field <code>float pokemon_level = 7;</code>
     * @return float
     */
    public function getPokemonLevel()
    {
        return $this->pokemon_level;
    }

    /**
     * Generated from protobuf field <code>float pokemon_level = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setPokemonLevel($var)
    {
        GPBUtil::checkFloat($var);
        $this->pokemon_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_hp = 8;</code>
     * @return int
     */
    public function getMaxHp()
    {
        return $this->max_hp;
    }

    /**
     * Generated from protobuf field <code>int32 max_hp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxHp($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double origin_lat = 9;</code>
     * @return float
     */
    public function getOriginLat()
    {
        return $this->origin_lat;
    }

    /**
     * Generated from protobuf field <code>double origin_lat = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginLat($var)
    {
        GPBUtil::checkDouble($var);
        $this->origin_lat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double origin_lng = 10;</code>
     * @return float
     */
    public function getOriginLng()
    {
        return $this->origin_lng;
    }

    /**
     * Generated from protobuf field <code>double origin_lng = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginLng($var)
    {
        GPBUtil::checkDouble($var);
        $this->origin_lng = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float height = 11;</code>
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>float height = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float weight = 12;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>float weight = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 13;</code>
     * @return int
     */
    public function getIndividualAttack()
    {
        return $this->individual_attack;
    }

    /**
     * Generated from protobuf field <code>int32 individual_attack = 13;</code>
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
     * Generated from protobuf field <code>int32 individual_defense = 14;</code>
     * @return int
     */
    public function getIndividualDefense()
    {
        return $this->individual_defense;
    }

    /**
     * Generated from protobuf field <code>int32 individual_defense = 14;</code>
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
     * Generated from protobuf field <code>int32 individual_stamina = 15;</code>
     * @return int
     */
    public function getIndividualStamina()
    {
        return $this->individual_stamina;
    }

    /**
     * Generated from protobuf field <code>int32 individual_stamina = 15;</code>
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
     * Generated from protobuf field <code>int32 creation_day = 16;</code>
     * @return int
     */
    public function getCreationDay()
    {
        return $this->creation_day;
    }

    /**
     * Generated from protobuf field <code>int32 creation_day = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setCreationDay($var)
    {
        GPBUtil::checkInt32($var);
        $this->creation_day = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 creation_month = 17;</code>
     * @return int
     */
    public function getCreationMonth()
    {
        return $this->creation_month;
    }

    /**
     * Generated from protobuf field <code>int32 creation_month = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setCreationMonth($var)
    {
        GPBUtil::checkInt32($var);
        $this->creation_month = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 creation_year = 18;</code>
     * @return int
     */
    public function getCreationYear()
    {
        return $this->creation_year;
    }

    /**
     * Generated from protobuf field <code>int32 creation_year = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setCreationYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->creation_year = $var;

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

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 20;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Gender gender = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 21;</code>
     * @return int
     */
    public function getCostume()
    {
        return $this->costume;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.Costume costume = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setCostume($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Costume::class);
        $this->costume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.PokemonForm form = 22;</code>
     * @return int
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaPokemon.PokemonForm form = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setForm($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Beluga\BelugaPokemon_PokemonForm::class);
        $this->form = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool shiny = 23;</code>
     * @return bool
     */
    public function getShiny()
    {
        return $this->shiny;
    }

    /**
     * Generated from protobuf field <code>bool shiny = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setShiny($var)
    {
        GPBUtil::checkBool($var);
        $this->shiny = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move1 = 24;</code>
     * @return int
     */
    public function getMove1()
    {
        return $this->move1;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move1 = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setMove1($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move2 = 25;</code>
     * @return int
     */
    public function getMove2()
    {
        return $this->move2;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonMove move2 = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setMove2($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMove::class);
        $this->move2 = $var;

        return $this;
    }

}

