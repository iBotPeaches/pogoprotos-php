<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Redeem/RedeemedItem.proto

namespace GPBMetadata\POGOProtos\Data\Redeem;

class RedeemedItem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac8010a29504f474f50726f746f732f446174612f52656465656d2f5265" .
            "6465656d65644974656d2e70726f746f1216504f474f50726f746f732e44" .
            "6174612e52656465656d1a26504f474f50726f746f732f496e76656e746f" .
            "72792f4974656d2f4974656d49642e70726f746f22530a0c52656465656d" .
            "65644974656d122f0a046974656d18012001280e32212e504f474f50726f" .
            "746f732e496e76656e746f72792e4974656d2e4974656d496412120a0a69" .
            "74656d5f636f756e74180220012805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
