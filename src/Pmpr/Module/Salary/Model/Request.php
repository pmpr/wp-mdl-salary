<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7ad7e28ff2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\ORM\View\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use Pmpr\Module\Salary\Woocommerce\Order; use WC_Order; class Request extends Common { const aycugmweyouqeiea = 'agreement'; const sseuikaiuuscgcge = 'income' . Constants::mswocgcucqoaesaa; const qyeimiaoamokwygy = 'withdraw' . Constants::mswocgcucqoaesaa; const woagckamiequeoyu = self::aycugmweyouqeiea . Constants::mswocgcucqoaesaa; const aqsqycycmoieksam = 'accepted_at'; const wwggoguacgcaqaqm = 'internship'; const ocquiawgyoguowuu = 'awaiting_review'; const mmyygcoemkeqcwii = 'awaiting_payment'; public function register() { $this->muuwuqssqkaieqge(__('Requests', PR__MDL__SALARY))->guiaswksukmgageq(__('Request', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::makmukmysysoaooi); $this->eesuqwkusmukgwma(); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::kasgeoiieeaeekiy, [$this, 'scmmymqkoyckgkam'])->swsaakqseuaacagq(Constants::xgimwmogukqqcuky, [$this, 'ywgqgaomoekeewyg'])->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::meksegaoamowuwoq)->gswweykyogmsyawy(__('User', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __('Pending', PR__MDL__SALARY))->kesomeowemmyygey(2, self::mmyygcoemkeqcwii, __('Awaiting Payment', PR__MDL__SALARY))->kesomeowemmyygey(3, self::ocquiawgyoguowuu, __('Awaiting Review', PR__MDL__SALARY))->kesomeowemmyygey(4, self::wwggoguacgcaqaqm, __('Internship', PR__MDL__SALARY))->kesomeowemmyygey(5, Constants::cwiummueqsucqayc, __('Accepted', PR__MDL__SALARY))->kesomeowemmyygey(6, Constants::yascuqeoeosyewwc, __('Rejected', PR__MDL__SALARY))->gswweykyogmsyawy(__('Status', PR__MDL__SALARY))->ieswsgygcawakkyo()->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Reject Description', PR__MDL__SALARY))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::geykusaewkemcasi)->gswweykyogmsyawy(__('Order', PR__MDL__SALARY))->acceqyqygswoecwe(12)->qcssowoqeqysosca()->eyygsasuqmommkua(0)->iwwmociiuayuwssq(function ($gkkgcoiwayaccqgm) { $nsmgceoqaqogqmuw = ''; if ($gkkgcoiwayaccqgm) { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($gkkgcoiwayaccqgm); if ($umwqusowiqmyseom) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->gyuamceykaukkaqs($umwqusowiqmyseom); if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $kuguwoaesuqsqysu = $this->qamwqasmmooweqme($umwqusowiqmyseom); if ($kuguwoaesuqsqysu) { foreach ($kuguwoaesuqsqysu as $igqsaukqcqscimok) { $nsmgceoqaqogqmuw .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui(sprintf('%s: %s', $igqsaukqcqscimok[Constants::qescuiwgsyuikume], $igqsaukqcqscimok[Constants::ciyoccqkiamemcmm])); } } } } } return $nsmgceoqaqogqmuw; }))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::woagckamiequeoyu)->uwmyqckcyamwaiww(Agreement::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__('Agreement', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__('Incomes', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->gswweykyogmsyawy(__('Withdraws', PR__MDL__SALARY))->ckmqkgwcusyaegmm()->wakqsiacyacmumuw())->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(self::aqsqycycmoieksam)->gswweykyogmsyawy(__('Accepted at', PR__MDL__SALARY))->qcqeqimisiisswky()->qcssowoqeqysosca())->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__SALARY))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::meksegaoamowuwoq)->umokgsqqogccoouo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::woagckamiequeoyu)->ugquamoakekwyiqg(Agreement::class))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->qyucewwiggkyeaso([Constants::yascuqeoeosyewwc, self::mmyygcoemkeqcwii], Constants::eqkeooqcsscoggia))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(3)->woiuekkeucikkyum(__('Write a text to user, when you reject the request or change status to awaiting payment.', PR__MDL__SALARY))); parent::aoqwywcqmoqaukkq(); } public function qamwqasmmooweqme($umwqusowiqmyseom) : array { $kuguwoaesuqsqysu = []; if ($umwqusowiqmyseom instanceof WC_Order && 'bacs' === $umwqusowiqmyseom->get_payment_method()) { $kuguwoaesuqsqysu = [Order::mqcgeymcoouyukqu => [Constants::qescuiwgsyuikume => __('Bank of Origin', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => (BankAccountModel::symcgieuakksimmu()->skawqwmckecgauyc()[$umwqusowiqmyseom->get_meta(Order::mqcgeymcoouyukqu)] ?? [])[Constants::qescuiwgsyuikume] ?? __('Unknown', PR__MDL__SALARY)], Order::umikocgmiwyueesi => [Constants::qescuiwgsyuikume => __('Tracking Number', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom->get_meta(Order::umikocgmiwyueesi)], Order::sggyggagimsuqyek => [Constants::qescuiwgsyuikume => __('Transaction Date', PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($umwqusowiqmyseom->get_meta(Order::sggyggagimsuqyek))]]; } return $kuguwoaesuqsqysu; } public function scmmymqkoyckgkam($aokagokqyuysuksm, $icwicymcioeyeyek, $siquossayskcwkea) { $ycoeoaakqyskgykq = $this->waecsyqmwascmqoa($siquossayskcwkea, Constants::meksegaoamowuwoq); $iueymcwwscwqkiyq = $this->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $siquossayskcwkea); if ($iueymcwwscwqkiyq && $ycoeoaakqyskgykq) { $xssuewsokckmigqk = $this->iekyeyicoyyawomk()->iscemaoqqckmkago(self::woagckamiequeoyu, $siquossayskcwkea); if ($xssuewsokckmigqk) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($ycoeoaakqyskgykq, true); $ykyeuagqukagigki = Agreement::symcgieuakksimmu()->waecsyqmwascmqoa($xssuewsokckmigqk, Agreement::iimaoeeqksicsawa); if (Constants::cwiummueqsucqayc === $iueymcwwscwqkiyq) { $this->ewcsyqaaigkicgse('salary_request_accepted', $siquossayskcwkea, $mkucggyaiaukqoce, $ykyeuagqukagigki, $this); if (!$yoiguusocukqeayg->askmkgcmgekiqwsg($ykyeuagqukagigki, $mkucggyaiaukqoce, true)) { $mkucggyaiaukqoce->add_role($ykyeuagqukagigki); } } } } } public function ywgqgaomoekeewyg($qqomumygoacsmsie, View $mksyucucyswaukig) { if (in_array($qqomumygoacsmsie, [Constants::ieioeisgwcgysukw, Constants::weiosaewqequuyuq], true)) { $mksyucucyswaukig->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, 'request_review', function ($aokagokqyuysuksm, $mksyucucyswaukig = null) { $meqocwsecsywiiqs = __('Request Review', PR__MDL__SALARY); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ikgwqyuyckaewsow = [$gosmywauqawmcyga->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__('Status', PR__MDL__SALARY))->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->acauweqyyugwisqc([Constants::cwiummueqsucqayc => __('Accept Request', PR__MDL__SALARY), Constants::yascuqeoeosyewwc => __('Reject Request', PR__MDL__SALARY)])->qyucewwiggkyeaso(Constants::yascuqeoeosyewwc, Constants::eqkeooqcsscoggia), $gosmywauqawmcyga->uouyygwcgsmygaee(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Reject Description', PR__MDL__SALARY))->qsecygiycssgacqs(3)->woiuekkeucikkyum(__('This message show to the user that requested this request.', PR__MDL__SALARY)), $gosmywauqawmcyga->cwiuiiakukcsaakw(Constants::gouqcwikiiygyasc)->iygyugseyaqwywyg($aokagokqyuysuksm)]; $uamcoiueqaamsqma = ''; $iueymcwwscwqkiyq = $this->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $mksyucucyswaukig); if (in_array($iueymcwwscwqkiyq, [Constants::yascuqeoeosyewwc, Constants::cwiummueqsucqayc], true)) { $uamcoiueqaamsqma = $gosmywauqawmcyga->ueyuicgwuyuiioie(sprintf(__('This request status already changed to %s.', PR__MDL__SALARY), $this->gascwoasakiqyumc($iueymcwwscwqkiyq)), true, Constants::PRIMARY); } return $gosmywauqawmcyga->igiawkoqiogocsau([Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ssmskyqgcmeiayco => $gosmywauqawmcyga->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, [Constants::gouqcwikiiygyasc => 'request_review']), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ['class' => 'pr-orm-action pr-btn btn-primary request-review', 'title' => __('Submit', PR__MDL__SALARY), 'dismiss' => true]]], $meqocwsecsywiiqs, ['class' => 'btn text-decoration-none btn-primary']); }); } } public function yeuyyckseoiokmmm($icwicymcioeyeyek, $aokagokqyuysuksm = null) { if (!empty($aokagokqyuysuksm)) { $aqmwamyiwgeeymqa = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); $aoykakaikeeucsic = $this->waecsyqmwascmqoa($aqmwamyiwgeeymqa, self::aqsqycycmoieksam); if (empty($aoykakaikeeucsic) && Constants::cwiummueqsucqayc === $this->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $aqmwamyiwgeeymqa)) { $icwicymcioeyeyek[self::aqsqycycmoieksam] = date('Y-m-d H:i:s', $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce()); } } return $icwicymcioeyeyek; } public function gascwoasakiqyumc($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $ycoeoaakqyskgykq = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::meksegaoamowuwoq); if ($ycoeoaakqyskgykq) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($ycoeoaakqyskgykq); $gikyaoiioawywyeu = $this->waecsyqmwascmqoa($mksyucucyswaukig, self::woagckamiequeoyu); if ($gikyaoiioawywyeu) { $pkyyagewkiyckmwy = sprintf(__('%s for %s agreement', PR__MDL__SALARY), $pkyyagewkiyckmwy, Agreement::symcgieuakksimmu()->uikgwcuascgeissw($gikyaoiioawywyeu)); } return $pkyyagewkiyckmwy; } return parent::uikgwcuascgeissw($mksyucucyswaukig); } }
