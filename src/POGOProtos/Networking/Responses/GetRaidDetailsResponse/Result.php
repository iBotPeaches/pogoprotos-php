<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetRaidDetailsResponse.proto

namespace POGOProtos\Networking\Responses\GetRaidDetailsResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetRaidDetailsResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_NOT_IN_RANGE = 2;</code>
     */
    const ERROR_NOT_IN_RANGE = 2;
    /**
     * Generated from protobuf enum <code>ERROR_RAID_COMPLETED = 3;</code>
     */
    const ERROR_RAID_COMPLETED = 3;
    /**
     * Generated from protobuf enum <code>ERROR_RAID_UNAVAILABLE = 4;</code>
     */
    const ERROR_RAID_UNAVAILABLE = 4;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 5;</code>
     */
    const ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 5;
    /**
     * Generated from protobuf enum <code>ERROR_POI_INACCESSIBLE = 6;</code>
     */
    const ERROR_POI_INACCESSIBLE = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\GetRaidDetailsResponse_Result::class);

