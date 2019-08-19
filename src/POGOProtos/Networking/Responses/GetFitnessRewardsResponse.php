<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetFitnessRewardsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetFitnessRewardsResponse</code>
 */
class GetFitnessRewardsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetFitnessRewardsResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 2;</code>
     */
    private $rewards = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Inventory\Loot $rewards
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetFitnessRewardsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetFitnessRewardsResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetFitnessRewardsResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetFitnessRewardsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 2;</code>
     * @return \POGOProtos\Inventory\Loot
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot rewards = 2;</code>
     * @param \POGOProtos\Inventory\Loot $var
     * @return $this
     */
    public function setRewards($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Loot::class);
        $this->rewards = $var;

        return $this;
    }

}
