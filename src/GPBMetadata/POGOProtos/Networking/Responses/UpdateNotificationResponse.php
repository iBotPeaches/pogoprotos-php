<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UpdateNotificationResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class UpdateNotificationResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\NotificationState::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f020a40504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f5570646174654e6f74696669636174696f6e526573706f" .
            "6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b69" .
            "6e672e526573706f6e7365731a28504f474f50726f746f732f456e756d73" .
            "2f4e6f74696669636174696f6e53746174652e70726f746f2287010a1a55" .
            "70646174654e6f74696669636174696f6e526573706f6e736512180a106e" .
            "6f74696669636174696f6e5f696473180120032809121b0a136372656174" .
            "655f74696d657374616d705f6d7318022003280312320a05737461746518" .
            "032001280e32232e504f474f50726f746f732e456e756d732e4e6f746966" .
            "69636174696f6e5374617465620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
