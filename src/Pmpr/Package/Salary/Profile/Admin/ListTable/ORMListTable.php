<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b5c854c9f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Builder; use Pmpr\Common\Foundation\ORM\View\ListTable; class ORMListTable extends ListTable { public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { goto ugswokwmkumcmigc; cigesysuauaiccms: return parent::before_pagination($siykeiywomwwuoiw); goto qumkwsqqocooyuoq; ugswokwmkumcmigc: if (!$siykeiywomwwuoiw) { goto qiaaqkymeuuueoqk; } goto gwiaimosqoiquwkc; owgakkqgckqcegoi: qiaaqkymeuuueoqk: goto cigesysuauaiccms; gwiaimosqoiquwkc: $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->wkmkqaiwuqouweye([self::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea()], $siykeiywomwwuoiw); goto owgakkqgckqcegoi; qumkwsqqocooyuoq: } public function get_bulk_actions() : array { return []; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { return ''; } protected function kgewmaycsoykyaso($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\144\x65\154\145\164\145"); return $ccowyogiqwikkkie; } public function ewgmueueeycoikso($oammesyieqmwuwyi) : array { goto asqqqqakiagymemk; yimeskeioamqmuwg: iyeswoaqkaeggiiy: goto yeemsgmumygmumqw; eacysqsegwcqawsa: $wkkweuacukumqmya[$meywaqqsugaoeyys::uuggswoqeiwaoawk] = __("\103\x72\x65\x61\164\x65\144\x20\x61\x74", PR__PKG__SALARY); goto yimeskeioamqmuwg; asqqqqakiagymemk: $wkkweuacukumqmya = []; goto jkgouewqysmscmqs; kceeuicccqscwgsu: foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $swaaugcasqkysckc) { goto wmaeicoyyciuaiuy; ooysmgyeqoiesgqm: if (is_numeric($momcykaoccoymeig)) { goto wsemeeocquawyauo; } goto kwoyiysciqumswcy; ayamomygygmgwgkg: $wkkweuacukumqmya[$momcykaoccoymeig] = $meqocwsecsywiiqs; goto gygqgauaceiuawkq; gygqgauaceiuawkq: kkewoqqowugagwoy: goto ucksaiwquekagyqe; gicmaqmuscawegie: wwswmaewcaisauei: goto oymyqcoekqyuiguq; oiiqqgyqmggyiums: $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($swaaugcasqkysckc); goto magymcqykamwqigw; aaogeemgkogagkai: goto ocgkwqqmgasuoies; goto qqmmycmsoqegcqqw; isqwwmikecauwyuc: $momcykaoccoymeig = $swaaugcasqkysckc; goto oiiqqgyqmggyiums; kwoyiysciqumswcy: $meqocwsecsywiiqs = $swaaugcasqkysckc; goto aaogeemgkogagkai; oymyqcoekqyuiguq: ocgkwqqmgasuoies: goto ayamomygygmgwgkg; magymcqykamwqigw: if (!$aiowsaccomcoikus) { goto wwswmaewcaisauei; } goto ukogwqiuuuakkawy; ukogwqiuuuakkawy: $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); goto gicmaqmuscawegie; wmaeicoyyciuaiuy: $meqocwsecsywiiqs = ''; goto ooysmgyeqoiesgqm; qqmmycmsoqegcqqw: wsemeeocquawyauo: goto isqwwmikecauwyuc; ucksaiwquekagyqe: } goto iquecygaakmiomeg; sgiuwkisugmewmcs: if (!$meywaqqsugaoeyys) { goto iyeswoaqkaeggiiy; } goto kceeuicccqscwgsu; yeemsgmumygmumqw: return $wkkweuacukumqmya; goto wkaoyycsoeoyqcae; jkgouewqysmscmqs: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); goto sgiuwkisugmewmcs; iquecygaakmiomeg: gcskyqewysqaceeg: goto eacysqsegwcqawsa; wkaoyycsoeoyqcae: } }
