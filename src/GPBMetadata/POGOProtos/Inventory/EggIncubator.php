<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/EggIncubator.proto

namespace GPBMetadata\POGOProtos\Inventory;

class EggIncubator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        \GPBMetadata\POGOProtos\Inventory\EggIncubatorType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae4020a27504f474f50726f746f732f496e76656e746f72792f45676749" .
            "6e63756261746f722e70726f746f1214504f474f50726f746f732e496e76" .
            "656e746f72791a2b504f474f50726f746f732f496e76656e746f72792f45" .
            "6767496e63756261746f72547970652e70726f746f22ed010a0c45676749" .
            "6e63756261746f72120a0a02696418012001280912320a076974656d5f69" .
            "6418022001280e32212e504f474f50726f746f732e496e76656e746f7279" .
            "2e4974656d2e4974656d4964123e0a0e696e63756261746f725f74797065" .
            "18032001280e32262e504f474f50726f746f732e496e76656e746f72792e" .
            "456767496e63756261746f725479706512160a0e757365735f72656d6169" .
            "6e696e6718042001280512120a0a706f6b656d6f6e5f6964180520012804" .
            "12170a0f73746172745f6b6d5f77616c6b656418062001280112180a1074" .
            "61726765745f6b6d5f77616c6b6564180720012801620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

