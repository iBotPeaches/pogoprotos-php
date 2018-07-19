<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SendGiftResponse.proto

namespace POGOProtos\Networking\Responses\SendGiftResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.SendGiftResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_PLAYER_DOES_NOT_EXIST = 3;</code>
     */
    const ERROR_PLAYER_DOES_NOT_EXIST = 3;
    /**
     * Generated from protobuf enum <code>ERROR_GIFT_DOES_NOT_EXIST = 4;</code>
     */
    const ERROR_GIFT_DOES_NOT_EXIST = 4;
    /**
     * Generated from protobuf enum <code>ERROR_GIFT_ALREADY_SENT_TODAY = 5;</code>
     */
    const ERROR_GIFT_ALREADY_SENT_TODAY = 5;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_HAS_UNOPENED_GIFT = 6;</code>
     */
    const ERROR_PLAYER_HAS_UNOPENED_GIFT = 6;
    /**
     * Generated from protobuf enum <code>ERROR_FRIEND_UPDATE = 7;</code>
     */
    const ERROR_FRIEND_UPDATE = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\SendGiftResponse_Result::class);

