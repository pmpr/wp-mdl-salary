<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64cdfb8e9079a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\142\x61\x6e\x6b\x2d\141\x63\x63\x6f\165\x6e\x74"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\147\145\164\55\154\x69\163\x74", [self::wwgusigoaksqmwsm => [$this, "\x63\x69\165\147\x77\x6f\x6f\x61\x73\141\x71\x63\171\x77\x61\163"]]); $this->register("\x2f\147\x65\164\x2d\146\x69\x65\x6c\x64\163", [self::wwgusigoaksqmwsm => [$this, "\165\x67\x6d\143\145\143\x63\147\x77\141\x61\x61\x69\x67\151\171"]]); $this->register("\57\163\141\166\x65", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\141\166\x65"]]); $this->register("\57\x64\145\x6c\145\x74\x65", [self::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\x64\x65\154\x65\164\145"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto eegqyykygiccaoeo; } if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)) { goto qkcyqocqqwmqgqww; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x63\x63\x6f\x75\156\164\x20\160\141\162\141\x6d\x65\164\145\162\40\x69\163\x20\155\151\x73\x73\x69\156\x67", PR__MDL__SALARY)); goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if ($eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw)) { goto qqewoyookaskiuek; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\40\156\157\x74\40\x66\151\156\144\x20\x72\145\161\x75\x65\163\164\145\144\x20\141\143\143\x6f\x75\x6e\x74", PR__MDL__SALARY)); goto ssoucoucsgccekwe; qqewoyookaskiuek: if (!$gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { goto kqksuugcgsyeoayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\x72\x20\162\145\161\165\145\163\x74\145\x64\x20\x61\143\143\x6f\165\x6e\x74\x20\146\157\x72\x20\162\145\155\x6f\x76\x65\40\x69\163\40\x6c\x6f\x63\153\x65\x64", PR__MDL__SALARY)); goto iggyqogweyosuikc; kqksuugcgsyeoayy: $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto omugkkesagcyagmk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\164\x68\x69\x6e\147\40\167\x72\157\156\147\40\157\156\40\x72\145\155\x6f\166\x65\x20\x70\162\157\x63\145\x73\163\x2c\x20\x70\154\x65\x61\163\145\x20\164\162\x79\40\141\x67\x61\x69\x6e", PR__MDL__SALARY)); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\x6e\153\x20\141\x63\x63\x6f\x75\156\x74\40\x72\145\155\x6f\166\145\144\40\163\165\x63\x63\145\x73\x73\x66\165\154\x6c\x79", PR__MDL__SALARY)); ygcsmkuycoagwyou: iggyqogweyosuikc: ssoucoucsgccekwe: miyqyeiwquwsacsm: goto ywqgcegomwaiuquc; eegqyykygiccaoeo: $keccaugmemegoimu = $mkucggyaiaukqoce; ywqgcegomwaiuquc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto foeeqckqsyockkak; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, self::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem($gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[self::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\x6c\x6f\x63\153\x65\144" : "\145\144\x69\x74\141\x62\x6c\x65"; $sogksuscggsicmac[self::ciywsqoeiymemsys . self::icmokuskwoskgace] = $eqgoocgaqwqcimie ? __("\114\157\x63\x6b\145\x64", PR__MDL__SALARY) : __("\105\x64\x69\164\141\142\154\145", PR__MDL__SALARY); goto acaqummmoyiemqss; case $wusccgcckucqsqwe::squoamkioomemiyi: $meqocwsecsywiiqs = __("\x54\171\x70\145", PR__MDL__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; goto acaqummmoyiemqss; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\x42\x61\156\153", PR__MDL__SALARY); $sogksuscggsicmac[self::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; goto acaqummmoyiemqss; case $wusccgcckucqsqwe::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\117\167\x6e\145\x72\x20\x6f\146\40\x25\x73", PR__MDL__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; goto acaqummmoyiemqss; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::skyceaacaaaamiii: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\x4e\x75\155\x62\145\162\40\157\146\40\45\163", PR__MDL__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; goto acaqummmoyiemqss; case $wusccgcckucqsqwe::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto acaqummmoyiemqss; } suswcqoyyqkkquuo: acaqummmoyiemqss: if (!$uescmseksquycukc) { goto eeqesooyqagwawae; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; eeqesooyqagwawae: if (!$meqocwsecsywiiqs) { goto oqugqwcyomiaaoqu; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; oqugqwcyomiaaoqu: soqqemyioggmoakg: } wmmggowmigekyoso: $sogksuscggsicmac[self::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $sogksuscggsicmac[self::uiwqcumqkgikqyue] = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); foeeqckqsyockkak: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto syiqkaasoueowwui; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto skkamseieeusycye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\115\151\163\x73\151\x6e\x67\40\163\x6f\155\145\x20\162\x65\x71\165\151\162\x65\x20\x66\x69\145\x6c\x64\x73", PR__MDL__SALARY), 400); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { goto soaccwqimeksgwiw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\141\154\165\x65\x20\x6f\146\40\x25\x73\40\151\x73\40\x72\145\x71\165\x69\x72\145", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto wiysogeqqwgioyka; soaccwqimeksgwiw: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { goto aegysmeecgcgayyw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\131\157\165\x72\40\142\x61\156\x6b\x20\151\x73\40\156\x6f\164\x20\163\x75\160\160\x6f\x72\x74\40\157\162\40\x79\x6f\165\x72\40\145\156\x74\145\x72\x65\144\40\45\163\40\x69\163\40\156\157\164\x20\166\x61\x6c\151\144", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::iockmgiyoygcswog => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { goto esuiysskoweawsue; } $keccaugmemegoimu = $gmcgeogogyqsgawk; goto gaomwagkcciesyqy; esuiysskoweawsue: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$uusmaiomayssaecw) { goto kymkucucyeoeikim; } $eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto iekumemscwieugqw; } $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[self::ascagqcquwgmygkm] = $uusmaiomayssaecw; goto hoeeyiowekaeemko; iekumemscwieugqw: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\40\x72\145\161\165\x65\163\164\145\x64\40\x61\x63\143\157\165\x6e\x74\40\146\157\x72\40\x65\x64\151\x74\x20\x74\150\x61\x74\x20\156\157\164\40\x65\x78\x69\x73\x74", PR__MDL__SALARY), 400); hoeeyiowekaeemko: kymkucucyeoeikim: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = $gkyciwoiiisgywcs->ksiyqouuaoymsycg($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if (!$ksiyqouuaoymsycg) { goto usquiuuyiyqaeyiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\x20\141\154\162\145\x61\x64\171\x20\141\144\x64\145\144\x20\164\x68\151\x73\40\x61\143\x63\157\x75\x6e\x74\x20\156\165\155\x62\145\x72", PR__MDL__SALARY), 400); usquiuuyiyqaeyiu: if (is_wp_error($keccaugmemegoimu)) { goto uqqaiagaeqgqgaiy; } $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto qicwaskssogcokgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf("\x25\x73\74\142\x72\76\45\163", __("\123\x6f\155\x65\164\x68\151\x6e\147\x20\x77\x72\157\156\x67\40\x6f\156\x20\163\141\x76\151\156\147\x20\160\162\x6f\x63\x65\163\x73\54\x20\160\154\x65\x61\x73\145\40\164\162\x79\x20\x61\147\141\x69\156", PR__MDL__SALARY), __("\115\141\171\x62\145\40\x79\157\165\x20\x63\x68\141\156\x67\145\40\x6e\x6f\x74\x68\151\156\147\x2e", PR__MDL__SALARY))); goto uguigkcmukuouway; qicwaskssogcokgm: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\x6e\153\40\x61\143\x63\157\165\156\164\x20\163\141\x76\x65\144\40\163\165\143\x63\145\163\x73\146\165\154\154\171", PR__MDL__SALARY)); uguigkcmukuouway: uqqaiagaeqgqgaiy: gaomwagkcciesyqy: suqkuqygkkgwyaie: wiysogeqqwgioyka: cgiscsqwwgqqaeqi: goto giaacoqqqsekcayy; syiqkaasoueowwui: $keccaugmemegoimu = $mkucggyaiaukqoce; giaacoqqqsekcayy: return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$ogougosiwuoqymou->ymuegqgyuagyucws(self::iockmgiyoygcswog)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x63\x63\157\165\156\164\x20\x4f\x77\156\145\162\x20\x4e\x61\x6d\x65", PR__MDL__SALARY)), $ogougosiwuoqymou->yyuwuqsiucweeoue(self::squoamkioomemiyi)->gswweykyogmsyawy(__("\101\143\x63\157\165\156\x74\40\x54\x79\160\x65", PR__MDL__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\x49\102\101\116", PR__MDL__SALARY))->kesomeowemmyygey(User::skyceaacaaaamiii, __("\x44\145\x62\x69\164\x20\103\141\162\x64", PR__MDL__SALARY))->oeeumggeiyyckkom(User::wyqmcowecikgawuu, User::wyqmcowecikgawuu)->oeeumggeiyyckkom(User::skyceaacaaaamiii, User::skyceaacaaaamiii)->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\x49\102\x41\x4e", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::skyceaacaaaamiii)->gswweykyogmsyawy(__("\104\x65\142\x69\164\40\103\x61\162\144", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
