<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639786521a0b5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; class User extends Container { protected ?Validator $validator = null; public function mmymimkumuekmmgi() : ?Validator { return $this->validator; } public function __construct() { $this->validator = Validator::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\x73\x68\x6f\167\x5f\165\163\x65\x72\x5f\x70\x72\157\x66\151\154\145", [$this, "\141\167\153\161\x6b\x71\141\x75\167\167\165\x71\147\x65\167\x75"])->qcsmikeggeemccuu("\145\144\x69\x74\137\165\x73\145\162\137\160\162\x6f\146\151\x6c\x65", [$this, "\x61\x77\x6b\x71\153\161\x61\165\167\x77\165\x71\x67\145\167\165"])->qcsmikeggeemccuu("\160\x65\162\163\x6f\x6e\x61\x6c\x5f\157\x70\164\x69\157\156\163\x5f\165\x70\144\x61\164\x65", [$this, "\x6d\x73\x79\163\147\x71\145\x65\167\x6b\x71\x67\x73\x63\167\145"])->qcsmikeggeemccuu("\x65\144\x69\x74\x5f\165\x73\145\162\x5f\160\x72\157\x66\x69\154\145\x5f\165\x70\144\x61\x74\x65", [$this, "\x6d\x73\x79\x73\147\161\145\x65\167\153\x71\x67\x73\143\167\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\157\155\155\x65\162\x63\x65\x5f\144\151\x73\x61\142\x6c\x65\137\x61\144\155\151\x6e\x5f\142\x61\x72", [$this, "\145\157\x73\163\155\157\x79\x67\x73\145\151\x65\x6b\145\167\161"]); parent::kgquecmsgcouyaya(); } public function init() { DecoratorUser::secqmksoyausymio(self::yuqaieqcaccggqck, __("\103\157\x6c\x6c\x61\142\157\162\141\164\157\162", PR__MDL__SALARY), ["\x72\145\x61\x64" => true]); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($eygsasmqycagyayw && ManipulateUser::eoyueosccuoeqkee())) { goto wgewmqieuamsoayy; } if (!($uqyaagwcuoewkkss = Validator::symcgieuakksimmu())) { goto ugqaaewwmkocwwgy; } $kgkkgoqacescqgsy = __("\111\x74\47\x73\40\156\x6f\164\40\141\40\x76\x61\154\151\144\x20\45\163", PR__MDL__SALARY); $oucioakwecwsakic = __("\x50\154\145\141\x73\x65\x20\163\x65\x6c\145\x63\x74\40\x61\x20\x25\163", PR__MDL__SALARY); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x75\x73\145\x72", $eygsasmqycagyayw->get("\165\163\x65\162\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\x71\x75\145\x72\x79"))->ikqyiskqaaymscgw("\155\x65\163\163\x61\x67\145\x73", ["\151\156\166\141\154\151\x64" => ["\141\144\144\x5f\x6e\145\167" => $this->imqmyggquiyewkww(__("\x53\x6f\162\162\x79\x2c\40\171\157\165\x20\143\141\x6e\x20\x6e\x6f\x74\40\141\144\x64\40\156\x65\167\40\142\x61\x6e\153\x20\x69\x6e\x66\x6f\54\40\163\157\x6d\x65\40\160\162\145\x76\151\x6f\165\163\x20\151\x74\145\155\x20\151\163\x20\156\157\x74\x20\166\141\x6c\x69\144\56", PR__MDL__SALARY), ["\143\x6c\x61\163\x73" => "\155\x6c\55\x32"]), self::oogeqgcgkamuoaoe => sprintf($oucioakwecwsakic, __("\x42\x61\x6e\x6b", PR__MDL__SALARY)), self::iockmgiyoygcswog => sprintf($kgkkgoqacescqgsy, __("\117\x77\x6e\x65\x72", PR__MDL__SALARY)) . "\x2e\40" . sprintf(__("\120\154\x65\141\163\145\40\145\x6e\x74\x65\162\x20\141\164\40\x6c\x65\x61\163\x74\x20\x25\163\40\143\x68\141\x72\x61\x63\x74\145\162\163", PR__MDL__SALARY), $this->msywmyaoqmaegsuy(6)), self::wyqmcowecikgawuu => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu)), self::squoamkioomemiyi => sprintf($oucioakwecwsakic, __("\x41\x63\143\157\x75\x6e\164\40\x49\x6e\x66\x6f\x72\x6d\141\164\x69\157\x6e\40\x54\x79\x70\x65", PR__MDL__SALARY)), self::skyceaacaaaamiii => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii)), "\142\x61\x6e\x6b\137\x6e\157\164\x5f\144\x65\x74\x65\143\164\x65\144" => __("\131\x6f\x75\x72\x20\x61\143\143\157\x75\156\x74\40\163\160\x65\x63\x69\146\x69\143\141\x74\151\157\x6e\x73\x20\156\x6f\164\x20\x73\165\160\160\157\162\164\145\144\x2c\40\x70\154\x65\141\163\145\x20\x61\144\144\40\151\x6e\x66\157\x72\x6d\141\164\x69\x6f\156\x20\x62\141\163\x65\144\40\157\x6e\x20\163\x75\160\x70\157\x72\164\145\144\x20\x62\141\x6e\153\163\56", PR__MDL__SALARY), "\x64\x75\160\x6c\x69\x63\141\x74\x65\137\163\160\x65\x63\x69\146\151\x63\141\x74\151\x6f\156" => __("\x53\157\162\162\x79\x2c\x20\x74\x68\151\x73\x20\166\x61\154\165\x65\x20\141\x6c\162\x65\141\144\x79\x20\x65\170\x69\163\164\x20\151\156\40\x70\x72\x65\166\x69\x6f\x75\163\40\151\164\145\x6d\163\56", PR__MDL__SALARY)]])->ikqyiskqaaymscgw("\160\162\x65\x66\x69\x78\145\x73", [self::wyqmcowecikgawuu => $uqyaagwcuoewkkss->cyuweacmssmikssi(), self::skyceaacaaaamiii => $uqyaagwcuoewkkss->cmkgoqaaysaasiom()]); ugqaaewwmkocwwgy: wgewmqieuamsoayy: } public function eossmoygseiekewq($ikcaescyugmgiegq) { if (!DecoratorUser::scmcyesmmikkucie(self::yuqaieqcaccggqck)) { goto kqgcyoscsusgoaqi; } $ikcaescyugmgiegq = false; kqgcyoscsusgoaqi: return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { if (!($uqyaagwcuoewkkss = $this->mmymimkumuekmmgi())) { goto owmuceyswmgueasi; } $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce, "\151\x6e\x64\x65\x78"); $ikgwqyuyckaewsow = [MetaBox::iseogkiymousogom(self::qagqayweyigciamg, __("\102\141\x6e\153\x20\x41\143\143\x6f\x75\x6e\x74\40\111\x6e\x66\157\162\155\141\164\x69\x6f\x6e", PR__MDL__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::oogeqgcgkamuoaoe)->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\101\x63\143\157\165\x6e\x74\40\x49\x6e\146\157\162\x6d\x61\x74\x69\x6f\156\x20\124\x79\160\x65", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw([self::ymckmcsiymwqucoq => self::oogeqgcgkamuoaoe, self::sssoieywiewykmam => $this->uyocacmiaawcwkyy()])->oeeumggeiyyckkom(self::wyqmcowecikgawuu, self::wyqmcowecikgawuu)->oeeumggeiyyckkom(self::skyceaacaaaamiii, self::skyceaacaaaamiii)->qigsyyqgewgskemg("\141\143\143\x6f\x75\x6e\x74\55\x74\171\x70\x65")->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::skyceaacaaaamiii, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii))->wykoackkeuuqeyss()->qigsyyqgewgskemg("\x63\x61\x72\x64\55\166\x61\x6c\165\145"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::wyqmcowecikgawuu, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu))->uagmgmommooaewkk()->qigsyyqgewgskemg("\x69\x62\141\156\x2d\x76\x61\x6c\x75\145"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::iockmgiyoygcswog, __("\101\143\143\157\x75\x6e\x74\40\117\x77\x6e\x65\162\40\x4e\x61\x6d\x65", PR__MDL__SALARY))->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x61\143\x63\157\x75\156\164\x2d\157\167\x6e\145\x72"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::wagwccqcqwgsoyoi)->qigsyyqgewgskemg("\x61\143\x63\x6f\165\156\x74\55\154\157\143\x6b\145\x64"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->qigsyyqgewgskemg("\143\157\x6c\x2d\x78\154\55\x34")->iygyugseyaqwywyg($ygikoqaokckisawo)]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wakmayaoqoskekqy; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $aiowsaccomcoikus->usuqmwksoeaayaig(''); $woiqcqksaumcwwuc = self::uissasisiuymwsmu; if (!$aiowsaccomcoikus instanceof Group) { goto wkeuuycukmuqiaom; } $woiqcqksaumcwwuc = self::qescuiwgsyuikume; wkeuuycukmuqiaom: $ikgwqyuyckaewsow[$momcykaoccoymeig] = [$woiqcqksaumcwwuc => $ymqmyyeuycgmigyo, self::gouqcwikiiygyasc => $aiowsaccomcoikus->mwikyscisascoeea(), self::gsqoooskigukokks => $aiowsaccomcoikus->render()]; wakmayaoqoskekqy: sggawugoykqcmsug: } ueigkucgaucgeimc: if (!$ikgwqyuyckaewsow) { goto qmuwoecuacmkwgem; } echo $this->iuygowkemiiwqmiw("\160\x72\x6f\x66\151\154\x65", [self::qescuiwgsyuikume => __("\111\x6e\143\157\155\145\x20\141\156\x64\x20\120\x61\171\x6d\145\x6e\x74", PR__MDL__SALARY), self::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); qmuwoecuacmkwgem: owmuceyswmgueasi: } public function msysgqeewkqgscwe($mkucggyaiaukqoce, $ygikoqaokckisawo = []) { $oammesyieqmwuwyi = []; if ($ygikoqaokckisawo) { goto mwsmsguqqkcwiiuk; } $ygikoqaokckisawo = ManipulateServer::ayueggmoqeeukqmq(self::qagqayweyigciamg, []); mwsmsguqqkcwiiuk: if (!($ygikoqaokckisawo && is_array($ygikoqaokckisawo))) { goto qoqskyuuwueqkquk; } $gwscsiewquwmkkgu = $this->guimqgyewioyekuy($mkucggyaiaukqoce, self::wagwccqcqwgsoyoi); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $igqsaukqcqscimok = $this->aceogymkeuswukyi($eiwicgsqoiaeawkk); if (!($igqsaukqcqscimok && !is_wp_error($igqsaukqcqscimok) && ($uusmaiomayssaecw = $igqsaukqcqscimok[self::ascagqcquwgmygkm]) && !isset($gwscsiewquwmkkgu[$uusmaiomayssaecw]))) { goto msemumccgceyugmg; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; msemumccgceyugmg: eogwckcymuugikuy: } eeauyscekuckoues: if (!$gwscsiewquwmkkgu) { goto wagqgeqymeqoeuyi; } $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; wagqgeqymeqoeuyi: $this->ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce); qoqskyuuwueqkquk: } public function aceogymkeuswukyi($eiwicgsqoiaeawkk) { $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); if (!ManipulateArray::uuegkqwagymmusiy($eiwicgsqoiaeawkk, [self::squoamkioomemiyi, self::iockmgiyoygcswog, self::oogeqgcgkamuoaoe])) { goto ciykoyeioqgyaeqo; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\x6f\155\145\40\x72\145\161\x75\x69\162\x65\x20\x70\141\162\141\x6d\145\x74\x65\162\x73\x20\x69\x73\40\155\x69\163\x73\151\156\x67", PR__MDL__SALARY)); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace("\x20", '', $eqgoocgaqwqcimie); if ($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu)) { goto wcugqegqsuuuwqao; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\102\x61\156\x6b\x20\151\163\x20\x6e\x6f\164\x20\x73\165\160\x70\157\162\164\145\144", PR__MDL__SALARY)); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $sogksuscggsicmac = $uqyaagwcuoewkkss->kuuugksiksqcaaaa([self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (is_wp_error($sogksuscggsicmac)) { goto iwsuawwqomaowuii; } $sogksuscggsicmac = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu, self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::wagwccqcqwgsoyoi => false, self::cqkcksqwkcsiykuq => $ygogqywsaqoukoqy]; iwsuawwqomaowuii: asiqwuoswmigcaki: mqicocmqegwukkwg: return $sogksuscggsicmac; } public function ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce) { if (!$oammesyieqmwuwyi) { goto qgeugwymkkiacwoc; } $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); qgeugwymkkiacwoc: return ManipulateUser::ksmqawcowkmegigw(self::qagqayweyigciamg, $oammesyieqmwuwyi, $mkucggyaiaukqoce); } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto emmsycooskoqmgeg; } $eiwicgsqoiaeawkk[self::wagwccqcqwgsoyoi] = true; $ygikoqaokckisawo[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; $this->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce); emmsycooskoqmgeg: } public function kkqikgwyqqmukogk($miowmmgaiagcuyoo, $uusmaiomayssaecw) : string { $eiwicgsqoiaeawkk = $this->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $uusmaiomayssaecw); $ymqmyyeuycgmigyo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); return sprintf("\x25\163\40\x28\x25\163\51", $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function ogimyyckeeygkmyc($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); return ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw, false); } public function guimqgyewioyekuy($mkucggyaiaukqoce, $aqykuigiuwmmcieu = self::ALL) : array { $sogksuscggsicmac = []; $ygikoqaokckisawo = ManipulateUser::igawqaomowicuayw(self::qagqayweyigciamg, $mkucggyaiaukqoce, true); if (!(is_array($ygikoqaokckisawo) && $ygikoqaokckisawo)) { goto guykyqecgswcsmws; } foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $eiwicgsqoiaeawkk[self::ciyoccqkiamemcmm] = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi, ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq)); if ($aqykuigiuwmmcieu === "\151\x6e\x64\145\170") { goto samwkqgwouggsguc; } if (!($aqykuigiuwmmcieu === self::ALL || ManipulateArray::get($eiwicgsqoiaeawkk, $aqykuigiuwmmcieu, false))) { goto oomguqikqokqwgku; } $uusmaiomayssaecw = ManipulateArray::get($eiwicgsqoiaeawkk, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto acsqgiuageaasiyy; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; acsqgiuageaasiyy: oomguqikqokqwgku: goto wyuemgggaqogsmsq; samwkqgwouggsguc: $sogksuscggsicmac[] = $eiwicgsqoiaeawkk; wyuemgggaqogsmsq: mugqyyeayeyggqqk: } ouamogymawucwswu: guykyqecgswcsmws: return $sogksuscggsicmac; } public function uyocacmiaawcwkyy() : array { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; if (!is_array($aacykmqwasyaykgu)) { goto aomysykcgikegiau; } foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); if (!($qgeeqyucwycemwmo && $aqsekqkimiekimei)) { goto ikqqskkqqwmwssoo; } foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); iwekmyyccgiyuecc: } ogsaaqsaogcqiouy: ousiuuwgwkiyikyq: } kqqiegkuqagcqsya: ikqqskkqqwmwssoo: miweggwqeiaeweia: } kkumywowcoycymeo: aomysykcgikegiau: return array_filter($qecuekqmeaiykeek); } public function uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm = "\142\x61\156\153\x5f\151\x6e\146\x6f\163") : array { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $qecuekqmeaiykeek = $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; if (!$ygikoqaokckisawo) { goto gicyayswqyuoekcq; } $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); foreach ($ygikoqaokckisawo as $uusmaiomayssaecw => $eiwicgsqoiaeawkk) { $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); if (!($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo)) { goto kosaqwikueyksqmw; } $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$uusmaiomayssaecw] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$uusmaiomayssaecw] = sprintf("\x25\163\x20\x2d\40\x25\163", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto mqkmcysgoiaouiwm; } $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $uusmaiomayssaecw]); mqkmcysgoiaouiwm: ykomgumacooyomsk: } ogqmesokykywseys: kosaqwikueyksqmw: awoaooyoeoyeeqee: } cwwmimggaaecmucw: gicyayswqyuoekcq: return [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg]; } public function ysqqicckeiweemmu($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\141\x6e\x6b\x5f\x69\156\x66\x6f\x73") : ?Select { $gmksciycsesoouoi = null; [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = $this->uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm); if (!($ykiyyumywksqcisg && $iwkyyocymeukcceu)) { goto iikiiioqiyegyaak; } $gmksciycsesoouoi = MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->wmwikuasuocmqycw([self::sssoieywiewykmam => $qecuekqmeaiykeek])->qigsyyqgewgskemg("\167\55\x6d\x64\x2d\x31\x30\x30")->usuqmwksoeaayaig(__("\102\141\x6e\x6b\40\x41\x63\x63\157\165\156\164\40\x49\156\x66\x6f\162\155\141\x74\x69\157\156", PR__MDL__SALARY)); iikiiioqiyegyaak: return $gmksciycsesoouoi; } }
