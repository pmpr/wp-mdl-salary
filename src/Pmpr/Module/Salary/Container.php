<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6ff0bed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const wyqmcowecikgawuu = "\x69\142\141\x6e"; const oogeqgcgkamuoaoe = "\x62\x61\x6e\x6b"; const wagwccqcqwgsoyoi = "\154\157\x63\x6b\x65\x64"; const cqkcksqwkcsiykuq = "\x65\x73\x63\141\x70\145\x64"; const kuwsqycgaagiimge = "\141\x63\x63\x6f\165\156\164"; const skyceaacaaaamiii = "\x64\145\142\x69\x74\137\143\x61\x72\x64"; const qagqayweyigciamg = "\163\141\154\x61\x72\171\137\x62\141\156\153\x5f\x61\x63\143\157\165\156\x74\x5f\x69\156\146\157\x72\x6d\141\164\x69\x6f\x6e"; const yuqaieqcaccggqck = "\143\x6f\x6c\x6c\141\142\x6f\162\x61\x74\157\x72"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if (!$oammesyieqmwuwyi) { goto wwkgkaecgiwggcck; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [self::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { goto kciouyuaqkyqomam; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if (!$eqgoocgaqwqcimie) { goto gygawoqywkukmqee; } $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; gygawoqywkukmqee: kciouyuaqkyqomam: sycygoiaiqqageym: } oouoqimaaqcmccay: wwkgkaecgiwggcck: return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if (!$qqswgiawgeaeoecu) { goto kiwqkcaekqqyuegq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto umgaesggesswoaqe; } $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); goto qsygcycwieukkgwc; umgaesggesswoaqe: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); qsygcycwieukkgwc: $isweyuoisomqyaag = [self::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, self::ssmskyqgcmeiayco => sprintf(__("\106\145\145\40\157\146\40\145\x61\x63\150\x20\x74\x72\141\x6e\163\141\x63\x74\151\x6f\x6e\x20\151\163\x20\x25\163", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; kiwqkcaekqqyuegq: return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true))) { goto gimmuoqwckiseaik; } $ccamueccusigaaio = $qqqskcogoyswqaum; goto quwcqmyokicssyew; gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, array $wwgucssaecqekuek = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\163", "\x6d\x73\x67"); return $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->ciuuiyckmsygceis($uamcoiueqaamsqma, []), $wwgucssaecqekuek); } }
