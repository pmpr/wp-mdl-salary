<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267af4cc8f98             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\x63\x72\145\141\x74\157\x72"; const sseuikaiuuscgcge = "\x69\156\143\x6f\155\x65\x5f\151\144"; const msoeaooscimowuyw = "\x70\x61\171\x6d\145\156\x74\137\x69\x64"; const cmiegiycgiucucgs = "\162\145\x71\x75\x65\163\x74\137\151\x64"; const owmueawayysqcsqo = "\142\141\156\x6b\x5f\x61\143\143\157\x75\156\164"; const aioqyewkwawaqgqe = "\x61\x6d\x6f\165\156\x74"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->eesuqwkusmukgwma()->yioesawwewqaigow(IconFontawesomeInterface::iguwuwgqymyiyoee)->guiaswksukmgageq(__("\127\151\x74\150\x64\162\141\x77", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x57\x69\x74\x68\144\162\141\x77\163", PR__MDL__SALARY))->ckaeqgiaiqwsccke(7)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\x4f\167\156\145\x72", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\162\x65\x61\164\157\162", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\123\x74\x61\164\x75\163", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\141\x6e\x6b\x20\x41\143\143\157\165\x6e\x74\40\111\x6e\146\x6f\162\x6d\141\164\x69\x6f\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->gswweykyogmsyawy(__("\x52\145\x71\x75\145\x73\x74\163", PR__MDL__SALARY))->ckmqkgwcusyaegmm()->kkeymosoimmgsaug(), $this->ggiieomioscuigco(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\x6e\x63\x6f\x6d\x65\163", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\120\141\x79\155\x65\156\x74", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\x6f\154" => "\155\144\55\x36\40\x6c\x67\55\63", "\164\171\160\145" => "\142\163\x73\145\154\x65\143\164", "\x6f\160\x74\151\x6f\156\163" => $this->agausceiyceikeag(), "\162\145\161\x75\151\162\x65\144"], self::msoeaooscimowuyw => ["\x63\x6f\x6c" => "\x31\62", "\164\x79\160\x65" => "\x67\x72\x6f\165\160", "\164\x77\x6f\x2d\143\x6f\154\165\x6d\x6e"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\120\x65\156\144\151\156\x67\40\120\141\171\x6d\x65\156\x74", PR__MDL__SALARY), self::cwiummueqsucqayc => __("\101\143\x63\x65\x70\x74\x65\x64", PR__MDL__SALARY), self::ayucqsmaykqegwqo => __("\x52\x65\x66\165\163\145\144", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto omuauimgkygcecsc; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); omuauimgkygcecsc: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto wwcqoeuwskquakwy; } $mksyucucyswaukig->amount = 0; wwcqoeuwskquakwy: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto mugscgugcogcasue; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto iymaiwqimisgacmk; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); iymaiwqimisgacmk: goto qyyyycwaookqaoke; mugscgugcogcasue: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); qyyyycwaookqaoke: goto quamuugoocyyceec; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ssywsaaqqaucesau; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\x64\151\x73\160\x6c\x61\x79\137\156\141\155\x65", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ssywsaaqqaucesau: goto quamuugoocyyceec; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ygcgoaokauigwuus; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ygcgoaokauigwuus: goto quamuugoocyyceec; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto quamuugoocyyceec; } qcssigmcayuyweiy: quamuugoocyyceec: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\x76\151\x65\x77") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\75", clone $siykeiywomwwuoiw)]; auumaoycmsmsgigs: } ysiqakyaiooyscwy: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto giugwaeuwaomossq; } $uamcoiueqaamsqma = sprintf(__("\x59\157\x75\x20\x61\154\162\145\141\144\x79\x20\150\141\166\x65\40\x61\40\167\x69\164\x68\144\162\141\x77\x20\167\x69\164\150\x20\45\x73\x20\163\164\x61\x74\x75\163\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto acgqaeakoyasgkku; giugwaeuwaomossq: if ($ywqqikcsamcaycgm) { goto yoqsigmoyaaceqky; } $uamcoiueqaamsqma = __("\101\x67\x72\145\145\x6d\x65\x6e\164\x20\x6e\157\x74\x20\146\x6f\x75\x6e\144\x2e", PR__MDL__SALARY); goto suqckoccuyeeymww; yoqsigmoyaaceqky: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ugswgyqgycqguios]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto masakmomqmeocqqg; } $uamcoiueqaamsqma = sprintf(__("\x59\157\x75\162\x20\162\x65\161\x75\145\163\x74\145\x64\x20\141\155\x6f\x75\x6e\164\40\50\45\163\51\x20\x69\x73\x20\x6c\145\163\163\40\164\x68\141\156\x20\x79\157\165\162\40\141\x67\162\x65\145\x6d\x65\x6e\164\x20\142\x61\154\141\x6e\143\145\x20\164\x68\162\x65\163\x68\x6f\x6c\x64\40\x28\x25\163\x29\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto yksywwikmeksikqc; masakmomqmeocqqg: if ($cseccogesusskess) { goto yqcusaeysomccaok; } $uamcoiueqaamsqma = sprintf(__("\131\157\x75\40\144\x6f\156\x27\x74\40\x68\x61\x76\145\x20\x61\156\171\40\x69\156\x63\x6f\x6d\x65\40\x75\x6e\x74\151\154\40\x6e\157\x77\x2c\40\167\151\x74\x68\40\163\x74\141\164\x75\x73\x20\45\163\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::ugswgyqgycqguios))); goto iwkckkeimmeoquyq; yqcusaeysomccaok: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::aquouykoyqcwccay]); qeuyekusasqmcqms: } ousmyagwsiooumos: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\157\142\x6a\145\143\164"); if ($euakemkgmcigqycw instanceof Withdraw) { goto sgocecweikecwwgq; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\x43\141\156\40\156\157\x74\40\141\144\144\x20\x61\40\x6e\x65\167\x20\x77\151\164\150\x64\162\141\167\72\x20\x25\163", PR__MDL__SALARY), implode("\x3c\x62\x72\x2f\76", $ueeagokqmgisgauy)); goto qwisiamkmkkwucyo; sgocecweikecwwgq: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\x59\x6f\x75\x72\40\167\x69\x74\150\x64\x72\x61\167\x20\151\163\40\x73\x75\x62\x6d\x69\164\x74\x65\x64\x20\163\x75\143\x63\x65\x73\163\146\x75\154\x6c\171\56", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\x61\x6e\40\156\x6f\x74\40\x73\x61\166\x65\x20\x72\x65\x6c\141\164\151\157\156\x20\x73\150\151\160\72\x20\x25\x73", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto yiceawuuiusakwiq; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } yiceawuuiusakwiq: qwisiamkmkkwucyo: iwkckkeimmeoquyq: yksywwikmeksikqc: suqckoccuyeeymww: acgqaeakoyasgkku: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
