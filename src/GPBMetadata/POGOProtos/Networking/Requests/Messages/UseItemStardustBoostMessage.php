<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemStardustBoostMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class UseItemStardustBoostMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc010a49504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f5573654974656d5374617264757374" .
            "426f6f73744d6573736167652e70726f746f1227504f474f50726f746f73" .
            "2e4e6574776f726b696e672e52657175657374732e4d6573736167657322" .
            "4e0a1b5573654974656d5374617264757374426f6f73744d657373616765" .
            "122f0a046974656d18012001280e32212e504f474f50726f746f732e496e" .
            "76656e746f72792e4974656d2e4974656d4964620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

