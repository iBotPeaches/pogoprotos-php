<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/RpcSocketResponseTime.proto

namespace GPBMetadata\POGOProtos\Data\Telemetry;

class RpcSocketResponseTime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aed010a35504f474f50726f746f732f446174612f54656c656d65747279" .
            "2f527063536f636b6574526573706f6e736554696d652e70726f746f1219" .
            "504f474f50726f746f732e446174612e54656c656d657472792290010a15" .
            "527063536f636b6574526573706f6e736554696d6512120a0a7265717565" .
            "73745f696418012001280412100a0870726f62655f696418022001280912" .
            "150a0d726573706f6e73655f74696d6518032001280212140a0c73696465" .
            "5f6368616e6e656c180420012808120e0a0661645f686f63180520012808" .
            "12140a0c61645f686f635f64656c6179180620012802620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
