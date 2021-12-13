<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74eed53fe1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { goto usosooekkcgwmgkq; usosooekkcgwmgkq: $this->id = "\160\x61\x79\x6d\x65\156\x74\163"; goto eocusimsawyoyaas; eocusimsawyoyaas: $this->title = __("\x50\141\171\155\x65\x6e\x74\163", PR__PKG__SALARY); goto seasiecgqussuqkw; geacgaisikkgqosu: parent::__construct(); goto aqykwekaooeoqgoa; seasiecgqussuqkw: $this->priority = 20; goto geacgaisikkgqosu; aqykwekaooeoqgoa: } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
