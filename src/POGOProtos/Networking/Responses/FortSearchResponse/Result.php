<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortSearchResponse.proto

namespace POGOProtos\Networking\Responses\FortSearchResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.FortSearchResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>NO_RESULT_SET = 0;</code>
     */
    const NO_RESULT_SET = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>OUT_OF_RANGE = 2;</code>
     */
    const OUT_OF_RANGE = 2;
    /**
     * Generated from protobuf enum <code>IN_COOLDOWN_PERIOD = 3;</code>
     */
    const IN_COOLDOWN_PERIOD = 3;
    /**
     * Generated from protobuf enum <code>INVENTORY_FULL = 4;</code>
     */
    const INVENTORY_FULL = 4;
    /**
     * Generated from protobuf enum <code>EXCEEDED_DAILY_LIMIT = 5;</code>
     */
    const EXCEEDED_DAILY_LIMIT = 5;
    /**
     * Generated from protobuf enum <code>POI_INACCESSIBLE = 6;</code>
     */
    const POI_INACCESSIBLE = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\FortSearchResponse_Result::class);

