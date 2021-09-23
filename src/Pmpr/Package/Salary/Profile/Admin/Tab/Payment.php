<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614ca04edad5c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\Tab; use Pmpr\Package\Salary\Model\Withdraw; use Pmpr\Package\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { goto casgoamcqkekgeeo; yseyyukqaowwouua: $this->title = __("\120\x61\x79\x6d\x65\156\x74\163", PR__PKG__SALARY); goto qcgyggiaowuqswuw; qcgyggiaowuqswuw: $this->priority = 20; goto sooecucuakgkuyis; casgoamcqkekgeeo: $this->id = "\160\141\171\x6d\145\156\164\x73"; goto yseyyukqaowwouua; sooecucuakgkuyis: parent::__construct(); goto ywqakqkmmcoceqka; ywqakqkmmcoceqka: } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
