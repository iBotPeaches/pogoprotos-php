<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/EvolvePokemonTelemetry.proto

namespace GPBMetadata\POGOProtos\Data\Telemetry;

class EvolvePokemonTelemetry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Telemetry\PokemonTelemetry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afa010a36504f474f50726f746f732f446174612f54656c656d65747279" .
            "2f45766f6c7665506f6b656d6f6e54656c656d657472792e70726f746f12" .
            "19504f474f50726f746f732e446174612e54656c656d65747279229c010a" .
            "1645766f6c7665506f6b656d6f6e54656c656d65747279123c0a07706f6b" .
            "656d6f6e18012001280b322b2e504f474f50726f746f732e446174612e54" .
            "656c656d657472792e506f6b656d6f6e54656c656d6574727912440a0f65" .
            "766f6c7665645f706f6b656d6f6e18022001280b322b2e504f474f50726f" .
            "746f732e446174612e54656c656d657472792e506f6b656d6f6e54656c65" .
            "6d65747279620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

