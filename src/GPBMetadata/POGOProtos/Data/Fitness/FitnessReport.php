<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Fitness/FitnessReport.proto

namespace GPBMetadata\POGOProtos\Data\Fitness;

class FitnessReport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Fitness\FitnessMetrics::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af6010a2b504f474f50726f746f732f446174612f4669746e6573732f46" .
            "69746e6573735265706f72742e70726f746f1217504f474f50726f746f73" .
            "2e446174612e4669746e65737322a5010a0d4669746e6573735265706f72" .
            "74121d0a136461795f6f66667365745f66726f6d5f6e6f77180120012805" .
            "4800121e0a147765656b5f6f66667365745f66726f6d5f6e6f7718022001" .
            "2805480012380a076d657472696373180a2001280b32272e504f474f5072" .
            "6f746f732e446174612e4669746e6573732e4669746e6573734d65747269" .
            "637312110a0967616d655f64617461180b2001280c42080a0657696e646f" .
            "77620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

