<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb290a4519             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; class Payment extends Common { const gkiqougcwigqqcos = "\144\x65\x64\x75\143\x74"; const wogsoiqickwekywu = "\x70\x61\171\157\x75\164"; const owskgkyceomsskgm = "\143\162\x65\141\x74\x6f\x72"; const qyeimiaoamokwygy = "\167\151\x74\x68\x64\162\x61\x77\137\x69\x64"; const aeikseqkgeyemmis = "\x6f\x72\151\x67\151\x6e\137\144\x65\163\143"; const kmgieuiymcguqmka = "\x72\145\146\x65\162\x65\x6e\143\145\137\x69\x64"; const sgsawoooocqwouiy = "\x74\x72\141\143\153\x69\156\147\x5f\x63\157\144\x65"; const qcqyuwsagkuqymwq = "\x74\162\x61\156\163\x5f\144\x61\x74\145\164\x69\x6d\x65"; const kimkegwygaiggcmo = "\x6f\162\151\147\x69\156\x5f\141\x63\x63\157\165\156\164"; const kiwayowcwgkswqiw = "\x64\145\163\164\151\x6e\x61\x74\x69\x6f\156\137\x64\145\163\x63"; const yekmyiokocomasqi = "\146\x61\x69\154\x65\x64"; const soeemwaicsiweqyo = "\x73\x75\143\143\145\x73\x73"; const umegccguweookqyu = "\141\x74\x6d"; const mouesqeemeaaukyu = "\141\160\151"; const keagmesmwegcscka = "\160\x61\x79\141"; const oiyyoggwuogoeywy = "\x73\x61\164\x6e\141"; const mqmqsemegeeckcoi = "\155\157\x62\151\154\x65\x5f\x62\x61\156\x6b"; public function ckgmycmaukqgkosk() { $this->showTimestamp = false; parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->ckaeqgiaiqwsccke(4)->guiaswksukmgageq(__("\x50\x61\171\155\145\x6e\x74", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\120\x61\x79\155\145\x6e\164\x73", PR__MDL__SALARY))->gemkqqguesukeocw()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::wogsoiqickwekywu)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\120\x61\171\x6f\x75\164", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\123\164\141\164\165\163", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\x72\x65\x61\164\157\x72", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::gcegwkuowcquosok, $this->yoiogykiyuooqcgi())->gswweykyogmsyawy(__("\x54\145\x72\x6d\151\156\141\x6c", PR__MDL__SALARY)), $this->wyauigyyoceiaygw(self::qcqyuwsagkuqymwq)->gswweykyogmsyawy(__("\x54\162\x61\x6e\163\141\143\x74\151\x6f\156\x20\104\x61\x74\145\x74\x69\x6d\x65", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::gkiqougcwigqqcos)->acceqyqygswoecwe(20)->gswweykyogmsyawy(__("\104\x65\144\165\143\164\x73", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::kmgieuiymcguqmka)->acceqyqygswoecwe(10)->gswweykyogmsyawy(__("\122\x65\x66\x65\162\145\156\143\x65\40\111\104", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::sgsawoooocqwouiy)->acceqyqygswoecwe(11)->gswweykyogmsyawy(__("\x54\x72\141\143\153\x69\x6e\147\x20\103\157\x64\x65", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::kimkegwygaiggcmo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\117\x72\151\x67\x69\156\40\101\143\x63\x6f\x75\156\164", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::kiwayowcwgkswqiw)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x44\x65\163\x74\x69\x6e\141\164\151\157\156\40\104\145\x73\x63\162\x69\x70\x74\x69\157\156", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::aeikseqkgeyemmis)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\117\162\x69\147\x69\x6e\x20\104\145\163\143\x72\x69\x70\164\x69\157\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\127\151\164\150\x64\162\141\x77", PR__MDL__SALARY))]); parent::ewaqwooqoqmcoomi(); } public function gcmweiksuqcyskmi($mksyucucyswaukig) { $zomswssgcqowmuoy = Salary::symcgieuakksimmu()->kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); if (!$zomswssgcqowmuoy) { goto yyqygaokeccgugos; } $sqeykgyoooqysmca = ManipulateArray::get($zomswssgcqowmuoy, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = ManipulateArray::get($zomswssgcqowmuoy, Setting::oyyoccawmkogkcyy); $smowyuyseuwiaiei = 0; if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto iuwkiyimqmgguose; } if (!($sqeykgyoooqysmca === Setting::ogkkygkwcccggasw)) { goto ayceeyuocgowqwsa; } $smowyuyseuwiaiei = $eqgoocgaqwqcimie; ayceeyuocgowqwsa: goto yggseoaommssscwo; iuwkiyimqmgguose: $gkimsiseuqckqkso = $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); yggseoaommssscwo: if (!($smowyuyseuwiaiei > 0)) { goto aeiemwacaiygemmg; } aeiemwacaiygemmg: yyqygaokeccgugos: } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\157\x6c" => "\x6d\144\55\x36\x20\x6c\147\x2d\64", "\x74\x79\160\145" => "\x62\x73\x73\x65\x6c\x65\x63\164", "\157\x70\x74\151\x6f\x6e\163" => $this->agausceiyceikeag()], self::gcegwkuowcquosok => ["\x63\x6f\154" => "\155\x64\x2d\66\40\x6c\x67\x2d\64", "\164\x79\160\145" => "\x62\163\163\145\x6c\x65\143\164", "\157\x70\x74\x69\157\156\163" => $this->yoiogykiyuooqcgi()], self::qcqyuwsagkuqymwq => ["\x63\157\154" => "\155\x64\x2d\x36\x20\x6c\147\55\x34"], self::gkiqougcwigqqcos => ["\x63\157\x6c" => "\x6d\x64\x2d\66\40\x6c\x67\55\x34", "\141\163\55\x6d\x6f\156\145\171"], self::kmgieuiymcguqmka => ["\143\157\x6c" => "\x6d\144\x2d\66\x20\154\x67\x2d\x34", "\141\163\55\x6e\165\x6d\142\145\x72"], self::sgsawoooocqwouiy => ["\143\157\x6c" => "\155\x64\x2d\66\x20\x6c\x67\55\x34", "\x61\163\x2d\x6e\x75\155\142\145\162"], self::wogsoiqickwekywu => ["\x63\x6f\154" => "\155\x64\55\66", "\x61\x73\55\x6d\x6f\x6e\x65\x79"], self::kimkegwygaiggcmo => ["\143\157\154" => "\x6d\144\x2d\66", "\164\x79\160\x65" => "\142\x73\163\145\x6c\145\143\164", "\x6f\160\164\x69\157\x6e\163" => Setting::wcwwuuouickuocsa(null, self::emgcgiseaoouacge)], self::owskgkyceomsskgm => ["\x74\171\160\145" => "\x68\151\144\x64\x65\x6e"], self::aeikseqkgeyemmis => ["\143\x6f\x6c" => "\x6c\x67\55\x36", "\162\157\167\x73" => 3], self::kiwayowcwgkswqiw => ["\x63\157\154" => "\x6c\147\x2d\66", "\162\157\x77\x73" => 3]]; } public function oiemcgqyamccuagg($icwicymcioeyeyek = []) { $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, self::owskgkyceomsskgm); if ($eiuuauwyukskgois) { goto oeusomaaeekakake; } $icwicymcioeyeyek[self::owskgkyceomsskgm] = ManipulateUser::mwikyscisascoeea(); oeusomaaeekakake: return parent::oiemcgqyamccuagg($icwicymcioeyeyek); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto sicgyiyiocyygkoc; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->agausceiyceikeag($eqgoocgaqwqcimie)); sicgyiyiocyygkoc: goto kwuckkyqaygwgcuy; case self::gcegwkuowcquosok: $eqgoocgaqwqcimie = $this->yoiogykiyuooqcgi($eqgoocgaqwqcimie); goto kwuckkyqaygwgcuy; case self::owskgkyceomsskgm: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$mkucggyaiaukqoce) { goto ikcwmsgocyuqiumc; } if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto cyosacayacumuaks; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\163\160\x6c\x61\171\137\x6e\x61\155\x65", true)); cyosacayacumuaks: ikcwmsgocyuqiumc: goto kwuckkyqaygwgcuy; case self::wogsoiqickwekywu: case self::gkiqougcwigqqcos: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto kwuckkyqaygwgcuy; case self::kimkegwygaiggcmo: if (!$eqgoocgaqwqcimie) { goto eqiiaokcgakicaye; } $eiwicgsqoiaeawkk = Setting::wcwwuuouickuocsa($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, Setting::gskosgoeymsumieq); eqiiaokcgakicaye: goto kwuckkyqaygwgcuy; case self::qyeimiaoamokwygy: if (!$eqgoocgaqwqcimie) { goto gcucsowqoeiwmyyq; } $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig); gcucsowqoeiwmyyq: goto kwuckkyqaygwgcuy; } giuccakymqymawgk: kwuckkyqaygwgcuy: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::soeemwaicsiweqyo => __("\x53\x75\x63\143\x65\163\163", PR__MDL__SALARY), self::yekmyiokocomasqi => __("\106\141\x69\x6c\145\144", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function yoiogykiyuooqcgi($gwwuygsskqcomoas = null) { $skseiqgiyyiuquuu = [self::mqmqsemegeeckcoi => __("\115\157\142\x69\x6c\145\x20\x42\x61\156\x6b", PR__MDL__SALARY), self::keagmesmwegcscka => __("\120\x41\x59\x41", PR__MDL__SALARY), self::oiyyoggwuogoeywy => __("\123\x41\x54\x4e\x41", PR__MDL__SALARY), self::umegccguweookqyu => __("\x41\x54\115", PR__MDL__SALARY), self::mouesqeemeaaukyu => __("\x41\x50\111", PR__MDL__SALARY)]; return ManipulateArray::get($skseiqgiyyiuquuu, $gwwuygsskqcomoas, $skseiqgiyyiuquuu); } }
