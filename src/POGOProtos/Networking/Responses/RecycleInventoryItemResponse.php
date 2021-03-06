<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/RecycleInventoryItemResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.RecycleInventoryItemResponse</code>
 */
class RecycleInventoryItemResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>int32 new_count = 2;</code>
     */
    private $new_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type int $new_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\RecycleInventoryItemResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\RecycleInventoryItemResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 new_count = 2;</code>
     * @return int
     */
    public function getNewCount()
    {
        return $this->new_count;
    }

    /**
     * Generated from protobuf field <code>int32 new_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNewCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_count = $var;

        return $this;
    }

}

