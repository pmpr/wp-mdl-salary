<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679153652225c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends AbstractAgreement { public function __construct() { $this->rest_base = "\141\x67\162\x65\x65\x6d\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\x70\x75\142\154\151\143\163", [Constants::wwgusigoaksqmwsm => [$this, "\145\141\151\x79\153\157\x6d\x65\x6d\155\151\151\x77\155\153\151"]])->register("\57\147\145\x74\55\141\x67\162\145\145\x6d\145\156\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x79\171\x63\151\x6d\x63\141\x6b\x75\151\x79\x6d\x73\141\157\161"]])->register("\57\x67\x65\164\x2d\x72\145\161\x75\x65\x73\164", [Constants::wwgusigoaksqmwsm => [$this, "\x79\171\161\147\x61\x6d\165\167\167\141\x6b\147\143\x69\x65\x79"]])->register("\x2f\x67\x65\164\x2d\x72\145\x71\x75\x65\163\164\55\141\147\x72\145\145\x6d\145\x6e\164", [Constants::wwgusigoaksqmwsm => [$this, "\x75\163\x75\x79\x6d\161\x69\x6b\145\x67\163\167\151\x6f\x67\153"]])->register("\57\x67\145\164\x2d\160\162\157\x64\x75\x63\164\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\x65\161\x73\167\167\153\153\x71\171\x77\143\x6b\143\157"]])->register("\x2f\x67\145\x74\55\x63\141\x74\x65\147\x6f\162\151\x65\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x6d\x65\163\141\153\153\171\143\157\x6d\171\x75\165\x77\x77\x6d"]])->register("\57\147\x65\x74\x2d\x6c\151\163\164\55\x62\171\55\x75\163\x65\162", [Constants::wwgusigoaksqmwsm => [$this, "\167\x63\143\x6b\x61\x6b\x6f\x77\x65\x77\x69\143\x73\163\x71\x67"]])->register("\57\147\x65\x74\x2d\x69\x6e\x63\157\x6d\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\171\145\x63\x63\157\171\x61\163\163\147\157\145\167\151\x77"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $jwsqucqyaoaasykk->iekyeyicoyyawomk(); $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::mmisekagkomcsowm, $ycoeoaakqyskgykq)->iygikqkegwkaaess()->gouskoeouiqwokqs())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::aociysagacimyqgu, $mqamowqmoasqycgc)->iygikqkegwkaaess()->gouskoeouiqwokqs())->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])->oikgyoimkwywogca())->iygikqkegwkaaess(), $eqwoegegiamegqsm->owackeyiuiikegqg()->ggmcoioqwgyccyus()->sokmmiiuyqiuoqia($jwsqucqyaoaasykk::cmiegiycgiucucgs)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)->oikgyoimkwywogca()), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\x65\x71\165\x65\x73\164\137\163\164\141\164\165\163"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); $wciwsoomyoeueocu = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask)); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\125\x6e\x72\145\x71\x75\x65\163\164\x61\x62\x6c\145", PR__MDL__SALARY); } else { if (!$wciwsoomyoeueocu) { $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __("\122\x65\161\165\x65\163\x74\141\142\x6c\x65", PR__MDL__SALARY); } else { $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); } } $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->skckwsgymkimyuwo()->wgiecqcgakkauywu($gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw)), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yyqgamuwwakgciey(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\x65\145\x6d\x65\156\x74"); if ($gikyaoiioawywyeu) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); if ($qgciakuqggmiywuk) { $keccaugmemegoimu = $kueeocmceokoouqa->scqakcemaqsqkema($qgciakuqggmiywuk); $uiewakwqscemywuo = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::wqeucwyckaoouggq, [], [Constants::cwswygwykwgsqiwu => true, Constants::kyyscqqmsikeuaea => Constants::ciywsqoeiymemsys, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wosqwewmqmyweqea => $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk)]); $iueymcwwscwqkiyq = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk); if (Constants::cwiummueqsucqayc === $iueymcwwscwqkiyq) { $keccaugmemegoimu["\x63\x6f\x6e\147\162\x61\x74\165\x6c\141\x74\151\x6f\x6e\163\137\x6d\145\x73\x73\x61\x67\x65"] = sprintf("\x25\x73\x3c\142\162\x2f\76\x25\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\103\x6f\156\x67\162\141\164\165\x6c\x61\x74\151\x6f\x6e\163", PR__MDL__SALARY)), sprintf(__("\x59\157\165\x72\x20\160\141\162\x74\156\x65\162\163\x68\x69\x70\40\x77\x69\x74\150\40\x25\x73\x20\x68\x61\163\x20\163\x74\141\x72\164\145\x64\x20\x61\164\40\x25\x73\x2e\x20\x43\154\151\x63\x6b\40\x74\x68\145\40\x62\x75\x74\x74\157\x6e\x20\142\145\x6c\157\x77\x20\x74\x6f\40\x76\x69\x65\167\x20\x74\x68\x65\40\160\x61\x72\x74\156\145\x72\163\x68\x69\160\40\x61\147\162\145\x65\155\x65\x6e\164\56", PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), $kueeocmceokoouqa->cokuiuygigcwcoms($qgciakuqggmiywuk, $kueeocmceokoouqa::aqsqycycmoieksam))); } if ($kueeocmceokoouqa::ocquiawgyoguowuu === $iueymcwwscwqkiyq && ($gkkgcoiwayaccqgm = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::geykusaewkemcasi))) { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($gkkgcoiwayaccqgm); if ($umwqusowiqmyseom) { $uuwmqqqiwksuaise = $umwqusowiqmyseom->get_total(); $wewsywccwwomowkw = (float) $umwqusowiqmyseom->get_discount_total(); $ekyuqakigygoyume = [Constants::acymsykymkiewqsy => [Constants::qescuiwgsyuikume => __("\x43\x6f\x73\x74\x20\157\x66\40\111\x6e\164\x65\x72\156\x73\150\151\x70", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($uuwmqqqiwksuaise + $wewsywccwwomowkw, ["\144\x6f\x6e\x74\55\143\x68\141\156\x67\145" => true])], Constants::uueoqmeyyeiqyuku => [Constants::qescuiwgsyuikume => __("\x44\151\163\x63\x6f\x75\156\x74", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($wewsywccwwomowkw, ["\144\157\156\x74\55\143\x68\141\x6e\147\x65" => true])], Constants::akmwceiyaqqoasuq => [Constants::qescuiwgsyuikume => __("\x41\x6d\x6f\x75\156\x74\x20\x50\141\x69\144", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($uuwmqqqiwksuaise, ["\144\157\156\x74\55\143\150\x61\156\147\x65" => true])]]; $kuguwoaesuqsqysu = $kueeocmceokoouqa->qamwqasmmooweqme($umwqusowiqmyseom); $ekyuqakigygoyume = array_merge($ekyuqakigygoyume, $kuguwoaesuqsqysu); $keccaugmemegoimu[Constants::awkcoioakcaougmq] = $ekyuqakigygoyume; } } if (!empty($uiewakwqscemywuo[Constants::eqkeooqcsscoggia])) { $keccaugmemegoimu["\x73\164\141\x74\165\163\x5f\144\x65\x73\143\162\151\160\x74\x69\x6f\x6e"] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($uiewakwqscemywuo[Constants::eqkeooqcsscoggia]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\x20\141\162\145\x20\x6e\157\164\x20\x61\x70\x70\154\171\x20\x6f\156\40\x74\x68\151\x73\40\141\147\x72\x65\145\155\145\156\164\40\171\145\x74\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\x67\x72\145\x65\155\x65\x6e\164\x20\x69\144\40\x69\x73\40\x61\x20\x72\x65\x71\x75\151\162\145\40\146\151\x65\154\144", PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function usuymqikegswiogk(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { return $this->yycimcakuiymsaoq($aqmwamyiwgeeymqa); } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x72\162\171\x20\171\x6f\165\40\144\x6f\x6e\164\x20\150\x61\x76\145\40\160\x65\162\155\151\x73\163\x69\157\x6e\40\x74\157\40\x73\x65\145\40\x74\x68\151\163\x20\x72\157\165\164\145\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, true); if (!is_wp_error($keccaugmemegoimu)) { $xssuewsokckmigqk = $keccaugmemegoimu; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $aumscagymwyyicag = 0; if (Constants::cgkgowiusqeaagwg === $jwsqucqyaoaasykk->ogegcqqcukiaqscy($jwsqucqyaoaasykk::uiwumioqeeggcwwq, $xssuewsokckmigqk)) { $aumscagymwyyicag = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->owuaywucuaiyocum($jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::xoaoskywwwqwgqkk)); } $icwicymcioeyeyek = [Constants::sqcsaeqsycmuiiso => [Constants::qescuiwgsyuikume => __("\x43\157\x73\x74\x20\157\146\x20\122\x65\x71\165\145\x73\x74", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), Constants::qgqyauaqwqmqseim => IconInterface::iksiysagwmuuokgs]]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ymgomemcusiiyksw($eqgoocgaqwqcimie); } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; } } $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $this->ocksiywmkyaqseou("\x73\x61\x6c\x61\x72\171\137\x72\x65\x73\x74\x5f\x61\147\162\145\145\155\x65\156\x74\137\144\141\164\x61", $icwicymcioeyeyek, $xssuewsokckmigqk), Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\165\162\x20\x72\x65\161\x75\x65\163\x74\145\x64\40\x61\147\162\x65\145\x6d\x65\156\164\40\x6e\157\164\40\146\x6f\165\x6e\x64", PR__MDL__SALARY), 404); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $oksqskmgoqiqciis = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\x6b\x75\167\x6f\x65\171\x6b\167\167\x69\147\x6f\145\141\x6f\x71"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\x67\162\x65\145\x6d\x65\x6e\x74" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\x77\147\x63\x67\141\x79\x79\x6f\x71\x69\153\x6d\155\x71\x6f"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\x67\x72\x65\145\155\x65\156\164" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $wqqmoakyckcwwkua = $keccaugmemegoimu; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $kueeocmceokoouqa->mwyqswsaeeewsosm($wqqmoakyckcwwkua))]); } else { if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x49\x74\47\x73\40\163\x65\x65\x6d\x73\x20\x79\x6f\x75\x20\144\x6f\x6e\164\x20\x73\x75\x62\155\151\164\x20\x61\x6e\171\40\x72\x65\161\x75\145\x73\x74\40\157\156\x20\x74\x68\145\40\x61\x67\162\x65\x65\155\x65\156\164", PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($kueeocmceokoouqa::woagckamiequeoyu)->ggmcoioqwgyccyus()]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::aqsqycycmoieksam)], Constants::wosqwewmqmyweqea => false]); if ($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, [])) { $oammesyieqmwuwyi = $kueeocmceokoouqa->cwgkcyyaymmsomqa($oammesyieqmwuwyi); $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($product) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\x61\156\153"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if (!$aumscagymwyyicag) { $aumscagymwyyicag = __("\x57\x69\x74\150\x6f\x75\x74\40\x50\x72\x69\143\x65", PR__MDL__SALARY); } $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; } else { $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } } return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas)) { $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); } } $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\x6c\x61\156\153"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gikyaoiioawywyeu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if ($qgciakuqggmiywuk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $qecuekqmeaiykeek), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $gikyaoiioawywyeu)]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->iekyeyicoyyawomk()->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->iekyeyicoyyawomk()->asskucacysemeoiu($uoomaookgsyciacm); } $sogksuscggsicmac["\151\156\x63\x6f\155\x65\x73\x5f\163\x75\x6d"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\156\143\157\155\145\163\137\143\x6f\x75\156\164"] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $sogksuscggsicmac; } }
