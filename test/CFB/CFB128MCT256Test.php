<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MCT test data for CFB128
# State : Encrypt and Decrypt
# Key Length : 256
# Generated on Fri Apr 22 15:11:57 2011

namespace AES\Test;

use AES\CFB;
use AES\Key;

class CFB128MCT256 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['3bfe82b841d969e462c9e0e95146d120d28ecfdac49b42f45e53c5abb900ccb2', 'bea7ae84b0d16bd65e1fc05d74186601', '08cb9f7ebf92c4df696de5a2edb7c313', '61a721d192b0ad2ad2c33afe742fec48'],
            ['5e5cbd7980287d8017ad0cafc2b7acbcb329ee0b562befde8c90ff55cd2f20fa', '61a721d192b0ad2ad2c33afe742fec48', '65a23fc1c1f114647564ec4693f17d9c', 'f74124001f05abbbee8ef6142e5e57ca'],
            ['7e5d072fdc1f57e10ce7621327073eda4468ca0b492e4465621e0941e3717730', 'f74124001f05abbbee8ef6142e5e57ca', '2001ba565c372a611b4a6ebce5b09266', '2b88a577d046c72199e089bc3f77ba22'],
            ['d52d702530cc89e47fa20dc2079e1edb6fe06f7c99688344fbfe80fddc06cd12', '2b88a577d046c72199e089bc3f77ba22', 'ab70770aecd3de0573456fd120992001', '55240b18448719023e15d7d516e49ef4'],
            ['d41f27e4f4127ccd8f5e2471c6c50c9b3ac46464ddef9a46c5eb5728cae253e6', '55240b18448719023e15d7d516e49ef4', '013257c1c4def529f0fc29b3c15b1240', '4c861ce631e9ef1fe8f2f0ea687fc564'],
            ['6ed12ce5f410b7c3cd3f323e0434e67776427882ec0675592d19a7c2a29d9682', '4c861ce631e9ef1fe8f2f0ea687fc564', 'bace0b010002cb0e4261164fc2f1eaec', '02e0e3bcc831f41ad3a557d7682c952f'],
            ['39c3b8c60d4c4b92f7274ada417277ad74a29b3e24378143febcf015cab103ad', '02e0e3bcc831f41ad3a557d7682c952f', '57129423f95cfc513a1878e4454691da', '2a4922d47a45b07b5abb67ac93852cab'],
            ['86dc6dacfae3b1b9f44e42646c579b365eebb9ea5e723138a40797b959342f06', '2a4922d47a45b07b5abb67ac93852cab', 'bf1fd56af7affa2b036908be2d25ec9b', '234b9d1fed27d00942cf68415f0b0a8a'],
            ['476ecf1a07feb0961409f6f86ec5bdd57da024f5b355e131e6c8fff8063f258c', '234b9d1fed27d00942cf68415f0b0a8a', 'c1b2a2b6fd1d012fe047b49c029226e3', '574622548378cd5d4d3682e02c29a322'],
            ['2c98ac48c31a4267ab6a4f6185226a782ae606a1302d2c6cabfe7d182a1686ae', '574622548378cd5d4d3682e02c29a322', '6bf66352c4e4f2f1bf63b999ebe7d7ad', '0a35bc07e60ff06135026df746746b9b'],
            ['6cf25fb446c0334271b4e0053b58797120d3baa6d622dc0d9efc10ef6c62ed35', '0a35bc07e60ff06135026df746746b9b', '406af3fc85da7125dadeaf64be7a1309', '057a72ca69990aae3f6f166f1ea90236'],
            ['11b6d9cab2d242c0308a2cd5ee0155b125a9c86cbfbbd6a3a193068072cbef03', '057a72ca69990aae3f6f166f1ea90236', '7d44867ef4127182413eccd0d5592cc0', '903ff01420ec0c1cfd84c70680b82c18'],
            ['fd64f95ba1c9508b67b13072d35997ecb59638789f57dabf5c17c186f273c31b', '903ff01420ec0c1cfd84c70680b82c18', 'ecd22091131b124b573b1ca73d58c25d', 'ea47ff1a1ddc3a9b983890c4e91946af'],
            ['27a1329b5eecdb84a92df9a6eebbd6aa5fd1c762828be024c42f51421b6a85b4', 'ea47ff1a1ddc3a9b983890c4e91946af', 'dac5cbc0ff258b0fce9cc9d43de24146', '009702469439a97928ec895c68edfc50'],
            ['e6dc6a51afc3bd485039e06fd9616e575f46c52416b2495decc3d81e738779e4', '009702469439a97928ec895c68edfc50', 'c17d58caf12f66ccf91419c937dab8fd', '1f4d4c7f0e3eca7d2ac953327c071fd9'],
            ['2ec46b1afdbec4927552e569ade52003400b895b188c8320c60a8b2c0f80663d', '1f4d4c7f0e3eca7d2ac953327c071fd9', 'c818014b527d79da256b050674844e54', 'd4b0f89e57a9672fe934bc0697a9c536'],
            ['4fa299fd9a5c86ab72f3be946f17f2e594bb71c54f25e40f2f3e372a9829a30b', 'd4b0f89e57a9672fe934bc0697a9c536', '6166f2e767e2423907a15bfdc2f2d2e6', 'aefc449b9f9c8d8fee98d2c2669edfa3'],
            ['6a28825187173496e689f2fef328deed3a47355ed0b96980c1a6e5e8feb77ca8', 'aefc449b9f9c8d8fee98d2c2669edfa3', '258a1bac1d4bb23d947a4c6a9c3f2c08', '91d06749c8c2f0cffa9d5f4a8a76d568'],
            ['74263c83670a47482082eeb82d0fcfbfab975217187b994f3b3bbaa274c1a9c0', '91d06749c8c2f0cffa9d5f4a8a76d568', '1e0ebed2e01d73dec60b1c46de271152', '2e78f6131456098e855ddb09bacfd0ed'],
            ['9771a64d5031b6409ef97d65e28338a785efa4040c2d90c1be6661abce0e792d', '2e78f6131456098e855ddb09bacfd0ed', 'e3579ace373bf108be7b93ddcf8cf718', '124337863baf5b946624ae5bf09dc558'],
            ['7c026fd8afd589f963916533a02fdc1597ac93823782cb55d842cff03e93bc75', '124337863baf5b946624ae5bf09dc558', 'eb73c995ffe43fb9fd68185642ace4b2', 'e620b55d47f770bc23c25726014835d2'],
            ['4c4423f4260d26228b48c0cc931498d0718c26df7075bbe9fb8098d63fdb89a7', 'e620b55d47f770bc23c25726014835d2', '30464c2c89d8afdbe8d9a5ff333b44c5', '263a29823bda6e7bf11b10e9620378c7'],
            ['af4b701bf460ae7279703ab7ce53cb5c57b60f5d4bafd5920a9b883f5dd8f160', '263a29823bda6e7bf11b10e9620378c7', 'e30f53efd26d8850f238fa7b5d47538c', 'aacf62a6295a35c4f8c6867ffc5e0a3e'],
            ['eb2c4b6aa81f52a3fdf72791daad669ffd796dfb62f5e056f25d0e40a186fb5e', 'aacf62a6295a35c4f8c6867ffc5e0a3e', '44673b715c7ffcd184871d2614feadc3', '254ccb70608394baaa985b743b326f2c'],
            ['7cef42e705a26246961a7a534b9b2775d835a68b027674ec58c555349ab49472', '254ccb70608394baaa985b743b326f2c', '97c3098dadbd30e56bed5dc2913641ea', 'cadff380297a9f491bb4a021503029e2'],
            ['9e00f80a0c2f7d3be8df7e9c86f4ec2812ea550b2b0ceba54371f515ca84bd90', 'cadff380297a9f491bb4a021503029e2', 'e2efbaed098d1f7d7ec504cfcd6fcb5d', '0b5e2244565316a2582ab5e109af80d3'],
            ['e71d70b737d4b7f3b5186aeaf6bbd4d519b4774f7d5ffd071b5b40f4c32b3d43', '0b5e2244565316a2582ab5e109af80d3', '791d88bd3bfbcac85dc71476704f38fd', '4a7c5ccb163c46702b68335cb392ddb6'],
            ['430a21da3e604243efc1e78c850ad00753c82b846b63bb77303373a870b9e0f5', '4a7c5ccb163c46702b68335cb392ddb6', 'a417516d09b4f5b05ad98d6673b104d2', '04b6d9420822ee43c050fc536cf74a6c'],
            ['00ddc7a30385a8209ffed6b33b56ef79577ef2c663415534f0638ffb1c4eaa99', '04b6d9420822ee43c050fc536cf74a6c', '43d7e6793de5ea63703f313fbe5c3f7e', 'ec0d3a702906f863578244fdbd5b1757'],
            ['8a330598eae7998c7657d59e33685dcdbb73c8b64a47ad57a7e1cb06a115bdce', 'ec0d3a702906f863578244fdbd5b1757', '8aeec23be96231ace9a9032d083eb2b4', 'db6d66d3c83b08a1982c97877f1094fa'],
            ['92f956da1a51eaac0d7823d1f5506f30601eae65827ca5f63fcd5c81de052934', 'db6d66d3c83b08a1982c97877f1094fa', '18ca5342f0b673207b2ff64fc63832fd', '90615cb00c4bd8cecd5270984b41d1fd'],
            ['a3c48cdc916fd66422eb4e06824a447ef07ff2d58e377d38f29f2c199544f8c9', '90615cb00c4bd8cecd5270984b41d1fd', '313dda068b3e3cc82f936dd7771a2b4e', '348c05f7850cc42bbd81b77923f66869'],
            ['b0b6d1515bfc250ccd4c1bf5385f2b3fc4f3f7220b3bb9134f1e9b60b6b290a0', '348c05f7850cc42bbd81b77923f66869', '13725d8dca93f368efa755f3ba156f41', '6dd8ecedeb24ac04d7c9dddc4134279f'],
            ['c6f543053202b2ae065f41b4dc6beafea92b1bcfe01f151798d746bcf786b73f', '6dd8ecedeb24ac04d7c9dddc4134279f', '7643925469fe97a2cb135a41e434c1c1', '35007c6dab7c52a904549157ae6c2ea4'],
            ['8bf6c6a493d2df4d1694e3e443e1526a9c2b67a24b6347be9c83d7eb59ea999b', '35007c6dab7c52a904549157ae6c2ea4', '4d0385a1a1d06de310cba2509f8ab894', 'c9b4c55e7f70adbd83bc808947ee3061'],
            ['778dcb6951560d15871e4b184ba07184559fa2fc3413ea031f3f57621e04a9fa', 'c9b4c55e7f70adbd83bc808947ee3061', 'fc7b0dcdc284d258918aa8fc084123ee', 'f7a0d2003e9530b0a60951440f9ae58e'],
            ['41f22927546f0a172c9b2dc3ea538292a23f70fc0a86dab3b9360626119e4c74', 'f7a0d2003e9530b0a60951440f9ae58e', '367fe24e05390702ab8566dba1f3f316', '151c01c306bb28403abf89c484d27126'],
            ['f0c6ecb82e741850d8f12ea0fdf455bfb723713f0c3df2f383898fe2954c3d52', '151c01c306bb28403abf89c484d27126', 'b134c59f7a1b1247f46a036317a7d72d', '8c8ea2a6a5e4765e83f99239c2cadd20'],
            ['64f191555040dc02447866c1f7b547e23badd399a9d984ad00701ddb5786e072', '8c8ea2a6a5e4765e83f99239c2cadd20', '94377ded7e34c4529c8948610a41125d', '7e173d10bd8b13513b13e9ccac95a576'],
            ['3c122dc0f5b25d2d03b68a620f5d72b445baee89145297fc3b63f417fb134504', '7e173d10bd8b13513b13e9ccac95a576', '58e3bc95a5f2812f47ceeca3f8e83556', '1661776222ea1b3563b3224e32f47c18'],
            ['9f37abb76970cd04169cfee025c3098853db99eb36b88cc958d0d659c9e7391c', '1661776222ea1b3563b3224e32f47c18', 'a32586779cc29029152a74822a9e7b3c', '994d68769f9edd9f25294f70a82273a1'],
            ['4b91d1b40c3bf7b05629ad36f23089d2ca96f19da92651567df9992961c54abd', '994d68769f9edd9f25294f70a82273a1', 'd4a67a03654b3ab440b553d6d7f3805a', '1aa0db6d9a5fb79b3da96a2a1a1ea940'],
            ['ce83015dcce671f1db424c9d55e72d4ad0362af03379e6cd4050f3037bdbe3fd', '1aa0db6d9a5fb79b3da96a2a1a1ea940', '8512d0e9c0dd86418d6be1aba7d7a498', 'a4b8140d11468621c4e226798d7093f2'],
            ['9c8fc684de24dc239447720179982646748e3efd223f60ec84b2d57af6ab700f', 'a4b8140d11468621c4e226798d7093f2', '520cc7d912c2add24f053e9c2c7f0b0c', '2312a6cbe30c73f126c2fc0fc07e9f7a'],
            ['06bf8300e416d3e06be7a7da6c66527d579c9836c133131da270297536d5ef75', '2312a6cbe30c73f126c2fc0fc07e9f7a', '9a3045843a320fc3ffa0d5db15fe743b', 'b1ddd1b804e960fc9ef1507e63d79327'],
            ['5e770fded688f24b6ac4dfa3e337a0bde641498ec5da73e13c81790b55027c52', 'b1ddd1b804e960fc9ef1507e63d79327', '58c88cde329e21ab012378798f51f2c0', '48f8ac9a7115da9560ffcc0755b2bb18'],
            ['4d5bf0711cb0d930400f30617099b225aeb9e514b4cfa9745c7eb50c00b0c74a', '48f8ac9a7115da9560ffcc0755b2bb18', '132cffafca382b7b2acbefc293ae1298', '73bc73d18ee47895ac9f71d1feaa9646'],
            ['d2c42462134995f117043f0f5ea0c46ddd0596c53a2bd1e1f0e1c4ddfe1a510c', '73bc73d18ee47895ac9f71d1feaa9646', '9f9fd4130ff94cc1570b0f6e2e397648', 'd58a4c51b7c5f11c6e9dfea880b89175'],
            ['021cb0bd9d7601f9ad9734005a1982bb088fda948dee20fd9e7c3a757ea2c079', 'd58a4c51b7c5f11c6e9dfea880b89175', 'd0d894df8e3f9408ba930b0f04b946d6', 'c94acd46b90480dcae3400addbff2f4f'],
            ['7644181f01114f6a5dd786a48dee965bc1c517d234eaa02130483ad8a55def36', 'c94acd46b90480dcae3400addbff2f4f', '7458a8a29c674e93f040b2a4d7f714e0', '3c967adb0ac50151ad66cd23093f7097'],
            ['1a92181fd72fa43a2ddac1b6b10f8579fd536d093e2fa1709d2ef7fbac629fa1', '3c967adb0ac50151ad66cd23093f7097', '6cd60000d63eeb50700d47123ce11322', '25c8b1f6292bdea15bbdb8006b52bfe8'],
            ['68c4fc6945e441fa966d9877d20f9c42d89bdcff17047fd1c6934ffbc7302049', '25c8b1f6292bdea15bbdb8006b52bfe8', '7256e47692cbe5c0bbb759c16300193b', '27a72831f600496eb205785df340c095'],
            ['546335056396857e30f9ac9d4844d218ff3cf4cee10436bf749637a63470e0dc', '27a72831f600496eb205785df340c095', '3ca7c96c2672c484a69434ea9a4b4e5a', '8789e31766a4ad606651ac1a53b74255'],
            ['e3c1958d0d4d3956d1fb62f6b05509af78b517d987a09bdf12c79bbc67c7a289', '8789e31766a4ad606651ac1a53b74255', 'b7a2a0886edbbc28e102ce6bf811dbb7', 'ceeec4501b6f843c0b0bdebe61399a25'],
            ['0854c02c195407e5fd75a50e5ab63f25b65bd3899ccf1fe319cc450206fe38ac', 'ceeec4501b6f843c0b0bdebe61399a25', 'eb9555a114193eb32c8ec7f8eae3368a', 'e21e42514c15f5dc96eab92620ff4234'],
            ['21b63903968c3195f4df67fdaadff23f544591d8d0daea3f8f26fc2426017a98', 'e21e42514c15f5dc96eab92620ff4234', '29e2f92f8fd8367009aac2f3f069cd1a', 'c2e2da9e8ca5cb2cb1dd2be6d5e1b925'],
            ['821ba57ac0161493fa49a8f6eaff52c196a74b465c7f21133efbd7c2f3e0c3bd', 'c2e2da9e8ca5cb2cb1dd2be6d5e1b925', 'a3ad9c79569a25060e96cf0b4020a0fe', '364b9931b0a3a7e704425ae56c91ca7c'],
            ['f81d69c21ba8eebac4bb0118bd3cebbda0ecd277ecdc86f43ab98d279f7109c1', '364b9931b0a3a7e704425ae56c91ca7c', '7a06ccb8dbbefa293ef2a9ee57c3b97c', '6719dabb092bca600f5c534f842ceaf6'],
            ['7e38862509c83b546266d8eacd8d7c40c7f508cce5f74c9435e5de681b5de337', '6719dabb092bca600f5c534f842ceaf6', '8625efe71260d5eea6ddd9f270b197fd', '6de4f66b31b8990329b17d94b5d6ff3b'],
            ['c9f6e6a10b4eae96b5bdb369e1a44fe3aa11fea7d44fd5971c54a3fcae8b1c0c', '6de4f66b31b8990329b17d94b5d6ff3b', 'b7ce6084028695c2d7db6b832c2933a3', 'f1260cd58cbd1b7c07cc854d1b3d1984'],
            ['a7d1bf9352b9e5683c2fbd847537a80d5b37f27258f2ceeb1b9826b1b5b60588', 'f1260cd58cbd1b7c07cc854d1b3d1984', '6e27593259f74bfe89920eed9493e7ee', '6ec7c50a7f9deb266dc3c43769e20576'],
            ['c2c1cf9cc9c440a5dcd80730c8e96a6335f03778276f25cd765be286dc5400fe', '6ec7c50a7f9deb266dc3c43769e20576', '6510700f9b7da5cde0f7bab4bddec26e', 'be05a1f80e86ce4e7f1472c48e999f3d'],
            ['ae7fa584f7a57a7896d3043e21b2a9b18bf5968029e9eb83094f904252cd9fc3', 'be05a1f80e86ce4e7f1472c48e999f3d', '6cbe6a183e613add4a0b030ee95bc3d2', '45a98aa594438d7d588dad0ef81099ff'],
            ['0236ff79909847976b8277a7fda10f50ce5c1c25bdaa66fe51c23d4caadd063c', '45a98aa594438d7d588dad0ef81099ff', 'ac495afd673d3deffd517399dc13a6e1', '89c0405e4c676d0c7e446b3224714b1d'],
            ['d5960704e350bf13149dec08e3e4b29d479c5c7bf1cd0bf22f86567e8eac4d21', '89c0405e4c676d0c7e446b3224714b1d', 'd7a0f87d73c8f8847f1f9baf1e45bdcd', '69ed7a88459eadd1b09839afe916e799'],
            ['7b69b9e6c95540e9812b31dec91d18fd2e7126f3b453a6239f1e6fd167baaab8', '69ed7a88459eadd1b09839afe916e799', 'aeffbee22a05fffa95b6ddd62af9aa60', '8b476c78a96cd24f6b9dde0e8df20851'],
            ['dd1e68e526306ff370dced9a0f4f73e8a5364a8b1d3f746cf483b1dfea48a2e9', '8b476c78a96cd24f6b9dde0e8df20851', 'a677d103ef652f1af1f7dc44c6526b15', '3288d6f2f73c898ae69aabdc0e07af20'],
            ['aa48f0b09cab3d2433640604ff17000797be9c79ea03fde612191a03e44f0dc9', '3288d6f2f73c898ae69aabdc0e07af20', '77569855ba9b52d743b8eb9ef05873ef', 'bd8922a2ad1f753f20efb6544ad85b67'],
            ['dc450dd25f25c71fab1c63393f8e8b5f2a37bedb471c88d932f6ac57ae9756ae', 'bd8922a2ad1f753f20efb6544ad85b67', '760dfd62c38efa3b9878653dc0998b58', '00a1c9bc1958a7185374e519f1313c89'],
            ['a037f537584a4da3d2da20dabe43f1352a9677675e442fc16182494e5fa66a27', '00a1c9bc1958a7185374e519f1313c89', '7c72f8e5076f8abc79c643e381cd7a6a', '7fa26db6fd28c6b1a23e3b1d9ed12b74'],
            ['29547145033451e9893fcfcae4375aeb55341ad1a36ce970c3bc7253c1774153', '7fa26db6fd28c6b1a23e3b1d9ed12b74', '896384725b7e1c4a5be5ef105a74abde', '0b533e463ee10057b80472e7836e2528'],
            ['b1e081ff57853262499dc6dca128a5325e6724979d8de9277bb800b44219647b', '0b533e463ee10057b80472e7836e2528', '98b4f0ba54b1638bc0a20916451fffd9', 'c7f1799bd347a6976fcdc58e96f4151f'],
            ['2f17206017402b233a82aa0b11b02efe99965d0c4eca4fb01475c53ad4ed7164', 'c7f1799bd347a6976fcdc58e96f4151f', '9ef7a19f40c51941731f6cd7b0988bcc', 'a2770ab0e7f75e53f18bd3bf1d9bee43'],
            ['e6a2843099901a46075226ce692d07fa3be157bca93d11e3e5fe1685c9769f27', 'a2770ab0e7f75e53f18bd3bf1d9bee43', 'c9b5a4508ed031653dd08cc5789d2904', '78045ebabb509fa7a7f2b451bee9bc9d'],
            ['bb08f849eaa096353a81ff3b157539c243e50906126d8e44420ca2d4779f23ba', '78045ebabb509fa7a7f2b451bee9bc9d', '5daa7c7973308c733dd3d9f57c583e38', '84176856d15e73ca3d88b479128b0c6e'],
            ['019910ab8ff1ba55c616bf154bb6bfa0c7f26150c333fd8e7f8416ad65142fd4', '84176856d15e73ca3d88b479128b0c6e', 'ba91e8e265512c60fc97402e5ec38662', '6a13994159a5e1f5841ecfaf950b9073'],
            ['6493d400b1f0d58e20efa2b98419c329ade1f8119a961c7bfb9ad902f01fbfa7', '6a13994159a5e1f5841ecfaf950b9073', '650ac4ab3e016fdbe6f91daccfaf7c89', '6c0c83062e748466605f9145e4f2d083'],
            ['5863812dcfc12a5d83a38629e01e6e09c1ed7b17b4e2981d9bc5484714ed6f24', '6c0c83062e748466605f9145e4f2d083', '3cf0552d7e31ffd3a34c24906407ad20', '69b43349d67e9b46ffd9919542b0403a'],
            ['1a2de513bd4302cfb042c9525fee87e2a859485e629c035b641cd9d2565d2f1e', '69b43349d67e9b46ffd9919542b0403a', '424e643e7282289233e14f7bbff0e9eb', 'fd4bf06fabb2b71ccf1edc1dd97fc0a0'],
            ['a8d5565c77d5f98f249e1733a8f465c45512b831c92eb447ab0205cf8f22efbe', 'fd4bf06fabb2b71ccf1edc1dd97fc0a0', 'b2f8b34fca96fb4094dcde61f71ae226', '71a0537d11bc880686e9b76a1c1e3587'],
            ['41d18267c9cef7cecb5abf4972a5524624b2eb4cd8923c412debb2a5933cda39', '71a0537d11bc880686e9b76a1c1e3587', 'e904d43bbe1b0e41efc4a87ada513782', 'c069f0df357e0086cb476997e7b3f1b5'],
            ['6a294c35f9852becc8286a89ce546bbbe4db1b93edec3cc7e6acdb32748f2b8c', 'c069f0df357e0086cb476997e7b3f1b5', '2bf8ce52304bdc220372d5c0bcf139fd', 'da272a683738f028a9d677e52f451871'],
            ['c9c45b78545f1447e59d44e34b024d973efc31fbdad4ccef4f7aacd75bca33fd', 'da272a683738f028a9d677e52f451871', 'a3ed174dadda3fab2db52e6a8556262c', '4e64bf7287e726c39101ce16c8804e27'],
            ['4076d65e341ddc804f7f72a76072d7ab70988e895d33ea2cde7b62c1934a7dda', '4e64bf7287e726c39101ce16c8804e27', '89b28d266042c8c7aae236442b709a3c', '824cdebcbe4e187db56616c438476d12'],
            ['5ed76ecdde88dc6867d9fd2113f83513f2d45035e37df2516b1d7405ab0d10c8', '824cdebcbe4e187db56616c438476d12', '1ea1b893ea9500e828a68f86738ae2b8', '9e4f08e8eb96dd16089219e07c94152d'],
            ['efe37bdeec45ed1cef42cf115dbf3da66c9b58dd08eb2f47638f6de5d79905e5', '9e4f08e8eb96dd16089219e07c94152d', 'b134151332cd3174889b32304e4708b5', '8ec9e677bc99ff8f288ab2b5a528c8c2'],
            ['d69533027da7eb3ee804a1c7eb9a2ecce252beaab472d0c84b05df5072b1cd27', '8ec9e677bc99ff8f288ab2b5a528c8c2', '397648dc91e2062207466ed6b625136a', '2af17eaca3305c84bb3753bfd3d5f3da'],
            ['ee3ebb737cc51576fb30bd30c04cfb57c8a3c00617428c4cf0328cefa1643efd', '2af17eaca3305c84bb3753bfd3d5f3da', '38ab88710162fe4813341cf72bd6d59b', 'c1730aa5b3be71e92c65c08788964524'],
            ['36edf8f6e3fa26e8bd5cff0ae663ddb709d0caa3a4fcfda5dc574c6829f27bd9', 'c1730aa5b3be71e92c65c08788964524', 'd8d343859f3f339e466c423a262f26e0', '801c50beff301bb1ec95026736e2b42b'],
            ['41c24a5e30ae0064241de791ad3e827189cc9a1d5bcce61430c24e0f1f10cff2', '801c50beff301bb1ec95026736e2b42b', '772fb2a8d354268c9941189b4b5d5fc6', '1b35f8d8583a8c1d4500afb6a3230231'],
            ['b023a08c0a820ac41d85585dbf4c38a592f962c503f66a0975c2e1b9bc33cdc3', '1b35f8d8583a8c1d4500afb6a3230231', 'f1e1ead23a2c0aa03998bfcc1272bad4', '92527d1c03bfe9f4e00126b64d032f10'],
            ['cd74a4942e2a9f27b8ce3400f868921a00ab1fd9004983fd95c3c70ff130e2d3', '92527d1c03bfe9f4e00126b64d032f10', '7d57041824a895e3a54b6c5d4724aabf', 'ca66d9204e9bf6ee94ae10e4c3b6eedc'],
            ['f0edc59adb376c6b02e06abd4d9fe5c8cacdc6f94ed27513016dd7eb32860c0f', 'ca66d9204e9bf6ee94ae10e4c3b6eedc', '3d99610ef51df34cba2e5ebdb5f777d2', '5a7bc725418cf5c268a6bb1b10b65341'],
            ['979b49f4718319b03fafdef94a2fd2ee90b601dc0f5e80d169cb6cf022305f4e', '5a7bc725418cf5c268a6bb1b10b65341', '67768c6eaab475db3d4fb44407b03726', 'e0ed3fc24f359b12b0c9436d12b68cf1'],
            ['1e5792153c28e66151ae3d438a4f4843705b3e1e406b1bc3d9022f9d3086d3bf', 'e0ed3fc24f359b12b0c9436d12b68cf1', '89ccdbe14dabffd16e01e3bac0609aad', '24d20498c16752156d0cd7605f15e8dd'],
            ['4c64054daf7e94a614c9a839239857ba54893a86810c49d6b40ef8fd6f933b62', '24d20498c16752156d0cd7605f15e8dd', '52339758935672c74567957aa9d71ff9', 'eb8af82fde4c7c094e7b738f417ce721'],
            ['d9faa49c0d0ab2476de800337883ac2bbf03c2a95f4035dffa758b722eefdc43', 'eb8af82fde4c7c094e7b738f417ce721', '959ea1d1a27426e17921a80a5b1bfb91', '23f5b792b5518d3592251fd093fc5d0e'],
            ['c6ad1c800abbb438e4218aa328c840649cf6753bea11b8ea685094a2bd13814d', '23f5b792b5518d3592251fd093fc5d0e', '1f57b81c07b1067f89c98a90504bec4f', '14320a3b78a99451a5ced353f74360bb'],
            ['c080c3efd681a1125769ea57372c5e9688c47f0092b82cbbcd9e47f14a50e1f6', '14320a3b78a99451a5ced353f74360bb', '062ddf6fdc3a152ab34860f41fe41ef2', '29dd3a21d3ecfd94eab146679d982c00'],
            ['9c4e425b4bf45eb5971f63919c80982ea11945214154d12f272f0196d7c8cdf6', '29dd3a21d3ecfd94eab146679d982c00', '5cce81b49d75ffa7c07689c6abacc6b8', 'd142e63eb14cf9cff8a23dd8f1a8446e']
        ];
    }

    function decryptProvider()
    {
        return [
            ['37664842a5f64779a06bfb640ae88cdb6ea3e7634beab552b0648d34099a686e', 'bb1802f8eac784ff66dbf2fbe63f5755', 'b20d5526aa68bfb5d2afed5d80ef8aae', '3d273aa41e658d8ab5bc681d43b595c2'],
            ['01a44a54f6b492f1917b7145112d75195384ddc7558f38d805d8e5294a2ffdac', '3d273aa41e658d8ab5bc681d43b595c2', '36c202165342d58831108a211bc5f9c2', 'afcfb12eeada126ca38d4bfad7ef78dd'],
            ['99cdcba29e66d86a02466b13c44478c2fc4b6ce9bf552ab4a655aed39dc08571', 'afcfb12eeada126ca38d4bfad7ef78dd', '986981f668d24a9b933d1a56d5690ddb', 'e36ab598f29c68c56f773f8d7dc295f5'],
            ['b1443133b2e64b63fbc19342396a360e1f21d9714dc94271c922915ee0021084', 'e36ab598f29c68c56f773f8d7dc295f5', '2889fa912c809309f987f851fd2e4ecc', '77752edc03c1de2cbbadbb5135a67388'],
            ['17060c4995c25b81b594122e48891d8e6854f7ad4e089c5d728f2a0fd5a4630c', '77752edc03c1de2cbbadbb5135a67388', 'a6423d7a272410e24e55816c71e32b80', '84410d0768e4a22d779fb25634be1b51'],
            ['1cc9a4877c41b978ced7cca345c4ed8aec15faaa26ec3e7005109859e11a785d', '84410d0768e4a22d779fb25634be1b51', '0bcfa8cee983e2f97b43de8d0d4df004', 'aa1ce18b59e0c763d2caf92dc08b0a9f'],
            ['17220b78911e46752cb523933309e7a546091b217f0cf913d7da6174219172c2', 'aa1ce18b59e0c763d2caf92dc08b0a9f', '0bebafffed5fff0de262ef3076cd0a2f', '37f4b8b30f50a0cb95d88ce83f5ddd80'],
            ['2f9a477094cd29685cc20a87b6e766f971fda392705c59d84202ed9c1eccaf42', '37f4b8b30f50a0cb95d88ce83f5ddd80', '38b84c0805d36f1d7077291485ee815c', '55e133b2126924b807b8c018b1c83212'],
            ['78928def70bbfe114105b9eaf12f2a88241c902062357d6045ba2d84af049d50', '55e133b2126924b807b8c018b1c83212', '5708ca9fe476d7791dc7b36d47c84c71', '4711ce2f8c2d7423b502deea08efc4cf'],
            ['478c0159cee9bd412c764d7ad81b4624630d5e0fee180943f0b8f36ea7eb599f', '4711ce2f8c2d7423b502deea08efc4cf', '3f1e8cb6be5243506d73f49029346cac', '2ca065a09f9629bacf814c9003ddd3d8'],
            ['553e516cfc57ef55e9eaad2fa339987e4fad3baf718e20f93f39bffea4368a47', '2ca065a09f9629bacf814c9003ddd3d8', '12b2503532be5214c59ce0557b22de5a', 'f82bf8662d9ec756cad6017b420c2093'],
            ['4f7f74b87e8193882dc6b587a62dd529b786c3c95c10e7aff5efbe85e63aaad4', 'f82bf8662d9ec756cad6017b420c2093', '1a4125d482d67cddc42c18a805144d57', '20162505a121e188d785af9f9c050e1f'],
            ['42a33c5df04347cb2e814218743c839f9790e6ccfd310627226a111a7a3fa4cb', '20162505a121e188d785af9f9c050e1f', '0ddc48e58ec2d4430347f79fd21156b6', '105dd575425d266effb62c95aa0e59ca'],
            ['d3fec890b31f119aee7d8be02f995e8887cd33b9bf6c2049dddc3d8fd031fd01', '105dd575425d266effb62c95aa0e59ca', '915df4cd435c5651c0fcc9f85ba5dd17', '221c546148669c1e05344142aeee2b36'],
            ['cbd897f1bff45cc7801502c66783933fa5d167d8f70abc57d8e87ccd7edfd637', '221c546148669c1e05344142aeee2b36', '18265f610ceb4d5d6e688926481acdb7', 'bfac53bfa3338fade5dadce1819c922d'],
            ['9fe76a60598690cc9cbd305a61622dcf1a7d3467543933fa3d32a02cff43441a', 'bfac53bfa3338fade5dadce1819c922d', '543ffd91e672cc0b1ca8329c06e1bef0', '569db0de478d1e375115909639ebdd46'],
            ['d5c69e574fb7617f9e68d49aacc6b5d24ce084b913b42dcd6c2730bac6a8995c', '569db0de478d1e375115909639ebdd46', '4a21f4371631f1b302d5e4c0cda4981d', 'fe770c83836cc818b389222b2840b625'],
            ['21e47bbef8f9639fb991249b32f2f858b297883a90d8e5d5dfae1291eee82f79', 'fe770c83836cc818b389222b2840b625', 'f422e5e9b74e02e027f9f0019e344d8a', '4cc788c08290b23c33b6981d73ff7d8d'],
            ['d3dfe17bebd4c83eb1e461bbbc9f8288fe5000fa124857e9ec188a8c9d1752f4', '4cc788c08290b23c33b6981d73ff7d8d', 'f23b9ac5132daba1087545208e6d7ad0', '023e474916dd7b6891a4ce7d5bb497fd'],
            ['a356dceae9b69855315dc5f4865fd2d9fc6e47b304952c817dbc44f1c6a3c509', '023e474916dd7b6891a4ce7d5bb497fd', '70893d910262506b80b9a44f3ac05051', '43c1759e60803b48e15270281d57a43e'],
            ['536cc2d7785f7ddbb34f92458db1d3c2bfaf322d641517c99cee34d9dbf46137', '43c1759e60803b48e15270281d57a43e', 'f03a1e3d91e9e58e821257b10bee011b', '047730f017def9ff51a1edef935cf233'],
            ['40eb2e8095e19c99353a82948b05e182bbd802dd73cbee36cd4fd93648a89304', '047730f017def9ff51a1edef935cf233', '1387ec57edbee142867510d106b43240', 'd5a7f3259b5b4b5720ab472591cab58a'],
            ['981b930514174c518380ff3b24b8492b6e7ff1f8e890a561ede49e13d962268e', 'd5a7f3259b5b4b5720ab472591cab58a', 'd8f0bd8581f6d0c8b6ba7dafafbda8a9', 'c658d532d65bcc81203d5618ffee8ff1'],
            ['a88320025c8fac9f1e42e495286514daa82724ca3ecb69e0cdd9c80b268ca97f', 'c658d532d65bcc81203d5618ffee8ff1', '3098b3074898e0ce9dc21bae0cdd5df1', 'f386e66c20cdd261ef9561387202c603'],
            ['6e24a8c8855a476717cf5b6954c5b4245ba1c2a61e06bb81224ca933548e6f7c', 'f386e66c20cdd261ef9561387202c603', 'c6a788cad9d5ebf8098dbffc7ca0a0fe', '5d9cc14947dc8548111aa3368af1c9b6'],
            ['9832505d99bc33bd35ff6660126d35eb063d03ef59da3ec933560a05de7fa6ca', '5d9cc14947dc8548111aa3368af1c9b6', 'f616f8951ce674da22303d0946a881cf', 'a5283f6ed912692eef359298efa6ba2d'],
            ['69bcabdfe3dd84d349dbb981c31f74b2a3153c8180c857e7dc63989d31d91ce7', 'a5283f6ed912692eef359298efa6ba2d', 'f18efb827a61b76e7c24dfe1d1724159', '043601dfe0e51bdc55cde0e9b52f7d2f'],
            ['acba63c3739dde022d566bf10fe6deeca7233d5e602d4c3b89ae787484f661c8', '043601dfe0e51bdc55cde0e9b52f7d2f', 'c506c81c90405ad1648dd270ccf9aa5e', 'bf8675551cc1cd51b799163d5f797700'],
            ['dd882c644c8171cbb111c134095fad6318a5480b7cec816a3e376e49db8f16c8', 'bf8675551cc1cd51b799163d5f797700', '71324fa73f1cafc99c47aac506b9738f', 'ba7de7c5bb68809c2e1af1af106761b0'],
            ['edecd510e4cd393f610e21ed8caed26ba2d8afcec78401f6102d9fe6cbe87778', 'ba7de7c5bb68809c2e1af1af106761b0', '3064f974a84c48f4d01fe0d985f17f08', 'e99502843d5259851eaa2d2107fc0620'],
            ['c994923fc210f0a909087947fe2489444b4dad4afad658730e87b2c7cc147158', 'e99502843d5259851eaa2d2107fc0620', '2478472f26ddc996680658aa728a5b2f', '6621fa591c75784a1fbc79b6c6cb839b'],
            ['6ededf36ca95fde60239af03fdadb5962d6c5713e6a32039113bcb710adff2c3', '6621fa591c75784a1fbc79b6c6cb839b', 'a74a4d0908850d4f0b31d64403893cd2', '40ebd24997532704d84e3d10ac92ed6c'],
            ['0e72a927f58557f1decad5bfee9747356d87855a71f0073dc975f661a64d1faf', '40ebd24997532704d84e3d10ac92ed6c', '60ac76113f10aa17dcf37abc133af2a3', '3ef6eef1d108c846fca0ad199c27f031'],
            ['3d5ad1a3a9a030cf15cbf99674e08bf953716baba0f8cf7b35d55b783a6aef9e', '3ef6eef1d108c846fca0ad199c27f031', '332878845c25673ecb012c299a77cccc', '5f9df5480216c15e7aa6d6c08186fc91'],
            ['b50de67425fbcd68a97baa294698e24c0cec9ee3a2ee0e254f738db8bbec130f', '5f9df5480216c15e7aa6d6c08186fc91', '885737d78c5bfda7bcb053bf327869b5', '5dfb37d6da6f19e9f4249bcd75901118'],
            ['8f28ff0717cd46be678ef96d6ef69dff5117a935788117ccbb571675ce7c0217', '5dfb37d6da6f19e9f4249bcd75901118', '3a25197332368bd6cef55344286e7fb3', '90442fcde09e3f132399d7391bc472d9'],
            ['640d00e25892d3032450c7cc4685ab06c15386f8981f28df98cec14cd5b870ce', '90442fcde09e3f132399d7391bc472d9', 'eb25ffe54f5f95bd43de3ea1287336f9', 'b84a6f17c764c753ea0965eb7b2c499d'],
            ['5df2c12710d5d4f4083fa967acfb485b7919e9ef5f7bef8c72c7a4a7ae943953', 'b84a6f17c764c753ea0965eb7b2c499d', '39ffc1c5484707f72c6f6eabea7ee35d', 'e770ac4f603909c991d7ba15b783fb72'],
            ['232f85b5a04d67ba9e09aef7b4d31f5b9e6945a03f42e645e3101eb21917c221', 'e770ac4f603909c991d7ba15b783fb72', '7edd4492b098b34e9636079018285700', 'd2a61b48278b665f068610fa39cb3737'],
            ['ece966e5344d14ad7d1d378034a9a5ee4ccf5ee818c9801ae5960e4820dcf516', 'd2a61b48278b665f068610fa39cb3737', 'cfc6e35094007317e3149977807abab5', 'ea5eececc900dbe0528665a2763eb7c5'],
            ['62c16d23afa21cec2fd019763a2b496ca691b204d1c95bfab7106bea56e242d3', 'ea5eececc900dbe0528665a2763eb7c5', '8e280bc69bef084152cd2ef60e82ec82', '1de429de72598fcf51caa4e097e36d79'],
            ['f02c64786a1db0a463b42edfe5969a0cbb759bdaa390d435e6dacf0ac1012faa', '1de429de72598fcf51caa4e097e36d79', '92ed095bc5bfac484c6437a9dfbdd360', 'eed6b39d3a6e99fbdc5fd697629700e1'],
            ['22b153d6f990ac637c8670a0cbd5e38d55a3284799fe4dce3a85199da3962f4b', 'eed6b39d3a6e99fbdc5fd697629700e1', 'd29d37ae938d1cc71f325e7f2e437981', 'ffa4cfccc6b414edb7a49d02010a20be'],
            ['dcbe81da1ca9fddf989f1afe393529dfaa07e78b5f4a59238d21849fa29c0ff5', 'ffa4cfccc6b414edb7a49d02010a20be', 'fe0fd20ce53951bce4196a5ef2e0ca52', '30a4c7693e57659d1334605ea4e2ebf9'],
            ['6ad44144f2a7d3a4637f84b5447764159aa320e2611d3cbe9e15e4c1067ee40c', '30a4c7693e57659d1334605ea4e2ebf9', 'b66ac09eee0e2e7bfbe09e4b7d424dca', '25ab61f243253efd0f785014d1bd42ae'],
            ['8c17bb34aa6e796cf8bdc9bf73fc1116bf08411022380243916db4d5d7c3a6a2', '25ab61f243253efd0f785014d1bd42ae', 'e6c3fa7058c9aac89bc24d0a378b7503', 'f4d8f45a5864b9a1ba896a825eb98aea'],
            ['6b22b1ce53fcf0540769356fa35846c74bd0b54a7a5cbbe22be4de57897a2c48', 'f4d8f45a5864b9a1ba896a825eb98aea', 'e7350afaf9928938ffd4fcd0d0a457d1', '66c074c28bae94b4a96c7ad2c005916d'],
            ['923b511a17ce0dc7e44b6f3c2bacd22b2d10c188f1f22f568288a485497fbd25', '66c074c28bae94b4a96c7ad2c005916d', 'f919e0d44432fd93e3225a5388f494ec', '98ddc25e1569f435699976eada425441'],
            ['81798bae906ab1d1d5ec7bbbd9ee82fdb5cd03d6e49bdb63eb11d26f933de964', '98ddc25e1569f435699976eada425441', '1342dab487a4bc1631a71487f24250d6', 'e22fbdc279e7302cacc3dcfd055814ea'],
            ['bd1382f271985afb19bee9c9209b723757e2be149d7ceb4f47d20e929665fd8e', 'e22fbdc279e7302cacc3dcfd055814ea', '3c6a095ce1f2eb2acc529272f975f0ca', '9643a4ab393d9413c5a7d493f42283c2'],
            ['a085bc134595ca1f856945538c93b8e8c1a11abfa4417f5c8275da0162477e4c', '9643a4ab393d9413c5a7d493f42283c2', '1d963ee1340d90e49cd7ac9aac08cadf', '95cd5498644c75720ae3eea0fba2490d'],
            ['3ea3a8c4c604d232f4ba372858d2ef90546c4e27c00d0a2e889634a199e53741', '95cd5498644c75720ae3eea0fba2490d', '9e2614d78391182d71d3727bd4415778', 'd0eb33f2600e36ab571695cd19348590'],
            ['5d6426fd9db248375fb4c23cc74da74384877dd5a0033c85df80a16c80d1b2d1', 'd0eb33f2600e36ab571695cd19348590', '63c78e395bb69a05ab0ef5149f9f48d3', 'd6958b2247b8e96279a3963f941b8a33'],
            ['d60224bc93452b7978cc098421c132415212f6f7e7bbd5e7a623375314ca38e2', 'd6958b2247b8e96279a3963f941b8a33', '8b6602410ef7634e2778cbb8e68c9502', 'f333f61c340609a60b5faf8d56d77e7d'],
            ['881afd3750ca44ae4c4b357cf2e6e9bda12100ebd3bddc41ad7c98de421d469f', 'f333f61c340609a60b5faf8d56d77e7d', '5e18d98bc38f6fd734873cf8d327dbfc', '70141e6d36a557a0481eeed46f805b8c'],
            ['a392fe3484db8b329d4a4650a39493b4d1351e86e5188be1e562760a2d9d1d13', '70141e6d36a557a0481eeed46f805b8c', '2b880303d411cf9cd101732c51727a09', 'd1176a1bd01c2fa7e41d3a5b766c97ab'],
            ['1e4943165444212879885933a822c1440022749d3504a446017f4c515bf18ab8', 'd1176a1bd01c2fa7e41d3a5b766c97ab', 'bddbbd22d09faa1ae4c21f630bb652f0', 'e6ee400619a0f67d96494c50c0d2bb3e'],
            ['c433b6b0abe133f168c86906d88e79aae6cc349b2ca4523b973600019b233186', 'e6ee400619a0f67d96494c50c0d2bb3e', 'da7af5a6ffa512d91140303570acb8ee', 'b110753ef8ecd40b47663d22027d4d9e'],
            ['abb5c998704886b32168897c9cf7773457dc41a5d4488630d0503d23995e7c18', 'b110753ef8ecd40b47663d22027d4d9e', '6f867f28dba9b54249a0e07a44790e9e', '7cf8f475e0a0d2114285b29ad953341e'],
            ['db17bfb88e76f7a924a53b14f0acee1f2b24b5d034e8542192d58fb9400d4806', '7cf8f475e0a0d2114285b29ad953341e', '70a27620fe3e711a05cdb2686c5b992b', 'a27d8df655531ee4982d24e0b06820c6'],
            ['325a6c944a769c2144f7d3c69233c21a8959382661bb4ac50af8ab59f06568c0', 'a27d8df655531ee4982d24e0b06820c6', 'e94dd32cc4006b886052e8d2629f2c05', 'a3a48efcdde431fa24222998722e5ee1'],
            ['0653c3ed6710b9b40e0b8bbcfc3cf8c32afdb6dabc5f7b3f2eda82c1824b3621', 'a3a48efcdde431fa24222998722e5ee1', '3409af792d6625954afc587a6e0f3ad9', 'acaccdaa0b12f8f19cd0c01a50c3752a'],
            ['0be18dc37d0ed2e3f301d3f2a0a6e00286517b70b74d83ceb20a42dbd288430b', 'acaccdaa0b12f8f19cd0c01a50c3752a', '0db24e2e1a1e6b57fd0a584e5c9a18c1', '914fc6648f733138f7f0ff3541935131'],
            ['6903cd0acf5f639d4dfb9ed815df52c3171ebd14383eb2f645fabdee931b123a', '914fc6648f733138f7f0ff3541935131', '62e240c9b251b17ebefa4d2ab579b2c1', '0f073e1eb1a1191dd21873b96b1fb936'],
            ['700012908142118cf3f04ad2b62fb6cd1819830a899fabeb97e2ce57f804ab0c', '0f073e1eb1a1191dd21873b96b1fb936', '1903df9a4e1d7211be0bd40aa3f0e40e', '9582dd9ed173b8a2a5b3621465d2da99'],
            ['91d979a2178964bd02cbd425d76809ba8d9b5e9458ec13493251ac439dd67195', '9582dd9ed173b8a2a5b3621465d2da99', 'e1d96b3296cb7531f13b9ef76147bf77', 'dbe8c6160093a5d5f747f6d8f5835c54'],
            ['28e48270719d38fdae49cd4fc41f7bc456739882587fb69cc5165a9b68552dc1', 'dbe8c6160093a5d5f747f6d8f5835c54', 'b93dfbd266145c40ac82196a1377727e', 'ab2a8ecb7c48c64946bf8dbf634f3802'],
            ['99996ceb5b983fcafb3ec83bd95c3cfffd591649243770d583a9d7240b1a15c3', 'ab2a8ecb7c48c64946bf8dbf634f3802', 'b17dee9b2a050737557705741d43473b', '2bffa8216ea34df691222aa2e3ae0374'],
            ['86fa17e1fcb0322522f6294100292bbbd6a6be684a943d23128bfd86e8b416b7', '2bffa8216ea34df691222aa2e3ae0374', '1f637b0aa7280defd9c8e17ad9751744', '49386ea6b30eb85c5602ae709a39fe1d'],
            ['40e42c939a5685d94a7cd8690a5732029f9ed0cef99a857f448953f6728de8aa', '49386ea6b30eb85c5602ae709a39fe1d', 'c61e3b7266e6b7fc688af1280a7e19b9', '68257a47421c844995f2b59375c0f506'],
            ['d9e9cde2ee2b9b21f53b16d9cce8057cf7bbaa89bb860136d17be665074d1dac', '68257a47421c844995f2b59375c0f506', '990de171747d1ef8bf47ceb0c6bf377e', '7c2f419b193ceeba0bce427f04cae17d'],
            ['1a77ba5111c530679e0594dc4ebee4b18b94eb12a2baef8cdab5a41a0387fcd1', '7c2f419b193ceeba0bce427f04cae17d', 'c39e77b3ffeeab466b3e82058256e1cd', 'c2946a303e108ea3ba41526578fb219d'],
            ['a7ba696ed84dc109a643b288284bb2d1490081229caa612f60f4f67f7b7cdd4c', 'c2946a303e108ea3ba41526578fb219d', 'bdcdd33fc988f16e3846265466f55660', '1372751d12fc8d9c0a67c972f3410e56'],
            ['e949402310a293b5c69c814ab01dfd345a72f43f8e56ecb36a933f0d883dd31a', '1372751d12fc8d9c0a67c972f3410e56', '4ef3294dc8ef52bc60df33c298564fe5', '7658a1720f96c3ce2ca0e41a89e58b4a'],
            ['15bce65547fa6e34be535feeb502c8112c2a554d81c02f7d4633db1701d85850', '7658a1720f96c3ce2ca0e41a89e58b4a', 'fcf5a6765758fd8178cfdea4051f3525', '2bbbe334248f69a84368fe98a4092204'],
            ['3dae9f06d7a8272107a1ce091a4e8afc0791b679a54f46d5055b258fa5d17a54', '2bbbe334248f69a84368fe98a4092204', '2812795390524915b9f291e7af4c42ed', '1f95c47e4866c5b653f60a70d48a62f2'],
            ['525eb0472b5a9e5c8274dbf16ae4066618047207ed29836356ad2fff715b18a6', '1f95c47e4866c5b653f60a70d48a62f2', '6ff02f41fcf2b97d85d515f870aa8c9a', '447f6b6ff37cbb986c22d80e8b12d471'],
            ['01eb5a3477b85436280a114e86c7366c5c7b19681e5538fb3a8ff7f1fa49ccd7', '447f6b6ff37cbb986c22d80e8b12d471', '53b5ea735ce2ca6aaa7ecabfec23300a', '282158a64ce50984e63f9a261946649b'],
            ['937849621fe88748e33a1261b0f9c950745a41ce52b0317fdcb06dd7e30fa84c', '282158a64ce50984e63f9a261946649b', '929313566850d37ecb30032f363eff3c', '0b8b704143be5c9ca6f1af5dd34a837f'],
            ['1a08baf3f0d68b845b55f8e895b49c0f7fd1318f110e6de37a41c28a30452b33', '0b8b704143be5c9ca6f1af5dd34a837f', '8970f391ef3e0cccb86fea89254d555f', '7ff5601ba20ce2cc21249b135c721876'],
            ['c0c3e6f711f663c562e15946650795fc00245194b3028f2f5b6559996c373345', '7ff5601ba20ce2cc21249b135c721876', 'dacb5c04e120e84139b4a1aef0b309f3', '8ba1dd29c3cdfb14420c3cd70afe8fe1'],
            ['0c1a73f40078b0d21a706e12037ff7ef8b858cbd70cf743b1969654e66c9bca4', '8ba1dd29c3cdfb14420c3cd70afe8fe1', 'ccd99503118ed3177891375466786213', 'db583b2b4f0aa2bf84475e37dd37a5d7'],
            ['503a2b80e7075a20add4aa0d5167958f50ddb7963fc5d6849d2e3b79bbfe1973', 'db583b2b4f0aa2bf84475e37dd37a5d7', '5c205874e77feaf2b7a4c41f52186260', 'e50e752fd5ac7875f7294749ffc67db4'],
            ['121bd8109c3c290d394331ef14150b39b5d3c2b9ea69aef16a077c30443864c7', 'e50e752fd5ac7875f7294749ffc67db4', '4221f3907b3b732d94979be245729eb6', '75511ec1d1d34894ec10bd0a0e2f1545'],
            ['4847e79c6eb7793db0e193f9bbb5b5abc082dc783bbae6658617c13a4a177182', '75511ec1d1d34894ec10bd0a0e2f1545', '5a5c3f8cf28b503089a2a216afa0be92', '380da9cf158aa01b431174e992e87a3d'],
            ['7f68cb29c31a5abc1dc25feef42f5dd7f88f75b72e30467ec506b5d3d8ff0bbf', '380da9cf158aa01b431174e992e87a3d', '372f2cb5adad2381ad23cc174f9ae87c', 'cde768d354831a88cf81370bd2520db3'],
            ['3bd7d316729adccc3a02afdd8195345a35681d647ab35cf60a8782d80aad060c', 'cde768d354831a88cf81370bd2520db3', '44bf183fb180867027c0f03375ba698d', 'b4de1536b1119257d46e3ddb7ef3b7b2'],
            ['9272bf2be91f6c13af98a8836d99927881b60852cba2cea1dee9bf03745eb1be', 'b4de1536b1119257d46e3ddb7ef3b7b2', 'a9a56c3d9b85b0df959a075eec0ca622', '53e739d12fa16b14497ad4e6aedb1a3e'],
            ['bc97838e71610a30fa6af137a2a2b0b4d2513183e403a5b597936be5da85ab80', '53e739d12fa16b14497ad4e6aedb1a3e', '2ee53ca5987e662355f259b4cf3b22cc', 'e5ba98c06d27c21b453ff81ab4a13e06'],
            ['3eec8aeb21ebcb81dc38e2a4d4c1f01437eba943892467aed2ac93ff6e249586', 'e5ba98c06d27c21b453ff81ab4a13e06', '827b0965508ac1b126521393766340a0', 'da036f17a36004e3044013cf870ec36f'],
            ['37f06572362517909ce530f4ba6e2c65ede8c6542a44634dd6ec8030e92a56e9', 'da036f17a36004e3044013cf870ec36f', '091cef9917cedc1140ddd2506eafdc71', 'b6872542ede9efb9ee5948613057b202'],
            ['c5afa957dee0ffc781ea629f93337e705b6fe316c7ad8cf438b5c851d97de4eb', 'b6872542ede9efb9ee5948613057b202', 'f25fcc25e8c5e8571d0f526b295d5215', '424d7ed5792b6eba45a9ca14a0ffc0bd'],
            ['04682ec93d9cb1fde781d9871f7fee2819229dc3be86e24e7d1c024579822456', '424d7ed5792b6eba45a9ca14a0ffc0bd', 'c1c7879ee37c4e3a666bbb188c4c9058', '32d481421537d1d3f68cb5170ee04335'],
            ['9c8c57e9635bb73dacf65a6f94527bb82bf61c81abb1339d8b90b75277626763', '32d481421537d1d3f68cb5170ee04335', '98e479205ec706c04b7783e88b2d9590', 'e34496f9ebc0824da7cb3aab1eca4f26'],
            ['a16562f48cfb322bbf3882c36f2204e0c8b28a784071b1d02c5b8df969a82845', 'e34496f9ebc0824da7cb3aab1eca4f26', '3de9351defa0851613ced8acfb707f58', 'cc5796aa9d7aaf4a57e853fab9c5cbf6'],
            ['539a03bfe74b96bb43e0304b30dceedb04e51cd2dd0b1e9a7bb3de03d06de3b3', 'cc5796aa9d7aaf4a57e853fab9c5cbf6', 'f2ff614b6bb0a490fcd8b2885ffeea3b', 'ffee70dbce751b456d79ad7430209144'],
            ['254d78c28cbcd0e752aae77178829d76fb0b6c09137e05df16ca7377e04d72f7', 'ffee70dbce751b456d79ad7430209144', '76d77b7d6bf7465c114ad73a485e73ad', 'ab699ed2bda51e4ed7010782e88ecf49'],
            ['0cfa341be5896bceac6752cc93556ecc5062f2dbaedb1b91c1cb74f508c3bdbe', 'ab699ed2bda51e4ed7010782e88ecf49', '29b74cd96935bb29fecdb5bdebd7f3ba', '74b929690ab73b5744d9f95c1e4768fc'],
            ['2e9e709afb9f97bbb69d4ef92bfbc66224dbdbb2a46c20c685128da91684d542', '74b929690ab73b5744d9f95c1e4768fc', '226444811e16fc751afa1c35b8aea8ae', '62b37d9ef968c025853ec23c9a23ec2a'],
            ['6365d051a798ee998a632828f05d622f4668a62c5d04e0e3002c4f958ca73968', '62b37d9ef968c025853ec23c9a23ec2a', '4dfba0cb5c0779223cfe66d1dba6a44d', 'c52172ae9cf82cd4d9cce16b62dbb1af']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cfb = new CFB;
        $ctx = $cfb->initEncryption($key, hex2bin($iv));
        $lastCiphertext = hex2bin($plaintext);

        // http://csrc.nist.gov/groups/STM/cavp/documents/aes/AESAVS.pdf 6.4.2 --- OK...

        $nextPlaintext = $cfb->streamEncrypt($ctx, $lastCiphertext);
        $lastCiphertext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisCiphertext = $cfb->streamEncrypt($ctx, $lastCiphertext);
            $lastCiphertext = $nextPlaintext;
            $nextPlaintext = $thisCiphertext;
        }

        $this->assertSame(hex2bin($ciphertext), $nextPlaintext);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $iv, $ciphertext, $plaintext)
    {
        $key = new Key(hex2bin($key));
        $cfb = new CFB;
        $ctx = $cfb->initDecryption($key, hex2bin($iv));
        $lastPlaintext = hex2bin($ciphertext);

        $nextCiphertext = $cfb->streamDecrypt($ctx, $lastPlaintext);
        $lastPlaintext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisPlaintext = $cfb->streamDecrypt($ctx, $lastPlaintext);
            $lastPlaintext = $nextCiphertext;
            $nextCiphertext = $thisPlaintext;
        }

        $this->assertSame(hex2bin($plaintext), $nextCiphertext);
    }
}
