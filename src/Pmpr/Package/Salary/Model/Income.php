<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148ed044838c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WC_Order; use WC_Order_Item_Product; use WC_Product; class Income extends Common { const AMOUNT = "\141\155\157\165\156\x74"; const WITHDRAW_ID = "\167\151\x74\x68\x64\x72\x61\167\137\x69\144"; const WITHDRAW_STATUS = "\167\x69\x74\x68\144\162\x61\167\137\163\x74\x61\x74\165\x73"; const WITHDRAW_STATUS_LOOKED = "\154\157\x6f\x6b\145\x64"; const WITHDRAW_STATUS_WITHDRAWN = "\x77\151\164\x68\144\x72\x61\x77\156"; const WITHDRAW_STATUS_UNWITHDRAWN = "\165\x6e\x77\x69\x74\150\x64\162\141\x77\156"; const WITHDRAW_STATUS_NONEWITHDRAWNABLE = "\156\157\156\x65\x77\151\164\x68\144\x72\x61\x77\156\x61\x62\x6c\x65"; const LOCK_PRODUCT = "\154\157\x63\153\137\160\162\157\x64\165\143\164\137\141\x66\x74\x65\162\x5f\x72\x69\x63\x68\137\164\150\162\145\x73\x68\x6f\154\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\111\156\143\x6f\155\145", PR__PKG__SALARY))->muuwuqssqkaieqge(__("\x49\x6e\143\157\155\145\163", PR__PKG__SALARY))->qemeyueyiwgsokuc(["\160\x6f\163\x69\164\x69\x6f\x6e" => 2]); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ggiieomioscuigco(self::WITHDRAW_ID)->acokiqqgsmoqaeyu()->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\127\x69\x74\x68\144\x72\x61\167", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::OWNER)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\117\167\156\x65\x72", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORDER)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\122\145\x6c\x61\x74\x65\144\x20\x4f\162\144\145\162", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::AMOUNT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\101\155\157\165\156\164", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::PRODUCT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x50\162\157\x64\165\x63\164", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::WITHDRAW_STATUS)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\127\x69\x74\150\144\x72\x61\167\x20\x53\164\x61\164\x75\x73", PR__PKG__SALARY))]); } public function cysukeiuucugyiqq($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::WITHDRAW_STATUS_LOOKED => __("\114\157\x6f\153\145\x64", PR__PKG__SALARY), self::WITHDRAW_STATUS_WITHDRAWN => __("\x57\151\x74\x68\x64\162\x61\167\156", PR__PKG__SALARY), self::WITHDRAW_STATUS_UNWITHDRAWN => __("\125\156\x77\x69\164\150\144\162\141\167\156", PR__PKG__SALARY), self::WITHDRAW_STATUS_NONEWITHDRAWNABLE => __("\116\x6f\x6e\145\x20\127\x69\164\x68\144\x72\x61\167\156\x61\x62\x6c\x65", PR__PKG__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::OWNER: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ugqwuugsweqgmywk; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\x64\x69\x73\x70\x6c\141\171\137\x6e\x61\x6d\145", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ugqwuugsweqgmywk: goto cogywoqcqummsyus; case self::ORDER: $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($eqgoocgaqwqcimie); if (!$umwqusowiqmyseom) { goto uaukmuiwskcemcsw; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa($umwqusowiqmyseom->get_edit_order_url(), sprintf("\43\45\163\40\45\163", $umwqusowiqmyseom->get_id(), ManipulateWoocommerce::susisykioakswkmm($umwqusowiqmyseom))); uaukmuiwskcemcsw: goto cogywoqcqummsyus; case self::WITHDRAW_STATUS: $meqocwsecsywiiqs = ManipulateArray::get($this->cysukeiuucugyiqq(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); goto cogywoqcqummsyus; case self::PRODUCT: $product = ManipulateWoocommerce::aqasygcsqysmmyke($eqgoocgaqwqcimie); if (!$product instanceof WC_Product) { goto sockeswygwcskeuq; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa($product->get_permalink(), $product->get_title()); sockeswygwcskeuq: goto cogywoqcqummsyus; case self::AMOUNT: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto cogywoqcqummsyus; } gmwykkouysyaqwqm: cogywoqcqummsyus: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function ceuwgeyigaiosgec($iueymcwwscwqkiyq = self::WITHDRAW_STATUS_LOOKED) : array { $cseccogesusskess = []; try { $cseccogesusskess = $this->woimamkkeyoyauoa(self::WITHDRAW_STATUS, $iueymcwwscwqkiyq); } catch (Exception $wgaoewqkwgomoaai) { } return $cseccogesusskess; } public function iasuucsqckqgkgwi($product) { return $this->ssqiqiiwyusygike(self::PRODUCT, $product, self::AMOUNT, "\x3d"); } public function kuyeikkgksekigcq($product) : int { return $this->ieieyoeqmmeysauc(self::PRODUCT, $product); } public function owiuygoyeiuqiyuc($miowmmgaiagcuyoo, $kwkmegesqkqwyska) : array { return $this->cwkywyqksyucoyia([self::OWNER => $miowmmgaiagcuyoo, self::CREATED_AT => [self::VALUE => $kwkmegesqkqwyska, self::CLAUSE => self::DATE, self::OPERATOR => self::LE_SYMBOL], self::WITHDRAW_STATUS => self::WITHDRAW_STATUS_UNWITHDRAWN]); } public function kuuugksiksqcaaaa(&$icwicymcioeyeyek) : bool { $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, self::ORDER, 0); $miowmmgaiagcuyoo = ManipulateArray::get($icwicymcioeyeyek, self::OWNER, 0); $iakkeikwceeomgyq = ManipulateArray::get($icwicymcioeyeyek, Agreement::ORIGIN); $product = ManipulateArray::get($icwicymcioeyeyek, self::PRODUCT); if ($miowmmgaiagcuyoo && $iakkeikwceeomgyq && $product && $umwqusowiqmyseom) { goto kqswcsysqawkcgye; } $this->kmsyisgakgwscyey(__("\122\x65\161\x75\151\162\x65\144\40\144\141\164\141\x20\x69\x73\x20\155\x69\163\x73\151\156\147", PR__PKG__SALARY)); goto wusciwkkckmqigms; kqswcsysqawkcgye: $xssuewsokckmigqk = Agreement::symcgieuakksimmu()->kyqcoyaauiwgieci($miowmmgaiagcuyoo, $iakkeikwceeomgyq); $kqgogugewiwqkaye = (int) ManipulateArray::get($xssuewsokckmigqk, Agreement::ORDER_THRESHOLD_MAX, 0); $wikmsuswiigscwgg = ManipulateArray::get($xssuewsokckmigqk, Agreement::ORDER_THRESHOLD_TYPE, Agreement::ORDER_THRESHOLD_TYPE_NUMERICAL); if ($wikmsuswiigscwgg === Agreement::ORDER_THRESHOLD_TYPE_NONE) { goto cscusseysqygsoiy; } if ($wikmsuswiigscwgg === Agreement::ORDER_THRESHOLD_TYPE_MONETARY) { goto mkwkkmkgiqiamacc; } $eqgoocgaqwqcimie = $this->kuyeikkgksekigcq($product); goto uaqackioaiqwcocy; mkwkkmkgiqiamacc: $eqgoocgaqwqcimie = $this->iasuucsqckqgkgwi($product); uaqackioaiqwcocy: goto isgwkwacoyimiauk; cscusseysqygsoiy: $eqgoocgaqwqcimie = 0; $kqgogugewiwqkaye = 0; isgwkwacoyimiauk: $iueymcwwscwqkiyq = self::WITHDRAW_STATUS_UNWITHDRAWN; if (!($kqgogugewiwqkaye <= 0 || $eqgoocgaqwqcimie <= $kqgogugewiwqkaye)) { goto mggeqkcksyaymcsa; } $iueymcwwscwqkiyq = self::WITHDRAW_STATUS_NONEWITHDRAWNABLE; mggeqkcksyaymcsa: $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); if ($iiwwoeukeeweaisc) { goto eeyyskqsmquyquqw; } $this->kmsyisgakgwscyey(sprintf(__("\143\x61\x6e\x20\x6e\157\164\40\146\157\x75\156\144\40\157\162\144\x65\162\x3a\x20\45\163\x2e", PR__PKG__SALARY), $umwqusowiqmyseom)); goto ewscugeuicukkycc; eeyyskqsmquyquqw: $smowyuyseuwiaiei = $this->mkwqioemikeimwai($xssuewsokckmigqk, $iiwwoeukeeweaisc, $product); if ($smowyuyseuwiaiei && $smowyuyseuwiaiei > 0) { goto uegouoiuyoqkcscg; } $this->kmsyisgakgwscyey(__("\x43\141\x6c\143\165\x6c\x61\x74\145\x64\x20\141\x6d\157\x75\156\164\x20\x69\163\40\x6c\x65\x73\163\40\x74\x68\141\156\x20\61\x2e", PR__PKG__SALARY)); goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: $icwicymcioeyeyek[self::AMOUNT] = $smowyuyseuwiaiei; $icwicymcioeyeyek[self::WITHDRAW_STATUS] = $iueymcwwscwqkiyq; cgyakcqgugqgkqiw: ewscugeuicukkycc: wusciwkkckmqigms: return parent::kuuugksiksqcaaaa($icwicymcioeyeyek); } public function mkwqioemikeimwai($xssuewsokckmigqk, $umwqusowiqmyseom, $product) { $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); $smowyuyseuwiaiei = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!($xssuewsokckmigqk && $umwqusowiqmyseom instanceof WC_Order)) { goto uykousayyomcaeaa; } $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items(); $aumscagymwyyicag = 0; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto gygwewcqsmwqismo; } if (!($igqsaukqcqscimok->get_product_id('') == ManipulateWoocommerce::omwkqcuwceweymcc($product))) { goto amgsueumgaguceaa; } $aumscagymwyyicag = $product->get_price(''); if (!$aumscagymwyyicag) { goto mwysseaekcsiesmm; } goto iiiccouaaqsyikae; mwysseaekcsiesmm: amgsueumgaguceaa: gygwewcqsmwqismo: ukkcmocamwgiqayu: } iiiccouaaqsyikae: $eqgoocgaqwqcimie = (int) ManipulateArray::get($xssuewsokckmigqk, Agreement::METHOD_VALUE, 0); if (!($eqgoocgaqwqcimie > 0 && $aumscagymwyyicag > 0)) { goto ucqmumuygcywwqma; } $qgciuiagkkguykgs = ManipulateArray::get($smowyuyseuwiaiei, Agreement::METHOD, Agreement::METHOD_CONSTANT); switch ($qgciuiagkkguykgs) { case Agreement::METHOD_CONSTANT: if (!($aumscagymwyyicag >= $eqgoocgaqwqcimie)) { goto ukqocwewouckikso; } $smowyuyseuwiaiei = $eqgoocgaqwqcimie; ukqocwewouckikso: goto uougwgeyiokewkkm; case Agreement::METHOD_VARIABLE: $smowyuyseuwiaiei = $aumscagymwyyicag * $eqgoocgaqwqcimie / 100; goto uougwgeyiokewkkm; } gommacygsykyussk: uougwgeyiokewkkm: ucqmumuygcywwqma: uykousayyomcaeaa: return $smowyuyseuwiaiei; } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array { $oqseeekuqisekiwy = $this->cysukeiuucugyiqq(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = ["\x6d\145\x71\x6f\143\167\x73\145\x63\163\x79\167\x69\151\x71\x73" => $meqocwsecsywiiqs, "\143\x6f\x75\x6e\164" => $this->ieieyoeqmmeysauc(self::WITHDRAW_STATUS, $iueymcwwscwqkiyq)]; iuuuususuuuaieem: } uimeeckqksqeekqq: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw); } public function aakiaoueckoiyoew() : ?string { return self::WITHDRAW_STATUS; } public function qqowskscgmumsugo($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo) : array { return $this->syiyakgmskmmqcya($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo, Agreement::ORIGIN_ANYWHERE); } public function mcsiiagyqmaocaoe($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo) : array { return $this->syiyakgmskmmqcya($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo, Agreement::ORIGIN_SHORTCODE); } private function syiyakgmskmmqcya($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo, $myokekiemcameuwq) : array { $sogksuscggsicmac = ["\163\165\x63\143\x65\x73\163" => false]; $iswcokucwmiosiaq = ''; $qsmogugokoieokgw = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $mkgcaseqyaayywqo = max(1, $mkgcaseqyaayywqo); $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); if (!($miowmmgaiagcuyoo && $umwqusowiqmyseom && $product)) { goto ocywegekakimmwcq; } if (!ManipulatePost::igawqaomowicuayw(self::LOCK_PRODUCT, $eoioyuyammuoecgs, true)) { goto gswcoeiisamakwii; } $iswcokucwmiosiaq = __("\120\162\x6f\x64\x75\x63\x74\40\x6c\157\x63\153\x65\x64", PR__PKG__SALARY); goto yuimwyoywaiiqacs; gswcoeiisamakwii: $meekuuimgauagwoe = Agreement::symcgieuakksimmu(); $xssuewsokckmigqk = $meekuuimgauagwoe->kyqcoyaauiwgieci($miowmmgaiagcuyoo, $myokekiemcameuwq); $kicqwwccwocikcae = false; if ($xssuewsokckmigqk) { goto ikuuiauwouuqawuw; } $iswcokucwmiosiaq = __("\x41\147\162\x65\145\x6d\x65\x6e\x74\x20\x6e\x6f\x74\40\x66\157\165\x6e\144", PR__PKG__SALARY); goto yoqakewookqoqacm; ikuuiauwouuqawuw: $smowyuyseuwiaiei = $this->mkwqioemikeimwai($xssuewsokckmigqk, $umwqusowiqmyseom, $eoioyuyammuoecgs); if ($smowyuyseuwiaiei > 0) { goto kwiggogcgciwuwqk; } $iswcokucwmiosiaq = __("\x41\x6d\x6f\165\x6e\x74\x20\x69\x73\40\x6e\x6f\164\x20\166\141\x6c\x69\x64\x2c\40\154\145\x73\163\40\x74\x68\x61\x6e\40\61", PR__PKG__SALARY); goto uckewycoogsogwiy; kwiggogcgciwuwqk: $wikmsuswiigscwgg = $meekuuimgauagwoe->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::ORDER_THRESHOLD_TYPE); $ckysocikcecqseum = (int) $meekuuimgauagwoe->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::ORDER_THRESHOLD_MIN, 0); $kqgogugewiwqkaye = (int) $meekuuimgauagwoe->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::ORDER_THRESHOLD_MAX, 0); try { $kggyacsekkkagqya = $this->cwkywyqksyucoyia([self::OWNER => $miowmmgaiagcuyoo, self::PRODUCT => $product]); } catch (Exception $wgaoewqkwgomoaai) { $kggyacsekkkagqya = []; } $akmsosaouiokmuiq = false; $oyuqkqayqyqysyse = -1; $ciyackuwsqkoqese = 1; suqceasgacskcmkc: if (!($ciyackuwsqkoqese <= $mkgcaseqyaayywqo)) { goto kocqqoyymosmuksu; } switch ($wikmsuswiigscwgg) { case Agreement::ORDER_THRESHOLD_TYPE_MONETARY: $oyuqkqayqyqysyse = $this->cseaisoguykosgem($kggyacsekkkagqya) + ($smowyuyseuwiaiei * $ciyackuwsqkoqese - 1); if (!($kqgogugewiwqkaye > 0)) { goto oyeyomcgkmgymogq; } if ($oyuqkqayqyqysyse >= $kqgogugewiwqkaye) { goto gamqcwuwkikwqoay; } if (!($oyuqkqayqyqysyse + $smowyuyseuwiaiei > $kqgogugewiwqkaye)) { goto ieqesiiageaauiuw; } $bsgyawiqyuquqmyy = $kqgogugewiwqkaye - $oyuqkqayqyqysyse; if (!($bsgyawiqyuquqmyy <= $smowyuyseuwiaiei)) { goto yiowgigkkwsoqcci; } $smowyuyseuwiaiei = $bsgyawiqyuquqmyy; $kicqwwccwocikcae = true; yiowgigkkwsoqcci: ieqesiiageaauiuw: goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $akmsosaouiokmuiq = true; $kicqwwccwocikcae = true; mscyggqcesgqqksu: oyeyomcgkmgymogq: goto qukocuwgakemmyga; case Agreement::ORDER_THRESHOLD_TYPE_NUMERICAL: $oyuqkqayqyqysyse = count($kggyacsekkkagqya) + ($ciyackuwsqkoqese - 1); if (!($kqgogugewiwqkaye > 0)) { goto wsesqmcqoiyyqkqi; } if (!($oyuqkqayqyqysyse >= $kqgogugewiwqkaye)) { goto iesekaeqeomeuaui; } $akmsosaouiokmuiq = true; $kicqwwccwocikcae = true; iesekaeqeomeuaui: wsesqmcqoiyyqkqi: goto qukocuwgakemmyga; case Agreement::ORDER_THRESHOLD_TYPE_NONE: goto qukocuwgakemmyga; } sioekkmekwygemyc: qukocuwgakemmyga: if (!$akmsosaouiokmuiq) { goto mogkoocsoeuyoqqa; } goto kocqqoyymosmuksu; mogkoocsoeuyoqqa: if ($ckysocikcecqseum > 0 && $oyuqkqayqyqysyse < $ckysocikcecqseum) { goto wkwamkgkwykeqkec; } $iueymcwwscwqkiyq = self::WITHDRAW_STATUS_UNWITHDRAWN; goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $iueymcwwscwqkiyq = self::WITHDRAW_STATUS_NONEWITHDRAWNABLE; oimkeqocuguqqsqk: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::OWNER => $miowmmgaiagcuyoo, self::ORDER => $qsmogugokoieokgw, self::AMOUNT => $smowyuyseuwiaiei, self::PRODUCT => $eoioyuyammuoecgs, self::WITHDRAW_STATUS => $iueymcwwscwqkiyq], true); if (!$kicqwwccwocikcae) { goto oeocukauoyosicso; } goto kocqqoyymosmuksu; oeocukauoyosicso: uqokiksoqcwwqgio: $ciyackuwsqkoqese++; goto suqceasgacskcmkc; kocqqoyymosmuksu: if (!$kicqwwccwocikcae) { goto yykqaowwsqgqysmq; } ManipulatePost::ksmqawcowkmegigw(self::LOCK_PRODUCT, 1, $product); yykqaowwsqgqysmq: uckewycoogsogwiy: yoqakewookqoqacm: yuimwyoywaiiqacs: ocywegekakimmwcq: if (!$iswcokucwmiosiaq) { goto emqswoaawgeyosmi; } $sogksuscggsicmac["\x65\x72\x72\157\162"] = $iswcokucwmiosiaq; emqswoaawgeyosmi: return $sogksuscggsicmac; } }
