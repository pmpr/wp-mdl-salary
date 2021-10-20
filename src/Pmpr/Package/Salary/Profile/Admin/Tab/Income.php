<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe26895947             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Package\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { goto uugwmywmaqomeksa; mmmqqoemusicwgqg: $this->priority = 10; goto iquugwoswgkoiieg; iquugwoswgkoiieg: parent::__construct(); goto xogaycsaesgqeqig; wowmysuygugawmmu: $this->title = __("\111\x6e\143\157\x6d\145\x73", PR__PKG__SALARY); goto mmmqqoemusicwgqg; uugwmywmaqomeksa: $this->id = "\151\156\143\157\155\x65\163"; goto wowmysuygugawmmu; xogaycsaesgqeqig: } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
