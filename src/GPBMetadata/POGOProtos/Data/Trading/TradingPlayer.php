<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Trading/TradingPlayer.proto

namespace GPBMetadata\POGOProtos\Data\Trading;

class TradingPlayer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Loot::initOnce();
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        \GPBMetadata\POGOProtos\Data\Trading\TradingPokemon::initOnce();
        \GPBMetadata\POGOProtos\Data\Trading\ExcludedPokemon::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af7040a2b504f474f50726f746f732f446174612f54726164696e672f54" .
            "726164696e67506c617965722e70726f746f1217504f474f50726f746f73" .
            "2e446174612e54726164696e671a1f504f474f50726f746f732f496e7665" .
            "6e746f72792f4c6f6f742e70726f746f1a30504f474f50726f746f732f44" .
            "6174612f506c617965722f506c617965725075626c696350726f66696c65" .
            "2e70726f746f1a2c504f474f50726f746f732f446174612f54726164696e" .
            "672f54726164696e67506f6b656d6f6e2e70726f746f1a2d504f474f5072" .
            "6f746f732f446174612f54726164696e672f4578636c75646564506f6b65" .
            "6d6f6e2e70726f746f22f6020a0d54726164696e67506c6179657212110a" .
            "09706c617965725f696418012001280912430a0e7075626c69635f70726f" .
            "66696c6518022001280b322b2e504f474f50726f746f732e446174612e50" .
            "6c617965722e506c617965725075626c696350726f66696c6512420a1065" .
            "78636c756465645f706f6b656d6f6e18032003280b32282e504f474f5072" .
            "6f746f732e446174612e54726164696e672e4578636c75646564506f6b65" .
            "6d6f6e12400a0f74726164696e675f706f6b656d6f6e18042001280b3227" .
            "2e504f474f50726f746f732e446174612e54726164696e672e5472616469" .
            "6e67506f6b656d6f6e12290a05626f6e757318052001280b321a2e504f47" .
            "4f50726f746f732e496e76656e746f72792e4c6f6f7412290a0570726963" .
            "6518062001280b321a2e504f474f50726f746f732e496e76656e746f7279" .
            "2e4c6f6f74121a0a1263616e5f6166666f72645f74726164696e67180720" .
            "01280812150a0d6861735f636f6e6669726d656418082001280862067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

