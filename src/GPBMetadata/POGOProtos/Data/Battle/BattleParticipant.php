<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleParticipant.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class BattleParticipant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattlePokemonInfo::initOnce();
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        \GPBMetadata\POGOProtos\Map\Pokemon\LobbyPokemon::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adf040a2e504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c655061727469636970616e742e70726f746f1216504f474f50726f" .
            "746f732e446174612e426174746c651a2e504f474f50726f746f732f4461" .
            "74612f426174746c652f426174746c65506f6b656d6f6e496e666f2e7072" .
            "6f746f1a30504f474f50726f746f732f446174612f506c617965722f506c" .
            "617965725075626c696350726f66696c652e70726f746f1a29504f474f50" .
            "726f746f732f4d61702f506f6b656d6f6e2f4c6f626279506f6b656d6f6e" .
            "2e70726f746f22ff020a11426174746c655061727469636970616e741241" .
            "0a0e6163746976655f706f6b656d6f6e18012001280b32292e504f474f50" .
            "726f746f732e446174612e426174746c652e426174746c65506f6b656d6f" .
            "6e496e666f124b0a16747261696e65725f7075626c69635f70726f66696c" .
            "6518022001280b322b2e504f474f50726f746f732e446174612e506c6179" .
            "65722e506c617965725075626c696350726f66696c6512420a0f72657665" .
            "7273655f706f6b656d6f6e18032003280b32292e504f474f50726f746f73" .
            "2e446174612e426174746c652e426174746c65506f6b656d6f6e496e666f" .
            "12430a1064656665617465645f706f6b656d6f6e18042003280b32292e50" .
            "4f474f50726f746f732e446174612e426174746c652e426174746c65506f" .
            "6b656d6f6e496e666f123b0a0d6c6f6262795f706f6b656d6f6e18052003" .
            "280b32242e504f474f50726f746f732e4d61702e506f6b656d6f6e2e4c6f" .
            "626279506f6b656d6f6e12140a0c64616d6167655f6465616c7418062001" .
            "2805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
