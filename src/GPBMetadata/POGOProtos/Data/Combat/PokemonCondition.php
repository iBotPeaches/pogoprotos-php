<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Combat/PokemonCondition.proto

namespace GPBMetadata\POGOProtos\Data\Combat;

class PokemonCondition
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\ConditionType::initOnce();
        \GPBMetadata\POGOProtos\Data\Combat\WithPokemonCpLimit::initOnce();
        \GPBMetadata\POGOProtos\Data\Combat\WithPokemonType::initOnce();
        \GPBMetadata\POGOProtos\Data\Combat\WithPokemonCategory::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aff030a2d504f474f50726f746f732f446174612f436f6d6261742f506f" .
            "6b656d6f6e436f6e646974696f6e2e70726f746f1216504f474f50726f74" .
            "6f732e446174612e436f6d6261741a2f504f474f50726f746f732f446174" .
            "612f436f6d6261742f57697468506f6b656d6f6e43704c696d69742e7072" .
            "6f746f1a2c504f474f50726f746f732f446174612f436f6d6261742f5769" .
            "7468506f6b656d6f6e547970652e70726f746f1a30504f474f50726f746f" .
            "732f446174612f436f6d6261742f57697468506f6b656d6f6e4361746567" .
            "6f72792e70726f746f229c020a10506f6b656d6f6e436f6e646974696f6e" .
            "122d0a047479706518012001280e321f2e504f474f50726f746f732e456e" .
            "756d732e436f6e646974696f6e5479706512490a15776974685f706f6b65" .
            "6d6f6e5f63705f6c696d697418022001280b322a2e504f474f50726f746f" .
            "732e446174612e436f6d6261742e57697468506f6b656d6f6e43704c696d" .
            "697412420a11776974685f706f6b656d6f6e5f7479706518032001280b32" .
            "272e504f474f50726f746f732e446174612e436f6d6261742e5769746850" .
            "6f6b656d6f6e54797065124a0a15776974685f706f6b656d6f6e5f636174" .
            "65676f727918042001280b322b2e504f474f50726f746f732e446174612e" .
            "436f6d6261742e57697468506f6b656d6f6e43617465676f727962067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

