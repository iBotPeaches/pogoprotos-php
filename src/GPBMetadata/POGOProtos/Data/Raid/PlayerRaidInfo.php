<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Raid/PlayerRaidInfo.proto

namespace GPBMetadata\POGOProtos\Data\Raid;

class PlayerRaidInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Raid\Raid::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acf010a29504f474f50726f746f732f446174612f526169642f506c6179" .
            "657252616964496e666f2e70726f746f1214504f474f50726f746f732e44" .
            "6174612e526169642283010a0e506c6179657252616964496e666f121d0a" .
            "15746f74616c5f636f6d706c657465645f72616964731803200128051227" .
            "0a1f746f74616c5f636f6d706c657465645f6c6567656e646172795f7261" .
            "69647318042001280512290a05726169647318052003280b321a2e504f47" .
            "4f50726f746f732e446174612e526169642e52616964620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

