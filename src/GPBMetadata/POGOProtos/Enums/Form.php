<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Enums/Form.proto

namespace GPBMetadata\POGOProtos\Enums;

class Form
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad1120a1b504f474f50726f746f732f456e756d732f466f726d2e70726f" .
            "746f1210504f474f50726f746f732e456e756d732a97120a04466f726d12" .
            "0e0a0a464f524d5f554e5345541000120b0a07554e4f574e5f411001120b" .
            "0a07554e4f574e5f421002120b0a07554e4f574e5f431003120b0a07554e" .
            "4f574e5f441004120b0a07554e4f574e5f451005120b0a07554e4f574e5f" .
            "461006120b0a07554e4f574e5f471007120b0a07554e4f574e5f48100812" .
            "0b0a07554e4f574e5f491009120b0a07554e4f574e5f4a100a120b0a0755" .
            "4e4f574e5f4b100b120b0a07554e4f574e5f4c100c120b0a07554e4f574e" .
            "5f4d100d120b0a07554e4f574e5f4e100e120b0a07554e4f574e5f4f100f" .
            "120b0a07554e4f574e5f501010120b0a07554e4f574e5f511011120b0a07" .
            "554e4f574e5f521012120b0a07554e4f574e5f531013120b0a07554e4f57" .
            "4e5f541014120b0a07554e4f574e5f551015120b0a07554e4f574e5f5610" .
            "16120b0a07554e4f574e5f571017120b0a07554e4f574e5f581018120b0a" .
            "07554e4f574e5f591019120b0a07554e4f574e5f5a101a121b0a17554e4f" .
            "574e5f4558434c414d4154494f4e5f504f494e54101b12170a13554e4f57" .
            "4e5f5155455354494f4e5f4d41524b101c12130a0f43415354464f524d5f" .
            "4e4f524d414c101d12120a0e43415354464f524d5f53554e4e59101e1212" .
            "0a0e43415354464f524d5f5241494e59101f12120a0e43415354464f524d" .
            "5f534e4f5759102012110a0d44454f5859535f4e4f524d414c102112110a" .
            "0d44454f5859535f41545441434b102212120a0e44454f5859535f444546" .
            "454e5345102312100a0c44454f5859535f53504545441024120d0a095350" .
            "494e44415f30301025120d0a095350494e44415f30311026120d0a095350" .
            "494e44415f30321027120d0a095350494e44415f30331028120d0a095350" .
            "494e44415f30341029120d0a095350494e44415f3035102a120d0a095350" .
            "494e44415f3036102b120d0a095350494e44415f3037102c12120a0e5241" .
            "54544154415f4e4f524d414c102d12110a0d524154544154415f414c4f4c" .
            "41102e12130a0f52415449434154455f4e4f524d414c102f12120a0e5241" .
            "5449434154455f414c4f4c41103012110a0d5241494348555f4e4f524d41" .
            "4c103112100a0c5241494348555f414c4f4c41103212140a1053414e4453" .
            "485245575f4e4f524d414c103312130a0f53414e4453485245575f414c4f" .
            "4c41103412140a1053414e44534c4153485f4e4f524d414c103512130a0f" .
            "53414e44534c4153485f414c4f4c41103612110a0d56554c5049585f4e4f" .
            "524d414c103712100a0c56554c5049585f414c4f4c41103812140a104e49" .
            "4e4554414c45535f4e4f524d414c103912130a0f4e494e4554414c45535f" .
            "414c4f4c41103a12120a0e4449474c4554545f4e4f524d414c103b12110a" .
            "0d4449474c4554545f414c4f4c41103c12120a0e4455475452494f5f4e4f" .
            "524d414c103d12110a0d4455475452494f5f414c4f4c41103e12110a0d4d" .
            "454f5754485f4e4f524d414c103f12100a0c4d454f5754485f414c4f4c41" .
            "104012120a0e5045525349414e5f4e4f524d414c104112110a0d50455253" .
            "49414e5f414c4f4c41104212120a0e47454f445544455f4e4f524d414c10" .
            "4312110a0d47454f445544455f414c4f4c41104412130a0f47524156454c" .
            "45525f4e4f524d414c104512120a0e47524156454c45525f414c4f4c4110" .
            "4612100a0c474f4c454d5f4e4f524d414c1047120f0a0b474f4c454d5f41" .
            "4c4f4c41104812110a0d4752494d45525f4e4f524d414c104912100a0c47" .
            "52494d45525f414c4f4c41104a120e0a0a4d554b5f4e4f524d414c104b12" .
            "0d0a094d554b5f414c4f4c41104c12140a10455845474755544f525f4e4f" .
            "524d414c104d12130a0f455845474755544f525f414c4f4c41104e12120a" .
            "0e4d41524f57414b5f4e4f524d414c104f12110a0d4d41524f57414b5f41" .
            "4c4f4c41105012100a0c524f544f4d5f4e4f524d414c1051120f0a0b524f" .
            "544f4d5f46524f53541052120d0a09524f544f4d5f46414e1053120d0a09" .
            "524f544f4d5f4d4f571054120e0a0a524f544f4d5f574153481055120e0a" .
            "0a524f544f4d5f48454154105612120a0e574f524d4144414d5f504c414e" .
            "54105712120a0e574f524d4144414d5f53414e4459105812120a0e574f52" .
            "4d4144414d5f5452415348105912140a104749524154494e415f414c5445" .
            "524544105a12130a0f4749524154494e415f4f524947494e105b120f0a0b" .
            "534841594d494e5f534b59105c12100a0c534841594d494e5f4c414e4410" .
            "5d12140a104348455252494d5f4f56455243415354105e12110a0d434845" .
            "5252494d5f53554e4e59105f12140a105348454c4c4f535f574553545f53" .
            "4541106012140a105348454c4c4f535f454153545f534541106112160a12" .
            "47415354524f444f4e5f574553545f534541106212160a1247415354524f" .
            "444f4e5f454153545f534541106312110a0d4152434555535f4e4f524d41" .
            "4c106412130a0f4152434555535f4649474854494e47106512110a0d4152" .
            "434555535f464c59494e47106612110a0d4152434555535f504f49534f4e" .
            "106712110a0d4152434555535f47524f554e441068120f0a0b4152434555" .
            "535f524f434b1069120e0a0a4152434555535f425547106a12100a0c4152" .
            "434555535f47484f5354106b12100a0c4152434555535f535445454c106c" .
            "120f0a0b4152434555535f46495245106d12100a0c4152434555535f5741" .
            "544552106e12100a0c4152434555535f4752415353106f12130a0f415243" .
            "4555535f454c454354524943107012120a0e4152434555535f5053594348" .
            "49431071120e0a0a4152434555535f494345107212110a0d415243455553" .
            "5f445241474f4e1073120f0a0b4152434555535f4441524b107412100a0c" .
            "4152434555535f46414952591075120f0a0b4255524d595f504c414e5410" .
            "76120f0a0b4255524d595f53414e44591077120f0a0b4255524d595f5452" .
            "4153481078120d0a095350494e44415f30381079120d0a095350494e4441" .
            "5f3039107a120d0a095350494e44415f3130107b120d0a095350494e4441" .
            "5f3131107c120d0a095350494e44415f3132107d120d0a095350494e4441" .
            "5f3133107e120d0a095350494e44415f3134107f120e0a095350494e4441" .
            "5f3135108001120e0a095350494e44415f3136108101120e0a095350494e" .
            "44415f3137108201120e0a095350494e44415f3138108301120e0a095350" .
            "494e44415f3139108401620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

