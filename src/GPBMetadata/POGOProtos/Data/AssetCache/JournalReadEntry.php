<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/AssetCache/JournalReadEntry.proto

namespace GPBMetadata\POGOProtos\Data\AssetCache;

class JournalReadEntry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\AssetCache\HashedKey::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa6010a31504f474f50726f746f732f446174612f417373657443616368" .
            "652f4a6f75726e616c52656164456e7472792e70726f746f121a504f474f" .
            "50726f746f732e446174612e41737365744361636865224d0a104a6f7572" .
            "6e616c52656164456e74727912390a0a6861736865645f6b657918012001" .
            "280b32252e504f474f50726f746f732e446174612e417373657443616368" .
            "652e4861736865644b6579620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

