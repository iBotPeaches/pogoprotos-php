<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/AttackRaidBattleResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.AttackRaidBattleResponse</code>
 */
class AttackRaidBattleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.AttackRaidBattleResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Battle.BattleUpdate battle_update = 2;</code>
     */
    private $battle_update = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Battle\BattleUpdate $battle_update
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\AttackRaidBattleResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.AttackRaidBattleResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.AttackRaidBattleResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\AttackRaidBattleResponse_Result::class);
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

}

