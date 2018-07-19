<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/PokemonSettings.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class PokemonSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonType::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonMove::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonFamilyId::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\StatsAttributes::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\CameraAttributes::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\EncounterAttributes::initOnce();
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\EvolutionBranch::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa9110a30504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f506f6b656d6f6e53657474696e67732e70726f746f121a504f474f50" .
            "726f746f732e53657474696e67732e4d61737465721a24504f474f50726f" .
            "746f732f446174612f506f6b656d6f6e446973706c61792e70726f746f1a" .
            "20504f474f50726f746f732f456e756d732f506f6b656d6f6e49642e7072" .
            "6f746f1a22504f474f50726f746f732f456e756d732f506f6b656d6f6e54" .
            "7970652e70726f746f1a22504f474f50726f746f732f456e756d732f506f" .
            "6b656d6f6e4d6f76652e70726f746f1a26504f474f50726f746f732f456e" .
            "756d732f506f6b656d6f6e46616d696c7949642e70726f746f1a38504f47" .
            "4f50726f746f732f53657474696e67732f4d61737465722f506f6b656d6f" .
            "6e2f5374617473417474726962757465732e70726f746f1a39504f474f50" .
            "726f746f732f53657474696e67732f4d61737465722f506f6b656d6f6e2f" .
            "43616d657261417474726962757465732e70726f746f1a3c504f474f5072" .
            "6f746f732f53657474696e67732f4d61737465722f506f6b656d6f6e2f45" .
            "6e636f756e746572417474726962757465732e70726f746f1a38504f474f" .
            "50726f746f732f53657474696e67732f4d61737465722f506f6b656d6f6e" .
            "2f45766f6c7574696f6e4272616e63682e70726f746f22ab0d0a0f506f6b" .
            "656d6f6e53657474696e6773122f0a0a706f6b656d6f6e5f696418012001" .
            "280e321b2e504f474f50726f746f732e456e756d732e506f6b656d6f6e49" .
            "6412130a0b6d6f64656c5f7363616c65180320012802122b0a0474797065" .
            "18042001280e321d2e504f474f50726f746f732e456e756d732e506f6b65" .
            "6d6f6e54797065122d0a06747970655f3218052001280e321d2e504f474f" .
            "50726f746f732e456e756d732e506f6b656d6f6e5479706512440a066361" .
            "6d65726118062001280b32342e504f474f50726f746f732e53657474696e" .
            "67732e4d61737465722e506f6b656d6f6e2e43616d657261417474726962" .
            "75746573124a0a09656e636f756e74657218072001280b32372e504f474f" .
            "50726f746f732e53657474696e67732e4d61737465722e506f6b656d6f6e" .
            "2e456e636f756e7465724174747269627574657312420a05737461747318" .
            "082001280b32332e504f474f50726f746f732e53657474696e67732e4d61" .
            "737465722e506f6b656d6f6e2e5374617473417474726962757465731232" .
            "0a0b717569636b5f6d6f76657318092003280e321d2e504f474f50726f74" .
            "6f732e456e756d732e506f6b656d6f6e4d6f766512360a0f63696e656d61" .
            "7469635f6d6f766573180a2003280e321d2e504f474f50726f746f732e45" .
            "6e756d732e506f6b656d6f6e4d6f766512160a0e616e696d6174696f6e5f" .
            "74696d65180b2003280212320a0d65766f6c7574696f6e5f696473180c20" .
            "03280e321b2e504f474f50726f746f732e456e756d732e506f6b656d6f6e" .
            "496412160a0e65766f6c7574696f6e5f70697073180d2001280512490a06" .
            "726172697479180e2001280e32392e504f474f50726f746f732e53657474" .
            "696e67732e4d61737465722e506f6b656d6f6e53657474696e67732e506f" .
            "6b656d6f6e52617269747912180a10706f6b656465785f6865696768745f" .
            "6d180f2001280212190a11706f6b656465785f7765696768745f6b671810" .
            "2001280212360a11706172656e745f706f6b656d6f6e5f69641811200128" .
            "0e321b2e504f474f50726f746f732e456e756d732e506f6b656d6f6e4964" .
            "12160a0e6865696768745f7374645f64657618122001280212160a0e7765" .
            "696768745f7374645f646576181320012802121c0a146b6d5f6469737461" .
            "6e63655f746f5f686174636818142001280212340a0966616d696c795f69" .
            "6418152001280e32212e504f474f50726f746f732e456e756d732e506f6b" .
            "656d6f6e46616d696c79496412170a0f63616e64795f746f5f65766f6c76" .
            "6518162001280512190a116b6d5f62756464795f64697374616e63651817" .
            "2001280212490a0a62756464795f73697a6518182001280e32352e504f47" .
            "4f50726f746f732e53657474696e67732e4d61737465722e506f6b656d6f" .
            "6e53657474696e67732e427564647953697a6512140a0c6d6f64656c5f68" .
            "6569676874181920012802124d0a1065766f6c7574696f6e5f6272616e63" .
            "68181a2003280b32332e504f474f50726f746f732e53657474696e67732e" .
            "4d61737465722e506f6b656d6f6e2e45766f6c7574696f6e4272616e6368" .
            "12160a0e6d6f64656c5f7363616c655f7632181b2001280212320a04666f" .
            "726d181c2001280e32242e504f474f50726f746f732e446174612e506f6b" .
            "656d6f6e446973706c61792e466f726d12370a106576656e745f71756963" .
            "6b5f6d6f7665181d2001280e321d2e504f474f50726f746f732e456e756d" .
            "732e506f6b656d6f6e4d6f7665123b0a146576656e745f63696e656d6174" .
            "69635f6d6f7665181e2001280e321d2e504f474f50726f746f732e456e75" .
            "6d732e506f6b656d6f6e4d6f766512190a1162756464795f6f6666736574" .
            "5f6d616c65181f20032802121b0a1362756464795f6f66667365745f6665" .
            "6d616c6518202003280212130a0b62756464795f7363616c651821200128" .
            "02121d0a1562756464795f706f7274726169745f6f666673657418222003" .
            "280212390a0b706172656e745f666f726d18232001280e32242e504f474f" .
            "50726f746f732e446174612e506f6b656d6f6e446973706c61792e466f72" .
            "6d22620a09427564647953697a6512100a0c42554444595f4d454449554d" .
            "100012120a0e42554444595f53484f554c4445521001120d0a0942554444" .
            "595f424947100212100a0c42554444595f464c59494e471003120e0a0a42" .
            "554444595f42414259100422630a0d506f6b656d6f6e5261726974791219" .
            "0a15504f4b454d4f4e5f5241524954595f4e4f524d414c1000121c0a1850" .
            "4f4b454d4f4e5f5241524954595f4c4547454e44415259100112190a1550" .
            "4f4b454d4f4e5f5241524954595f4d59544849431002620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

