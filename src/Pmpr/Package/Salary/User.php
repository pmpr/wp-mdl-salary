<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148ed044838c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class User extends Container { protected ?Validator $validator = null; public function mmymimkumuekmmgi() : ?Validator { return $this->validator; } public function __construct() { $this->validator = Validator::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\163\x68\157\167\137\x75\x73\145\162\x5f\x70\x72\157\146\151\154\x65", [$this, "\141\167\153\161\153\x71\x61\165\x77\167\x75\161\x67\145\x77\165"])->qcsmikeggeemccuu("\145\x64\151\164\x5f\x75\x73\x65\x72\137\x70\162\x6f\x66\x69\x6c\145", [$this, "\141\167\x6b\x71\x6b\x71\141\165\x77\167\x75\161\147\145\x77\x75"])->qcsmikeggeemccuu("\x70\x65\x72\163\157\x6e\141\x6c\137\x6f\x70\164\151\x6f\x6e\x73\x5f\165\160\x64\x61\164\x65", [$this, "\x6d\163\171\x73\147\x71\x65\x65\167\153\161\x67\x73\143\167\x65"])->qcsmikeggeemccuu("\145\144\151\x74\137\165\163\145\x72\137\x70\162\157\x66\151\x6c\145\137\x75\160\x64\x61\x74\x65", [$this, "\155\163\x79\163\x67\x71\x65\x65\x77\x6b\161\147\x73\x63\167\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\143\x6f\155\155\x65\x72\143\x65\x5f\x64\x69\163\x61\x62\154\145\137\x61\x64\x6d\151\156\137\142\141\162", [$this, "\145\x6f\x73\x73\x6d\157\x79\x67\163\x65\151\145\x6b\x65\x77\161"]); parent::kgquecmsgcouyaya(); } public function init() { add_role(self::COLLABORATOR_ROLE, __("\x43\157\154\x6c\141\x62\157\x72\x61\x74\157\x72", PR__PKG__SALARY), ["\162\145\141\x64" => true]); if (!ManipulateUser::eoyueosccuoeqkee()) { goto usquiuuyiyqaeyiu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $uqyaagwcuoewkkss = Validator::symcgieuakksimmu(); $kgkkgoqacescqgsy = __("\111\x74\47\163\40\x6e\x6f\x74\x20\x61\x20\166\141\x6c\151\x64\40\x25\x73", PR__PKG__SALARY); $oucioakwecwsakic = __("\120\154\145\141\x73\x65\x20\x73\145\154\145\x63\164\x20\x61\x20\45\163", PR__PKG__SALARY); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\165\163\145\162", $eygsasmqycagyayw->get("\x75\163\x65\x72\56\x6a\163"))->ayuciigykaswwqeo("\x6a\x71\165\x65\x72\171"))->ikqyiskqaaymscgw("\155\145\x73\163\x61\147\145\x73", ["\151\156\166\141\154\151\144" => ["\x61\144\144\x5f\x6e\x65\167" => $this->imqmyggquiyewkww(__("\x53\x6f\162\162\171\54\40\x79\157\x75\x20\x63\141\x6e\40\x6e\157\x74\40\x61\144\x64\40\156\x65\167\40\x62\x61\156\x6b\40\x69\156\146\157\x2c\x20\x73\157\x6d\x65\40\x70\162\145\166\151\157\165\x73\x20\x69\x74\145\x6d\40\151\x73\x20\x6e\157\164\x20\166\141\x6c\151\x64\x2e", PR__PKG__SALARY), ["\x63\x6c\x61\163\x73" => "\155\x6c\x2d\x32"]), self::BANK => sprintf($oucioakwecwsakic, __("\102\x61\156\153", PR__PKG__SALARY)), self::OWNER => sprintf($kgkkgoqacescqgsy, __("\x4f\x77\x6e\x65\x72", PR__PKG__SALARY)) . "\56\x20" . sprintf(__("\x50\x6c\x65\x61\163\145\40\145\156\x74\x65\x72\40\141\164\40\154\x65\141\163\x74\40\45\x73\x20\143\x68\x61\x72\141\x63\164\x65\162\x73", PR__PKG__SALARY), $this->msywmyaoqmaegsuy(6)), self::IBAN => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::IBAN)), self::TYPE => sprintf($oucioakwecwsakic, __("\x41\143\143\157\x75\156\x74\x20\111\x6e\x66\157\162\155\x61\164\x69\157\x6e\x20\x54\171\x70\x65", PR__PKG__SALARY)), self::DEBIT_CARD => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::DEBIT_CARD)), "\x62\x61\x6e\153\137\156\x6f\x74\x5f\x64\145\x74\x65\143\x74\145\x64" => __("\131\x6f\165\x72\40\141\143\143\157\x75\156\164\x20\x73\x70\145\x63\x69\146\x69\x63\x61\x74\x69\157\156\x73\x20\x6e\157\x74\40\163\x75\x70\x70\x6f\x72\x74\145\x64\54\40\x70\x6c\145\x61\x73\145\40\x61\144\144\40\151\156\146\x6f\162\x6d\x61\164\x69\157\156\40\x62\x61\x73\145\x64\x20\x6f\x6e\40\163\x75\160\x70\x6f\162\164\145\x64\x20\142\x61\156\153\163\56", PR__PKG__SALARY), "\144\x75\160\154\151\143\141\164\x65\137\x73\x70\145\x63\151\x66\x69\143\x61\164\x69\157\156" => __("\123\157\162\162\x79\x2c\40\x74\150\151\x73\40\166\141\x6c\x75\145\40\x61\154\162\x65\141\x64\x79\x20\145\x78\x69\163\x74\40\x69\156\x20\x70\162\145\166\x69\157\165\163\x20\151\x74\x65\155\163\x2e", PR__PKG__SALARY)]])->ikqyiskqaaymscgw("\160\x72\145\146\151\170\x65\x73", [self::IBAN => $uqyaagwcuoewkkss->cyuweacmssmikssi(), self::DEBIT_CARD => $uqyaagwcuoewkkss->cmkgoqaaysaasiom()]); usquiuuyiyqaeyiu: } public function eossmoygseiekewq($ikcaescyugmgiegq) { if (!DecoratorUser::scmcyesmmikkucie(self::COLLABORATOR_ROLE)) { goto qicwaskssogcokgm; } $ikcaescyugmgiegq = false; qicwaskssogcokgm: return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce, "\151\x6e\144\x65\170"); $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); $ikgwqyuyckaewsow = [MetaBox::iseogkiymousogom(self::BANK_INFO, __("\x42\141\x6e\153\40\101\143\143\157\x75\156\x74\40\x49\x6e\x66\x6f\x72\155\x61\164\151\x6f\156", PR__PKG__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::BANK)->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TYPE, __("\x41\143\x63\157\165\156\x74\x20\x49\156\x66\x6f\162\x6d\141\164\x69\x6f\156\x20\124\x79\160\x65", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw(["\146\x69\x65\154\x64\163" => self::BANK, "\x76\x61\162\151\x61\x74\151\x6f\x6e\x73" => $this->uyocacmiaawcwkyy()])->oeeumggeiyyckkom(self::IBAN, self::IBAN)->oeeumggeiyyckkom(self::DEBIT_CARD, self::DEBIT_CARD)->qigsyyqgewgskemg("\141\143\x63\x6f\165\x6e\164\x2d\164\x79\x70\x65")->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::DEBIT_CARD, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::DEBIT_CARD))->wykoackkeuuqeyss()->qigsyyqgewgskemg("\143\x61\x72\144\x2d\x76\141\154\x75\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::IBAN, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::IBAN))->uagmgmommooaewkk()->qigsyyqgewgskemg("\x69\x62\x61\x6e\55\166\141\x6c\x75\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::OWNER, __("\x41\143\143\157\165\x6e\x74\40\x4f\x77\156\x65\x72\40\116\141\x6d\145", PR__PKG__SALARY))->eumecwmqmukqgyea()->qigsyyqgewgskemg("\141\143\143\x6f\x75\156\164\55\x6f\167\x6e\x65\x72"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::LOCKED)->qigsyyqgewgskemg("\x61\143\143\157\x75\156\164\x2d\x6c\157\143\153\145\x64"))->qigsyyqgewgskemg("\143\x6f\154\x2d\170\x6c\55\x34")->iygyugseyaqwywyg($aumukmqosmqwuucq)]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto gaomwagkcciesyqy; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $aiowsaccomcoikus->usuqmwksoeaayaig(''); $woiqcqksaumcwwuc = "\154\x61\x62\x65\x6c"; if (!$aiowsaccomcoikus instanceof Group) { goto esuiysskoweawsue; } $woiqcqksaumcwwuc = "\x74\x69\x74\x6c\x65"; esuiysskoweawsue: $ikgwqyuyckaewsow[$momcykaoccoymeig] = ["\x69\x64" => $aiowsaccomcoikus->mwikyscisascoeea(), "\150\164\x6d\154" => $aiowsaccomcoikus->render(false), $woiqcqksaumcwwuc => $ymqmyyeuycgmigyo]; gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: if (!$ikgwqyuyckaewsow) { goto aegysmeecgcgayyw; } echo $this->iuygowkemiiwqmiw("\160\162\157\x66\151\x6c\x65", ["\x74\151\x74\x6c\x65" => __("\x49\x6e\x63\x6f\155\x65\x20\x61\x6e\x64\40\120\x61\171\x6d\145\x6e\164", PR__PKG__SALARY), "\146\x69\145\154\144\163" => $ikgwqyuyckaewsow]); aegysmeecgcgayyw: } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { $oammesyieqmwuwyi = []; $aumukmqosmqwuucq = ManipulateServer::ayueggmoqeeukqmq(self::BANK_INFO, []); if (!($aumukmqosmqwuucq && is_array($aumukmqosmqwuucq))) { goto ewymsmkkiksgwysk; } $gwscsiewquwmkkgu = $this->mgokaysycmigquaw($mkucggyaiaukqoce, self::LOCKED); $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); foreach ($aumukmqosmqwuucq as $momcykaoccoymeig => $yyimiwcuegayoskq) { if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::TYPE, self::OWNER, self::BANK])) { goto syiqkaasoueowwui; } $qmomekeesaiaoegu = ManipulateArray::get($yyimiwcuegayoskq, self::BANK); $sqeykgyoooqysmca = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE); $miowmmgaiagcuyoo = ManipulateArray::get($yyimiwcuegayoskq, self::OWNER); $eqgoocgaqwqcimie = ManipulateArray::get($yyimiwcuegayoskq, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace("\x20", '', $eqgoocgaqwqcimie); if (!($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu) && strlen($miowmmgaiagcuyoo) >= 6)) { goto cgiscsqwwgqqaeqi; } if (isset($gwscsiewquwmkkgu[$ygogqywsaqoukoqy])) { goto skkamseieeusycye; } if (!$uqyaagwcuoewkkss->kuuugksiksqcaaaa(["\x76\141\x6c\x75\145" => $eqgoocgaqwqcimie, "\164\x79\x70\145" => ManipulateArray::get($yyimiwcuegayoskq, self::TYPE), "\142\x61\156\153" => $qmomekeesaiaoegu])) { goto wiysogeqqwgioyka; } $oammesyieqmwuwyi[$ygogqywsaqoukoqy] = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, self::TYPE => $sqeykgyoooqysmca, self::BANK => $qmomekeesaiaoegu, self::OWNER => $miowmmgaiagcuyoo, self::LOCKED => false, self::ESCAPED => $ygogqywsaqoukoqy]; wiysogeqqwgioyka: skkamseieeusycye: cgiscsqwwgqqaeqi: syiqkaasoueowwui: soaccwqimeksgwiw: } suqkuqygkkgwyaie: if (!$gwscsiewquwmkkgu) { goto giaacoqqqsekcayy; } $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; giaacoqqqsekcayy: ManipulateUser::ksmqawcowkmegigw(self::BANK_INFO, $oammesyieqmwuwyi, $mkucggyaiaukqoce); ewymsmkkiksgwysk: } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce); $yyimiwcuegayoskq = ManipulateArray::get($aumukmqosmqwuucq, $uusmaiomayssaecw, false); if (!$yyimiwcuegayoskq) { goto cmegwsegsosyqcai; } $yyimiwcuegayoskq[self::LOCKED] = true; $aumukmqosmqwuucq[$uusmaiomayssaecw] = $yyimiwcuegayoskq; ManipulateUser::ksmqawcowkmegigw(self::BANK_INFO, $aumukmqosmqwuucq, $mkucggyaiaukqoce); cmegwsegsosyqcai: } public function ikgqwgkoiuwacgoo($miowmmgaiagcuyoo, $uusmaiomayssaecw) { $wayieuwuoeasekks = $this->soiekwmcuuaowsgo($miowmmgaiagcuyoo, $uusmaiomayssaecw); $ymqmyyeuycgmigyo = ManipulateArray::get($wayieuwuoeasekks, self::OWNER); $ygogqywsaqoukoqy = ManipulateArray::get($wayieuwuoeasekks, self::ESCAPED); return sprintf("\45\x73\x20\x3c\x68\162\57\76\40\45\163", $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function soiekwmcuuaowsgo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce); return ManipulateArray::get($aumukmqosmqwuucq, $uusmaiomayssaecw, false); } public function mgokaysycmigquaw($mkucggyaiaukqoce, $aqykuigiuwmmcieu = self::ALL) { $oammesyieqmwuwyi = []; $aumukmqosmqwuucq = ManipulateUser::igawqaomowicuayw(self::BANK_INFO, $mkucggyaiaukqoce, true); if (!(is_array($aumukmqosmqwuucq) && $aumukmqosmqwuucq)) { goto igooksugieceoege; } foreach ($aumukmqosmqwuucq as $yyimiwcuegayoskq) { $ygogqywsaqoukoqy = ManipulateArray::get($yyimiwcuegayoskq, self::ESCAPED); $yyimiwcuegayoskq[self::VALUE] = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE, $ygogqywsaqoukoqy); if ($aqykuigiuwmmcieu === "\x69\x6e\x64\x65\x78") { goto scisgsyemmsekgos; } if ($aqykuigiuwmmcieu === self::ALL || ManipulateArray::get($yyimiwcuegayoskq, $aqykuigiuwmmcieu, false)) { goto cewmoqyysgsmuiya; } goto egyyiccaeeiooaua; scisgsyemmsekgos: $oammesyieqmwuwyi[] = $yyimiwcuegayoskq; goto egyyiccaeeiooaua; cewmoqyysgsmuiya: if (!$ygogqywsaqoukoqy) { goto ooeausyowguqicuo; } $oammesyieqmwuwyi[$ygogqywsaqoukoqy] = $yyimiwcuegayoskq; ooeausyowguqicuo: egyyiccaeeiooaua: gkyawqqcmigqgaiq: } wmywuusgukmmaams: igooksugieceoege: return $oammesyieqmwuwyi; } public function uyocacmiaawcwkyy() { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; if (!is_array($aacykmqwasyaykgu)) { goto wakmayaoqoskekqy; } foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::BANK_NAME); $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::ACCOUNT_TYPE); if (!($qgeeqyucwycemwmo && $aqsekqkimiekimei)) { goto wkeuuycukmuqiaom; } foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [self::TYPE => $sqeykgyoooqysmca, self::BANK => $qmomekeesaiaoegu]); sggawugoykqcmsug: } ueigkucgaucgeimc: kqgcyoscsusgoaqi: } wgewmqieuamsoayy: wkeuuycukmuqiaom: ugqaaewwmkocwwgy: } omqiayeucoioqoao: wakmayaoqoskekqy: return array_filter($qecuekqmeaiykeek); } public function wmouogmqeaiuukqe($mkucggyaiaukqoce, $aokagokqyuysuksm = "\142\141\156\x6b\x5f\x69\x6e\146\x6f\163") { $gmksciycsesoouoi = null; $oyggesqwsywsmcsi = User::symcgieuakksimmu()->mgokaysycmigquaw($mkucggyaiaukqoce); if (!$oyggesqwsywsmcsi) { goto qoqskyuuwueqkquk; } $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; foreach ($oyggesqwsywsmcsi as $ygogqywsaqoukoqy => $yyimiwcuegayoskq) { $qmomekeesaiaoegu = ManipulateArray::get($yyimiwcuegayoskq, self::BANK); $sqeykgyoooqysmca = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE); $miowmmgaiagcuyoo = ManipulateArray::get($yyimiwcuegayoskq, self::OWNER); if (!($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo)) { goto msemumccgceyugmg; } $eqgoocgaqwqcimie = ManipulateArray::get($yyimiwcuegayoskq, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$ygogqywsaqoukoqy] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$ygogqywsaqoukoqy] = sprintf("\x25\163\x20\55\40\45\163", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::ACCOUNT_TYPE); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::BANK_NAME); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto eogwckcymuugikuy; } $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $ygogqywsaqoukoqy]); eogwckcymuugikuy: eeauyscekuckoues: } mwsmsguqqkcwiiuk: msemumccgceyugmg: owmuceyswmgueasi: } qmuwoecuacmkwgem: if (!($ykiyyumywksqcisg && $iwkyyocymeukcceu)) { goto wagqgeqymeqoeuyi; } $gmksciycsesoouoi = MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->wmwikuasuocmqycw(["\166\x61\x72\151\141\164\151\157\x6e\x73" => $qecuekqmeaiykeek])->qigsyyqgewgskemg("\x77\55\155\144\x2d\x31\x30\x30")->usuqmwksoeaayaig(__("\x42\x61\156\153\x20\101\143\x63\x6f\x75\x6e\x74\40\111\x6e\146\x6f\162\x6d\141\x74\151\157\x6e", PR__PKG__SALARY)); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $gmksciycsesoouoi; } }
