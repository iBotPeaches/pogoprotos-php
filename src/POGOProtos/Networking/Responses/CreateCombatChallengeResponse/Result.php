<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CreateCombatChallengeResponse.proto

namespace POGOProtos\Networking\Responses\CreateCombatChallengeResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.CreateCombatChallengeResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_INVALID_CHALLENGE_STATE = 2;</code>
     */
    const ERROR_INVALID_CHALLENGE_STATE = 2;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 3;</code>
     */
    const ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 3;
    /**
     * Generated from protobuf enum <code>ERROR_ACCESS_DENIED = 4;</code>
     */
    const ERROR_ACCESS_DENIED = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\CreateCombatChallengeResponse_Result::class);

