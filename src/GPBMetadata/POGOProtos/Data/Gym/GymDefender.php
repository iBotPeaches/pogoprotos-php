<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymDefender.proto

namespace GPBMetadata\POGOProtos\Data\Gym;

class GymDefender
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Map\Pokemon\MotivatedPokemon::initOnce();
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87040a25504f474f50726f746f732f446174612f47796d2f47796d4465" .
            "66656e6465722e70726f746f1213504f474f50726f746f732e446174612e" .
            "47796d1a2d504f474f50726f746f732f4d61702f506f6b656d6f6e2f4d6f" .
            "74697661746564506f6b656d6f6e2e70726f746f1a30504f474f50726f74" .
            "6f732f446174612f506c617965722f506c617965725075626c696350726f" .
            "66696c652e70726f746f22df020a0b47796d446566656e64657212430a11" .
            "6d6f746976617465645f706f6b656d6f6e18012001280b32282e504f474f" .
            "50726f746f732e4d61702e506f6b656d6f6e2e4d6f74697661746564506f" .
            "6b656d6f6e124c0a116465706c6f796d656e745f746f74616c7318022001" .
            "280b32312e504f474f50726f746f732e446174612e47796d2e47796d4465" .
            "66656e6465722e4465706c6f796d656e74546f74616c73124b0a16747261" .
            "696e65725f7075626c69635f70726f66696c6518032001280b322b2e504f" .
            "474f50726f746f732e446174612e506c617965722e506c61796572507562" .
            "6c696350726f66696c651a700a104465706c6f796d656e74546f74616c73" .
            "12110a0974696d65735f66656418012001280512130a0b626174746c6573" .
            "5f776f6e18022001280512140a0c626174746c65735f6c6f737418032001" .
            "2805121e0a166465706c6f796d656e745f6475726174696f6e5f6d731804" .
            "20012803620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
