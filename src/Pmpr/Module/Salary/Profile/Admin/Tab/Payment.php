<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c75b5887             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\x70\x61\x79\155\x65\156\164\x73"; $this->title = __("\120\x61\171\155\x65\x6e\x74\x73", PR__MDL__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
