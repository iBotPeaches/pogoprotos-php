<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/LevelUpRewardsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class LevelUpRewardsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Item\ItemAward::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac9030a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4c6576656c557052657761726473526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365731a29504f474f50726f746f732f496e76656e746f7279" .
            "2f4974656d2f4974656d41776172642e70726f746f22b4020a164c657665" .
            "6c557052657761726473526573706f6e7365124e0a06726573756c741801" .
            "2001280e323e2e504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365732e4c6576656c557052657761726473526573706f6e73" .
            "652e526573756c74123b0a0d6974656d735f617761726465641802200328" .
            "0b32242e504f474f50726f746f732e496e76656e746f72792e4974656d2e" .
            "4974656d417761726412390a0e6974656d735f756e6c6f636b6564180420" .
            "03280e32212e504f474f50726f746f732e496e76656e746f72792e497465" .
            "6d2e4974656d4964121b0a136176617461725f74656d706c6174655f6964" .
            "7318052003280922350a06526573756c7412090a05554e5345541000120b" .
            "0a0753554343455353100112130a0f415741524445445f414c5245414459" .
            "1002620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

