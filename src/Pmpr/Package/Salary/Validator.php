<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcd114df5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBankInterface; use WP_Error; class Validator extends Container { const keiouaegcemwagqa = "\142\x6d\x69"; const comioyycgecawaqm = "\x62\163\x69"; const swcmkuuasyyyumiu = "\x62\x6b\x69"; const yguuaqwyykgiimms = "\142\x69\x6d"; const cemigosyuasmyiei = "\x62\x70\x69"; const mskkwqcwkgmssqqg = "\145\x64\x62\151"; const wgmmceiqgcgceoku = "\163\142\62\x34"; const mkswmgamiuuuyosg = "\x73\142\x61\x6e\153"; const iqsuaogkyuqcisiq = "\x65\156\142\141\156\x6b"; const iwmcgsqaouqyckgg = "\x74\x74\142\141\156\153"; const waiecqigymkwuagq = "\x6d\145\x62\x61\x6e\x6b"; const okumewaywsyqkgom = "\x73\151\156\x61\142\x61\156\153"; const BANK_DEY = "\x62\141\x6e\x6b\55\144\145\171"; const suyawocesuuayoke = "\160\x6f\163\x74\142\141\156\153"; const cwisqcwqaqwewewc = "\142\141\156\x6b\x73\145\x70\141\150"; const guiyeekyugocksii = "\141\156\163\141\x72\x62\141\x6e\x6b"; const wakewcwcocoeeqou = "\x62\141\x6e\x6b\x6d\x65\154\x6c\141\164"; const REFAH_BANK = "\x72\145\x66\x61\150\x2d\142\141\x6e\x6b"; const SHAHR_BANK = "\x73\x68\x61\150\x72\55\142\x61\x6e\153"; const aeigmscigwsqawwm = "\x74\145\x6a\141\x72\141\x74\x62\x61\156\153"; const BANK_MASKAN = "\x62\x61\156\x6b\55\x6d\141\x73\153\x61\x6e"; const PERSIAN_BANK = "\160\145\162\163\151\141\156\x2d\142\x61\156\153"; const uoaoowsimaigiumk = "\x6b\141\x72\x61\146\141\162\151\x6e\142\141\156\153"; public function auawsikwmsucqccc($aokagokqyuysuksm) : BSSelect { return MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $this->kwagkemgawuoacwy(), $this->eoemoqciaweskqkk())->usuqmwksoeaayaig(__("\x42\x61\156\153\x20\x4e\x61\x6d\145", PR__PKG__SALARY))->qigsyyqgewgskemg("\x62\141\156\x6b\x2d\x6e\x61\x6d\x65"); } public function aoeooseeeeaysoiy() : array { return [self::keiouaegcemwagqa, self::comioyycgecawaqm, self::yguuaqwyykgiimms, self::swcmkuuasyyyumiu, self::cemigosyuasmyiei, self::mskkwqcwkgmssqqg, self::wgmmceiqgcgceoku, self::mkswmgamiuuuyosg, self::iqsuaogkyuqcisiq, self::iwmcgsqaouqyckgg, self::BANK_DEY, self::suyawocesuuayoke, self::okumewaywsyqkgom, self::cwisqcwqaqwewewc, self::guiyeekyugocksii, self::wakewcwcocoeeqou, self::SHAHR_BANK, self::aeigmscigwsqawwm, self::BANK_MASKAN, self::PERSIAN_BANK, self::uoaoowsimaigiumk]; } public function uqyqsuqogawkesee($qmomekeesaiaoegu) : bool { return in_array($qmomekeesaiaoegu, $this->aoeooseeeeaysoiy()); } public function mmqoiwqsoiaaiowk($csceswaimywmwswc) : bool { $mmqoiwqsoiaaiowk = false; $ameekioeuciogcqo = $csceswaimywmwswc; $iuwssqgmmuygogii = substr($ameekioeuciogcqo, 2); if (!(is_numeric($iuwssqgmmuygogii) && strlen($iuwssqgmmuygogii) == 24)) { goto qgoiooayqmqqsiok; } $uyqcookuywseommq = [10 => "\x41", "\102", "\103", "\104", "\105", "\x46", "\107", "\x48", "\111", "\112", "\x4b", "\114", "\x4d", "\x4e", "\x4f", "\120", "\x51", "\x52", "\123", "\x54", "\125", "\126", "\x57", "\130", "\x59", "\132"]; $omqauwuwykgsysce = substr($ameekioeuciogcqo, 0, 2); $cwqmgckokyqmsice = array_map(function ($foskoegaseuwccwe) use($uyqcookuywseommq) { return array_search(strtoupper($foskoegaseuwccwe), $uyqcookuywseommq); }, str_split($omqauwuwykgsysce)); $quscceoaiwasmkcy = implode('', $cwqmgckokyqmsice); $mcsumwoaieuoaygm = substr($iuwssqgmmuygogii, 2) . $quscceoaiwasmkcy . substr($iuwssqgmmuygogii, 0, 2); $mmqoiwqsoiaaiowk = $this->qwcuuywiwuisgoew($mcsumwoaieuoaygm, 97) === 1; qgoiooayqmqqsiok: return $mmqoiwqsoiaaiowk; } public function kwagkemgawuoacwy($qmomekeesaiaoegu = null) { $ykiyyumywksqcisg = [self::keiouaegcemwagqa => IconBankInterface::ICON_MELLI, self::comioyycgecawaqm => IconBankInterface::ICON_SADERAT, self::yguuaqwyykgiimms => IconBankInterface::ICON_SANAT_MADAN, self::swcmkuuasyyyumiu => IconBankInterface::ICON_KESHAVARZI, self::cemigosyuasmyiei => IconBankInterface::ICON_PASARGAD, self::mskkwqcwkgmssqqg => IconBankInterface::ICON_TOSEE_SADERAT, self::wgmmceiqgcgceoku => IconBankInterface::ICON_SANAT_MADAN, self::mkswmgamiuuuyosg => IconBankInterface::ICON_SINA, self::iqsuaogkyuqcisiq => IconBankInterface::ICON_EGHTESAD_NOVIN, self::waiecqigymkwuagq => IconBankInterface::ICON_SEPAH, self::iwmcgsqaouqyckgg => IconBankInterface::ICON_TOSEE_TAAVON, self::BANK_DEY => IconBankInterface::ICON_DEY, self::suyawocesuuayoke => IconBankInterface::ICON_POSTBANK, self::okumewaywsyqkgom => IconBankInterface::ICON_SARMAYEH, self::cwisqcwqaqwewewc => IconBankInterface::ICON_SEPAH, self::guiyeekyugocksii => IconBankInterface::ICON_ANSAR, self::wakewcwcocoeeqou => IconBankInterface::ICON_MELLAT, self::SHAHR_BANK => IconBankInterface::ICON_SHAHR, self::aeigmscigwsqawwm => IconBankInterface::ICON_TEJARAT, self::BANK_MASKAN => IconBankInterface::ICON_MASKAN, self::PERSIAN_BANK => IconBankInterface::ICON_PARSIAN, self::uoaoowsimaigiumk => IconBankInterface::ICON_KARAFARIN]; return ManipulateArray::get($ykiyyumywksqcisg, $qmomekeesaiaoegu, $ykiyyumywksqcisg); } public function eoemoqciaweskqkk($qmomekeesaiaoegu = null) { $iwkyyocymeukcceu = [self::keiouaegcemwagqa => __("\102\141\156\153\x20\x4d\145\x6c\154\x69\x20\111\162\x61\x6e", PR__PKG__SALARY), self::comioyycgecawaqm => __("\x42\x61\x6e\x6b\40\123\141\144\145\162\x61\x74\x20\x49\x72\x61\x6e", PR__PKG__SALARY), self::yguuaqwyykgiimms => __("\102\x61\x6e\x6b\x20\157\x66\x20\x49\156\144\165\163\164\162\x79\40\x61\x6e\144\x20\115\151\156\145", PR__PKG__SALARY), self::swcmkuuasyyyumiu => __("\102\141\156\153\x20\x4b\145\x73\x68\141\x76\141\x72\x7a\151\40\111\162\x61\x6e", PR__PKG__SALARY), self::cemigosyuasmyiei => __("\x42\141\156\x6b\x20\120\141\163\141\162\x67\x61\144", PR__PKG__SALARY), self::mskkwqcwkgmssqqg => __("\x45\170\160\x6f\162\164\40\104\x65\166\145\x6c\x6f\x70\155\x65\x6e\164\40\x42\x61\x6e\153\40\157\146\40\x49\162\141\x6e", PR__PKG__SALARY), self::wgmmceiqgcgceoku => __("\x53\141\x6d\141\156\x20\102\141\x6e\153", PR__PKG__SALARY), self::mkswmgamiuuuyosg => __("\x53\141\x72\x6d\x61\x79\145\40\x42\x61\x6e\153", PR__PKG__SALARY), self::iqsuaogkyuqcisiq => __("\105\x4e\40\102\141\156\x6b", PR__PKG__SALARY), self::waiecqigymkwuagq => __("\x4d\x65\150\162\x65\40\x45\147\x68\x74\x65\x73\x61\x64\x20\x28\123\x65\160\141\150\x29", PR__PKG__SALARY), self::iwmcgsqaouqyckgg => __("\124\x54\40\102\141\156\153", PR__PKG__SALARY), self::BANK_DEY => __("\104\x65\171\40\102\x61\156\153", PR__PKG__SALARY), self::suyawocesuuayoke => __("\x50\x6f\x73\164\x20\x42\141\156\153\x20\157\146\x20\x49\x72\141\x6e", PR__PKG__SALARY), self::okumewaywsyqkgom => __("\x53\x69\156\x61\x20\x42\x61\x6e\153", PR__PKG__SALARY), self::cwisqcwqaqwewewc => __("\x42\x61\156\153\40\x53\x65\160\141\x68", PR__PKG__SALARY), self::guiyeekyugocksii => __("\101\x6e\x73\141\x72\x20\102\141\x6e\x6b", PR__PKG__SALARY), self::wakewcwcocoeeqou => __("\102\141\x6e\153\40\x4d\x65\154\154\x61\164", PR__PKG__SALARY), self::SHAHR_BANK => __("\102\x61\x6e\153\40\123\150\141\150\x72", PR__PKG__SALARY), self::REFAH_BANK => __("\x52\145\x66\141\150\x20\102\141\156\x6b", PR__PKG__SALARY), self::aeigmscigwsqawwm => __("\x43\157\155\x6d\x65\x72\x63\x65\40\102\x61\x6e\153", PR__PKG__SALARY), self::BANK_MASKAN => __("\110\157\x75\163\x69\156\147\x20\x42\x61\156\x6b", PR__PKG__SALARY), self::PERSIAN_BANK => __("\120\145\x72\163\x69\x61\x6e\40\x42\141\x6e\153", PR__PKG__SALARY), self::uoaoowsimaigiumk => __("\x45\x6e\164\162\145\x70\162\145\156\145\x75\162\x73\150\x69\160\40\102\x61\x6e\x6b", PR__PKG__SALARY)]; return ManipulateArray::get($iwkyyocymeukcceu, $qmomekeesaiaoegu, $iwkyyocymeukcceu); } private function aygskauusuymmkgq($eqgoocgaqwqcimie) : bool { return false; } public function cmkgoqaaysaasiom() : array { return ["\66\x30\63\x37\71\x39" => self::keiouaegcemwagqa, "\x36\62\x37\71\66\61" => self::yguuaqwyykgiimms, "\66\60\63\x37\67\60" => self::swcmkuuasyyyumiu, "\66\x30\71\x32\x31\67" => self::swcmkuuasyyyumiu, "\x36\60\x33\x37\66\x39" => self::comioyycgecawaqm, "\x35\x30\62\62\x32\x39" => self::cemigosyuasmyiei, "\x36\x33\x39\63\64\x37" => self::cemigosyuasmyiei, "\x36\x32\67\66\64\x38" => self::mskkwqcwkgmssqqg, "\x32\60\67\61\x37\x37" => self::mskkwqcwkgmssqqg, "\x36\x32\61\x39\x38\x36" => self::wgmmceiqgcgceoku, "\66\63\x39\x36\60\x37" => self::mkswmgamiuuuyosg, "\x35\60\x32\71\60\x38" => self::iwmcgsqaouqyckgg, "\66\62\x37\64\61\x32" => self::iqsuaogkyuqcisiq, "\x36\62\67\x37\x36\60" => self::suyawocesuuayoke, "\66\x33\71\63\x34\66" => self::okumewaywsyqkgom, "\65\x30\x32\71\x33\x38" => self::BANK_DEY, "\x36\63\x39\63\x37\x30" => self::cwisqcwqaqwewewc, "\65\x38\x39\62\61\60" => self::cwisqcwqaqwewewc, "\x36\x32\67\63\70\61" => self::guiyeekyugocksii, "\x35\60\62\x38\x30\66" => self::SHAHR_BANK, "\65\x30\x34\x37\60\x36" => self::SHAHR_BANK, "\66\61\x30\64\63\x33" => self::wakewcwcocoeeqou, "\x39\71\61\71\67\x35" => self::wakewcwcocoeeqou, "\x35\70\71\64\66\63" => self::REFAH_BANK, "\x36\x32\70\60\62\63" => self::BANK_MASKAN, "\66\x32\67\x33\65\x33" => self::aeigmscigwsqawwm, "\66\62\x32\x31\60\66" => self::PERSIAN_BANK, "\66\63\71\x31\x39\x34" => self::PERSIAN_BANK, "\x36\x32\x37\64\64\x38" => self::PERSIAN_BANK, "\x36\x32\x37\x34\70\x38" => self::uoaoowsimaigiumk, "\65\60\x32\x39\61\x30" => self::uoaoowsimaigiumk]; } public function cyuweacmssmikssi() : array { return ["\60\61\x31" => self::yguuaqwyykgiimms, "\x30\x31\x32" => self::wakewcwcocoeeqou, "\60\61\63" => self::REFAH_BANK, "\x30\x31\64" => self::BANK_MASKAN, "\x30\x31\65" => self::cwisqcwqaqwewewc, "\60\x31\66" => self::swcmkuuasyyyumiu, "\60\x31\67" => self::keiouaegcemwagqa, "\x30\61\70" => self::aeigmscigwsqawwm, "\x30\61\71" => self::comioyycgecawaqm, "\x30\62\x30" => self::mskkwqcwkgmssqqg, "\x30\62\61" => self::suyawocesuuayoke, "\60\x35\x37" => self::cemigosyuasmyiei, "\x30\x35\63" => self::uoaoowsimaigiumk, "\60\x35\64" => self::PERSIAN_BANK, "\x30\x35\65" => self::iqsuaogkyuqcisiq, "\60\65\66" => self::wgmmceiqgcgceoku, "\x30\65\x38" => self::mkswmgamiuuuyosg, "\60\66\x31" => self::SHAHR_BANK, "\60\66\63" => self::guiyeekyugocksii, "\x30\x36\66" => self::BANK_DEY]; } public function gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca = self::DEBIT_CARD) { $qmomekeesaiaoegu = null; $eqgoocgaqwqcimie = str_replace("\40", '', $eqgoocgaqwqcimie); switch ($sqeykgyoooqysmca) { case self::wyqmcowecikgawuu: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 2, 3); $qmomekeesaiaoegu = ManipulateArray::get($this->cyuweacmssmikssi(), $yuwymayicwwqiske); goto qwigomakwmyiwkgo; case self::DEBIT_CARD: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 0, 6); $qmomekeesaiaoegu = ManipulateArray::get($this->cmkgoqaaysaasiom(), $yuwymayicwwqiske); goto qwigomakwmyiwkgo; } myoicgcuugciueis: qwigomakwmyiwkgo: return $qmomekeesaiaoegu; } public function kuuugksiksqcaaaa($ywmkwiwkosakssii = []) { $sogksuscggsicmac = false; $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::squoamkioomemiyi, self::DEBIT_CARD); $eqgoocgaqwqcimie = str_replace("\40", '', ManipulateArray::get($ywmkwiwkosakssii, self::ciyoccqkiamemcmm, 0)); switch ($sqeykgyoooqysmca) { case self::DEBIT_CARD: $qmomekeesaiaoegu = ManipulateArray::get($ywmkwiwkosakssii, self::oogeqgcgkamuoaoe, ''); if (!$qmomekeesaiaoegu) { goto cuykwgmswkskqkyi; } $sogksuscggsicmac = $this->cgwekyekisusssio($qmomekeesaiaoegu, $eqgoocgaqwqcimie); cuykwgmswkskqkyi: goto asmecuqiyyswueqe; case self::wyqmcowecikgawuu: $sogksuscggsicmac = $this->mmqoiwqsoiaaiowk($eqgoocgaqwqcimie); goto asmecuqiyyswueqe; } csscmcacoikwsecs: asmecuqiyyswueqe: if ($sogksuscggsicmac) { goto kuicqywysciceggs; } $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\105\x6e\164\145\x72\x65\144\40\45\163\40\151\x73\x20\156\x6f\x74\40\x76\141\x6c\151\144", PR__PKG__SALARY), $this->yuuwwswmwmgmcyem($sqeykgyoooqysmca))); kuicqywysciceggs: return $sogksuscggsicmac; } public function yuuwwswmwmgmcyem($sqeykgyoooqysmca = false) { $qgeeqyucwycemwmo = [self::DEBIT_CARD => __("\104\x65\x62\151\x74\40\103\141\162\x64", PR__PKG__SALARY), self::wyqmcowecikgawuu => __("\111\x42\101\116", PR__PKG__SALARY)]; return ManipulateArray::get($qgeeqyucwycemwmo, $sqeykgyoooqysmca, $qgeeqyucwycemwmo); } private function qwcuuywiwuisgoew($wucawosmqgsocgcw, $mecqgaskioioycuw) : int { if (extension_loaded("\x62\x63\x6d\141\164\x68")) { goto eqkauqciwewmgeoi; } $cqwwaumaseiikayu = 5; $ugkymqicywakcemw = ''; sciwggaeogcoesiu: $mmeioagwmyscwumo = (int) $ugkymqicywakcemw . substr($wucawosmqgsocgcw, 0, $cqwwaumaseiikayu); $wucawosmqgsocgcw = substr($wucawosmqgsocgcw, $cqwwaumaseiikayu); $ugkymqicywakcemw = $mmeioagwmyscwumo % $mecqgaskioioycuw; if (strlen($wucawosmqgsocgcw)) { goto sciwggaeogcoesiu; } mkwskuycuyguqqok: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $ugkymqicywakcemw = bcmod($wucawosmqgsocgcw, $mecqgaskioioycuw); kwagwqyusyiyoaqs: return (int) $ugkymqicywakcemw; } public function cgwekyekisusssio($qmomekeesaiaoegu, $eusockqasqqmoess) : bool { $kuuugksiksqcaaaa = false; $ykiwomimkkuiigoq = strlen($eusockqasqqmoess); if (!($ykiwomimkkuiigoq >= 16 && substr($eusockqasqqmoess, 1, 10) != 0 && substr($eusockqasqqmoess, 10, 6) != 0)) { goto eequksumcoogyoem; } $ciagusimogciiumg = $this->cmkgoqaaysaasiom(); $qgiocsakoiaswkou = ManipulateArray::get($ciagusimogciiumg, substr($eusockqasqqmoess, 0, 6), 0); if (!($qgiocsakoiaswkou === $qmomekeesaiaoegu)) { goto sqiciiuwmykocycc; } $piuesceqiguuskme = 0; $wgywewwaswowuooi = null; $icuyogeyaokmwusi = null; $momcykaoccoymeig = 0; iomcaiwewsawiamu: if (!($momcykaoccoymeig < 16)) { goto yowsmsiyimmimemc; } $wgywewwaswowuooi = $momcykaoccoymeig % 2 == 0 ? 2 : 1; $icuyogeyaokmwusi = (int) substr($eusockqasqqmoess, $momcykaoccoymeig, 1) * $wgywewwaswowuooi; $piuesceqiguuskme += $icuyogeyaokmwusi > 9 ? $icuyogeyaokmwusi - 9 : $icuyogeyaokmwusi; kiqogmwcgcamwiig: $momcykaoccoymeig++; goto iomcaiwewsawiamu; yowsmsiyimmimemc: $kuuugksiksqcaaaa = $piuesceqiguuskme % 10 == 0; sqiciiuwmykocycc: eequksumcoogyoem: return $kuuugksiksqcaaaa; } }
