<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CollectDailyDefenderBonusResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse</code>
 */
class CollectDailyDefenderBonusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated string currency_type = 2;</code>
     */
    private $currency_type;
    /**
     * Generated from protobuf field <code>repeated int32 currency_awarded = 3;</code>
     */
    private $currency_awarded;
    /**
     * Generated from protobuf field <code>int32 defenders_count = 4;</code>
     */
    private $defenders_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $currency_type
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $currency_awarded
     *     @type int $defenders_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\CollectDailyDefenderBonusResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\CollectDailyDefenderBonusResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string currency_type = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurrencyType()
    {
        return $this->currency_type;
    }

    /**
     * Generated from protobuf field <code>repeated string currency_type = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurrencyType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->currency_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 currency_awarded = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurrencyAwarded()
    {
        return $this->currency_awarded;
    }

    /**
     * Generated from protobuf field <code>repeated int32 currency_awarded = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurrencyAwarded($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->currency_awarded = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 defenders_count = 4;</code>
     * @return int
     */
    public function getDefendersCount()
    {
        return $this->defenders_count;
    }

    /**
     * Generated from protobuf field <code>int32 defenders_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDefendersCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->defenders_count = $var;

        return $this;
    }

}

