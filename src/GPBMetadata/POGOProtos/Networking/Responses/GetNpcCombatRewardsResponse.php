<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetNpcCombatRewardsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetNpcCombatRewardsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\CombatRewardStatus::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Loot::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae8030a41504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4765744e7063436f6d6261745265776172647352657370" .
            "6f6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b" .
            "696e672e526573706f6e7365731a1f504f474f50726f746f732f496e7665" .
            "6e746f72792f4c6f6f742e70726f746f22d8020a1b4765744e7063436f6d" .
            "62617452657761726473526573706f6e736512530a06726573756c741801" .
            "2001280e32432e504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365732e4765744e7063436f6d626174526577617264735265" .
            "73706f6e73652e526573756c74123b0a0d7265776172645f737461747573" .
            "18022001280e32242e504f474f50726f746f732e456e756d732e436f6d62" .
            "6174526577617264537461747573122b0a07726577617264731803200128" .
            "0b321a2e504f474f50726f746f732e496e76656e746f72792e4c6f6f7412" .
            "290a216e756d6265725f72657761726465645f6e70635f626174746c6573" .
            "5f746f646179180420012805224f0a06526573756c7412090a05554e5345" .
            "541000120b0a07535543434553531001122d0a294552524f525f494e5641" .
            "4c445f4e554d4245525f41545441434b494e475f504f4b454d4f4e5f4944" .
            "531002620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

