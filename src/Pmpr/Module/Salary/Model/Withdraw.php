<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660699ababe7d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\143\x72\145\141\x74\x6f\x72"; const sseuikaiuuscgcge = "\x69\156\143\157\x6d\145\x5f\151\x64"; const msoeaooscimowuyw = "\160\141\x79\x6d\x65\156\x74\137\x69\144"; const cmiegiycgiucucgs = "\x72\145\161\165\145\163\164\x5f\151\x64"; const owmueawayysqcsqo = "\142\141\x6e\x6b\137\141\143\143\157\x75\156\x74"; const aioqyewkwawaqgqe = "\141\155\x6f\165\x6e\164"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->eesuqwkusmukgwma()->yioesawwewqaigow(IconInterface::gucgemsgiqmwqwgu)->guiaswksukmgageq(__("\x57\151\x74\x68\x64\x72\x61\x77", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\127\151\164\x68\144\162\x61\x77\163", PR__MDL__SALARY))->ckaeqgiaiqwsccke(7)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qoemykoeuecmsmwe(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\x72\x65\x61\164\x6f\162", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\x50\x65\156\144\x69\x6e\x67\40\x50\141\x79\155\x65\156\x74", PR__MDL__SALARY))->kesomeowemmyygey(2, self::cwiummueqsucqayc, __("\101\x63\143\145\160\164\145\x64", PR__MDL__SALARY))->kesomeowemmyygey(3, self::ayucqsmaykqegwqo, __("\122\x65\146\x75\x73\145\x64", PR__MDL__SALARY))->gswweykyogmsyawy(__("\x53\164\x61\164\x75\x73", PR__MDL__SALARY)), $this->usqseiuaeauwuwus(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x42\141\156\153\x20\101\143\143\x6f\x75\156\164\40\111\x6e\146\157\162\155\x61\164\x69\157\x6e", PR__MDL__SALARY)), $this->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->gswweykyogmsyawy(__("\x52\x65\x71\165\x65\163\164\x73", PR__MDL__SALARY))->ckmqkgwcusyaegmm()->kkeymosoimmgsaug(), $this->eoaomaokwkwqyqiq(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\x49\156\x63\x6f\155\145\163", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->eoaomaokwkwqyqiq(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\141\x79\155\145\x6e\x74", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->uccuieiyckcoaqsk()->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ciywsqoeiymemsys))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::msoeaooscimowuyw)->omsoosuoikgueyke())); } public function gascwoasakiqyumc($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo, true)); if (!$siykeiywomwwuoiw) { goto ocokwuuquaokmasc; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); ocokwuuquaokmasc: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto yiwiqaqmwiogawym; } $mksyucucyswaukig->amount = 0; yiwiqaqmwiogawym: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto usqgaogkqgemuima; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto wcesymwqykqoyuqk; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); wcesymwqykqoyuqk: goto mswsoaimesegiiic; usqgaogkqgemuima: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); mswsoaimesegiiic: goto goacqqsgaaigyuaw; case self::owskgkyceomsskgm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([self::squoamkioomemiyi => self::meksegaoamowuwoq, self::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); goto goacqqsgaaigyuaw; case self::ciywsqoeiymemsys: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto egasokooagakisiy; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->gascwoasakiqyumc($eqgoocgaqwqcimie)); egasokooagakisiy: goto goacqqsgaaigyuaw; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); goto goacqqsgaaigyuaw; } meawswgwagoqgkye: goacqqsgaaigyuaw: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($ckeskcacgiywwoua <= 0) { goto igymseewwyiocoug; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\40\141\154\x72\145\141\x64\x79\40\x68\x61\166\x65\x20\x61\x20\167\x69\x74\x68\x64\162\x61\x77\x20\x77\151\164\150\x20\x25\x73\x20\x73\x74\141\164\x75\x73\x2e", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($this->gascwoasakiqyumc(self::sgoswgskyiiwkyuo))); goto mqccmesakuemceqi; igymseewwyiocoug: if ($ywqqikcsamcaycgm) { goto cgewcsueoyaeikgm; } $uamcoiueqaamsqma = __("\x41\147\162\x65\x65\x6d\145\x6e\164\40\156\157\x74\x20\x66\157\165\156\x64\56", PR__MDL__SALARY); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::youiiwsayswmyuum]); $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto ygkcacsyyckescqs; } $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\162\x20\x72\x65\161\x75\x65\163\x74\x65\144\x20\x61\x6d\x6f\165\156\x74\40\50\45\163\x29\40\151\x73\40\x6c\x65\x73\163\x20\x74\x68\x61\156\40\171\x6f\165\162\x20\141\x67\162\145\145\155\x65\x6e\164\40\142\141\x6c\141\156\143\145\40\164\150\162\x65\x73\150\x6f\x6c\144\x20\x28\x25\x73\51\56", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($gkimsiseuqckqkso)), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($ygeuioagqoqumwuw))); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: if ($cseccogesusskess) { goto ickcmqoiosquugwe; } $uamcoiueqaamsqma = sprintf(__("\131\157\x75\x20\144\157\156\47\164\40\x68\141\166\x65\x20\x61\x6e\x79\40\x69\156\143\157\155\145\40\x75\156\x74\151\154\40\x6e\x6f\167\54\x20\167\x69\164\x68\x20\163\164\x61\x74\165\163\40\45\163\56", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($ogekyekymoyuywog->iowygaiuiqkqimio($ogekyekymoyuywog::youiiwsayswmyuum))); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ycmomqymkecsysum]); qgegkeomwscwwiuw: } kecwuwwcwokuksyq: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); if ($euakemkgmcigqycw = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::ckmqoekmugkggeym)) { goto goeoymmqqqeeoime; } $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\103\141\x6e\x20\156\x6f\x74\40\x61\144\144\40\141\40\156\x65\x77\x20\x77\151\164\150\x64\x72\x61\167\x3a\x20\x25\163", PR__MDL__SALARY), implode("\x3c\142\162\57\76", $ueeagokqmgisgauy)); goto eiawsoasmscmqswa; goeoymmqqqeeoime: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\131\x6f\165\x72\x20\167\x69\x74\x68\x64\162\141\167\x20\x69\163\x20\x73\x75\142\155\x69\x74\164\145\x64\x20\163\165\143\143\145\x73\x73\146\x75\154\x6c\x79\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\x43\141\x6e\x20\156\x6f\x74\x20\163\x61\x76\x65\x20\x72\145\x6c\x61\164\151\157\156\x20\163\x68\x69\x70\x3a\40\x25\163", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto qmiwsequckckoaei; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } qmiwsequckckoaei: eiawsoasmscmqswa: qmeoaqmsuseueqiy: cuoqqgaygogsmmic: sukskmcwsoysiuqu: mqccmesakuemceqi: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
