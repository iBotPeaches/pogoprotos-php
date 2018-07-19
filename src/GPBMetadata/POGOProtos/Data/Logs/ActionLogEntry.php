<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/ActionLogEntry.proto

namespace GPBMetadata\POGOProtos\Data\Logs;

class ActionLogEntry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Logs\CatchPokemonLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\FortSearchLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\BuddyPokemonLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\RaidRewardsLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\PasscodeRewardsLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\CompleteQuestLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\CompleteQuestStampCardLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\CompleteQuestPokemonEncounterLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\OpenGiftLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\SendGiftLogEntry::initOnce();
        \GPBMetadata\POGOProtos\Data\Logs\TradingLogEntry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd0b0a29504f474f50726f746f732f446174612f4c6f67732f41637469" .
            "6f6e4c6f67456e7472792e70726f746f1214504f474f50726f746f732e44" .
            "6174612e4c6f67731a2f504f474f50726f746f732f446174612f4c6f6773" .
            "2f4361746368506f6b656d6f6e4c6f67456e7472792e70726f746f1a2d50" .
            "4f474f50726f746f732f446174612f4c6f67732f466f7274536561726368" .
            "4c6f67456e7472792e70726f746f1a2f504f474f50726f746f732f446174" .
            "612f4c6f67732f4275646479506f6b656d6f6e4c6f67456e7472792e7072" .
            "6f746f1a2e504f474f50726f746f732f446174612f4c6f67732f52616964" .
            "526577617264734c6f67456e7472792e70726f746f1a32504f474f50726f" .
            "746f732f446174612f4c6f67732f50617373636f6465526577617264734c" .
            "6f67456e7472792e70726f746f1a30504f474f50726f746f732f44617461" .
            "2f4c6f67732f436f6d706c65746551756573744c6f67456e7472792e7072" .
            "6f746f1a39504f474f50726f746f732f446174612f4c6f67732f436f6d70" .
            "6c65746551756573745374616d70436172644c6f67456e7472792e70726f" .
            "746f1a40504f474f50726f746f732f446174612f4c6f67732f436f6d706c" .
            "6574655175657374506f6b656d6f6e456e636f756e7465724c6f67456e74" .
            "72792e70726f746f1a2b504f474f50726f746f732f446174612f4c6f6773" .
            "2f4f70656e476966744c6f67456e7472792e70726f746f1a2b504f474f50" .
            "726f746f732f446174612f4c6f67732f53656e64476966744c6f67456e74" .
            "72792e70726f746f1a2a504f474f50726f746f732f446174612f4c6f6773" .
            "2f54726164696e674c6f67456e7472792e70726f746f22d7060a0e416374" .
            "696f6e4c6f67456e74727912140a0c74696d657374616d705f6d73180120" .
            "012803120d0a05736669646118022001280812430a0d63617463685f706f" .
            "6b656d6f6e18032001280b322a2e504f474f50726f746f732e446174612e" .
            "4c6f67732e4361746368506f6b656d6f6e4c6f67456e7472794800123f0a" .
            "0b666f72745f73656172636818042001280b32282e504f474f50726f746f" .
            "732e446174612e4c6f67732e466f72745365617263684c6f67456e747279" .
            "480012430a0d62756464795f706f6b656d6f6e18052001280b322a2e504f" .
            "474f50726f746f732e446174612e4c6f67732e4275646479506f6b656d6f" .
            "6e4c6f67456e747279480012410a0c726169645f72657761726473180620" .
            "01280b32292e504f474f50726f746f732e446174612e4c6f67732e526169" .
            "64526577617264734c6f67456e747279480012490a1070617373636f6465" .
            "5f7265776172647318072001280b322d2e504f474f50726f746f732e4461" .
            "74612e4c6f67732e50617373636f6465526577617264734c6f67456e7472" .
            "79480012450a0e636f6d706c6574655f717565737418082001280b322b2e" .
            "504f474f50726f746f732e446174612e4c6f67732e436f6d706c65746551" .
            "756573744c6f67456e747279480012590a19636f6d706c6574655f717565" .
            "73745f7374616d705f6361726418092001280b32342e504f474f50726f74" .
            "6f732e446174612e4c6f67732e436f6d706c65746551756573745374616d" .
            "70436172644c6f67456e747279480012670a20636f6d706c6574655f7175" .
            "6573745f706f6b656d6f6e5f656e636f756e746572180a2001280b323b2e" .
            "504f474f50726f746f732e446174612e4c6f67732e436f6d706c65746551" .
            "75657374506f6b656d6f6e456e636f756e7465724c6f67456e7472794800" .
            "123b0a096f70656e5f67696674180c2001280b32262e504f474f50726f74" .
            "6f732e446174612e4c6f67732e4f70656e476966744c6f67456e74727948" .
            "00123b0a0973656e645f67696674180d2001280b32262e504f474f50726f" .
            "746f732e446174612e4c6f67732e53656e64476966744c6f67456e747279" .
            "480012380a0774726164696e67180e2001280b32252e504f474f50726f74" .
            "6f732e446174612e4c6f67732e54726164696e674c6f67456e7472794800" .
            "42080a06416374696f6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

