<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/AddLoginActionResponse.proto

namespace POGOProtos\Networking\Platform\Responses\AddLoginActionResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Responses.AddLoginActionResponse.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Generated from protobuf enum <code>AUTH_FAILURE = 1;</code>
     */
    const AUTH_FAILURE = 1;
    /**
     * Generated from protobuf enum <code>LOGIN_TAKEN = 2;</code>
     */
    const LOGIN_TAKEN = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \POGOProtos\Networking\Platform\Responses\AddLoginActionResponse_Status::class);

