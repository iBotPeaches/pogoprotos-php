<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetIncensePokemonResponse.proto

namespace POGOProtos\Networking\Responses\GetIncensePokemonResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetIncensePokemonResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>INCENSE_ENCOUNTER_UNKNOWN = 0;</code>
     */
    const INCENSE_ENCOUNTER_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>INCENSE_ENCOUNTER_AVAILABLE = 1;</code>
     */
    const INCENSE_ENCOUNTER_AVAILABLE = 1;
    /**
     * Generated from protobuf enum <code>INCENSE_ENCOUNTER_NOT_AVAILABLE = 2;</code>
     */
    const INCENSE_ENCOUNTER_NOT_AVAILABLE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\GetIncensePokemonResponse_Result::class);

