<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b4b8596610             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\x61\154\x61\x72\x79", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto egaymskkosukqeao; } parent::__construct(); egaymskkosukqeao: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x6c\x75\x67\x69\x6e\x73\x5f\x6c\x6f\x61\144\x65\144", [$this, "\x69\x63\167\x63\147\155\143\157\151\155\x71\x65\x69\x67\x79\x65"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto kicwiowcogmauwiy; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto kaiesowkgwogqseg; } Ajax::symcgieuakksimmu(); kaiesowkgwogqseg: kicwiowcogmauwiy: } }
