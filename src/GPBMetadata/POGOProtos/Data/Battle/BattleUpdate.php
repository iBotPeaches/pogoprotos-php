<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleUpdate.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class BattleUpdate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattlePokemonInfo::initOnce();
        \GPBMetadata\POGOProtos\Enums\FriendshipLevelMilestone::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a89040a29504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c655570646174652e70726f746f1216504f474f50726f746f732e44" .
            "6174612e426174746c651a26504f474f50726f746f732f446174612f4261" .
            "74746c652f426174746c654c6f672e70726f746f1a2e504f474f50726f74" .
            "6f732f446174612f426174746c652f426174746c65506f6b656d6f6e496e" .
            "666f2e70726f746f1a2f504f474f50726f746f732f456e756d732f467269" .
            "656e64736869704c6576656c4d696c6573746f6e652e70726f746f22b202" .
            "0a0c426174746c6555706461746512350a0a626174746c655f6c6f671801" .
            "2001280b32212e504f474f50726f746f732e446174612e426174746c652e" .
            "426174746c654c6f6712110a09626174746c655f69641802200128091242" .
            "0a0f6163746976655f646566656e64657218032001280b32292e504f474f" .
            "50726f746f732e446174612e426174746c652e426174746c65506f6b656d" .
            "6f6e496e666f12420a0f6163746976655f61747461636b65721804200128" .
            "0b32292e504f474f50726f746f732e446174612e426174746c652e426174" .
            "746c65506f6b656d6f6e496e666f12500a1c686967686573745f66726965" .
            "6e64736869705f6d696c6573746f6e6518052001280e322a2e504f474f50" .
            "726f746f732e456e756d732e467269656e64736869704c6576656c4d696c" .
            "6573746f6e65620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

