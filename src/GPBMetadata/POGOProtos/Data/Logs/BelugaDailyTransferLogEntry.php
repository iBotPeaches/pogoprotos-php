<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/BelugaDailyTransferLogEntry.proto

namespace GPBMetadata\POGOProtos\Data\Logs;

class BelugaDailyTransferLogEntry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Loot::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab4020a36504f474f50726f746f732f446174612f4c6f67732f42656c75" .
            "67614461696c795472616e736665724c6f67456e7472792e70726f746f12" .
            "14504f474f50726f746f732e446174612e4c6f677322db010a1b42656c75" .
            "67614461696c795472616e736665724c6f67456e74727912480a06726573" .
            "756c7418012001280e32382e504f474f50726f746f732e446174612e4c6f" .
            "67732e42656c7567614461696c795472616e736665724c6f67456e747279" .
            "2e526573756c74121d0a15696e636c756465735f7765656b6c795f626f6e" .
            "757318022001280812310a0d6974656d735f617761726465641803200128" .
            "0b321a2e504f474f50726f746f732e496e76656e746f72792e4c6f6f7422" .
            "200a06526573756c7412090a05554e5345541000120b0a07535543434553" .
            "531001620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
