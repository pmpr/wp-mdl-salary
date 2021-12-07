<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe0f26121f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { goto iikgiaocummweiga; gsusqquicmukegcs: $this->title = __("\x50\141\171\x6d\x65\156\x74\x73", PR__PKG__SALARY); goto wcsysckgigeykkwy; iikgiaocummweiga: $this->id = "\x70\x61\171\155\x65\x6e\x74\163"; goto gsusqquicmukegcs; scgmwokeuqwiekkk: parent::__construct(); goto ceusyscosamyaiws; wcsysckgigeykkwy: $this->priority = 20; goto scgmwokeuqwiekkk; ceusyscosamyaiws: } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
