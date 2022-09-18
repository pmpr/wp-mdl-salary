<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275ca640d6a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\141\x6c\x61\x72\171", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto egaymskkosukqeao; } parent::__construct(); egaymskkosukqeao: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x6c\x75\x67\151\x6e\x73\137\x6c\x6f\141\144\145\x64", [$this, "\x69\x63\x77\143\147\x6d\x63\x6f\x69\x6d\161\145\x69\147\x79\145"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto kicwiowcogmauwiy; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto kaiesowkgwogqseg; } Ajax::symcgieuakksimmu(); kaiesowkgwogqseg: kicwiowcogmauwiy: } }
