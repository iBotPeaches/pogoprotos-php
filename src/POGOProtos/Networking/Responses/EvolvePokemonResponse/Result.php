<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EvolvePokemonResponse.proto

namespace POGOProtos\Networking\Responses\EvolvePokemonResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.EvolvePokemonResponse.Result</code>
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
     * Generated from protobuf enum <code>FAILED_POKEMON_MISSING = 2;</code>
     */
    const FAILED_POKEMON_MISSING = 2;
    /**
     * Generated from protobuf enum <code>FAILED_INSUFFICIENT_RESOURCES = 3;</code>
     */
    const FAILED_INSUFFICIENT_RESOURCES = 3;
    /**
     * Generated from protobuf enum <code>FAILED_POKEMON_CANNOT_EVOLVE = 4;</code>
     */
    const FAILED_POKEMON_CANNOT_EVOLVE = 4;
    /**
     * Generated from protobuf enum <code>FAILED_POKEMON_IS_DEPLOYED = 5;</code>
     */
    const FAILED_POKEMON_IS_DEPLOYED = 5;
    /**
     * Generated from protobuf enum <code>FAILED_INVALID_ITEM_REQUIREMENT = 6;</code>
     */
    const FAILED_INVALID_ITEM_REQUIREMENT = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\EvolvePokemonResponse_Result::class);
