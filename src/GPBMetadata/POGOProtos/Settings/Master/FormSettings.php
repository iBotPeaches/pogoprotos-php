<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/FormSettings.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class FormSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\Form::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9020a2d504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f466f726d53657474696e67732e70726f746f121a504f474f50726f74" .
            "6f732e53657474696e67732e4d61737465721a1b504f474f50726f746f73" .
            "2f456e756d732f466f726d2e70726f746f1a20504f474f50726f746f732f" .
            "456e756d732f506f6b656d6f6e49642e70726f746f22c4010a0c466f726d" .
            "53657474696e6773122c0a07706f6b656d6f6e18012001280e321b2e504f" .
            "474f50726f746f732e456e756d732e506f6b656d6f6e4964123c0a05666f" .
            "726d7318022003280b322d2e504f474f50726f746f732e53657474696e67" .
            "732e4d61737465722e466f726d53657474696e67732e466f726d1a480a04" .
            "466f726d12240a04666f726d18012001280e32162e504f474f50726f746f" .
            "732e456e756d732e466f726d121a0a1261737365745f62756e646c655f76" .
            "616c7565180220012805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

