<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetMapObjectsResponse.proto

namespace POGOProtos\Networking\Responses\GetMapObjectsResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetMapObjectsResponse.TimeOfDay</code>
 */
class TimeOfDay
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>DAY = 1;</code>
     */
    const DAY = 1;
    /**
     * Generated from protobuf enum <code>NIGHT = 2;</code>
     */
    const NIGHT = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeOfDay::class, \POGOProtos\Networking\Responses\GetMapObjectsResponse_TimeOfDay::class);
