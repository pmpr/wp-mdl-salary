<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62401034c08cd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\155\171\x5f\143\157\x6c\x6c\141\142\157\162\x61\164\x69\x6f\x6e\137\160\162\157\146\151\x6c\x65"; const qagqayweyigciamg = "\142\141\156\x6b\137\x69\x6e\x66\157"; const equssioqikiumyki = "\167\151\x74\x68\144\162\x61\167\x5f\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto quwcqmyokicssyew; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\x61\x72\145\x6e\164\x5f\163\154\x75\x67" => $wksoawcgagcgoask, "\160\x61\x67\x65\137\164\x69\164\x6c\145" => __("\x4d\x79\40\x53\141\154\x61\162\171\40\120\x72\157\x66\x69\x6c\145", PR__MOD__SALARY), "\155\x65\156\165\137\x73\x6c\165\147" => self::wuowaiyouwecckaw, "\160\157\163\x69\x74\151\157\156" => 0, "\143\141\160\141\142\151\x6c\x69\x74\x79" => "\162\x65\141\x64"]; parent::__construct(); $this->iemaakgqgqosiecm(); quwcqmyokicssyew: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\151\x6e\151\x74", [$this, "\x79\145\171\x69\147\x75\171\145\x67\155\155\x79\x75\163\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto iqcogmsguwoikame; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\x6f\146\x69\154\145", $eygsasmqycagyayw->get("\x70\162\x6f\146\x69\154\x65\56\152\x73"))->ayuciigykaswwqeo("\152\161\165\145\x72\x79"))->ikqyiskqaaymscgw("\x61\152\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\x6d\145\163\163\x61\x67\x65\x73", ["\167\x69\x74\150\144\162\x61\167\137\x74\157" => sprintf(__("\x49\x74\x27\163\x20\x6e\157\164\40\141\x20\166\141\x6c\x69\144\40\x25\x73", PR__MOD__SALARY), __("\x44\x61\164\x65", PR__MOD__SALARY)), "\145\x6d\x70\x74\x79" => ["\x62\141\x6e\153\x5f\151\x6e\x66\157" => sprintf(__("\120\154\x65\141\163\145\40\x73\145\x6c\145\x63\164\40\141\x20\45\163", PR__MOD__SALARY), __("\102\141\x6e\x6b\x20\x41\143\143\157\165\x6e\x74\40\111\x6e\146\x6f\162\x6d\141\164\151\157\x6e", PR__MOD__SALARY)), "\x77\x69\x74\x68\x64\162\x61\x77\137\164\x6f" => sprintf(__("\x50\154\x65\x61\x73\145\x20\x73\145\154\x65\143\164\x20\x61\40\45\163", PR__MOD__SALARY), __("\x44\141\x74\x65", PR__MOD__SALARY))]]); iqcogmsguwoikame: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\156\143\157\x6d\145\x73" => __("\124\x6f\164\141\154\40\111\156\x63\x6f\155\145\163", PR__MOD__SALARY), "\x64\145\x64\x75\143\x74\x73" => __("\x54\157\164\x61\154\x20\x44\x65\x64\x75\143\x74\x73", PR__MOD__SALARY), "\x70\141\x79\x6d\x65\156\x74\163" => __("\x54\157\x74\141\154\40\x50\x61\x79\x6d\145\x6e\164\163", PR__MOD__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\x6e\143\x6f\x6d\x65\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::aquouykoyqcwccay, IncModel::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto yqykqysmiquwoasu; case "\144\145\x64\x75\143\164\x73": goto yqykqysmiquwoasu; case "\160\x61\x79\155\x65\x6e\x74\163": goto yqykqysmiquwoasu; } ayyweymyuuiauamo: yqykqysmiquwoasu: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\141\142\x65\x6c" => $pkyyagewkiyckmwy, "\166\x61\154\x75\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; cmqucgoewuyieoyk: } gimmuoqwckiseaik: echo $this->iuygowkemiiwqmiw("\163\164\141\x74\163", ["\x69\x74\145\x6d\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto ygcsmkuycoagwyou; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\x63\141\x6e\143\145\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto mosqsmqimqgqoase; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\x61\142", "\x74\x61\142\x5f\151\x6e\x63\x6f\155\145\163\x5f\141\156\144\x5f\x70\x61\171\155\x65\156\x74\x73", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\x65\x66" => $geecqyososceumsk], __("\120\x72\x6f\x66\151\154\x65\40\160\x61\x67\145", PR__MOD__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\x6f\165\40\163\x68\157\165\x6c\144\40\146\x69\162\163\164\54\x20\x66\x69\x6c\x6c\x20\x69\x6e\40\171\x6f\x75\x72\40\x62\x61\x6e\x6b\40\141\143\143\x6f\165\x6e\164\x20\151\x6e\x66\157\162\155\x61\164\151\x6f\156\x20\151\156\163\x69\144\x65\x20\x79\157\165\162\x20\x25\x73\54\40\164\x6f\x20\163\165\142\155\x69\164\40\141\x20\x77\x69\164\x68\x64\162\x61\167", PR__MOD__SALARY), $uweseoyuyuwyeggc); goto omugkkesagcyagmk; mosqsmqimqgqoase: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\141\x74\x65\40\124\157", PR__MOD__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\x77\156\x65\162", $saqgcoqwmimycgim)], ["\145\x63\x68\157" => false, "\160\141\162\145\156\x74" => ["\x63\x6c\x61\x73\x73" => "\x63\x6f\154\x2d\x31\62\x20\x63\x6f\154\x2d\155\144\55\70\40\x63\x6f\x6c\x2d\x6c\147\55\66\x20\x6d\171\x2d\63\40\155\170\x2d\141\165\x74\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", ["\x63\x6c\x61\x73\163" => "\162\x6f\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\171\x20\163\x75\x62\x6d\151\x74\x74\151\x6e\x67\40\141\x20\156\x65\x77\40\160\x61\x79\155\x65\156\x74\40\x72\145\x71\x75\x65\x73\x74\54\40\x79\157\165\x20\x77\x69\x6c\154\x20\162\145\x63\x65\x69\x76\x65\40\171\157\x75\x72\x20\151\156\x63\157\x6d\x65\x20\x69\x6e\x20\x74\150\145\40\x66\x6f\x72\x6d\x20\157\146\x20\141\x20\x64\145\160\x6f\x73\151\164\x20\164\157\x20\x74\150\x65\x20\151\x6e\164\x72\x6f\x64\x75\x63\145\144\40\142\141\x6e\153\x20\x61\143\x63\157\x75\156\164", PR__MOD__SALARY); $qyukicweqoisimwg[] = ["\143\x6c\x61\x73\163" => "\x62\x74\156\x20\142\x74\x6e\55\x70\162\x69\155\141\x72\171\40\x61\x64\144\x2d\x6e\145\167\x2d\x77\151\x74\x68\144\162\x61\x77", "\x74\151\x74\x6c\145" => __("\x53\x75\142\155\151\164", PR__MOD__SALARY)]; omugkkesagcyagmk: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\x64\144\x20\116\145\167\40\127\151\164\150\144\x72\141\x77", PR__MOD__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\163\x69\x7a\145" => "\x6c\x67", "\164\171\160\145" => "\x70\x72\x69\x6d\x61\x72\171", "\164\x69\164\154\145" => $uosiuoqysyokseqe, "\160\162\145\146\151\x78" => "\141\144\x64\x5f\x6e\x65\x77\x5f\167\151\x74\150\x64\162\x61\x77", "\x63\x6f\x6e\x74\145\156\x74" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\x75\164\x74\x6f\x6e\x73" => $qyukicweqoisimwg, "\163\x70\x69\156\156\145\162" => true], ["\x74\151\x74\154\145" => $uosiuoqysyokseqe, "\141\164\164\x72\x73" => ["\x63\154\141\163\x73" => "\x62\x74\156\x20\142\x74\x6e\x2d\x70\162\151\x6d\141\x72\171\x20\146\x6c\157\141\x74\x2d\x72\151\147\x68\164", "\x61\162\x69\x61\55\154\x61\142\x65\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); ygcsmkuycoagwyou: } }