<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/Battle.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class Battle
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Enums\WeatherCondition::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a84040a23504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c652e70726f746f1216504f474f50726f746f732e446174612e4261" .
            "74746c651a2e504f474f50726f746f732f446174612f426174746c652f42" .
            "6174746c655061727469636970616e742e70726f746f1a26504f474f5072" .
            "6f746f732f446174612f426174746c652f426174746c654c6f672e70726f" .
            "746f1a27504f474f50726f746f732f456e756d732f57656174686572436f" .
            "6e646974696f6e2e70726f746f22bb020a06426174746c6512170a0f6261" .
            "74746c655f73746172745f6d7318012001280312150a0d626174746c655f" .
            "656e645f6d7318022001280312110a09626174746c655f69641803200128" .
            "09123b0a08646566656e64657218042001280b32292e504f474f50726f74" .
            "6f732e446174612e426174746c652e426174746c65506172746963697061" .
            "6e7412350a0a626174746c655f6c6f6718052001280b32212e504f474f50" .
            "726f746f732e446174612e426174746c652e426174746c654c6f67123b0a" .
            "0861747461636b657218062001280b32292e504f474f50726f746f732e44" .
            "6174612e426174746c652e426174746c655061727469636970616e74123d" .
            "0a11776561746865725f636f6e646974696f6e18072001280e32222e504f" .
            "474f50726f746f732e456e756d732e57656174686572436f6e646974696f" .
            "6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

