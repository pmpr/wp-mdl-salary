<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3f00c122             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\x61\147\162\x65\145\x6d\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\x74\55\160\x75\142\x6c\151\x63\163", [self::wwgusigoaksqmwsm => [$this, "\145\141\x69\x79\153\x6f\155\x65\x6d\155\151\x69\167\x6d\153\151"]]); $this->register("\x2f\x67\x65\x74\x2d\141\x67\162\145\x65\155\x65\x6e\x74", [self::wwgusigoaksqmwsm => [$this, "\171\x79\x63\x69\x6d\143\141\153\x75\151\171\x6d\x73\x61\157\161"]]); $this->register("\x2f\x67\x65\x74\x2d\x70\162\x6f\144\165\x63\x74\163", [self::wwgusigoaksqmwsm => [$this, "\x61\x67\x65\161\x73\167\x77\153\153\161\171\x77\x63\153\143\x6f"]]); $this->register("\x2f\147\x65\x74\x2d\x63\141\x74\145\147\x6f\162\151\x65\163", [self::wwgusigoaksqmwsm => [$this, "\155\x65\x73\x61\x6b\153\171\143\x6f\x6d\171\165\x75\167\x77\155"]]); $this->register("\57\x67\x65\x74\55\141\x70\x70\x6c\x79\x2d\x72\145\161\165\x69\162\145\163", [self::wwgusigoaksqmwsm => [$this, "\x6f\x63\x75\x65\x67\167\163\x75\161\167\153\x71\x6d\157\151\151"]]); $this->register("\57\163\x75\x62\x6d\x69\x74\x2d\141\x70\160\x6c\x79", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\171\147\167\x63\x77\x63\165\x61\145\167\151\165\x69\153\x63"]]); $this->register("\x2f\147\145\164\x2d\154\x69\163\164\55\x62\171\55\165\163\x65\162", [self::wwgusigoaksqmwsm => [$this, "\167\143\143\x6b\x61\x6b\x6f\x77\145\167\151\143\x73\163\x71\x67"]]); $this->register("\x2f\147\x65\x74\x2d\x69\x6e\143\157\155\145\163", [self::wwgusigoaksqmwsm => [$this, "\165\x79\x65\143\x63\x6f\171\x61\163\163\x67\157\145\167\151\x77"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto iiiccouaaqsyikae; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($jwsqucqyaoaasykk && $kueeocmceokoouqa) { goto kqswcsysqawkcgye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\164\150\151\x6e\x67\x20\x77\x72\157\156\147\54\40\x70\154\145\x61\163\145\40\x63\x6f\156\164\141\143\x74\x20\165\163", PR__MDL__SALARY), 500); goto wusciwkkckmqigms; kqswcsysqawkcgye: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $mqamowqmoasqycgc = ManipulateUser::yksywgmucwascgwk($mkucggyaiaukqoce, true); $ggiwyickioisqkss = []; foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { $ggiwyickioisqkss[] = [self::ciyoccqkiamemcmm => $oeucsuyqysaciasy, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::meisqwykgaymauka => $jwsqucqyaoaasykk::aociysagacimyqgu, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; uaqackioaiqwcocy: } mkwkkmkgiqiamacc: $siykeiywomwwuoiw = $jwsqucqyaoaasykk->kqewyqqqiyiouaou([[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::mmisekagkomcsowm => [self::ciyoccqkiamemcmm => $ycoeoaakqyskgykq, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $ggiwyickioisqkss]]], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss], self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::mmisekagkomcsowm => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::aociysagacimyqgu => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg]]], $jwsqucqyaoaasykk::cmiegiycgiucucgs => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq]], [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss]]]); $yoskgaaocqaweqyw = self::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\145\x71\x75\x65\x73\x74\137\163\164\x61\164\165\x73"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::CREATED_AT, $yoskgaaocqaweqyw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto ewscugeuicukkycc; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = ManipulateArray::get($igqsaukqcqscimok, self::ciywsqoeiymemsys); $wciwsoomyoeueocu = ManipulateArray::get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== $jwsqucqyaoaasykk::miswkosqicsksgok) { goto cgyakcqgugqgkqiw; } if (!$wciwsoomyoeueocu) { goto mggeqkcksyaymcsa; } $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); goto uegouoiuyoqkcscg; mggeqkcksyaymcsa: $wciwsoomyoeueocu = self::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\145\161\x75\145\x73\164\141\142\x6c\x65", PR__MDL__SALARY); uegouoiuyoqkcscg: goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $wciwsoomyoeueocu = self::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\x6e\162\145\x71\x75\145\x73\164\141\x62\154\145", PR__MDL__SALARY); eeyyskqsmquyquqw: $muocgugcqiewywag = [self::kumuoysauoagaiiy => $kueeocmceokoouqa->ooeucgsymeocguuu($yoskgaaocqaweqyw, ManipulateArray::get($igqsaukqcqscimok, $yoskgaaocqaweqyw), $igqsaukqcqscimok), self::ciywsqoeiymemsys => $wciwsoomyoeueocu, self::ciywsqoeiymemsys . self::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateArray::set($igqsaukqcqscimok, $muocgugcqiewywag); isgwkwacoyimiauk: } cscusseysqygsoiy: ewscugeuicukkycc: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $keccaugmemegoimu = $mkucggyaiaukqoce; ukkcmocamwgiqayu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto uimeeckqksqeekqq; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($jwsqucqyaoaasykk) { goto ucqmumuygcywwqma; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\155\x65\x74\150\151\156\147\x20\x77\x72\x6f\156\x67\54\40\160\x6c\145\x61\x73\145\40\x63\157\x6e\x74\141\x63\x74\x20\165\163", PR__MDL__SALARY), 500); goto uykousayyomcaeaa; ucqmumuygcywwqma: if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { goto gommacygsykyussk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\162\x20\162\145\x71\165\x65\x73\164\145\x64\x20\x61\x67\x72\145\x65\155\x65\x6e\164\40\x6e\157\x74\x20\146\x6f\x75\156\x64", PR__MDL__SALARY), 404); goto ukqocwewouckikso; gommacygsykyussk: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto uougwgeyiokewkkm; } $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq) { goto gygwewcqsmwqismo; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; gygwewcqsmwqismo: uougwgeyiokewkkm: amgsueumgaguceaa: } mwysseaekcsiesmm: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; ukqocwewouckikso: uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $keccaugmemegoimu = $mkucggyaiaukqoce; iuuuususuuuaieem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ieqesiiageaauiuw; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto sioekkmekwygemyc; } if ($keccaugmemegoimu) { goto qukocuwgakemmyga; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x67\162\145\x65\155\145\156\164\40\x69\163\x20\x72\x65\x71\165\x69\162\x65", PR__MDL__SALARY), 404); qukocuwgakemmyga: goto yiowgigkkwsoqcci; sioekkmekwygemyc: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto kocqqoyymosmuksu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\x65\164\x68\151\x6e\x67\x20\x77\x72\157\x6e\x67\54\40\160\154\x65\141\x73\x65\40\143\157\x6e\164\x61\x63\164\40\x75\163", PR__MDL__SALARY), 500); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\167\157\x65\171\153\167\167\x69\147\157\x65\141\157\161"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\x61\x67\x72\x65\145\155\x65\156\164" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); uqokiksoqcwwqgio: yiowgigkkwsoqcci: goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $keccaugmemegoimu = $mkucggyaiaukqoce; gamqcwuwkikwqoay: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto wkwamkgkwykeqkec; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto wsesqmcqoiyyqkqi; } if ($keccaugmemegoimu) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\147\162\145\145\x6d\145\x6e\164\40\x69\x73\x20\162\x65\161\165\x69\162\145", PR__MDL__SALARY), 400); iesekaeqeomeuaui: goto mogkoocsoeuyoqqa; wsesqmcqoiyyqkqi: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto mscyggqcesgqqksu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x74\150\151\156\x67\x20\x77\162\x6f\156\147\x2c\x20\160\154\x65\141\x73\145\x20\x63\157\156\x74\x61\143\x74\x20\165\163", PR__MDL__SALARY), 500); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\167\147\x63\147\x61\x79\171\x6f\161\x69\x6b\x6d\x6d\x71\157"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\x61\147\162\145\x65\155\x65\156\x74" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); oyeyomcgkmgymogq: mogkoocsoeuyoqqa: goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $keccaugmemegoimu = $mkucggyaiaukqoce; oimkeqocuguqqsqk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto esaqcqqwuussiiwo; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\141\160\160\x6c\x69\x61\142\154\x65"]) { goto okkmcocqokkskasy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\x72\x20\x76\145\162\x69\146\151\141\142\154\x65\40\x66\151\145\x6c\144\163\40\151\x73\40\x6e\157\x74\x20\166\x65\x72\151\146\x69\x65\144\54\40\x63\141\156\x27\x74\x20\163\x75\x62\x6d\x69\164\x20\x79\x6f\x75\162\40\162\x65\161\x75\145\x73\164", PR__MDL__SALARY)); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x61\156\137\x61\x70\160\154\171", false)) { goto iwsmmkqaoksmocok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\x6c\x65\141\x73\145\40\141\143\x63\145\160\x74\x20\x74\145\x72\155\163\40\146\x69\x72\x73\164\x20\157\x72\x20\x6d\141\x6b\145\x20\163\165\162\145\40\x79\x6f\x75\162\40\166\x65\162\x69\146\171\x20\162\145\x71\165\x69\x72\x65\x20\x66\x69\145\x6c\144\x73\x20\x69\163\x20\166\x65\x72\x69\x66\151\x65\144", PR__MDL__SALARY), 400); goto esikeyqyuikmaiek; iwsmmkqaoksmocok: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\162\145\145\155\145\156\164")) { goto ocywegekakimmwcq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x67\x72\145\x65\155\145\x6e\x74\x20\x69\144\40\x69\x73\x20\141\40\x72\x65\161\x75\x69\x72\x65\40\146\151\x65\x6c\144", PR__MDL__SALARY), 400); goto emqswoaawgeyosmi; ocywegekakimmwcq: if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto gswcoeiisamakwii; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\x74\x68\x69\156\147\x20\167\x72\x6f\156\x67\54\40\160\154\145\141\163\x65\x20\143\x6f\156\164\x61\x63\x74\x20\165\x73", PR__MDL__SALARY), 500); goto yuimwyoywaiiqacs; gswcoeiisamakwii: if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce, true), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto ikuuiauwouuqawuw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x79\157\x75\x20\141\x6c\x72\x65\x61\x64\x79\40\x73\x75\x62\x6d\x69\164\x20\141\40\x72\x65\x71\x75\x65\x73\164\x20\157\x6e\40\164\150\x69\163\x20\x61\147\162\x65\145\155\x65\156\164", PR__MDL__SALARY)); goto yoqakewookqoqacm; ikuuiauwouuqawuw: if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto kwiggogcgciwuwqk; } if ($keccaugmemegoimu) { goto yykqaowwsqgqysmq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\162\x65\x71\x75\145\x73\x74\x65\x64\x20\141\x67\162\145\x65\x6d\145\x6e\164\40\x69\x73\x20\156\157\164\x20\166\141\154\151\x64\x20\x6f\x72\x20\156\x6f\164\40\x65\170\151\163\x74\x2c\40\x70\154\145\141\163\x65\x20\162\145\x66\x72\145\x73\x68\40\160\141\x67\x65\x20\141\x6e\x64\x20\164\x72\x79\x20\141\x67\141\151\x6e", PR__MDL__SALARY)); yykqaowwsqgqysmq: goto uckewycoogsogwiy; kwiggogcgciwuwqk: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq], false, $mkucggyaiaukqoce); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oeocukauoyosicso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x6d\145\x74\x68\151\x6e\147\40\167\162\157\x6e\147\40\x6f\156\x20\163\x75\x62\155\151\164\164\x69\x6e\147\40\x79\x6f\x75\162\x20\162\145\161\165\145\163\164\54\x20\x70\154\x65\141\163\x65\40\164\x72\x79\x20\141\x67\141\151\156\x20\x61\146\164\x65\x72\x20\x66\145\167\x20\x6d\151\156\165\x74\145\163", PR__MDL__SALARY), 400); goto suqceasgacskcmkc; oeocukauoyosicso: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\157\165\x20\162\x65\x71\x75\x65\163\164\40\163\165\x62\155\151\164\x74\x65\144\x20\163\165\x63\x63\145\x73\x73\x66\x75\154\154\x79", PR__MDL__SALARY)); suqceasgacskcmkc: uckewycoogsogwiy: yoqakewookqoqacm: yuimwyoywaiiqacs: emqswoaawgeyosmi: esikeyqyuikmaiek: qiiigwkqeoewsuwm: goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $keccaugmemegoimu = $mkucggyaiaukqoce; ikqeeaysmqgcgawq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto yqagomygmeoecwey; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($kueeocmceokoouqa && $ogekyekymoyuywog) { goto gsygwgsiawgmqiyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x6d\x65\164\x68\x69\156\147\40\167\162\x6f\156\x67\x2c\x20\160\154\x65\141\163\145\40\143\x6f\156\164\x61\143\164\x20\x75\163", PR__MDL__SALARY), 500); goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto suqcsgaosywaauuu; } if (!$keccaugmemegoimu) { goto wwukgaquuyoissgy; } goto mscgewkcqcoowweg; suqcsgaosywaauuu: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::cmiegiycgiucucgs => $kueeocmceokoouqa->keeuqgyooycqoygw($wqqmoakyckcwwkua)]); goto mscgewkcqcoowweg; wwukgaquuyoissgy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x49\164\47\x73\40\163\145\145\x6d\163\40\171\x6f\x75\x20\144\x6f\x6e\x74\40\x73\x75\142\155\151\x74\40\x61\156\171\x20\162\x65\x71\x75\x65\x73\164\x20\x6f\x6e\40\164\150\x65\x20\141\x67\162\145\145\155\x65\156\x74", PR__MDL__SALARY), 400); mscgewkcqcoowweg: qsgqwyqaqiowkmco: goto qikaewekoecykeou; yqagomygmeoecwey: $keccaugmemegoimu = $mkucggyaiaukqoce; qikaewekoecykeou: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto sqyokemumceysegy; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); if ($kueeocmceokoouqa && $mssuumukiiaqmcka) { goto usymasgsyqgsuocg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\x74\x68\151\156\147\40\x77\x72\x6f\156\147\54\40\160\154\x65\x61\163\x65\40\143\157\156\x74\141\x63\164\x20\x75\x73", PR__MDL__SALARY), 500); goto aiccyaswigkaycqk; usymasgsyqgsuocg: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $siykeiywomwwuoiw = $kueeocmceokoouqa->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(self::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto eucqomyqykgoiuge; } $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); eucqomyqykgoiuge: aiccyaswigkaycqk: goto oqousikwiiqagoyw; sqyokemumceysegy: $keccaugmemegoimu = $mkucggyaiaukqoce; oqousikwiiqagoyw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto zayqqeqgcwkekwws; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto aueaceeyommgkicu; zayqqeqgcwkekwws: $keccaugmemegoimu = $mkucggyaiaukqoce; aueaceeyommgkicu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($product = ManipulateWoocommerce::aqasygcsqysmmyke($product))) { goto sguskaeaaqcagqgc; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto yuuyikiacmmueosu; } $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($product->get_permalink(), $product->get_title(), [self::mgsccwumkcawaqcy => "\x5f\x62\154\141\156\x6b"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto egmayaiikwsskgmy; } $qecuekqmeaiykeek = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); goto ucuoeymyqeokgsya; egmayaiikwsskgmy: $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { goto mysueeoswqgccmui; } $aumscagymwyyicag = __("\x57\151\x74\150\x6f\x75\x74\x20\x50\x72\x69\x63\x65", PR__MDL__SALARY); mysueeoswqgccmui: $sogksuscggsicmac["\160\x72\x69\143\x65"] = $aumscagymwyyicag; ucuoeymyqeokgsya: yuuyikiacmmueosu: sguskaeaaqcagqgc: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas))) { goto uoeasoimegouymka; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto qkcsykuocwuyaice; } $oksqskmgoqiqciis = ManipulateTerm::iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto oocuemosmeeekgas; } $okcscwesammossuq[] = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); oocuemosmeeekgas: syuaummumssgwwee: } agkmiayuawacakau: $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa(ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas), ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\x5f\x62\x6c\141\156\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\160\162\x6f\144\x75\143\x74\x73" => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); qkcsykuocwuyaice: uoeasoimegouymka: return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x70\160\x6c\x79", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $ouwoukcecmicoeos = Setting::eiwcuqigayigimak(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto sqmoqymckwsogsqg; } $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\x6c\x5f\165\163\x65\x72\137\147\x65\164\x5f\x66\151\x65\x6c\144\163"), [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [self::sgoswgskyiiwkyuo => __("\x50\145\x6e\144\151\156\147", PR__MDL__SALARY), self::uyicaiummcooqwqk => __("\x56\145\162\151\146\151\145\144", PR__MDL__SALARY), self::iiiimowywicukqke => __("\125\x6e\x63\x6f\155\x70\x6c\145\164\x65\x64", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto gqmewagyagamokok; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto oyiuemaaykgkqqam; } $iueymcwwscwqkiyq = self::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto mkomygccqkmkumsi; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto cgmgqucewwssmicq; } $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; cgmgqucewwssmicq: goto ussceseaimqywuiy; mkomygccqkmkumsi: if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto osuscoaaomwcqkew; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto aoquoewagkseayug; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; aoquoewagkseayug: goto ciucewqgyoiouesq; osuscoaaomwcqkew: $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; ciucewqgyoiouesq: ussceseaimqywuiy: $kqwygogeauwwyoca = self::uyicaiummcooqwqk === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uyicaiummcooqwqk => $kqwygogeauwwyoca, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (self::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), self::ciywsqoeiymemsys . self::icmokuskwoskgace => ManipulateArray::get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; oyiuemaaykgkqqam: qiaimmucomukkeka: } egsycocugqyyswsi: gqmewagyagamokok: sqmoqymckwsogsqg: return ["\141\160\160\x6c\x69\141\x62\x6c\x65" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => ManipulateArray::yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto ukomuiwukymcoaso; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\123\x6f\155\x65\x74\x68\x69\156\147\40\167\x72\157\156\x67\54\40\x70\x6c\x65\141\163\x65\40\x63\x6f\156\x74\141\143\x74\40\x75\163", PR__MDL__SALARY), 500); goto wkgskiuiukiuyque; ukomuiwukymcoaso: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\x72\x65\x65\x6d\145\156\x74")) { goto uycesqqkoeamocgm; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\x67\x72\145\x65\x6d\x65\x6e\x74\40\151\163\x20\x72\145\161\x75\x69\x72\145\x64", PR__MDL__SALARY)); goto ceiwqkyquikcemmo; uycesqqkoeamocgm: $sogksuscggsicmac = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)]); ceiwqkyquikcemmo: wkgskiuiukiuyque: return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!($ogekyekymoyuywog && $kueeocmceokoouqa && !$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa))) { goto goqmywuiicciasyk; } $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if (!$qgciakuqggmiywuk) { goto oyiuyywyeoskckuw; } $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::cmiegiycgiucucgs => $gimugccgakegomoq]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm); oyiuyywyeoskckuw: $sogksuscggsicmac["\x69\156\143\x6f\x6d\x65\x73\137\x73\x75\155"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\156\143\x6f\x6d\x65\x73\x5f\x63\157\x75\156\164"] = $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm); goqmywuiicciasyk: return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (!($jwsqucqyaoaasykk && $kueeocmceokoouqa)) { goto smcguieygyqcaqgs; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\162\x65\145\x6d\145\x6e\x74"))) { goto wmumywgyyeagqoeq; } if (!($xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq))) { goto mmgmqogugasaqkgg; } $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk, self::aqugcqsyeisayuog); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim]); if (!$qgciakuqggmiywuk) { goto yuqgwwmqwqiuwmaw; } if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto qkuiwoqksgayqqmg; } if (!(self::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $qgciakuqggmiywuk, $kueeocmceokoouqa::ecysamcwsaweumeu))) { goto siecswkggyikqkga; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\125\x73\x65\162\40\x72\145\161\x75\x65\163\x74\40\x72\x65\x6a\145\x63\x74\145\144\40\x62\x79\x20\x61\x64\x6d\x69\156", PR__MDL__SALARY)); siecswkggyikqkga: goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\125\x73\x65\162\40\141\x6c\x72\145\141\144\x79\40\163\x75\142\155\151\x74\x20\x61\40\162\145\161\x75\145\163\x74\40\157\x6e\x20\x74\150\151\163\x20\x61\147\162\145\x65\155\x65\156\164", PR__MDL__SALARY)); easqmyamcmeesgya: yuqgwwmqwqiuwmaw: if (self::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { goto qmoocweoekqueuyy; } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { goto ecouwqosmoyyqmkw; } if (!($guguqsiieswegsiy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, []))) { goto eckcqesiokgwkkiw; } $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if (!ManipulateUser::askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { goto yamyagayiooyeekg; } $askmkgcmgekiqwsg = true; yamyagayiooyeekg: iksewmsaugayqaqq: } smiemmcqqukyguuu: if ($askmkgcmgekiqwsg) { goto yoagcooekomeokwg; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\147\x72\145\145\155\x65\156\x74\x20\x6e\157\x74\40\x66\157\x72\x20\x74\x68\x65\x20\x75\163\x65\162", PR__MDL__SALARY)); yoagcooekomeokwg: eckcqesiokgwkkiw: goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: if (in_array($saqgcoqwmimycgim, $eiaskqgsuqcysisw, true)) { goto quaqmuusokiyqgqe; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\x67\x72\x65\x65\x6d\145\156\164\x20\156\x6f\x74\x20\x66\x6f\x72\x20\x74\x68\x65\x20\165\163\x65\162", PR__MDL__SALARY)); quaqmuusokiyqgqe: mqiiqkuaoekeuswo: goto sgiwoiscywusgmmm; qmoocweoekqueuyy: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\x67\162\x65\x65\x6d\x65\x6e\x74\40\x69\163\40\x70\162\151\x76\141\x74\145", PR__MDL__SALARY)); sgiwoiscywusgmmm: if (!$iswcokucwmiosiaq) { goto skuqigsokaguscas; } $xssuewsokckmigqk = null; skuqigsokaguscas: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto quyogmwugsyoaaiu; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); quyogmwugsyoaaiu: mmgmqogugasaqkgg: wmumywgyyeagqoeq: smcguieygyqcaqgs: return $xssuewsokckmigqk; } }
