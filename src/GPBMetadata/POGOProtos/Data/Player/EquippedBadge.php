<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/EquippedBadge.proto

namespace GPBMetadata\POGOProtos\Data\Player;

class EquippedBadge
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef010a2a504f474f50726f746f732f446174612f506c617965722f4571" .
            "75697070656442616467652e70726f746f1216504f474f50726f746f732e" .
            "446174612e506c617965721a20504f474f50726f746f732f456e756d732f" .
            "4261646765547970652e70726f746f227f0a0d4571756970706564426164" .
            "6765122f0a0a62616467655f7479706518012001280e321b2e504f474f50" .
            "726f746f732e456e756d732e426164676554797065120d0a056c6576656c" .
            "180220012805122e0a266e6578745f65717569705f6368616e67655f616c" .
            "6c6f7765645f74696d657374616d705f6d73180320012803620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}
