<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6797767398cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Module\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { $this->id = "\x69\x6e\x63\157\x6d\x65\163"; $this->title = __("\111\156\143\x6f\x6d\x65\x73", PR__MDL__SALARY); $this->priority = 10; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
