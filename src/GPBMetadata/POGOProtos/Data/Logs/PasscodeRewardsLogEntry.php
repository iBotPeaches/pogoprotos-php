<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/PasscodeRewardsLogEntry.proto

namespace GPBMetadata\POGOProtos\Data\Logs;

class PasscodeRewardsLogEntry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\RedeemPasscodeReward::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc020a32504f474f50726f746f732f446174612f4c6f67732f50617373" .
            "636f6465526577617264734c6f67456e7472792e70726f746f1214504f47" .
            "4f50726f746f732e446174612e4c6f67731a2a504f474f50726f746f732f" .
            "446174612f52656465656d50617373636f64655265776172642e70726f74" .
            "6f22cb010a1750617373636f6465526577617264734c6f67456e74727912" .
            "440a06726573756c7418012001280e32342e504f474f50726f746f732e44" .
            "6174612e4c6f67732e50617373636f6465526577617264734c6f67456e74" .
            "72792e526573756c7412100a0870617373636f646518022001280912360a" .
            "077265776172647318032001280b32252e504f474f50726f746f732e4461" .
            "74612e52656465656d50617373636f646552657761726422200a06526573" .
            "756c7412090a05554e5345541000120b0a07535543434553531001620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}
