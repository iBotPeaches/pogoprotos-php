<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortRecallPokemonResponse.proto

namespace POGOProtos\Networking\Responses\FortRecallPokemonResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.FortRecallPokemonResponse.Result</code>
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
     * Generated from protobuf enum <code>ERROR_NOT_IN_RANGE = 2;</code>
     */
    const ERROR_NOT_IN_RANGE = 2;
    /**
     * Generated from protobuf enum <code>ERROR_POKEMON_NOT_ON_FORT = 3;</code>
     */
    const ERROR_POKEMON_NOT_ON_FORT = 3;
    /**
     * Generated from protobuf enum <code>ERROR_NO_PLAYER = 4;</code>
     */
    const ERROR_NO_PLAYER = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\FortRecallPokemonResponse_Result::class);

