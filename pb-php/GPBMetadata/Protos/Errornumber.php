<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/errornumber.proto

namespace GPBMetadata\Protos;

class Errornumber
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aca560a1870726f746f732f6572726f726e756d6265722e70726f746f12" .
            "1170726f746f2e6572726f726e756d6265722a92560a0b4572726f724e75" .
            "6d626572120e0a0a45435f53554343455353100012110a0d45435f444154" .
            "415f4552524f52100112160a1245435f494e56414c49445f524551554553" .
            "54100212130a0f45435f434f4e4649475f4552524f521003121b0a174543" .
            "5f4d4f44554c455f4e4f545f415641494c41424c45103212140a1045435f" .
            "544f4b454e5f494e56414c4944106412140a1045435f544f4b454e5f4558" .
            "50495245441065121c0a1845435f4b49434b5f4f4e5f414e4f544845525f" .
            "4c4f47494e106612230a1f45435f4352454154455f524f4c455f50524f46" .
            "455353494f4e5f4552524f52106712230a1f45435f4352454154455f504c" .
            "415945525f4455504c49434154455f4e414d45106812210a1d45435f4352" .
            "454154455f504c415945525f494c4c4547414c5f4e414d45106912230a1f" .
            "45435f4352454154455f504c415945525f4e414d455f544f4f5f53484f52" .
            "54106a12220a1e45435f4352454154455f504c415945525f4e414d455f54" .
            "4f4f5f4c4f4e47106b12140a1045435f504c415945525f42414e4e454410" .
            "6c121b0a1745435f4143434f554e545f4c4f47494e5f4641494c4544106d" .
            "12220a1e45435f4c4f47494e5f5345525645525f5245534f4c56455f4641" .
            "494c4544106e121f0a1b45435f4c4f47494e5f5345525645525f434f4e4e" .
            "5f4641494c4544106f12220a1e45435f4c4f47494e5f5345525645525f56" .
            "45524946595f54494d454f5554107012150a1145435f504c415945525f43" .
            "524541544544107112210a1d45435f5245434f4e4e4543545f504c415945" .
            "525f4e4f545f45584953541072121c0a1845435f504c415945525f435245" .
            "415445445f4641494c4544107312220a1e45435f5357495443485f524f4c" .
            "455f494e56414c49445f52455155455354107412110a0d45435f4b49434b" .
            "5f4f4e5f474d107512190a1545435f4d4f4e45595f494e56414c49445f54" .
            "595045107812190a1545435f4d4f4e45595f4e414749544956455f4e554d" .
            "107912160a1245435f4e4f545f454e4f5547485f4954454d107a121d0a18" .
            "45435f4d4f4e45595f4e4f545f454e4f5547485f434f494e10820112200a" .
            "1b45435f4d4f4e45595f4e4f545f454e4f5547485f5955414e42414f1083" .
            "01121f0a1a45435f4d4f4e45595f4e4f545f454e4f5547485f4c49515541" .
            "4e108401121f0a1a45435f4d4f4e45595f4e4f545f454e4f5547485f5350" .
            "49524954108501121e0a1945435f4d4f4e45595f4e4f545f454e4f554748" .
            "5f48554e4c49108601121c0a1745435f4d4f4e45595f4e4f545f454e4f55" .
            "47485f455850108701121f0a1a45435f4d4f4e45595f4e4f545f454e4f55" .
            "47485f484f4e4f5552108801122b0a2645435f4d4f4e45595f4e4f545f45" .
            "4e4f5547485f4755494c445f434f4e545249425554494f4e108a0112200a" .
            "1b45435f4d4f4e45595f4e4f545f454e4f5547485f4d4f4e45593239109f" .
            "0112180a1345435f4d4f4e45595f4e4f545f454e4f55474810a001121d0a" .
            "1845435f4c4556454c5f52454143485f4d41585f56414c554510aa011222" .
            "0a1d45435f414e4345535452595f554e4c4f434b5f414e43455f45584953" .
            "5410c80112250a2045435f414e4345535452595f554e4c4f434b5f414e43" .
            "455f49445f4552524f5210c90112230a1e45435f414e4345535452595f55" .
            "4e4c4f434b5f504c415945524c4556454c10ca0112230a1e45435f414e43" .
            "45535452595f554e4c4f434b5f5052454e4f54455849535410cb0112200a" .
            "1b45435f414e4345535452595f554e4c4f434b5f5052454c4556454c10cc" .
            "0112250a2045435f414e4345535452595f41435449564154455f414e4345" .
            "5f554e4c4f434b10cd0112240a1f45435f414e4345535452595f55504752" .
            "4144455f414e43455f554e4c4f434b10ce0112230a1e45435f414e434553" .
            "5452595f4f5045524154455f545950455f4552524f5210cf01122b0a2645" .
            "435f414e4345535452595f554e4c4f434b5f4d4154455249414c5f4e4f54" .
            "5f454e4f55474810d001121b0a1645435f414e4345535452595f4e4f545f" .
            "554e4c4f434b10d10112250a2045435f414e4345535452595f534b494c4c" .
            "5f414c5245414452595f494e55534510d20112200a1b45435f414e434553" .
            "5452595f534b494c4c5f4e4f545f494e55534510d30112230a1e45435f41" .
            "4e4345535452595f555047524144455f46554c4c5f4c4556454c10d40112" .
            "1f0a1a45435f414e4345535452595f534b494c4c5f4e554d5f46554c4c10" .
            "d50112230a1e45435f414e4345535452595f534b494c4c5f434f4e54524f" .
            "4c5f46554c4c10d601121d0a1845435f414e4345535452595f49445f4e4f" .
            "545f56414c494410d701122c0a2745435f414e4345535452595f55504752" .
            "4144455f4d4154455249414c5f4e4f545f454e4f55474810d80112210a1c" .
            "45435f414e4345535452595f4c4556454c5f4e4f545f454e4f55474810d9" .
            "01121d0a1845435f545241494e5f52414e47455f4e4f545f455849535410" .
            "ad0212220a1d45435f545241494e5f534f554c5f50524f505f4e4f545f45" .
            "4e4f55474810ae0212270a2245435f545241494e5f475241474f4e5f5955" .
            "414e42414f5f4e4f545f454e4f55474810af0212230a1e45435f434f4e53" .
            "554d455f4d4154455249414c5f4e4f545f454e4f55474810b00212210a1c" .
            "45435f5452414e534645525f50524f464553535f49445f4552524f521091" .
            "0312240a1f45435f5452414e534645525f50524f464553535f4c4556454c" .
            "5f52414e474510920312220a1d45435f4241475f4f5045524154455f4241" .
            "475f545950455f4552524f5210f50312260a2145435f4241475f4f504552" .
            "4154455f4241475f4954454d5f4e554d5f4552524f5210f603122b0a2645" .
            "435f4241475f4f5045524154455f4241475f4954454d5f4e554d5f4e4f54" .
            "5f454e4f55474810f70312260a2145435f4241475f4f5045524154455f42" .
            "41475f4954454d5f5449445f4552524f5210f80312290a2445435f424147" .
            "5f4f5045524154455f4241475f4e4f545f45584953545f4954454d5f4944" .
            "10f90312270a2245435f4241475f4f5045524154455f4241475f4144445f" .
            "4954454d5f4641494c454410fa0312280a2345435f4241475f4f50455241" .
            "54455f4241475f434f53545f4954454d5f4641494c454410fb0312130a0e" .
            "45435f4241475f49535f46554c4c10fc03121b0a1645435f4241475f5349" .
            "5a455f4e4f545f454e4f55474810fd0312280a2345435f4241475f4f5045" .
            "524154455f45515549505f43414e5f4e4f545f44454c45544510fe031227" .
            "0a2245435f4241475f534c4f545f4c4f434b45445f534c4f545f4e4f545f" .
            "454e4f55474810ff03121e0a1945435f4241475f544d45505f4241475f4e" .
            "4f545f454d50545910800412160a1145435f4e4f545f464f554e445f4954" .
            "454d10810412190a1445435f4954454d5f43414e5f4e4f545f53414c4510" .
            "820412140a0f45435f5245434c49535f4558495354108304121b0a164543" .
            "5f4241475f4954454d535f4e4f545f455849535410840412150a1045435f" .
            "45515549505f44454641554c5410d80412170a1245435f45515549505f4e" .
            "4f545f455849535410d90412210a1c45435f45515549505f4d4154455249" .
            "414c5f4e4f545f454e4f55474810da04121d0a1845435f45515549505f43" .
            "4f494e5f4e4f545f454e4f55474810db0412200a1b45435f45515549505f" .
            "5955414e42414f5f4e4f545f454e4f55474810dc04121f0a1a45435f4551" .
            "5549505f534f434b45545f4e4f545f454e4f55474810dd0412250a204543" .
            "5f45515549505f454e48414e545f4c4556454c5f4e4f545f454e4f554748" .
            "10de04121d0a1845435f45515549505f414c52454144595f455155495045" .
            "4410df0412230a1e45435f45515549505f454e48414e545f545950455f4e" .
            "4f545f4d4154434810e004121c0a1745435f45515549505f545950455f4e" .
            "4f545f4d4154434810e10412260a2145435f45515549505f545950455f4e" .
            "4f545f4d415443485f50524f5f4c494d495410e204121d0a1845435f4551" .
            "5549505f4c4556454c5f4e4f545f524541434810e30412210a1c45435f45" .
            "515549505f4841535f52454143485f544f505f4c4556454c10e40412210a" .
            "1c45435f45515549505f43414e5f4e4f545f4f50454e5f534f434b455410" .
            "e504122a0a2545435f45515549505f494e4c41595f47454d5f54454d504c" .
            "4154455f4e4f545f455849535410e60412260a2145435f45515549505f49" .
            "4e4c41595f47454d5f545950455f4e4f545f4d4154434810e70412280a23" .
            "45435f45515549505f494e4c41595f534f434b45545f494e4445585f494e" .
            "56414c494410e80412340a2f45435f45515549505f535452454e47485445" .
            "4e5f50524f544543545f4d4154455249414c5f4e4f545f454e4f55474810" .
            "e904122a0a2545435f45515549505f554e494e4c41595f534f434b45545f" .
            "494e4445585f494e56414c494410ea0412270a2245435f50455250455455" .
            "414c5f45515549505f43414e5f4e4f545f554e455155495010eb0412330a" .
            "2e45435f45515549505f535452454e4754485f4f465f4154545249425554" .
            "455f52454143485f544f505f4c4556454c10ec0412220a1d45435f455155" .
            "49505f504c415945525f4c4556454c5f4c494d4954454410ed0412260a21" .
            "45435f45515549505f504c415945525f5649505f4c4556454c5f4c494d49" .
            "54454410ee0412330a2e45435f45515549505f4e4f545f45515549505f54" .
            "48455f53414d455f50455250455455414c5f455155504d454e5410ef0412" .
            "260a2145435f45515549505f535452454e4754485f4c4556454c5f4e4f54" .
            "5f524541434810f00412360a3145435f45515549505f535452454e475448" .
            "5f4c4556454c5f4e4f5f4d4f52455f5448414e5f504c415945525f4c4556" .
            "454c10f10412270a2245435f45515549505f5245434c49535f43414e5f4e" .
            "4f545f42455f5357414c4c4f5710f204122d0a2845435f45515549505f52" .
            "45434c49535f5357414c4c4f575f4954454d535f4e4f545f454e4f554748" .
            "10f304122a0a2545435f45515549505f5245434c49535f5357414c4c4f57" .
            "5f4954454d535f554e56414c494410f404121e0a1945435f52454c494353" .
            "5f4d41585f434c4153535f4c494d495410f504121e0a1945435f4d414c4c" .
            "5f41435449564954595f4f55545f54494d4510bd05121e0a1945435f4d41" .
            "4c4c5f41435449564954595f53454c4c5f4f555410be0512220a1d45435f" .
            "534b494c4c5f5052455f534b494c4c5f4e4f545f554e4c4f434b10bf0512" .
            "260a2145435f534b494c4c5f5052455f534b494c4c5f4c45565f4e4f545f" .
            "454e4f55474810c00512230a1e45435f534b494c4c5f504c415945525f4c" .
            "45565f4e4f545f454e4f55474810c105121c0a1745435f534b494c4c5f53" .
            "4b494c4c5f554e4c4f434b454410c20512260a2145435f534b494c4c5f55" .
            "5047524144455f534b494c4c5f545950455f4552524f5210c30512250a20" .
            "45435f534b494c4c5f434f4e53554d455f4954454d5f4e4f545f454e4f55" .
            "474810c405121d0a1845435f534b494c4c5f534b494c4c5f414354495641" .
            "54454410c50512200a1b45435f534b494c4c5f494e494e49414c5f534b49" .
            "4c4c5f4c4f434b10c605121d0a1845435f534b494c4c5f52454143485f4d" .
            "41585f4c4556454c10c70512250a2045435f534b494c4c5f554e4c4f434b" .
            "5f50524f46455353494f4e5f4552524f5210c80512250a2045435f534b49" .
            "4c4c5f554e4c4f434b5f4e554d4245525f4f55545f52414e474510c90512" .
            "230a1e45435f534b494c4c5f4c4f434b45445f554e41424c455f55504752" .
            "41444510ca0512260a2145435f534b494c4c5f494e495449414c5f534b49" .
            "4c4c5f554e414354495641544510cb0512260a2145435f534b494c4c5f55" .
            "5047524144455f524f4c455f4c4556454c5f4c494d495410cc0512170a12" .
            "45435f5855455a48414e5f44454641554c5410a00612200a1b45435f5855" .
            "455a48414e5f4255464645525f4e4f545f455849535410a106122a0a2545" .
            "435f5855455a48414e5f4255464645525f4d4154455249414c5f4e4f545f" .
            "454e4f55474810a20612170a1245435f434f4d504f53455f44454641554c" .
            "5410840712230a1e45435f434f4d504f53455f4d4154455249414c5f4e4f" .
            "545f454e4f554748108507121e0a1945435f434f4d504f53455f504f535f" .
            "4e4f545f454e4f554748108607121a0a1545435f504c415945525f4c4556" .
            "454c5f4c494d495410eb07121e0a1945435f504c415945525f5649505f4c" .
            "4556454c5f4c494d495410ec07121d0a1845435f4c494d49545f434f554e" .
            "545f52454143485f4d415810ed07122a0a2545435f50524f46455353494f" .
            "4e5f555047524144455f315f464c41475f4e4f545f4f50454e10ee07122a" .
            "0a2545435f50524f46455353494f4e5f555047524144455f325f464c4147" .
            "5f4e4f545f4f50454e10ef0712180a1345435f4e4f545f464f554e445f50" .
            "4c4159455210f00712190a1445435f5354494c4c5f4f4e5f434f4f4c444f" .
            "574e10f10712170a1245435f55534550524f505f44454641554c5410cc08" .
            "12190a1445435f55534550524f505f4e4f545f455849535410cd0812220a" .
            "1d45435f55534550524f505f54454d504c4154455f4e4f545f4558495354" .
            "10ce08121d0a1845435f55534550524f505f545950455f4e4f545f50524f" .
            "5010cf08121a0a1545435f55534550524f505f4144445f48505f45525210" .
            "d008121e0a1945435f55534550524f505f4144445f5350495249545f4552" .
            "5210d108121c0a1745435f55534550524f505f4541545f445255475f4552" .
            "5210d208121a0a1545435f55534550524f505f4144445f42554646455210" .
            "d308121d0a1845435f55534550524f505f4144445f48554e4c495f455252" .
            "10d408122c0a2745435f434f4e54494e55455f4c4f47494e5f5052495a45" .
            "5f444159535f4e4f545f454e4f55474810b00912280a2345435f434f4e54" .
            "494e55455f4c4f47494e5f5052495a455f414c52454144595f474f5410b1" .
            "09121c0a1745435f574f524c44424f53535f4552524f525f54494d4510e2" .
            "0912200a1b45435f574f524c44424f53535f4552524f525f4e4f545f4f50" .
            "454e10e309121d0a1845435f51554553545f414c454144595f4143434550" .
            "54454410940a121f0a1a45435f51554553545f505245565f4e4f545f4649" .
            "4e495348454410950a121c0a1745435f51554553545f4e4f545f41434345" .
            "505441424c4510960a121c0a1745435f51554553545f4e4f545f46494e49" .
            "534841424c4510970a121c0a1745435f51554553545f4e4f545f43414e43" .
            "454c41424c4510980a121d0a1845435f51554553545f5052495a455f4e4f" .
            "545f455849535410990a12250a2045435f51554553545f4143434550545f" .
            "50524f46455353494f4e5f4c494d4954109a0a121c0a1745435f434f4d42" .
            "41545f5343454e455f4e4f4e5f56495010f80a12260a2145435f434f4d42" .
            "41545f5343454e455f414354494f4e5f444154415f57524f4e4710f90a12" .
            "2e0a2945435f434f4d4241545f5343454e455f4c4f54544552595f445241" .
            "5745445f42595f4e4f4e5f56495010fa0a122a0a2545435f434f4d424154" .
            "5f5343454e455f4c4f54544552595f4452415745445f42595f56495010fb" .
            "0a121a0a1545435f44554e47454f4e5f4e4f545f4f50454e454410fc0a12" .
            "240a1f45435f44554e47454f4e5f4e4f545f535543434553535f46494e49" .
            "5348454410fd0a12220a1d45435f434f4d4241545f44524f505f4954454d" .
            "5f5449445f57524f4e4710fe0a12220a1d45435f434f4d4241545f44524f" .
            "505f4954454d5f4e554d5f57524f4e4710ff0a12240a1f45435f434f4d42" .
            "41545f44524f505f4954454d5f494e4445585f57524f4e4710800b12270a" .
            "2245435f434f4d4241545f5049434b5f55505f4954454d5f494e4445585f" .
            "57524f4e4710810b12280a2345435f434f4d4241545f5049434b5f55505f" .
            "4954454d5f5354415455535f57524f4e4710820b12260a2145435f434f4d" .
            "4241545f4d4f4e535445525f4449455f494e4445585f57524f4e4710830b" .
            "12270a2245435f434f4d4241545f4d4f4e535445525f4449455f53544154" .
            "55535f57524f4e4710840b12250a2045435f434f4d4241545f46494e4953" .
            "485f504152415f444154415f57524f4e4710850b122a0a2545435f434f4d" .
            "4241545f46494e4953485f44554e47454f4e5f5354415455535f57524f4e" .
            "4710860b12270a2245435f434f4d4241545f46494e4953485f424f53535f" .
            "5354415455535f57524f4e4710870b122a0a2545435f434f4d4142545f46" .
            "494e4953485f4d4f4e535445525f5354415455535f57524f4e4710880b12" .
            "2d0a2845435f434f4d4241545f424f53535f42454845414445445f424f53" .
            "535f494e4445585f57524f4e4710890b122d0a2845435f434f4d4241545f" .
            "424f53535f42454845414445445f4e554d4245525f4f55545f4c494d4954" .
            "108a0b122f0a2a45435f434f4d4241545f504c415945525f44554e47454f" .
            "4e5f494e5354414e43455f4e4f545f4e554c4c108b0b12280a2345435f43" .
            "4f4d4241545f504c415945525f49535f414c52454144595f494e5f544541" .
            "4d108c0b12260a2145435f434f4d4241545f504c415945525f4449455f53" .
            "54415455535f4552524f52108d0b121a0a1545435f434f4d4241545f504c" .
            "415945525f44494544108e0b12240a1f45435f434f4d4241545f44554e47" .
            "454f4e5f43414e5f4e4f545f5357454550108f0b12200a1b45435f415245" .
            "4e415f4348414c4c454e47455f54494d455f4f555410dd0b121f0a1a4543" .
            "5f4152454e415f52414e4b494e475f5052495a455f474f5410de0b12160a" .
            "1145435f4152454e415f4e4f545f4f50454e10df0b121c0a1745435f4152" .
            "454e415f52414e4b494e475f55504441544510e00b12340a2f45435f4152" .
            "454e415f4348414c4c454e47455f52414e4b494e475f4e4f545f494e5f4d" .
            "415443485f504c415945525310e10b12250a2045435f4152454e415f4d41" .
            "5443485f504c41594552535f4e4f545f455849535410e20b122b0a264543" .
            "5f4152454e415f4348414c4c454e47455f504c415945525f444154415f43" .
            "48414e47454410e30b12230a1e45435f4152454e415f504c415945525f49" .
            "535f4348414c4c454e47494e4710e40b12250a2045435f4152454e415f50" .
            "4c415945525f4245454e5f4348414c4c454e4547454410e50b12240a1f45" .
            "435f4152454e415f504c415945525f52414e4b494e475f4348414e474544" .
            "10e60b12270a2245435f5855455a48414e5f4255595f4d4154455249414c" .
            "5f4e4f545f454e4f55474810c00c12200a1b45435f5855455a48414e5f4e" .
            "4f545f5045524d49545f54494d455310c10c12200a1b45435f5855455a48" .
            "414e5f53544152535f4e4f545f454e4f55474810c20c12260a2145435f58" .
            "55455a48414e5f53544152535f43414e545f4f50454e5f52455741524410" .
            "c30c121e0a1945435f54554c4f4e475f445241474f4e5f48505f4552524f" .
            "5210f20c121a0a1545435f54554c4f4e475f445241474f4e5f4445414410" .
            "f30c12180a1345435f414c52454144595f494e5f4755494c4410a40d121f" .
            "0a1a45435f5441524745545f414c52454144595f494e5f4755494c4410a5" .
            "0d12140a0f45435f4e4f545f494e5f4755494c4410a60d12220a1d45435f" .
            "52454143485f4d41585f4755494c445f4d454d4245525f4e554d10a70d12" .
            "1a0a1545435f4755494c445f4e4f5f50524956494c45474510a80d121d0a" .
            "1845435f4e4f545f464f554e445f4755494c445f4150504c5910a90d121b" .
            "0a1645435f414c52454144595f4150504c595f4755494c4410aa0d12250a" .
            "2045435f4e4f5f505245534944454e545f515549545f574954485f4d454d" .
            "42455210ab0d12290a2445435f4755494c445f50555243484153455f434f" .
            "554e545f4f55545f4f465f4c494d495410ac0d12320a2d45435f4755494c" .
            "445f52414e444f4d5f53484f505f50555243484153455f4954454d5f464c" .
            "41475f4552524f5210ad0d122b0a2645435f4755494c445f46495845445f" .
            "53484f505f4755494c445f4c4556454c5f4c494d54454410ae0d122c0a27" .
            "45435f4755494c445f52414e444f4d5f53484f505f4755494c445f4c4556" .
            "454c5f4c494d54454410af0d12230a1e45435f4755494c445f4352454154" .
            "455f4455504c49434154455f4e414d4510b00d12210a1c45435f4755494c" .
            "445f4352454154455f494c4c4547414c5f4e414d4510b10d12230a1e4543" .
            "5f4755494c445f4352454154455f4e414d455f544f4f5f53484f525410b2" .
            "0d12220a1d45435f4755494c445f4352454154455f4e414d455f544f4f5f" .
            "4c4f4e4710b30d12210a1c45435f46494748545f474f445f535155415245" .
            "5f4e4f545f4f50454e10880e12290a2445435f46494748545f474f445f53" .
            "51554152455f53434f52455f4e4f545f454e4f55474810890e122b0a2645" .
            "435f46494748545f474f445f5351554152455f4348414c4c454e47455f4f" .
            "55545f54494d45108a0e122f0a2a45435f46494748545f474f445f535155" .
            "4152455f4e4f545f45584953545f4d415443485f504c41594552108b0e12" .
            "200a1b45435f465249454e44535f504c415945525f4e4f545f4558495354" .
            "10ed0e121d0a1845435f465249454e44535f4150504c5945445f45584953" .
            "5410ee0e121d0a1845435f465249454e44535f465249454e44535f455849" .
            "535410ef0e12290a2445435f465249454e44535f4150504c5945445f4652" .
            "49454e44535f4f55545f4c494d495410f00e12250a2045435f465249454e" .
            "44535f4f574e5f465249454e44535f4f55545f4c494d495410f10e12190a" .
            "1445435f465249454e44535f4e4f545f455849535410f20e122a0a254543" .
            "5f465249454e44535f54524541535552455f524551554553545f4f55545f" .
            "4c494d544910f30e12230a1e45435f465249454e44535f54524541535552" .
            "455f5245515552455354454410f40e121f0a1a45435f465249454e44535f" .
            "414c52454144595f444f4e4154454410f50e12200a1b45435f465249454e" .
            "44535f444f4e4154455f4f55545f4c494d495410f60e12170a1245435f46" .
            "5249454e44535f49535f53454c4610f70e12240a1f45435f5445414d535f" .
            "504c415945525f414c52454144595f494e5f5445414d10d00f122a0a2545" .
            "435f5445414d535f504c594145525f414c52454144595f494e5f4f544845" .
            "525f5445414d10d10f12200a1b45435f5445414d535f4d454d4245525f4e" .
            "4f545f494e5f5445414d10d20f12200a1b45435f5445414d535f4e4f545f" .
            "5345545f44554e47454f4e5f494410d30f121c0a1745435f5445414d535f" .
            "4e4f545f45584953545f5445414d10d40f12210a1c45435f5445414d535f" .
            "4d454d4245525f4e4f545f494e5f5343454e4510d50f12280a2345435f54" .
            "45414d535f5343454e455f4e4f545f45584953545f44554e47454f4e5f49" .
            "4410d60f122a0a2545435f5445414d535f504c415945525f414c52454144" .
            "595f494e5f4f544845525f5445414d10d70f12260a2145435f5445414d53" .
            "5f504c415945525f4e4f545f494e5f5445414d5f5343454e4510d80f1223" .
            "0a1e45435f5445414d535f4d454d424552535f4e554d5f4f55545f52414e" .
            "474510d90f12260a2145435f52454345495641424c455f5041434b5f414c" .
            "52454144595f5049434b454410b410121b0a1645435f4d41494c5f414c52" .
            "454144595f5049434b454410981112190a1445435f4d41494c5f414c5245" .
            "4144595f5245414410991112240a1f45435f484f4e4f55525f53484f505f" .
            "53434f52455f4e4f545f454e4f55474810a21112230a1e45435f50524f53" .
            "455353494f4e5f5452414e535f4c4553535f455155495010ca11121a0a15" .
            "45435f4d494a494e475f434f554e545f4552524f5210fc1112140a0f4543" .
            "5f4d494a494e475f444f494e4710fd1112210a1c45435f4d4f4e54485f43" .
            "4152445f57454c464152455f5049434b454410af1212210a1c45435f5350" .
            "495249545f434f4c4c4543545f54494d455f4552524f5210b81212260a21" .
            "45435f5350495249545f434f4c4c45435445445f42595f54494d455f5052" .
            "494f4410b91212230a1e45435f434f4d4241545f46494e4953485f44554e" .
            "47454f4e5f4552524f5210ba12122c0a2745435f434f4d4241545f535745" .
            "45505f44554e47454f4e5f5649505f4c4556454c5f4c494d495410bc1212" .
            "1f0a1a45435f434845434b5f4441595f4f524445525f434845434b454410" .
            "e01212200a1b45435f434845434b5f4349454e545f54494d455f494e5641" .
            "4c494410e11212230a1e45435f504c415945525f4352454154455f494e44" .
            "45585f494e56414c494410ea1212200a1b45435f51554552595f504c4159" .
            "45525f444154415f4641494c454410c41312220a1d45435f434f4d424154" .
            "5f564552494649434154494f4e5f4641494c454410c51312270a2245435f" .
            "44454c4554455f50594c415445525f494e56414c49445f41434f554e5449" .
            "4410a91412280a2345435f44454c4554455f50594c415445525f494e5641" .
            "4c49445f50594c41544552494410aa1412180a1345435f4e4553545f494e" .
            "4445585f4552524f5210ab14121d0a1845435f4e4553545f52454c494353" .
            "5f5549445f4552524f5210ac14121e0a1945435f4e4553545f52454c4943" .
            "535f545950455f4552524f5210ad1412200a1b45435f4e4553545f52454c" .
            "4943535f5245574152445f4552524f5210ae1412200a1b45435f4e455354" .
            "5f52454c4943535f434f4e4649475f4552524f5210af14121f0a1a45435f" .
            "4e4553545f52454c4943535f4c4556454c5f4552524f5210b01412210a1c" .
            "45435f4e4553545f52454c4943535f4c4556454c55505f4552524f5210b1" .
            "14121d0a1845435f4e4553545f52454c4943535f4f50505f4552524f5210" .
            "b21412260a2145435f4e4553545f52454c4943535f534e415443485f434f" .
            "554e545f4552524f5210b314121e0a1945435f4e4553545f52454c494353" .
            "5f4c4f434b5f4552524f5210b414122b0a2645435f4e4553545f52454c49" .
            "43535f545241494e5f484156455f504c415945525f4552524f5210b51412" .
            "250a2045435f4e4553545f52454c4943535f545241494e5f414741494e5f" .
            "4552524f5210b61412240a1f45435f4e4553545f52454c4943535f534541" .
            "5243485f5041595f4552524f5210b714121d0a1845435f4e4553545f5245" .
            "4c4943535f50524f54454354454410b81412180a1345435f46555348495f" .
            "545950455f4552524f5210b914121b0a1645435f46555348495f554e4551" .
            "5549505f4552524f5210ba14121c0a1745435f46555348495f4551554950" .
            "5f52455f4552524f5210bb1412220a1d45435f46555348495f4551554950" .
            "5f4e4f54464f554e445f4552524f5210bc14121c0a1745435f4655534849" .
            "5f4e4f54464f554e445f4552524f5210bd1412170a1245435f4655534849" .
            "5f4541545f4552524f5210be1412220a1d45435f52454c4943535f4e4545" .
            "445f535452454e4754485f4552524f5210bf14121f0a1a45435f52454c49" .
            "43535f4e4545445f434c4153535f4552524f5210c014121e0a1945435f46" .
            "555348495f45515549505f4c4f434b5f4552524f5210c11412210a1c4543" .
            "5f52414e444f4d5f53484f505f4954454d5f53414c455f4f555410d01412" .
            "280a2345435f4f4e4c494e455f5052495a455f5049434b5f54494d455f4e" .
            "4f545f5245414348108c1512330a2e45435f4f4e4c494e455f5052495a45" .
            "5f5049434b5f4e4f545f45584953545f52454345495641424c455f504143" .
            "4b108d15121f0a1a45435f494e56414c49445f52454345495641424c455f" .
            "5041434b108e1512150a1045435f5345525645525f554e4f50454e108f15" .
            "12150a1045435f4c41444445525f554e4f50454e109015121e0a1945435f" .
            "43444b5f4552524f525f485454505f5245515545535410911512160a1145" .
            "435f43444b5f434f44455f4552524f5210921512160a1145435f4d414c4c" .
            "5f5649505f4552524f5210931512180a1345435f4d414c4c5f434f554e54" .
            "5f4552524f52109415121f0a1a45435f4d414c4c5f474c4f42414c5f434f" .
            "554e545f4552524f5210951512160a1145435f4d414c4c5f4e4f545f464f" .
            "554e44109615121d0a1845435f4d414c4c5f4954454d5f4e4f545f494e5f" .
            "54494d4510971512160a1145435f5155455354494f4e5f4552524f5210a0" .
            "15121b0a1645435f5155455354494f4e5f54494d455f4552524f5210a115" .
            "121d0a1845435f5155455354494f4e5f4c454e4754485f4552524f5210a2" .
            "1512200a1b45435f5155455354494f4e5f4e4f545f424547494e5f455252" .
            "4f5210a315122b0a2645435f5649505f52455354524f4143544956455f41" .
            "574152445f554e52454345495641424c4510a415122a0a2545435f564950" .
            "5f52455354524f4143544956455f41574152445f5649505f554e52454143" .
            "4810a515122e0a2945435f5649505f52455354524f4143544956455f4157" .
            "4152445f5649505f44415441545f4552524f5210a61512290a2445435f56" .
            "49505f52455354524f4143544956455f41574152445f524154455f455252" .
            "4f5210a715121a0a1545435f434841505445525f424f585f554e4f50454e" .
            "10a815121c0a1745435f434841505445525f424f585f5245434549564544" .
            "10a915121f0a1a45435f41435449564954595f4e4f545f41434345505441" .
            "424c45109d1812250a2045435f41435449564954595f41574152445f4e4f" .
            "545f41434345505441424c45109e1812180a1345435f41574152445f554e" .
            "46494e4953484544109f1812180a1345435f4552524f525f41574152445f" .
            "54494d4510a018121b0a1645435f45584345454445445f524543565f434f" .
            "554e5410a11812160a1145435f41574152445f524543454956454410a218" .
            "12230a1e45435f4756525f485454505f524551554553545f4a534f4e5f45" .
            "52524f5210ac1b12160a1145435f4756525f434f44455f4552524f5210ad" .
            "1b121a0a1545435f5445414d5f4e4f545f4f50454e5f54494d4510811912" .
            "1b0a1645435f5445414d5f504c415945525f4f46464c494e45108219121a" .
            "0a1545435f5445414d5f494e56495445525f4c4541564510831912180a13" .
            "45435f5445414d5f4d415443485f4641494c44108419121d0a1845435f4d" .
            "554c54495f5056505f4c4556454c5f4c494d495410e519122a0a2545435f" .
            "4d554c54495f5056505f5445414d4d4154455f434f554e545f5245414348" .
            "5f4d415810e619620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
