<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/RecycleInventoryItemMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class RecycleInventoryItemMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ade010a49504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f52656379636c65496e76656e746f72" .
            "794974656d4d6573736167652e70726f746f1227504f474f50726f746f73" .
            "2e4e6574776f726b696e672e52657175657374732e4d6573736167657322" .
            "600a1b52656379636c65496e76656e746f72794974656d4d657373616765" .
            "12320a076974656d5f696418012001280e32212e504f474f50726f746f73" .
            "2e496e76656e746f72792e4974656d2e4974656d4964120d0a05636f756e" .
            "74180220012805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

