<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/auth/scope/scope.proto

namespace GPBMetadata\Proto\Clarifai\Auth\Scope;

class Scope
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa0e0a2570726f746f2f636c6172696661692f617574682f73636f7065" .
            "2f73636f70652e70726f746f1213636c6172696661692e617574682e7363" .
            "6f70651a20676f6f676c652f70726f746f6275662f64657363726970746f" .
            "722e70726f746f22460a0953636f70654c69737412260a0673636f706573" .
            "18012003280e32162e636c6172696661692e617574682e73636f70652e53" .
            "12110a09656e64706f696e74731802200328092ac90c0a015312090a0575" .
            "6e6465661000120d0a03416c6c10011a04f09b270112110a075072656469" .
            "637410021a04f09b270112100a0653656172636810031a04f09b27011218" .
            "0a0a496e707574735f41646410041a08f09b2701f89b270512140a0a496e" .
            "707574735f47657410051a04f09b270112200a0c496e707574735f506174" .
            "636810071a0e0801f09b2701f89b2704f89b2705121f0a0d496e70757473" .
            "5f44656c65746510081a0cf09b2701f89b2704f89b2705121d0a0d4f7574" .
            "707574735f506174636810091a0a0801f89b2705f89b2702121a0a0c436f" .
            "6e63657074735f416464100a1a08f09b2701f89b270b12160a0c436f6e63" .
            "657074735f476574100b1a04f09b270112220a0e436f6e63657074735f50" .
            "61746368100c1a0e0801f09b2701f89b270af89b270b121d0a0f436f6e63" .
            "657074735f44656c657465100d1a08f89b270af89b270b12180a0a4d6f64" .
            "656c735f416464100e1a08f09b2701f89b270f12140a0a4d6f64656c735f" .
            "476574100f1a04f09b270112240a0c4d6f64656c735f506174636810101a" .
            "120801f09b2701f89b270ef89b270ff89b271a121f0a0d4d6f64656c735f" .
            "44656c65746510111a0cf09b2701f89b270ef89b270f121a0a0c4d6f6465" .
            "6c735f547261696e101a1a08f09b2701f89b270f12150a0b4d6f64656c73" .
            "5f53796e63101b1a04f89b270f121b0a0d576f726b666c6f77735f416464" .
            "10121a08f09b2701f89b271312170a0d576f726b666c6f77735f47657410" .
            "131a04f09b270112230a0f576f726b666c6f77735f506174636810141a0e" .
            "0801f09b2701f89b2712f89b271312220a10576f726b666c6f77735f4465" .
            "6c65746510151a0cf09b2701f89b2712f89b271312220a1654534e455669" .
            "7375616c697a6174696f6e735f41646410181a060801f89b2719121e0a16" .
            "54534e4556697375616c697a6174696f6e735f47657410191a020801121d" .
            "0a0f416e6e6f746174696f6e735f41646410251a08f09b2701f89b272612" .
            "190a0f416e6e6f746174696f6e735f47657410261a04f09b270112250a11" .
            "416e6e6f746174696f6e735f506174636810271a0e0801f09b2701f89b27" .
            "25f89b272612240a12416e6e6f746174696f6e735f44656c65746510281a" .
            "0cf09b2701f89b2725f89b2726121c0a0e436f6c6c6563746f72735f4164" .
            "6410291a08f09b2701f89b272a12180a0e436f6c6c6563746f72735f4765" .
            "74102a1a04f09b270112230a11436f6c6c6563746f72735f44656c657465" .
            "102b1a0cf09b2701f89b2729f89b272a12160a08417070735f416464102c" .
            "1a08f09b2701f89b272d12120a08417070735f476574102d1a04f09b2701" .
            "121d0a0b417070735f44656c657465102e1a0cf09b2701f89b272cf89b27" .
            "2d12160a084b6579735f416464102f1a08f09b2701f89b273012120a084b" .
            "6579735f47657410301a04f09b2701121d0a0b4b6579735f44656c657465" .
            "10311a0cf09b2701f89b272ff89b2730121f0a11436f6c6c61626f726174" .
            "6f72735f41646410331a08f09b2701f89b2732121b0a11436f6c6c61626f" .
            "7261746f72735f47657410321a04f09b270112260a14436f6c6c61626f72" .
            "61746f72735f44656c65746510341a0cf09b2701f89b2733f89b27321219" .
            "0a0b4d6574726963735f41646410361a08f09b2701f89b273512150a0b4d" .
            "6574726963735f47657410351a04f09b270112200a0e4d6574726963735f" .
            "44656c657465103f1a0cf09b2701f89b2736f89b273512170a095461736b" .
            "735f41646410371a08f09b2701f89b273812130a095461736b735f476574" .
            "10381a04f09b2701121e0a0c5461736b735f44656c65746510461a0cf09b" .
            "2701f89b2737f89b273812220a1450617373776f7264506f6c6963696573" .
            "5f41646410391a08f09b2701f89b273a121e0a1450617373776f7264506f" .
            "6c69636965735f476574103a1a04f09b270112290a1750617373776f7264" .
            "506f6c69636965735f44656c657465103b1a0cf09b2701f89b2739f89b27" .
            "3a12190a0f4c6162656c4f72646572735f47657410431a04f09b2701121d" .
            "0a0f4c6162656c4f72646572735f41646410441a08f09b2701f89b274312" .
            "240a124c6162656c4f72646572735f44656c65746510451a0cf09b2701f8" .
            "9b2744f89b274312200a165573657246656174757265436f6e666967735f" .
            "47657410471a04f09b27012204081e101e2204081f101f22040820102022" .
            "0408211021220408221022422e0a1c636f6d2e636c6172696661692e6772" .
            "70632e617574682e73636f706550015a0573636f7065a202044341495062" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

