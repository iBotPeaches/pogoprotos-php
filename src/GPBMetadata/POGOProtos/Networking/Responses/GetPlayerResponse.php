<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetPlayerResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetPlayerResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PlayerData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae8020a37504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f476574506c61796572526573706f6e73652e70726f746f" .
            "121f504f474f50726f746f732e4e6574776f726b696e672e526573706f6e" .
            "7365732283020a11476574506c61796572526573706f6e7365120f0a0773" .
            "75636365737318012001280812300a0b706c617965725f64617461180220" .
            "01280b321b2e504f474f50726f746f732e446174612e506c617965724461" .
            "7461120e0a0662616e6e6564180320012808120c0a047761726e18042001" .
            "280812130a0b7761735f6372656174656418052001280812210a19776172" .
            "6e5f6d6573736167655f61636b6e6f776c65646765641806200128081215" .
            "0a0d7761735f73757370656e64656418072001280812260a1e7375737065" .
            "6e6465645f6d6573736167655f61636b6e6f776c65646765641808200128" .
            "0812160a0e7761726e5f6578706972655f6d73180920012803620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

