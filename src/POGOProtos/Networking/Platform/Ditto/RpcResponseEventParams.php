<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Ditto/RpcResponseEventParams.proto

namespace POGOProtos\Networking\Platform\Ditto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Ditto.RpcResponseEventParams</code>
 */
class RpcResponseEventParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 rpc_id = 1;</code>
     */
    private $rpc_id = 0;
    /**
     * <code>uint32 status = 2;</code>
     */
    private $status = 0;
    /**
     * <code>repeated bytes payloads = 3;</code>
     */
    private $payloads;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Platform\Ditto\RpcResponseEventParams::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 rpc_id = 1;</code>
     */
    public function getRpcId()
    {
        return $this->rpc_id;
    }

    /**
     * <code>uint32 rpc_id = 1;</code>
     */
    public function setRpcId($var)
    {
        GPBUtil::checkUint32($var);
        $this->rpc_id = $var;
    }

    /**
     * <code>uint32 status = 2;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>uint32 status = 2;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->status = $var;
    }

    /**
     * <code>repeated bytes payloads = 3;</code>
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * <code>repeated bytes payloads = 3;</code>
     */
    public function setPayloads(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->payloads = $var;
    }

}

