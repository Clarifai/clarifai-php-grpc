<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status_code.proto

namespace GPBMetadata\Proto\Clarifai\Api\Status;

class StatusCode
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e430a2b70726f746f2f636c6172696661692f6170692f737461747573" .
            "2f7374617475735f636f64652e70726f746f1213636c6172696661692e61" .
            "70692e7374617475732aa0420a0a537461747573436f646512080a045a45" .
            "524f1000120c0a075355434345535310904e12110a0c4d495845445f5354" .
            "41545553109a4e120c0a074641494c55524510a44e120e0a095452595f41" .
            "4741494e10ae4e12140a0f4e4f545f494d504c454d454e54454410b84e12" .
            "180a13434f4e4e5f4143434f554e545f49535355455310f85512170a1243" .
            "4f4e4e5f544f4b454e5f494e56414c494410f955121d0a18434f4e4e5f43" .
            "524544454e5449414c535f494e56414c494410fa55121d0a18434f4e4e5f" .
            "4558434545445f484f55524c595f4c494d495410fb55121e0a19434f4e4e" .
            "5f4558434545445f4d4f4e54484c595f4c494d495410fc5512130a0e434f" .
            "4e4e5f5448524f54544c454410fd5512180a13434f4e4e5f455843454544" .
            "535f4c494d49545310fe55121d0a18434f4e4e5f494e5355464649434945" .
            "4e545f53434f50455310ff5512150a10434f4e4e5f4b45595f494e56414c" .
            "494410805612170a12434f4e4e5f4b45595f4e4f545f464f554e44108156" .
            "121c0a17434f4e4e5f4241445f524551554553545f464f524d415410dc56" .
            "12180a13434f4e4e5f444f45535f4e4f545f455849535410dd5612190a14" .
            "434f4e4e5f494e56414c49445f5245515545535410de56121c0a17434f4e" .
            "4e5f4d4554484f445f4e4f545f414c4c4f57454410df5612190a14434f4e" .
            "4e5f4e4f5f474450525f434f4e53454e5410e056121e0a19434f4e4e5f41" .
            "5554485f4d4554484f445f44495341424c454410c05712130a0d4d4f4445" .
            "4c5f545241494e454410eca40112140a0e4d4f44454c5f545241494e494e" .
            "4710eda40112150a0f4d4f44454c5f554e545241494e454410eea401121f" .
            "0a194d4f44454c5f5155455545445f464f525f545241494e494e4710efa4" .
            "0112150a0f4d4f44454c5f55504c4f4144494e4710f0a401121c0a164d4f" .
            "44454c5f55504c4f4144494e475f4641494c454410f1a401121c0a164d4f" .
            "44454c5f545241494e494e475f4e4f5f4441544110f6a40112210a1b4d4f" .
            "44454c5f545241494e494e475f4e4f5f504f5349544956455310f7a40112" .
            "2a0a244d4f44454c5f545241494e494e475f4f4e455f56535f4e5f53494e" .
            "474c455f434c41535310f8a401121e0a184d4f44454c5f545241494e494e" .
            "475f54494d45445f4f555410f9a40112220a1c4d4f44454c5f545241494e" .
            "494e475f57414954494e475f4552524f5210faa40112220a1c4d4f44454c" .
            "5f545241494e494e475f554e4b4e4f574e5f4552524f5210fba40112220a" .
            "1c4d4f44454c5f545241494e494e475f4d53475f524544454c4956455210" .
            "fca40112260a204d4f44454c5f545241494e494e475f494e535546464943" .
            "49454e545f4441544110fda40112230a1d4d4f44454c5f545241494e494e" .
            "475f494e56414c49445f504152414d5310fea40112340a2e4d4f44454c5f" .
            "545241494e494e475f494e56414c49445f444154415f544f4c4552414e43" .
            "455f455843454544454410ffa401121a0a144d4f44454c5f4d4f44494659" .
            "5f53554343455353109ea501121a0a144d4f44454c5f4d4f444946595f50" .
            "454e44494e47109fa50112190a134d4f44454c5f4d4f444946595f464149" .
            "4c454410a0a501121a0a144d4f44454c5f444f45535f4e4f545f45584953" .
            "5410d0a501121d0a174d4f44454c5f5045524d495353494f4e5f44454e49" .
            "454410d1a501121c0a164d4f44454c5f494e56414c49445f415247554d45" .
            "4e5410d2a501121b0a154d4f44454c5f494e56414c49445f524551554553" .
            "5410d3a50112150a0f4d4f44454c5f4556414c554154454410b4a6011216" .
            "0a104d4f44454c5f4556414c554154494e4710b5a60112190a134d4f4445" .
            "4c5f4e4f545f4556414c554154454410b6a60112210a1b4d4f44454c5f51" .
            "55455545445f464f525f4556414c554154494f4e10b7a60112200a1a4d4f" .
            "44454c5f4556414c554154494f4e5f54494d45445f4f555410bea6011224" .
            "0a1e4d4f44454c5f4556414c554154494f4e5f57414954494e475f455252" .
            "4f5210bfa60112240a1e4d4f44454c5f4556414c554154494f4e5f554e4b" .
            "4e4f574e5f4552524f5210c0a601121d0a174d4f44454c5f505245444943" .
            "54494f4e5f4641494c454410c1a60112240a1e4d4f44454c5f4556414c55" .
            "4154494f4e5f4d53475f524544454c4956455210c2a60112220a1c4d4f44" .
            "454c5f4556414c554154494f4e5f4e4545445f4c4142454c5310c3a60112" .
            "220a1c4d4f44454c5f4556414c554154494f4e5f4e4545445f494e505554" .
            "5310c4a601121d0a174d4f44454c5f4445504c4f594d454e545f4641494c" .
            "454410e6a60112150a0f4d4f44454c5f4445504c4f59494e4710e7a60112" .
            "210a1b4d4f44454c5f5155455545445f464f525f4445504c4f594d454e54" .
            "10e8a60112180a124d4f44454c5f4e4f545f4445504c4f59454410e9a601" .
            "12200a1a574f524b464c4f575f4e4f5f4d41544348494e475f494e505554" .
            "10f1ab0112240a1e574f524b464c4f575f524551554952455f545241494e" .
            "45445f4d4f44454c10f2ab0112180a12574f524b464c4f575f4455504c49" .
            "4341544510d4ac0112210a1b574f524b464c4f575f554e535550504f5254" .
            "45445f464f524d415410d5ac01121d0a17574f524b464c4f575f444f4553" .
            "5f4e4f545f455849535410d6ac0112200a1a574f524b464c4f575f504552" .
            "4d495353494f4e5f44454e49454410d7ac01121f0a19574f524b464c4f57" .
            "5f494e56414c49445f415247554d454e5410d8ac01121d0a17574f524b46" .
            "4c4f575f494e56414c49445f52454349504510d9ac01121f0a19574f524b" .
            "464c4f575f494e56414c49445f54454d504c41544510daac01121c0a1657" .
            "4f524b464c4f575f494e56414c49445f475241504810dbac01121f0a1957" .
            "4f524b464c4f575f494e5445524e414c5f4641494c55524510dcac01121e" .
            "0a18574f524b464c4f575f494e56414c49445f5245515545535410d7b301" .
            "121d0a17574f524b464c4f575f4d4f444946595f535543434553531086ad" .
            "01121d0a17574f524b464c4f575f4d4f444946595f50454e44494e471087" .
            "ad01121c0a16574f524b464c4f575f4d4f444946595f4641494c45441088" .
            "ad01121d0a17574f524b464c4f575f5245494e4445585f4641494c454410" .
            "89ad01121c0a16434f4e434550545f4d4f444946595f5355434345535310" .
            "eeb401121c0a16434f4e434550545f4d4f444946595f50454e44494e4710" .
            "efb401121b0a15434f4e434550545f4d4f444946595f4641494c454410f0" .
            "b40112180a12414e4e4f544154494f4e5f5355434345535310d6bc011218" .
            "0a12414e4e4f544154494f4e5f50454e44494e4710d7bc0112170a11414e" .
            "4e4f544154494f4e5f4641494c454410d8bc01121f0a19414e4e4f544154" .
            "494f4e5f554e4b4e4f574e5f53544154555310dabc0112210a1b414e4e4f" .
            "544154494f4e5f494e56414c49445f415247554d454e5410dbbc0112220a" .
            "1c414e4e4f544154494f4e5f5045524d495353494f4e5f44454e49454410" .
            "dcbc0112200a1a414e4e4f544154494f4e5f4157414954494e475f524556" .
            "49455710ddbc01121e0a18414e4e4f544154494f4e5f5245564945575f44" .
            "454e49454410debc01121f0a19414e4e4f544154494f4e5f4d4f44494659" .
            "5f5355434345535310babd01121f0a19414e4e4f544154494f4e5f4d4f44" .
            "4946595f50454e44494e4710bbbd01121e0a18414e4e4f544154494f4e5f" .
            "4d4f444946595f4641494c454410bcbd0112260a204d455441444154415f" .
            "494e56414c49445f50415443485f415247554d454e545310c4c201121c0a" .
            "164d455441444154415f50415253494e475f495353554510c5c20112210a" .
            "1b4d455441444154415f4d414e4950554c4154494f4e5f495353554510c6" .
            "c201121c0a16545241494e45525f4a4f425f53544154455f4e4f4e4510a8" .
            "c301121e0a18545241494e45525f4a4f425f53544154455f515545554544" .
            "10a9c301121f0a19545241494e45525f4a4f425f53544154455f52554e4e" .
            "494e4710aac30112200a1a545241494e45525f4a4f425f53544154455f43" .
            "4f4d504c45544510abc301121d0a17545241494e45525f4a4f425f535441" .
            "54455f4552524f5210acc30112170a11444154415f44554d505f53554343" .
            "45535310bec40112170a11444154415f44554d505f50454e44494e4710bf" .
            "c40112160a10444154415f44554d505f4641494c454410c0c401121b0a15" .
            "444154415f44554d505f494e5f50524f475245535310c1c401121d0a1741" .
            "50505f4455504c49434154494f4e5f5355434345535310f0c401121c0a16" .
            "4150505f4455504c49434154494f4e5f4641494c454410f1c401121d0a17" .
            "4150505f4455504c49434154494f4e5f50454e44494e4710f2c40112210a" .
            "1b4150505f4455504c49434154494f4e5f494e5f50524f475245535310f3" .
            "c40112250a1f4150505f4455504c49434154494f4e5f494e56414c49445f" .
            "5245515545535410f4c401121c0a16494e5055545f444f574e4c4f41445f" .
            "5355434345535310b0ea01121c0a16494e5055545f444f574e4c4f41445f" .
            "50454e44494e4710b1ea01121b0a15494e5055545f444f574e4c4f41445f" .
            "4641494c454410b2ea0112200a1a494e5055545f444f574e4c4f41445f49" .
            "4e5f50524f475245535310b3ea0112200a1a494e5055545f535441545553" .
            "5f5550444154455f4641494c454410b4ea0112190a13494e5055545f4445" .
            "4c4554455f4641494c454410b5ea0112150a0f494e5055545f4455504c49" .
            "434154451094eb01121e0a18494e5055545f554e535550504f525445445f" .
            "464f524d41541095eb01121a0a14494e5055545f444f45535f4e4f545f45" .
            "584953541096eb01121d0a17494e5055545f5045524d495353494f4e5f44" .
            "454e4945441097eb01121c0a16494e5055545f494e56414c49445f415247" .
            "554d454e541098eb0112160a10494e5055545f4f5645525f4c494d495410" .
            "99eb0112170a11494e5055545f494e56414c49445f55524c109aeb01121a" .
            "0a14494e5055545f4d4f444946595f5355434345535310f8eb01121a0a14" .
            "494e5055545f4d4f444946595f50454e44494e4710f9eb0112190a13494e" .
            "5055545f4d4f444946595f4641494c454410fbeb01121f0a19494e505554" .
            "5f53544f524147455f484f53545f4641494c45441082ec01121d0a17414c" .
            "4c5f494e5055545f494e56414c49445f425954455310dcec01121b0a1549" .
            "4e5055545f434c55535445525f5355434345535310c0ed01121b0a15494e" .
            "5055545f434c55535445525f50454e44494e4710c1ed01121a0a14494e50" .
            "55545f434c55535445525f4641494c454410c2ed01121f0a19494e505554" .
            "5f434c55535445525f494e5f50524f475245535310c3ed01121b0a15494e" .
            "5055545f5245494e4445585f5355434345535310a4ee01121b0a15494e50" .
            "55545f5245494e4445585f50454e44494e4710a5ee01121a0a14494e5055" .
            "545f5245494e4445585f4641494c454410a6ee01121f0a19494e5055545f" .
            "5245494e4445585f494e5f50524f475245535310a7ee0112220a1c494e50" .
            "55545f564944454f5f444f574e4c4f41445f535543434553531098f20112" .
            "220a1c494e5055545f564944454f5f444f574e4c4f41445f50454e44494e" .
            "471099f20112210a1b494e5055545f564944454f5f444f574e4c4f41445f" .
            "4641494c4544109af201121b0a15494e5055545f564944454f5f4455504c" .
            "494341544510fcf20112240a1e494e5055545f564944454f5f554e535550" .
            "504f525445445f464f524d415410fdf20112200a1a494e5055545f564944" .
            "454f5f444f45535f4e4f545f455849535410fef20112230a1d494e505554" .
            "5f564944454f5f5045524d495353494f4e5f44454e49454410fff2011222" .
            "0a1c494e5055545f564944454f5f494e56414c49445f415247554d454e54" .
            "1080f301121c0a16494e5055545f564944454f5f4f5645525f4c494d4954" .
            "1081f301121d0a17494e5055545f564944454f5f494e56414c49445f5552" .
            "4c1082f30112200a1a494e5055545f564944454f5f4d4f444946595f5355" .
            "434345535310e0f30112200a1a494e5055545f564944454f5f4d4f444946" .
            "595f50454e44494e4710e1f301121f0a19494e5055545f564944454f5f4d" .
            "4f444946595f4641494c454410e3f30112250a1f494e5055545f56494445" .
            "4f5f53544f524147455f484f53545f4641494c454410eaf30112240a1e41" .
            "4c4c5f494e5055545f564944454f535f494e56414c49445f425954455310" .
            "c4f401121d0a17494e5055545f434f4e4e454354494f4e5f4641494c4544" .
            "10bcb80212260a20524551554553545f44495341424c45445f464f525f4d" .
            "41494e54454e414e434510bdb802122b0a25494e5055545f575249544553" .
            "5f44495341424c45445f464f525f4d41494e54454e414e434510beb80212" .
            "1b0a15494e5055545f494e56414c49445f5245515545535410bfb802121d" .
            "0a17505245444943545f494e56414c49445f5245515545535410c1b80212" .
            "1c0a165345415243485f494e56414c49445f5245515545535410c2b80212" .
            "1e0a18434f4e43455054535f494e56414c49445f5245515545535410c3b8" .
            "02121b0a1553544154535f494e56414c49445f5245515545535410c4b802" .
            "121c0a1644415441424153455f4455504c49434154455f4b455910cab802" .
            "12200a1a44415441424153455f53544154454d454e545f54494d454f5554" .
            "10cbb80212240a1e44415441424153455f494e56414c49445f524f57535f" .
            "414646454354454410ccb80212200a1a44415441424153455f444541444c" .
            "4f434b5f444554454354454410cdb80212180a1244415441424153455f46" .
            "41494c5f5441534b10ceb80212260a2044415441424153455f4641494c5f" .
            "544f5f4745545f434f4e4e454354494f4e5310cfb802121f0a1944415441" .
            "424153455f544f4f5f4d414e595f434c49454e545310d0b80212220a1c44" .
            "415441424153455f434f4e53545241494e545f56494f4c4154454410d1b8" .
            "0212240a1e44415441424153455f4e4f5f4f4e474f494e475f4f50455241" .
            "54494f4e5310d2b802122a0a2444415441424153455f4c4f434b45445f42" .
            "595f4f4e474f494e475f4f5045524154494f4e10d3b802121f0a19415359" .
            "4e435f574f524b45525f4d554c54495f4552524f525310d4b802121c0a16" .
            "5250435f524551554553545f51554555455f46554c4c10deb802121c0a16" .
            "5250435f5345525645525f554e415641494c41424c4510dfb80212190a13" .
            "5250435f524551554553545f54494d454f555410e0b80212230a1d525043" .
            "5f4d41585f4d4553534147455f53495a455f455843454544454410e1b802" .
            "12120a0c5250435f43414e43454c454410e3b802121e0a18434c55535445" .
            "525f494e5445524e414c5f4641494c55524510a0d002121f0a1945585445" .
            "524e414c5f434f4e4e454354494f4e5f4552524f5210e2b80212160a1051" .
            "554555455f434f4e4e5f4552524f5210a8c00212210a1b51554555455f43" .
            "4c4f53455f524551554553545f54494d454f555410aac00212170a115155" .
            "4555455f434f4e4e5f434c4f53454410abc002121f0a1951554555455f50" .
            "55424c4953485f41434b5f54494d454f555410acc00212190a1351554555" .
            "455f5055424c4953485f4552524f5210adc00212200a1a51554555455f53" .
            "5542534352495054494f4e5f54494d454f555410aec002121e0a18515545" .
            "55455f535542534352495054494f4e5f4552524f5210afc002121e0a1851" .
            "554555455f4d41525348414c4c494e475f4641494c454410b0c00212200a" .
            "1a51554555455f554e4d41525348414c4c494e475f4641494c454410b1c0" .
            "0212270a2151554555455f4d41585f4d53475f524544454c49564552595f" .
            "455843454544454410b2c00212170a1151554555455f41434b5f4641494c" .
            "55524510b3c00212130a0d5351535f4f5645524c494d4954108cc1021220" .
            "0a1a5351535f494e56414c49445f524543454950545f48414e444c45108d" .
            "c10212110a0b5351535f554e4b4e4f574e108ec10212120a0c4b41464b41" .
            "5f554e4b4e4f5710f0c10212190a134b41464b415f4d495353494e475f54" .
            "4f50494310f1c10212150a0f4b41464b415f41444d494e5f45525210f2c1" .
            "0212180a124b41464b415f434f4e53554d45525f45525210f3c10212190a" .
            "134b41464b415f5055424c49534845525f45525210f4c102121d0a175345" .
            "415243485f494e5445524e414c5f4641494c55524510f9cf02121f0a1953" .
            "45415243485f50524f4a454354494f4e5f4641494c55524510facf02121f" .
            "0a195345415243485f50524544494354494f4e5f4641494c55524510fbcf" .
            "0212270a215345415243485f42595f4e4f545f46554c4c595f494e444558" .
            "45445f494e50555410fccf0212200a1a53415645445f5345415243485f4d" .
            "4f444946595f4641494c454410fdcf0212350a2f414e4e4f544154494f4e" .
            "5f5345415243485f4d4554524943535f5155455545445f464f525f455641" .
            "4c554154494f4e10dcd002122a0a24414e4e4f544154494f4e5f53454152" .
            "43485f4d4554524943535f4556414c554154494e4710ddd00212290a2341" .
            "4e4e4f544154494f4e5f5345415243485f4d4554524943535f4556414c55" .
            "4154454410ded00212370a31414e4e4f544154494f4e5f5345415243485f" .
            "4d4554524943535f4641494c45445f544f5f52455452494556455f444154" .
            "4110dfd00212300a2a414e4e4f544154494f4e5f5345415243485f4d4554" .
            "524943535f494e56414c49445f415247554d454e5410e0d00212260a2041" .
            "4e4e4f544154494f4e5f5345415243485f4d4554524943535f4641494c45" .
            "4410e1d00212180a125354524950455f4556454e545f4552524f5210e1d7" .
            "0212100a0a43414348455f4d49535310c9df0212260a2052454449535f53" .
            "43524950545f4558495445445f574954485f4641494c55524510cadf0212" .
            "180a125349474e55505f4556454e545f4552524f5210b1e70212140a0e53" .
            "49474e55505f464c414747454410b2e702121a0a1446494c45545950455f" .
            "554e535550504f5254454410b3e702121f0a194150505f434f554e545f49" .
            "4e56414c49445f4d4553534147451099ef0212270a214150505f434f554e" .
            "545f5550444154455f494e4352454d454e545f4641494c4544109aef0212" .
            "1e0a184150505f434f554e545f52454255494c445f4641494c4544109bef" .
            "0212200a1a4150505f434f554e545f494e5445524e414c5f4641494c5552" .
            "45109cef0212170a114d505f444f574e4c4f41445f4552524f5210fdef02" .
            "121a0a144d505f5245534f4c56455f444e535f4552524f5210feef021229" .
            "0a234d505f444f574e4c4f41445f4d41585f53495a455f45584345454445" .
            "445f4552524f5210ffef02121b0a154d505f494d4147455f4445434f4445" .
            "5f4552524f521080f00212190a134d505f494e56414c49445f415247554d" .
            "454e541081f002121f0a194d505f494d4147455f50524f43455353494e47" .
            "5f4552524f521082f00212170a11555345525f434f4e53454e545f464143" .
            "4510d1860312140a0e574f524b45525f4d495353494e4710b88e0312130a" .
            "0d574f524b45525f41435449564510b98e0312150a0f574f524b45525f49" .
            "4e41435449564510ba8e0312170a11434f4c4c4543544f525f4d49535349" .
            "4e4710a0960312160a10434f4c4c4543544f525f41435449564510a19603" .
            "12180a12434f4c4c4543544f525f494e41435449564510a29603122a0a24" .
            "53534f5f4944454e544954595f50524f56494445525f444f45535f4e4f54" .
            "5f455849535410899e0312160a105441534b5f494e5f50524f4752455353" .
            "10f1a503120f0a095441534b5f444f4e4510f2a50312120a0c5441534b5f" .
            "574f4e545f444f10f3a50312220a1c5441534b5f4144445f414e4e4f5441" .
            "54494f4e535f4641494c55524510f5a50312130a0d5441534b5f434f4e46" .
            "4c49435410d4a603121a0a145441534b5f4e4f545f494d504c454d454e54" .
            "454410d5a60312190a134c4142454c5f4f524445525f50454e44494e4710" .
            "d9ad03121d0a174c4142454c5f4f524445525f494e5f50524f4752455353" .
            "10daad0312190a134c4142454c5f4f524445525f5355434345535310dbad" .
            "03121a0a144c4142454c5f4f524445525f43414e43454c454410dcad0312" .
            "140a0e4c4943454e53455f41435449564510e0d403121c0a164c4943454e" .
            "53455f444f45535f4e4f545f455849535410e1d40312190a134c4943454e" .
            "53455f4e4545445f55504441544510e2d40312150a0f4c4943454e53455f" .
            "4558504952454410e3d40312150a0f4c4943454e53455f5245564f4b4544" .
            "10e4d40312150a0f4c4943454e53455f44454c4554454410e5d403121d0a" .
            "174c4943454e53455f564f4c554d455f455843454544454410e6d4031221" .
            "0a1b50415353574f52445f56414c49444154494f4e5f5355434345535310" .
            "c8dc0312200a1a50415353574f52445f56414c49444154494f4e5f464149" .
            "4c454410c9dc0312250a1f50415353574f5244504f4c4943595f494e5641" .
            "4c49445f415247554d454e5410cadc0312220a1c46454154555245464c41" .
            "475f434f4e4649475f4e4f545f464f554e4410b0e40312220a1c46454154" .
            "555245464c41475f494e56414c49445f415247554d454e5410b1e4031219" .
            "0a1346454154555245464c41475f424c4f434b454410b2e403121b0a1549" .
            "4e5445524e414c5f5345525645525f495353554510d4fd05121d0a17494e" .
            "5445524e414c5f4645544348494e475f495353554510d5fd05121d0a1749" .
            "4e5445524e414c5f44415441424153455f495353554510d6fd0512210a1b" .
            "494e5445524e414c5f554e45585045435445445f54494d454f555410d9fd" .
            "05121c0a16494e5445524e414c5f554e45585045435445445f563110dafd" .
            "05121f0a19494e5445524e414c5f554e45585045435445445f50414e4943" .
            "10dbfd05121f0a19494e5445524e414c5f554e45585045435445445f5350" .
            "49524510dcfd0512200a1a494e5445524e414c5f52454449535f554e4156" .
            "41494c41424c4510ddfd0512210a1b494e5445524e414c5f5245534f5552" .
            "43455f45584841555354454410defd0512220a1c494e5445524e414c5f52" .
            "454449535f554e43415445474f52495a454410dffd0512200a1a494e5445" .
            "524e414c5f4157535f554e43415445474f52495a454410e0fd0512220a1c" .
            "494e5445524e414c5f415a5552455f554e43415445474f52495a454410e1" .
            "fd0512180a12434f4e4e5f554e43415445474f52495a454410b985061219" .
            "0a134d4f44454c5f554e43415445474f52495a454410ba850612190a1349" .
            "4e5055545f554e43415445474f52495a454410bb8506121e0a18414e4e4f" .
            "544154494f4e5f554e43415445474f52495a454410bc8506121b0a154249" .
            "4c4c494e475f554e43415445474f52495a454410bd8506121c0a16494e54" .
            "45524e414c5f554e43415445474f52495a454410c1850612110a0b424144" .
            "5f5245515545535410a0c20512120a0c5345525645525f4552524f521084" .
            "c305220808e8810210e88102220808e9810210e98102220808ea810210ea" .
            "8102220808cc820210cc8202220808cd820210cd8202220808ce820210ce" .
            "8202220808cf820210cf8202220808d0820210d08202220808d1820210d1" .
            "8202220808d2820210d28202220808b0830210b08302220808b1830210b1" .
            "8302220808b3830210b38302220808ba830210ba8302220808bbb80210bb" .
            "b802422f0a1c636f6d2e636c6172696661692e677270632e6170692e7374" .
            "6174757350015a06737461747573a2020443414950620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

