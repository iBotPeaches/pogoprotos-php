<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Friends/FriendshipMilestoneReward.proto

namespace GPBMetadata\POGOProtos\Data\Friends;

class FriendshipMilestoneReward
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\FriendshipLevelMilestone::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad4010a37504f474f50726f746f732f446174612f467269656e64732f46" .
            "7269656e64736869704d696c6573746f6e655265776172642e70726f746f" .
            "1217504f474f50726f746f732e446174612e467269656e647322780a1946" .
            "7269656e64736869704d696c6573746f6e6552657761726412110a096672" .
            "69656e645f696418012001280912480a14667269656e64736869705f6d69" .
            "6c6573746f6e6518022001280e322a2e504f474f50726f746f732e456e75" .
            "6d732e467269656e64736869704c6576656c4d696c6573746f6e65620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}

