<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/PlatformClientActionsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.AddNewPoiResponse</code>
 */
class AddNewPoiResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.AddNewPoiResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * <code>repeated string message = 2;</code>
     */
    private $message;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\PlatformClientActionsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AddNewPoiResponse.Status status = 1;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AddNewPoiResponse.Status status = 1;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\AddNewPoiResponse_Status::class);
        $this->status = $var;
    }

    /**
     * <code>repeated string message = 2;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <code>repeated string message = 2;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message = $var;
    }

}

