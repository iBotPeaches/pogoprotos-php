<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/DeleteGiftFromInventoryResponse.proto

namespace POGOProtos\Networking\Responses\Social\DeleteGiftFromInventoryResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.Social.DeleteGiftFromInventoryResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>ERROR_UNKNOWN = 2;</code>
     */
    const ERROR_UNKNOWN = 2;
    /**
     * Generated from protobuf enum <code>ERROR_GIFT_DOES_NOT_EXIST = 3;</code>
     */
    const ERROR_GIFT_DOES_NOT_EXIST = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\Social\DeleteGiftFromInventoryResponse_Result::class);

