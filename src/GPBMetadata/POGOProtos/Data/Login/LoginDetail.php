<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Login/LoginDetail.proto

namespace GPBMetadata\POGOProtos\Data\Login;

class LoginDetail
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\IdentityProvider::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa5010a27504f474f50726f746f732f446174612f4c6f67696e2f4c6f67" .
            "696e44657461696c2e70726f746f1215504f474f50726f746f732e446174" .
            "612e4c6f67696e225b0a0b4c6f67696e44657461696c123d0a116964656e" .
            "746974795f70726f766964657218012001280e32222e504f474f50726f74" .
            "6f732e456e756d732e4964656e7469747950726f7669646572120d0a0565" .
            "6d61696c180220012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

