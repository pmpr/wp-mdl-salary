<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f36b61d79             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\x70\x61\x79\155\145\x6e\164\x73"; $this->title = __("\x50\141\x79\x6d\x65\156\x74\x73", PR__PKG__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
