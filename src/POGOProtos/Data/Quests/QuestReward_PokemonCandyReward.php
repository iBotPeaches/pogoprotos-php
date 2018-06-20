<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestReward.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Quests.QuestReward.PokemonCandyReward</code>
 */
class QuestReward_PokemonCandyReward extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>int32 amount = 2;</code>
     */
    private $amount = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Quests\QuestReward::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;
    }

    /**
     * <code>int32 amount = 2;</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>int32 amount = 2;</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;
    }

}

