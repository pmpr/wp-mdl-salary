<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb290a4519             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\143\x72\145\x61\x74\157\162"; const sseuikaiuuscgcge = "\151\x6e\x63\x6f\x6d\x65\x5f\x69\x64"; const msoeaooscimowuyw = "\160\141\x79\155\x65\x6e\164\x5f\x69\144"; const owmueawayysqcsqo = "\142\141\156\153\137\x61\x63\143\157\x75\x6e\x74"; const aioqyewkwawaqgqe = "\x61\155\157\165\x6e\x74"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\127\x69\x74\x68\x64\162\141\167", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\127\x69\164\x68\x64\x72\x61\167\x73", PR__MDL__SALARY))->ckaeqgiaiqwsccke(3)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(["\155\145\x6e\165\x5f\164\151\164\154\145" => __("\101\154\x6c\x20\127\x69\164\150\x64\162\x61\167\x73", PR__MDL__SALARY)]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\x4f\x77\x6e\145\162", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\x72\145\x61\164\157\x72", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\x53\x74\x61\x74\165\x73", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\141\156\x6b\x20\x41\143\x63\x6f\165\x6e\164\40\x49\x6e\x66\x6f\x72\x6d\x61\x74\x69\x6f\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\x6e\143\157\155\x65\163", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\x61\171\155\145\156\x74", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\157\x6c" => "\155\x64\55\x36\40\154\x67\x2d\x33", "\164\171\x70\x65" => "\142\163\163\145\x6c\x65\x63\x74", "\157\160\x74\x69\157\x6e\163" => $this->agausceiyceikeag(), "\162\145\161\x75\x69\x72\x65\144"], self::msoeaooscimowuyw => ["\143\x6f\x6c" => "\x31\x32", "\x74\171\160\x65" => "\147\x72\157\165\x70", "\164\167\157\55\x63\157\154\165\155\156"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\120\x65\156\144\x69\x6e\147\40\x50\x61\x79\x6d\145\x6e\164", PR__MDL__SALARY), self::cwiummueqsucqayc => __("\101\143\143\x65\160\164\145\x64", PR__MDL__SALARY), self::ayucqsmaykqegwqo => __("\x52\145\146\x75\x73\145\x64", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto ugykmcouiwiscoqu; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); ugykmcouiwiscoqu: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto isewysikysqewkis; } $mksyucucyswaukig->amount = 0; isewysikysqewkis: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto sqwuqegeiisoiiuq; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto eouwacqiommmeaqc; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); eouwacqiommmeaqc: goto uscokkmquayiukag; sqwuqegeiisoiiuq: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); uscokkmquayiukag: goto wiwoiyoakywqyaiy; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ykqsuiyyosyeyscc; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\x64\151\x73\160\x6c\x61\171\137\x6e\x61\x6d\145", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ykqsuiyyosyeyscc: goto wiwoiyoakywqyaiy; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ugogoekeckgcmuaw; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ugogoekeckgcmuaw: goto wiwoiyoakywqyaiy; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto wiwoiyoakywqyaiy; } igmmqwyawcuuckkq: wiwoiyoakywqyaiy: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\x76\151\x65\x77") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\75", clone $siykeiywomwwuoiw)]; syusgosewwkoagoq: } egesuwkqkmaigaoe: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto qkyciyiwkmgkmquk; } $uamcoiueqaamsqma = sprintf(__("\x59\157\x75\40\x61\154\162\145\x61\x64\x79\x20\150\141\x76\x65\x20\141\40\x77\x69\164\x68\144\162\141\x77\x20\167\x69\x74\x68\x20\x25\163\40\x73\x74\141\x74\x75\163\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto sksgcusuyqcwqswe; qkyciyiwkmgkmquk: if ($ywqqikcsamcaycgm) { goto esagiiawomyacuiw; } $uamcoiueqaamsqma = __("\101\x67\x72\x65\x65\155\x65\x6e\164\40\156\157\x74\x20\x66\157\165\x6e\x64\x2e", PR__MDL__SALARY); goto maaisuqwkymeguys; esagiiawomyacuiw: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::woagckamiequeoyu => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ugswgyqgycqguios]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto gqimwsyemoewagcy; } $uamcoiueqaamsqma = sprintf(__("\131\x6f\165\x72\40\162\145\161\165\x65\163\x74\145\x64\x20\x61\155\x6f\165\156\164\x20\x28\x25\163\51\40\151\x73\x20\154\145\x73\163\x20\x74\150\141\x6e\40\x79\157\165\162\x20\x61\x67\162\145\x65\x6d\x65\156\x74\40\x62\x61\154\x61\x6e\x63\x65\40\164\150\x72\145\x73\x68\157\x6c\x64\40\50\45\163\51\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto aoaqwygkaagiuuws; gqimwsyemoewagcy: if ($cseccogesusskess) { goto kyiwsiakwgiwouyi; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\x20\144\x6f\x6e\x27\164\40\x68\x61\x76\x65\x20\x61\156\x79\x20\151\156\143\157\x6d\145\40\165\156\x74\151\154\40\x6e\157\x77\x2c\40\167\x69\164\x68\40\x73\164\141\164\165\x73\40\x25\x73\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::ugswgyqgycqguios))); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::aquouykoyqcwccay]); eweaaismksecwagy: } mcqucouuiuoagqwc: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\157\x62\152\145\143\x74"); if ($euakemkgmcigqycw instanceof Withdraw) { goto oeamoqweiueaueay; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\x43\x61\x6e\40\156\x6f\164\x20\x61\x64\144\x20\141\x20\156\x65\167\40\167\151\x74\150\x64\162\x61\167\x3a\x20\x25\163", PR__MDL__SALARY), implode("\74\142\162\x2f\x3e", $ueeagokqmgisgauy)); goto owgsameoayaogsma; oeamoqweiueaueay: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\131\x6f\165\162\x20\x77\x69\x74\150\144\162\141\167\x20\151\x73\40\x73\x75\x62\x6d\x69\164\164\x65\144\x20\x73\165\x63\143\x65\x73\x73\x66\165\154\154\x79\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\x61\x6e\40\156\x6f\164\40\x73\141\x76\145\x20\x72\x65\154\x61\x74\x69\157\x6e\40\x73\x68\x69\x70\x3a\40\x25\x73", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto icumkkykaoqycqqu; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } icumkkykaoqycqqu: owgsameoayaogsma: awgmegueeqeyqamu: aoaqwygkaagiuuws: maaisuqwkymeguys: sksgcusuyqcwqswe: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
