<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/RequestType.proto

namespace GPBMetadata\POGOProtos\Networking\Requests;

class RequestType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0abd110a30504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f52657175657374547970652e70726f746f121e504f474f50" .
            "726f746f732e4e6574776f726b696e672e52657175657374732ae0100a0b" .
            "526571756573745479706512100a0c4d4554484f445f554e534554100012" .
            "0e0a0a4745545f504c41594552100212160a124745545f484f4c4f5f494e" .
            "56454e544f5259100412150a11444f574e4c4f41445f53455454494e4753" .
            "1005121b0a17444f574e4c4f41445f4954454d5f54454d504c4154455310" .
            "0612220a1e444f574e4c4f41445f52454d4f54455f434f4e4649475f5645" .
            "5253494f4e1007121e0a1a52454749535445525f4241434b47524f554e44" .
            "5f4445564943451008120f0a0b464f52545f5345415243481065120d0a09" .
            "454e434f554e544552106612110a0d43415443485f504f4b454d4f4e1067" .
            "12100a0c464f52545f44455441494c53106812130a0f4745545f4d41505f" .
            "4f424a45435453106a12170a13464f52545f4445504c4f595f504f4b454d" .
            "4f4e106e12170a13464f52545f524543414c4c5f504f4b454d4f4e106f12" .
            "130a0f52454c454153455f504f4b454d4f4e107012130a0f5553455f4954" .
            "454d5f504f54494f4e107112140a105553455f4954454d5f434150545552" .
            "45107212110a0d5553455f4954454d5f464c4545107312130a0f5553455f" .
            "4954454d5f524556495645107412160a124745545f504c415945525f5052" .
            "4f46494c45107912120a0e45564f4c56455f504f4b454d4f4e107d12140a" .
            "104745545f484154434845445f45474753107e121f0a1b454e434f554e54" .
            "45525f5455544f5249414c5f434f4d504c455445107f12150a104c455645" .
            "4c5f55505f5245574152445310800112190a14434845434b5f4157415244" .
            "45445f42414447455310810112110a0c5553455f4954454d5f47594d1085" .
            "0112140a0f4745545f47594d5f44455441494c5310860112150a10535441" .
            "52545f47594d5f424154544c45108701120f0a0a41545441434b5f47594d" .
            "108801121b0a1652454359434c455f494e56454e544f52595f4954454d10" .
            "890112180a13434f4c4c4543545f4441494c595f424f4e5553108a011216" .
            "0a115553455f4954454d5f58505f424f4f5354108b01121b0a165553455f" .
            "4954454d5f4547475f494e43554241544f52108c0112100a0b5553455f49" .
            "4e43454e5345108d0112180a134745545f494e43454e53455f504f4b454d" .
            "4f4e108e0112160a11494e43454e53455f454e434f554e544552108f0112" .
            "160a114144445f464f52545f4d4f44494649455210900112130a0e444953" .
            "4b5f454e434f554e54455210910112210a1c434f4c4c4543545f4441494c" .
            "595f444546454e4445525f424f4e555310920112140a0f55504752414445" .
            "5f504f4b454d4f4e10930112190a145345545f4641564f524954455f504f" .
            "4b454d4f4e10940112150a104e49434b4e414d455f504f4b454d4f4e1095" .
            "0112100a0b45515549505f424144474510960112190a145345545f434f4e" .
            "544143545f53455454494e475310970112160a115345545f42554444595f" .
            "504f4b454d4f4e10980112150a104745545f42554444595f57414c4b4544" .
            "10990112170a125553455f4954454d5f454e434f554e544552109a01120f" .
            "0a0a47594d5f4445504c4f59109b0112110a0c47594d5f4745545f494e46" .
            "4f109c0112160a1147594d5f53544152545f53455353494f4e109d011216" .
            "0a1147594d5f424154544c455f41545441434b109e01120f0a0a4a4f494e" .
            "5f4c4f424259109f0112100a0b4c454156455f4c4f42425910a00112190a" .
            "145345545f4c4f4242595f5649534942494c49545910a10112160a115345" .
            "545f4c4f4242595f504f4b454d4f4e10a20112150a104745545f52414944" .
            "5f44455441494c5310a30112150a1047594d5f464545445f504f4b454d4f" .
            "4e10a40112160a1153544152545f524149445f424154544c4510a5011210" .
            "0a0b41545441434b5f5241494410a60112130a0e41574152445f504f4b45" .
            "434f494e10a70112150a104745545f41535345545f44494745535410ac02" .
            "12160a114745545f444f574e4c4f41445f55524c5310ad0212130a0e434c" .
            "41494d5f434f44454e414d45109303120f0a0a5345545f41564154415210" .
            "940312140a0f5345545f504c415945525f5445414d109503121b0a164d41" .
            "524b5f5455544f5249414c5f434f4d504c45544510960312140a0f434845" .
            "434b5f4348414c4c454e474510d80412150a105645524946595f4348414c" .
            "4c454e474510d90412090a044543484f109a0512170a1253464944415f52" .
            "4547495354524154494f4e10a00612150a1053464944415f414354494f4e" .
            "5f4c4f4710a10612180a1353464944415f43455254494649434154494f4e" .
            "10a20612110a0c53464944415f55504441544510a30612110a0c53464944" .
            "415f414354494f4e10a40612110a0c53464944415f444f5753455210a506" .
            "12120a0d53464944415f4341505455524510a606121f0a1a4c4953545f41" .
            "56415441525f435553544f4d495a4154494f4e5310a706121e0a19534554" .
            "5f4156415441525f4954454d5f41535f56494557454410a806120e0a0947" .
            "45545f494e424f5810a90612140a0f4c4953545f47594d5f424144474553" .
            "10ab06121a0a154745545f47594d5f42414447455f44455441494c5310ac" .
            "0612190a145553455f4954454d5f4d4f56455f5245524f4c4c10ad061218" .
            "0a135553455f4954454d5f524152455f43414e445910ae06121b0a164157" .
            "4152445f465245455f524149445f5449434b455410af06121f0a1a524547" .
            "49535445525f505553485f4e4f54494649434154494f4e10882712210a1c" .
            "554e52454749535445525f505553485f4e4f54494649434154494f4e1089" .
            "27121f0a1a5550444154455f4e4f54494649434154494f4e5f5354415455" .
            "53108a2712270a224f50545f4f55545f505553485f4e4f54494649434154" .
            "494f4e5f43415445474f5259108b2712230a1e444f574e4c4f41445f4741" .
            "4d455f4d41535445525f54454d504c41544553108c2712120a0d4745545f" .
            "494e56454e544f5259108d27620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

