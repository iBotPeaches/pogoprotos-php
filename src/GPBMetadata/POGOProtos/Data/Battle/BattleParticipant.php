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
        \GPBMetadata\POGOProtos\Enums\FriendshipLevelMilestone::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab9060a2e504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c655061727469636970616e742e70726f746f1216504f474f50726f" .
            "746f732e446174612e426174746c651a2e504f474f50726f746f732f4461" .
            "74612f426174746c652f426174746c65506f6b656d6f6e496e666f2e7072" .
            "6f746f1a30504f474f50726f746f732f446174612f506c617965722f506c" .
            "617965725075626c696350726f66696c652e70726f746f1a29504f474f50" .
            "726f746f732f4d61702f506f6b656d6f6e2f4c6f626279506f6b656d6f6e" .
            "2e70726f746f1a2f504f474f50726f746f732f456e756d732f467269656e" .
            "64736869704c6576656c4d696c6573746f6e652e70726f746f22a8040a11" .
            "426174746c655061727469636970616e7412410a0e6163746976655f706f" .
            "6b656d6f6e18012001280b32292e504f474f50726f746f732e446174612e" .
            "426174746c652e426174746c65506f6b656d6f6e496e666f124b0a167472" .
            "61696e65725f7075626c69635f70726f66696c6518022001280b322b2e50" .
            "4f474f50726f746f732e446174612e506c617965722e506c617965725075" .
            "626c696350726f66696c6512420a0f726576657273655f706f6b656d6f6e" .
            "18032003280b32292e504f474f50726f746f732e446174612e426174746c" .
            "652e426174746c65506f6b656d6f6e496e666f12430a1064656665617465" .
            "645f706f6b656d6f6e18042003280b32292e504f474f50726f746f732e44" .
            "6174612e426174746c652e426174746c65506f6b656d6f6e496e666f123b" .
            "0a0d6c6f6262795f706f6b656d6f6e18052003280b32242e504f474f5072" .
            "6f746f732e4d61702e506f6b656d6f6e2e4c6f626279506f6b656d6f6e12" .
            "140a0c64616d6167655f6465616c7418062001280512230a1b7375706572" .
            "5f6566666563746976655f6368617267655f6d6f76651807200128081217" .
            "0a0f776561746865725f626f6f7374656418082001280812500a1c686967" .
            "686573745f667269656e64736869705f6d696c6573746f6e651809200128" .
            "0e322a2e504f474f50726f746f732e456e756d732e467269656e64736869" .
            "704c6576656c4d696c6573746f6e6512170a0f667269656e645f636f6465" .
            "6e616d65180a20032809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

