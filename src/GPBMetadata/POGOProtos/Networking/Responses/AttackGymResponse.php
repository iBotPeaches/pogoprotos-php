<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/AttackGymResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class AttackGymResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattlePokemonInfo::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleUpdate::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab1050a37504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f41747461636b47796d526573706f6e73652e70726f746f" .
            "121f504f474f50726f746f732e4e6574776f726b696e672e526573706f6e" .
            "7365731a26504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c654c6f672e70726f746f1a2e504f474f50726f746f732f44617461" .
            "2f426174746c652f426174746c65506f6b656d6f6e496e666f2e70726f74" .
            "6f1a29504f474f50726f746f732f446174612f426174746c652f42617474" .
            "6c655570646174652e70726f746f22c9030a1141747461636b47796d5265" .
            "73706f6e736512490a06726573756c7418012001280e32392e504f474f50" .
            "726f746f732e4e6574776f726b696e672e526573706f6e7365732e417474" .
            "61636b47796d526573706f6e73652e526573756c7412350a0a626174746c" .
            "655f6c6f6718022001280b32212e504f474f50726f746f732e446174612e" .
            "426174746c652e426174746c654c6f6712110a09626174746c655f696418" .
            "032001280912420a0f6163746976655f646566656e64657218042001280b" .
            "32292e504f474f50726f746f732e446174612e426174746c652e42617474" .
            "6c65506f6b656d6f6e496e666f12420a0f6163746976655f61747461636b" .
            "657218052001280b32292e504f474f50726f746f732e446174612e426174" .
            "746c652e426174746c65506f6b656d6f6e496e666f123b0a0d626174746c" .
            "655f75706461746518062001280b32242e504f474f50726f746f732e4461" .
            "74612e426174746c652e426174746c65557064617465225a0a0652657375" .
            "6c7412090a05554e5345541000120b0a0753554343455353100112200a1c" .
            "4552524f525f494e56414c49445f41545441434b5f414354494f4e531002" .
            "12160a124552524f525f4e4f545f494e5f52414e47451003620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

