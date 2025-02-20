<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7ad7e28ff2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends AbstractAgreement { public function __construct() { $this->rest_base = 'agreement'; parent::__construct(); } public function register_routes() { $this->register('/get-publics', [Constants::wwgusigoaksqmwsm => [$this, 'eaiykomemmiiwmki']])->register('/get-agreement', [Constants::wwgusigoaksqmwsm => [$this, 'yycimcakuiymsaoq']])->register('/get-request', [Constants::wwgusigoaksqmwsm => [$this, 'yyqgamuwwakgciey']])->register('/get-request-agreement', [Constants::wwgusigoaksqmwsm => [$this, 'usuymqikegswiogk']])->register('/get-products', [Constants::wwgusigoaksqmwsm => [$this, 'ageqswwkkqywckco']])->register('/get-categories', [Constants::wwgusigoaksqmwsm => [$this, 'mesakkycomyuuwwm']])->register('/get-list-by-user', [Constants::wwgusigoaksqmwsm => [$this, 'wcckakowewicssqg']])->register('/get-incomes', [Constants::wwgusigoaksqmwsm => [$this, 'uyeccoyassgoewiw']]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $jwsqucqyaoaasykk->iekyeyicoyyawomk(); $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::mmisekagkomcsowm, $ycoeoaakqyskgykq)->iygikqkegwkaaess()->gouskoeouiqwokqs())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::aociysagacimyqgu, $mqamowqmoasqycgc)->iygikqkegwkaaess()->gouskoeouiqwokqs())->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])->oikgyoimkwywogca())->iygikqkegwkaaess(), $eqwoegegiamegqsm->owackeyiuiikegqg()->ggmcoioqwgyccyus()->sokmmiiuyqiuoqia($jwsqucqyaoaasykk::cmiegiycgiucucgs)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)->oikgyoimkwywogca()), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = 'request_status'; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); $wciwsoomyoeueocu = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask)); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __('Unrequestable', PR__MDL__SALARY); } else { if (!$wciwsoomyoeueocu) { $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __('Requestable', PR__MDL__SALARY); } else { $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); } } $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->skckwsgymkimyuwo()->wgiecqcgakkauywu($gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw)), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yyqgamuwwakgciey(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, 'agreement'); if ($gikyaoiioawywyeu) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); if ($qgciakuqggmiywuk) { $keccaugmemegoimu = $kueeocmceokoouqa->scqakcemaqsqkema($qgciakuqggmiywuk); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uiewakwqscemywuo = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wqeucwyckaoouggq, [], [Constants::cwswygwykwgsqiwu => true, Constants::kyyscqqmsikeuaea => Constants::ciywsqoeiymemsys, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wosqwewmqmyweqea => $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk)]); $iueymcwwscwqkiyq = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk); $aysmcsoiqcwcauqi = ''; $uyqeyioywyoosawa = []; switch ($iueymcwwscwqkiyq) { case Constants::sgoswgskyiiwkyuo: $aysmcsoiqcwcauqi = sprintf('<p>%s</p>%s', __('We have received your request and are reviewing it.', PR__MDL__SALARY), __('The aforementioned request will be approved if all conditions and prerequisites are met.', PR__MDL__SALARY)); break; case Constants::cwiummueqsucqayc: $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aysmcsoiqcwcauqi = sprintf('<p>%s</p>%s', $swqimwqeweekeusq->ciuuiyckmsygceis(__('Congratulations', PR__MDL__SALARY)), sprintf(__('Your partnership with %s has started at %s under %s agreement. Click the button below to view the partnership agreement.', PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), $swqimwqeweekeusq->ciuuiyckmsygceis($kueeocmceokoouqa->cokuiuygigcwcoms($qgciakuqggmiywuk, $kueeocmceokoouqa::aqsqycycmoieksam)), $swqimwqeweekeusq->ciuuiyckmsygceis($mssuumukiiaqmcka->waecsyqmwascmqoa($mssuumukiiaqmcka->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu), Constants::qescuiwgsyuikume)))); break; case Constants::yascuqeoeosyewwc: $aysmcsoiqcwcauqi = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::eqkeooqcsscoggia); break; case $kueeocmceokoouqa::wwggoguacgcaqaqm: $aysmcsoiqcwcauqi = sprintf('<p>%s</p>%s', __('Your request is in the internship state.', PR__MDL__SALARY), sprintf(__('After the internship, your request will be accepted and your collaboration with %s will begin.', PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME))); break; case $kueeocmceokoouqa::mmyygcoemkeqcwii: $uyqeyioywyoosawa[Constants::iiismwgquaowosqw] = __('Approved', PR__MDL__SALARY); $aysmcsoiqcwcauqi = sprintf('<p>%s</p>%s', sprintf(__('Your request to collaborate with %s has been approved.', PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME)), __('Your request is currently pending payment. Please complete your payment in one step (from a bank card in your name) and if you are using the card-to-card method, enter your payment information in the form below.', PR__MDL__SALARY)); break; case $kueeocmceokoouqa::ocquiawgyoguowuu: $uyqeyioywyoosawa[Constants::iiismwgquaowosqw] = __('Approved', PR__MDL__SALARY); $uyqeyioywyoosawa[Constants::akmwceiyaqqoasuq] = __('Paid', PR__MDL__SALARY); $aysmcsoiqcwcauqi = __('We have received your payment information and are reviewing it.', PR__MDL__SALARY); break; } $keccaugmemegoimu['status_notice'] = $aysmcsoiqcwcauqi; $keccaugmemegoimu['statuses_stack'] = $uyqeyioywyoosawa; if ($kueeocmceokoouqa::ocquiawgyoguowuu === $iueymcwwscwqkiyq && ($gkkgcoiwayaccqgm = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::geykusaewkemcasi))) { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($gkkgcoiwayaccqgm); if ($umwqusowiqmyseom) { $uuwmqqqiwksuaise = (int) $umwqusowiqmyseom->get_total(); $wewsywccwwomowkw = (int) $umwqusowiqmyseom->get_discount_total(); $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $ekyuqakigygoyume = [Constants::acymsykymkiewqsy => [Constants::qescuiwgsyuikume => __('Cost of Internship', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($uuwmqqqiwksuaise + $wewsywccwwomowkw)], Constants::uueoqmeyyeiqyuku => [Constants::qescuiwgsyuikume => __('Discount', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($wewsywccwwomowkw)], Constants::akmwceiyaqqoasuq => [Constants::qescuiwgsyuikume => __('Amount Paid', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($uuwmqqqiwksuaise)]]; $kuguwoaesuqsqysu = $kueeocmceokoouqa->qamwqasmmooweqme($umwqusowiqmyseom); $ekyuqakigygoyume = array_merge($ekyuqakigygoyume, $kuguwoaesuqsqysu); $keccaugmemegoimu[Constants::awkcoioakcaougmq] = $ekyuqakigygoyume; } } if (!empty($uiewakwqscemywuo[Constants::eqkeooqcsscoggia])) { $keccaugmemegoimu['status_description'] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($uiewakwqscemywuo[Constants::eqkeooqcsscoggia]); } if (Constants::cwiummueqsucqayc === $iueymcwwscwqkiyq) { $mwekmemkioiceiwa = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mooigagqgycyeiis, ''); if ($mwekmemkioiceiwa) { $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $mwekmemkioiceiwa = $this->caokeucsksukesyo()->owgcciayoweymuws()->qquwggyuqouqumam($mwekmemkioiceiwa, [Constants::wqekaoqqacecmuyg => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), $kueeocmceokoouqa::aycugmweyouqeiea => $mssuumukiiaqmcka->waecsyqmwascmqoa($mssuumukiiaqmcka->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu), Constants::qescuiwgsyuikume), $kueeocmceokoouqa::aqsqycycmoieksam => $kueeocmceokoouqa->cokuiuygigcwcoms($qgciakuqggmiywuk, $kueeocmceokoouqa::aqsqycycmoieksam)]); $keccaugmemegoimu['cooperation_status_description'] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($mwekmemkioiceiwa); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('You are not apply on this agreement yet.', PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('agreement id is a require field', PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function usuymqikegswiogk(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { return $this->yycimcakuiymsaoq($aqmwamyiwgeeymqa); } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Sorry you dont have permission to see this route.', PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, true); if (!is_wp_error($keccaugmemegoimu)) { $xssuewsokckmigqk = $keccaugmemegoimu; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $aumscagymwyyicag = 0; if (Constants::cgkgowiusqeaagwg === $jwsqucqyaoaasykk->ogegcqqcukiaqscy($jwsqucqyaoaasykk::uiwumioqeeggcwwq, $xssuewsokckmigqk)) { $aumscagymwyyicag = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->owuaywucuaiyocum($jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::xoaoskywwwqwgqkk)); } $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ymgomemcusiiyksw($eqgoocgaqwqcimie); } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; } } $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] = [Constants::qescuiwgsyuikume => __('Cost of Request', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), Constants::qgqyauaqwqmqseim => IconInterface::iksiysagwmuuokgs]; $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $this->ocksiywmkyaqseou('salary_rest_agreement_data', $icwicymcioeyeyek, $xssuewsokckmigqk), Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Your requested agreement not found', PR__MDL__SALARY), 404); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $oksqskmgoqiqciis = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, 'kuwoeykwwigoeaoq'], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), 'agreement' => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, 'awgcgayyoqikmmqo'], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), 'agreement' => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $wqqmoakyckcwwkua = $keccaugmemegoimu; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $kueeocmceokoouqa->mwyqswsaeeewsosm($wqqmoakyckcwwkua))]); } else { if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('It\'s seems you dont submit any request on the agreement', PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($kueeocmceokoouqa::woagckamiequeoyu)->ggmcoioqwgyccyus()]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::aqsqycycmoieksam)], Constants::wosqwewmqmyweqea => false]); if ($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, [])) { $oammesyieqmwuwyi = $kueeocmceokoouqa->cwgkcyyaymmsomqa($oammesyieqmwuwyi); $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($product) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => '_blank']]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if (!$aumscagymwyyicag) { $aumscagymwyyicag = __('Without Price', PR__MDL__SALARY); } $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; } else { $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } } return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas)) { $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); } } $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => '_blank']]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gikyaoiioawywyeu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if ($qgciakuqggmiywuk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $qecuekqmeaiykeek), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $gikyaoiioawywyeu)]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->iekyeyicoyyawomk()->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->iekyeyicoyyawomk()->asskucacysemeoiu($uoomaookgsyciacm); } $sogksuscggsicmac['incomes_sum'] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac['incomes_count'] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $sogksuscggsicmac; } }
