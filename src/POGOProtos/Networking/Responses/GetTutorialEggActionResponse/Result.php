<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetTutorialEggActionResponse.proto

namespace POGOProtos\Networking\Responses\GetTutorialEggActionResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetTutorialEggActionResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_PLAYER_ALREADY_HAS_TUTORIAL_EGG = 2;</code>
     */
    const ERROR_PLAYER_ALREADY_HAS_TUTORIAL_EGG = 2;
    /**
     * Generated from protobuf enum <code>ERROR_FAILED_TO_ADD_EGG = 3;</code>
     */
    const ERROR_FAILED_TO_ADD_EGG = 3;
    /**
     * Generated from protobuf enum <code>ERROR_NOT_V2_FLOW = 4;</code>
     */
    const ERROR_NOT_V2_FLOW = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\GetTutorialEggActionResponse_Result::class);

