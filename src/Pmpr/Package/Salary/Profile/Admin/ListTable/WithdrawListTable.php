<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Package\Salary\Model\Withdraw; class WithdrawListTable extends ORMListTable { public function get_columns() : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys instanceof Withdraw) { goto hoeeyiowekaeemko; } $oammesyieqmwuwyi = [$meywaqqsugaoeyys::BANK_INFO, $meywaqqsugaoeyys::AMOUNT => __("\x41\155\157\165\156\x74", PR__PKG__SALARY), $meywaqqsugaoeyys::STATUS]; $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); hoeeyiowekaeemko: return $wkkweuacukumqmya; } }
