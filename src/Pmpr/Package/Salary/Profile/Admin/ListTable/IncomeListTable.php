<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe26895947             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Package\Salary\Model\Income; class IncomeListTable extends ORMListTable { public function get_columns() : array { goto ceiwqkyquikcemmo; siecswkggyikqkga: uycesqqkoeamocgm: goto qkuiwoqksgayqqmg; wkgskiuiukiuyque: if (!$meywaqqsugaoeyys instanceof Income) { goto uycesqqkoeamocgm; } goto oyiuyywyeoskckuw; oyiuyywyeoskckuw: $oammesyieqmwuwyi = [$meywaqqsugaoeyys::ORDER, $meywaqqsugaoeyys::PRODUCT, $meywaqqsugaoeyys::AMOUNT, $meywaqqsugaoeyys::WITHDRAW_STATUS]; goto goqmywuiicciasyk; goqmywuiicciasyk: $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); goto siecswkggyikqkga; ukomuiwukymcoaso: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); goto wkgskiuiukiuyque; ceiwqkyquikcemmo: $wkkweuacukumqmya = []; goto ukomuiwukymcoaso; qkuiwoqksgayqqmg: return $wkkweuacukumqmya; goto easqmyamcmeesgya; easqmyamcmeesgya: } }
