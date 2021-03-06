<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/PlatformClientActionsResponse.proto

namespace POGOProtos\Networking\Responses\RedeemPasscodeResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.RedeemPasscodeResponse.Result</code>
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
     * Generated from protobuf enum <code>NOT_AVAILABLE = 2;</code>
     */
    const NOT_AVAILABLE = 2;
    /**
     * Generated from protobuf enum <code>OVER_INVENTORY_LIMIT = 3;</code>
     */
    const OVER_INVENTORY_LIMIT = 3;
    /**
     * Generated from protobuf enum <code>ALREADY_REDEEMED = 4;</code>
     */
    const ALREADY_REDEEMED = 4;
    /**
     * Generated from protobuf enum <code>OVER_PLAYER_REDEMPTION_LIMIT = 5;</code>
     */
    const OVER_PLAYER_REDEMPTION_LIMIT = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\RedeemPasscodeResponse_Result::class);

