<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/DeleteGiftResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.DeleteGiftResponse</code>
 */
class DeleteGiftResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.DeleteGiftResponse.Result result = 1;</code>
     */
    private $result = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\DeleteGiftResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.DeleteGiftResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.DeleteGiftResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\DeleteGiftResponse_Result::class);
        $this->result = $var;
    }

}

