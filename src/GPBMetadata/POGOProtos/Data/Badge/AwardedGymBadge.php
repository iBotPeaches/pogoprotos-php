<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Badge/AwardedGymBadge.proto

namespace GPBMetadata\POGOProtos\Data\Badge;

class AwardedGymBadge
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\GymBadgeType::initOnce();
        \GPBMetadata\POGOProtos\Data\Badge\GymBadgeStats::initOnce();
        \GPBMetadata\POGOProtos\Data\Raid\PlayerRaidInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80050a2b504f474f50726f746f732f446174612f42616467652f417761" .
            "7264656447796d42616467652e70726f746f1215504f474f50726f746f73" .
            "2e446174612e42616467651a23504f474f50726f746f732f456e756d732f" .
            "47796d4261646765547970652e70726f746f1a29504f474f50726f746f73" .
            "2f446174612f42616467652f47796d426164676553746174732e70726f74" .
            "6f1a29504f474f50726f746f732f446174612f526169642f506c61796572" .
            "52616964496e666f2e70726f746f22b6030a0f4177617264656447796d42" .
            "61646765120f0a07666f72745f696418012001280912360a0e67796d5f62" .
            "616467655f7479706518022001280e321e2e504f474f50726f746f732e45" .
            "6e756d732e47796d426164676554797065120d0a0573636f726518032001" .
            "280d123d0a0f67796d5f62616467655f737461747318042001280b32242e" .
            "504f474f50726f746f732e446174612e42616467652e47796d4261646765" .
            "537461747312200a186c6173745f7570646174655f74696d657374616d70" .
            "5f6d73180520012804121f0a176c6173745f636865636b5f74696d657374" .
            "616d705f6d73180b2001280412150a0d6561726e65645f706f696e747318" .
            "0c2001280d12100a0870726f6772657373180d2001280212100a086c6576" .
            "656c5f7570180e20012808120c0a046e616d6518062001280912110a0969" .
            "6d6167655f75726c18072001280912130a0b6465736372697074696f6e18" .
            "082001280912100a086c6174697475646518092001280112110a096c6f6e" .
            "676974756465180a2001280112330a057261696473180f2001280b32242e" .
            "504f474f50726f746f732e446174612e526169642e506c61796572526169" .
            "64496e666f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

