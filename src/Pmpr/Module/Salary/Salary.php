<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639786521a0b5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\141\154\x61\162\171", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto uiosisocuwokwkie; } parent::__construct(); uiosisocuwokwkie: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x6c\165\147\151\x6e\x73\x5f\x6c\157\x61\144\145\x64", [$this, "\x69\x63\167\x63\x67\155\143\x6f\x69\x6d\x71\x65\x69\147\171\x65"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto gcckqucukawcasgk; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto cuumeogeomowqisc; } Ajax::symcgieuakksimmu(); cuumeogeomowqisc: gcckqucukawcasgk: } }
