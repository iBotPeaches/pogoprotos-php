<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetRaidDetailsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetRaidDetailsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Raid\Lobby::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\Battle::initOnce();
        \GPBMetadata\POGOProtos\Data\Raid\RaidInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b060a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4765745261696444657461696c73526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365731a23504f474f50726f746f732f446174612f42617474" .
            "6c652f426174746c652e70726f746f1a23504f474f50726f746f732f4461" .
            "74612f526169642f52616964496e666f2e70726f746f22e7040a16476574" .
            "5261696444657461696c73526573706f6e7365122a0a056c6f6262791801" .
            "2001280b321b2e504f474f50726f746f732e446174612e526169642e4c6f" .
            "62627912330a0b726169645f626174746c6518022001280b321e2e504f47" .
            "4f50726f746f732e446174612e426174746c652e426174746c65121d0a15" .
            "706c617965725f63616e5f6a6f696e5f6c6f626279180320012808124e0a" .
            "06726573756c7418042001280e323e2e504f474f50726f746f732e4e6574" .
            "776f726b696e672e526573706f6e7365732e476574526169644465746169" .
            "6c73526573706f6e73652e526573756c7412310a09726169645f696e666f" .
            "18052001280b321e2e504f474f50726f746f732e446174612e526169642e" .
            "52616964496e666f12130a0b7469636b65745f7573656418062001280812" .
            "1d0a15667265655f7469636b65745f617661696c61626c65180720012808" .
            "12180a107468726f77735f72656d61696e696e6718082001280512180a10" .
            "72656365697665645f72657761726473180920012808121c0a146e756d5f" .
            "706c61796572735f696e5f6c6f626279180a2001280512110a0973657276" .
            "65725f6d73180b2001280322b0010a06526573756c7412090a05554e5345" .
            "541000120b0a0753554343455353100112160a124552524f525f4e4f545f" .
            "494e5f52414e4745100212180a144552524f525f524149445f434f4d504c" .
            "455445441003121a0a164552524f525f524149445f554e415641494c4142" .
            "4c45100412240a204552524f525f504c415945525f42454c4f575f4d494e" .
            "494d554d5f4c4556454c1005121a0a164552524f525f504f495f494e4143" .
            "4345535349424c451006620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

