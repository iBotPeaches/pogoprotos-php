<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerBadge.proto

namespace GPBMetadata\POGOProtos\Data\Player;

class PlayerBadge
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afa010a28504f474f50726f746f732f446174612f506c617965722f506c" .
            "6179657242616467652e70726f746f1216504f474f50726f746f732e4461" .
            "74612e506c617965721a20504f474f50726f746f732f456e756d732f4261" .
            "646765547970652e70726f746f228b010a0b506c61796572426164676512" .
            "2f0a0a62616467655f7479706518012001280e321b2e504f474f50726f74" .
            "6f732e456e756d732e426164676554797065120c0a0472616e6b18022001" .
            "280512130a0b73746172745f76616c756518032001280512110a09656e64" .
            "5f76616c756518042001280512150a0d63757272656e745f76616c756518" .
            "0520012801620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

