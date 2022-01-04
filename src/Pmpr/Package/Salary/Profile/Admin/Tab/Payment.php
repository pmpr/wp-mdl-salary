<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45e1d991d2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\160\x61\171\x6d\145\x6e\x74\x73"; $this->title = __("\x50\141\x79\155\145\156\x74\163", PR__PKG__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
