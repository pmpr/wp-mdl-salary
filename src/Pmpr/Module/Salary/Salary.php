<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\x61\154\x61\162\171", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto ygskksomysgaokek; } parent::__construct(); ygskksomysgaokek: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x6c\x75\x67\x69\x6e\163\137\x6c\x6f\141\x64\145\x64", [$this, "\x69\143\x77\x63\147\x6d\x63\x6f\x69\x6d\x71\x65\151\147\x79\145"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto qgkiguggkyiycwow; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto wwcwmkowgooocaem; } Ajax::symcgieuakksimmu(); wwcwmkowgooocaem: qgkiguggkyiycwow: } }
