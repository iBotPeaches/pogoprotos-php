<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymStatusAndDefenders.proto

namespace POGOProtos\Data\Gym;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Gym.GymStatusAndDefenders</code>
 */
class GymStatusAndDefenders extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Map.Fort.FortData pokemon_fort_proto = 1;</code>
     */
    private $pokemon_fort_proto = null;
    /**
     * <code>repeated .POGOProtos.Data.Gym.GymDefender gym_defender = 2;</code>
     */
    private $gym_defender;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Gym\GymStatusAndDefenders::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Map.Fort.FortData pokemon_fort_proto = 1;</code>
     */
    public function getPokemonFortProto()
    {
        return $this->pokemon_fort_proto;
    }

    /**
     * <code>.POGOProtos.Map.Fort.FortData pokemon_fort_proto = 1;</code>
     */
    public function setPokemonFortProto(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Map\Fort\FortData::class);
        $this->pokemon_fort_proto = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Gym.GymDefender gym_defender = 2;</code>
     */
    public function getGymDefender()
    {
        return $this->gym_defender;
    }

    /**
     * <code>repeated .POGOProtos.Data.Gym.GymDefender gym_defender = 2;</code>
     */
    public function setGymDefender(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Gym\GymDefender::class);
        $this->gym_defender = $var;
    }

}

