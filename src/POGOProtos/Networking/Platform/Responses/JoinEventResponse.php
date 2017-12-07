<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/JoinEventResponse.proto

namespace POGOProtos\Networking\Platform\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Responses.JoinEventResponse</code>
 */
class JoinEventResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Platform.Responses.JoinEventResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * <code>string qrcode = 4;</code>
     */
    private $qrcode = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Platform\Responses\JoinEventResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Responses.JoinEventResponse.Status status = 1;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Responses.JoinEventResponse.Status status = 1;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Platform\Responses\JoinEventResponse_Status::class);
        $this->status = $var;
    }

    /**
     * <code>string qrcode = 4;</code>
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * <code>string qrcode = 4;</code>
     */
    public function setQrcode($var)
    {
        GPBUtil::checkString($var, True);
        $this->qrcode = $var;
    }

}

