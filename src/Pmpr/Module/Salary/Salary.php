<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3192d4abf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\141\x6c\141\162\x79", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto kciouyuaqkyqomam; } parent::__construct(); kciouyuaqkyqomam: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\154\x75\147\151\x6e\163\137\x6c\x6f\x61\144\x65\144", [$this, "\151\x63\x77\x63\147\x6d\x63\157\x69\x6d\161\x65\151\147\x79\x65"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto umgaesggesswoaqe; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto wwkgkaecgiwggcck; } Ajax::symcgieuakksimmu(); wwkgkaecgiwggcck: umgaesggesswoaqe: } }
