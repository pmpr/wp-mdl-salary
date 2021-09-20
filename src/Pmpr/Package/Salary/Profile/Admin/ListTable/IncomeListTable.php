<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Package\Salary\Model\Income; class IncomeListTable extends ORMListTable { public function get_columns() : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys instanceof Income) { goto ywqgcegomwaiuquc; } $oammesyieqmwuwyi = [$meywaqqsugaoeyys::ORDER, $meywaqqsugaoeyys::PRODUCT, $meywaqqsugaoeyys::AMOUNT, $meywaqqsugaoeyys::WITHDRAW_STATUS]; $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); ywqgcegomwaiuquc: return $wkkweuacukumqmya; } }
