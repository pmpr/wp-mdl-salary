<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679153652225c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\BankAccount; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; class Setting extends BaseClass { use CallbackTrait; const gkysgacoiamwmggk = "\x73\x61\x6c\x61\x72\x79\x5f\146\x65\145\x5f\160\157\154\x69\143\151\x65\163"; const oyyoccawmkogkcyy = "\160\157\154\151\x63\171\137\x76\141\x6c\x75\145"; const aewsykuggcssqeyo = "\x61\143\143\x6f\x75\x6e\164\x5f\164\171\x70\145"; const iyqigkiieoieskgy = "\160\157\154\x69\143\x79\137\x74\x79\160\145"; const gskosgoeymsumieq = "\x62\x61\x6e\153\x5f\156\141\x6d\145"; const mikaaiimemmoegcm = "\x76\141\x72\x69\x61\142\x6c\145\x5f\160\157\154\x69\143\171"; const ogkkygkwcccggasw = "\x63\157\156\163\164\141\156\x74\x5f\x70\157\x6c\151\143\171"; const eieeagimaskkekew = "\x61\x70\x70\x6c\x79\137\162\145\161\x75\x69\x72\x65\x5f\x66\x69\145\154\x64\x73"; const wqeucwyckaoouggq = "\x72\145\161\x75\x65\163\x74\x5f\x73\x74\141\164\165\163\145\163\x5f\x64\x65\x73\x63\x72\151\160\164\151\x6f\x6e"; const wuwwmuweuscicwww = "\x61\x63\x63\x6f\x75\x6e\x74\x5f\x6e\x75\x6d\142\145\162"; const oqimuqsisgcqsouy = "\x6f\162\x69\147\151\156\137\x61\143\x63\157\x75\x6e\164\x73"; const iqkskgussyuogioe = "\155\x69\x6e\x5f\x77\151\164\x68\144\x72\x61\x77\137\142\x61\x6c\x61\x6e\143\x65"; const occewewsakqoacca = "\163\150\157\167" . Constants::icmokuskwoskgace; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\x53\x61\154\141\162\x79\40\x53\x65\164\x74\151\x6e\x67", PR__MDL__SALARY); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\x65\x74\x74\x69\x6e\x67", PR__MDL__SALARY)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\141\147\x72\145\145\x6d\x65\156\x74")->gswweykyogmsyawy(__("\101\x67\x72\145\x65\155\145\x6e\164", PR__MDL__SALARY))->saemoowcasogykak(IconInterface::ucgguskkqggeiwaa)->gucwmccyimoagwcm(__("\x41\x67\x72\145\145\x6d\x65\x6e\164\x20\x43\x6f\x6e\146\151\x67\165\x72\x61\x74\151\157\x6e", PR__MDL__SALARY))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\107\x65\156\x65\162\x61\x6c", PR__MDL__SALARY))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::eieeagimaskkekew)->gswweykyogmsyawy(__("\x55\x73\145\162\x20\106\151\145\154\144\x73", PR__MDL__SALARY))->oikgogcweiiaocka()->gucwmccyimoagwcm(__("\x52\145\161\x75\151\162\145\x20\146\x69\x65\x6c\x64\x73\x20\146\x6f\162\40\x61\160\x70\154\x79", PR__MDL__SALARY))->acauweqyyugwisqc((array) $this->ocksiywmkyaqseou("\160\141\156\145\x6c\137\x75\163\145\162\137\147\145\164\x5f\x66\151\x65\x6c\144\x73", [], [Constants::aisguagukaewucii => Constants::emgcgiseaoouacge])))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::wqeucwyckaoouggq)->gswweykyogmsyawy(__("\x52\145\x71\x75\145\163\164\x20\123\164\141\x74\x75\163\145\163\x20\104\x65\163\143\x72\151\160\164\x69\157\x6e", PR__MDL__SALARY))->omsoosuoikgueyke()->gucwmccyimoagwcm(__("\x53\150\x6f\x77\x20\x74\x6f\x20\x75\163\145\162\x20\151\146\40\x75\163\145\x72\x20\162\x65\x71\165\145\x73\x74\40\x69\x73\x20\x6f\x6e\x20\x74\x68\x61\x74\x20\163\x74\141\164\165\x73\56", PR__MDL__SALARY))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::ciywsqoeiymemsys)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\123\x74\x61\164\x75\x73", PR__MDL__SALARY))->acauweqyyugwisqc(Request::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__("\x44\x65\x73\x63\x72\x69\160\x74\x69\x6f\x6e", PR__MDL__SALARY))->gsomueooycksswcy()->qsecygiycssgacqs(3)))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\164\162\141\x6e\x73\x61\x63\x74\151\x6f\156\x73")->gswweykyogmsyawy(__("\124\162\x61\x6e\x73\x61\143\164\x69\157\156\x73", PR__MDL__SALARY))->saemoowcasogykak(IconInterface::gucgemsgiqmwqwgu)->gucwmccyimoagwcm(__("\x54\x72\141\x6e\x73\x61\143\x74\x69\157\156\x73\x20\x43\x6f\x6e\146\151\147\165\x72\x61\x74\x69\x6f\x6e", PR__MDL__SALARY))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\x47\x65\x6e\145\x72\x61\154", PR__MDL__SALARY))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::iqkskgussyuogioe)->mouwuossggyiwems()->gswweykyogmsyawy(__("\x4d\x69\x6e\x20\x57\x69\x74\150\144\x72\x61\x77\x20\x42\x61\154\x61\156\143\x65", PR__MDL__SALARY)))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::oqimuqsisgcqsouy)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x4f\162\x69\x67\151\x6e\x20\x41\143\x63\157\165\156\x74\x73", PR__MDL__SALARY))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\154\x65", PR__MDL__SALARY)))->mkksewyosgeumwsa($this->mwucaoayqeaguayk(self::gskosgoeymsumieq))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wuwwmuweuscicwww)->gswweykyogmsyawy(__("\101\x63\x63\x6f\165\156\x74\40\x4e\x75\155\x62\x65\x72", PR__MDL__SALARY))->escqqisecooswqgo())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\146\x65\145\x5f\x70\x6f\x6c\x69\143\x79")->saemoowcasogykak(IconInterface::oyycwgguwwuseiym)->gswweykyogmsyawy(__("\x46\145\x65\40\x50\157\154\x69\143\151\145\x73", PR__MDL__SALARY))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::gkysgacoiamwmggk)->gswweykyogmsyawy(__("\x46\145\145\x20\120\157\154\151\x63\151\x65\x73", PR__MDL__SALARY))->omsoosuoikgueyke()->ysgmmmoecswoigyq([self::gskosgoeymsumieq, self::aewsykuggcssqeyo])->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\x6e\x61\142\x6c\x65", PR__MDL__SALARY)))->mkksewyosgeumwsa($this->mwucaoayqeaguayk(self::gskosgoeymsumieq)->oikgogcweiiaocka())->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::aewsykuggcssqeyo)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\101\143\x63\x6f\165\156\164\40\x49\156\x66\157\162\x6d\x61\164\x69\x6f\x6e\40\x54\x79\160\x65", PR__MDL__SALARY))->acauweqyyugwisqc(BankAccount::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::squoamkioomemiyi)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::iyqigkiieoieskgy)->gswweykyogmsyawy(__("\120\x6f\x6c\151\143\171\x20\x54\171\x70\x65", PR__MDL__SALARY))->acauweqyyugwisqc($this->ksiaywqocueukouw())->eyygsasuqmommkua(self::ogkkygkwcccggasw)->qyucewwiggkyeaso(self::mikaaiimemmoegcm, self::mikaaiimemmoegcm)->qyucewwiggkyeaso(self::ogkkygkwcccggasw, self::ogkkygkwcccggasw))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::ogkkygkwcccggasw)->gswweykyogmsyawy($this->ksiaywqocueukouw(self::ogkkygkwcccggasw))->mouwuossggyiwems())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::mikaaiimemmoegcm)->gswweykyogmsyawy($this->ksiaywqocueukouw(self::mikaaiimemmoegcm))->iaggyqeqiyqgmgoo())))); parent::ykwqaukkycogooii(); } public function wcwwuuouickuocsa($ksiyqouuaoymsycg = null, $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $sogksuscggsicmac = []; $ygikoqaokckisawo = $this->oycoyoggyswwygye(self::oqimuqsisgcqsouy, [Constants::wkweqssoakmmmguq => [self::gskosgoeymsumieq]]); if ($ygikoqaokckisawo) { $qmycwsskyqkumsco = BankAccount::symcgieuakksimmu()->skawqwmckecgauyc(); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $uusmaiomayssaecw = $eiwicgsqoiaeawkk[Constants::ascagqcquwgmygkm] ?? ''; $qmomekeesaiaoegu = $eiwicgsqoiaeawkk[self::gskosgoeymsumieq] ?? ''; if ($uusmaiomayssaecw && $qmomekeesaiaoegu) { $eiwicgsqoiaeawkk[Constants::qgqyauaqwqmqseim] = $qmycwsskyqkumsco[$qmomekeesaiaoegu][Constants::qgqyauaqwqmqseim] ?? ''; $eiwicgsqoiaeawkk[self::gskosgoeymsumieq] = $qmycwsskyqkumsco[$qmomekeesaiaoegu][Constants::qescuiwgsyuikume] ?? ''; if ($ksiyqouuaoymsycg) { if ($ksiyqouuaoymsycg === $uusmaiomayssaecw) { $sogksuscggsicmac = $eiwicgsqoiaeawkk; break; } } else { if ($aqykuigiuwmmcieu !== Constants::ckmqoekmugkggeym) { $meqocwsecsywiiqs = $eiwicgsqoiaeawkk[Constants::qescuiwgsyuikume] ?? ''; $eusockqasqqmoess = $eiwicgsqoiaeawkk[self::wuwwmuweuscicwww] ?? ''; $eiwicgsqoiaeawkk = sprintf("\x25\x73\x20\50\x25\x73\51", $meqocwsecsywiiqs, $eusockqasqqmoess); } $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; } } } } return $sogksuscggsicmac; } public function ksiaywqocueukouw($qqqskcogoyswqaum = '') { $aacykmqwasyaykgu = [self::ogkkygkwcccggasw => __("\103\x6f\x6e\x73\x74\141\x6e\164\x20\x52\141\164\x65", PR__MDL__SALARY), self::mikaaiimemmoegcm => __("\126\x61\x72\x69\141\x62\154\x65\40\122\141\164\x65", PR__MDL__SALARY)]; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aacykmqwasyaykgu, $qqqskcogoyswqaum, $aacykmqwasyaykgu); } public function mwucaoayqeaguayk(string $aokagokqyuysuksm) : Select { $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; foreach (BankAccount::symcgieuakksimmu()->skawqwmckecgauyc() as $iooykwoeyiscymcw => $cymcyywycwkawmsi) { $ykiyyumywksqcisg[$iooykwoeyiscymcw] = $cymcyywycwkawmsi[Constants::qgqyauaqwqmqseim] ?? ''; $iwkyyocymeukcceu[$iooykwoeyiscymcw] = $cymcyywycwkawmsi[Constants::qescuiwgsyuikume] ?? ''; } return $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec($aokagokqyuysuksm)->gswweykyogmsyawy(__("\102\141\156\x6b\x20\116\141\155\x65", PR__MDL__SALARY))->masciqikccuysaem($ykiyyumywksqcisg, $iwkyyocymeukcceu)->qigsyyqgewgskemg("\x62\x61\x6e\153\55\x6e\x61\155\x65"); } }
