<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267a06b4a457             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\x6f\154\154\x61\x62\157\x72\141\164\151\157\156\137\160\162\157\146\151\x6c\x65"; const qagqayweyigciamg = "\x62\141\156\153\x5f\151\x6e\x66\157"; const equssioqikiumyki = "\x77\151\164\150\144\x72\141\167\x5f\164\x6f"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto qmiwsequckckoaei; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\x65\x6e\x74\137\x73\x6c\165\x67" => $wksoawcgagcgoask, "\x70\x61\147\145\x5f\x74\151\164\154\145" => __("\x4d\x79\x20\x53\x61\154\141\162\171\x20\x50\162\x6f\x66\151\x6c\145", PR__MDL__SALARY), "\155\145\x6e\x75\137\163\154\x75\x67" => self::wuowaiyouwecckaw, "\160\157\x73\x69\x74\151\157\x6e" => 0, "\143\141\x70\x61\x62\151\154\151\x74\x79" => "\162\145\x61\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); qmiwsequckckoaei: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\x69\156\151\x74", [$this, "\171\145\x79\151\147\x75\171\145\x67\155\155\x79\165\x73\x65\x61"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto goeoymmqqqeeoime; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\x6f\x66\151\154\145", $eygsasmqycagyayw->get("\160\162\x6f\146\151\x6c\x65\56\152\x73"))->ayuciigykaswwqeo("\x6a\161\165\x65\x72\171"))->ikqyiskqaaymscgw("\141\x6a\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\155\145\x73\x73\x61\x67\x65\163", ["\x77\x69\164\150\x64\162\x61\167\x5f\164\157" => sprintf(__("\111\164\x27\x73\40\156\157\164\x20\141\x20\166\141\x6c\151\144\x20\x25\x73", PR__MDL__SALARY), __("\104\141\x74\145", PR__MDL__SALARY)), "\145\x6d\x70\164\x79" => ["\x62\x61\156\153\137\x69\156\146\x6f" => sprintf(__("\x50\x6c\x65\x61\163\145\x20\x73\x65\x6c\x65\x63\x74\x20\141\40\x25\163", PR__MDL__SALARY), __("\102\141\156\x6b\40\101\143\x63\x6f\x75\x6e\164\x20\x49\x6e\x66\x6f\x72\x6d\141\x74\151\157\156", PR__MDL__SALARY)), "\167\x69\x74\x68\x64\x72\x61\167\137\164\157" => sprintf(__("\120\154\145\x61\x73\145\x20\163\145\x6c\x65\143\x74\40\x61\40\45\x73", PR__MDL__SALARY), __("\104\141\164\145", PR__MDL__SALARY))]]); goeoymmqqqeeoime: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\x6e\143\x6f\x6d\x65\x73" => __("\124\157\x74\x61\154\40\111\x6e\x63\157\x6d\x65\x73", PR__MDL__SALARY), "\144\x65\144\x75\x63\164\163" => __("\x54\157\x74\141\154\x20\x44\x65\144\165\143\164\x73", PR__MDL__SALARY), "\x70\141\x79\155\x65\156\x74\163" => __("\x54\x6f\164\141\x6c\40\x50\141\171\155\x65\x6e\164\163", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\156\x63\x6f\155\145\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::aquouykoyqcwccay, IncModel::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto qmeoaqmsuseueqiy; case "\144\145\144\165\x63\164\x73": goto qmeoaqmsuseueqiy; case "\x70\141\x79\155\145\x6e\x74\x73": goto qmeoaqmsuseueqiy; } ygkcacsyyckescqs: qmeoaqmsuseueqiy: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\x61\142\x65\x6c" => $pkyyagewkiyckmwy, "\x76\141\154\165\x65" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; ickcmqoiosquugwe: } eiawsoasmscmqswa: echo $this->iuygowkemiiwqmiw("\163\x74\141\x74\x73", ["\x69\164\145\155\x73" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto sukskmcwsoysiuqu; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\x6e\x63\145\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto cuoqqgaygogsmmic; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\164\141\142", "\x74\x61\142\137\x69\x6e\x63\157\155\x65\x73\x5f\x61\x6e\x64\137\160\141\171\x6d\145\x6e\x74\x73", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\x65\146" => $geecqyososceumsk], __("\120\x72\x6f\146\x69\x6c\x65\x20\160\141\147\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\157\165\40\163\150\157\x75\x6c\x64\40\146\x69\162\163\164\54\40\146\x69\154\x6c\40\x69\156\40\x79\157\165\162\40\142\141\156\153\40\141\x63\x63\157\x75\156\164\40\151\156\x66\x6f\x72\x6d\141\164\151\157\156\x20\x69\x6e\163\151\x64\145\x20\171\x6f\165\x72\x20\45\x73\x2c\x20\x74\157\x20\163\165\x62\x6d\151\164\40\x61\40\167\x69\x74\150\x64\x72\x61\x77", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\x61\164\x65\40\124\x6f", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\x77\156\x65\162", $saqgcoqwmimycgim)], ["\x65\143\150\157" => false, "\x70\x61\162\x65\156\x74" => ["\x63\154\x61\163\x73" => "\143\x6f\154\x2d\61\x32\40\143\157\x6c\55\x6d\144\55\x38\x20\143\157\x6c\55\154\x67\55\66\40\x6d\171\55\x33\40\x6d\170\55\x61\165\x74\157"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\166", ["\x63\x6c\x61\x73\x73" => "\x72\x6f\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\165\x62\155\x69\x74\164\151\156\x67\x20\141\40\156\x65\x77\x20\160\141\x79\x6d\x65\x6e\x74\40\162\x65\x71\165\145\163\164\54\x20\x79\157\165\40\x77\151\154\154\40\162\x65\x63\145\x69\166\145\40\x79\x6f\x75\162\40\151\x6e\143\x6f\x6d\145\x20\151\156\40\164\x68\x65\40\146\157\162\x6d\40\x6f\146\x20\141\x20\x64\145\x70\x6f\x73\x69\x74\40\164\x6f\x20\164\150\x65\40\151\x6e\x74\x72\x6f\144\x75\143\x65\x64\x20\x62\141\x6e\153\x20\141\143\143\157\x75\156\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\x63\154\x61\163\x73" => "\142\164\156\40\142\x74\156\55\160\162\x69\155\x61\162\x79\x20\141\x64\x64\x2d\x6e\145\x77\x2d\167\151\x74\150\144\162\x61\167", "\x74\151\164\154\145" => __("\x53\165\142\x6d\151\164", PR__MDL__SALARY)]; cgewcsueoyaeikgm: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\101\144\x64\40\116\145\x77\x20\127\151\x74\x68\144\x72\141\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\151\x7a\x65" => "\154\x67", "\x74\171\160\145" => "\x70\162\151\155\141\x72\x79", "\x74\x69\164\x6c\145" => $uosiuoqysyokseqe, "\160\162\x65\x66\x69\170" => "\141\144\144\x5f\156\x65\x77\x5f\x77\151\164\150\x64\x72\141\167", "\x63\x6f\x6e\164\x65\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\165\x74\164\157\156\163" => $qyukicweqoisimwg, "\163\160\x69\156\156\145\162" => true], ["\164\x69\x74\154\x65" => $uosiuoqysyokseqe, "\141\x74\x74\x72\x73" => ["\x63\154\x61\163\x73" => "\142\164\x6e\40\142\164\156\x2d\x70\x72\x69\x6d\x61\x72\x79\x20\146\154\x6f\141\164\55\162\151\x67\150\164", "\141\162\151\141\x2d\154\x61\142\145\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); sukskmcwsoysiuqu: } }
