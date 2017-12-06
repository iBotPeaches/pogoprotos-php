<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/RedeemPasscodeResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.RedeemPasscodeResponse</code>
 */
class RedeemPasscodeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     */
    private $acquired_item;
    /**
     * <code>bytes acquired_items_proto = 3;</code>
     */
    private $acquired_items_proto = '';
    /**
     * <code>string passcode = 4;</code>
     */
    private $passcode = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\RedeemPasscodeResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\RedeemPasscodeResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     */
    public function getAcquiredItem()
    {
        return $this->acquired_item;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Responses.RedeemPasscodeResponse.AcquiredItem acquired_item = 2;</code>
     */
    public function setAcquiredItem(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Responses\RedeemPasscodeResponse_AcquiredItem::class);
        $this->acquired_item = $var;
    }

    /**
     * <code>bytes acquired_items_proto = 3;</code>
     */
    public function getAcquiredItemsProto()
    {
        return $this->acquired_items_proto;
    }

    /**
     * <code>bytes acquired_items_proto = 3;</code>
     */
    public function setAcquiredItemsProto($var)
    {
        GPBUtil::checkString($var, False);
        $this->acquired_items_proto = $var;
    }

    /**
     * <code>string passcode = 4;</code>
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * <code>string passcode = 4;</code>
     */
    public function setPasscode($var)
    {
        GPBUtil::checkString($var, True);
        $this->passcode = $var;
    }

}
