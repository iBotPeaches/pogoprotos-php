<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/QuitCombatResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.QuitCombatResponse</code>
 */
class QuitCombatResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.QuitCombatResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat combat = 2;</code>
     */
    private $combat = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Combat\Combat $combat
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\QuitCombatResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.QuitCombatResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.QuitCombatResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\QuitCombatResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat combat = 2;</code>
     * @return \POGOProtos\Data\Combat\Combat
     */
    public function getCombat()
    {
        return $this->combat;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Combat.Combat combat = 2;</code>
     * @param \POGOProtos\Data\Combat\Combat $var
     * @return $this
     */
    public function setCombat($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Combat\Combat::class);
        $this->combat = $var;

        return $this;
    }

}

