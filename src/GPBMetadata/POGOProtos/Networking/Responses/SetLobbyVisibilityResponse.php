<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SetLobbyVisibilityResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class SetLobbyVisibilityResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Raid\Lobby::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80030a40504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f5365744c6f6262795669736962696c697479526573706f" .
            "6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b69" .
            "6e672e526573706f6e7365732292020a1a5365744c6f6262795669736962" .
            "696c697479526573706f6e736512520a06726573756c7418012001280e32" .
            "422e504f474f50726f746f732e4e6574776f726b696e672e526573706f6e" .
            "7365732e5365744c6f6262795669736962696c697479526573706f6e7365" .
            "2e526573756c74122a0a056c6f62627918022001280b321b2e504f474f50" .
            "726f746f732e446174612e526169642e4c6f62627922740a06526573756c" .
            "7412090a05554e5345541000120b0a07535543434553531001121b0a1745" .
            "52524f525f4e4f545f4c4f4242595f43524541544f52100212190a154552" .
            "524f525f4c4f4242595f4e4f545f464f554e441003121a0a164552524f52" .
            "5f524149445f554e415641494c41424c451004620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
