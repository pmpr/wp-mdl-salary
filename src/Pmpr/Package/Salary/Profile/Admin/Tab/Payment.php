<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eef30c18127             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\x70\141\171\x6d\145\x6e\164\x73"; $this->title = __("\x50\141\171\x6d\x65\x6e\164\x73", PR__PKG__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
