<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CheckAwardedBadgesResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class CheckAwardedBadgesResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8b020a40504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f436865636b41776172646564426164676573526573706f" .
            "6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b69" .
            "6e672e526573706f6e736573229d010a1a436865636b4177617264656442" .
            "6164676573526573706f6e7365120f0a0773756363657373180120012808" .
            "12330a0e617761726465645f62616467657318022003280e321b2e504f47" .
            "4f50726f746f732e456e756d732e426164676554797065121c0a14617761" .
            "726465645f62616467655f6c6576656c73180320032805121b0a13617661" .
            "7461725f74656d706c6174655f696473180420032809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

