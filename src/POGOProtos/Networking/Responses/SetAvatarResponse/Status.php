<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SetAvatarResponse.proto

namespace POGOProtos\Networking\Responses\SetAvatarResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.SetAvatarResponse.Status</code>
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
     * Generated from protobuf enum <code>AVATAR_ALREADY_SET = 2;</code>
     */
    const AVATAR_ALREADY_SET = 2;
    /**
     * Generated from protobuf enum <code>FAILURE = 3;</code>
     */
    const FAILURE = 3;
    /**
     * Generated from protobuf enum <code>SLOT_NOT_ALLOWED = 4;</code>
     */
    const SLOT_NOT_ALLOWED = 4;
    /**
     * Generated from protobuf enum <code>ITEM_NOT_OWNED = 5;</code>
     */
    const ITEM_NOT_OWNED = 5;
    /**
     * Generated from protobuf enum <code>INVALID_AVATAR_TYPE = 6;</code>
     */
    const INVALID_AVATAR_TYPE = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \POGOProtos\Networking\Responses\SetAvatarResponse_Status::class);
