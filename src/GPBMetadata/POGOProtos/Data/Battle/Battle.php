<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/Battle.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class Battle
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Enums\WeatherCondition::initOnce();
        \GPBMetadata\POGOProtos\Enums\FriendshipLevelMilestone::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad7040a23504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c652e70726f746f1216504f474f50726f746f732e446174612e4261" .
            "74746c651a26504f474f50726f746f732f446174612f426174746c652f42" .
            "6174746c654c6f672e70726f746f1a27504f474f50726f746f732f456e75" .
            "6d732f57656174686572436f6e646974696f6e2e70726f746f1a2f504f47" .
            "4f50726f746f732f456e756d732f467269656e64736869704c6576656c4d" .
            "696c6573746f6e652e70726f746f228d030a06426174746c6512170a0f62" .
            "6174746c655f73746172745f6d7318012001280312150a0d626174746c65" .
            "5f656e645f6d7318022001280312110a09626174746c655f696418032001" .
            "2809123b0a08646566656e64657218042001280b32292e504f474f50726f" .
            "746f732e446174612e426174746c652e426174746c655061727469636970" .
            "616e7412350a0a626174746c655f6c6f6718052001280b32212e504f474f" .
            "50726f746f732e446174612e426174746c652e426174746c654c6f67123b" .
            "0a0861747461636b657218062001280b32292e504f474f50726f746f732e" .
            "446174612e426174746c652e426174746c655061727469636970616e7412" .
            "3d0a11776561746865725f636f6e646974696f6e18072001280e32222e50" .
            "4f474f50726f746f732e456e756d732e57656174686572436f6e64697469" .
            "6f6e12500a1c686967686573745f667269656e64736869705f6d696c6573" .
            "746f6e6518082001280e322a2e504f474f50726f746f732e456e756d732e" .
            "467269656e64736869704c6576656c4d696c6573746f6e65620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

