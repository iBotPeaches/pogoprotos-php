<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/Battle.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class Battle
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        \GPBMetadata\POGOProtos\Enums\FriendshipLevelMilestone::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a92050a23504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c652e70726f746f1216504f474f50726f746f732e446174612e4261" .
            "74746c651a2e504f474f50726f746f732f446174612f426174746c652f42" .
            "6174746c655061727469636970616e742e70726f746f1a26504f474f5072" .
            "6f746f732f446174612f426174746c652f426174746c654c6f672e70726f" .
            "746f1a24504f474f50726f746f732f446174612f506f6b656d6f6e446973" .
            "706c61792e70726f746f1a2f504f474f50726f746f732f456e756d732f46" .
            "7269656e64736869704c6576656c4d696c6573746f6e652e70726f746f22" .
            "9b030a06426174746c6512170a0f626174746c655f73746172745f6d7318" .
            "012001280312150a0d626174746c655f656e645f6d731802200128031211" .
            "0a09626174746c655f6964180320012809123b0a08646566656e64657218" .
            "042001280b32292e504f474f50726f746f732e446174612e426174746c65" .
            "2e426174746c655061727469636970616e7412350a0a626174746c655f6c" .
            "6f6718052001280b32212e504f474f50726f746f732e446174612e426174" .
            "746c652e426174746c654c6f67123b0a0861747461636b65721806200128" .
            "0b32292e504f474f50726f746f732e446174612e426174746c652e426174" .
            "746c655061727469636970616e74124b0a11776561746865725f636f6e64" .
            "6974696f6e18072001280e32302e504f474f50726f746f732e446174612e" .
            "506f6b656d6f6e446973706c61792e57656174686572436f6e646974696f" .
            "6e12500a1c686967686573745f667269656e64736869705f6d696c657374" .
            "6f6e6518082001280e322a2e504f474f50726f746f732e456e756d732e46" .
            "7269656e64736869704c6576656c4d696c6573746f6e65620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

