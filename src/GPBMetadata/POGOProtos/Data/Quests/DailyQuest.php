<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/DailyQuest.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class DailyQuest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94010a27504f474f50726f746f732f446174612f5175657374732f4461" .
            "696c7951756573742e70726f746f1216504f474f50726f746f732e446174" .
            "612e51756573747322490a0a4461696c795175657374121d0a1563757272" .
            "656e745f706572696f645f6275636b6574180120012805121c0a14637572" .
            "72656e745f73747265616b5f636f756e74180220012805620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}
