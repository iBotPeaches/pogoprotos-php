<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/Loot.proto

namespace GPBMetadata\POGOProtos\Inventory;

class Loot
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\LootItem::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f010a1f504f474f50726f746f732f496e76656e746f72792f4c6f6f74" .
            "2e70726f746f1214504f474f50726f746f732e496e76656e746f72791a23" .
            "504f474f50726f746f732f496e76656e746f72792f4c6f6f744974656d2e" .
            "70726f746f22390a044c6f6f7412310a096c6f6f745f6974656d18012003" .
            "280b321e2e504f474f50726f746f732e496e76656e746f72792e4c6f6f74" .
            "4974656d620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
