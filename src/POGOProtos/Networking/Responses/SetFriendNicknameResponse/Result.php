<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SetFriendNicknameResponse.proto

namespace POGOProtos\Networking\Responses\SetFriendNicknameResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.SetFriendNicknameResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_NOT_FRIENDS = 3;</code>
     */
    const ERROR_NOT_FRIENDS = 3;
    /**
     * Generated from protobuf enum <code>ERROR_EXCEEDED_NICKNAME_LENGTH = 4;</code>
     */
    const ERROR_EXCEEDED_NICKNAME_LENGTH = 4;
    /**
     * Generated from protobuf enum <code>ERROR_SOCIAL_UPDATE = 5;</code>
     */
    const ERROR_SOCIAL_UPDATE = 5;
    /**
     * Generated from protobuf enum <code>ERROR_FILTERED_NICKNAME = 6;</code>
     */
    const ERROR_FILTERED_NICKNAME = 6;
    /**
     * Generated from protobuf enum <code>ERROR_EXCEEDED_CHANGE_LIMIT = 7;</code>
     */
    const ERROR_EXCEEDED_CHANGE_LIMIT = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\SetFriendNicknameResponse_Result::class);

