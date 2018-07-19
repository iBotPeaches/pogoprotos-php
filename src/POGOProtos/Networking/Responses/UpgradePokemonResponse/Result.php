<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UpgradePokemonResponse.proto

namespace POGOProtos\Networking\Responses\UpgradePokemonResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UpgradePokemonResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_POKEMON_NOT_FOUND = 2;</code>
     */
    const ERROR_POKEMON_NOT_FOUND = 2;
    /**
     * Generated from protobuf enum <code>ERROR_INSUFFICIENT_RESOURCES = 3;</code>
     */
    const ERROR_INSUFFICIENT_RESOURCES = 3;
    /**
     * Generated from protobuf enum <code>ERROR_UPGRADE_NOT_AVAILABLE = 4;</code>
     */
    const ERROR_UPGRADE_NOT_AVAILABLE = 4;
    /**
     * Generated from protobuf enum <code>ERROR_POKEMON_IS_DEPLOYED = 5;</code>
     */
    const ERROR_POKEMON_IS_DEPLOYED = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\UpgradePokemonResponse_Result::class);

