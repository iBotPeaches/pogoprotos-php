<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Ditto/RpcResponseEventParams.proto

namespace POGOProtos\Networking\Platform\Ditto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Ditto.RpcResponseEventParams</code>
 */
class RpcResponseEventParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 rpc_id = 1;</code>
     */
    private $rpc_id = 0;
    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>repeated bytes payloads = 3;</code>
     */
    private $payloads;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rpc_id
     *     @type int $status
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $payloads
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Ditto\RpcResponseEventParams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 rpc_id = 1;</code>
     * @return int
     */
    public function getRpcId()
    {
        return $this->rpc_id;
    }

    /**
     * Generated from protobuf field <code>uint32 rpc_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRpcId($var)
    {
        GPBUtil::checkUint32($var);
        $this->rpc_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes payloads = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * Generated from protobuf field <code>repeated bytes payloads = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayloads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->payloads = $arr;

        return $this;
    }

}
