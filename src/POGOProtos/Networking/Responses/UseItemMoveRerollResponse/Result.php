<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemMoveRerollResponse.proto

namespace POGOProtos\Networking\Responses\UseItemMoveRerollResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemMoveRerollResponse.Result</code>
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
     * Generated from protobuf enum <code>NO_POKEMON = 2;</code>
     */
    const NO_POKEMON = 2;
    /**
     * Generated from protobuf enum <code>NO_OTHER_MOVES = 3;</code>
     */
    const NO_OTHER_MOVES = 3;
    /**
     * Generated from protobuf enum <code>NO_PLAYER = 4;</code>
     */
    const NO_PLAYER = 4;
    /**
     * Generated from protobuf enum <code>WRONG_ITEM_TYPE = 5;</code>
     */
    const WRONG_ITEM_TYPE = 5;
    /**
     * Generated from protobuf enum <code>ITEM_NOT_IN_INVENTORY = 6;</code>
     */
    const ITEM_NOT_IN_INVENTORY = 6;
    /**
     * Generated from protobuf enum <code>INVALID_POKEMON = 7;</code>
     */
    const INVALID_POKEMON = 7;
    /**
     * Generated from protobuf enum <code>MOVE_LOCKED = 8;</code>
     */
    const MOVE_LOCKED = 8;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \POGOProtos\Networking\Responses\UseItemMoveRerollResponse_Result::class);

