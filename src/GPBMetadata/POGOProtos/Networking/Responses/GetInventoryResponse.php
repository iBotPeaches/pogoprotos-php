<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetInventoryResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetInventoryResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\InventoryDelta::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af8010a3a504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f476574496e76656e746f7279526573706f6e73652e7072" .
            "6f746f121f504f474f50726f746f732e4e6574776f726b696e672e526573" .
            "706f6e7365731a29504f474f50726f746f732f496e76656e746f72792f49" .
            "6e76656e746f727944656c74612e70726f746f22660a14476574496e7665" .
            "6e746f7279526573706f6e7365120f0a0773756363657373180120012808" .
            "123d0a0f696e76656e746f72795f64656c746118022001280b32242e504f" .
            "474f50726f746f732e496e76656e746f72792e496e76656e746f72794465" .
            "6c7461620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

