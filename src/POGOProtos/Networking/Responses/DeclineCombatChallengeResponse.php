<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/DeclineCombatChallengeResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.DeclineCombatChallengeResponse</code>
 */
class DeclineCombatChallengeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.DeclineCombatChallengeResponse.Result result = 1;</code>
     */
    private $result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\DeclineCombatChallengeResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.DeclineCombatChallengeResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.DeclineCombatChallengeResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\DeclineCombatChallengeResponse_Result::class);
        $this->result = $var;

        return $this;
    }

}

