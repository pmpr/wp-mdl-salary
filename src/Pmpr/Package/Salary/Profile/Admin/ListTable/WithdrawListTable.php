<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614ca04edad5c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Package\Salary\Model\Withdraw; class WithdrawListTable extends ORMListTable { public function get_columns() : array { goto ocmagamuyawyiyka; gwkawguwsamuomuo: oycuaqewsskgkqci: goto ucasigqmoiwaimkk; amqgiisymksuuuss: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); goto iwgmywqocewwgoeo; sgiouaqukyycswqm: $wkkweuacukumqmya = $this->ewgmueueeycoikso($oammesyieqmwuwyi); goto gwkawguwsamuomuo; iwgmywqocewwgoeo: if (!$meywaqqsugaoeyys instanceof Withdraw) { goto oycuaqewsskgkqci; } goto syoeqaqkseguwmgy; ocmagamuyawyiyka: $wkkweuacukumqmya = []; goto amqgiisymksuuuss; ucasigqmoiwaimkk: return $wkkweuacukumqmya; goto uugwmywmaqomeksa; syoeqaqkseguwmgy: $oammesyieqmwuwyi = [$meywaqqsugaoeyys::BANK_INFO, $meywaqqsugaoeyys::AMOUNT => __("\x41\155\157\165\156\164", PR__PKG__SALARY), $meywaqqsugaoeyys::STATUS]; goto sgiouaqukyycswqm; uugwmywmaqomeksa: } }
