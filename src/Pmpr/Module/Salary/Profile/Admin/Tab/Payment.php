<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626987ce52ae7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\x70\141\171\x6d\145\x6e\164\x73"; $this->title = __("\120\x61\171\x6d\x65\156\x74\163", PR__MDL__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
