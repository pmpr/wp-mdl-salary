<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7ad7e28ff2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\Icon\IconPmprBankInterface; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\Salary\Setting; use WP_Error; class BankAccount extends Model { const cuiqqgyywquoukyc = 'dey'; const wiuikqicccgueuua = 'sina'; const mswoacegomcucaik = 'post'; const gyyeeoeoewusakua = 'saman'; const eqmiogkeiisiaqoy = 'sepah'; const eueukeaouwagaqcm = 'refah'; const weuqguyocwaoyuky = 'shahr'; const kaqogygqegyswmoy = 'melli'; const gsayocsyieookigm = 'mellat'; const isguqmcqsuqoaksq = 'maskan'; const owukkeqqakeugsae = 'tejarat'; const cweuceqwgqcekeiq = 'saderat'; const keawcaccwemcamki = 'ayandeh'; const gcqggoaiekekscka = 'resalat'; const qsqkiycygggomocg = 'parsian'; const ciomqiogomaoaiqq = 'sarmayeh'; const ckqwiykeceeqkqmg = 'pasargad'; const qguouisccascaqky = 'mehr-iran'; const mmmkgoycmsamiuca = 'karafarin'; const qkqceqamuoeuqmaw = 'keshavarzi'; const qcqeusqkuqwcmqug = 'iran-zamin'; const ukicmquwskwaiyiw = 'gardeshgari'; const eeoiqoesqmkyeyuy = 'toose-taavon'; const wuomkgkqssyaaoog = 'toose-saderat'; const agagcmauwuueimko = 'sanat-o-madan'; const aqwwkyoouemucyaq = 'eghtesad-novin'; const ceioiukqyoowuiye = 'middle-east-bank'; const oogeqgcgkamuoaoe = 'bank'; const wyqmcowecikgawuu = 'iban'; const skyceaacaaaamiii = 'debit_card'; const dsuiycscsceeqmga = 'owner_name'; const qyeimiaoamokwygy = 'withdraw_id'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('before_enqueue_backend_assets', [$this, 'enqueue']); parent::wigskegsqequoeks(); } public function register() { $this->guiaswksukmgageq(__('Bank Account', PR__MDL__SALARY))->muuwuqssqkaieqge(__('Bank Accounts', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::iwayyimcuywiagyy); $this->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 70]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::aesecoisycsqcgmo, [$this, 'gkieuyoqcusoksmg'])->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__MDL__SALARY))->kesomeowemmyygey(1, self::wyqmcowecikgawuu, __('IBAN', PR__MDL__SALARY))->kesomeowemmyygey(2, self::skyceaacaaaamiii, __('Debit Card', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($sqeykgyoooqysmca, &$mksyucucyswaukig) { $eqgoocgaqwqcimie = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); $qmomekeesaiaoegu = $this->gcquickqgyqooyyu($eqgoocgaqwqcimie, $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $sqeykgyoooqysmca)); $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [Constants::qgqyauaqwqmqseim => $qmomekeesaiaoegu[Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu[Constants::qescuiwgsyuikume] ?? '']); if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw) || $this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eqgoocgaqwqcimie = $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->cuoygaaeqeqcuggu($qmomekeesaiaoegu[Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy, ['class' => 'icon-xxl mr-2']), $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf('%s (%s)', $this->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $sqeykgyoooqysmca), $qmomekeesaiaoegu[Constants::qescuiwgsyuikume] ?? '')), $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm)], ['class' => 'd-flex flex-column'])], ['class' => 'd-flex']); } else { $eqgoocgaqwqcimie = $sqeykgyoooqysmca; } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::dsuiycscsceeqmga)->gswweykyogmsyawy(__('Owner Name', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::yauicucwkgqyygas)->gswweykyogmsyawy(__('User', PR__MDL__SALARY))->acceqyqygswoecwe(11)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie, Constants::osiogououyayqyck => Constants::qiaqeaemuukkikmi]); }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__('Status', PR__MDL__SALARY))->kesomeowemmyygey(1, Constants::ouuaeeeqeqkagcgi, __('Editable', PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::wagwccqcqwgsoyoi, __('Locked', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::ciyoccqkiamemcmm)->gswweykyogmsyawy(__('Value', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__('Withdraw', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__SALARY))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::dsuiycscsceeqmga))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::yauicucwkgqyygas)->umokgsqqogccoouo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->qyucewwiggkyeaso(self::wyqmcowecikgawuu, self::wyqmcowecikgawuu)->qyucewwiggkyeaso(self::skyceaacaaaamiii, self::skyceaacaaaamiii))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wyqmcowecikgawuu)->uagmgmommooaewkk()->gswweykyogmsyawy(__('IBAN', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::mgmucuaeqkquooai)->ucmqmyecakecwkks(Constants::ciyoccqkiamemcmm, function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { if (self::wyqmcowecikgawuu !== $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $mksyucucyswaukig)) { $eqgoocgaqwqcimie = ''; } return $eqgoocgaqwqcimie; }))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::skyceaacaaaamiii)->wykoackkeuuqeyss()->gswweykyogmsyawy(__('Debit Card', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::mgmucuaeqkquooai)->ucmqmyecakecwkks(Constants::ciyoccqkiamemcmm, function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { if (self::skyceaacaaaamiii !== $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $mksyucucyswaukig)) { $eqgoocgaqwqcimie = ''; } return $eqgoocgaqwqcimie; }))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()); } public function gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak) { $sqeykgyoooqysmca = $uwomkgseoiegeume[Constants::squoamkioomemiyi] ?? ''; $mqqyceucmgciuyqs = $this->uqeoyqiwywwmsiew(Constants::squoamkioomemiyi); if ($mqqyceucmgciuyqs) { if (empty($uwomkgseoiegeume[Constants::yauicucwkgqyygas])) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Account user is required.', PR__MDL__SALARY)); } else { if (empty($sqeykgyoooqysmca) || !isset($mqqyceucmgciuyqs->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)[$sqeykgyoooqysmca])) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Account type is not valid.', PR__MDL__SALARY)); } else { $eqgoocgaqwqcimie = $uwomkgseoiegeume[Constants::ciyoccqkiamemcmm] ?? ''; if (empty($eqgoocgaqwqcimie)) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('%s can not be empty.', PR__MDL__SALARY)); } else { if (!$this->mcseuocscsgqeawg($sqeykgyoooqysmca, $eqgoocgaqwqcimie)) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(sprintf(__('Entered %s is not valid', PR__MDL__SALARY), $mqqyceucmgciuyqs->ymgomemcusiiyksw($sqeykgyoooqysmca))); } else { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $uukmwiwiqwyaaegk = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($this->kumuygiiqswoyasy(), $uwomkgseoiegeume[$this->kumuygiiqswoyasy()] ?? 0)->maqiysyuqmwcqoig('!='), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $uwomkgseoiegeume[Constants::yauicucwkgqyygas] ?? 0), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie)]); if ($uukmwiwiqwyaaegk) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(sprintf(__('You are already add this %s to your bank account list.', PR__MDL__SALARY), $mqqyceucmgciuyqs->ymgomemcusiiyksw($sqeykgyoooqysmca))); } } } } } } } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { $sqeykgyoooqysmca = $icwicymcioeyeyek[Constants::squoamkioomemiyi] ?? self::skyceaacaaaamiii; $eqgoocgaqwqcimie = $icwicymcioeyeyek[$sqeykgyoooqysmca] ?? ''; if ($eqgoocgaqwqcimie) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; } return $icwicymcioeyeyek; } public function uqyqsuqogawkesee(string $iooykwoeyiscymcw) : bool { return isset($this->skawqwmckecgauyc()[$iooykwoeyiscymcw]); } public function yswcygekcgiawqge($ycoeoaakqyskgykq, $osyaqqwaywygusuk) { $kooascmqqwmaskmi = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::yauicucwkgqyygas => $ycoeoaakqyskgykq, $this->kumuygiiqswoyasy() => $osyaqqwaywygusuk])]); if ($kooascmqqwmaskmi) { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->eaywmggcsekawucw($kooascmqqwmaskmi, Constants::ciywsqoeiymemsys, Constants::wagwccqcqwgsoyoi, true); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Bank Account not found', PR__MDL__SALARY)); } return $sogksuscggsicmac; } public function enqueue() { if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq) || $this->qcaekwgmiswccowk(Constants::awysmmukegasimmq)) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $kgkkgoqacescqgsy = __('It\'s not a valid %s', PR__MDL__SALARY); $oucioakwecwsakic = __('Please select a %s', PR__MDL__SALARY); $mqqyceucmgciuyqs = $this->uqeoyqiwywwmsiew(Constants::squoamkioomemiyi); $ciagusimogciiumg = []; foreach ($this->skawqwmckecgauyc() as $cymcyywycwkawmsi) { $ciagusimogciiumg[self::wyqmcowecikgawuu][] = $cymcyywycwkawmsi[Constants::PREFIX][self::wyqmcowecikgawuu] ?? ''; $ciagusimogciiumg[self::skyceaacaaaamiii][] = $cymcyywycwkawmsi[Constants::PREFIX][self::skyceaacaaaamiii] ?? []; } $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'bank-account', 'bank_account.js')->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, ['messages' => ['invalid' => ['add_new' => __('Sorry, you can not add new bank info, some previous item is not valid.', PR__MDL__SALARY), self::oogeqgcgkamuoaoe => sprintf($oucioakwecwsakic, __('Bank', PR__MDL__SALARY)), self::wyqmcowecikgawuu => sprintf($kgkkgoqacescqgsy, $mqqyceucmgciuyqs->ymgomemcusiiyksw(self::wyqmcowecikgawuu)), Constants::squoamkioomemiyi => sprintf($oucioakwecwsakic, __('Account Information Type', PR__MDL__SALARY)), Constants::iockmgiyoygcswog => sprintf($kgkkgoqacescqgsy, __('Owner', PR__MDL__SALARY)) . '. ' . sprintf(__('Please enter at least %s characters', PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(6)), self::skyceaacaaaamiii => sprintf($kgkkgoqacescqgsy, $mqqyceucmgciuyqs->ymgomemcusiiyksw(self::skyceaacaaaamiii)), 'bank_not_detected' => __('Your account specifications not supported, please add information based on supported banks.', PR__MDL__SALARY), 'duplicate_specification' => __('Sorry, this value already exist in previous items.', PR__MDL__SALARY)]], 'prefixes' => $ciagusimogciiumg]); } } public function skawqwmckecgauyc() : array { return [self::keawcaccwemcamki => [Constants::NAME => self::keawcaccwemcamki, Constants::qescuiwgsyuikume => __('Ayandeh Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::uyusyyqcqykauiis, Constants::PREFIX => [self::wyqmcowecikgawuu => '062', self::skyceaacaaaamiii => ['636214']]], self::aqwwkyoouemucyaq => [Constants::NAME => self::aqwwkyoouemucyaq, Constants::qescuiwgsyuikume => __('Eghtesad Novin Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::qgyoasmoeqkiigia, Constants::PREFIX => [self::wyqmcowecikgawuu => '055', self::skyceaacaaaamiii => ['627412']]], self::ckqwiykeceeqkqmg => [Constants::NAME => self::ckqwiykeceeqkqmg, Constants::qescuiwgsyuikume => __('Pasargad Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::caeawgaeswwququw, Constants::PREFIX => [self::wyqmcowecikgawuu => '057', self::skyceaacaaaamiii => ['502229', '639347']]], self::owukkeqqakeugsae => [Constants::NAME => self::owukkeqqakeugsae, Constants::qescuiwgsyuikume => __('Tejarat Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::saagakkuywusouyk, Constants::PREFIX => [self::wyqmcowecikgawuu => '018', self::skyceaacaaaamiii => ['627353']]], self::eeoiqoesqmkyeyuy => [Constants::NAME => self::eeoiqoesqmkyeyuy, Constants::qescuiwgsyuikume => __('Tosee Taavon Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::syskoiukamwuceke, Constants::PREFIX => [self::wyqmcowecikgawuu => '022', self::skyceaacaaaamiii => ['502908']]], self::wuomkgkqssyaaoog => [Constants::NAME => self::wuomkgkqssyaaoog, Constants::qescuiwgsyuikume => __('Tosee Saderat Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::cqyeioyqomkeyooy, Constants::PREFIX => [self::wyqmcowecikgawuu => '020', self::skyceaacaaaamiii => ['627648', '207177']]], self::qsqkiycygggomocg => [Constants::NAME => self::qsqkiycygggomocg, Constants::qescuiwgsyuikume => __('Parsian Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::smisisusqycayemo, Constants::PREFIX => [self::wyqmcowecikgawuu => '054', self::skyceaacaaaamiii => ['622106', '639194', '627448']]], self::cuiqqgyywquoukyc => [Constants::NAME => self::cuiqqgyywquoukyc, Constants::qescuiwgsyuikume => __('Dey Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::sqikgmckuayukceu, Constants::PREFIX => [self::wyqmcowecikgawuu => '066', self::skyceaacaaaamiii => ['502938']]], self::eueukeaouwagaqcm => [Constants::NAME => self::eueukeaouwagaqcm, Constants::qescuiwgsyuikume => __('Refah Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::esimigsasscqsuay, Constants::PREFIX => [self::wyqmcowecikgawuu => '013', self::skyceaacaaaamiii => ['589463']]], self::gyyeeoeoewusakua => [Constants::NAME => self::gyyeeoeoewusakua, Constants::qescuiwgsyuikume => __('Saman Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::iwgoswmiaeowioom, Constants::PREFIX => [self::wyqmcowecikgawuu => '056', self::skyceaacaaaamiii => ['621986']]], self::eqmiogkeiisiaqoy => [Constants::NAME => self::eqmiogkeiisiaqoy, Constants::qescuiwgsyuikume => __('Sepah Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::aiemgawgeciemykq, Constants::PREFIX => [self::wyqmcowecikgawuu => '015', self::skyceaacaaaamiii => ['639370', '589210']]], self::ciomqiogomaoaiqq => [Constants::NAME => self::ciomqiogomaoaiqq, Constants::qescuiwgsyuikume => __('Sarmayeh Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::cgyiyawewcasoyww, Constants::PREFIX => [self::wyqmcowecikgawuu => '058', self::skyceaacaaaamiii => ['639607']]], self::wiuikqicccgueuua => [Constants::NAME => self::wiuikqicccgueuua, Constants::qescuiwgsyuikume => __('Sina Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::scyqgyqcscuwyuuo, Constants::PREFIX => [self::wyqmcowecikgawuu => '059', self::skyceaacaaaamiii => ['639346']]], self::weuqguyocwaoyuky => [Constants::NAME => self::weuqguyocwaoyuky, Constants::qescuiwgsyuikume => __('Shahr Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::eckcegquumegewgg, Constants::PREFIX => [self::wyqmcowecikgawuu => '061', self::skyceaacaaaamiii => ['502806', '504706']]], self::cweuceqwgqcekeiq => [Constants::NAME => self::cweuceqwgqcekeiq, Constants::qescuiwgsyuikume => __('Saderat Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::uimkuekqukkymgws, Constants::PREFIX => [self::wyqmcowecikgawuu => '019', self::skyceaacaaaamiii => ['627961']]], self::agagcmauwuueimko => [Constants::NAME => self::agagcmauwuueimko, Constants::qescuiwgsyuikume => __('Sanat O Madan Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::iigmiyqwcwecwyim, Constants::PREFIX => [self::wyqmcowecikgawuu => '011', self::skyceaacaaaamiii => ['603770', '609217']]], self::mmmkgoycmsamiuca => [Constants::NAME => self::mmmkgoycmsamiuca, Constants::qescuiwgsyuikume => __('Karafarin Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::soaoywwyqccyaeka, Constants::PREFIX => [self::wyqmcowecikgawuu => '053', self::skyceaacaaaamiii => ['627488', '502910']]], self::qkqceqamuoeuqmaw => [Constants::NAME => self::qkqceqamuoeuqmaw, Constants::qescuiwgsyuikume => __('Keshavarzi Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::cqyogkiiwyggquek, Constants::PREFIX => [self::wyqmcowecikgawuu => '016', self::skyceaacaaaamiii => ['603769']]], self::isguqmcqsuqoaksq => [Constants::NAME => self::isguqmcqsuqoaksq, Constants::qescuiwgsyuikume => __('Maskan Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::ysuosqagcqeceeeu, Constants::PREFIX => [self::wyqmcowecikgawuu => '014', self::skyceaacaaaamiii => ['628023']]], self::gsayocsyieookigm => [Constants::NAME => self::gsayocsyieookigm, Constants::qescuiwgsyuikume => __('Mellat Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::gioyoyuoiymsgkmi, Constants::PREFIX => [self::wyqmcowecikgawuu => '012', self::skyceaacaaaamiii => ['610433', '991975']]], self::kaqogygqegyswmoy => [Constants::NAME => self::kaqogygqegyswmoy, Constants::qescuiwgsyuikume => __('Melli Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::soekiuqwwykmmemy, Constants::PREFIX => [self::wyqmcowecikgawuu => '017', self::skyceaacaaaamiii => ['170019', '603799']]], self::mswoacegomcucaik => [Constants::NAME => self::mswoacegomcucaik, Constants::qescuiwgsyuikume => __('Post Bank', PR__MDL__SALARY), Constants::qgqyauaqwqmqseim => IconPmprBankInterface::meokuyekimiuyayy, Constants::PREFIX => [self::wyqmcowecikgawuu => '021', self::skyceaacaaaamiii => ['627760']]], self::gcqggoaiekekscka => [Constants::NAME => self::gcqggoaiekekscka, Constants::qescuiwgsyuikume => __('Resalat Bank', PR__MDL__SALARY), Constants::PREFIX => [self::wyqmcowecikgawuu => '070', self::skyceaacaaaamiii => ['504172']]], self::qguouisccascaqky => [Constants::NAME => self::qguouisccascaqky, Constants::qescuiwgsyuikume => __('Mehr Iran Bank', PR__MDL__SALARY), Constants::PREFIX => [self::wyqmcowecikgawuu => '090', self::skyceaacaaaamiii => ['606373']]], self::ukicmquwskwaiyiw => [Constants::NAME => self::ukicmquwskwaiyiw, Constants::qescuiwgsyuikume => __('Gardeshgari Bank', PR__MDL__SALARY), Constants::PREFIX => [self::wyqmcowecikgawuu => '064', self::skyceaacaaaamiii => ['505416', '505426']]], self::qcqeusqkuqwcmqug => [Constants::NAME => self::qcqeusqkuqwcmqug, Constants::qescuiwgsyuikume => __('Iran Zamin Bank', PR__MDL__SALARY), Constants::PREFIX => [self::wyqmcowecikgawuu => '069', self::skyceaacaaaamiii => ['505785']]], self::ceioiukqyoowuiye => [Constants::NAME => self::ceioiukqyoowuiye, Constants::qescuiwgsyuikume => __('Middle East Bank', PR__MDL__SALARY), Constants::PREFIX => [self::wyqmcowecikgawuu => '078', self::skyceaacaaaamiii => ['639346']]]]; } public function mcseuocscsgqeawg($sqeykgyoooqysmca, $eqgoocgaqwqcimie) : bool { $kuuugksiksqcaaaa = false; $eqgoocgaqwqcimie = str_replace(' ', '', $eqgoocgaqwqcimie); switch ($sqeykgyoooqysmca) { case self::wyqmcowecikgawuu: $kuuugksiksqcaaaa = $this->mmqoiwqsoiaaiowk($eqgoocgaqwqcimie); break; case self::skyceaacaaaamiii: $kuuugksiksqcaaaa = $this->cgwekyekisusssio($eqgoocgaqwqcimie); break; } return $kuuugksiksqcaaaa; } private function cgwekyekisusssio($eusockqasqqmoess) : bool { $kuuugksiksqcaaaa = false; $ykiwomimkkuiigoq = strlen($eusockqasqqmoess); if ($ykiwomimkkuiigoq >= 16 && substr($eusockqasqqmoess, 1, 10) !== '0' && substr($eusockqasqqmoess, 10, 6) !== '0') { $yuwymayicwwqiske = substr($eusockqasqqmoess, 0, 6); $qgiocsakoiaswkou = false; foreach ($this->skawqwmckecgauyc() as $cymcyywycwkawmsi) { $ciagusimogciiumg = $cymcyywycwkawmsi[Constants::PREFIX][self::skyceaacaaaamiii] ?? []; if (in_array($yuwymayicwwqiske, $ciagusimogciiumg, true)) { $qgiocsakoiaswkou = true; break; } } if ($qgiocsakoiaswkou) { $piuesceqiguuskme = 0; for ($momcykaoccoymeig = 0; $momcykaoccoymeig < 16; $momcykaoccoymeig++) { $wgywewwaswowuooi = $momcykaoccoymeig % 2 === 0 ? 2 : 1; $icuyogeyaokmwusi = (int) substr($eusockqasqqmoess, $momcykaoccoymeig, 1) * $wgywewwaswowuooi; $piuesceqiguuskme += $icuyogeyaokmwusi > 9 ? $icuyogeyaokmwusi - 9 : $icuyogeyaokmwusi; } $kuuugksiksqcaaaa = $piuesceqiguuskme % 10 === 0; } } return $kuuugksiksqcaaaa; } private function mmqoiwqsoiaaiowk($csceswaimywmwswc) : bool { $mmqoiwqsoiaaiowk = false; if (is_numeric($csceswaimywmwswc) && strlen($csceswaimywmwswc) === 24) { $uyqcookuywseommq = [10 => 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']; $cwqmgckokyqmsice = array_map(static function ($foskoegaseuwccwe) use($uyqcookuywseommq) { return array_search(strtoupper($foskoegaseuwccwe), $uyqcookuywseommq); }, ['I', 'R']); $quscceoaiwasmkcy = implode('', $cwqmgckokyqmsice); $mcsumwoaieuoaygm = substr($csceswaimywmwswc, 2) . $quscceoaiwasmkcy . substr($csceswaimywmwswc, 0, 2); $mmqoiwqsoiaaiowk = $this->qwcuuywiwuisgoew($mcsumwoaieuoaygm, 97) === 1; } return $mmqoiwqsoiaaiowk; } private function qwcuuywiwuisgoew($wucawosmqgsocgcw, $mecqgaskioioycuw) : int { if (extension_loaded('bcmath')) { $ugkymqicywakcemw = bcmod($wucawosmqgsocgcw, $mecqgaskioioycuw); } else { $cqwwaumaseiikayu = 5; $ugkymqicywakcemw = ''; do { $mmeioagwmyscwumo = (int) $ugkymqicywakcemw . substr($wucawosmqgsocgcw, 0, $cqwwaumaseiikayu); $wucawosmqgsocgcw = substr($wucawosmqgsocgcw, $cqwwaumaseiikayu); $ugkymqicywakcemw = $mmeioagwmyscwumo % $mecqgaskioioycuw; } while ($wucawosmqgsocgcw !== ''); } return (int) $ugkymqicywakcemw; } private function gcquickqgyqooyyu($eqgoocgaqwqcimie, string $sqeykgyoooqysmca) : array { $qmomekeesaiaoegu = []; if ($eqgoocgaqwqcimie && $sqeykgyoooqysmca) { $eqgoocgaqwqcimie = str_replace(' ', '', $eqgoocgaqwqcimie); $yigmcmquieciqeyg = $this->skawqwmckecgauyc(); switch ($sqeykgyoooqysmca) { case self::skyceaacaaaamiii: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 0, 6); foreach ($yigmcmquieciqeyg as $cymcyywycwkawmsi) { $ciagusimogciiumg = $cymcyywycwkawmsi[Constants::PREFIX][$sqeykgyoooqysmca] ?? []; if (in_array($yuwymayicwwqiske, $ciagusimogciiumg, true)) { $qmomekeesaiaoegu = $cymcyywycwkawmsi; break; } } break; case self::wyqmcowecikgawuu: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 2, 3); foreach ($yigmcmquieciqeyg as $cymcyywycwkawmsi) { $ciagusimogciiumg = $cymcyywycwkawmsi[Constants::PREFIX][$sqeykgyoooqysmca] ?? ''; if ($yuwymayicwwqiske === $ciagusimogciiumg) { $qmomekeesaiaoegu = $cymcyywycwkawmsi; break; } } break; } } return $qmomekeesaiaoegu; } public function sswoemewoyqeqoya($ycoeoaakqyskgykq, string $wmcwgasmyywukymo = 'bank_account') : array { $ygikoqaokckisawo = $this->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::yauicucwkgqyygas, $ycoeoaakqyskgykq); $qecuekqmeaiykeek = $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; if ($ygikoqaokckisawo) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $aokagokqyuysuksm = $this->mwyqswsaeeewsosm($eiwicgsqoiaeawkk); $eqgoocgaqwqcimie = $this->waecsyqmwascmqoa($eiwicgsqoiaeawkk, Constants::ciyoccqkiamemcmm); $sqeykgyoooqysmca = $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $eiwicgsqoiaeawkk); $qmomekeesaiaoegu = $this->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); $miowmmgaiagcuyoo = $this->waecsyqmwascmqoa($eiwicgsqoiaeawkk, self::dsuiycscsceeqmga); if ($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo) { $ykiyyumywksqcisg[$aokagokqyuysuksm] = $qmomekeesaiaoegu[Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy; $iwkyyocymeukcceu[$aokagokqyuysuksm] = sprintf("%s - %s", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ($qqqskcogoyswqaum[Setting::aewsykuggcssqeyo] ?? []); $aqsekqkimiekimei = (array) ($qqqskcogoyswqaum[Setting::gskosgoeymsumieq] ?? []); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu[Constants::NAME] ?? '', $aqsekqkimiekimei, true)) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$wmcwgasmyywukymo => $aokagokqyuysuksm]); } } } } } return [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg]; } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if ($eqgoocgaqwqcimie) { $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; } } } } return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if ($qqswgiawgeaeoecu) { $sqeykgyoooqysmca = $qqqskcogoyswqaum[Setting::iyqigkiieoieskgy]; $eqgoocgaqwqcimie = $qqqskcogoyswqaum[Setting::oyyoccawmkogkcyy]; if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$eqgoocgaqwqcimie}%"); } else { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } $isweyuoisomqyaag = [Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ssmskyqgcmeiayco => sprintf(__('Fee of each transaction is %s', PR__MDL__SALARY), $eqgoocgaqwqcimie)]; } return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($ycoeoaakqyskgykq, $osyaqqwaywygusuk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $kooascmqqwmaskmi = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::yauicucwkgqyygas => $ycoeoaakqyskgykq, $this->kumuygiiqswoyasy() => $osyaqqwaywygusuk])); $ccamueccusigaaio = null; if ($kooascmqqwmaskmi) { $sqeykgyoooqysmca = $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $kooascmqqwmaskmi); $qmomekeesaiaoegu = $this->gcquickqgyqooyyu($this->waecsyqmwascmqoa($kooascmqqwmaskmi, Constants::ciyoccqkiamemcmm), $sqeykgyoooqysmca); if ($qmomekeesaiaoegu && $sqeykgyoooqysmca) { foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ($qqqskcogoyswqaum[Setting::aewsykuggcssqeyo] ?? []); $aqsekqkimiekimei = (array) ($qqqskcogoyswqaum[Setting::gskosgoeymsumieq] ?? []); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true)) { $ccamueccusigaaio = $qqqskcogoyswqaum; break; } } } } return $ccamueccusigaaio; } }
