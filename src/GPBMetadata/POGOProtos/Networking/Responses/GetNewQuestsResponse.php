<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetNewQuestsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetNewQuestsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Quests\ClientQuest::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83030a3a504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4765744e6577517565737473526573706f6e73652e7072" .
            "6f746f121f504f474f50726f746f732e4e6574776f726b696e672e526573" .
            "706f6e736573229b020a144765744e6577517565737473526573706f6e73" .
            "65124c0a0673746174757318012001280e323c2e504f474f50726f746f73" .
            "2e4e6574776f726b696e672e526573706f6e7365732e4765744e65775175" .
            "65737473526573706f6e73652e53746174757312330a0671756573747318" .
            "022003280b32232e504f474f50726f746f732e446174612e517565737473" .
            "2e436c69656e74517565737412430a1676657273696f6e5f6368616e6765" .
            "645f71756573747318032003280b32232e504f474f50726f746f732e4461" .
            "74612e5175657374732e436c69656e745175657374223b0a065374617475" .
            "7312090a05554e5345541000120b0a0753554343455353100112190a1545" .
            "52524f525f494e56414c49445f444953504c41591002620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

