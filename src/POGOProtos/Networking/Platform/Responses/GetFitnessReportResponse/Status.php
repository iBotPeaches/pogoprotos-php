<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/GetFitnessReportResponse.proto

namespace POGOProtos\Networking\Platform\Responses\GetFitnessReportResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Responses.GetFitnessReportResponse.Status</code>
 */
class Status
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
     * Generated from protobuf enum <code>ERROR_PLAYER_NOT_FOUND = 2;</code>
     */
    const ERROR_PLAYER_NOT_FOUND = 2;
    /**
     * Generated from protobuf enum <code>ERROR_RECORDS_NOT_FOUND = 3;</code>
     */
    const ERROR_RECORDS_NOT_FOUND = 3;
    /**
     * Generated from protobuf enum <code>ERROR_INVALID_WINDOW = 4;</code>
     */
    const ERROR_INVALID_WINDOW = 4;
    /**
     * Generated from protobuf enum <code>ERROR_UNKNOWN = 5;</code>
     */
    const ERROR_UNKNOWN = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \POGOProtos\Networking\Platform\Responses\GetFitnessReportResponse_Status::class);

