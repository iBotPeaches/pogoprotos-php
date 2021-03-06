<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GymBattleAttackResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GymBattleAttackResponse</code>
 */
class GymBattleAttackResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymBattleAttackResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleUpdate battle_update = 2;</code>
     */
    private $battle_update = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge gym_badge = 3;</code>
     */
    private $gym_badge = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Battle\BattleUpdate $battle_update
     *     @type \POGOProtos\Data\Badge\AwardedGymBadge $gym_badge
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GymBattleAttackResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymBattleAttackResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GymBattleAttackResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GymBattleAttackResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleUpdate battle_update = 2;</code>
     * @return \POGOProtos\Data\Battle\BattleUpdate
     */
    public function getBattleUpdate()
    {
        return $this->battle_update;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleUpdate battle_update = 2;</code>
     * @param \POGOProtos\Data\Battle\BattleUpdate $var
     * @return $this
     */
    public function setBattleUpdate($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleUpdate::class);
        $this->battle_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge gym_badge = 3;</code>
     * @return \POGOProtos\Data\Badge\AwardedGymBadge
     */
    public function getGymBadge()
    {
        return $this->gym_badge;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.AwardedGymBadge gym_badge = 3;</code>
     * @param \POGOProtos\Data\Badge\AwardedGymBadge $var
     * @return $this
     */
    public function setGymBadge($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Badge\AwardedGymBadge::class);
        $this->gym_badge = $var;

        return $this;
    }

}

