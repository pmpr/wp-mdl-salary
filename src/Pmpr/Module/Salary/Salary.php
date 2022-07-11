<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb93f61ab1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Model; use Pmpr\Module\Salary\Profile\Profile; class Salary extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\x61\154\141\x72\x79", PR__MDL__SALARY); }]); if (!$this->gmiyqqaekqcsoime()) { goto ygskksomysgaokek; } parent::__construct(); ygskksomysgaokek: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\x75\147\x69\156\163\137\154\157\141\144\145\x64", [$this, "\x69\x63\167\143\147\155\143\157\151\155\161\x65\151\x67\171\145"]); } public function icwcgmcoimqeigye() { if (!ManipulateWoocommerce::ayseokmqycoqaigc()) { goto qgkiguggkyiycwow; } User::symcgieuakksimmu(); Model::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto wwcwmkowgooocaem; } Ajax::symcgieuakksimmu(); wwcwmkowgooocaem: qgkiguggkyiycwow: } }
