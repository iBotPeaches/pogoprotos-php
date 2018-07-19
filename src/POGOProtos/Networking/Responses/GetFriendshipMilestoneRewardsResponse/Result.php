<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetFriendshipMilestoneRewardsResponse.proto

namespace POGOProtos\Networking\Responses\GetFriendshipMilestoneRewardsResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetFriendshipMilestoneRewardsResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_MILESTONE_ALREADY_AWARDED = 4;</code>
     */
    const ERROR_MILESTONE_ALREADY_AWARDED = 4;
    /**
     * Generated from protobuf enum <code>ERROR_FAILED_TO_UPDATE = 5;</code>
     */
    const ERROR_FAILED_TO_UPDATE = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\GetFriendshipMilestoneRewardsResponse_Result::class);

