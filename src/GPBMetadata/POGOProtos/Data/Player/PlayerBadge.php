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
            "0ad8010a28504f474f50726f746f732f446174612f506c617965722f506c" .
            "6179657242616467652e70726f746f1216504f474f50726f746f732e4461" .
            "74612e506c61796572228b010a0b506c617965724261646765122f0a0a62" .
            "616467655f7479706518012001280e321b2e504f474f50726f746f732e45" .
            "6e756d732e426164676554797065120c0a0472616e6b1802200128051213" .
            "0a0b73746172745f76616c756518032001280512110a09656e645f76616c" .
            "756518042001280512150a0d63757272656e745f76616c75651805200128" .
            "01620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
