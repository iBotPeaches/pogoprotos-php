<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemXpBoostResponse.proto

namespace POGOProtos\Networking\Responses\UseItemXpBoostResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemXpBoostResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_INVALID_ITEM_TYPE = 2;</code>
     */
    const ERROR_INVALID_ITEM_TYPE = 2;
    /**
     * Generated from protobuf enum <code>ERROR_XP_BOOST_ALREADY_ACTIVE = 3;</code>
     */
    const ERROR_XP_BOOST_ALREADY_ACTIVE = 3;
    /**
     * Generated from protobuf enum <code>ERROR_NO_ITEMS_REMAINING = 4;</code>
     */
    const ERROR_NO_ITEMS_REMAINING = 4;
    /**
     * Generated from protobuf enum <code>ERROR_LOCATION_UNSET = 5;</code>
     */
    const ERROR_LOCATION_UNSET = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\UseItemXpBoostResponse_Result::class);

