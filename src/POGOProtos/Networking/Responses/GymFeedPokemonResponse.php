<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GymFeedPokemonResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GymFeedPokemonResponse</code>
 */
class GymFeedPokemonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     */
    private $gym_status_and_defenders = null;
    /**
     * <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     */
    private $awarded_gym_badge = null;
    /**
     * <code>int32 stardust_awarded = 4;</code>
     */
    private $stardust_awarded = 0;
    /**
     * <code>int32 xp_awarded = 5;</code>
     */
    private $xp_awarded = 0;
    /**
     * <code>int32 num_candy_awarded = 6;</code>
     */
    private $num_candy_awarded = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     */
    private $family_candy_id = 0;
    /**
     * <code>int64 cooldown_complete = 8;</code>
     */
    private $cooldown_complete = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GymFeedPokemonResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GymFeedPokemonResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     */
    public function getGymStatusAndDefenders()
    {
        return $this->gym_status_and_defenders;
    }

    /**
     * <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     */
    public function setGymStatusAndDefenders(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Gym\GymStatusAndDefenders::class);
        $this->gym_status_and_defenders = $var;
    }

    /**
     * <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     */
    public function getAwardedGymBadge()
    {
        return $this->awarded_gym_badge;
    }

    /**
     * <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     */
    public function setAwardedGymBadge(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Badge\AwardedGymBadge::class);
        $this->awarded_gym_badge = $var;
    }

    /**
     * <code>int32 stardust_awarded = 4;</code>
     */
    public function getStardustAwarded()
    {
        return $this->stardust_awarded;
    }

    /**
     * <code>int32 stardust_awarded = 4;</code>
     */
    public function setStardustAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->stardust_awarded = $var;
    }

    /**
     * <code>int32 xp_awarded = 5;</code>
     */
    public function getXpAwarded()
    {
        return $this->xp_awarded;
    }

    /**
     * <code>int32 xp_awarded = 5;</code>
     */
    public function setXpAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->xp_awarded = $var;
    }

    /**
     * <code>int32 num_candy_awarded = 6;</code>
     */
    public function getNumCandyAwarded()
    {
        return $this->num_candy_awarded;
    }

    /**
     * <code>int32 num_candy_awarded = 6;</code>
     */
    public function setNumCandyAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_candy_awarded = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     */
    public function getFamilyCandyId()
    {
        return $this->family_candy_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     */
    public function setFamilyCandyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->family_candy_id = $var;
    }

    /**
     * <code>int64 cooldown_complete = 8;</code>
     */
    public function getCooldownComplete()
    {
        return $this->cooldown_complete;
    }

    /**
     * <code>int64 cooldown_complete = 8;</code>
     */
    public function setCooldownComplete($var)
    {
        GPBUtil::checkInt64($var);
        $this->cooldown_complete = $var;
    }

}

