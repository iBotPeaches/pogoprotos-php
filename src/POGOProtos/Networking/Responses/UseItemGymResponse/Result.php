<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemGymResponse.proto

namespace POGOProtos\Networking\Responses\UseItemGymResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemGymResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_CANNOT_USE = 2;</code>
     */
    const ERROR_CANNOT_USE = 2;
    /**
     * Generated from protobuf enum <code>ERROR_NOT_IN_RANGE = 3;</code>
     */
    const ERROR_NOT_IN_RANGE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\UseItemGymResponse_Result::class);
