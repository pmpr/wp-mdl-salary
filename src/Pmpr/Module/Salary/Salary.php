<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3f00c122             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\141\154\x61\x72\171", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } parent::__construct(); cecuyayqoioasumi: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\154\x75\x67\151\156\163\x5f\x6c\157\x61\x64\x65\144", [$this, "\x69\x63\x77\x63\x67\155\x63\x6f\x69\x6d\161\145\x69\x67\171\x65"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto qogqewiwmwiwskgm; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto qiaqsassksqiuyae; } Ajax::symcgieuakksimmu(); qiaqsassksqiuyae: qogqewiwmwiwskgm: } }
