<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/RequestEnvelope.proto

namespace GPBMetadata\POGOProtos\Networking\Envelopes;

class RequestEnvelope
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Networking\Requests\Request::initOnce();
        \GPBMetadata\POGOProtos\Networking\Envelopes\AuthTicket::initOnce();
        \GPBMetadata\POGOProtos\Networking\Platform\PlatformRequestType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b080a35504f474f50726f746f732f4e6574776f726b696e672f456e76" .
            "656c6f7065732f52657175657374456e76656c6f70652e70726f746f121f" .
            "504f474f50726f746f732e4e6574776f726b696e672e456e76656c6f7065" .
            "731a30504f474f50726f746f732f4e6574776f726b696e672f456e76656c" .
            "6f7065732f417574685469636b65742e70726f746f1a38504f474f50726f" .
            "746f732f4e6574776f726b696e672f506c6174666f726d2f506c6174666f" .
            "726d52657175657374547970652e70726f746f22cc060a0f526571756573" .
            "74456e76656c6f706512130a0b7374617475735f636f6465180120012805" .
            "12120a0a726571756573745f696418032001280412390a08726571756573" .
            "747318042003280b32272e504f474f50726f746f732e4e6574776f726b69" .
            "6e672e52657175657374732e52657175657374125b0a11706c6174666f72" .
            "6d5f726571756573747318062003280b32402e504f474f50726f746f732e" .
            "4e6574776f726b696e672e456e76656c6f7065732e52657175657374456e" .
            "76656c6f70652e506c6174666f726d5265717565737412100a086c617469" .
            "7475646518072001280112110a096c6f6e67697475646518082001280112" .
            "100a086163637572616379180920012801124c0a09617574685f696e666f" .
            "180a2001280b32392e504f474f50726f746f732e4e6574776f726b696e67" .
            "2e456e76656c6f7065732e52657175657374456e76656c6f70652e417574" .
            "68496e666f12400a0b617574685f7469636b6574180b2001280b322b2e50" .
            "4f474f50726f746f732e4e6574776f726b696e672e456e76656c6f706573" .
            "2e417574685469636b657412210a196d735f73696e63655f6c6173745f6c" .
            "6f636174696f6e666978180c200128031a9e020a0841757468496e666f12" .
            "100a0870726f7669646572180120012809124c0a05746f6b656e18022001" .
            "280b323d2e504f474f50726f746f732e4e6574776f726b696e672e456e76" .
            "656c6f7065732e52657175657374456e76656c6f70652e41757468496e66" .
            "6f2e4a575412560a076f7074696f6e7318032001280b32452e504f474f50" .
            "726f746f732e4e6574776f726b696e672e456e76656c6f7065732e526571" .
            "75657374456e76656c6f70652e41757468496e666f2e417574684f707469" .
            "6f6e731a290a034a575412100a08636f6e74656e74731801200128091210" .
            "0a08756e6b6e6f776e321802200128051a2f0a0b417574684f7074696f6e" .
            "7312200a1870726576656e745f6163636f756e745f6372656174696f6e18" .
            "01200128081a6d0a0f506c6174666f726d5265717565737412410a047479" .
            "706518012001280e32332e504f474f50726f746f732e4e6574776f726b69" .
            "6e672e506c6174666f726d2e506c6174666f726d52657175657374547970" .
            "6512170a0f726571756573745f6d65737361676518022001280c62067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

