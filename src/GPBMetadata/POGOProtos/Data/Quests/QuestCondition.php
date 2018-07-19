<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestCondition.proto

namespace GPBMetadata\POGOProtos\Data\Quests;

class QuestCondition
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\ActivityType::initOnce();
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonType::initOnce();
        \GPBMetadata\POGOProtos\Data\Raid\RaidInfo::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad5180a2b504f474f50726f746f732f446174612f5175657374732f5175" .
            "657374436f6e646974696f6e2e70726f746f1216504f474f50726f746f73" .
            "2e446174612e5175657374731a23504f474f50726f746f732f456e756d73" .
            "2f4163746976697479547970652e70726f746f1a20504f474f50726f746f" .
            "732f456e756d732f4261646765547970652e70726f746f1a20504f474f50" .
            "726f746f732f456e756d732f506f6b656d6f6e49642e70726f746f1a2250" .
            "4f474f50726f746f732f456e756d732f506f6b656d6f6e547970652e7072" .
            "6f746f1a23504f474f50726f746f732f446174612f526169642f52616964" .
            "496e666f2e70726f746f1a26504f474f50726f746f732f496e76656e746f" .
            "72792f4974656d2f4974656d49642e70726f746f22ab160a0e5175657374" .
            "436f6e646974696f6e12420a047479706518012001280e32342e504f474f" .
            "50726f746f732e446174612e5175657374732e5175657374436f6e646974" .
            "696f6e2e436f6e646974696f6e5479706512510a11776974685f706f6b65" .
            "6d6f6e5f7479706518022001280b32362e504f474f50726f746f732e4461" .
            "74612e5175657374732e5175657374436f6e646974696f6e2e5769746850" .
            "6f6b656d6f6e5479706512590a15776974685f706f6b656d6f6e5f636174" .
            "65676f727918032001280b323a2e504f474f50726f746f732e446174612e" .
            "5175657374732e5175657374436f6e646974696f6e2e57697468506f6b65" .
            "6d6f6e43617465676f727912530a12776974685f776561746865725f626f" .
            "6f737418042001280b32372e504f474f50726f746f732e446174612e5175" .
            "657374732e5175657374436f6e646974696f6e2e57697468576561746865" .
            "72426f6f7374125e0a18776974685f6461696c795f636170747572655f62" .
            "6f6e757318052001280b323c2e504f474f50726f746f732e446174612e51" .
            "75657374732e5175657374436f6e646974696f6e2e576974684461696c79" .
            "43617074757265426f6e757312580a15776974685f6461696c795f737069" .
            "6e5f626f6e757318062001280b32392e504f474f50726f746f732e446174" .
            "612e5175657374732e5175657374436f6e646974696f6e2e576974684461" .
            "696c795370696e426f6e757312560a14776974685f77696e5f726169645f" .
            "73746174757318072001280b32382e504f474f50726f746f732e44617461" .
            "2e5175657374732e5175657374436f6e646974696f6e2e5769746857696e" .
            "52616964537461747573124d0a0f776974685f726169645f6c6576656c18" .
            "082001280b32342e504f474f50726f746f732e446174612e517565737473" .
            "2e5175657374436f6e646974696f6e2e57697468526169644c6576656c12" .
            "4d0a0f776974685f7468726f775f7479706518092001280b32342e504f47" .
            "4f50726f746f732e446174612e5175657374732e5175657374436f6e6469" .
            "74696f6e2e576974685468726f775479706512610a1a776974685f77696e" .
            "5f67796d5f626174746c655f737461747573180a2001280b323d2e504f47" .
            "4f50726f746f732e446174612e5175657374732e5175657374436f6e6469" .
            "74696f6e2e5769746857696e47796d426174746c65537461747573126d0a" .
            "20776974685f73757065725f6566666563746976655f6368617267655f6d" .
            "6f7665180b2001280b32432e504f474f50726f746f732e446174612e5175" .
            "657374732e5175657374436f6e646974696f6e2e57697468537570657245" .
            "66666563746976654368617267654d6f766512420a09776974685f697465" .
            "6d180c2001280b322f2e504f474f50726f746f732e446174612e51756573" .
            "74732e5175657374436f6e646974696f6e2e576974684974656d12570a14" .
            "776974685f756e697175655f706f6b6573746f70180d2001280b32392e50" .
            "4f474f50726f746f732e446174612e5175657374732e5175657374436f6e" .
            "646974696f6e2e57697468556e69717565506f6b6573746f7012530a1277" .
            "6974685f71756573745f636f6e74657874180e2001280b32372e504f474f" .
            "50726f746f732e446174612e5175657374732e5175657374436f6e646974" .
            "696f6e2e576974685175657374436f6e74657874124d0a0f776974685f62" .
            "616467655f74797065180f2001280b32342e504f474f50726f746f732e44" .
            "6174612e5175657374732e5175657374436f6e646974696f6e2e57697468" .
            "42616467655479706512510a11776974685f706c617965725f6c6576656c" .
            "18102001280b32362e504f474f50726f746f732e446174612e5175657374" .
            "732e5175657374436f6e646974696f6e2e57697468506c617965724c6576" .
            "656c125a0a16776974685f77696e5f626174746c655f7374617475731811" .
            "2001280b323a2e504f474f50726f746f732e446174612e5175657374732e" .
            "5175657374436f6e646974696f6e2e5769746857696e426174746c655374" .
            "617475731a460a0f57697468506f6b656d6f6e5479706512330a0c706f6b" .
            "656d6f6e5f7479706518012003280e321d2e504f474f50726f746f732e45" .
            "6e756d732e506f6b656d6f6e547970651a120a1057697468576561746865" .
            "72426f6f73741a5e0a1357697468506f6b656d6f6e43617465676f727912" .
            "150a0d63617465676f72795f6e616d6518012001280912300a0b706f6b65" .
            "6d6f6e5f69647318022003280e321b2e504f474f50726f746f732e456e75" .
            "6d732e506f6b656d6f6e49641a170a15576974684461696c794361707475" .
            "7265426f6e75731a140a12576974684461696c795370696e426f6e75731a" .
            "130a115769746857696e526169645374617475731a4d0a0d576974685261" .
            "69644c6576656c123c0a0a726169645f6c6576656c18012003280e32282e" .
            "504f474f50726f746f732e446174612e526169642e52616964496e666f2e" .
            "526169644c6576656c1a500a0d576974685468726f775479706512320a0a" .
            "7468726f775f7479706518012001280e321e2e504f474f50726f746f732e" .
            "456e756d732e416374697669747954797065120b0a036869741802200128" .
            "081a0f0a0d57697468437572766542616c6c1a180a165769746857696e47" .
            "796d426174746c655374617475731a1e0a1c576974685375706572456666" .
            "6563746976654368617267654d6f76651a3b0a08576974684974656d122f" .
            "0a046974656d18012001280e32212e504f474f50726f746f732e496e7665" .
            "6e746f72792e4974656d2e4974656d49641a140a1257697468556e697175" .
            "65506f6b6573746f701aa0010a10576974685175657374436f6e74657874" .
            "12500a07636f6e7465787418012001280e323f2e504f474f50726f746f73" .
            "2e446174612e5175657374732e5175657374436f6e646974696f6e2e5769" .
            "74685175657374436f6e746578742e436f6e74657874223a0a07436f6e74" .
            "65787412090a05554e5345541000120f0a0b53544f52595f515545535410" .
            "0112130a0f4348414c4c454e47455f515545535410021a640a0d57697468" .
            "426164676554797065122f0a0a62616467655f7479706518012003280e32" .
            "1b2e504f474f50726f746f732e456e756d732e4261646765547970651212" .
            "0a0a62616467655f72616e6b180220012805120e0a06616d6f756e741803" .
            "200128051a200a0f57697468506c617965724c6576656c120d0a056c6576" .
            "656c1801200128051a150a135769746857696e426174746c655374617475" .
            "7322de030a0d436f6e646974696f6e5479706512090a05554e5345541000" .
            "12150a11574954485f504f4b454d4f4e5f54595045100112190a15574954" .
            "485f504f4b454d4f4e5f43415445474f5259100212160a12574954485f57" .
            "4541544845525f424f4f53541003121c0a18574954485f4441494c595f43" .
            "4150545552455f424f4e5553100412190a15574954485f4441494c595f53" .
            "50494e5f424f4e5553100512180a14574954485f57494e5f524149445f53" .
            "5441545553100612130a0f574954485f524149445f4c4556454c10071213" .
            "0a0f574954485f5448524f575f545950451008121e0a1a574954485f5749" .
            "4e5f47594d5f424154544c455f5354415455531009121f0a1b574954485f" .
            "53555045525f4546464543544956455f434841524745100a120d0a095749" .
            "54485f4954454d100b12180a14574954485f554e495155455f504f4b4553" .
            "544f50100c12160a12574954485f51554553545f434f4e54455854100d12" .
            "1c0a18574954485f5448524f575f545950455f494e5f415f524f57100e12" .
            "130a0f574954485f43555256455f42414c4c100f12130a0f574954485f42" .
            "414447455f54595045101012150a11574954485f504c415945525f4c4556" .
            "454c1011121a0a16574954485f57494e5f424154544c455f535441545553" .
            "1012620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

