<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106675a767             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Withdraw; class WithdrawListTable extends ORMListTable { public function get_columns() : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys instanceof Withdraw) { $oammesyieqmwuwyi = [$meywaqqsugaoeyys::wecooowsgcqkcoce, Constants::aioqyewkwawaqgqe => __('Amount', PR__MDL__SALARY), Constants::ciywsqoeiymemsys]; $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); } return $wkkweuacukumqmya; } }
