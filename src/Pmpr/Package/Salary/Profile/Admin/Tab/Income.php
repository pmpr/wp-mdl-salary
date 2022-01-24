<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eef30c18127             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Package\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { $this->id = "\x69\x6e\x63\x6f\x6d\x65\x73"; $this->title = __("\111\x6e\x63\157\155\145\163", PR__PKG__SALARY); $this->priority = 10; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
