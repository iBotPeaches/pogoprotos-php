<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/BadgeSettings.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class BadgeSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        \GPBMetadata\POGOProtos\Data\Badge\BadgeCaptureReward::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\EventBadgeSettings::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac7030a2e504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f426164676553657474696e67732e70726f746f121a504f474f50726f" .
            "746f732e53657474696e67732e4d61737465721a2e504f474f50726f746f" .
            "732f446174612f42616467652f4261646765436170747572655265776172" .
            "642e70726f746f1a33504f474f50726f746f732f53657474696e67732f4d" .
            "61737465722f4576656e74426164676553657474696e67732e70726f746f" .
            "228b020a0d426164676553657474696e6773122f0a0a62616467655f7479" .
            "706518012001280e321b2e504f474f50726f746f732e456e756d732e4261" .
            "6467655479706512120a0a62616467655f72616e6b180220012805120f0a" .
            "077461726765747318032003280512410a0e636170747572655f72657761" .
            "726418042003280b32292e504f474f50726f746f732e446174612e426164" .
            "67652e42616467654361707475726552657761726412130a0b6576656e74" .
            "5f6261646765180520012808124c0a146576656e745f62616467655f7365" .
            "7474696e677318062001280b322e2e504f474f50726f746f732e53657474" .
            "696e67732e4d61737465722e4576656e74426164676553657474696e6773" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

