<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/RaidTickets.proto

namespace GPBMetadata\POGOProtos\Inventory;

class RaidTickets
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\RaidTicket::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8c010a26504f474f50726f746f732f496e76656e746f72792f52616964" .
            "5469636b6574732e70726f746f1214504f474f50726f746f732e496e7665" .
            "6e746f727922440a0b526169645469636b65747312350a0b726169645f74" .
            "69636b657418012003280b32202e504f474f50726f746f732e496e76656e" .
            "746f72792e526169645469636b6574620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

