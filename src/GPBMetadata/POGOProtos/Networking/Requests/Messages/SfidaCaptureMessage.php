<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SfidaCaptureMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class SfidaCaptureMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\EncounterType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abc020a41504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f5366696461436170747572654d6573" .
            "736167652e70726f746f1227504f474f50726f746f732e4e6574776f726b" .
            "696e672e52657175657374732e4d6573736167657322c5010a1353666964" .
            "61436170747572654d65737361676512150a0d737061776e706f696e745f" .
            "696418012001280912140a0c656e636f756e7465725f6964180220012803" .
            "12120a0a706c617965725f6c617418032001280112120a0a706c61796572" .
            "5f6c6e6718042001280112370a0e656e636f756e7465725f747970651805" .
            "2001280e321f2e504f474f50726f746f732e456e756d732e456e636f756e" .
            "74657254797065120f0a0767796d5f6c6174180620012801120f0a076779" .
            "6d5f6c6e67180720012801620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

