<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/BattlePartyTelemetry.proto

namespace GPBMetadata\POGOProtos\Data\Telemetry;

class BattlePartyTelemetry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\TelemetryIds::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af5010a34504f474f50726f746f732f446174612f54656c656d65747279" .
            "2f426174746c65506172747954656c656d657472792e70726f746f121950" .
            "4f474f50726f746f732e446174612e54656c656d657472792299010a1442" .
            "6174746c65506172747954656c656d6574727912480a15626174746c655f" .
            "70617274795f636c69636b5f696418012001280e32292e504f474f50726f" .
            "746f732e456e756d732e426174746c65506172747954656c656d65747279" .
            "496473121a0a12626174746c655f70617274795f636f756e741802200128" .
            "05121b0a13626174746c655f70617274795f6e756d626572180320012805" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
