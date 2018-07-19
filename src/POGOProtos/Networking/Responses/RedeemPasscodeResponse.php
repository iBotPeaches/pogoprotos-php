<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/PlatformClientActionsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.RedeemPasscodeResponse</code>
 */
class RedeemPasscodeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     */
    private $acquired_item;
    /**
     * Generated from protobuf field <code>bytes acquired_items_proto = 3;</code>
     */
    private $acquired_items_proto = '';
    /**
     * Generated from protobuf field <code>string passcode = 4;</code>
     */
    private $passcode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Networking\Responses\RedeemPasscodeResponse\AcquiredItem[]|\Google\Protobuf\Internal\RepeatedField $acquired_item
     *     @type string $acquired_items_proto
     *     @type string $passcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\PlatformClientActionsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\RedeemPasscodeResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAcquiredItem()
    {
        return $this->acquired_item;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     * @param \POGOProtos\Networking\Responses\RedeemPasscodeResponse\AcquiredItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAcquiredItem($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\RedeemPasscodeResponse\AcquiredItem::class);
        $this->acquired_item = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes acquired_items_proto = 3;</code>
     * @return string
     */
    public function getAcquiredItemsProto()
    {
        return $this->acquired_items_proto;
    }

    /**
     * Generated from protobuf field <code>bytes acquired_items_proto = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAcquiredItemsProto($var)
    {
        GPBUtil::checkString($var, False);
        $this->acquired_items_proto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string passcode = 4;</code>
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * Generated from protobuf field <code>string passcode = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPasscode($var)
    {
        GPBUtil::checkString($var, True);
        $this->passcode = $var;

        return $this;
    }

}

