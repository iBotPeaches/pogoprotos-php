<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EquipBadgeResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class EquipBadgeResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Player\EquippedBadge::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac9020a38504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f45717569704261646765526573706f6e73652e70726f74" .
            "6f121f504f474f50726f746f732e4e6574776f726b696e672e526573706f" .
            "6e73657322e3010a1245717569704261646765526573706f6e7365124a0a" .
            "06726573756c7418012001280e323a2e504f474f50726f746f732e4e6574" .
            "776f726b696e672e526573706f6e7365732e457175697042616467655265" .
            "73706f6e73652e526573756c7412370a0865717569707065641802200128" .
            "0b32252e504f474f50726f746f732e446174612e506c617965722e457175" .
            "6970706564426164676522480a06526573756c7412090a05554e53455410" .
            "00120b0a0753554343455353100112130a0f434f4f4c444f574e5f414354" .
            "495645100212110a0d4e4f545f5155414c49464945441003620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

