<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryKey.proto

namespace GPBMetadata\POGOProtos\Inventory;

class InventoryKey
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\QuestType::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonFamilyId::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0add040a27504f474f50726f746f732f496e76656e746f72792f496e7665" .
            "6e746f72794b65792e70726f746f1214504f474f50726f746f732e496e76" .
            "656e746f72791a26504f474f50726f746f732f456e756d732f506f6b656d" .
            "6f6e46616d696c7949642e70726f746f1a26504f474f50726f746f732f49" .
            "6e76656e746f72792f4974656d2f4974656d49642e70726f746f22c3030a" .
            "0c496e76656e746f72794b657912120a0a706f6b656d6f6e5f6964180120" .
            "012806122f0a046974656d18022001280e32212e504f474f50726f746f73" .
            "2e496e76656e746f72792e4974656d2e4974656d496412180a10706f6b65" .
            "6465785f656e7472795f696418032001280512140a0c706c617965725f73" .
            "7461747318042001280812170a0f706c617965725f63757272656e637918" .
            "052001280812150a0d706c617965725f63616d657261180620012808121a" .
            "0a12696e76656e746f72795f757067726164657318072001280812150a0d" .
            "6170706c6965645f6974656d7318082001280812160a0e6567675f696e63" .
            "756261746f7273180920012808123c0a11706f6b656d6f6e5f66616d696c" .
            "795f6964180a2001280e32212e504f474f50726f746f732e456e756d732e" .
            "506f6b656d6f6e46616d696c794964122f0a0a71756573745f7479706518" .
            "0b2001280e321b2e504f474f50726f746f732e456e756d732e5175657374" .
            "54797065121a0a126176617461725f74656d706c6174655f6964180c2001" .
            "280912140a0c726169645f7469636b657473180d20012808120e0a067175" .
            "65737473180e2001280812120a0a676966745f626f786573180f20012808" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

