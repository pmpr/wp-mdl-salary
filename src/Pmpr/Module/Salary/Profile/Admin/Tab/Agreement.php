<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3f00c122             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Agreement as DBModel; class Agreement extends Tab { public function __construct() { $this->id = "\141\147\162\x65\145\155\145\156\164"; $this->title = __("\101\147\x72\145\145\155\x65\156\x74", PR__MDL__SALARY); $this->priority = 0; parent::__construct(); } public function gayqqwwuycceosii() : array { $mkucggyaiaukqoce = ManipulateUser::get(); $oammesyieqmwuwyi = []; $meqocwsecsywiiqs = ''; if (!$mkucggyaiaukqoce) { goto giaacoqqqsekcayy; } $meywaqqsugaoeyys = DBModel::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (!$xssuewsokckmigqk) { goto syiqkaasoueowwui; } $oammesyieqmwuwyi[] = [self::ciyoccqkiamemcmm => ManipulateHTML::ciuuiyckmsygceis(ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)), self::uissasisiuymwsmu => __("\116\141\155\x65", PR__MDL__SALARY)]; $meqocwsecsywiiqs = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::qescuiwgsyuikume); $qgciuiagkkguykgs = $meywaqqsugaoeyys->ogegcqqcukiaqscy($meywaqqsugaoeyys::kkeogqiyysoyuemk, $xssuewsokckmigqk); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::siwsmgcqgcqmaeui); if (!$eqgoocgaqwqcimie) { goto usquiuuyiyqaeyiu; } if ($qgciuiagkkguykgs === $meywaqqsugaoeyys::aqkaquswquuyqkum) { goto hoeeyiowekaeemko; } $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); goto kymkucucyeoeikim; hoeeyiowekaeemko: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); kymkucucyeoeikim: $iakkeikwceeomgyq = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::igecewwoemccgwsq); $oammesyieqmwuwyi[] = [self::ciyoccqkiamemcmm => $iakkeikwceeomgyq, self::uissasisiuymwsmu => __("\x49\156\x63\x6f\155\x69\x6e\x67\40\x54\171\160\x65", PR__MDL__SALARY)]; usquiuuyiyqaeyiu: $aiogmaekiyogsyec = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::weumemyqgykuwqok); $uucueigysoecmekm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::yykcmqogieykgkus); $iagkegakogkmqcsm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::acyoqckgwoqymkwo); $wikmsuswiigscwgg = $meywaqqsugaoeyys->ogegcqqcukiaqscy($meywaqqsugaoeyys::seeqqyqyyaiqcowg, $xssuewsokckmigqk); if ($wikmsuswiigscwgg === $meywaqqsugaoeyys::aucwwygcuwkokics) { goto gaomwagkcciesyqy; } $wamcomkuwysqgwgk = __("\x25\x73\x20\156\x75\x6d\142\x65\162\x20\157\x72\x64\145\162", PR__MDL__SALARY); if (!$aiogmaekiyogsyec) { goto uqqaiagaeqgqgaiy; } $aiogmaekiyogsyec = $this->msywmyaoqmaegsuy($aiogmaekiyogsyec); uqqaiagaeqgqgaiy: if (!$uucueigysoecmekm) { goto esuiysskoweawsue; } $uucueigysoecmekm = $this->msywmyaoqmaegsuy($uucueigysoecmekm); esuiysskoweawsue: goto aegysmeecgcgayyw; gaomwagkcciesyqy: $wamcomkuwysqgwgk = __("\45\163\x20\x73\141\154\x65", PR__MDL__SALARY); if (!$aiogmaekiyogsyec) { goto qicwaskssogcokgm; } $aiogmaekiyogsyec = ManipulateWoocommerce::mcgaskyiamgqmqgu($aiogmaekiyogsyec); qicwaskssogcokgm: if (!$uucueigysoecmekm) { goto uguigkcmukuouway; } $uucueigysoecmekm = ManipulateWoocommerce::mcgaskyiamgqmqgu($uucueigysoecmekm); uguigkcmukuouway: aegysmeecgcgayyw: if ($aiogmaekiyogsyec) { goto wiysogeqqwgioyka; } $aiogmaekiyogsyec = __("\x46\162\157\x6d\40\146\x69\x72\x73\164\x20\x6f\x72\x64\x65\x72", PR__MDL__SALARY); goto skkamseieeusycye; wiysogeqqwgioyka: if ($iagkegakogkmqcsm) { goto suqkuqygkkgwyaie; } $iagkegakogkmqcsm = __("\x45\x61\162\156\x65\x64\40\x72\145\166\145\156\165\x65\x20\151\x73\x20\x6e\x6f\164\x20\x72\x65\143\x65\151\x76\x61\142\154\145\40\x62\145\x66\x6f\x72\x65\40\x69\x74\x20\x72\145\x61\143\x68\145\163\40\164\150\x65\x20\x73\x61\x6c\x65\163\x20\146\154\157\x6f\162", PR__MDL__SALARY); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $iagkegakogkmqcsm = __("\105\x61\162\156\145\144\x20\x72\x65\x76\145\x6e\165\145\x20\x69\x73\40\162\x65\x63\x65\151\166\141\x62\x6c\x65\40\x62\145\146\157\162\x65\40\151\x74\40\x72\145\x61\x63\150\145\163\x20\x74\150\x65\40\x73\x61\154\145\163\x20\146\154\x6f\157\x72", PR__MDL__SALARY); soaccwqimeksgwiw: $oammesyieqmwuwyi[] = ["\166\141\x6c\165\145" => $iagkegakogkmqcsm, "\154\x61\x62\x65\x6c" => __("\x52\145\x63\157\162\144\x20\120\162\x65\x76\x69\x6f\165\x73\40\x49\x6e\x63\x6f\155\145\x73", PR__MDL__SALARY)]; $aiogmaekiyogsyec = sprintf(__("\141\x66\164\145\162\40\x25\x73", PR__MDL__SALARY), sprintf($wamcomkuwysqgwgk, ManipulateHTML::ciuuiyckmsygceis($aiogmaekiyogsyec))); skkamseieeusycye: $oammesyieqmwuwyi[] = ["\166\x61\x6c\165\x65" => $aiogmaekiyogsyec, "\154\141\142\145\154" => __("\123\x74\x61\162\x74\x20\157\146\x20\122\145\x63\157\162\144\40\x49\156\x63\157\155\x65\x73", PR__MDL__SALARY)]; if (!$uucueigysoecmekm) { goto cgiscsqwwgqqaeqi; } $oammesyieqmwuwyi[] = ["\x76\x61\154\x75\145" => sprintf(__("\141\146\x74\x65\x72\40\45\x73", PR__MDL__SALARY), sprintf($wamcomkuwysqgwgk, ManipulateHTML::ciuuiyckmsygceis($uucueigysoecmekm))), "\154\x61\x62\145\154" => __("\x45\156\144\x20\x6f\x66\x20\x52\x65\x63\157\162\x64\40\111\156\143\157\x6d\145\x73", PR__MDL__SALARY)]; cgiscsqwwgqqaeqi: syiqkaasoueowwui: giaacoqqqsekcayy: return ["\x65\144\x69\164\x5f\x62\x61\x6e\x6b\137\141\143\143\x6f\x75\156\x74\163\x5f\x74\151\x74\x6c\x65" => __("\105\x64\x69\x74\x20\x42\x61\156\x6b\x20\111\x6e\x66\157\162\155\x61\164\151\157\156", PR__MDL__SALARY), "\145\144\x69\x74\x5f\142\x61\156\153\x5f\x61\x63\x63\157\x75\156\x74\x73\x5f\x75\x72\x6c" => DecoratorQuery::yqymaqmqiqmmmsoo("\164\141\142", "\x74\141\x62\x5f\151\156\x63\x6f\155\x65\163\x5f\x61\156\x64\137\x70\x61\171\155\x65\x6e\164\x73", ManipulateUser::ekqiayaoseqcygmo($mkucggyaiaukqoce)), "\156\157\x74\137\x66\x6f\x75\x6e\x64\137\155\x65\x73\163\141\x67\x65" => __("\131\x6f\x75\x20\144\x6f\156\x27\164\40\x68\x61\x76\x65\40\141\x6e\x79\x20\141\147\162\145\145\x6d\145\x6e\164\56", PR__MDL__SALARY), "\x69\x74\145\x6d\163" => $oammesyieqmwuwyi, "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs]; } }
