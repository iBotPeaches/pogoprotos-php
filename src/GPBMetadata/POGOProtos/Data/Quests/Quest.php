<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quest.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class Quest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\QuestType::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\CatchPokemonQuest::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\QuestReward::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\QuestGoal::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\AddFriendQuest::initOnce();
        \GPBMetadata\POGOProtos\Data\Quests\TradePokemonQuest::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a930d0a22504f474f50726f746f732f446174612f5175657374732f5175" .
            "6573742e70726f746f1216504f474f50726f746f732e446174612e517565" .
            "7374731a2e504f474f50726f746f732f446174612f5175657374732f4361" .
            "746368506f6b656d6f6e51756573742e70726f746f1a28504f474f50726f" .
            "746f732f446174612f5175657374732f51756573745265776172642e7072" .
            "6f746f1a26504f474f50726f746f732f446174612f5175657374732f5175" .
            "657374476f616c2e70726f746f1a2b504f474f50726f746f732f44617461" .
            "2f5175657374732f416464467269656e6451756573742e70726f746f1a2e" .
            "504f474f50726f746f732f446174612f5175657374732f5472616465506f" .
            "6b656d6f6e51756573742e70726f746f22ed0a0a055175657374122f0a0a" .
            "71756573745f7479706518012001280e321b2e504f474f50726f746f732e" .
            "456e756d732e517565737454797065123f0a0b6461696c795f7175657374" .
            "18022001280b32282e504f474f50726f746f732e446174612e5175657374" .
            "732e51756573742e4461696c795175657374480012420a0a6d756c74695f" .
            "7061727418032001280b322c2e504f474f50726f746f732e446174612e51" .
            "75657374732e51756573742e4d756c746950617274517565737448001242" .
            "0a0d63617463685f706f6b656d6f6e18042001280b32292e504f474f5072" .
            "6f746f732e446174612e5175657374732e4361746368506f6b656d6f6e51" .
            "756573744800123c0a0a6164645f667269656e6418052001280b32262e50" .
            "4f474f50726f746f732e446174612e5175657374732e416464467269656e" .
            "645175657374480012420a0d74726164655f706f6b656d6f6e1806200128" .
            "0b32292e504f474f50726f746f732e446174612e5175657374732e547261" .
            "6465506f6b656d6f6e5175657374480012100a0871756573745f69641864" .
            "2001280912120a0a71756573745f73656564186520012803123c0a0d7175" .
            "6573745f636f6e7465787418662001280e32252e504f474f50726f746f73" .
            "2e446174612e5175657374732e51756573742e436f6e7465787412130a0b" .
            "74656d706c6174655f696418672001280912100a0870726f677265737318" .
            "6820012805122f0a04676f616c18692001280b32212e504f474f50726f74" .
            "6f732e446174612e5175657374732e5175657374476f616c12340a067374" .
            "61747573186a2001280e32242e504f474f50726f746f732e446174612e51" .
            "75657374732e51756573742e537461747573123a0a0d71756573745f7265" .
            "7761726473186b2003280b32232e504f474f50726f746f732e446174612e" .
            "5175657374732e5175657374526577617264121d0a156372656174696f6e" .
            "5f74696d657374616d705f6d73186c2001280312200a186c6173745f7570" .
            "646174655f74696d657374616d705f6d73186d2001280312200a18636f6d" .
            "70656c6574696f6e5f74696d657374616d705f6d73186e20012803120f0a" .
            "07666f72745f6964186f2001280912170a0f61646d696e5f67656e657261" .
            "74656418702001280812240a1c7374616d705f636f756e745f6f76657272" .
            "6964655f656e61626c6564187120012808121c0a147374616d705f636f75" .
            "6e745f6f7665727269646518722001280512120a0a73325f63656c6c5f69" .
            "6418732001280312240a1c73746f72795f71756573745f74656d706c6174" .
            "655f76657273696f6e18742001280512410a0d6461696c795f636f756e74" .
            "657218752001280b322a2e504f474f50726f746f732e446174612e517565" .
            "7374732e51756573742e4461696c79436f756e746572121f0a1772657761" .
            "72645f706f6b656d6f6e5f69636f6e5f75726c1876200128091a430a0e4d" .
            "756c746950617274517565737412310a0a7375625f717565737473180120" .
            "03280b321d2e504f474f50726f746f732e446174612e5175657374732e51" .
            "756573741a490a0a4461696c795175657374121d0a1563757272656e745f" .
            "706572696f645f6275636b6574180120012805121c0a1463757272656e74" .
            "5f73747265616b5f636f756e741802200128051a2d0a0c4461696c79436f" .
            "756e746572120e0a0677696e646f77180120012803120d0a05636f756e74" .
            "180220012805223a0a07436f6e7465787412090a05554e5345541000120f" .
            "0a0b53544f52595f5155455354100112130a0f4348414c4c454e47455f51" .
            "55455354100222470a0653746174757312140a105354415455535f554e44" .
            "4546494e4544100012110a0d5354415455535f414354495645100112140a" .
            "105354415455535f434f4d504c45544544100242070a0551756573746206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

