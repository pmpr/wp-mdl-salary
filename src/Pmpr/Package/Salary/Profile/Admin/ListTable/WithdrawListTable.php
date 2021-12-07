<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe0f26121f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Package\Salary\Model\Withdraw; class WithdrawListTable extends ORMListTable { public function get_columns() : array { goto oegaywiwywuyksaq; imsgusweocmiyygi: ysaumykuimqigeqa: goto qwueqigcisoogaec; uiowwckamqucksim: if (!$meywaqqsugaoeyys instanceof Withdraw) { goto ysaumykuimqigeqa; } goto wscikmsmwmocsqeu; wscikmsmwmocsqeu: $oammesyieqmwuwyi = [$meywaqqsugaoeyys::BANK_ACCOUNT, $meywaqqsugaoeyys::AMOUNT => __("\x41\155\157\165\x6e\164", PR__PKG__SALARY), $meywaqqsugaoeyys::STATUS]; goto icawmkaswkmwicsa; oegaywiwywuyksaq: $wkkweuacukumqmya = []; goto eyskqaccgeomqmyw; icawmkaswkmwicsa: $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); goto imsgusweocmiyygi; eyskqaccgeomqmyw: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); goto uiowwckamqucksim; qwueqigcisoogaec: return $wkkweuacukumqmya; goto kmeekqukcecuscye; kmeekqukcecuscye: } }
