<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267a06b4a457             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\x61\x67\162\145\x65\x6d\145\156\164\x73"; public function __construct() { $this->rest_base = "\167\x69\164\150\144\x72\141\x77"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\x6c\x69\x73\164\x2d\142\x79\55\165\x73\145\162", [self::wwgusigoaksqmwsm => [$this, "\x63\165\x61\x6b\151\x65\153\x73\x73\147\153\145\x79\x73\167\141"]]); $this->register("\x2f\147\145\x74\x2d\x66\151\145\154\144\163", [self::wwgusigoaksqmwsm => [$this, "\165\147\x6d\143\x65\143\x63\x67\167\141\141\x61\x69\x67\151\x79"]]); $this->register("\x2f\x73\x75\x62\155\151\x74", ["\x6d\x65\x74\x68\157\x64\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x61\145\141\161\x67\171\x73\x67\141\145\157\x77\141\x67\165\147"]]); $this->register("\57\x63\x61\154\143\x75\154\x61\x74\145", ["\155\145\164\x68\157\144\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x77\x73\x6f\145\165\x65\x6b\x61\x6d\x65\145\x69\x63\141\163\x63"]]); $this->register("\57\147\145\x74\x2d\x77\x69\x74\150\x64\162\141\167", [self::wwgusigoaksqmwsm => [$this, "\x73\x63\163\151\x65\x63\x67\171\x61\x6d\147\171\151\x69\141\x61"]]); $this->register("\x2f\x67\145\x74\x2d\x69\156\143\x6f\x6d\x65\163", [self::wwgusigoaksqmwsm => [$this, "\165\x79\145\143\143\x6f\x79\x61\163\163\x67\157\x65\167\151\x77"]]); $this->register("\57\x67\x65\164\x2d\x70\141\x79\155\145\156\x74\x73", [self::wwgusigoaksqmwsm => [$this, "\x6b\163\x77\x69\145\157\x63\x73\x6d\x61\x61\147\167\155\x6b\x71"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wkwamkgkwykeqkec; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\164\x68\144\x72\x61\167"); if ($euakemkgmcigqycw) { goto wsesqmcqoiyyqkqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\40\x72\x65\161\165\151\x72\x65\40\160\141\x72\141\x6d\x65\164\x65\162\163\40\x69\163\40\155\x69\163\163\151\x6e\147\x2e", PR__MDL__SALARY)); goto mogkoocsoeuyoqqa; wsesqmcqoiyyqkqi: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); mogkoocsoeuyoqqa: wkwamkgkwykeqkec: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto suqceasgacskcmkc; } $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\151\164\x68\x64\162\141\x77"); if ($euakemkgmcigqycw) { goto oimkeqocuguqqsqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\145\40\162\x65\161\x75\x69\162\145\x20\x70\x61\162\x61\x6d\x65\x74\x65\x72\x73\40\151\163\40\x6d\151\163\x73\x69\x6e\x67\x2e", PR__MDL__SALARY)); goto oeocukauoyosicso; oimkeqocuguqqsqk: $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); oeocukauoyosicso: suqceasgacskcmkc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto iwsmmkqaoksmocok; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\164\x68\144\x72\x61\x77"); $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm && $saqgcoqwmimycgim) { goto ocywegekakimmwcq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\40\162\x65\x71\165\x69\x72\145\x20\x70\141\162\141\155\x65\x74\145\162\x73\40\151\163\x20\x6d\x69\x73\163\151\156\x67\56", PR__MDL__SALARY)); goto emqswoaawgeyosmi; ocywegekakimmwcq: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->oqomcmyuuakigusk([$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim, $jwsqucqyaoaasykk->kumuygiiqswoyasy() => $aokagokqyuysuksm]); if ($euakemkgmcigqycw) { goto gswcoeiisamakwii; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\x75\x65\x73\x74\145\x64\x20\x77\x69\164\150\x64\x72\x61\x77\x20\156\x6f\164\x20\x66\x6f\165\156\144\x2e", PR__MDL__SALARY)); goto yuimwyoywaiiqacs; gswcoeiisamakwii: $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::owmueawayysqcsqo => '', $jwsqucqyaoaasykk::ciywsqoeiymemsys => '', $jwsqucqyaoaasykk::aioqyewkwawaqgqe => '', $jwsqucqyaoaasykk::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = ManipulateArray::get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::owmueawayysqcsqo: if (!$eqgoocgaqwqcimie) { goto yoqakewookqoqacm; } $meqocwsecsywiiqs = __("\102\141\156\x6b\x20\101\143\143\157\x75\x6e\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = ManipulateArray::get($eqgoocgaqwqcimie, self::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\45\163\40\x28\45\163\51", ManipulateArray::get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), ManipulateArray::get($eqgoocgaqwqcimie, self::iockmgiyoygcswog)); yoqakewookqoqacm: goto uckewycoogsogwiy; case $jwsqucqyaoaasykk::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\123\x74\x61\x74\x75\x73", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::csokoeeoycsigcuq; goto uckewycoogsogwiy; case $jwsqucqyaoaasykk::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\x41\155\x6f\165\x6e\x74", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::saokeumaawmmaswg; goto uckewycoogsogwiy; case $jwsqucqyaoaasykk::CREATED_AT: $meqocwsecsywiiqs = __("\104\x61\164\145", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::veamaqiowoucocwy; goto uckewycoogsogwiy; } ikuuiauwouuqawuw: uckewycoogsogwiy: $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $keccaugmemegoimu = ManipulateArray::set($euakemkgmcigqycw, [self::uiwqcumqkgikqyue => $icwicymcioeyeyek]); yuimwyoywaiiqacs: emqswoaawgeyosmi: iwsmmkqaoksmocok: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uoeasoimegouymka; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { goto oocuemosmeeekgas; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\x65\40\162\x65\x71\165\x69\162\x65\40\160\x61\x72\141\155\x65\x74\x65\x72\x73\40\x69\x73\x20\155\151\163\x73\151\x6e\147", PR__MDL__SALARY)); goto qkcsykuocwuyaice; oocuemosmeeekgas: $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wqmsciicmogewwoa, $ogekyekymoyuywog::ugswgyqgycqguios, $ogekyekymoyuywog::uwgcogaigssumqay]; foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => $xssuewsokckmigqk]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = [self::wsgoaaeiyusigoym => $iueymcwwscwqkiyq, self::euoaaiqkqcqcgeco => self::oeusoaowacmykwsm, self::SELECT => [self::sgyowqgsmegoocaw => [$ogekyekymoyuywog::eiiuyoyiygsickwe => $iueymcwwscwqkiyq], self::mskoigqmkguawcac => $ogekyekymoyuywog::aioqyewkwawaqgqe]]; esaqcqqwuussiiwo: } qiiigwkqeoewsuwm: $wcsgguaigguiiwcy = $ogekyekymoyuywog->cwkywyqksyucoyia($uoomaookgsyciacm); if (!$wcsgguaigguiiwcy) { goto ikqeeaysmqgcgawq; } $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[self::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; ikqeeaysmqgcgawq: okkmcocqokkskasy: } esikeyqyuikmaiek: $keccaugmemegoimu = [self::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { goto qsgqwyqaqiowkmco; } $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; yqagomygmeoecwey: gsygwgsiawgmqiyi: } wwukgaquuyoissgy: suqcsgaosywaauuu: } mscgewkcqcoowweg: $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case self::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\x54\x6f\x74\141\154\40\x6f\146\40\x79\157\x75\162\40\x69\156\143\x6f\155\145\163\40\x66\x6f\162\40\163\x65\154\145\x63\x74\145\144\x20\x61\x67\162\x65\145\x6d\145\156\164\163", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\124\157\164\x61\x6c", PR__MDL__SALARY); $qoiwmokisgikggia = "\144\141\162\153\x2d\65\60"; $sqqewmoeaekuyyas = 5; goto usymasgsyqgsuocg; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->cysukeiuucugyiqq($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wqmsciicmogewwoa: case $ogekyekymoyuywog::uwgcogaigssumqay: if ($eqgoocgaqwqcimie) { goto mysueeoswqgccmui; } $meqocwsecsywiiqs = ''; goto egmayaiikwsskgmy; mysueeoswqgccmui: $qoiwmokisgikggia = self::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw == $ogekyekymoyuywog::wqmsciicmogewwoa) { goto zayqqeqgcwkekwws; } $ukwokcuqauuosmoo = __("\111\155\x70\x6f\163\x73\151\x62\x6c\x65\40\164\x6f\x20\167\151\164\x68\144\162\x61\167\x20\142\145\x63\x61\165\163\x65\40\x6f\x66\40\151\x6e\163\165\x66\146\151\143\x69\x65\156\164\x20\163\141\x6c\x65\x73\40\166\x6f\154\165\155\145", PR__MDL__SALARY); goto aueaceeyommgkicu; zayqqeqgcwkekwws: $ukwokcuqauuosmoo = __("\111\x6d\160\157\163\163\x69\142\x6c\145\40\164\157\x20\x77\151\x74\150\144\162\x61\x77\40\x62\x65\x63\141\x75\163\x65\x20\x6f\146\40\163\x6f\x6d\x65\x20\155\x61\x6e\141\147\x65\x72\151\x61\154\40\162\x65\x61\163\x6f\x6e\x73", PR__MDL__SALARY); aueaceeyommgkicu: $uaesckuogcakkmaw = true; egmayaiikwsskgmy: goto sqyokemumceysegy; case $ogekyekymoyuywog::ugswgyqgycqguios: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if (!($eqgoocgaqwqcimie < $ygeuioagqoqumwuw)) { goto ucuoeymyqeokgsya; } $eqgoocgaqwqcimie = 0; ucuoeymyqeokgsya: $qoiwmokisgikggia = self::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\131\x6f\x75\162\x20\164\157\164\141\x6c\40\x69\156\143\x6f\x6d\x65\x20\164\150\x61\164\x20\x69\163\40\x68\151\x67\150\x65\x72\x20\x74\x68\x61\x6e\40\45\163", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto sqyokemumceysegy; } oqousikwiiqagoyw: sqyokemumceysegy: } aiccyaswigkaycqk: usymasgsyqgsuocg: if ($meqocwsecsywiiqs) { goto sguskaeaaqcagqgc; } ManipulateArray::unset($keccaugmemegoimu, $uusmaiomayssaecw); goto agkmiayuawacakau; sguskaeaaqcagqgc: $keccaugmemegoimu[$uusmaiomayssaecw] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie), self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::igssuqwuicwawgam => $qoiwmokisgikggia, self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if (!($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\x72\145\155\141\151\x6e"]))) { goto yuuyikiacmmueosu; } $keccaugmemegoimu["\x72\145\155\x61\151\x6e"] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($bsgyawiqyuquqmyy), self::qescuiwgsyuikume => __("\x52\x65\155\141\151\156", PR__MDL__SALARY), self::igssuqwuicwawgam => "\x64\141\x72\153\55\x35\60", self::iuqumwggccmcuyem => 50, self::eqkeooqcsscoggia => __("\124\157\164\141\154\40\x79\157\165\162\40\x72\145\x63\145\151\166\141\142\154\x65\x73", PR__MDL__SALARY)]; yuuyikiacmmueosu: agkmiayuawacakau: eucqomyqykgoiuge: } qikaewekoecykeou: if (!$keccaugmemegoimu) { goto syuaummumssgwwee; } $keccaugmemegoimu = ManipulateArray::yaeiiwwyckwugsem($keccaugmemegoimu); syuaummumssgwwee: qkcsykuocwuyaice: uoeasoimegouymka: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ciucewqgyoiouesq; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { goto aoquoewagkseayug; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\40\x72\145\x71\x75\x69\162\x65\x20\x70\x61\162\x61\155\x65\164\x65\162\163\x20\x69\163\x20\x6d\151\x73\x73\151\x6e\x67", PR__MDL__SALARY)); goto osuscoaaomwcqkew; aoquoewagkseayug: $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto egsycocugqyyswsi; } $keccaugmemegoimu = $this->oemauiimmycumcsk($uamcoiueqaamsqma, 400); goto qiaimmucomukkeka; egsycocugqyyswsi: $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); qiaimmucomukkeka: osuscoaaomwcqkew: ciucewqgyoiouesq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cgmgqucewwssmicq; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim]); cgmgqucewwssmicq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ussceseaimqywuiy; } $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto mkomygccqkmkumsi; } $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); mkomygccqkmkumsi: ussceseaimqywuiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($mkucggyaiaukqoce) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = User::symcgieuakksimmu()->uwoesmooocquykum($mkucggyaiaukqoce, self::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { goto wkgskiuiukiuyque; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\165\x73\145\162\57\x70\x72\x6f\x66\x69\154\145\x2f\142\x61\x6e\x6b\x2d\x61\x63\x63\157\x75\156\164\163", __("\125\x73\145\x72\40\x50\162\x6f\146\151\x6c\x65", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x59\x6f\165\x20\x73\x68\157\x75\x6c\144\x20\x66\151\x72\163\x74\x2c\x20\146\151\154\154\40\x69\x6e\40\x79\x6f\165\x72\x20\x62\141\x6e\x6b\40\141\x63\x63\157\x75\x6e\164\x20\x69\156\x66\x6f\162\155\141\164\151\157\x6e\40\151\x6e\x73\151\x64\x65\40\x79\157\165\x72\x20\45\163\x2c\x20\164\157\x20\x73\165\142\155\x69\x74\x20\141\x20\x77\151\164\150\144\x72\x61\x77", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $ygikoqaokckisawo = []; foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ self::gouqcwikiiygyasc => $uusmaiomayssaecw, self::qgqyauaqwqmqseim => ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw), self::uissasisiuymwsmu => $this->msywmyaoqmaegsuy($pkyyagewkiyckmwy), "\x69\143\x6f\x6e\137\143\x6c\x61\163\x73" => "\x73\166\x67\55\x6e\x6f\x2d\143\x6f\154\157\x72", ]; gqmewagyagamokok: } oyiuemaaykgkqqam: $qiouiwasaauyaaue = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->coyaqyocmqmmgeew($mkucggyaiaukqoce); if ($ywqqikcsamcaycgm) { goto ceiwqkyquikcemmo; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\163\x61\154\141\162\x79\x2f\141\x70\x70\154\x79", __("\x53\x74\x61\162\x74\40\x45\141\162\x6e\40\115\157\156\x65\171", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x59\x6f\x75\40\141\162\x65\40\156\x6f\164\40\x6d\145\155\142\x65\x72\x20\157\146\x20\x61\x6e\x79\40\x61\147\162\145\x65\155\x65\x6e\x74\x20\171\x65\164\x2c\40\171\x6f\165\40\143\x61\156\x20\146\151\156\144\40\x61\160\160\154\x69\x61\142\154\145\x20\x61\x67\162\x65\x65\155\145\x6e\164\163\40\x69\x6e\40\x25\x73\x20\x74\157\40\x61\160\160\x6c\171\40\x74\x68\x65\155\x65\x2e", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto ukomuiwukymcoaso; ceiwqkyquikcemmo: foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $qiouiwasaauyaaue[$mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)] = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); uycesqqkoeamocgm: } sqmoqymckwsogsqg: $sogksuscggsicmac = [Form::mccagaqeagiikkec(self::muwsgygqegywogka, __("\x41\x67\162\145\x65\x6d\145\x6e\164", PR__MDL__SALARY))->eumecwmqmukqgyea()->ccmwycqioaicegoc(__("\x43\150\x6f\157\163\145\x20\164\x68\145\40\x61\147\x72\x65\145\x6d\145\156\164\x73\x20\x74\150\x61\164\40\171\157\x75\x20\167\141\x6e\x74\x20\164\x6f\40\x62\145\40\x63\x72\x65\x64\x69\164\x65\144\40\167\151\x74\x68", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->ioayksieaoewquom()->oikgogcweiiaocka(), Form::mccagaqeagiikkec(self::mgsccwumkcawaqcy, __("\102\141\x6e\153\x20\x41\143\x63\x6f\165\156\164", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)->eumecwmqmukqgyea()]; ukomuiwukymcoaso: oyiuyywyeoskckuw: return $sogksuscggsicmac; } }
