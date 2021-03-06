<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetTradingResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetTradingResponse</code>
 */
class GetTradingResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetTradingResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.Trading trading = 2;</code>
     */
    private $trading = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Trading\Trading $trading
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetTradingResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetTradingResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetTradingResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetTradingResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.Trading trading = 2;</code>
     * @return \POGOProtos\Data\Trading\Trading
     */
    public function getTrading()
    {
        return $this->trading;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.Trading trading = 2;</code>
     * @param \POGOProtos\Data\Trading\Trading $var
     * @return $this
     */
    public function setTrading($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Trading\Trading::class);
        $this->trading = $var;

        return $this;
    }

}

