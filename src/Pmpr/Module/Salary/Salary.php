<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b2e06609             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\x61\154\141\162\x79", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto egaymskkosukqeao; } parent::__construct(); egaymskkosukqeao: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x6c\x75\x67\151\x6e\x73\x5f\x6c\157\x61\x64\145\x64", [$this, "\x69\143\167\143\147\155\143\157\x69\x6d\x71\145\151\147\171\x65"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto kicwiowcogmauwiy; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto kaiesowkgwogqseg; } Ajax::symcgieuakksimmu(); kaiesowkgwogqseg: kicwiowcogmauwiy: } }
