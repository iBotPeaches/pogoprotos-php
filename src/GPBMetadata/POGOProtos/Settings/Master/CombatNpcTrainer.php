<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/CombatNpcTrainer.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class CombatNpcTrainer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Player\PlayerAvatar::initOnce();
        \GPBMetadata\POGOProtos\Data\NpcPokemon::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea030a31504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f436f6d6261744e7063547261696e65722e70726f746f121a504f474f" .
            "50726f746f732e53657474696e67732e4d61737465721a20504f474f5072" .
            "6f746f732f446174612f4e7063506f6b656d6f6e2e70726f746f22ee020a" .
            "10436f6d6261744e7063547261696e657212140a0c747261696e65725f6e" .
            "616d6518012001280912210a19636f6d6261745f6c65616775655f74656d" .
            "706c6174655f6964180220012809121d0a15636f6d6261745f706572736f" .
            "6e616c6974795f696418032001280912190a1177696e5f6c6f6f745f7461" .
            "626c655f6964180420012809121a0a126c6f73655f6c6f6f745f7461626c" .
            "655f696418052001280912340a0661766174617218072001280b32242e50" .
            "4f474f50726f746f732e446174612e506c617965722e506c617965724176" .
            "6174617212360a11617661696c61626c655f706f6b656d6f6e1808200328" .
            "0b321b2e504f474f50726f746f732e446174612e4e7063506f6b656d6f6e" .
            "12150a0d747261696e65725f7469746c6518092001280912150a0d747261" .
            "696e65725f71756f7465180a2001280912100a0869636f6e5f75726c180b" .
            "20012809121d0a156261636b64726f705f696d6167655f62756e646c6518" .
            "0c20012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
