<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SfidaUpdateMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class SfidaUpdateMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Sfida\SfidaMetricsUpdate::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4010a40504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f53666964615570646174654d657373" .
            "6167652e70726f746f1227504f474f50726f746f732e4e6574776f726b69" .
            "6e672e52657175657374732e4d65737361676573227f0a12536669646155" .
            "70646174654d65737361676512120a0a706c617965725f6c617418012001" .
            "280112120a0a706c617965725f6c6e6718022001280112410a0e6d657472" .
            "6963735f75706461746518032001280b32292e504f474f50726f746f732e" .
            "446174612e53666964612e53666964614d65747269637355706461746562" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

