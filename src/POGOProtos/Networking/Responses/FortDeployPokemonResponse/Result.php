<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortDeployPokemonResponse.proto

namespace POGOProtos\Networking\Responses\FortDeployPokemonResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.FortDeployPokemonResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>NO_RESULT_SET = 0;</code>
     */
    const NO_RESULT_SET = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>ERROR_ALREADY_HAS_POKEMON_ON_FORT = 2;</code>
     */
    const ERROR_ALREADY_HAS_POKEMON_ON_FORT = 2;
    /**
     * Generated from protobuf enum <code>ERROR_OPPOSING_TEAM_OWNS_FORT = 3;</code>
     */
    const ERROR_OPPOSING_TEAM_OWNS_FORT = 3;
    /**
     * Generated from protobuf enum <code>ERROR_FORT_IS_FULL = 4;</code>
     */
    const ERROR_FORT_IS_FULL = 4;
    /**
     * Generated from protobuf enum <code>ERROR_NOT_IN_RANGE = 5;</code>
     */
    const ERROR_NOT_IN_RANGE = 5;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_HAS_NO_TEAM = 6;</code>
     */
    const ERROR_PLAYER_HAS_NO_TEAM = 6;
    /**
     * Generated from protobuf enum <code>ERROR_POKEMON_NOT_FULL_HP = 7;</code>
     */
    const ERROR_POKEMON_NOT_FULL_HP = 7;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 8;</code>
     */
    const ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 8;
    /**
     * Generated from protobuf enum <code>ERROR_POKEMON_IS_BUDDY = 9;</code>
     */
    const ERROR_POKEMON_IS_BUDDY = 9;
    /**
     * Generated from protobuf enum <code>ERROR_FORT_DEPLOY_LOCKOUT = 10;</code>
     */
    const ERROR_FORT_DEPLOY_LOCKOUT = 10;
    /**
     * Generated from protobuf enum <code>ERROR_PLAYER_HAS_NO_NICKNAME = 11;</code>
     */
    const ERROR_PLAYER_HAS_NO_NICKNAME = 11;
    /**
     * Generated from protobuf enum <code>ERROR_POI_INACCESSIBLE = 12;</code>
     */
    const ERROR_POI_INACCESSIBLE = 12;
    /**
     * Generated from protobuf enum <code>ERROR_LEGENDARY_POKEMON = 13;</code>
     */
    const ERROR_LEGENDARY_POKEMON = 13;
    /**
     * Generated from protobuf enum <code>ERROR_INVALID_POKEMON = 14;</code>
     */
    const ERROR_INVALID_POKEMON = 14;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\FortDeployPokemonResponse_Result::class);

