<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/LeveledUpFriends.proto

namespace GPBMetadata\POGOProtos\Data\Friends;

class LeveledUpFriends
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        \GPBMetadata\POGOProtos\Data\Friends\FriendshipLevelData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae0020a2e504f474f50726f746f732f446174612f467269656e64732f4c" .
            "6576656c65645570467269656e64732e70726f746f1217504f474f50726f" .
            "746f732e446174612e467269656e64731a30504f474f50726f746f732f44" .
            "6174612f506c617965722f506c617965725075626c696350726f66696c65" .
            "2e70726f746f1a31504f474f50726f746f732f446174612f467269656e64" .
            "732f467269656e64736869704c6576656c446174612e70726f746f22a701" .
            "0a104c6576656c65645570467269656e647312440a0f667269656e645f70" .
            "726f66696c657318012003280b322b2e504f474f50726f746f732e446174" .
            "612e506c617965722e506c617965725075626c696350726f66696c65124d" .
            "0a17667269656e645f6d696c6573746f6e655f6c6576656c731802200328" .
            "0b322c2e504f474f50726f746f732e446174612e467269656e64732e4672" .
            "69656e64736869704c6576656c44617461620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

