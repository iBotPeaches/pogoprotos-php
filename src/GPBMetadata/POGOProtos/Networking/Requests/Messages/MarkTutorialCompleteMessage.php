<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/MarkTutorialCompleteMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class MarkTutorialCompleteMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\TutorialState::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a020a49504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f4d61726b5475746f7269616c436f6d" .
            "706c6574654d6573736167652e70726f746f1227504f474f50726f746f73" .
            "2e4e6574776f726b696e672e52657175657374732e4d6573736167657322" .
            "9b010a1b4d61726b5475746f7269616c436f6d706c6574654d6573736167" .
            "65123c0a137475746f7269616c735f636f6d706c6574656418012003280e" .
            "321f2e504f474f50726f746f732e456e756d732e5475746f7269616c5374" .
            "617465121d0a1573656e645f6d61726b6574696e675f656d61696c731802" .
            "20012808121f0a1773656e645f707573685f6e6f74696669636174696f6e" .
            "73180320012808620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

