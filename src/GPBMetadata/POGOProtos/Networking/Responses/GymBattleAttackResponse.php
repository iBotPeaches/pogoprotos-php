<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GymBattleAttackResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GymBattleAttackResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleUpdate::initOnce();
        \GPBMetadata\POGOProtos\Data\Badge\AwardedGymBadge::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab6040a3d504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f47796d426174746c6541747461636b526573706f6e7365" .
            "2e70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e" .
            "526573706f6e7365731a29504f474f50726f746f732f446174612f426174" .
            "746c652f426174746c655570646174652e70726f746f1a2b504f474f5072" .
            "6f746f732f446174612f42616467652f4177617264656447796d42616467" .
            "652e70726f746f22f3020a1747796d426174746c6541747461636b526573" .
            "706f6e7365124f0a06726573756c7418012001280e323f2e504f474f5072" .
            "6f746f732e4e6574776f726b696e672e526573706f6e7365732e47796d42" .
            "6174746c6541747461636b526573706f6e73652e526573756c74123b0a0d" .
            "626174746c655f75706461746518022001280b32242e504f474f50726f74" .
            "6f732e446174612e426174746c652e426174746c6555706461746512390a" .
            "0967796d5f626164676518032001280b32262e504f474f50726f746f732e" .
            "446174612e42616467652e4177617264656447796d4261646765228e010a" .
            "06526573756c7412090a05554e5345541000120b0a075355434345535310" .
            "0112200a1c4552524f525f494e56414c49445f41545441434b5f41435449" .
            "4f4e53100212160a124552524f525f4e4f545f494e5f52414e4745100312" .
            "1b0a174552524f525f57524f4e475f424154544c455f5459504510041215" .
            "0a114552524f525f524149445f4143544956451005620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

