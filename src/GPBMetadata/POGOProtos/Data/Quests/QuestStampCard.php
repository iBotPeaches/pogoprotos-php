<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestStampCard.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class QuestStampCard
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Quests\QuestStamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace010a2b504f474f50726f746f732f446174612f5175657374732f5175" .
            "6573745374616d70436172642e70726f746f1216504f474f50726f746f73" .
            "2e446174612e517565737473227f0a0e51756573745374616d7043617264" .
            "12310a057374616d7018012003280b32222e504f474f50726f746f732e44" .
            "6174612e5175657374732e51756573745374616d70120e0a067461726765" .
            "74180220012805121e0a1672656d61696e696e675f6461696c795f737461" .
            "6d7073180320012805120a0a026964180420012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
