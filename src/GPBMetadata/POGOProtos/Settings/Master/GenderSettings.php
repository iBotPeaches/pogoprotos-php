<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GenderSettings.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class GenderSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\PokemonGenderSettings::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa1020a2f504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f47656e64657253657474696e67732e70726f746f121a504f474f5072" .
            "6f746f732e53657474696e67732e4d61737465721a3e504f474f50726f74" .
            "6f732f53657474696e67732f4d61737465722f506f6b656d6f6e2f506f6b" .
            "656d6f6e47656e64657253657474696e67732e70726f746f2289010a0e47" .
            "656e64657253657474696e6773122c0a07706f6b656d6f6e18012001280e" .
            "321b2e504f474f50726f746f732e456e756d732e506f6b656d6f6e496412" .
            "490a0667656e64657218022001280b32392e504f474f50726f746f732e53" .
            "657474696e67732e4d61737465722e506f6b656d6f6e2e506f6b656d6f6e" .
            "47656e64657253657474696e6773620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

