<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/FriendDetails.proto

namespace GPBMetadata\POGOProtos\Data\Friends;

class FriendDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Player\PlayerSummary::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9010a2b504f474f50726f746f732f446174612f467269656e64732f46" .
            "7269656e6444657461696c732e70726f746f1217504f474f50726f746f73" .
            "2e446174612e467269656e64732288010a0d467269656e6444657461696c" .
            "7312350a06706c6179657218012001280b32252e504f474f50726f746f73" .
            "2e446174612e506c617965722e506c6179657253756d6d617279121b0a13" .
            "667269656e645f76697369626c655f6461746118022001280c120d0a0573" .
            "636f726518032001280512140a0c646174615f776974685f6d6518042001" .
            "280c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

