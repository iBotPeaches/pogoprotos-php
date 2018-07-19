<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GymFeedPokemonResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GymFeedPokemonResponse</code>
 */
class GymFeedPokemonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     */
    private $gym_status_and_defenders = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     */
    private $awarded_gym_badge = null;
    /**
     * Generated from protobuf field <code>int32 stardust_awarded = 4;</code>
     */
    private $stardust_awarded = 0;
    /**
     * Generated from protobuf field <code>int32 xp_awarded = 5;</code>
     */
    private $xp_awarded = 0;
    /**
     * Generated from protobuf field <code>int32 num_candy_awarded = 6;</code>
     */
    private $num_candy_awarded = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     */
    private $family_candy_id = 0;
    /**
     * Generated from protobuf field <code>int64 cooldown_complete = 8;</code>
     */
    private $cooldown_complete = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Gym\GymStatusAndDefenders $gym_status_and_defenders
     *     @type \POGOProtos\Data\Badge\AwardedGymBadge $awarded_gym_badge
     *     @type int $stardust_awarded
     *     @type int $xp_awarded
     *     @type int $num_candy_awarded
     *     @type int $family_candy_id
     *     @type int|string $cooldown_complete
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GymFeedPokemonResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GymFeedPokemonResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     * @return \POGOProtos\Data\Gym\GymStatusAndDefenders
     */
    public function getGymStatusAndDefenders()
    {
        return $this->gym_status_and_defenders;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymStatusAndDefenders gym_status_and_defenders = 2;</code>
     * @param \POGOProtos\Data\Gym\GymStatusAndDefenders $var
     * @return $this
     */
    public function setGymStatusAndDefenders($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Gym\GymStatusAndDefenders::class);
        $this->gym_status_and_defenders = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     * @return \POGOProtos\Data\Badge\AwardedGymBadge
     */
    public function getAwardedGymBadge()
    {
        return $this->awarded_gym_badge;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge awarded_gym_badge = 3;</code>
     * @param \POGOProtos\Data\Badge\AwardedGymBadge $var
     * @return $this
     */
    public function setAwardedGymBadge($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Badge\AwardedGymBadge::class);
        $this->awarded_gym_badge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stardust_awarded = 4;</code>
     * @return int
     */
    public function getStardustAwarded()
    {
        return $this->stardust_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 stardust_awarded = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStardustAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->stardust_awarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 xp_awarded = 5;</code>
     * @return int
     */
    public function getXpAwarded()
    {
        return $this->xp_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 xp_awarded = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setXpAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->xp_awarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_candy_awarded = 6;</code>
     * @return int
     */
    public function getNumCandyAwarded()
    {
        return $this->num_candy_awarded;
    }

    /**
     * Generated from protobuf field <code>int32 num_candy_awarded = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNumCandyAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_candy_awarded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     * @return int
     */
    public function getFamilyCandyId()
    {
        return $this->family_candy_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFamilyCandyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->family_candy_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 cooldown_complete = 8;</code>
     * @return int|string
     */
    public function getCooldownComplete()
    {
        return $this->cooldown_complete;
    }

    /**
     * Generated from protobuf field <code>int64 cooldown_complete = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCooldownComplete($var)
    {
        GPBUtil::checkInt64($var);
        $this->cooldown_complete = $var;

        return $this;
    }

}

