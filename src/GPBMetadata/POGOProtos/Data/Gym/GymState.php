<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymState.proto

namespace GPBMetadata\POGOProtos\Data\Gym;

class GymState
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Map\Fort\FortData::initOnce();
        \GPBMetadata\POGOProtos\Data\Gym\GymMembership::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afa010a22504f474f50726f746f732f446174612f47796d2f47796d5374" .
            "6174652e70726f746f1213504f474f50726f746f732e446174612e47796d" .
            "1a27504f474f50726f746f732f446174612f47796d2f47796d4d656d6265" .
            "72736869702e70726f746f228d010a0847796d537461746512300a09666f" .
            "72745f6461746118012001280b321d2e504f474f50726f746f732e4d6170" .
            "2e466f72742e466f72744461746112370a0b6d656d626572736869707318" .
            "022003280b32222e504f474f50726f746f732e446174612e47796d2e4779" .
            "6d4d656d6265727368697012160a0e6465706c6f795f6c6f636b6f757418" .
            "0320012808620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

