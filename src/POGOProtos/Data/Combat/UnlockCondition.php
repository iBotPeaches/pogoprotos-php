<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Combat/UnlockCondition.proto

namespace POGOProtos\Data\Combat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Combat.UnlockCondition</code>
 */
class UnlockCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ConditionType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>int32 min_pokemon_count = 2;</code>
     */
    private $min_pokemon_count = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPlayerLevel with_player_level = 3;</code>
     */
    private $with_player_level = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCpLimit with_pokemon_cp_limit = 4;</code>
     */
    private $with_pokemon_cp_limit = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonType with_pokemon_type = 5;</code>
     */
    private $with_pokemon_type = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCategory with_pokemon_category = 6;</code>
     */
    private $with_pokemon_category = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $min_pokemon_count
     *     @type \POGOProtos\Data\Combat\WithPlayerLevel $with_player_level
     *     @type \POGOProtos\Data\Combat\WithPokemonCpLimit $with_pokemon_cp_limit
     *     @type \POGOProtos\Data\Combat\WithPokemonType $with_pokemon_type
     *     @type \POGOProtos\Data\Combat\WithPokemonCategory $with_pokemon_category
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Combat\UnlockCondition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ConditionType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ConditionType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\ConditionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_pokemon_count = 2;</code>
     * @return int
     */
    public function getMinPokemonCount()
    {
        return $this->min_pokemon_count;
    }

    /**
     * Generated from protobuf field <code>int32 min_pokemon_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPokemonCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_pokemon_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPlayerLevel with_player_level = 3;</code>
     * @return \POGOProtos\Data\Combat\WithPlayerLevel
     */
    public function getWithPlayerLevel()
    {
        return $this->with_player_level;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPlayerLevel with_player_level = 3;</code>
     * @param \POGOProtos\Data\Combat\WithPlayerLevel $var
     * @return $this
     */
    public function setWithPlayerLevel($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\WithPlayerLevel::class);
        $this->with_player_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCpLimit with_pokemon_cp_limit = 4;</code>
     * @return \POGOProtos\Data\Combat\WithPokemonCpLimit
     */
    public function getWithPokemonCpLimit()
    {
        return $this->with_pokemon_cp_limit;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCpLimit with_pokemon_cp_limit = 4;</code>
     * @param \POGOProtos\Data\Combat\WithPokemonCpLimit $var
     * @return $this
     */
    public function setWithPokemonCpLimit($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\WithPokemonCpLimit::class);
        $this->with_pokemon_cp_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonType with_pokemon_type = 5;</code>
     * @return \POGOProtos\Data\Combat\WithPokemonType
     */
    public function getWithPokemonType()
    {
        return $this->with_pokemon_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonType with_pokemon_type = 5;</code>
     * @param \POGOProtos\Data\Combat\WithPokemonType $var
     * @return $this
     */
    public function setWithPokemonType($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\WithPokemonType::class);
        $this->with_pokemon_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCategory with_pokemon_category = 6;</code>
     * @return \POGOProtos\Data\Combat\WithPokemonCategory
     */
    public function getWithPokemonCategory()
    {
        return $this->with_pokemon_category;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.WithPokemonCategory with_pokemon_category = 6;</code>
     * @param \POGOProtos\Data\Combat\WithPokemonCategory $var
     * @return $this
     */
    public function setWithPokemonCategory($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\WithPokemonCategory::class);
        $this->with_pokemon_category = $var;

        return $this;
    }

}
