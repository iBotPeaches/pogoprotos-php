<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/LootItem.proto

namespace GPBMetadata\POGOProtos\Inventory;

class LootItem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        \GPBMetadata\POGOProtos\Data\PokemonData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9c030a23504f474f50726f746f732f496e76656e746f72792f4c6f6f74" .
            "4974656d2e70726f746f1214504f474f50726f746f732e496e76656e746f" .
            "72791a26504f474f50726f746f732f496e76656e746f72792f4974656d2f" .
            "4974656d49642e70726f746f1a20504f474f50726f746f732f456e756d73" .
            "2f506f6b656d6f6e49642e70726f746f1a21504f474f50726f746f732f44" .
            "6174612f506f6b656d6f6e446174612e70726f746f22e9010a084c6f6f74" .
            "4974656d122f0a046974656d18012001280e32212e504f474f50726f746f" .
            "732e496e76656e746f72792e4974656d2e4974656d496412100a08737461" .
            "726475737418022001280812100a08706f6b65636f696e18032001280812" .
            "320a0d706f6b656d6f6e5f63616e647918042001280e321b2e504f474f50" .
            "726f746f732e456e756d732e506f6b656d6f6e4964120d0a05636f756e74" .
            "18052001280512120a0a657870657269656e636518062001280812310a0b" .
            "706f6b656d6f6e5f65676718072001280b321c2e504f474f50726f746f73" .
            "2e446174612e506f6b656d6f6e44617461620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

