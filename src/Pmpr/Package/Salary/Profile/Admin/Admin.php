<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148ed044838c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Package\Salary\Model\Income as IncModel; use Pmpr\Package\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Package\Salary\Profile\Admin\Tab\Income; use Pmpr\Package\Salary\Profile\Admin\Tab\Payment; use Pmpr\Package\Salary\Profile\Admin\Tab\Product; use Pmpr\Package\Salary\User; class Admin extends Page { const MENU_SLUG = "\x6d\171\x5f\x63\x6f\x6c\154\x61\x62\157\x72\141\x74\151\157\156\137\160\x72\x6f\x66\151\154\x65"; const BANK_INFO = "\x62\141\156\x6b\137\x69\156\x66\x6f"; const WITHDRAW_TO = "\167\151\164\x68\x64\162\141\167\x5f\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::COLLABORATOR_ROLE))) { goto ickcmqoiosquugwe; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\141\162\145\156\164\137\x73\x6c\x75\x67" => $wksoawcgagcgoask, "\x70\141\147\x65\x5f\164\x69\x74\154\145" => __("\x4d\x79\40\103\157\154\154\x61\142\157\x72\141\164\x69\x6f\x6e\x20\x50\162\x6f\146\x69\154\x65", PR__PKG__SALARY), "\x6d\145\156\x75\137\163\x6c\165\x67" => self::MENU_SLUG, "\160\157\x73\x69\x74\x69\x6f\x6e" => 0, "\143\141\160\x61\x62\151\154\151\164\171" => "\162\x65\x61\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); ickcmqoiosquugwe: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\137\151\x6e\151\x74", [$this, "\x79\145\x79\151\147\165\171\x65\x67\x6d\x6d\171\x75\x73\145\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto qmeoaqmsuseueqiy; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\160\162\x6f\x66\151\x6c\x65", $eygsasmqycagyayw->get("\160\x72\157\x66\151\x6c\145\x2e\x6a\x73"))->ayuciigykaswwqeo("\x6a\161\x75\x65\x72\171"))->ikqyiskqaaymscgw("\141\152\x61\x78", Ajax::ACTIONS)->ikqyiskqaaymscgw("\x6d\x65\163\163\141\x67\145\x73", ["\167\151\164\150\x64\x72\141\167\x5f\x74\157" => sprintf(__("\111\x74\x27\x73\40\156\x6f\x74\x20\141\40\x76\x61\x6c\x69\144\x20\x25\x73", PR__PKG__SALARY), __("\104\x61\164\x65", PR__PKG__SALARY)), "\x65\155\x70\164\x79" => ["\142\141\x6e\153\x5f\151\x6e\x66\157" => sprintf(__("\x50\x6c\x65\x61\163\145\x20\163\145\154\145\x63\164\40\x61\x20\x25\x73", PR__PKG__SALARY), __("\102\x61\156\153\40\x41\x63\x63\157\165\156\164\x20\111\156\146\157\x72\x6d\141\164\151\x6f\x6e", PR__PKG__SALARY)), "\x77\x69\164\150\144\x72\x61\x77\137\x74\x6f" => sprintf(__("\120\154\x65\141\x73\x65\40\163\145\154\x65\x63\164\40\x61\x20\x25\163", PR__PKG__SALARY), __("\104\141\164\145", PR__PKG__SALARY))]]); qmeoaqmsuseueqiy: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\156\143\x6f\155\x65\x73" => __("\124\157\164\141\154\x20\111\x6e\143\157\x6d\145\x73", PR__PKG__SALARY), "\144\x65\144\x75\x63\164\x73" => __("\124\x6f\164\x61\154\x20\x44\145\x64\165\x63\x74\x73", PR__PKG__SALARY), "\160\x61\x79\155\x65\156\x74\x73" => __("\x54\x6f\164\141\x6c\x20\x50\141\171\x6d\x65\156\164\163", PR__PKG__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\x6e\x63\x6f\x6d\x65\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::OWNER => $miowmmgaiagcuyoo, IncModel::WITHDRAW_STATUS => [self::VALUE => [IncModel::WITHDRAW_STATUS_WITHDRAWN, IncModel::WITHDRAW_STATUS_UNWITHDRAWN], self::CLAUSE => self::CONTAIN]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto cgewcsueoyaeikgm; case "\x64\145\144\165\143\x74\x73": goto cgewcsueoyaeikgm; case "\x70\x61\x79\155\x65\x6e\x74\163": goto cgewcsueoyaeikgm; } sukskmcwsoysiuqu: cgewcsueoyaeikgm: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x70\x6b\171\171\141\147\145\x77\x6b\x69\171\x63\x6b\x6d\x77\171" => $pkyyagewkiyckmwy, "\x65\x71\x67\x6f\157\x63\x67\141\x71\x77\x71\x63\151\x6d\x69\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; cuoqqgaygogsmmic: } ygkcacsyyckescqs: echo $this->iuygowkemiiwqmiw("\x73\164\141\x74\163", ["\151\x74\145\x6d\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto eyiamcekkgkiawqy; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\141\156\x63\145\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->wmouogmqeaiuukqe($mkucggyaiaukqoce, self::BANK_INFO); if ($aukoggqmyoweqokc) { goto igymseewwyiocoug; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\141\x62", "\x74\141\142\x5f\x69\x6e\143\x6f\x6d\145\x73\x5f\x61\x6e\144\x5f\x70\141\171\x6d\x65\x6e\164\x73", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => $geecqyososceumsk], __("\120\x72\x6f\x66\x69\x6c\145\40\160\x61\x67\145", PR__PKG__SALARY)); $iwamiguusayooguq = sprintf(__("\131\157\x75\40\163\150\x6f\x75\x6c\x64\x20\146\151\162\163\x74\x2c\x20\x66\x69\x6c\154\40\x69\x6e\40\x79\x6f\165\162\40\142\141\156\x6b\40\x61\143\x63\x6f\x75\156\164\40\x69\156\146\x6f\x72\155\x61\164\x69\157\x6e\x20\x69\156\x73\x69\144\x65\40\171\157\165\162\x20\45\163\x2c\40\164\157\x20\163\165\x62\x6d\x69\x74\40\x61\40\167\151\x74\x68\144\162\x61\x77\x2e", PR__PKG__SALARY), $uweseoyuyuwyeggc); goto mqccmesakuemceqi; igymseewwyiocoug: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::WITHDRAW_TO, __("\104\141\x74\145\40\x54\x6f", PR__PKG__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\167\156\145\162", $saqgcoqwmimycgim)], ["\x65\x63\x68\x6f" => false, "\x70\141\162\x65\x6e\x74" => ["\x63\x6c\x61\x73\x73" => "\x63\x6f\154\x2d\61\x32\x20\143\x6f\154\55\155\x64\55\70\40\x63\x6f\154\55\154\147\x2d\x36\40\x6d\x79\x2d\x33\40\155\x78\x2d\141\x75\164\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\143\154\141\163\x73" => "\162\157\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\171\40\163\x75\x62\155\151\x74\164\151\156\147\x20\x61\40\156\x65\167\x20\x70\141\x79\155\145\156\164\x20\x72\145\161\x75\145\163\x74\54\x20\171\x6f\x75\x20\167\x69\154\154\x20\162\145\143\x65\x69\166\145\40\171\157\x75\x72\40\151\156\x63\157\155\145\40\x69\x6e\40\x74\x68\145\x20\x66\157\162\x6d\40\157\x66\x20\x61\x20\x64\x65\160\157\163\x69\164\40\164\157\x20\164\150\145\x20\151\156\x74\x72\x6f\144\165\x63\145\144\x20\x62\141\156\x6b\x20\x61\143\x63\157\165\156\164\56", PR__PKG__SALARY); $qyukicweqoisimwg[] = ["\x63\154\141\x73\163" => "\x62\164\x6e\x20\142\164\156\55\160\x72\x69\x6d\x61\x72\x79\40\141\144\x64\x2d\x6e\x65\x77\55\x77\x69\x74\x68\144\x72\x61\x77", "\164\151\x74\154\145" => __("\123\x75\142\155\x69\x74", PR__PKG__SALARY)]; mqccmesakuemceqi: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\x64\40\x4e\145\x77\40\x57\151\164\150\x64\162\141\167", PR__PKG__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\163\x69\172\145" => "\154\x67", "\164\171\160\145" => "\160\162\151\x6d\141\162\x79", "\x74\151\x74\154\x65" => $uosiuoqysyokseqe, "\160\x72\x65\x66\151\170" => "\x61\144\144\x5f\156\145\167\x5f\167\x69\164\x68\144\162\141\x77", "\143\157\156\164\145\x6e\x74" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\x75\x74\x74\157\156\x73" => $qyukicweqoisimwg, "\x73\x70\x69\156\x6e\145\162" => true], ["\x6d\145\x71\157\143\167\163\x65\143\x73\x79\x77\151\151\x71\163" => $uosiuoqysyokseqe, "\x77\x77\147\x75\x63\x73\x73\141\x65\x63\161\145\x6b\x75\145\153" => ["\x63\154\141\x73\163" => "\x62\164\156\x20\142\164\156\55\x70\162\151\155\x61\x72\171\40\x66\154\157\141\164\x2d\162\x69\x67\150\164", "\x61\162\151\141\x2d\154\141\142\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); eyiamcekkgkiawqy: } }
