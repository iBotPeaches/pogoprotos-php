<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetBuddyWalkedResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetBuddyWalkedResponse</code>
 */
class GetBuddyWalkedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
     */
    private $family_candy_id = 0;
    /**
     * Generated from protobuf field <code>int32 candy_earned_count = 3;</code>
     */
    private $candy_earned_count = 0;
    /**
     * Generated from protobuf field <code>double km_remaining = 4;</code>
     */
    private $km_remaining = 0.0;
    /**
     * Generated from protobuf field <code>double last_km_awarded = 5;</code>
     */
    private $last_km_awarded = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type int $family_candy_id
     *     @type int $candy_earned_count
     *     @type float $km_remaining
     *     @type float $last_km_awarded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetBuddyWalkedResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
     * @return int
     */
    public function getFamilyCandyId()
    {
        return $this->family_candy_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
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
     * Generated from protobuf field <code>int32 candy_earned_count = 3;</code>
     * @return int
     */
    public function getCandyEarnedCount()
    {
        return $this->candy_earned_count;
    }

    /**
     * Generated from protobuf field <code>int32 candy_earned_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCandyEarnedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_earned_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double km_remaining = 4;</code>
     * @return float
     */
    public function getKmRemaining()
    {
        return $this->km_remaining;
    }

    /**
     * Generated from protobuf field <code>double km_remaining = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setKmRemaining($var)
    {
        GPBUtil::checkDouble($var);
        $this->km_remaining = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double last_km_awarded = 5;</code>
     * @return float
     */
    public function getLastKmAwarded()
    {
        return $this->last_km_awarded;
    }

    /**
     * Generated from protobuf field <code>double last_km_awarded = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setLastKmAwarded($var)
    {
        GPBUtil::checkDouble($var);
        $this->last_km_awarded = $var;

        return $this;
    }

}

