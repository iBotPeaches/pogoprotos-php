<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestReward.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class QuestReward
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea070a28504f474f50726f746f732f446174612f5175657374732f5175" .
            "6573745265776172642e70726f746f1216504f474f50726f746f732e4461" .
            "74612e5175657374731a20504f474f50726f746f732f456e756d732f506f" .
            "6b656d6f6e49642e70726f746f1a26504f474f50726f746f732f496e7665" .
            "6e746f72792f4974656d2f4974656d49642e70726f746f22d3060a0b5175" .
            "65737452657761726412360a047479706518012001280e32282e504f474f" .
            "50726f746f732e446174612e5175657374732e5175657374526577617264" .
            "2e54797065120b0a03657870180220012805123c0a046974656d18032001" .
            "280b322e2e504f474f50726f746f732e446174612e5175657374732e5175" .
            "6573745265776172642e4974656d52657761726412100a08737461726475" .
            "737418042001280512450a0563616e647918052001280b32362e504f474f" .
            "50726f746f732e446174612e5175657374732e5175657374526577617264" .
            "2e506f6b656d6f6e43616e6479526577617264121a0a126176617461725f" .
            "74656d706c6174655f696418062001280912190a1171756573745f74656d" .
            "706c6174655f696418072001280912550a11706f6b656d6f6e5f656e636f" .
            "756e74657218082001280b323a2e504f474f50726f746f732e446174612e" .
            "5175657374732e51756573745265776172642e506f6b656d6f6e456e636f" .
            "756e7465725265776172641a4d0a0a4974656d526577617264122f0a0469" .
            "74656d18012001280e32212e504f474f50726f746f732e496e76656e746f" .
            "72792e4974656d2e4974656d4964120e0a06616d6f756e74180220012805" .
            "1a550a12506f6b656d6f6e43616e6479526577617264122f0a0a706f6b65" .
            "6d6f6e5f696418012001280e321b2e504f474f50726f746f732e456e756d" .
            "732e506f6b656d6f6e4964120e0a06616d6f756e741802200128051ab601" .
            "0a16506f6b656d6f6e456e636f756e746572526577617264122f0a0a706f" .
            "6b656d6f6e5f696418012001280e321b2e504f474f50726f746f732e456e" .
            "756d732e506f6b656d6f6e496412310a297573655f71756573745f706f6b" .
            "656d6f6e5f656e636f756e7465725f64697374726962756974696f6e1802" .
            "2001280812380a0f706f6b656d6f6e5f646973706c617918032001280b32" .
            "1f2e504f474f50726f746f732e446174612e506f6b656d6f6e446973706c" .
            "6179227b0a045479706512090a05554e5345541000120e0a0a4558504552" .
            "49454e4345100112080a044954454d1002120c0a08535441524455535410" .
            "0312090a0543414e4459100412130a0f4156415441525f434c4f5448494e" .
            "47100512090a055155455354100612150a11504f4b454d4f4e5f454e434f" .
            "554e5445521007620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

