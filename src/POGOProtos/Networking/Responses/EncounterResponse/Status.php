<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EncounterResponse.proto

namespace POGOProtos\Networking\Responses\EncounterResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.EncounterResponse.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>ENCOUNTER_ERROR = 0;</code>
     */
    const ENCOUNTER_ERROR = 0;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_SUCCESS = 1;</code>
     */
    const ENCOUNTER_SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_NOT_FOUND = 2;</code>
     */
    const ENCOUNTER_NOT_FOUND = 2;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_CLOSED = 3;</code>
     */
    const ENCOUNTER_CLOSED = 3;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_POKEMON_FLED = 4;</code>
     */
    const ENCOUNTER_POKEMON_FLED = 4;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_NOT_IN_RANGE = 5;</code>
     */
    const ENCOUNTER_NOT_IN_RANGE = 5;
    /**
     * Generated from protobuf enum <code>ENCOUNTER_ALREADY_HAPPENED = 6;</code>
     */
    const ENCOUNTER_ALREADY_HAPPENED = 6;
    /**
     * Generated from protobuf enum <code>POKEMON_INVENTORY_FULL = 7;</code>
     */
    const POKEMON_INVENTORY_FULL = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \POGOProtos\Networking\Responses\EncounterResponse_Status::class);

