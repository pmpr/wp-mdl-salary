<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c75b5887             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\141\154\141\162\171", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto uiosisocuwokwkie; } parent::__construct(); uiosisocuwokwkie: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\154\x75\147\x69\156\x73\137\154\x6f\141\x64\x65\144", [$this, "\x69\143\x77\143\x67\x6d\143\157\x69\x6d\161\x65\151\x67\x79\145"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto gcckqucukawcasgk; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto cuumeogeomowqisc; } Ajax::symcgieuakksimmu(); cuumeogeomowqisc: gcckqucukawcasgk: } }
