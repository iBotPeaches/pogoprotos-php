<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/PasscodeRewardsLogEntry.proto

namespace POGOProtos\Data\Logs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Logs.PasscodeRewardsLogEntry</code>
 */
class PasscodeRewardsLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.PasscodeRewardsLogEntry.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>string passcode = 2;</code>
     */
    private $passcode = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Redeem.RedeemPasscodeReward rewards = 3;</code>
     */
    private $rewards = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type string $passcode
     *     @type \POGOProtos\Data\Redeem\RedeemPasscodeReward $rewards
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Logs\PasscodeRewardsLogEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.PasscodeRewardsLogEntry.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Logs.PasscodeRewardsLogEntry.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Logs\PasscodeRewardsLogEntry_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string passcode = 2;</code>
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * Generated from protobuf field <code>string passcode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPasscode($var)
    {
        GPBUtil::checkString($var, True);
        $this->passcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Redeem.RedeemPasscodeReward rewards = 3;</code>
     * @return \POGOProtos\Data\Redeem\RedeemPasscodeReward
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Redeem.RedeemPasscodeReward rewards = 3;</code>
     * @param \POGOProtos\Data\Redeem\RedeemPasscodeReward $var
     * @return $this
     */
    public function setRewards($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Redeem\RedeemPasscodeReward::class);
        $this->rewards = $var;

        return $this;
    }

}

