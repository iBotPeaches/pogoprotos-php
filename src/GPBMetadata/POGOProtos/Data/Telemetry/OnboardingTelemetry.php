<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/OnboardingTelemetry.proto

namespace GPBMetadata\POGOProtos\Data\Telemetry;

class OnboardingTelemetry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\OnboardingEventIds::initOnce();
        \GPBMetadata\POGOProtos\Enums\OnboardingArStatus::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee020a33504f474f50726f746f732f446174612f54656c656d65747279" .
            "2f4f6e626f617264696e6754656c656d657472792e70726f746f1219504f" .
            "474f50726f746f732e446174612e54656c656d657472791a29504f474f50" .
            "726f746f732f456e756d732f4f6e626f617264696e674172537461747573" .
            "2e70726f746f22e8010a134f6e626f617264696e6754656c656d65747279" .
            "123c0a0f6f6e626f617264696e675f7061746818012001280e32232e504f" .
            "474f50726f746f732e456e756d732e4f6e626f617264696e675061746849" .
            "647312360a086576656e745f696418022001280e32242e504f474f50726f" .
            "746f732e456e756d732e4f6e626f617264696e674576656e74496473120c" .
            "0a046461746118032001280512140a0c636f6e766572736174696f6e1804" .
            "2001280912370a0961725f73746174757318052001280e32242e504f474f" .
            "50726f746f732e456e756d732e4f6e626f617264696e6741725374617475" .
            "73620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
