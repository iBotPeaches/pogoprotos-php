<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestPokemonEncounter.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class QuestPokemonEncounter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\EncounterType::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf020a32504f474f50726f746f732f446174612f5175657374732f5175" .
            "657374506f6b656d6f6e456e636f756e7465722e70726f746f1216504f47" .
            "4f50726f746f732e446174612e5175657374731a24504f474f50726f746f" .
            "732f456e756d732f456e636f756e746572547970652e70726f746f1a2050" .
            "4f474f50726f746f732f456e756d732f506f6b656d6f6e49642e70726f74" .
            "6f2290010a155175657374506f6b656d6f6e456e636f756e74657212100a" .
            "0871756573745f6964180120012809122c0a07706f6b656d6f6e18022001" .
            "280e321b2e504f474f50726f746f732e456e756d732e506f6b656d6f6e49" .
            "6412370a0e656e636f756e7465725f7479706518032001280e321f2e504f" .
            "474f50726f746f732e456e756d732e456e636f756e746572547970656206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

