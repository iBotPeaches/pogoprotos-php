<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/ClientQuest.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class ClientQuest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\QuestDialog::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a89040a28504f474f50726f746f732f446174612f5175657374732f436c" .
            "69656e7451756573742e70726f746f1216504f474f50726f746f732e4461" .
            "74612e5175657374731a28504f474f50726f746f732f446174612f517565" .
            "7374732f51756573744469616c6f672e70726f746f2292030a0b436c6965" .
            "6e745175657374122c0a05717565737418012001280b321d2e504f474f50" .
            "726f746f732e446174612e5175657374732e517565737412470a0d717565" .
            "73745f646973706c617918022001280b32302e504f474f50726f746f732e" .
            "446174612e5175657374732e436c69656e7451756573742e517565737444" .
            "6973706c61791a8b020a0c5175657374446973706c617912100a08717565" .
            "73745f696418012001280912330a066469616c6f6718022003280b32232e" .
            "504f474f50726f746f732e446174612e5175657374732e51756573744469" .
            "616c6f6712130a0b6465736372697074696f6e180320012809120d0a0574" .
            "69746c65180420012809120c0a04736c6f7418052001280512440a0a7375" .
            "62646973706c617918062003280b32302e504f474f50726f746f732e4461" .
            "74612e5175657374732e436c69656e7451756573742e5175657374446973" .
            "706c6179121a0a1273746f72795f656e64696e675f717565737418072001" .
            "280812200a1873746f72795f656e64696e675f6465736372697074696f6e" .
            "180820012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
