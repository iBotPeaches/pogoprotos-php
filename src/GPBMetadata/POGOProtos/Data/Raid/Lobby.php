<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Raid/Lobby.proto

namespace GPBMetadata\POGOProtos\Data\Raid;

class Lobby
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        \GPBMetadata\POGOProtos\Enums\WeatherCondition::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aec030a20504f474f50726f746f732f446174612f526169642f4c6f6262" .
            "792e70726f746f1214504f474f50726f746f732e446174612e526169641a" .
            "27504f474f50726f746f732f456e756d732f57656174686572436f6e6469" .
            "74696f6e2e70726f746f2280030a054c6f62627912100a086c6f6262795f" .
            "6964180120032805123a0a07706c617965727318022003280b32292e504f" .
            "474f50726f746f732e446174612e426174746c652e426174746c65506172" .
            "7469636970616e74121a0a12706c617965725f6a6f696e5f656e645f6d73" .
            "18032001280312200a18706f6b656d6f6e5f73656c656374696f6e5f656e" .
            "645f6d73180420012803121c0a14726169645f626174746c655f73746172" .
            "745f6d73180520012803121a0a12726169645f626174746c655f656e645f" .
            "6d7318062001280312160a0e726169645f626174746c655f696418082001" .
            "280912160a0e6f776e65725f6e69636b6e616d65180920012809120f0a07" .
            "70726976617465180a2001280812130a0b6372656174696f6e5f6d73180b" .
            "20012803121c0a14626174746c655f706c66655f696e7374616e6365180c" .
            "20012805123d0a11776561746865725f636f6e646974696f6e180d200128" .
            "0e32222e504f474f50726f746f732e456e756d732e57656174686572436f" .
            "6e646974696f6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

