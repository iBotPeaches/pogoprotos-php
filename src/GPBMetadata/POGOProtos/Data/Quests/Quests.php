<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quests.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class Quests
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\QuestPokemonEncounter::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\QuestStampCard::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8a030a23504f474f50726f746f732f446174612f5175657374732f5175" .
            "657374732e70726f746f1216504f474f50726f746f732e446174612e5175" .
            "657374731a32504f474f50726f746f732f446174612f5175657374732f51" .
            "75657374506f6b656d6f6e456e636f756e7465722e70726f746f1a2b504f" .
            "474f50726f746f732f446174612f5175657374732f51756573745374616d" .
            "70436172642e70726f746f22e1010a06517565737473122c0a0571756573" .
            "7418012003280b321d2e504f474f50726f746f732e446174612e51756573" .
            "74732e5175657374121d0a15636f6d706c657465645f73746f72795f7175" .
            "657374180220032809124e0a1771756573745f706f6b656d6f6e5f656e63" .
            "6f756e74657218032003280b322d2e504f474f50726f746f732e44617461" .
            "2e5175657374732e5175657374506f6b656d6f6e456e636f756e74657212" .
            "3a0a0a7374616d705f6361726418042001280b32262e504f474f50726f74" .
            "6f732e446174612e5175657374732e51756573745374616d704361726462" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

