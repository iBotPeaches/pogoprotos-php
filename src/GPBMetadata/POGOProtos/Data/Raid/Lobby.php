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
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af7030a20504f474f50726f746f732f446174612f526169642f4c6f6262" .
            "792e70726f746f1214504f474f50726f746f732e446174612e526169641a" .
            "24504f474f50726f746f732f446174612f506f6b656d6f6e446973706c61" .
            "792e70726f746f228e030a054c6f62627912100a086c6f6262795f696418" .
            "0120032805123a0a07706c617965727318022003280b32292e504f474f50" .
            "726f746f732e446174612e426174746c652e426174746c65506172746963" .
            "6970616e74121a0a12706c617965725f6a6f696e5f656e645f6d73180320" .
            "01280312200a18706f6b656d6f6e5f73656c656374696f6e5f656e645f6d" .
            "73180420012803121c0a14726169645f626174746c655f73746172745f6d" .
            "73180520012803121a0a12726169645f626174746c655f656e645f6d7318" .
            "062001280312160a0e726169645f626174746c655f696418082001280912" .
            "160a0e6f776e65725f6e69636b6e616d65180920012809120f0a07707269" .
            "76617465180a2001280812130a0b6372656174696f6e5f6d73180b200128" .
            "03121c0a14626174746c655f706c66655f696e7374616e6365180c200128" .
            "05124b0a11776561746865725f636f6e646974696f6e180d2001280e3230" .
            "2e504f474f50726f746f732e446174612e506f6b656d6f6e446973706c61" .
            "792e57656174686572436f6e646974696f6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

