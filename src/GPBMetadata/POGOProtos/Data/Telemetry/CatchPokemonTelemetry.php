<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/CatchPokemonTelemetry.proto

namespace GPBMetadata\POGOProtos\Data\Telemetry;

class CatchPokemonTelemetry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Telemetry\EncounterPokemonTelemetry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae020a35504f474f50726f746f732f446174612f54656c656d65747279" .
            "2f4361746368506f6b656d6f6e54656c656d657472792e70726f746f1219" .
            "504f474f50726f746f732e446174612e54656c656d6574727922d1010a15" .
            "4361746368506f6b656d6f6e54656c656d65747279120e0a067374617475" .
            "7318012001280912590a1b656e636f756e7465725f706f6b656d6f6e5f74" .
            "656c656d6574727918022001280b32342e504f474f50726f746f732e4461" .
            "74612e54656c656d657472792e456e636f756e746572506f6b656d6f6e54" .
            "656c656d6574727912100a0862616c6c7479706518032001280512110a09" .
            "6869745f677261646518042001280512120a0a63757276655f62616c6c18" .
            "052001280812140a0c6d6973735f70657263656e74180620012801620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}
