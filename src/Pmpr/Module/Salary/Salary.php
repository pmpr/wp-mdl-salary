<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978c153af1f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\x61\154\141\162\x79", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto uiosisocuwokwkie; } parent::__construct(); uiosisocuwokwkie: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\165\x67\x69\156\x73\137\x6c\157\141\x64\145\144", [$this, "\x69\x63\x77\143\x67\x6d\x63\157\x69\x6d\161\145\151\x67\171\145"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto gcckqucukawcasgk; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto cuumeogeomowqisc; } Ajax::symcgieuakksimmu(); cuumeogeomowqisc: gcckqucukawcasgk: } }
