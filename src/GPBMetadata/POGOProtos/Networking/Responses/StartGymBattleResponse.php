<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/StartGymBattleResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class StartGymBattleResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleLog::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\Battle::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f080a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f537461727447796d426174746c65526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365731a26504f474f50726f746f732f446174612f42617474" .
            "6c652f426174746c654c6f672e70726f746f1a2e504f474f50726f746f73" .
            "2f446174612f426174746c652f426174746c655061727469636970616e74" .
            "2e70726f746f1a23504f474f50726f746f732f446174612f426174746c65" .
            "2f426174746c652e70726f746f22b8060a16537461727447796d42617474" .
            "6c65526573706f6e7365124e0a06726573756c7418012001280e323e2e50" .
            "4f474f50726f746f732e4e6574776f726b696e672e526573706f6e736573" .
            "2e537461727447796d426174746c65526573706f6e73652e526573756c74" .
            "12210a19626174746c655f73746172745f74696d657374616d705f6d7318" .
            "0220012803121f0a17626174746c655f656e645f74696d657374616d705f" .
            "6d7318032001280312110a09626174746c655f6964180420012809123b0a" .
            "08646566656e64657218052001280b32292e504f474f50726f746f732e44" .
            "6174612e426174746c652e426174746c655061727469636970616e741235" .
            "0a0a626174746c655f6c6f6718062001280b32212e504f474f50726f746f" .
            "732e446174612e426174746c652e426174746c654c6f67123b0a08617474" .
            "61636b657218072001280b32292e504f474f50726f746f732e446174612e" .
            "426174746c652e426174746c655061727469636970616e74122e0a066261" .
            "74746c6518082001280b321e2e504f474f50726f746f732e446174612e42" .
            "6174746c652e426174746c652295030a06526573756c7412090a05554e53" .
            "45541000120b0a0753554343455353100112170a134552524f525f47594d" .
            "5f4e4f545f464f554e44100212150a114552524f525f47594d5f4e455554" .
            "52414c100312180a144552524f525f47594d5f57524f4e475f5445414d10" .
            "0412130a0f4552524f525f47594d5f454d5054591005121a0a164552524f" .
            "525f494e56414c49445f444546454e444552100612290a254552524f525f" .
            "545241494e494e475f494e56414c49445f41545441434b45525f434f554e" .
            "541007121d0a194552524f525f414c4c5f504f4b454d4f4e5f4641494e54" .
            "45441008121a0a164552524f525f544f4f5f4d414e595f424154544c4553" .
            "1009121a0a164552524f525f544f4f5f4d414e595f504c4159455253100a" .
            "121c0a184552524f525f47594d5f424154544c455f4c4f434b4f5554100b" .
            "12240a204552524f525f504c415945525f42454c4f575f4d494e494d554d" .
            "5f4c4556454c100c12160a124552524f525f4e4f545f494e5f52414e4745" .
            "100d121a0a164552524f525f504f495f494e41434345535349424c45100e" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
