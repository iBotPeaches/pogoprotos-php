<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetAssetDigestResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetAssetDigestResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\AssetDigestEntry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae7020a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4765744173736574446967657374526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e73657322fd010a164765744173736574446967657374526573" .
            "706f6e736512310a0664696765737418012003280b32212e504f474f5072" .
            "6f746f732e446174612e4173736574446967657374456e74727912140a0c" .
            "74696d657374616d705f6d73180220012804124e0a06726573756c741803" .
            "2001280e323e2e504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365732e4765744173736574446967657374526573706f6e73" .
            "652e526573756c7412130a0b706167655f6f666673657418042001280522" .
            "350a06526573756c7412090a05554e5345541000120b0a07535543434553" .
            "53100112080a0450414745100212090a0552455452591003620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

