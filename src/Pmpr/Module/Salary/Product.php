<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6ff0bed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; use WC_Order_Item_Product; class Product extends Container { use CallbackTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\x6d\x6d\x65\162\143\145\x5f\x70\x61\171\x6d\x65\156\164\137\143\x6f\155\x70\x6c\145\164\x65", [$this, "\x63\x79\161\161\167\171\151\x63\x6f\x61\151\157\141\x6b\165\163"], 9999)->qcsmikeggeemccuu("\x77\157\157\x63\157\155\x6d\145\x72\143\145\137\157\x72\144\x65\162\x5f\x73\x74\141\x74\x75\x73\x5f\x63\157\155\x70\154\x65\x74\145\x64", [$this, "\143\171\x71\x71\167\x79\151\x63\157\x61\151\x6f\x61\x6b\x75\x73"], 9999); } public function cyqqwyicoaioakus($qsmogugokoieokgw) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto wsesqmcqoiyyqkqi; } $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if (!($product && $product->get_price('') > 0)) { goto iesekaeqeomeuaui; } $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); iesekaeqeomeuaui: wsesqmcqoiyyqkqi: oyeyomcgkmgymogq: } mscyggqcesgqqksu: } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->igiwycommqemseky($cawesmkieccckaae); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if ($ekiuyucoiagmscgy = $gkyciwoiiisgywcs->get($xssuewsokckmigqk, self::wwgusigoaksqmwsm)) { goto oimkeqocuguqqsqk; } $okycmmskgswewacc = $this->awweyuumwaygcauy($xssuewsokckmigqk); goto oeocukauoyosicso; oimkeqocuguqqsqk: $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ekiuyucoiagmscgy, ''); $okycmmskgswewacc = $ekiuyucoiagmscgy($xssuewsokckmigqk, $cawesmkieccckaae, $product); oeocukauoyosicso: if (!($okycmmskgswewacc && is_array($okycmmskgswewacc))) { goto ikuuiauwouuqawuw; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->keeuqgyooycqoygw($aqmwamyiwgeeymqa); if ($ogekyekymoyuywog->qumqowkwyaceeqwu([$ogekyekymoyuywog::awkcoioakcaougmq => $cawesmkieccckaae, $ogekyekymoyuywog::oguseymmyyoyaako => $umkkkaqkwugkemce, $ogekyekymoyuywog::cmiegiycgiucucgs => $ousomaowqseoamse])) { goto uckewycoogsogwiy; } $sogksuscggsicmac = $ogekyekymoyuywog->muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kwiggogcgciwuwqk; } $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua(sprintf(__("\x43\x61\156\x20\x6e\157\164\x20\x61\144\144\40\x69\x6e\x63\157\x6d\145\x3a\x20\45\x73", PR__MDL__SALARY), $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])), $umwqusowiqmyseom); kwiggogcgciwuwqk: uckewycoogsogwiy: yykqaowwsqgqysmq: } suqceasgacskcmkc: ikuuiauwouuqawuw: wkwamkgkwykeqkec: } mogkoocsoeuyoqqa: } public function awweyuumwaygcauy($xssuewsokckmigqk) : array { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); return $kueeocmceokoouqa->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => (int) $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if (!$product) { goto yoqakewookqoqacm; } $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eoioyuyammuoecgs = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->qqiwsumoyiukmgco($product); $eyscsimwcyaqakqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($eoioyuyammuoecgs, self::cmckeoksigiaqykc, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->cwkywyqksyucoyia([Agreement::kmqmeaywmyiqqkqw => [self::ciyoccqkiamemcmm => [$eoioyuyammuoecgs], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::guksqgkoswygwycw => [self::ciyoccqkiamemcmm => $eyscsimwcyaqakqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]]); yoqakewookqoqacm: return $ywqqikcsamcaycgm; } }
