<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetHoloInventoryResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetHoloInventoryResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\InventoryDelta::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad5010a3e504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f476574486f6c6f496e76656e746f7279526573706f6e73" .
            "652e70726f746f121f504f474f50726f746f732e4e6574776f726b696e67" .
            "2e526573706f6e736573226a0a18476574486f6c6f496e76656e746f7279" .
            "526573706f6e7365120f0a0773756363657373180120012808123d0a0f69" .
            "6e76656e746f72795f64656c746118022001280b32242e504f474f50726f" .
            "746f732e496e76656e746f72792e496e76656e746f727944656c74616206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

