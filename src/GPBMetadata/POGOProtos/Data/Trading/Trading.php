<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Trading/Trading.proto

namespace GPBMetadata\POGOProtos\Data\Trading;

class Trading
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Trading\TradingPlayer::initOnce();
        \GPBMetadata\POGOProtos\Data\Friends\FriendshipLevelData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac8040a25504f474f50726f746f732f446174612f54726164696e672f54" .
            "726164696e672e70726f746f1217504f474f50726f746f732e446174612e" .
            "54726164696e671a31504f474f50726f746f732f446174612f467269656e" .
            "64732f467269656e64736869704c6576656c446174612e70726f746f22ca" .
            "030a0754726164696e67123c0a05737461746518012001280e322d2e504f" .
            "474f50726f746f732e446174612e54726164696e672e54726164696e672e" .
            "54726164696e67537461746512150a0d65787069726174696f6e5f6d7318" .
            "022001280412360a06706c6179657218032001280b32262e504f474f5072" .
            "6f746f732e446174612e54726164696e672e54726164696e67506c617965" .
            "7212360a06667269656e6418042001280b32262e504f474f50726f746f73" .
            "2e446174612e54726164696e672e54726164696e67506c61796572121a0a" .
            "1274726164696e675f73325f63656c6c5f696418052001280312170a0f74" .
            "72616e73616374696f6e5f6c6f67180620012809124b0a15667269656e64" .
            "736869705f6c6576656c5f6461746118072001280b322c2e504f474f5072" .
            "6f746f732e446174612e467269656e64732e467269656e64736869704c65" .
            "76656c44617461121a0a1269735f7370656369616c5f74726164696e6718" .
            "0820012808225c0a0c54726164696e67537461746512090a05554e534554" .
            "1000120e0a0a5052494d4f524449414c100112080a04574149541002120a" .
            "0a064143544956451003120d0a09434f4e4649524d45441004120c0a0846" .
            "494e49534845441005620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
